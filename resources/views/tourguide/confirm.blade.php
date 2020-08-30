<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TourGuide</title>
    <style>
        body{
            box-sizing: border-box;
            background-color: #EBF0F4;
            width: 100%;
            height: 100vh;
            padding: 0;
            margin: 0;
            position: relative;
        }
        div.content {
            width: 60%;
            background: #fff;
            position: absolute;
            top: 200px;
            left: 50%;
            transform: translateX(-50%);
            padding-left: 20px;
            padding-top: 30px;
            padding-bottom: 30px;
            font-size: 22px;
        }
        a {
            color: red;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="content">
        <h3>Cảm ơn bạn đã đăng ký thông tin để làm hướng dẫn viên của chúng tôi.</h3>
        <p>Thông tin của bạn đang được chờ kiểm duyệt.</p>
        <p>Chúng tôi sẽ gửi kết quả vào email: <span class="bold">{{$obj->email}}.</span></p>
        <p>Hãy kiểm tra hộp thư của bạn.</p>
        <a href="/">Quay lại trang chủ</a>
    </div>
</body>
</html>
