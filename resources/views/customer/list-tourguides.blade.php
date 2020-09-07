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
    @include("inc.small-banner")
    @include("inc.navbar")
@endsection


@section("content")
    <h1 class="section-header">Hướng Dẫn Viên của chúng tôi</h1>
    <div class="content">

        <div class="container">
            <div class="row">
                @foreach($list as $obj)
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="box">
                            <h1 class="box-title">{{$obj->full_name}}</h1>
                            <div class="box-img">
                                <img src="{{$obj->large_photo}}" alt="" class="img-responsive">
                            </div>
                            <div class="box-content">
                                <p>{{$obj->description}}</p>
                                <ul>
                                    <li>
                                        <span class="bold">Có thể làm MC: </span>
                                        @if($obj->mc_gala_dinner == 0)
                                            <span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        @else
                                            <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        @endif
                                    </li>
                                    <li>
                                        <span class="bold">Tổ chức team building: </span>
                                        @if($obj->team_building == 0)
                                            <span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        @else
                                            <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        @endif
                                    </li>
                                    <li>
                                        <span class="bold">Có thẻ hướng dẫn viên: </span>
                                        @if($obj->card == 0)
                                            <span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        @else
                                            <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        @endif
                                    </li>

                                </ul>
                            </div>
                            <div class="box-bottom">
                                {{--<span class="price">Starting <span class="amout">$260</span></span>--}}
                                <a href="/show/tourGuide/{{$obj->id}}" class="detail-btn">Xem Thêm</a>
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
