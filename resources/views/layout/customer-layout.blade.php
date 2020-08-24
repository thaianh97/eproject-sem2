<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS 3 + Jquery 3.5.1 + BOOSTRAP JS 3.4.1
    ============================================ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Datedropper jquery plugin -->
    <script src="/js/datedropper/datedropper.pro.min.js"></script>
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- general style -->
    <link rel="stylesheet" href="css/customer-style/general.css">
    <!--  CSS for header
    ============================================ -->
    <link rel="stylesheet" href="{{asset("css/customer-style/header.css")}}">
    <!-- STYLE FOR FOOTER-->
    <link rel="stylesheet" href="{{asset("css/customer-style/footer.css")}}">
    <!-- STYLE FOR HOME PAGE -->
    <link rel="stylesheet" href="{{asset("css/customer-style/home.css")}}">
</head>
<body>


@include("inc/header")
@yield("content")
@include("inc/footer")



<!-- owl.carousel JS
        ============================================ -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<!-- HEADER SCRIPTS -->
<script src ="{{asset("js/header.js")}}"></script>
</body>

</html>
