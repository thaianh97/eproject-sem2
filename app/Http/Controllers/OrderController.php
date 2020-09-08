<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use App\TimeFormatHelper;
use App\TourGuide;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function orderStatus()
    {
        //get status in trasaction detail
        $booking_step = 0;
        //current customer
        if (session("username") == null) {
            return redirect("/login");
        }
        $currentAccount = Account::query()->where("username", "=", session("username"))->first();
        $currentCustomer = Customer::query()->where("account_id", $currentAccount->id)->first();
        //read transaction
        $listTransactions = $currentCustomer->transactions;
        //fix tạm thg số 9 //todo: tạo view list transaction
        $chosenTransaction = $listTransactions->first();
        //get transaction detail
        $transactionDetail = $chosenTransaction->transactionDetails->first();
        //get status
        $booking_step = $transactionDetail->status + 1;

        return view("customer.booking-status")->with("step", $booking_step);
    }

    public function book(Request $request, $id)
    {

        $tourGuide = TourGuide::query()->where('id', '=', $id)->first();
        $data = array();
        $data['full_name'] = $tourGuide->full_name;
        $data['phone'] = $tourGuide->phone;
        $data['email'] = $tourGuide->email;
        $data['price'] = $tourGuide->price;
        //get current customer
        $customers = Customer::query();
        if (session("username") == null) {
            return redirect("/login");
        }
        $existCustomerQuery = $customers->where("account_id", "=", session("id"));
        $existCustomer = $existCustomerQuery->first();
        //todo: check exist customer

        if ($existCustomer == null) {
            return redirect("/user/edit/" . session("id"));
        }

        $data["customer"] = $existCustomer;
//        $checkTransaction = DB::table('transactions')->where('end', '=', $request->get('end'))
//            ->where('start', '=', $request->get('start'))
//            ->where('status', '=', 0);
        $startTime = TimeFormatHelper::formatStringToSqlDate($request->get("start"));
        $duration = $request->get("duration");
        $startTimeInSecond = strtotime($startTime);
        $endTimeInSecond = $startTimeInSecond + $duration * 24 * 60 * 60;
        $endTime = date('Y-m-d H:i:s', $endTimeInSecond);

        //get
        $order = new Transaction();
        $order->customer_id = $existCustomer->id;
        $order->province_id = 1; //fix tam //todo: hoan thien
        $order->party_number = $request->get('party_number');
        $order->start = $startTime;
        $order->end = $endTime;
        $order->total_cost = 0;
        $order->status = 0;
        $order->save();


//        $checkTransaction->update(array(
//            'cost',
//            $checkTransaction->get()->cost + $tourGuide->price * $request->get('days')
//        ));

        $orderDetail = new TransactionDetail();
        $orderDetail->transaction_id = $order->id;
        $orderDetail->guide_id = $tourGuide->id;
        $orderDetail->guide_name = $tourGuide->full_name;
        $orderDetail->start = $startTime;
        $orderDetail->end = $endTime;
        $orderDetail->cost = $tourGuide->price * $duration;
        $orderDetail->rate_stars = 0;
        $orderDetail->review = "";
        $orderDetail->status = 1;
        $orderDetail->save();


        Mail::send('mail.sendToCustomer', $data, function ($message) use ($existCustomer, $orderDetail) {
            $message->to($existCustomer->email,
                'Tutorials Point')->subject('yêu cầu đặt đã được gửi' . $orderDetail->id);
            $message->from('huongdanvien247@gmail.com', 'TConnect');
        });
        //chuyen trang thai booking
        $data["booking-step"] = 2;
        Mail::send('mail.sendToTourGuide', $data, function ($message) use ($orderDetail, $tourGuide) {
            $message->to($tourGuide->email,
                'Tutorials Point')->subject('bạn có một yêu cầu đặt lịch mã' . $orderDetail->id);
            $message->from('huongdanvien247@gmail.com', 'TConnect');
        });
        return redirect("/order");
    }
}
