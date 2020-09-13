<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function show($id){
        $transaction = Transaction::find($id);
        return view("customer/check-out")->with("transaction", $transaction);
    }
}
