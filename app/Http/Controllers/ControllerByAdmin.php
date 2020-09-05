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

        $data['list'] = $tourGuide_list->paginate(10);
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


        $newTourGuide = new TourGuide;
        $newTourGuide->account_id = $account->id;
        $newTourGuide->full_name = $acceptTourGuide->full_name;
        $newTourGuide->year_of_birth = $acceptTourGuide->year_of_birth;
        $newTourGuide->phone = $acceptTourGuide->phone;
        $newTourGuide->email = $acceptTourGuide->email;
        $newTourGuide->description = $acceptTourGuide->description;
        $newTourGuide->avatar = $acceptTourGuide->avatar;
        $newTourGuide->card = $acceptTourGuide->card;
        $newTourGuide->mc_gala_dinner = $acceptTourGuide->mc_gala_dinner;
        $newTourGuide->team_building = $acceptTourGuide->team_building;
        $newTourGuide->status = 2;
        $newTourGuide->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $newTourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $newTourGuide->price = 0;
        $newTourGuide->save();

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
        dd($tourGuide);
        $tourGuide->status = 0;
        $tourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $tourGuide->update();
        return redirect('/admin/tourGuides');
    }


    function showTourGuideDetail($id)
    {
        $tourGuide = TourGuide::find($id);
        return view('admin.tourGuides-detail')->with('item', $tourGuide);
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
        $transactions_list = Transaction::query();
        // lọc theo areas
        if ($request->has('chosen_area_id') && $request->get('chosen_area_id') != 0) {
            $data['chosen_area'] = $request->get('chosen_area_id');

            $transactions_list = $transactions_list->where('province_id', '=', $request->get('chosen_area_id'));

        }

        if ($request->has('order_by') && strlen($request->get('order_by')) > 0) {

            $data['order_by'] = $request->get('order_by');
            $transactions_list = $transactions_list->orderBy('created_at');

        }

        $data['list'] = $transactions_list->paginate(10);
        $data['areas'] = $areas;
        return view('admin.transactions-manager')
            ->with($data);


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
