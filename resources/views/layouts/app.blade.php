<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CVMaker') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{--    <link rel="stylesheet" href="{{url('css/fixed.css')}}">--}}
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/CVmaker.css')}}">
    <link rel="stylesheet" href="{{url('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('owl/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('owl/dist/assets/owl.theme.default.min.css')}}">

    <style>
        .cvNav{
            padding-top: 12px;
        }

        .darkOverlay:after{
            content:'';
            position: absolute;
            background: #000;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            opacity: 0.6;
        }
        .icon{
            cursor: pointer;
        }

        @unless(isset($is_homepage) && $is_homepage)
            #app {
            margin-top: 100px;
        }

        .cvNav{
            background:rgba(0,0,0,1);padding-top:5px;transition:all .5s;
        }
        @endif
    </style>
    @yield("styles")
</head>

<body onscroll="cvNav()" data-spy="scroll" data-target="#navbarResponsive">
<header>
    <nav class="navbar navbar-expand-md navbar-light navbar-inverse fixed-top cvNav" style="">
        <a class="navbar-brand ml-3" href="{{url('/')}}"><img src="/images/main/logo.png" alt="logo"></a><h4 class="text-white">Professional CV Makers</h4>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user/dashboard')}}">Dashboard</a>
                    </li>

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">--}}
{{--                            CV--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="#CV">CV Template</a>--}}
{{--                            <a class="dropdown-item" href="#">CV Sample</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Student CV Builder</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/cv')}}">CV Manager</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/jobs')}}">Jobs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('company')}}">Company Portal</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('jobs')}}">Jobs</a>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{route('register')}}">Register</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{route('login')}}">Sign</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    @if(isset($is_homepage) && $is_homepage)
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade cvCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner myinner">
                <div class="carousel-item darkOverlay active">
                    <img class="banner d-block w-100" src="/images/main/m1.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h2>Creative <span>Designs</span></h2>
                        <h3>For You</h3>
                        <p><a class="btnSlider" href="{{url('user/cv')}}">Create A CV</a></p>
                    </div>
                </div>
                <div class="carousel-item darkOverlay">
                    <img class="banner d-block w-100" src="/images/main/m2.png" alt="Second slide">
                    <div class="carousel-caption">
                        <h2>Better <span>Chances</span></h2>
                        <p>To get A Job</p>
                        <p><a class="btnSlider" href="{{url('user/cv')}}">Create A CV</a></p>
                    </div>
                </div>
                <div class="carousel-item darkOverlay">
                    <img class="banner d-block w-100" src="/images/main/m3.jpg" alt="Third slide">
                    <div class="carousel-caption">
                        <h2>Suitable <span>Jobs</span></h2>
                        <p>For You</p>
                        <p><a class="btnSlider" href="{{url('user/cv')}}">Create A CV</a></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endif
</header>

<div id="app">
    @yield('content')
</div>

<!-- Start Footer Section-->
<footer class="page-footer font-small lighten-5" id="footer">
    <div style="background-color: whitesmoke;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic icon">
                        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-f white-text mr-4"> </i></a>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic icon">
                        <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter white-text mr-4"> </i></a>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic icon">
                        <a href="https://www.gmail.com" target="_blank"><i class="fa fa-google-plus mr-4"></i></a>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic icon">
                        <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin mr-4"></i></a>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic icon">
                        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram white-text"> </i></a>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3 text-white">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                <!-- Content -->

                <img src="/images/main/logo.png" alt="logo" height="200px" width="250px">
                <h5 class="text-uppercase font-weight-bold text-success">Professional CV Maker</h5>
                <p class="text-justify">From where, you can easily develop your desire CV within 15 minutes.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 sub">
                <!-- Links -->

                <h6 class="text-uppercase green font-weight-bold">AS User</h6>

                <p>
                    <a class="dark-grey-text" href="{{url('/')}}">Home</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="{{route('login')}}">Registration & Sign in</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#cvtempletes">CV Templetes</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="{{url('jobs')}}">Find Jobs</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#test">Feedback</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="{{url('/user/dashboard/contact')}}">User Support</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 sub">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold green">Useful links</h6>

                <p>
                    <a class="dark-grey-text" href="{{url('company')}}">Company Portal</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="{{url('jobs')}}">Find a Job</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="{{route('company.jobpost.create')}}">Post a Job</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="{{url('/company/dashboard/contact')}}">Help</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold green">Contact</h6>
                <p>
                    <i class="fa fa-home mr-3 icon"></i> Pakistan,Punjab , PK</p>
                <p>
                    <i class="fa fa-envelope mr-3 icon"></i> CVMaker@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3 icon"></i> + 92 303 6473659</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
        <a class="text icon" href="#"> ProfessionalCVMaker.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!--End Footer Section-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script type="text/javascript" src="{{url('js/swiper.min.js')}}"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
            dots:false
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
<script>
    // Getting Element
    var nav = document.querySelector(".cvNav");
    // Don't Remove this Element
    //var navBrand = document.querySelector(".navbar-brand img");
    var drop = document.querySelector(".dropdown-menu");

    function cvNav(){
        var y = window.pageYOffset;
        if(y > 120){
            nav.style="background:rgba(0,0,0,1);padding-top:5px;transition:all .5s;";
            drop.style="background:rgba(0,0,0,1)!important;";
        }
        else{
            nav.style="background:;padding-top:;transition:all .5s;";
            drop.style="background:;";
        }
    }

    cvNav();
</script>
@yield("scripts")
{{--Owl carousel--}}
<script src="{{url('owl/dist/owl.carousel.min.js')}}"></script>
<script>
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout:3000,
        autoplaySpeed:2000,
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>
{{--Owl carousel--}}

</body>
</html>
