@extends("layout.customer-layout")
@section("vendor")
    <!-- BOOSTRAP #3.4.1 jquery #3.5.1 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Date picker jquery plugin -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
        @if(session("msg") != null)
            <p class="alert alert-danger msg-box">{{session("msg")}} <span class="close-btn">x</span></p>
        @endif
        <div id="book-form" class="container">
            <div class="row book-container">
                <div class="col-lg-9  book-img-container">
                    <div class="book-img">
                        <img src="{{$obj->large_photo}}" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="col-lg-3 book-form-container">
                    <div class="price-container">
                        <p><span class="amount"></span> <span class="price"> /ngày</span></p>
                    </div>
                    <form action="/book/{{$obj->id}}" class="book-form" method="post">
                        @csrf
                        <div class="input-wrapper">
                            <label for="start">Ngày khởi hành</label>
                            <input type="text" id="from" name="start" placeholder="ấn để chon ngày" required
                                   class="date-input" autocomplete="off"/>
                        </div>

                        <div class="input-wrapper">
                            <label for="start">Ngày kết thúc </label>
                            <input type="text" id="to" name="end" placeholder="ấn để chon ngày" required
                                   class="date-input" autocomplete="off"/>
                        </div>
                        <div class="input-wrapper">
                            <label for="province">Tỉnh đi</label>
                            <select name="area_id" id="province-select">
                                @foreach((\App\TourGuideArea::query()->where("guide_id", $obj->id)->get()) as $tourGuideArea)
                                    <option
                                        value="{{$tourGuideArea->area_id}}">{{\App\Area::find($tourGuideArea->area_id)->province}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <label for="party-number">Số người đi tour</label>
                            <input type="number" id="party_number" name="party_number" required min="1" value="1">
                        </div>
                        <div class="input-wrapper">
                            <input type="submit" value="Đặt Hướng Dẫn Viên" class="book-btn" id="book-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- MODAL CONTENT for update info-->
        <div id="update-profile" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật thông tin để tiếp tục đặt hướng dẫn viên</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/modal/update/{{session("id")}}">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="username">Họ và tên: </label>
                                <input type="text" class="form-control" id="username" placeholder="Nhập họ và tên..."
                                       name="full_name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="email" class="form-control" id="email"
                                       placeholder="Nhập email..." name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại: </label>
                                <input type="text" class="form-control" id="phone"
                                       placeholder="Nhập số điện thoại..." name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="year_of_birth">Năm sinh: </label>
                                <input type="text" class="form-control" id="year_of_birth"
                                       placeholder="Nhập năm sinh..." name="year_of_birth" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ: </label>
                                <input type="text" class="form-control" id="address"
                                       placeholder="Nhập địa chỉ..." name="address" required>
                            </div>
                            <button type="submit" class="btn btn-default">Lưu</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
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
                                <li>Có thể tổ chức các trò chơi team building</li>
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
            <h1 class="header">Hướng dẫn viên liên quan</h1>
            <div class="row">
                <!-- start item -->
                @foreach($relatedTourGuideId as $id)
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{\App\TourGuide::find($id)->large_photo}}" alt="" class="img-responsive">
                            </div>
                            <div class="box-content">
                                <h3 class="box-name">{{\App\TourGuide::find($id)->full_name}}</h3>

                                <ul class="box-option">
                                    <li>Giới tính: {{\App\TourGuide::find($id)->gender}}</li>
                                    <li>Năm Sinh: {{\App\TourGuide::find($id)->year_of_birth}}</li>
                                    <li>
                                        Địa diểm dẫn tour:
                                        @foreach((\App\TourGuideArea::query()->where("guide_id", $id)->get()) as $tourGuideArea)

                                            {{\App\Area::find($tourGuideArea->area_id)->province}}
                                        @endforeach
                                    </li>
                                </ul>
                                <a href="/show/tourGuide/{{$id}}" class="detail-btn">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
@endsection

@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>

    <!-- Date picker script-->
    <script>
        $(function () {
            var dateFormat = "mm/dd/yy",
                from = $("#from")
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 1,
                        minDate: 0
                    })
                    .on("change", function () {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1
                })
                    .on("change", function () {
                        from.datepicker("option", "maxDate", getDate(this));
                    });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });
    </script>

    <script>

        //script for html tab
        $(".detail-tab-link-item").on("click", function (e) {
            //hide all
            $(".tab-content").hide();
            //deactive all
            $(".detail-tab-link-container li").removeClass("active");
            //get data
            e.preventDefault();
            let target = e.target;
            let tabName = target.dataset.tabname;
            //show tab
            $("#" + tabName + ".tab-content").show("0");
            //set active
            let $liEl = $(target).parents("li");
            $liEl.addClass("active");
        })
    </script>



    @if(\App\Customer::query()->where("account_id", session("id"))->first() == null && session("id") != null)
        <script>
            $("#book-btn").on("click", function (evt) {
                evt.preventDefault();
                $(evt.target).attr({
                    "data-toggle": "modal",
                    'data-target': "#update-profile",

                })
            })
        </script>
    @endif
    <script>
        $(".close-btn").on("click", function (e) {
            $(".msg-box").slideUp("fast");
        })

    </script>
    <script>
        var errorMsg = document.createElement("p");
        $("input[name ='username']").on("blur", function (e) {
            var username = e.target.value;
            if (username.length() == 0) {
                errorMsg.textContent = "không được bỏ trống";
            }
            if (username.length() < 6) {
                errorMsg.textContent = "Tên đăng nhập không được dưới 6 ký tự"
            }
            e.target.appendChild(errorMsg);
            console.log(value);
        })

    </script>
    <script>
        $(".amount").text({{$obj->price}} + "đ")
        $("#party_number").on("change", function (evt) {
            var val = $(this).val();
            if(isNaN(val) || parseInt(val) < 0) {
                $(this).val(1);
            }
            //count sum
            {{--let price = {{$obj->price}};--}}
            {{--$(".amount").text(parseFloat(price) * parseInt(val) + "đ")--}}
        })
    </script>
@endsection
