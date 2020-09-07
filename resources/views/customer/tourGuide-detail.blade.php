@extends("layout.customer-layout")
@extends("inc.small-banner")
@section("vendor")
    <!-- BOOSTRAP #3.4.1 jquery #3.5.1 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <!-- style sheets for tour guide detail -->
    <link rel="stylesheet" href="{{asset("css/customer-style/tour-guide-detail.css")}}">
@endsection

@section("title")
    Tour guide Details
@endsection

@section("banner-title")
    Detail
@endsection

@section("banner-description")
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, recusandae.
@endsection

@section("header")
    @include("inc.navbar")
@endsection

@section("content")
    <div class="content">
        <div id="book-form" class="container">
            <div class="row book-container">
                <div class="col-md-6 col-sm-6 book-img-container">
                    <div class="book-img">
                        <img src="{{$obj->large_photo}}" alt="" class="img-responsive">
                        <div class="tour-guide-name">
                            <h2>{{$obj->full_name}}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 book-form-container">
                    <div class="price-container">
                        <p>Total: <span class="price">320</span> &dollar;</p>
                    </div>
                    <form action="/book/{{$obj->id}}" class="book-form" method="post">
                        @csrf
                        <div class="input-wrapper">
                            <label for="start">Ngày khởi hành: </label>
                            <input type="text" id="start" name="start" placeholder="ấn để chon ngày" required
                                   class="date-input"/>
                        </div>

                        <div class="input-wrapper">
                            <label for="duration">Số ngày đi: </label>
                            <input type="number" id="duration" name="duration"  required
                                   class="date-input"/>
                        </div>
                        <div class="input-wrapper">
                            <label for="province">Tỉnh đi: </label>
                            <select name="province_id" id="province-select">
                                <option value="1">Hà Nội</option>
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <label for="party-number">Số người đi tour: </label>
                            <input type="number" id="party_number" name="party_number" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="submit" value="Đặt Hướng Dẫn Viên" class="book-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="tour-guide-detail" class="container">
            <div class="row detail-container">
                <div class="col-md-3">
                    <ul class="detail-tab-link-container">
                        <li>
                            <a href="#" class="detail-tab-link-item" data-tabname="description">Mô Tả</a>
                        </li>
                        <li><a href="#" class="detail-tab-link-item" data-tabname="calendar">Lịch</a></li>
                        <li><a href="#" class="detail-tab-link-item" data-tabname="feed-back">feed back</a></li>
                    </ul>
                </div>

                <div class="col-md-9 tab-content-container">
                    <div id="description" class="tab-content">
                        <h3 class="tourguide-name">{{$obj->full_name}}</h3>
                        <p class="detail-descrition">{{$obj->description}}</p>
                        <ul class="tourguide-option">
                            @if($obj->gala_mc_dinner == 1)
                                <li>Có thể tổ chức sự kiện, gala và làm MC</li>
                            @endif

                            @if($obj->team_building == 1)
                                <li>Có thể tổ chức các trò chơi team building<</li>
                            @endif

                            @if($obj->card == 1)
                                <li>Có Thẻ hướng dẫn viên do bộ du lich cấp phát</li>
                            @endif

                        </ul>
                    </div>
                    <div id="calendar" class="tab-content">
                        this is calendar tab
                    </div>
                    <div id="feed-back" class="tab-content">
                        this is feed back tab
                    </div>
                </div>
            </div>
        </div>

        <div id="related-tourguide" class="container">
            <h1 class="section-header" style="margin-bottom: 50px;">Hướng dẫn viên liên quan</h1>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h3 class="box-name">Jon Doe</h3>
                            <p class="box-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At,
                                dolorem.</p>
                            <ul class="box-option">
                                <li>Có thể tổ chức sự kiện, gala và làm MC</li>
                                <li>Có thể tổ chức các trò chơi team building<</li>
                                <li>Có Thẻ hướng dẫn viên do bộ du lich cấp phát</li>
                            </ul>
                            <a href="#" class="detail-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h3 class="box-name">Jon Doe</h3>
                            <p class="box-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At,
                                dolorem.</p>
                            <ul class="box-option">
                                <li>Có thể tổ chức sự kiện, gala và làm MC</li>
                                <li>Có thể tổ chức các trò chơi team building<</li>
                                <li>Có Thẻ hướng dẫn viên do bộ du lich cấp phát</li>
                            </ul>
                            <a href="#" class="detail-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h3 class="box-name">Jon Doe</h3>
                            <p class="box-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At,
                                dolorem.</p>
                            <ul class="box-option">
                                <li>Có thể tổ chức sự kiện, gala và làm MC</li>
                                <li>Có thể tổ chức các trò chơi team building<</li>
                                <li>Có Thẻ hướng dẫn viên do bộ du lich cấp phát</li>
                            </ul>
                            <a href="#" class="detail-btn">Xem chi tiết</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset("img/tourguide/person.jpg")}}" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h3 class="box-name">Jon Doe</h3>
                            <p class="box-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At,
                                dolorem.</p>
                            <ul class="box-option">
                                <li>Có thể tổ chức sự kiện, gala và làm MC</li>
                                <li>Có thể tổ chức các trò chơi team building<</li>
                                <li>Có Thẻ hướng dẫn viên do bộ du lich cấp phát</li>
                            </ul>
                            <a href="#" class="detail-btn">Xem chi tiết</a>
                        </div>
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
        //Date dropper srcipt
        $('#start').dateDropper({
            theme: "leaf",
            format: "d/m/Y",
            large: true,
            largeDefault: false,
        });


        //script for html tab
        $(".detail-tab-link-item").on("click", function (e) {
            //hide all
            $(".tab-content").fadeOut("fast");
            //deactive all
            $(".detail-tab-link-container li").removeClass("active");
            //get data
            e.preventDefault();
            let target = e.target;
            let tabName = target.dataset.tabname;
            //show tab
            $("#" + tabName + ".tab-content").fadeIn("fast");
            //set active
            let $liEl = $(target).parents("li");
            $liEl.addClass("active");
        })
    </script>

@endsection
