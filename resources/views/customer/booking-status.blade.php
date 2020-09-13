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

@section("title") Theo dõi hợp đồng @endsection


@section("header")
    <div class="small-banner text-center">
        <div class="banner-content">
            <h2>Trạng thái giao dịch</h2>
            <p>Theo dõi giao dịch của bạn</p>
        </div>
    </div>
    @include("inc.navbar")
@endsection



@section("content")
    <div class="content">
        <h1 class="section-header">Trạng Thái Giao Dịch</h1>
        <div class="container" id="booking-status">
            <div class="row">
                <div class="booking-status-container col-md-12">
                    <ul class="step-bar" data-step="{{$bookingStep}}">
                        <li class="step-item">
                            <i class="fa fa-times step-status-icon"></i>
                            <p class="step-name">Chọn hdv</p>
                        </li>

                        <li class="step-item">
                            <i class="fa fa-times step-status-icon"></i>
                            <p class="step-name">hdv xác nhận</p>
                        </li>

                        <li class="step-item">
                            <i class="fa fa-times step-status-icon "></i>
                            <p class="step-name">Thanh toán</p>
                        </li>

                        <li class="step-item">
                            <i class="fa fa-times step-status-icon "></i>
                            <p class="step-name">đi tour</p>
                        </li>

                        <li class="step-item">
                            <i class="fa fa-times step-status-icon "></i>
                            <p class="step-name">feed back</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container" id="info-container">
            <div class="row">
                <div class="customer-info col-md-6">
                    <h2 class="title">Thông tin người đặt</h2>
                    <p><span class="title">Người đặt: </span> {{$customer->full_name}}</p>
                    <p><span class="title">Email: </span> {{$customer->email}}</p>
                    <p><span class="title">Số điện thoại: </span> {{$customer->phone}}</p>
                    <p><span class="title">Địa chỉ: </span> {{$customer->address}}</p>
                </div>

                <div class="transaction-info col-md-6">
                    <h2 class="title">Thông tin hợp đồng dẫn tour số {{$transactionDetail->transaction_id}}</h2>
                    <p>
                        <span class="title">Trạng thái giao dịch: </span>
                        @switch($transactionDetail->status)
                            @case(1)
                            Đang chờ hướng dẫn viên chấp nhận yêu cầu đi tour
                            @break
                            @case(2)
                            Chờ thanh toán
                            @break
                            @case(3)
                            Đặt thành công
                            @break
                            @case(4)
                            Tour đang được bắt đầu
                            @break
                            @case(5)
                            Tour kết thúc
                            @break
                            @case(6)
                            Bị hủy
                            @break
                        @endswitch
                    </p>
                    <p><span class="title">Thời gian tạo: </span> {{$transactionDetail->created_at}}</p>
                    <p><span
                            class="title">Địa điểm đi tour: </span> {{\App\Area::find(\App\Transaction::find($transactionDetail->transaction_id)->province_id)->province}}
                    </p>
                    <p><span class="title">Thời gian đi tour: </span> {{substr($transactionDetail->start, 0, 10)}}
                        - {{substr($transactionDetail->end, 0, 10)}}</p>
                </div>
            </div>
        </div>

        <div id="tourguide-info" class="container">
            <div class="row">
                <div class="col-md-12 tour-guide-info">
                    <table class="table table-striped">
                        <tr style="height: 60px">
                            <th>Hướng dẫn viên</th>

                            <th class="text-right">Giá mỗi ngày</th>
                            <th class="text-right">Số Ngày đi tour</th>
                            <th class="text-right">Tổng tiền</th>
                        </tr>
                        <tr>
                            <td class="col-tour-guide">
                                <div class="img">
                                    <img src="{{$tourGuide->small_photo}}" alt="tour-guide-ava">
                                    {{$tourGuide->full_name}}
                                </div>
                            </td>

                            <td class="text-right"><span class="amount money">{{$tourGuide->price}}</span> <span
                                    class="vnd">đ</span></td>
                            <td class="text-right">{{$duration}}</td>
                            <td class="text-right"><span class="amount money">{{$transactionDetail->cost}}</span> <span
                                    class="vnd">đ</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                @if($bookingStep ==3)
                    <div class="col-md-2 col-md-offset-10 text-right">
                        <a href="/customer/check-out/{{\App\Transaction::find($transactionDetail->transaction_id)->id}}" class="purchase-btn">Thanh Toán</a>
                    </div>
                @endif
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
