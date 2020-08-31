@extends("layout.customer-layout")
@extends("inc.small-banner")
@section("vendor")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
    @include("inc.navbar")
@endsection

@section("banner-title")
    Danh Sách Hướng dân viên
@endsection

@section("banner-description")
    Lorem ipsum dolor sit amet, consectetur adipisicing.
@endsection

@section("content")
    <div class="content">
        <div class="container">
            <div class="row">
                @foreach($list as $obj)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box">
                        <h1 class="box-title">{{$obj->full_name}}</h1>
                        <div class="box-img">
                            <img src="{{$obj->large_photo}}" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <p>{{$obj->description}}</p>
                            <ul>
                                <li>
                                    Mc:
                                    @if($obj->mc_gala_dinner == 0)
                                        không
                                    @else
                                        có
                                    @endif
                                </li>
                                <li>Team Building:
                                    @if($obj->team_building == 0)
                                        không
                                    @else
                                        có
                                    @endif
                                </li>
                                <li>Card:
                                    @if($obj->card == 0)
                                        không
                                    @else
                                        có
                                    @endif
                                </li>

                            </ul>
                        </div>
                        <div class="box-bottom">
                            {{--<span class="price">Starting <span class="amout">$260</span></span>--}}
                            <a href="#" class="detail-btn">VIEW DETAILS</a>
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
