@extends("layout.customer-layout")
@extends("inc.small-banner")
@section("vendor")
    <!-- BOOSTRAP #3.4.1 jquery #3.5.1 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Datedropper jquery plugin -->
    <script src="{{asset("js/datedropper/datedropper.pro.min.js")}}"></script>
@endsection

@section("style-sheets")
    <!--  CSS for navbar
    ============================================ -->
    <link rel="stylesheet" href="{{asset("css/customer-style/navbar.css")}}">
    <!-- STYLE FOR FOOTER-->
    <link rel="stylesheet" href="{{asset("css/customer-style/footer.css")}}">
    <!-- for small banner css-->
    <link rel="stylesheet" href="{{asset("css/customer-style/small-banner.css")}}">
    <!-- style sheets for tour guide detail -->
    <link rel="stylesheet" href="{{asset("css/customer-style/tour-guide-detail.css")}}">
    <!-- style for contact-us -->
    <link rel="stylesheet" href="{{asset("css/customer-style/contact-us.css")}}">
@endsection

@section("title")
    Tour guide Details
@endsection

@section("banner-title")
    Detail
@endsection

@section("banner-description")
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, recusandae.
@endsection

@section("header")
    @include("inc.navbar")
@endsection

@section("content")

@endsection

@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>

@endsection
