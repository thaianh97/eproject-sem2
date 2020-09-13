@extends("layout.customer-layout")

@section("vendor")

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
    <!-- FIND TOUR GUIDES css-->
    <link rel="stylesheet" href="{{asset("css/customer-style/find-tourguide.css")}}">
@endsection

@section("title") Tìm HDV @endsection


@section("header")
    <div class="small-banner text-center">
        <div class="banner-content">
            <h2>Tìm Hướng Dẫn viên</h2>
            <p>Lựa chọn một hướng dẫn viên phù hợp để đồng hành cùng bạn</p>
        </div>
    </div>
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
                            <p style="font-size: 12px;"><span class="selected-filter-name">Thời gian:</span> {{$start}}
                                - {{$end}}</p>
                        </div>
                        <div class="selected-filter-item">
                            <p><span
                                    class="selected-filter-name">Địa Điểm:</span> @if($chosen_area) {{$chosen_area->province}} @endif
                            </p>
                        </div>
                    </div>

                    <div class="filter-form-container">
                        <h2 class="selected-filter-title">tìm hướng dẫn viên</h2>
                        <form action="/find" method="get" class="filter-form">
                            @csrf
                            <div class="filter-form-input-wrapper">
                                <h3 class="filter-form-input-title">Thời Gian</h3>
                                <label for="from" class="filter-form-label">khởi hành</label>
                                <input type="text" class="filter-form-date-input" id="from"
                                       placeholder="Ấn để chọn ngày" name="start" value="{{$start}}">

                                <label for="to" class="filter-form-label">kết thúc</label>
                                <input type="text" class="filter-form-date-input" id="to"
                                       placeholder="Ấn để chọn ngày" name="end" value="{{$end}}">
                            </div>

                            <div class="filter-form-input-wrapper">
                                <h3 class="filter-form-input-title">Địa Điểm</h3>
                                <select name="area_id" id="province-select">
                                    @if($chosen_area != null)
                                        <option value="0">Chọn khu vực...</option>
                                        @foreach(\App\Area::all() as $item)
                                            <option value="{{$item->id}}"
                                                    @if($item->id == $chosen_area->id ) selected @endif>{{$item->province}}</option>
                                        @endforeach
                                    @else
                                        @foreach(\App\Area::all() as $item)
                                            <option value="0">Chọn khu vực...</option>
                                            <option value="{{$item->id}}">{{$item->province}} </option>
                                        @endforeach
                                    @endif
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
                        @foreach($list as $obj)
                            <div class="tour-guide-item">
                                <h2 class="tour-guide-item-name">{{$obj->full_name}}</h2>
                                <div class="row content-container">
                                    <div class="tour-guide-item-img col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <img src="{{$obj->large_photo}}" alt="" class="img-responsive">
                                    </div>
                                    <div class="tour-guide-item-description col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <p>{{$obj->description}}</p>
                                        <ul class="list-option">
                                            <li>Năm sinh: {{$obj->year_of_birth}}</li>
                                            <li>Giới tính: @if($obj->gender == 1) nam @elseif($obj->gender == 2)
                                                    Nữ @else Khác @endif</li>
                                            <li> Địa điểm dẫn tour:
                                                @foreach((\App\TourGuideArea::query()->where("guide_id", $obj->id)->get()) as $tourGuideArea)
                                                    {{\App\Area::find($tourGuideArea->area_id)->province}}
                                                @endforeach
                                            </li>
                                        </ul>
                                        <div class="bottom-content">
                                            <p class="price"><span class="amount money">{{$obj->price}} <span class="vnd">đ</span></span> /ngày</p>
                                            <a href="/show/tourGuide/{{$obj->id}}" class="book-btn">Chọn Hướng Dẫn
                                                Viên</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

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
@endsection
