<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use App\TourGuide;
use Illuminate\Http\Request;

class ControllerByAdmin extends Controller
{

    public function adminHome(){
        return view('layout.admin-layout');
    }
    public function listCustomers(){
        $data =array();
        $customers_list =Customer::query();

        $data['list'] = $customers_list->get();
        return view('admin.customers-manager')
            ->with($data);
    }

    public function listTourGuides(){
        $data =array();
        $tourGuide_list =TourGuide::query();

        $data['list'] = $tourGuide_list->get();
        return view('admin.customers-manager')
            ->with($data);
    }
}
