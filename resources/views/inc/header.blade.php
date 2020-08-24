
<div class="header">
    <div class="header-container">
        <!--HEADER TOP-->
        <div class="header-top">
            <div class="header-top-left">
                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Viet Nam</span>
                <span><i class="fa fa-phone" aria-hidden="true"></i> +84 333 237 860</span>
            </div>
            <a href="#" class="logo-brand">
                <img src="img/logo/sky-logo-header.png" alt="logo">
            </a>
            <div class="header-top-right">
                <a href="" class="header-link">
                    <span><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                </a>
                <a href="" class="header-link">
                    <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                </a>
                <a href="/login" class="header-link">Login</a>
                <a href="#" class="header-link">Register</a>
            </div>
        </div> <!-- END HEADER TOP-->

        <!-- HEADER MENU-->
        <div class="header-menu">
{{--            <a href="#" class="logo-brand">--}}
{{--                <img src="img/logo/sky-logo-header.png" alt="logo">--}}
{{--            </a>--}}
            <ul class="menu">
                <li class="menu-item">
                    <a href="/" class="menu-item-link">HOME</a></li>
                <li class="menu-item">
                    <a href="" class="menu-item-link">GAllERY</a></li>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-item-link">CONTACT</a></li>
                </li>
                <li class="menu-item">
                    <a href="/about" class="menu-item-link">ABOUT</a></li>
                </li>
            </ul>
        </div> <!-- END HEADER MENU -->
    </div>

    <!-- SLIDE BANNER -->
    <div id="banner-slide" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('img/background/bg1.jpg')}}" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="{{asset('img/background/bg2.jpg')}}" alt="Chicago">
            </div>

            <div class="item">
                <img src="{{asset('img/background/bg3.jpg')}}" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#banner-slide" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#banner-slide" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>







