<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request) // hàm đăng nhập của khách
    {
        $account = Account::query();
        $username = $request->get('username');
        $password = $request->get('password');
        $exist_account = $account->where('username', '=', $username)->where('password', '=', $password)
            ->where('status', '=', 1)->first();
        $currentAccount = $exist_account[0]->get();

        $customer = Customer::query();
        $stuff = $customer->where('account_id', '=', $currentAccount->get('id'));
        $currentCustomer = $stuff[0]->get();
        return view('login success!')->with($currentCustomer);
    }

    public function register()
    {
        return view('register');
    }

    public function processRegister(Request $request)
    {
        $account = new Account();
        $account->username = $request->get('username');
        $account->password = $request->get('password');
        $account->salt = $this->generateRandomString(6);
        $account->passwordHash = md5($account->password . $account->salt);
        $account->role = $request->get('role'); // hidden input tab với name = role, value = 1.
        $account->status = 1;
        $account->save();

        $customer = new Customer();
        $customer->email = $request->get('email');
        $customer->phone = $request->get('phone');
        $customer->fullName = $request->get('full_name');
        $customer->accountId = $request->get('account_id');
        $customer->save();
    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
