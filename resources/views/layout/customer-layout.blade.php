<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- libraries and framework -->
    @yield("vendor")
    <!-- general style -->
    <!-- poppins font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="/css/customer-style/general.css">
    <!-- EXTENDS NEEDED STYLE SHEETS FOR EACH PAGES -->
    @yield("style-sheets")
    <title>@yield("title")</title>

</head>

<body>
@yield("header")
@yield("content")
@yield("footer")
@yield("scripts")
</body>

</html>
