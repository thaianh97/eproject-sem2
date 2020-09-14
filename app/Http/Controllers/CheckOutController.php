<?php

namespace App\Http\Controllers;

use App\Customer;
use App\TourGuide;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    public function show($id)
    {
        $transaction = Transaction::find($id);
        $data = array();
        $data["transaction"] = $transaction;
        $data['orderCustomer'] = Customer::find($transaction->customer_id);
        $data["transactionDetails"] = TransactionDetail::query()->where("transaction_id", $id)->get();
        return view("customer/check-out")->with($data);
    }

    public function purchase(Request $request, $id)
    {
        //get payment method
        $paymentMethod = $request->get("payment-method");
        if ($paymentMethod == "direct-bank") {
            //gửi mail hướng dẫn gửi tiền
            $customer = Customer::find(Transaction::find($id)->customer_id);
            $transaction = Transaction::find($id);
            $data = array(
                "customer" => $customer,
                "transaction" => $transaction,
            );
            Mail::send('mail.payment-detail', $data, function ($message) use ($customer, $transaction) {

                $message->to($customer->email, $customer->full_name)->subject('Bạn có một giao dịch cần thanh toán: ');
                $message->from('hdv247@gmail.com', 'TConnect');

            });
            return view("customer.pending-payment")->with("obj", $customer);
        } else {
            return "thanh toán bằng vn pay đang được phát triển" . "<a href = '/'> Quay về trang chủ</a>.";
        }


    }
}
