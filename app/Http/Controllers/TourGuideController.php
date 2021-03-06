<?php

namespace App\Http\Controllers;

use App\Account;
use App\Area;
use App\Customer;
use App\TimeFormatHelper;
use App\TourGuide;
use App\TourGuideArea;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TourGuideController extends Controller
{
    public function getTourGuideLayout()
    {
        return view(('layout.tourGuide-layout'));
    }


    public function timeFilter(Request $request, $id)
    {
        $data = array();
        $data['result'] = true;// hdv có rảnh trong tg start , end hay không
        $tourGuide_list = TourGuide::query();
        if ($request->has('start') && strlen($request->get('start')) > 0 &&
            $request->has('end') && strlen($request->get('end')) > 0) {

            $data['guide_id'] = $id;
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');

            $from = TimeFormatHelper::formatStringToSqlDate($data["start"]);
            $to = TimeFormatHelper::formatStringToSqlDate($data["end"]);
            $tourGuide_list = $tourGuide_list->whereNotIn('id', TransactionDetail::select('guide_id')
                ->where(function ($query) use ($from, $to) {
                    $query->where([
                        ['start', '<', $from],
                        ['end', '<', $to]
                    ])->orWhere([
                        ['start', '>', $from],
                        ['end', '>', $to]
                    ]);
                }));
            $this_guide = $tourGuide_list->find($id);
            if ($this_guide != null) {
                $data['result'] = false;
            }
        }

        $data['list'] = $tourGuide_list->get();
        return view('customer.find-tourguide')
            ->with($data);
    }


    public function filter(Request $request)
    {
        // tạo biến data là một mảng chứa dữ liệu trả về.
        $data = array();
        $data['area_id'] = 0;
        $data['chosen_area'] = null;
        $areas = DB::table('areas')->get();
        $tourGuide_list = TourGuide::query();

        if ($request->has('area_id') && $request->get('area_id') != 0) {

            $chosen_area_id = $request->get('area_id');
            $data['chosen_area'] = Area::find($chosen_area_id);
            $tourGuide_areas = TourGuideArea::query();
            $list_an_area = $tourGuide_areas->where('area_id', '!=', $request->get('area_id'))->get();

            foreach ($list_an_area as $item) {
                $tourGuide_list = $tourGuide_list->where('id', '!=', $item->guide_id);
            }
        }


        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $tourGuide_list = $tourGuide_list->whereNotIn('id', TransactionDetail::select('guide_id')
                ->where(function ($query) use ($from, $to) {
                    $query->where([
                        ['start', '<', $from],
                        ['end', '<', $to]
                    ])->orWhere([
                        ['start', '>', $from],
                        ['end', '>', $to]
                    ])->where("status", 3)->orWhere("status", "4")->orWhere("status", 6); //status 3,4,6 ==> in tour or deleted
                }))->where("status", '=', 1);
        }
        $data['list'] = $tourGuide_list->get();
        $data['areas'] = $areas;
        //flash filter time
        $request->session()->flash("filter-start", $data["start"]);
        $request->session()->flash("filter-end", $data["end"]);
        return view('customer.find-tourguide')
            ->with($data);
    }


    function editInfo()
    {
        $data =array();
        $acc_id = session('id');
        $tourGuide = TourGuide::query()->where("account_id", $acc_id)->first();
        $list_areas = TourGuideArea::query()->where('guide_id',$tourGuide->id);
        $data['list_areas'] =$list_areas;
        $data['tourGuide'] =$tourGuide;
        return view('tourGuide.edit-info')->with($data);
    }


    function submitNewInfo(Request $request)
    {
        $acc_id = session('id');
        $tourGuide = TourGuide::query();
        $this_tourGuide = $tourGuide->where('account_id', '=', $acc_id)->first();
        $this_tourGuide->full_name = $request->get('full_name');
        $this_tourGuide->price = $request->get('price');
        $this_tourGuide->year_of_birth = $request->get('year_of_birth');
        $this_tourGuide->phone = $request->get('phone');
        $this_tourGuide->email = $request->get('email');
        $this_tourGuide->description = $request->get('description');
        $this_tourGuide->mc_gala_dinner = $request->get('mc_gala_dinner');
        $this_tourGuide->team_building = $request->get('team_building');
        $this_tourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $thumbnails = $request->get('thumbnails');
        dd($thumbnails);
        foreach ($thumbnails as $thumbnail) {
            $this_tourGuide->avatar = $thumbnail;
        }
        $this_tourGuide->update();

        return redirect('/tourGuide');
    }

    function update(Request $request)
    {

        $this_tourGuide = DB::table('tourGuides')->where('id', '=', 1)->first();
        $this_tourGuide->full_name = $request->get('full_name');
        $this_tourGuide->price = $request->get('price');
        $this_tourGuide->year_of_birth = $request->get('year_of_birth');
        $this_tourGuide->phone = $request->get('phone');
        $this_tourGuide->email = $request->get('email');
        $this_tourGuide->description = $request->get('description');
        $this_tourGuide->mc_gala_dinner = $request->get('mc_gala_dinner');
        $this_tourGuide->team_building = $request->get('team_building');
        $this_tourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $this_tourGuide->update();

        return 'ok';

//        return redirect('');
    }


    function calender()
    {

        $currentTourGuide = TourGuide::where("account_id", session("id"))->first();

        $transDetails_list = TransactionDetail::query()
            ->where('guide_id', $currentTourGuide->id)
            ->where("status", "!=", 6)
            ->get();
        return view('tourguide.tourGuide-home')->with("listTransactions", $transDetails_list);
    }

    public function index()
    {
        // lấy hết các hdv theo thứ tứ mới nhất + phân trang
        $listTourGuides = TourGuide::query();
        $activeTourGuides = $listTourGuides->where("status", "!=", 0)->orderBy("created_at", "desc")->paginate(6);
        //trả về view
        return view("customer.list-tourguides")->with("list", $activeTourGuides);

    }


    public function show($id)
    {


        $tourGuide = TourGuide::find($id);
        if ($tourGuide->status == 3) {
            return redirect()->back();
        }
        //find related tour Guide
        $listTourGuideArea = $tourGuide->tourGuideAreas;
        $listRelatedAreaID = array();
        foreach ($listTourGuideArea as $tourGuideArea) {
            array_push($listRelatedAreaID, $tourGuideArea->area_id);
        }
        $listRelatedTourGuideId = array();
        foreach ($listRelatedAreaID as $area_id) {
            $listRelatedTourGuideArea = TourGuideArea::query()->where("area_id", $area_id)->get();
            foreach ($listRelatedTourGuideArea as $relatedTourGuideArea) {
                if ($relatedTourGuideArea->guide_id != $id) {
                    array_push($listRelatedTourGuideId, $relatedTourGuideArea->guide_id);
                }
            }
        }
        $data = array();
        $data["obj"] = $tourGuide;
        $data["relatedTourGuideId"] = $listRelatedTourGuideId;
        return view("customer.tourGuide-detail")->with($data);


    }


    function showPendingTours()
    {
        $data = array();
        $currentAccount = Account::query()->where("username", session("username"))->first();
        $currentTourGuide = TourGuide::query()->where("account_id", $currentAccount->id)->first();

        $today = Carbon::now();


        //get list transaction details of this tour guide
        $listTransactionDetails = $currentTourGuide->transactionDetails->where("status", "!=", 1)
            ->where("status", "!=", 5)
            ->where("status", "!=", 6);
        $data['today'] = $today;
        $data['listTransaction'] = $listTransactionDetails;

        return view('tourguide.pending-orders-manager')->with($data);

    }

    function showTourDetails($id)
    {
        $transactionDetail = TransactionDetail::find($id);
        $transaction = Transaction::find($transactionDetail->transaction_id);
        $customer = Customer::find($transaction->customer_id);
        $data = array();
        if ($transactionDetail->status != 2) {
            $data["customer"] = $customer;
        }


        $data["transaction"] = $transaction;
        $data["status"] = $transactionDetail->status;


        return view("tourguide.tour-detail-status")->with($data);
    }

    function tourNextStep($id)
    {

        $transDetail_list = TransactionDetail::query();
        $transDetail = TransactionDetail::find($id);
        $today = Carbon::now();;
        $startTime = date_create($transDetail->start);
        $endTime = date_create($transDetail->end);

        $diff1 = date_diff($today, $startTime, true);
        $diff2 = date_diff($today, $endTime, true);


        if ($transDetail->status == 3 && $diff1->format("%a") == "0") {
            $transDetail->status = 4;
        } elseif ($transDetail->status == 4 && $diff2->format("%a") == "0") {
            $transDetail->status = 5;
        }
        $transDetail->update();
        return redirect("/tourGuide/tours");
    }

    public function showNewOrders()
    {
        //get logged in tourguide
        $currentAccount = Account::query()->where("username", session("username"))->first();
        $currentTourGuide = TourGuide::query()->where("account_id", $currentAccount->id)->first();

        //get list transaction details of this tour guide
        $listTransactionDetails = $currentTourGuide->transactionDetails->where("status", "=", 1);


        return view('tourguide.new-orders')->with("listTransaction", $listTransactionDetails);
    }


    public function acceptOrder($id)
    {
        //get accepted order
        $acceptOrder = TransactionDetail::find($id);
        //get current tourGuide
        $currentAccount = Account::query()->where("username", session("username"))->first();
        $currentTourGuide = TourGuide::query()->where("account_id", $currentAccount->id)->first();
        //getUser
        $customer = Customer::find($acceptOrder->transaction->customer_id);

        //todo: check exprired time and status
        if ($acceptOrder->status == 6) {
            return "yêu cầu đã bị hủy";
        } //cancel
        //chuyển trạng thái order
        $acceptOrder->status = 2; // chờ thanh toán
        $acceptOrder->save();
        //send mail to user
        $data = array();
        $data["tourGuide"] = $currentTourGuide;
        $data["customer"] = $customer;
        $data["province"] = Area::find(Transaction::find($acceptOrder->transaction_id)->province_id)->province;
        $data["tourGuide"] = $currentTourGuide;
        $data["transactionDetail"] = $acceptOrder;
        Mail::send('mail.order-accepted', $data, function ($message) use ($acceptOrder, $customer) {
            $message->to($customer->email,
                'Tutorials Point')->subject('Yêu cầu số ' . $acceptOrder->id . " đã được hdv chấp nhận");
            $message->from('huongdanvien247@gmail.com', 'TConnect');
        });
        return redirect("/tourGuide/new-orders");
    }

    function refuseOrder($id)
    {
        //get accepted order
        $acceptOrder = TransactionDetail::find($id);
        //get current tourGuide
        $currentAccount = Account::query()->where("username", session("username"))->first();
        $currentTourGuide = TourGuide::query()->where("account_id", $currentAccount->id)->first();
        //getUser
        $customer = Customer::find($acceptOrder->transaction->customer_id);

        //todo: check exprired time and status
        if ($acceptOrder->status == 6) {
            return "yêu cầu đã bị hủy";
        } //cancel
        //chuyển trạng thái order
        $acceptOrder->status = 6; // chờ thanh toán
        $acceptOrder->save();
        //send mail to user
        $data = array();
        $data["tourGuide"] = $currentTourGuide;

        Mail::send('mail.order-accepted', $data, function ($message) use ($acceptOrder, $customer) {
            $message->to($customer->email,
                'Tutorials Point')->subject('Yêu cầu số ' . $acceptOrder->id . " đã bị hdv từ chối");
            $message->from('huongdanvien247@gmail.com', 'TConnect');
        });
        return redirect("/tourGuide/new-orders");

    }

    function tourCancel($id)
    {
        //get accepted order
        $acceptOrder = TransactionDetail::find($id);
        //get current tourGuide
        $currentAccount = Account::query()->where("username", session("username"))->first();
        $currentTourGuide = TourGuide::query()->where("account_id", $currentAccount->id)->first();
        //getUser
        $customer = Customer::find($acceptOrder->transaction->customer_id);

        //todo: check exprired time and status
        if ($acceptOrder->status == 6) {
            return "yêu cầu đã bị hủy";
        } //cancel
        //chuyển trạng thái order
        $acceptOrder->status = 6; // chờ thanh toán
        $acceptOrder->save();
        //send mail to user
        $data = array();
        $data["tourGuide"] = $currentTourGuide;
        Mail::send('mail.order-accepted', $data, function ($message) use ($acceptOrder, $customer) {
            $message->to($customer->email,
                'Tutorials Point')->subject('Yêu cầu số ' . $acceptOrder->id . " đã bị hdv huy");
            $message->from('huongdanvien247@gmail.com', 'TConnect');
        });
        return redirect("/tourGuide/tours");
    }


    function changeStatus($id)
    {
        $tourGuide = TourGuide::find($id);

        if ($tourGuide->status == 1) {
            $tourGuide->status = 0;
        } elseif ($tourGuide->status == 0) {
            $tourGuide->status = 1;
        }
        $tourGuide->update();

        return redirect('/tourGuide/edit-info');

    }

}
