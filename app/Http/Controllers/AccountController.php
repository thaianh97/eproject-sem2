<?php

namespace App\Http\Controllers;

use App\Account;
use App\Admin;
use App\Customer;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

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
        return view('');
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
        return view('auth.login');
    }

    public function processLogin(Request $request) // hàm đăng nhập của khách
    {
        // validate tài khoản đăng nhập của người dùng
        $account = Account::query();
        $username = $request->get('username');
        $password = $request->get('password');
        $exist_account = $account->where('username', '=', $username)
            ->where('status', '=', 1)->first();  //todo: status = 1 for what ?
        //todo: check thằng exist_account == null

        // kiểm tra mat khau của người dùng
        //lay ra salt
        $accountSalt = $exist_account->salt;
        // hash(pwd+sald) == pwd hash
        $accountHashPassWord = md5($password . $accountSalt);
        if($accountHashPassWord == $exist_account->password_hash) {
            return view("customer.index")->with("obj", $exist_account);
        } else {
            return "mật khẩu không đúng";
        }

    }



    public function register()
    {
        return view('auth.register');
    }

    public function processRegister(RegisterRequest $request)
    {
        $data = array();
        $data['username'] = '';
        $data['password'] = '';
        $request->validated();
        $account = new Account();
        $account->username = $request->get('username');
        $account->email = $request->get('email');
        $password = $request->get('password');
        $account->salt = $this->generateRandomString(6);
        $account->password_hash = md5($password . $account->salt);
        $account->role = $request->get('role'); // hidden input tab với name = role, value = 1.
        $account->status = 1;
        $account->save();
        if ($request->role = 1) {
            $customer = new Customer();
            $customer->email = $request->get('email');
            $customer->phone = $request->get('phone');
            $customer->full_name = $request->get('full_name');
            $customer->account_id = $request->get('account_id');
            $customer->save();
            return redirect('/login')->with($data);
        }
        if ($request->role = 2) {
            echo 'tour guide register';
        }

//        $account->role = $request->get('role'); // hidden input tab với name = role, value = 1.
        $account->role = 1;
        $account->status = 1;
        $data['username'] = $account->username;
        $data['password'] = $password;
        $account->save();
        return redirect('/login')->with($data);
//        if($request->role = 1){
//            $customer = new Customer();
//            $customer->email = $request->get('email');
//            $customer->phone = $request->get('phone');
//            $customer->full_name = $request->get('full_name');
//            $customer->account_id = $request->get('account_id');
//            $customer->save();
//        }
//        if($request->role = 2){
//            echo 'tour guide register';
//        }
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
