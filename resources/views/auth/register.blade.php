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

@section("title") Register @endsection

@section("header")
    @include("inc.navbar")
@endsection
@section('content')
    <div id="login-container">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>REGISTER</h1>
            <div class="textbox">

                <input id="name" type="text" @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name" >

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>

            <div class="textbox">


                <input id="email" type="email" @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>

            <div class="textbox">


                <input id="password" type="password" @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="Enter password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>

            <div class="textbox">

                <input id="password-confirm" type="password" name="password_confirmation"
                       required autocomplete="new-password" placeholder="Confirm password">

            </div>


            <input type="submit" value="REGISTER">


        </form>

    </div>
@endsection
@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>
@endsection
