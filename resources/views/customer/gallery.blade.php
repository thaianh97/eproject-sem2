@extends("layout.customer-layout")

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
    <link rel="stylesheet" href="{{asset("css/customer-style/gallery.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section("title")
   gallery
@endsection



@section("header")
    <div class="small-banner text-center">
        <div class="banner-content">
            <h2>Thư viện ảnh</h2>
            <p>Lưu trữ mọi khoảng khắc</p>
        </div>
    </div>
    @include("inc.navbar")
@endsection

@section("content")
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/gallery/gallery1.jpg")}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/gallery/gallery1.jpg")}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/gallery/gallery1.jpg")}}" alt="" class="">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/gallery/gallery1.jpg")}}" alt="" class="">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/gallery/gallery1.jpg")}}" alt="" class="">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/gallery/gallery1.jpg")}}" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>

@endsection

