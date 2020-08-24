<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!--  CSS for header
    ============================================ -->
    <link rel="stylesheet" href="{{asset("css/customer-style/header.css")}}">
    <title>{{config('app.name', 'tour guide')}}</title>
</head>
<body>
@include("inc/header")
@yield("content")
@include("inc/footer")
</body>
</html>
