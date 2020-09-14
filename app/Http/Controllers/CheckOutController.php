<?php

namespace App\Http\Controllers;

use App\Customer;
use App\TourGuide;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function show($id){
        $transaction = Transaction::find($id);
        $data = array();
        $data["transaction"] = $transaction;
        $data['orderCustomer'] = Customer::find($transaction->customer_id);
        $data["transactionDetails"] = TransactionDetail::query()->where("transaction_id", $id)->get();
        return view("customer/check-out")->with($data);
    }

    public function purchase($id) {
        return "purchase ". $id;
    }
}
