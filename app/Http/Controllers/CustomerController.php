<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CustomerController extends Controller
{
    public function edit($id) {
        $currentAccount = Account::find($id);
        if($currentAccount->role != 3) {
            return "không phải tài khoản khách";
        }

        $customers = Customer::query();
        $existCustomerQuery = $customers->where("account_id", "=", $id);
        $existCustomer = $existCustomerQuery->first();

        return view("customer.edit-profile")->with("obj", $existCustomer);

    }

    public function update(Request $request, $id) {
        $customers = Customer::query();
        $existCustomerQuery = $customers->where("account_id", "=", $id);
        $existCustomer = $existCustomerQuery->first();
        //get all request values
        $fullName = $request->get("fullName");
        $email = $request->get("email");
        $year_of_birth = $request->get("year_of_birth");
        $address = $request->get("address");
        $phone = $request->get("phone");
        if($existCustomer == null) {
            //create new customer
            $newCustomer = new Customer();
            $newCustomer->account_id = $id;
            $newCustomer->full_name = $fullName;
            $newCustomer->email = $email;
            $newCustomer->year_of_birth = $year_of_birth;
            $newCustomer->address = $address;
            $newCustomer->phone = $phone;
            $newCustomer->status = 1;
            $newCustomer->save();
        } else {
            //update
            $existCustomer->full_name = $fullName;
            $existCustomer->email = $email;
            $existCustomer->year_of_birth = $year_of_birth;
            $existCustomer->address = $address;
            $existCustomer->phone = $phone;
            $existCustomer->status = 1;
            $existCustomer->updated_at = Carbon::now()->addDays(0)->format('Y-m-d H:i:s');
            $existCustomer->save();
        }
        return redirect("/");
    }
}
