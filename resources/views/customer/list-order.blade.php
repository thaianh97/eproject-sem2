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
    <!-- list order css-->
    <link rel="stylesheet" href="{{asset("css/customer-style/list-order.css")}}">
@endsection

@section("title") Trạng thái giao dịch @endsection


@section("header")
    <div class="small-banner text-center">
        <div class="banner-content">
            <h2>Trạng thái giao dịch</h2>
            <p>Theo dõi giao dịch của bạn</p>
        </div>
    </div>
    @include("inc.navbar")
@endsection

@section("banner-title")
    Danh Sách Giao Dịch
@endsection

@section("banner-description")
    Các giao dịch tài khoản đã thực hiện và đang thực hiện
@endsection

@section("content")
    <div class="content">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="header">Quản lý giao dịch</h1>
                    <table class="table table-striped table-hover">
                        <tr class="table-head">
                            <th>Mã giao dịch</th>
                            <th>Ngày đặt</th>
                            <th>Ngày khởi hành</th>
                            <th>Ngày kết thúc</th>

                            <th>Địa Điểm</th>
                            <th>Số người</th>
                            <th>Tổng tiền (đ)</th>
                            <th>Trạng thái</th>
                        </tr>
                        @foreach($listTransaction as $item)

                            <tr class="table-content">
                                <td><a href="/customer/order/{{$item->id}}" class="order-detail-link">{{$item->id}}</a></td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->start}}</td>
                                <td>{{$item->end}}</td>
                                <td>{{\App\Area::find($item->province_id)->province}}</td>
                                <td class="text-right">{{$item->party_number}}</td>
                                <td class="text-right">{{$item->total_cost}}</td>
                                <td class="text-right">
                                    @if($item->status == 0)
                                        Chưa thanh toán
                                    @elseif($item->status == 1)
                                        Đã thanh toán
                                    @else
                                        Hủy
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </table>
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

