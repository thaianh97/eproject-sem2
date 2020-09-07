<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderStatus() {
        return view("customer.booking-status");
    }
}
