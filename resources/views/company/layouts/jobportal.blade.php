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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{url('css/aos.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <link rel="stylesheet" href="{{url('css/fixed.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

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
                    <a class="nav-link" href="{{url('company')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">User Portal</a>
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
{{--        <div id="carouselExampleIndicators" class="carousel slide carousel-fade cvCarousel" data-ride="carousel">--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
{{--            </ol>--}}
{{--            <div class="carousel-inner myinner">--}}
{{--                <div class="carousel-item darkOverlay active">--}}
{{--                    <img class="banner d-block w-100" src="/images/main/m1.jpg" alt="First slide">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h2>Creative <span>Designs</span></h2>--}}
{{--                        <h3>For You</h3>--}}
{{--                        <p><a class="btnSlider" href="">Create A CV</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item darkOverlay">--}}
{{--                    <img class="banner d-block w-100" src="/images/main/m2.png" alt="Second slide">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h2>Better <span>Chances</span></h2>--}}
{{--                        <p>To get A Job</p>--}}
{{--                        <p><a class="btnSlider" href="">Create A CV</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item darkOverlay">--}}
{{--                    <img class="banner d-block w-100" src="/images/main/m3.jpg" alt="Third slide">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h2>Suitable <span>Jobs</span></h2>--}}
{{--                        <p>For You</p>--}}
{{--                        <p><a class="btnSlider" href="">Create A CV</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}
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
                        <i class="fa fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic icon">
                        <i class="fa fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic icon">
                        <i class="fa fa-google-plus mr-4"></i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic icon">
                        <i class="fa fa-linkedin mr-4"></i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic icon">
                        <i class="fa fa-instagram white-text"> </i>
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
                <h6 class="text-uppercase font-weight-bold green">Professional CV Maker</h6>

                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 sub">
                <!-- Links -->

                <h6 class="text-uppercase green font-weight-bold">CV Templates</h6>

                <p>
                    <a class="dark-grey-text" href="#!">Simple</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Mix</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Premium</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Discounts</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 sub">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold green">Useful links</h6>

                <p>
                    <a class="dark-grey-text" href="#!">Your Account</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Find a Job</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Post a Job</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Help</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold green">Contact</h6>
                <p>
                    <i class="fa fa-home mr-3 icon"></i> Pakistan, 10012, PK</p>
                <p>
                    <i class="fa fa-envelope mr-3 icon"></i> pProfessionalCVMaker.com</p>
                <p>
                    <i class="fa fa-phone mr-3 icon"></i> + 92 3 176230315</p>
                <p>
                    <i class="fa fa-print mr-3 icon"></i> +92 3 213739867</p>

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










<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>


<script src="js/mediaelement-and-player.min.js"></script>

<script src="js/main.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

        for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                shimScriptAccess: 'always',
                success: function () {
                    var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                    for (var j = 0; j < targetTotal; j++) {
                        target[j].style.visibility = 'visible';
                    }
                }
            });
        }
    });
</script>


<script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (let i = 0; i < place.address_components.length; i++) {
            let addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                document.getElementById(addressType).value = place.address_components[i][componentForm[addressType]];
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                let geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                let circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
