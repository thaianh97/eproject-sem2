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
    <h3>Đã gửi yêu cầu thanh toán.</h3>
    <p>Chúng tôi đã nhận được yêu cầu thanh toán của quý khách.</p>
    <p>Chúng tôi đã gửi thông tin giao dịch và thông tin thanh toán đến email: <span class="bold">{{$obj->email}}.</span></p>
    <p>Hãy kiểm tra hộp thư của bạn và thực hiện thanh toán.</p>
    <p>Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi</p>
    <p>Mọi thắc mắc vui lòng liên hệ: +84333 237 860</p>
    <a href="/">Quay lại trang chủ</a>
</div>
</body>
</html>

