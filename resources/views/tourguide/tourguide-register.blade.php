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
        <form method="post" action="/tourguide/register" id ="tourguide-register">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="year_of_birth">Năm Sinh: </label>
                    <input type="text" class="form-control" id="year_of_birth" placeholder="Năm Sinh" name="year_of_birth" required>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone number: </label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="avatar">Avatar</label>
                    <div class="field item form-group">

                        <div>
                            <button type="button" id="upload_widget" class="btn btn-secondary" style="margin-left: 10px ">Click
                                to upload
                            </button>
                        </div>
                        <div class="col-md-6 col-sm-6 mt-2 thumbnails">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <label >Description:</label>
                <textarea class="form-control" rows="4" name="description"></textarea>
            </div>

            <div class="row">
                <div class="col-md-12 checkbox-container">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name ="mc_gala_dinner" >
                            Bạn có thể làm MC, Gala
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name ="teamBuilding">
                            Bạn Có thể làm TeamBuilDing
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name = "card">
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
