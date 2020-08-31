@extends('layout.customer-layout')
@section("vendor")
    <!-- Bootstrap CSS 3 + Jquery 3.5.1 + BOOSTRAP JS 3.4.1
        ============================================ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection

@section("style-sheets")
    <link rel="stylesheet" href="{{asset("css/customer-style/login.css")}}">
    <link rel="stylesheet" href="{{asset("css/customer-style/navbar.css")}}">
    <link rel="stylesheet" href="{{asset("css/customer-style/footer.css")}}">
@endsection

@section("title") Đăng Ký @endsection

@section("header")
    @include("inc.navbar")
@endsection
@section('content')
    <div id="login-container">

        <form method="post" action="/register">
            @csrf
            <h1>REGISTER</h1>
            <div class="textbox">
                <input id="username" type="text" name="username" placeholder="Enter Username" required>
            </div>
            @error('username')
            <span class="error-message" id="user-msg">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @if (session('usernameError'))
                <div class="alert alert-danger error-box">
                    {{session('usernameError')}}
                    <span class="close-btn">x</span>
                </div>
            @endif
            <div class="textbox">
                <input id="password" type="password" placeholder="Enter password" name ="password" required>
            </div>
            @error('password')
            <span class="error-message" id="pwd-msg">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="textbox">
                <input id="password-confirm" type="password" name="password_confirmation"
                       placeholder="Confirm password" required>
            </div>
            @if (session('confirmPasswordError'))
                <div class="alert alert-danger error-box">
                    {{session('confirmPasswordError')}}
                    <span class="close-btn">x</span>
                </div>
            @endif
            <input type="submit" value="REGISTER">
        </form>

    </div>
@endsection
@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>

    <script>
        //show error when focus on a inout or click on close btn
        $(".close-btn").on("click", function () {
            $(".alert").slideUp("fast");
        })
        $("input").on("focus", function (){
            $(".alert").slideUp("fast");
        })
        $('input[name="username"]').on("focus", function () {
            $("#user-msg").slideUp("fast");
        })

        $('input[name="password"]').on("focus", function () {
            $("#pwd-msg").slideUp("fast");
        });
    </script>

@endsection
