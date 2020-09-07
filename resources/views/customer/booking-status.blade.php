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
    <!-- FIND TOUR GUIDES css-->
    <link rel="stylesheet" href="{{asset("css/customer-style/booking-status.css")}}">
@endsection

@section("title") Tìm HDV @endsection


@section("header")
    @include("inc.small-banner")
    @include("inc.navbar")
@endsection

@section("banner-title")
    Tìm hướng viên
@endsection

@section("banner-description")
    Lorem ipsum dolor sit amet, consectetur adipisicing.
@endsection

@section("content")
  <div class="content">
      <h1 class="section-header">Trạng Thái Đơn Hàng</h1>
      <div class="booking-status-container">
          <ul class="step-bar" data-step ="0">
              <li class="step-item">
                 <i class="fa fa-times step-status-icon"></i>
                  <p class="step-name">Chọn hdv</p>
              </li>

              <li class="step-item">
                  <i class="fa fa-times step-status-icon"></i>
                  <p class="step-name">Chọn hdv</p>
              </li>

              <li class="step-item">
                  <i class="fa fa-times step-status-icon "></i>
                  <p class="step-name">Chọn hdv</p>
              </li>

              <li class="step-item">
                  <i class="fa fa-times step-status-icon "></i>
                  <p class="step-name">Chọn hdv</p>
              </li>

          </ul>
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
        for(var i = 0; i < currentStep - 1; i++) {
            iconEls[i].classList.remove("fa-times");
            iconEls[i].classList.add("fa-check");
            iconEls[i].classList.add("done")
        }
        //style current step
        var currentStepIcon = iconEls[currentStep -1];
        currentStepIcon.classList.remove("fa-times");
        currentStepIcon.classList.add("fa-refresh");
        currentStepIcon.classList.add("in-progress");
    </script>
@endsection
