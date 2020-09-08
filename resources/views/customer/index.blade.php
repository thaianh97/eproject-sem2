@extends("layout.customer-layout")

@section("title") Tourguide - Home @endsection
@section("vendor")
    <!-- Bootstrap CSS 3 + Jquery 3.5.1 + BOOSTRAP JS 3.4.1
            ============================================ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Datedropper jquery plugin -->
    <script src="{{asset("js/datedropper/datedropper.pro.min.js")}}"></script>
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section("style-sheets")
    <!--  CSS for big-banner
    ============================================ -->
    <link rel="stylesheet" href="{{asset("css/customer-style/big-banner.css")}}">
    <!--  CSS for navbar
    ============================================ -->
    <link rel="stylesheet" href="{{asset("css/customer-style/navbar.css")}}">
    <!-- STYLE FOR FOOTER-->
    <link rel="stylesheet" href="{{asset("css/customer-style/footer.css")}}">
    <!-- STYLE FOR HOME PAGE -->
    <link rel="stylesheet" href="{{asset("css/customer-style/home.css")}}">
@endsection

{{--header--}}
@section("header")
    @include("inc.big-banner")
    @include("inc.navbar")
@endsection

{{--content--}}
@section("content")
    <div class="content">
        <div class="date-form">
            <h1 class="date-form-header">Tìm Hướng Dẫn Viên</h1>
            <form action="/find" method="get" id="travel-date-form">
                @csrf
                <div class="row">
                    <div class="date-form-group col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <label for="start">Ngày khởi hành: </label>
                        <input type="text" id="start" name="start" class="date-input"
                               placeholder="click to pick up date..."required>
                    </div>
                    <div class="date-form-group col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <label for="end">Ngày kết thúc: </label>
                        <input type="text" id="end" name="end" class="date-input"
                               placeholder="click to pick up date..." required>
                    </div>
                    <div class="date-form-group col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <label for="destination">Địa điểm:</label>
                        <select class="form-control" id="destination" name="area_id">
                                <option value="0">Chọn địa điểm...</option>
                            @foreach(\App\Area::all() as $obj)
                                <option value="{{$obj->id}}">{{$obj->province}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-md-3 col-lg-2 col-sm-12 col-xs-12 btn-submit-wrapper">
                        <input type="submit" class="btn chek-availability-btn" value="check availability">
                    </div>
                </div>
            </form>
        </div>
        <!-- SHOW TOUR GUIDES USE OWL CASOUEL-->
        <div id="tourguide-container">
            <h1 class="section-header">Hướng dẫn viên</h1>
            <div class="outline"></div>
            <div id="slider">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{asset("img/tourguide/person.jpg")}}" alt="">
                            </div>
                            <div class="box-content">
                                <h3>name</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{asset("img/tourguide/tourguide1.jpg")}}" alt="">
                            </div>
                            <div class="box-content">
                                <h3>name</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{asset("img/tourguide/person.jpg")}}" alt="">
                            </div>
                            <div class="box-content">
                                <h3>name</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{asset("img/tourguide/tourguide1.jpg")}}" alt="">
                            </div>
                            <div class="box-content">
                                <h3>name</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{asset("img/tourguide/tourguide1.jpg")}}" alt="">
                            </div>
                            <div class="box-content">
                                <h3>name</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="about-us" class="container">
            <h1 class="section-header">Về chúng tôi</h1>
            <div class="line"></div>
            <div class="about-us-content">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aut
                    consequatur, dicta enim
                    eos ex facere id minima numquam, quis, rem repellat tempora! Adipisci fugiat modi natus quasi velit
                    vero. Dicta est nihil nostrum quam quas. Ab aut dolores illo laboriosam, maxime nesciunt non
                    numquam,
                    sit suscipit tempore voluptatum.</p>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores assumenda
                    cupiditate doloremque
                    nobis provident quos reiciendis, repellendus tenetur ullam veritatis?</p>
            </div>
            <div class="about-us-image-container container">
                <div class="row">
                    <div class="about-us-image-left col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img src="{{asset("img/about/about.jpg")}}" alt="" class="img-responsive">
                    </div>
                    <div class="about-us-image-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <img src="{{asset("img/about/about-1.jpg")}}" alt="" class="img-responsive">
                    </div>
                    <div class="about-us-image-right col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img src="{{asset("img/about/about-2.jpg")}}" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div id="events">
            <h1 class="section-header">SỰ KIỆN</h1>
            <div class="line"></div>
            <div class="container">
                <div class="owl-carousel owl-theme" id="event-slider">
                    <div class="item">
                        <div class="event-item">
                            <div class="event-item-img">
                                <img src="{{asset("img/event/Our-Events-1.jpg")}}" alt="event 1" class="img-responsive">
                            </div>
                            <div class="event-item-content">
                                <p>Events</p>
                                <h3>Event Name</h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="event-item">
                            <div class="event-item-img">
                                <img src="{{asset("img/event/Our-Events-2.jpg")}}" alt="event 1" class="img-responsive">
                            </div>
                            <div class="event-item-content">
                                <p>Events</p>
                                <h3>Event Name</h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="event-item">
                            <div class="event-item-img">
                                <img src="{{asset("img/event/Our-Events-3.jpg")}}" alt="event 1" class="img-responsive">
                            </div>
                            <div class="event-item-content">
                                <p>Events</p>
                                <h3>Event Name</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.363098732339!2d105.42373581476807!3d10.392708592582625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a72c166dcb49f%3A0xaff3015eecd8b228!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgcC4gQsOsbmggS2jDoW5oLCBUaMOgbmggcGjhu5EgTG9uZyBYdXnDqm4sIEFuIEdpYW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1598191642798!5m2!1svi!2s"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
@endsection

@section("footer")
    @include("inc.footer")
@endsection

@section("scripts")
    <script src="{{asset("js/header.js")}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <!-- Date dropper srcipt-->
    <script>
        $('#start').dateDropper({
            theme: "leaf",
            format: "d/m/Y",
            large: true,
            largeDefault: false,
        });

        $('#end').dateDropper({
            theme: "leaf",
            format: "d/m/Y",
            large: true,
            largeDefault: false,
        });
    </script>
    <!-- init slider -->
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                center: true,
                items: 3,
                dots: true,
                responsive: {
                    0: {
                        items: 1,


                    },
                    940: {
                        items: 2,

                    },

                    1400: {
                        items: 3,


                    }
                }
            })
        });

        <!-- init slider -->

        $(document).ready(function () {
            $('#event-slider.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                center: true,
                items: 3,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        dots: false,
                    },
                    662: {
                        items: 2,
                        dots: false,
                    },

                    1400: {
                        items: 3,
                        dots: false,
                    }
                },

            })
        });
    </script>
@endsection




