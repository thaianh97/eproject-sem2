@extends("layout.customer-layout")
@section("content")
    <div class="content">
        <div class="date-form">
            <form action="#" method="get" id="travel-date-form">
                <div class="date-form-group">
                    <label for="start">Start Day</label>
                    <input type="text" id="start" name="start" class="date-input"
                           placeholder="click to pick up date...">
                </div>
                <div class="date-form-group">
                    <label for="end">End Day</label>
                    <input type="text" id="end" name="end" class="date-input" placeholder="click to pick up date...">
                </div>
                <input type="submit" class="btn btn-primary" value="check avaibility">
            </form>
        </div>

        <div id="tourguide-container">
            <h1 class="section-header">Hướng dẫn viên</h1>
            <div class="outline"></div>
            <div id="tourguides" class="container">

                <div class="row">
                    <div class="box col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="box-img">
                            <img src="/img/tourguide/tourguide1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h1>Name</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum!</p>
                            <a href="#" class="tourguide-btn">Đặt Ngay</a>
                        </div>
                    </div>
                    <div class="box col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="box-img">
                            <img src="/img/tourguide/tourguide1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h1>Name</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum!</p>
                            <a href="#" class="tourguide-btn">Đặt Ngay</a>
                        </div>
                    </div>
                    <div class="box col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="box-img">
                            <img src="/img/tourguide/tourguide1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h1>Name</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum!</p>
                            <a href="#" class="tourguide-btn">Đặt Ngay</a>
                        </div>
                    </div>
                </div><!-- end row 1-->

                <div class="row">
                    <div class="box col-md-4 col-sm-4">
                        <div class="box-img">
                            <img src="/img/tourguide/tourguide1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h1>Name</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum!</p>
                            <a href="#" class="tourguide-btn">Đặt Ngay</a>
                        </div>
                    </div>
                    <div class="box col-md-4 col-sm-4">
                        <div class="box-img">
                            <img src="/img/tourguide/tourguide1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h1>Name</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum!</p>
                            <a href="#" class="tourguide-btn">Đặt Ngay</a>
                        </div>
                    </div>
                    <div class="box col-md-4 col-sm-4">
                        <div class="box-img">
                            <img src="/img/tourguide/tourguide1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="box-content">
                            <h1>Name</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum!</p>
                            <a href="#" class="tourguide-btn">Đặt Ngay</a>
                        </div>
                    </div>
                </div><!-- end row 3-->

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
            <div class="about-us-image-container row">
                <div class="about-us-image-left col">
                    <img src="{{asset("img/about/about.jpg")}}" alt="" class="img-responsive">
                </div>
                <div class="about-us-image-center">
                    <img src="{{asset("img/about/about-1.jpg")}}" alt="">
                </div>
                <div class="about-us-image-right">
                    <img src="{{asset("img/about/about-2.jpg")}}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
        <div id="events">
            <h1 class="section-header">SỰ KIỆN</h1>
            <div class="line"></div>
            <div class="events-images-container">
                <div class="events-image-left">
                    <img src="{{asset("img/event/event.jpg")}}" alt="">
                </div>
                <div class="events-images-right">
                    <div class="events-images-top">
                        <img src="{{asset("img/event/event1.jpg")}}" alt="">
                    </div>
                    <div class="events-images-bottom">
                        <img src="{{asset("img/event/event2.jpg")}}" alt="">
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

    </div>
@endsection
