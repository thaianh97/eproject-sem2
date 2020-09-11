<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    //register new user (customer -> role = 3 | role = 2 for tour Guide | role = 1 for admin)
    public function register()
    {
        return view('auth.register');
    }

    public function processRegister(RegisterRequest $request)
    {

        $request->validated();

        //get value of all field
        $username = $request->get("username");
        $password = $request->get("password");
        $passwordConfirm = $request->get("password_confirmation");
        //check if username is existed
        $inDbAccount = Account::query();
        $existedAccount = $inDbAccount->where("username", "=", $username)
            ->where("status", "!=", 3)->first();
        if($existedAccount != null){
            $request->session()->flash("usernameError", "Tên đăng nhập đã tồn tại");
            return redirect("/register");
        }

        //check if password confirmation is not match
        if($passwordConfirm != $password) {
            $request->session()->flash("confirmPasswordError", "Mật khẩu xác nhận không khớp");
            return redirect("/register");
        }
        //create new account
        $newAccount = new Account();
        //store data
        $newAccount->username = $username;
        //hash password + salt -> save to db
        //generate salt and store in db
        $salt = $this->generateRandomString(6);
        $newAccount->salt = $salt;
        //hash pwd and store
        $passwordHashed = md5($password . $salt);
        $newAccount->password_hash = $passwordHashed;
        //SET ROLE = 3 FOR customer
        $newAccount->role = 3;
        //set status = 1 active | 0 non-active
        $newAccount->status = 1;
        //set timestamp
        //TODO: check time stamp gmt+7
        $newAccount->created_at = Carbon::now()->addDay(0)->format('Y-m-d H:i:s');
        $newAccount->updated_at = Carbon::now()->addDay(0)->format('Y-m-d H:i:s');
        //save
        $newAccount->save();
        //login
        //save new login session
        $request->getSession()->put("username", $newAccount->username);
        $request->getSession()->put("role", $newAccount->role);
        //save id to session
        $request->getSession()->put("id", $newAccount->id);
        //return view by role: role = 3 for customer| role = 2 for tour Guide | role = 1 for admin
        if ($newAccount->role == 1) {
            return redirect("/admin");
        } else if ($newAccount->role == 2) {
            return redirect("/tourGuide");
        } else {
            $request->session()->flash("msg", "đã đăng nhập thành công");
            return \redirect("/");
        }

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
