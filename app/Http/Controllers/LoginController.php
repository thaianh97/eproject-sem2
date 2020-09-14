<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MongoDB\Driver\Session;

class LoginController extends Controller
{
    public function login()
    {
        //check if a session still existed -> then remove
        if (\Illuminate\Support\Facades\Session::has("username")) {
            \Illuminate\Support\Facades\Session::remove("username");
        }
        \Illuminate\Support\Facades\Session::remove("id");
        if (\Illuminate\Support\Facades\Session::has("role")) {
            \Illuminate\Support\Facades\Session::remove("role");
        }

        return view('auth.login');
    }

    public function processLogin(LoginRequest $request) // hàm đăng nhập của khách
    {
        //TODO: validate tài khoản đăng nhập của người
        $request->validated();
        //get user input
        $username = $request->get('username');
        $password = $request->get('password');
        //get account with user's input username
        $inDbAccounts = Account::query();
        $loginAccount = $inDbAccounts->where("username", "=", $username)
            ->where("status", "!=", 3)->first();
        //check if user input account is not exist
        if (!$loginAccount) {
            $request->session()->flash("usernameError", "Tên tài khoản không tồn tại");
            return redirect("/login");
        }
        // check user's input password
        //get salt
        $accountSalt = $loginAccount->salt;
        //hash
        $loginAccountHashPassWord = md5($password . $accountSalt);
        if ($loginAccountHashPassWord != $loginAccount->password_hash) {
            $request->session()->flash("passwordError", "Mật khẩu vừa nhập không đúng");
            return redirect("/login");
        }


        //save new login session
        $request->getSession()->put("username", $loginAccount->username);
        $request->getSession()->put("role", $loginAccount->role);
        //save id to session
        $request->getSession()->put("id", $loginAccount->id);
        if ($loginAccount->role == 1) {
            return redirect("/admin");
        } else if ($loginAccount->role == 2) {
            return redirect("/tourGuide");
        } else {
            $request->session()->flash("msg", "đã đăng nhập thành công");
            return redirect("/");
        }
    }

    public function logoutAdmin()
    {
        \Illuminate\Support\Facades\Session::remove("username");
        \Illuminate\Support\Facades\Session::remove("role");
        \Illuminate\Support\Facades\Session::remove("id");
        return redirect("/");
    }

    public function logoutCustomer()
    {
        \Illuminate\Support\Facades\Session::remove("username");
        \Illuminate\Support\Facades\Session::remove("role");
        \Illuminate\Support\Facades\Session::remove("id");
        return redirect("/");
    }

    public function logoutTourGuide()
    {
        \Illuminate\Support\Facades\Session::remove("username");
        \Illuminate\Support\Facades\Session::remove("role");
        \Illuminate\Support\Facades\Session::remove("id");
        return redirect("/");
    }



}
