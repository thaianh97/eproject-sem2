<?php

namespace App\Http\Controllers;


use App\Area;

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
}
