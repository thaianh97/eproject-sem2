@extends("layout.customer-layout")

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

@section("content")
    <div id="login-container">
        <form action="#" method="post">
            <h1>Register</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username">
            </div>

            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password-confirm" placeholder="Confirm Password">
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


