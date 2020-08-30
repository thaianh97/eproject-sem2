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

@section("title") Login @endsection

@section("header")
    @include("inc.navbar")
@endsection

@section('content')
    <div id="login-container">

        <form method="POST" action="/login">
            @csrf
            <h1>LOGIN</h1>
            <div class="textbox">

                <input type="text" name="username" placeholder="username">

            </div>

            <div class="textbox">
                <input type="password" placeholder="password" name="password">
            </div>

            <input type="submit" value="Login" />

        </form>

    </div>
    </div>
@endsection
