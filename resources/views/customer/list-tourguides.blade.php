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
    <!-- FIND TOUR GUIDES css-->
    <link rel="stylesheet" href="{{asset("css/customer-style/list-tourguide.css")}}">
@endsection

@section("title") danh sách HDV @endsection


@section("header")
    <div class="small-banner text-center">
        <div class="banner-content">
            <h2>Hướng Dẫn viên của chúng tôi</h2>
            <p>tất cả các hường dẫn viên đã đăng ký với công ty của chúng tôi</p>
        </div>
    </div>
    @include("inc.navbar")
@endsection


@section("content")

    <div class="content">
        <div class="container">
            <div class="row">
                @foreach($list as $obj)
                    <div class="col-md-6">
                        <h2 class="box-title">{{$obj->full_name}}</h2>
                        <div class="box">
                            <div class="box-img">
                                <img src="{{$obj->large_photo}}" alt="" class="img-responsive">
                            </div>
                            <div class="box-content">
                                <p class="description">{{$obj->description}}</p>
                                <ul>
                                    @if($obj->card == 1)
                                        <li>Có thẻ hướng dẫn viên do bộ du lịch cấp phát</li>
                                    @endif
                                    @if($obj->mc_gala_dinner == 1)
                                            <li>Có thể tổ chức sự kiện</li>
                                    @endif
                                    @if($obj->team_building == 1)
                                        <li>Có thể tổ chức các trò chơi team building</li>
                                    @endif

                                </ul>
                            </div>
                            <div class="box-bottom">
                                <div class="price-box col-md-6 col-xs-6 col-sm-6">
                                    <p><span class="price">giá ban đầu: </span><span
                                            class="amount">{{$obj->price}}đ</span><span class="price">/ ngày</span></p>
                                </div>
                                <div class="detail-btn-box col-md-6 col-xs-6 col-sm-6">
                                    <a href="/show/tourGuide/{{$obj->id}}" class="detail-btn">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!-- end row 1 -->
            {{ $list->links() }}
        </div><!-- end container -->
    </div>

@endsection

@section("footer")
    @include("inc.footer")
@endsection
@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>


@endsection
