@extends("layout.customer-layout")
@extends("inc.small-banner")
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
    <link rel="stylesheet" href="{{asset("css/customer-style/find-tourguide.css")}}">
@endsection

@section("title") Tìm HDV @endsection


@section("header")
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
        <h1 class="section-header">Tìm Hướng Dẫn Viên</h1>
        <div class="line"></div>
        <div class="container list-tour-guide">
            <div class="row">
                <!-- LEFT SIDE BAR -->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar-left">
                    <div class="selected-filter">
                        <h2 class="selected-filter-title">Bạn Đang Tìm</h2>

                        <div class="selected-filter-item">
                            <p><span class="selected-filter-name">Thời gian:</span> {{$start}} - {{$end}}</p>
                        </div>
                        <div class="selected-filter-item">
                            <p><span class="selected-filter-name">Địa Điểm:</span> Đà Nẵng</p>
                        </div>
                    </div>

                    <div class="filter-form-container">
                        <h2 class="selected-filter-title">tìm hướng dẫn viên</h2>
                        <form action="/find" method="get" class="filter-form">
                            @csrf
                            <div class="filter-form-input-wrapper">
                                <h3 class="filter-form-input-title">Thời Gian</h3>
                                <label for="start" class="filter-form-label">khởi hành</label>
                                <input type="text" class="filter-form-date-input" id="start"
                                       placeholder="Ấn để chọn ngày" name = "start">

                                <label for="end" class="filter-form-label">kết thúc</label>
                                <input type="text" class="filter-form-date-input" id="end"
                                       placeholder="Ấn để chọn ngày" name ="end">
                            </div>

                            <div class="filter-form-input-wrapper">
                                <h3 class="filter-form-input-title">Địa Điểm</h3>
                                <select name="province" id="province-select">
                                    <option value="thai nguyen">Thái Nguyên</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                </select>
                            </div>
                            <div class="filter-form-input-wrapper">
                                <input type="submit" value="Tìm Hướng Dẫn Viên" class="filter-form-submit-btn">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END SIDE BAR-->

                <!-- CONTENt -->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 main-contain">
                    <div class="tour-guide-container">

                        <div class="tour-guide-item">
                            <h2 class="tour-guide-item-name">Lưu Huy</h2>
                            <div class="row">
                                <div class="tour-guide-item-img col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                                </div>
                                <div class="tour-guide-item-description col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur
                                        facere, ipsum nam quae quas reprehenderit sed. Accusantium architecto corporis
                                        dolorum, earum id nihil, obcaecati perferendis quos sunt tempore vel.</p>
                                    <ul class="list-option">
                                        <li>Lorem ipsum dolor.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                    <a href="#" class="tourguide-detail-link">Xem chi tiết hướng dẫn viên</a>
                                    <span class="price">1.200 000 VNĐ</span>
                                    <a href="#" class="book-btn">Đặt Ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="tour-guide-item">
                            <h2 class="tour-guide-item-name">Lưu Huy</h2>
                            <div class="row">
                                <div class="tour-guide-item-img col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                                </div>
                                <div class="tour-guide-item-description col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur
                                        facere, ipsum nam quae quas reprehenderit sed. Accusantium architecto corporis
                                        dolorum, earum id nihil, obcaecati perferendis quos sunt tempore vel.</p>
                                    <ul class="list-option">
                                        <li>Lorem ipsum dolor.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                    <a href="#" class="tourguide-detail-link">Xem chi tiết hướng dẫn viên</a>
                                    <span class="price">1.200 000 VNĐ</span>
                                    <a href="#" class="book-btn">Đặt Ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="tour-guide-item">
                            <h2 class="tour-guide-item-name">Lưu Huy</h2>
                            <div class="row">
                                <div class="tour-guide-item-img col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                                </div>
                                <div class="tour-guide-item-description col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur
                                        facere, ipsum nam quae quas reprehenderit sed. Accusantium architecto corporis
                                        dolorum, earum id nihil, obcaecati perferendis quos sunt tempore vel.</p>
                                    <ul class="list-option">
                                        <li>Lorem ipsum dolor.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                    <a href="#" class="tourguide-detail-link">Xem chi tiết hướng dẫn viên</a>
                                    <span class="price">1.200 000 VNĐ</span>
                                    <a href="#" class="book-btn">Đặt Ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="tour-guide-item">
                            <h2 class="tour-guide-item-name">Lưu Huy</h2>
                            <div class="row">
                                <div class="tour-guide-item-img col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                                </div>
                                <div class="tour-guide-item-description col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur
                                        facere, ipsum nam quae quas reprehenderit sed. Accusantium architecto corporis
                                        dolorum, earum id nihil, obcaecati perferendis quos sunt tempore vel.</p>
                                    <ul class="list-option">
                                        <li>Lorem ipsum dolor.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                    <a href="#" class="tourguide-detail-link">Xem chi tiết hướng dẫn viên</a>
                                    <span class="price">1.200 000 VNĐ</span>
                                    <a href="#" class="book-btn">Đặt Ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="tour-guide-item">
                            <h2 class="tour-guide-item-name">Lưu Huy</h2>
                            <div class="row">
                                <div class="tour-guide-item-img col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                                </div>
                                <div class="tour-guide-item-description col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur
                                        facere, ipsum nam quae quas reprehenderit sed. Accusantium architecto corporis
                                        dolorum, earum id nihil, obcaecati perferendis quos sunt tempore vel.</p>
                                    <ul class="list-option">
                                        <li>Lorem ipsum dolor.</li>
                                        <li>Lorem ipsum dolor sit.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                    <a href="#" class="tourguide-detail-link">Xem chi tiết hướng dẫn viên</a>
                                    <span class="price">1.200 000 VNĐ</span>
                                    <a href="#" class="book-btn">Đặt Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("inc.footer")
@endsection
@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>

    <!-- Date dropper srcipt-->
    <script>
        $('#start').dateDropper({
            theme: "leaf",
            format: "d/m/Y",
            large: true,
            largeDefault: true,
        });

        $('#end').dateDropper({
            theme: "leaf",
            format: "d/m/Y",
            large: true,
            largeDefault: true,
        });
    </script>
@endsection
