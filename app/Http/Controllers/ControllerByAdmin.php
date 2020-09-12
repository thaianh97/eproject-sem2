<?php

namespace App\Http\Controllers;

use App\Account;
use App\Area;
use App\Customer;
use App\Http\Controllers\Controller;
use App\NewTourGuideRegister;
use App\TourGuide;
use App\TourGuideArea;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ControllerByAdmin extends Controller
{
    public function adminHome()
    {
        return view('admin.business');
    }

    public function listCustomers()
    {
        $data = array();
        $customers_list = Customer::query();

        $data['list'] = $customers_list->paginate(10);
        return view('admin.customers-manager')
            ->with($data);
    }

    public function listAreas()
    {
        $data = array();
        $data['listTrung'] = Area::query()->where('region', '=', 'Trung')->get();
        $data['listBac'] = Area::query()->where('region', '=', 'Bắc')->get();
        $data['listNam'] = Area::query()->where('region', '=', 'Nam')->get();
        return view('admin.areas-manager')
            ->with($data);
    }

    public function listTourGuides(Request $request)
    {
        $data = array();
        $data['chosen_area'] = 0;
        $data['keyword'] = '';
        $areas = DB::table('areas')->get();
        $tourGuide_list = TourGuide::query();
        // lọc theo areas
        if ($request->has('chosen_area_id') && $request->get('chosen_area_id') != 0) {
            $data['chosen_area'] = $request->get('chosen_area_id');
            $tourGuide_areas = TourGuideArea::query();
            $list_an_area = $tourGuide_areas->where('area_id', '!=', $request->get('chosen_area_id'))->get();
            foreach ($list_an_area as $item) {
                $tourGuide_list = $tourGuide_list->where('id', '!=', $item->guide_id);
            }
            if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
                $data['keyword'] = $request->get('keyword');
                $tourGuide_list = $tourGuide_list->where('full_name', 'like', '%' . $request->get('keyword') . '%');
                $tourGuide_list = $tourGuide_list->where('id', 'like', '%' . $request->get('keyword') . '%');
                $tourGuide_list = $tourGuide_list->where('phone', 'like', '%' . $request->get('keyword') . '%');
                $tourGuide_list = $tourGuide_list->where('email', 'like', '%' . $request->get('keyword') . '%');
            }
            $data['list'] = $tourGuide_list->get();
            $data['list'] = $tourGuide_list->paginate(10);
            $data['areas'] = $areas;
            return view('admin.tourGuides-manager')->with($data);
        }

        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {

            $data['keyword'] = $request->get('keyword');
            $tourGuide_list = $tourGuide_list->where('full_name', 'like', '%' . $request->get('keyword') . '%');
//            $tourGuide_list = $tourGuide_list->where('id', 'like', '%' . $request->get('keyword') . '%');
//            $tourGuide_list = $tourGuide_list->where('phone', 'like', '%' . $request->get('keyword') . '%');
//            $tourGuide_list = $tourGuide_list->where('email', 'like', '%' . $request->get('keyword') . '%');
        }

        $data['list'] = $tourGuide_list->orderBy('created_at')->paginate(10);
        $data['areas'] = $areas;
        return view('admin.tourGuides-manager')
            ->with($data);


    }

    function newTourGuides()
    {
        $data = array();
        $tourGuide_list = NewTourGuideRegister::query();
        $tourGuide_list = $tourGuide_list->where('status', '=', 0);
        $data['list'] = $tourGuide_list->paginate(10);

        return view('admin.new-tourGuide')
            ->with($data);
    }

    function showNewTourGuideDetail($id)
    {
        $new_tourGuides = NewTourGuideRegister::find($id);
        return view('admin.new-tourGuide-info')->with('item', $new_tourGuides);
    }

    function sendMailToNewTourGuide($id)
    {

        return view('admin.send-mail')->with('id', $id);
    }

    function acceptNewTourGuide(Request $request, $id)
    {
        // tạo mảng chứa dữ liệu
        //lấy ra pending dc duệy
        $acceptTourGuide = NewTourGuideRegister::find($id);
        //update pending tourguid trong db
        $acceptTourGuide->status = 1;
        $acceptTourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        //tạo tk mới cho hdv
        $newAccount = new Account();
        $newAccount->username = $acceptTourGuide->userName;

        $salt = $this->generateRandomString(6);

        //get OTP pwd
        $ramdomPassword = $this->generateRandomString(6); //todo: lưu vào db

        $newAccount->salt = $salt;
        $newAccount->password_hash = md5($ramdomPassword . $salt);
        $newAccount->role = 2; // 2 là hướng dẫn viên
        $newAccount->status = 1; // status = 1 ?
        $newAccount->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $newAccount->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $newAccount->save(); // có 1 tài khoản trong bảng account

        //từ tài khoản vừa tạp update thông tin trong bảng tourguide
        $account = Account::where('username', '=', $acceptTourGuide->userName)->first();

        //tao tour guide mới
        $newTourGuide = new TourGuide;
        $newTourGuide->account_id = $account->id;
        $newTourGuide->full_name = $acceptTourGuide->full_name;
        $newTourGuide->year_of_birth = $acceptTourGuide->year_of_birth;
        $newTourGuide->phone = $acceptTourGuide->phone;
        $newTourGuide->email = $acceptTourGuide->email;
        $newTourGuide->gender = $acceptTourGuide->gender;
        $newTourGuide->description = $acceptTourGuide->description;
        $newTourGuide->avatar = $acceptTourGuide->avatar;
        $newTourGuide->card = $acceptTourGuide->card;
        $newTourGuide->mc_gala_dinner = $acceptTourGuide->mc_gala_dinner;
        $newTourGuide->team_building = $acceptTourGuide->team_building;
        $newTourGuide->status = 2;
        $newTourGuide->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $newTourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        //tính giá
        $price = 200000;
        if($acceptTourGuide->mc_gala_dinner == 1) {
            $price += 100000;
        }
        if($acceptTourGuide->team_buiding == 1) {
            $price += 140000;
        }
        if($acceptTourGuide->card == 1) {
            $price += 120000;
        }
        $newTourGuide->price = $price;

        $newTourGuide->save();
        //save area
        $tourGuideArea = new TourGuideArea();
        $tourGuideArea->area_id = $acceptTourGuide->area_id;
        $tourGuideArea->guide_id = $newTourGuide->id;
        $tourGuideArea->save();
        // send email to tourGuide
        $data = array(
            'username' => $acceptTourGuide->userName,
            "otp" => $ramdomPassword,
            "name" => $acceptTourGuide->full_name,
            "to" => $acceptTourGuide->email
        );
        Mail::send('mail.email', $data, function ($message) use ($acceptTourGuide) {

            $message->to($acceptTourGuide->email, $acceptTourGuide->name)->subject('Hồ sơ đã được duyệt');
            $message->from('hdv247@gmail.com', 'Hướng Dẫn Viên 427');

        });
        //update status của pending tourguide
        $acceptTourGuide->update();
        return redirect("admin/new-tourGuide");
    }


    public function deActiveTourGuide($id)
    {
        $tourGuide = TourGuide::find($id);
        $tourGuide_status = $tourGuide->status;

        $account = Account::find($tourGuide->account_id);
        $account_status = $account->status;



        if($account_status == 1){
            $account->status = 0;
            $account->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $account->update();
            // gửi mail về hdv bao no đã bị khóa mõm
            $data = array(
                'username' => $tourGuide->userName,
                "name" => $tourGuide->full_name,
                "to" => $tourGuide->email
            );
            Mail::send('mail.cancel.sendToCus-payPending', $data, function ($message) use ($tourGuide) {

                $message->to($tourGuide->email, $tourGuide->full_name)->subject('Mày đã bị khóa mõm');
                $message->from('hdv247@gmail.com', 'Hướng Dẫn Viên 427');

            });
          if($tourGuide_status == 1){
              $tourGuide->status =0;
              $tourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
              $tourGuide->update();
          }
            $transDetail_list = DB::table('transaction_details')->where('guide_id' ,'=',$id)->get();

            $transDetail_list = $transDetail_list->where('status','!=',6)
                ->where('status','!=',5)
                ->where('status','!=',4);
            foreach ($transDetail_list as   $transDetail){
                $transaction = Transaction::find($transDetail->transaction_id);
                $customer = Customer::find($transaction->customer_id);
                if($transDetail->status == 1){
                    $data = array(
                        'username' => $customer->userName,
                        "name" => $customer->full_name,
                        "to" => $customer->email
                    );
                    Mail::send('mail.cancel.sendToCus-payPending', $data, function ($message) use ($customer,$tourGuide,$transaction) {

                        $message->to($customer->email, $customer->full_name)->subject('Hdv '.$tourGuide->full_name.' ko nhận tour '.$transaction->id);
                        $message->from('hdv247@gmail.com', 'Hướng Dẫn Viên 427');

                    });
                }elseif ($transDetail->status == 2){
                    $data = array(
                        'username' => $customer->userName,
                        "name" => $customer->full_name,
                        "to" => $customer->email,
                        "guide_name" => $tourGuide->full_name
                    );
                    Mail::send('mail.cancel.sendToCus-payPending', $data, function ($message) use ($customer,$tourGuide,$transaction) {

                        $message->to($customer->email, $customer->full_name)->subject('Hdv '.$tourGuide->full_name.' ko nhận tour '.$transaction->id);
                        $message->from('hdv247@gmail.com', 'Hướng Dẫn Viên 427');

                    });
                    //to do Hoàn tiền hay gì đó
                }elseif ($transDetail->status == 3){
                    $data = array(
                        'username' => $customer->userName,
                        "name" => $customer->full_name,
                        "to" => $customer->email,
                        "guide_name" => $tourGuide->full_name
                    );
                    Mail::send('mail.cancel.sendToCus-payPending', $data, function ($message) use ($customer,$tourGuide,$transaction) {

                        $message->to($customer->email, $customer->full_name)->subject('Hdv '.$tourGuide->full_name.' ko nhận tour '.$transaction->id);
                        $message->from('hdv247@gmail.com', 'Hướng Dẫn Viên 427');

                    });
                }

//update trang thai transaction detail ve huy
                $transactionUpdate = TransactionDetail::find($transDetail->id);
                $transactionUpdate->status = 6;
                $transactionUpdate->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                $transactionUpdate->update();

            }


        }elseif($tourGuide_status == 0 && $account_status == 0){
            $account->status = 1;
            $account->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $account->update();
        }

        return redirect('/admin/tourGuides');

    }


    function showTourGuideDetail($id)
    {
        $data =array();
        $tourGuide = TourGuide::find($id);
        //get logged in tourguide
        $currentAccount = Account::find($tourGuide->account_id);
        //get list transaction details of this tour guide
        $listTransactionDetails = DB::table('transaction_details')->paginate(5);
//        dd($listTransactionDetails);
//        $listTransactionDetails = $listTransactionDetails->where('guide_id','=',$tourGuide->id)
//                                                         ->where("status" ,"=!", 6);

        $areas = TourGuideArea::query();
        $areas = $areas->where('guide_id' ,'=',$tourGuide->id);
        $data['info'] = $tourGuide;
        $data['acc_status'] = $currentAccount->status;
        $data['listTransactionDetails'] = $listTransactionDetails;
        $data['areas'] = $areas->get();
        return view('admin.tourGuides-detail')->with($data);
    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function listTransactions(Request $request)
    {

        $data = array();
        $data['chosen_area'] = 0;
        $data['order_by'] = '';
        $areas = DB::table('areas')->get();
        $transactions_list = Transaction::query()->orderBy('created_at');
        // lọc theo areas

//        if ($request->has('order_by') && strlen($request->get('order_by')) > 0) {
//            $data['order_by'] = $request->get('order_by');
//            $transactions_list = $transactions_list->orderBy('created_at');
//        }

        $data['list'] = $transactions_list->paginate(10);
        $data['areas'] = $areas;
        return view('admin.transactions-manager')
            ->with($data);


    }

    function listPayPendingTransactions(Request $request){
        $data = array();
        $transactions_list = TransactionDetail::query();
        $transactions_list = $transactions_list->where('status','=',2);
        $data['list'] = $transactions_list->paginate(10);
        return view('admin.pay-pending-transactions')
            ->with($data);

    }

    function acceptPaidTransactionDetail($id){

        $tranDetail = TransactionDetail::find($id);
        $tranDetail->status = 3 ;
        $tranDetail->update();
        $tourGuide = TourGuide::find($tranDetail->guide_id);
        $transaction = Transaction::find($tranDetail->transaction_id);
        $customer = Customer::find($transaction->customer_id);
        $data = array(
            "name" => $tourGuide->full_name,
            "to" => $tourGuide->email,
        );

        Mail::send('mail.cancel.sendToTourGuide-paidTour', $data, function ($message) use ($customer,$tourGuide,$tranDetail) {

            $message->to($tourGuide->email, $tourGuide->full_name)->subject('Khách hàng Đã thanh toán tour '.$tranDetail->id);
            $message->from('hdv247@gmail.com', 'Hướng Dẫn Viên 427');

        });

        $data = array(
            'username' => $customer->userName,
            "name" => $customer->full_name,
            "to" => $customer->email,
            "guide_name" => $tourGuide->full_name
        );
        Mail::send('mail.cancel.sendToCus-payPending', $data, function ($message) use ($customer,$tourGuide,$transaction) {

            $message->to($customer->email, $customer->full_name)->subject('Tour  '.$transaction->id.'của bạn đã được xác nhận thanh toán :');
            $message->from('hdv247@gmail.com', 'Hướng Dẫn Viên 427');

        });

        return redirect('/admin/pay-accept-transactionDetails');


    }

    function showTransactionDetail($id)
    {
        $data = array();
        $trans_id = $id;
        $details_list = TransactionDetail::query();
        $details_list =$details_list->where('transaction_id','=',$trans_id);
        $data['list'] = $details_list->get();
        return view('admin.transaction-detail')->with($data);
    }
}
