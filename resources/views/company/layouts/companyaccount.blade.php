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
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    {{--    <link rel="stylesheet" href="{{url('css/fixed.css')}}">--}}
    <link rel="stylesheet" href="{{url('/css/app.css')}}">
    <link rel="stylesheet" href="{{url('/css/CVmaker.css')}}">
    <link rel="stylesheet" href="{{url('/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('/fontawesome/css/all.css')}}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontawesome link -->
    <link rel="stylesheet" href="{{url('/fontawesome/css/all.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Account</title>
    <style>
        *{
            font-family: 'Cabin', sans-serif;
            box-sizing: border-box;
        }
        select{width:100%;}
        body{background-color: #fff0ff;}
        .left{background-color:#28A745;}
        /*.cvNav{*/
        /*    padding-top: 12px;*/
        /*}*/

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
        .cvNav ul li a{
            color: black!important;
        }
        .cvNav ul li a:hover{color:#28A745!important;font-size: 25px;text-shadow: 1px 1px black;}
        .navbar-brand{
            font-size: 14px;
        }
        #heading{color:#28A745!important;text-shadow:1px 1px black;}
        .cvNav{
            padding-top:14px;transition:all .5s;
        }
        @endif


        /*Content Designing*/
        .name{
            font-size: 22px;
            font-weight: 400;
            color: white;
            filter: drop-shadow(1px 1px 1px #000000);
        }
        small{
            display: block;
            margin-bottom: 20px;
            color: #f2f2f2;
        }
        .email{
            font-size: 18px;
            font-weight: 400;
            color: white;
            filter: drop-shadow(1px 1px 1px #000000);
        }
        label{font-family: "Arial Black";font-size:12px;color:#1d643b;}
        section a{color:white;font-size:20px;font-weight:400;margin:5px 0px 5px 0px;
            margin-top: 1rem!important;
        }
        section a:hover{text-decoration:none;color:yellow;font-size: 23px!important;text-shadow:1px 1px black; }

        .blink_text {

            animation:1s blinker linear infinite;
            -webkit-animation:1s blinker linear infinite;
            -moz-animation:1s blinker linear infinite;

            color: red;
        }

        @-moz-keyframes blinker {
            0% { opacity: 1.0; }
            50% { opacity: 0.0; }
            100% { opacity: 1.0; }
        }

        @-webkit-keyframes blinker {
            0% { opacity: 1.0; }
            50% { opacity: 0.0; }
            100% { opacity: 1.0; }
        }

        @keyframes blinker {
            0% { opacity: 1.0; }
            50% { opacity: 0.0; }
            100% { opacity: 1.0; }
        }

    </style>
    @yield("styles")
</head>

<body onscroll="cvNav()" data-spy="scroll" data-target="#navbarResponsive">

{{--main nav bar start--}}
<header>
    <nav class="navbar navbar-expand-md navbar-light navbar-inverse fixed-top cvNav" style="">
        <a class="navbar-brand ml-3" href="{{url('/')}}"><img src="{{ url('/images/main/logo.png') }}" alt="logo">Profesional CV Maker</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('company')}}">Home</a>
                </li>

                @auth('company')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('company/dashboard') ? 'active' : '' }}" href="{{route('company.dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('company.logout')}}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('company.logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth

                @guest('company')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('company//register') ? 'active' : '' }}" href="{{route('company.register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('company//login') ? 'active' : '' }}" href="{{route('company.login')}}">Login</a>
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
                    <img class="banner d-block w-100" src="{{ url('/images/main/m1.jpg') }}" alt="First slide">
                    <div class="carousel-caption">
                        <h2>Creative <span>Designs</span></h2>
                        <h3>For You</h3>
                        <p><a class="btnSlider" href="">Create A CV</a></p>
                    </div>
                </div>
                <div class="carousel-item darkOverlay">
                    <img class="banner d-block w-100" src="{{ url('/images/main/m2.png') }}" alt="Second slide">
                    <div class="carousel-caption">
                        <h2>Better <span>Chances</span></h2>
                        <p>To get A Job</p>
                        <p><a class="btnSlider" href="">Create A CV</a></p>
                    </div>
                </div>
                <div class="carousel-item darkOverlay">
                    <img class="banner d-block w-100" src="{{ url('/images/main/m3.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <h2>Suitable <span>Jobs</span></h2>
                        <p>For You</p>
                        <p><a class="btnSlider" href="">Create A CV</a></p>
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
{{--main nav bar end--}}


{{--Dashbaor Start--}}

{{--<section class="container" style="border:1px solid black">--}}
<div class="container-fluid comp row mr-5 pt-5 mt-5">
    <div class="col-md-3 py-5 pl-4  left" style="border-right:1px solid black">
        <small>@compnay_account</small>
        <img class="img-thumbnail rounded-circle" style="width:100px;height:100px;"  src="{{url( !empty(auth()->user()->image) ? str_replace("public", "storage", auth()->user()->image) : '/default.jpg' )}}">
            <span class="name">{{auth()->user()->name}}</span>
            <p class="email">{{auth()->user()->email}}</p>
            <hr>
            <section>
            <a href="/company/dashboard"><i class="fas fa-tachometer-alt pt-4 mr-3"></i>Dashboard</a>
            <hr>

            <a href="{{url('/company/dashboard/profile')}}"><i class="fas fa-user pt-4 mr-3"></i>Manage & Edit Profile</a><br>
            <a href="{{route('company.jobpost.create')}}"><i class="fas fa-plus-circle pt-4 mr-3"></i>Add New Job </a><br>
            <a href="{{route('company.jobpost.index')}}" ><i class="fas fa-edit pt-4 mr-3"></i>Posts</a><br>
            <a href="{{url('/company/dashboard/contact')}}"><i class="fas fa-hard-hat pt-4 mr-3"></i>Contact us </a><br>
            <a href="{{url('/company/dashboard/testimonial')}}"><i class="fas fa-star pt-4 mr-3"></i>Give Feedback</a><br>
            <hr>
            <a href="{{url('/company/dashboard/setting')}}"><i class="fas fa-cogs pt-4 mr-3"></i>Settings</a><br>
            </section>
    </div>

    <!--main contnt-->
    <div class="col-md-7">
        <section>
            @yield('centermain')
        </section>
    </div>

    <div class="col-md-1" >
        <br>
        <br>
        <img height="500px" width="230px" src="{{url('/images/adds/6.png') }}">
        <img height="300px" width="230px" src="{{url('/images/adds/1.png') }}">
{{--        <img height="300px" width="230px" src="{{url('/images/adds/2.png') }}">--}}
</div>


{{--Dashboard end--}}
</section>
{{--footor--}}
<div class="fixed-bottom bg-light">
    <div class="row">
        <div class="col-md-4">
            Professonal CV maker@All Rights are Reserved 2020
        </div>
        <div class="col-md-8">
            <span class="text-success">Need any kind of support/question?</span><a href="{{url('/company/dashboard/contact')}}" class="btn btn-sm btn-success">Help </a>
        </div>
    </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{url('/js/swiper.min.js')}}"></script>

{{--<script src="{{ asset('js/app.js') }}"></script>--}}

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
    var navLinks=document.querySelectorAll(".cvNav ul li a");
    var logoName=document.querySelector(".navbar-brand");
    // Don't Remove this Element
    //var navBrand = document.querySelector(".navbar-brand img");
    // var drop = document.querySelector(".dropdown-menu");

    function cvNav(){
        var y = window.pageYOffset;
        if(y > 80){
            for(var i=0;i<navLinks.length;i++){
                navLinks[i].style="color:white !important;";
            }
            logoName.style="color:white;";
            nav.style="background:rgba(0,0,0);padding-top:5px;transition:all .5s;";
            // drop.style="background:rgba(0,0,0,1)!important;";
        }
        else{
            for(var i=0;i<navLinks.length;i++){
                navLinks[i].style="color:;";
            }
            logoName.style="color:;";
            nav.style="background:;padding-top:;transition:all .5s;";
            // drop.style="background:;";
        }
    }

    cvNav();
</script>

@yield("scripts")

</body>
</html>
