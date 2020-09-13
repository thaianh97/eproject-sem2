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
    public function index()
    {
        $currentCustomer = Customer::query()->where("account_id", session("id"))->first();
        //get list transaction
        $listTransaction = Transaction::query()->where("customer_id", $currentCustomer->id)->get();
        return view("customer.list-order")->with("listTransaction", $listTransaction);
    }

    public function orderStatus($id)
    {
        $transactionDetail = TransactionDetail::find($id);
        $transactionTourGuide = TourGuide::find($transactionDetail->guide_id);
        $transactionCustomer = Customer::find(Transaction::query()->where("id", $transactionDetail->id)->first()->customer_id);
        $booking_step = $transactionDetail->status + 1;
        $data = array();
        $data["bookingStep"] = $booking_step;
        $data["customer"] = $transactionCustomer;
        $data["tourGuide"] = $transactionTourGuide;
        $data["transactionDetail"] = $transactionDetail;
        $from = date_create($transactionDetail->start);
        $to = date_create($transactionDetail->end);
        $duration = date_diff($from, $to, true)->format("%a");
        $data["duration"] = $duration;
        return view("customer.booking-status")->with($data);
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
        $currentCustomer = Customer::query()->where("account_id", session("id"))->first();


        $data["customer"] = $currentCustomer;
//        $checkTransaction = DB::table('transactions')->where('end', '=', $request->get('end'))
//            ->where('start', '=', $request->get('start'))
//            ->where('status', '=', 0);
        $startTime = $request->get("start");
        $endTime = $request->get("end");
        $from = date_create($startTime);
        $to = date_create($endTime);
        $duration = date_diff($from, $to, true)->format("%a");
        $price = $tourGuide->price * $duration;
        //get
        $order = new Transaction();
        $order->customer_id = $currentCustomer->id;
        $order->province_id = $request->get("area_id");
        $order->party_number = $request->get('party_number');
        $order->start = TimeFormatHelper::formatStringToSqlDate($startTime);
        $order->end = TimeFormatHelper::formatStringToSqlDate($endTime);
        $order->total_cost = $price;
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
        $orderDetail->start = TimeFormatHelper::formatStringToSqlDate($startTime);
        $orderDetail->end = TimeFormatHelper::formatStringToSqlDate($endTime);
        $orderDetail->cost = $price;
        $orderDetail->rate_stars = 0;
        $orderDetail->review = "";
        $orderDetail->status = 1;
        $orderDetail->save();

        Mail::send('mail.sendToCustomer', $data, function ($message) use ($currentCustomer, $orderDetail) {
            $message->to($currentCustomer->email,
                'Tutorials Point')->subject('yêu cầu đặt đã được gửi' . $orderDetail->id);
            $message->from('huongdanvien247@gmail.com', 'TConnect');
        });
        Mail::send('mail.sendToTourGuide', $data, function ($message) use ($orderDetail, $tourGuide) {
            $message->to($tourGuide->email,
                'Tutorials Point')->subject('bạn có một yêu cầu đặt lịch mã' . $orderDetail->id);
            $message->from('huongdanvien247@gmail.com', 'TConnect');
        });
        return redirect("/customer/order");
    }
}
