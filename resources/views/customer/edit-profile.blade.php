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

@section("title") Đăng Ký-Hướng Dẫn Viên @endsection

@section("header")
    @include("inc.navbar")
@endsection
@section('content')
    <div class="content">
        <div class="register-container container">
            @if($obj != null)
                <h1 class="form-title">Xác Nhận Thông Tin</h1>
            @else
                <h1 class="form-title">Cập nhật thông tin</h1>
            @endif
            <form method="post" action="/user/update/{{session("id")}}" id="tourguide-register">
                @csrf
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="fullName">Họ và tên</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Last Name" name="fullName"
                               required @if($obj != null) value="{{$obj->full_name}}" @endif>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required
                               @if($obj != null) value="{{$obj->email}}" @endif>
                    </div>


                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="phone">Số Điện Thoại: </label>
                        <input type="text" class="form-control" id="phone" placeholder="Số điện thoại"
                               name="phone" required @if($obj != null) value="{{$obj->phone}}" @endif>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="year_of_birth">Năm Sinh: </label>
                        <input type="text" class="form-control" id="year_of_birth" placeholder="Năm Sinh"
                               name="year_of_birth" required @if($obj != null) value="{{$obj->year_of_birth}}" @endif>
                    </div>
                </div>

                <div class="row">
                    <label>Địa chỉ:</label>
                    <textarea class="form-control" rows="2" name="address">@if($obj != null) {{$obj->address}} @endif</textarea>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary submit-btn" value="Lưu">
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
    <!-- cloudinary  -->
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var myWidget = cloudinary.createUploadWidget({
                    cloudName: 'dnby4zyda',
                    uploadPreset: 'zwikurdj',
                    multiple: true,
                    form: '#tourguide-register',
                    fieldName: 'thumbnails[]',
                    thumbnails: '.thumbnails'
                }, (error, result) => {
                    if (!error && result && result.event === "success") {
                        var inputValues = document.querySelectorAll('input[name="thumbnails[]"]');
                        for (let i = 0; i < inputValues.length; i++) {
                            inputValues[i].value = inputValues[i].getAttribute('data-cloudinary-public-id')
                        }
                    }
                }
            )
            document.getElementById("upload_widget").addEventListener("click", function () {
                myWidget.open();
            }, false);


            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                var splittedImgName = imgName.split('.');
                var imgCode = splittedImgName[0];
                $('input[data-cloudinary-public-id="' + imgCode + '"]').remove();
            });
        })

    </script>
@endsection

