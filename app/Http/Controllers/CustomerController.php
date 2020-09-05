<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function edit($id) {
        $currentCustomer = Customer::find($id);
        return "tra ve form edit";
    }
}
