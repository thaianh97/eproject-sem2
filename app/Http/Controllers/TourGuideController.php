<?php

namespace App\Http\Controllers;

use App\TourGuide;
use App\TourGuideArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourGuideController extends Controller
{
    public function filter(Request $request)
    {
        // tạo biến data là một mảng chứa dữ liệu trả về.
        $data = array();
        $data['area_id'] = 0;

//        $data['keyword'] = '';
        $areas = DB::table('areas')->get();
        $tourGuide_list = TourGuide::query();

        if ($request->has('area_id') && $request->get('area_id') != 0) {
            $data['chosen_area'] = $request->get('area_id');
            $tourGuide_areas = TourGuideArea::query();
            $list_an_area = $tourGuide_areas->where('area_id', '!=', $request->get('area_id'))->get();


            foreach ($list_an_area as $item) {
                $tourGuide_list = $tourGuide_list->where('id', '!=', $item->guide_id);
            }
        }

        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $tourGuide_list = $tourGuide_list->where('full_name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $tourGuide_list = $tourGuide_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $tourGuide_list->get();
        $data['areas'] = $areas;
        return view('customer.find-tourguide')
            ->with($data);
    }
}