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
    <link rel="stylesheet" href="{{asset("css/customer-style/contact-us.css")}}">
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
    <section class="section-contact">
        <div class="container">
            <div class="contact">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <div class="text">
                            <h2>Liên hệ chúng tôi</h2>
                            <p>Trang web của chúng tôi chỉ có duy nhất một cở sở ở Hà Nội. Luôn có nhân viên trực tại cơ sở cũng như đường dây nóng. Liên lạc vói chúng tôi nếu bạn có bất kì thắc mắc gì.
                                <br>Bạn có thể gửi ý kiến đóng góp qua form được để sẵn ở bên</p>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> số 8 Tôn Thất Thuyết</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> +84 333 237 860</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>tconnectfpt@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-lg-offset-1">
                        <div class="contact-form">
                            <form action="send_mail_contact.php" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="field-text" name="name" placeholder="Tên của bạn">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="field-text" name="email" placeholder="Email của bạn">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" class="field-text" name="subject" placeholder="Vấn đề của bạn là gì">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea cols="30" rows="10" name="message" class="field-textarea" placeholder="Hãy chi tiết hơn nào"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-room" id="submit-contact">GỬI</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0968141835706!2d105.7800937144071!3d21.02881188599833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1sen!2s!4v1599546692825!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
@endsection

@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>

@endsection
