<?php

namespace App\Http\Controllers;

use App\NewTourGuideRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PendingTourGuideController extends Controller
{
    //
    public function create()
    {
        return view("tourguide.tourguide-register");
    }

    public function store(Request $request)
    {
        //lấy dữ liệu từ form -> lưu db
        //lấy thống tin từ request
        $pendingTourGuide = new NewTourGuideRegister();
        $pendingTourGuide->username = $request->get("username");
        $pendingTourGuide->full_name = $request->get("firstName") . " " .$request->get("lastName");
        $pendingTourGuide->year_of_birth = $request->get("year_of_birth");
        $pendingTourGuide->phone = $request->get("phone");
        $pendingTourGuide->email = $request->get("email");
        $pendingTourGuide->description = $request->get("description");
//
        $thumbnails = $request->get('thumbnails');
        //neu hdv k gui anh
        if($thumbnails == null || count($thumbnails) == 0) {
            $pendingTourGuide->avatar = "man-default-ava_vrtd6j";
        } else {
            foreach ($thumbnails as $thumbnail) {
                $pendingTourGuide->avatar .= $thumbnail . ",";
            }
        }

        $card = $request->get("card");
        if($card == null) {
            $card = 0;
        }
        $mc_gala_dinner = $request->get("mc_gala_dinner");
        if($mc_gala_dinner == null) {
            $mc_gala_dinner = 0;
        } else {

        }

        $team_building = $request->get("teamBuilding");
        if($team_building == null) {
            $team_building = 0;
        }
        $pendingTourGuide->card = $card;
        $pendingTourGuide->mc_gala_dinner = $mc_gala_dinner;
        $pendingTourGuide->team_building = $team_building;

        $pendingTourGuide->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $pendingTourGuide->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $pendingTourGuide->status = 0; // pending chưa dc duyệt
        $pendingTourGuide->save();
        return view("tourguide.confirm")->with("obj", $pendingTourGuide);
    }



}
