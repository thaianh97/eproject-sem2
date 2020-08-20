<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
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
}
