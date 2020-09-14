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
    <link rel="stylesheet" href="{{asset("css/customer-style/about-us.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section("title")
    contact us
@endsection



@section("header")
    <div class="small-banner text-center">
        <div class="banner-content">
            <h2>Liên hệ</h2>
            <p>Gửi mọi thắc mắc của bạn cho chúng tôi</p>
        </div>
    </div>
    @include("inc.navbar")
@endsection

@section("content")
    <!-- ABOUT -->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="wrap-about">


                    <div class="about-item about-right">
                        <div
                            class="col-xs-12 col-sm-12 col-md-6 col-lg-6  no-padding-left col-lg-push-6 col-md-push-6 ">
                            <div class="img">
                                <img src="img/3.jpg" alt="#" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding-right col-lg-pull-6 col-md-pull-6">
                            <div class="text">
                                <h2 class="heading">Tại sao nên chọn TConnect?</h2>
                                <div class="desc" style="font-size: 20px;">
                                    <p>Dựa trên tiêu chí tự do cho khách du lịch cũng như hướng dẫn viên, chúng tôi làm
                                        việc với khẩu hiệu:"Mang Việt Nam lại gần với du khách". Chúng tôi kết nối những
                                        người yêu khám phá trên khắp Việt Nam
                                        <br>Chúng tôi đã bỏ ra 2 năm để thai nghén dự án này, đi khắp Việt Nam để tìm
                                        hiểu và nắm rõ mong muốn, nguyện vọng của hướng dẫn viên cũng như khách hàng cho
                                        một chuyến du lịch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                </div>
            </div>
        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- TEAM -->
    <section class="section-team">
        <div class="container">
            <div class="team">
                <h2 class="heading text-center">Thành viên trong nhóm</h2>
                <p class="sub-heading text-center">Những con người có chung ý tưởng khởi nghiệp về một nền tảng kết nối
                    số</p>
                <div class="member-container container" style="display: block;margin-left: auto;margin-right: auto; margin-top: 20px;">
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <div class="box">
                                <div class="img-box" style="margin-left: 70px;">
                                    <img src="img/hoang.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="description">
                                    <h3 class="name">Lê Minh Hoàng</h3>
                                    <p class="pos">Trưởng nhóm</p>
                                    <p>Đội trưởng, lãnh đạo, quản lý, phân chia công việc cho cả đội</p>
                                </div>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-6">
                            <div class="box">
                                <div class="img-box" style="margin-left: 70px;">
                                    <img src="img/1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="description">
                                    <h3 class="name">Lưu Đức Huy</h3>
                                    <p class="pos">Thiết kế frontend</p>
                                    <p>Phát triển giao diện frontend của trang web</p>
                                </div>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-6">
                            <div class="box">
                                <div class="img-box" style="margin-left: 70px;">
                                    <img src="img/truong.jpeg" alt="" class="img-responsive">
                                </div>
                                <div class="description">
                                    <h3 class="name">Hoàng Trường</h3>
                                    <p class="pos">Ý tưởng</p>
                                    <p>Khả năng sáng tạo cao, đưa ra nhiều ý tưởng phát triển trang web</p>
                                </div>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row" style="padding-left:250px;">
                    <div class="col-md-4 col-xs-6">
                        <div class="box">
                            <div class="img-box" style="margin-left: 30px;">
                                <img src="img/thaianh.jpeg" alt="" class="img-responsive">
                            </div>
                            <div class="description">
                                <h3 class="name">Thái Anh</h3>
                                <p class="pos">Thiết kế backend</p>
                                <p>Phát triển, điều hướng backend</p>
                            </div>
                            <div class="social-link">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="box" style="margin-left: 80px;">
                            <div class="img-box" style="margin-left: 30px;">
                                <img src="img/5.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="description">
                                <h3 class="name">Mai Hiếu</h3>
                                <p class="pos">Thiết kế nội dung</p>
                                <p>Vẽ logo, giao diện, nội dung trang web</p>
                            </div>
                            <div class="social-link">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
@endsection

@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>

@endsection
