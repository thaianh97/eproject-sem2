<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Area;
>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
use App\Customer;
use App\Http\Controllers\Controller;
use App\TourGuide;
use App\TourGuideArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ControllerByAdmin extends Controller
{

    public function adminHome()
    {
        return view('layout.admin-layout');
    }

    public function listCustomers()
    {
        $data = array();
        $customers_list = Customer::query();

<<<<<<< HEAD
        $data['list'] = $customers_list->get();
=======
        $data['list'] = $customers_list->paginate(10);
>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
        return view('admin.customers-manager')
            ->with($data);
    }

<<<<<<< HEAD
=======
    public function listAreas()
    {
        $data = array();

        $data['listTrung'] = Area::query()->where('region', '=', 'Trung')->get();

        $data['listBac'] = Area::query()->where('region', '=', 'Bắc')->get();

        $data['listNam'] = Area::query()->where('region', '=', 'Nam')->get();
        return view('admin.areas-manager')
            ->with($data);
    }


>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
    public function sendMail()
    {
        $data = array(
            'username' => 'xuanhung',
            'namegift' => 'Hello world',
            'transaction' => 'as');


        Mail::send('mail.email', $data, function ($message) {
            $message->to('leminhhoang10920@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
            $message->from('atruong01278939291@gmail.com', 'huy truong');
        });
        return 'ok';
    }


<<<<<<< HEAD
    public function listTourGuides(Request $request)
=======
    public function listTourGuides(Request $request )
>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
    {

        $data = array();
        $data['chosen_area'] = 0;
        $data['keyword'] = '';
        $areas = DB::table('areas')->get();
        $tourGuide_list = TourGuide::query();

<<<<<<< HEAD
=======

>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
        // lọc theo areas
        if ($request->has('chosen_area_id') && $request->get('chosen_area_id') != 0) {
            $data['chosen_area'] = $request->get('chosen_area_id');
            $tourGuide_areas = TourGuideArea::query();
            $list_an_area = $tourGuide_areas->where('area_id', '!=', $request->get('chosen_area_id'))->get();


<<<<<<< HEAD
            foreach($list_an_area as $item){
=======
            foreach ($list_an_area as $item) {
>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
                $tourGuide_list = $tourGuide_list->where('id', '!=', $item->guide_id);
            }
        }

<<<<<<< HEAD
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0 ) {
=======
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
            $data['keyword'] = $request->get('keyword');
            $tourGuide_list = $tourGuide_list->where('full_name', 'like', '%' . $request->get('keyword') . '%');
//            $tourGuide_list = $tourGuide_list->where('id', 'like', '%' . $request->get('keyword') . '%');
//            $tourGuide_list = $tourGuide_list->where('phone', 'like', '%' . $request->get('keyword') . '%');
//            $tourGuide_list = $tourGuide_list->where('email', 'like', '%' . $request->get('keyword') . '%');
        }

<<<<<<< HEAD
        $data['list'] = $tourGuide_list->get();
=======
        $data['list'] = $tourGuide_list->paginate(10);
>>>>>>> 5e9b928c9133babe410b3e79d3fe52647911109f
        $data['areas'] = $areas;
        return view('admin.tourGuides-manager')
            ->with($data);

    }
}
