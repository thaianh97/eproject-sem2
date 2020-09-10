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
               <div class="col-md-2 side-bar">
                   <div class="side-bar-container">
                        <div class="profile-container">


                        </div>
                       <ul class="nav-side-bar">
                           <li class="nav-side-bar-item">Thông tin tài khoản</li>
                           <li class="nav-side-bar-item active">Quản lý giao dịch</li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-10">
                   <h1 class="header">Quản lý giao dịch</h1>
                   <table class="table">
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
                       <tr class="table-content">
                           <td>1</td>
                           <td>hgkj</td>
                           <td>10/12/2020</td>
                           <td>12/12/2020</td>
                           <td>dsad</td>
                           <td class="text-right">đá</td>
                           <td class="text-right">dsa</td>
                           <td class="text-right">dsadsa</td>
                       </tr>

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

