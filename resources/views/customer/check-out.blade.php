
@extends("layout.customer-layout")

@section("vendor")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="transaction-detail">
                        <h1 class="section-title">Thông tin giao dịch</h1>
                        <div class="transaction-box">
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{asset("img/tourguide/person.jpg")}}" alt="">
                                </div>
                                <div class="detail">
                                    <h2 class="tourguide-name">Lưu Đức Huy</h2>
                                    <p>Hà nội 2 ngày</p>
                                    <p>từ 2/9 đến 4/9</p>
                                    <p class="money amount">30000000 <span class="vnd">đ</span></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="customer-detail">
                        <h1 class="section-title">Thông tin người đặt</h1>
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
