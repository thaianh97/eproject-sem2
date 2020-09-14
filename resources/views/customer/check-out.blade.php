@extends("layout.customer-layout")

@section("vendor")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

@endsection

@section("style-sheets")
    <!--  CSS for navbar
    ============================================ -->
    <link rel="stylesheet" href="{{asset("css/customer-style/navbar.css")}}">
    <!-- STYLE FOR FOOTER-->
    <link rel="stylesheet" href="{{asset("css/customer-style/footer.css")}}">
    <!-- for small banner css-->
    <link rel="stylesheet" href="{{asset("css/customer-style/small-banner.css")}}">
    <!--  check out css-->
    <link rel="stylesheet" href="{{asset("css/customer-style/check-out.css")}}">
@endsection

@section("title") Thanh toán @endsection


@section("header")
    <div class="small-banner text-center">
        <div class="banner-content">
            <h2>Thanh toán</h2>
        </div>
    </div>
    @include("inc.navbar")
@endsection



@section("content")
    <div class="content">
        <div class="container check-out-container">
            <div class="row">

                <div class="col-md-12">
                    <div class="transaction-detail">
                        <h1 class="small-title">Hợp Đồng của bạn</h1>
                        <div class="transaction-box">
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{asset("img/tourguide/person.jpg")}}" alt="">
                                </div>
                                <div class="detail">
                                    <h2 class="tourguide-name">HDV: Lưu Đức Huy</h2>
                                    <p><span class="title">Mã: </span> 4</p>
                                    <p><span class="title">Địa điểm: </span>Hà Nội</p>
                                    <p><span class="title">Thời gian dẫn tour: </span>2/9 4/9</p>
                                    <p><span class="title">Ngày đặt: </span>2020/09/04</p>
                                </div>
                                <div class="price-container">
                                    <p class="price">
                                        <span>Giá: </span>
                                        <span class="money amount">300000</span>
                                        <span class="vnd"> đ</span>
                                        <span class="per-day">/ ngày</span>
                                    </p>
                                    <p class="total-price">
                                        <span class="title-price">Tổng: </span>
                                        <span class="money amount">600000</span>
                                        <span class="vnd"> đ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="total-price text-right" style="padding-right: 24px;">
                        <span class="title-price">Tổng: </span>
                        <span class="money amount">600000</span>
                        <span class="vnd"> đ</span>
                    </p>
                </div>
                <div class="col-md-12">
                    <h1 class="small-title">Thanh Toán</h1>
                    <div class="customer-detail">

                        <h2 class="small-header">1. Thông tin khách hàng</h2>
                        <h2 class="customer-name">Lưu Đức Huy</h2>
                        <p><span class="title">Mã</span>: </p>
                        <p><span class="title">Email</span>: huy@gmai;.com</p>
                        <p><span class="title">Số điện thoại: </span> 0333 237 860</p>
                        <p><span class="title">Địa chỉ: </span> Hà nỘi</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="purchase-form-container">
                        <form action="" class="purchase-form">
                            <div class="payment-method">
                                <h2 class="small-header">2. Hình thức thanh toán</h2>
                                <div class="radio-button-group">
                                    <input type="radio" name="payment-method" value="direct-bank" id="direct" checked>
                                    <label for="direct">
                                        Chuyển khoản

                                    </label>
                                    <p class="payment-description">Quý khách chuyển khoản trực tiếp đến tài khoản ngân hàng công ty
                                        Ghi mã giao dịch của bạn khi chuyển tiền
                                        Liên hệ +84 333 237 860 để được hỗ trợ</p>
                                </div>
                                <div class="radio-button-group">
                                    <input type="radio" name="vnpay" value="vnpay" id="vnpay">
                                    <label for="direct">Thanh Toán qua Vnpay</label>

                                </div>
                                <input type="submit" value="Thanh Toán" class="purchase-btn">
                            </div>
                        </form>
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

    <script>
        //fill step by data
        var progressContainerEl = document.getElementsByClassName("step-bar")[0];
        var currentStep = progressContainerEl.dataset.step;


        //get all li
        var iconEls = document.getElementsByClassName("step-status-icon");
        console.log(iconEls)
        //style done style
        for (var i = 0; i < currentStep - 1; i++) {
            iconEls[i].classList.remove("fa-times");
            iconEls[i].classList.add("fa-check");
            iconEls[i].classList.add("done")
        }
        //style current step
        var currentStepIcon = iconEls[currentStep - 1];
        currentStepIcon.classList.remove("fa-times");
        currentStepIcon.classList.add("fa-refresh");
        currentStepIcon.classList.add("in-progress");
    </script>
@endsection
