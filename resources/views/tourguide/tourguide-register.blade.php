@extends('layout.customer-layout')
@section("vendor")
    <!-- Bootstrap CSS 3 + Jquery 3.5.1 + BOOSTRAP JS 3.4.1
        ============================================ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection

@section("style-sheets")
    <link rel="stylesheet" href="{{asset("css/customer-style/tourguide-register.css")}}">
    <link rel="stylesheet" href="{{asset("css/customer-style/navbar.css")}}">
    <link rel="stylesheet" href="{{asset("css/customer-style/footer.css")}}">
    <style>
    </style>
@endsection

@section("title") Register @endsection

@section("header")
    @include("inc.navbar")
@endsection
@section('content')
<div class="content">
    <div class="register-container container">
        <h1 class="form-title">Đăng Ký Làm Hướng Dẫn Viên</h1>
        <form method="post" action="">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastName">
                </div>
                <div class="form-group col-md-6">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullName">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone number: </label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone">
                </div>
                <div class="form-group col-md-6">
                    <label for="avatar">Avatar</label>
                    <input type="file"  id="avatar" placeholder="Click to chose file" name="avatar">
                </div>
            </div>

            <div class="row">
                <label >Description:</label>
                <textarea class="form-control" rows="4"></textarea>
            </div>

            <div class="row">
                <div class="col-md-12 checkbox-container">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="" name ="mc_gala_dinner">
                            Bạn có thể làm MC, Gala
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="" name ="teamBuilding">
                            Bạn Có thể làm TeamBuilDing
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="" name = "card">
                            Bạn Có thẻ Hướng dẫn viên
                        </label>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary submit-btn" value="ĐĂNG KÝ">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>
@endsection
