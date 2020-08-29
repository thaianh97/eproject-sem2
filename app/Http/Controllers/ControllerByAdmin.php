<?php

namespace App\Http\Controllers;

use App\Account;
use App\Area;
use App\Customer;
use App\Http\Controllers\Controller;
use App\NewTourGuideRegister;
use App\TourGuide;
use App\TourGuideArea;
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

    function newTourGuides(){
        $data = array();
        $tourGuide_list = NewTourGuideRegister::query() ;
        $tourGuide_list = $tourGuide_list->where('status', '=', 1);
        $data['list'] = $tourGuide_list->paginate(10);

        return view('admin.new-tourGuide')
            ->with($data);
    }

    function acceptNewTourGuide(Request $request){

        $data = array();
        $id = $request->get('id');
        $newInfoTourGuides_list= NewTourGuideRegister::query();
        $newInfoTourGuide = $newInfoTourGuides_list->where('id','=',$id)->first();
        $newInfoTourGuide->status= 0;
        $newInfoTourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $newInfoTourGuide->update();

        $newAccount =  new Account();
        $newAccount->username = $newInfoTourGuide->get('userName');
        $salt = $this->generateRandomString(6);
        $ramdomPassword = $this->generateRandomString(6);
        $newAccount->password_hash = md5($ramdomPassword.$salt);
        $newAccount->role = 2;
        $newAccount->status = 1;
        $newAccount->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $newAccount->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $newAccount->save();

        $account = Account::query()->where('username','=',$newAccount->username)->first();
        $newTourGuide = new TourGuide;
        $newTourGuide->account_id = $account->get('id');
        $newTourGuide->full_name = $newInfoTourGuide->get('fullName');
        $newTourGuide->year_of_birth = $newInfoTourGuide->get('year_of_birth');
        $newTourGuide->phone = $newInfoTourGuide->get('phone');
        $newTourGuide->email = $newInfoTourGuide->get('email');
        $newTourGuide->description = $newInfoTourGuide->get('description');
        $newTourGuide->avatar = $newInfoTourGuide->get('avatar');
        $newTourGuide->card = $newInfoTourGuide->get('card');
        $newTourGuide->mc_gala_dinner = $newInfoTourGuide->get('mc_gala_dinner');
        $newTourGuide->team_building = $newInfoTourGuide->get('team_building');
        $newTourGuide->status = 2;
        $newTourGuide->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $newTourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $newTourGuide->save();

        // to do send email to tourGuide

        $tourGuide_list = NewTourGuideRegister::query() ;
        $tourGuide_list = $tourGuide_list->where('status', '=', 1);
        $data['list'] = $tourGuide_list->paginate(10);

        return view('admin.new-tourGuide')
            ->with($data);
    }


    public function deActiveTourGuide($id){

    }


    function tourGuidesDetail($id)
    {
        $data = array();
        $tourGuide = DB::table('tourGuides')->where('id', '=', $id)->first();

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
}
