@extends('layouts.app')

@section('content')
    <style>.img{
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
    .testimonial{
        height: 460px;
        box-sizing: border-box;
    }
        .content{
            font-style: italic;
            color:black;
            height: 200px;
            overflow: hidden;
        }
        .name{color:black}
        .email{color:#33D1A0}
        .quote-img{
            width: 50px;
            margin: 25px;
        }
    </style>
    <!-- Start Our Services Section --->
    <div class="services">
        <div class="container">

            <h1 id="hservices">Our Services</h1>

            <div class="row">
                <div class="col-md-6 text-center serviceicon">
                    <div class="icon">
                        <i class="fa fa-share-alt-square"></i>
                    </div>
                    <h4>Share and Download</h4>
                    <p>You can Share your resume with a convenient link via email or social media, and export as a PDF
                        to apply directly to an employer.</p>
                </div>

                <div class="col-md-6 text-center serviceicon">
                    <div class="icon">
                        <i class="fa fa-files-o"></i>
                    </div>
                    <h4>Manage Multiple Resume</h4>
                    <p>We are providing a facility of account that you will login and save your data.That will help to
                        save time in refilling your information again and again. And save our previously used templates.
                    </p>
                </div>

                <div class="col-md-6 text-center serviceicon">
                    <div class="icon">
                        <i class="fa fa-user-secret"></i>
                    </div>
                    <h4>Data and Privacy Control</h4>
                    <p>We don’t share your information with anyone (unless you explicitly ask us to), and have 3 resume
                        privacy options to ensure your data stays safe.</p>
                </div>
                <div class="col-md-6 text-center serviceicon">
                    <div class="icon">
                        <i class="fa fa-plus-circle"></i>
                    </div>
                    <h4>Get Feedback</h4>
                    <p>Get a free resume review from our partners, or send to your friends for feedback.You will also
                        get mails for new jobs.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Our Services Section --->


    <!-- Start CV Section --->
    <!-- Swiper-->
    <div id="CV" class="CVSection">

        <h1 id="cvtempletes">CV Templates </h1>

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv1.png" alt="" width="300" height="400">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv2.png" alt="" width="300" height="400">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv3.png" alt="" width="300" height="400">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv4.png" alt="" width="300" height="400">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv5.png" alt="" width="300" height="400">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgbx">
                    </div>
                    <img src="/images/cvs_temp/main/cv6.png" alt="" width="300" height="400">
                </div>
                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv7.png" alt="" width="300" height="400">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv8.png" alt="" width="300" height="400">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv9.png" alt="" width="300" height="400">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv10.png" alt="" width="300" height="400">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv11.png" alt="" width="300" height="400">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="imgbx">
                        <img src="/images/cvs_temp/main/cv12.png" alt="" width="300" height="400">
                    </div>
                </div>


            </div>
            <!-- Add Pagination-->
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <!-- End CV Section--->


    <!---Start Why Choose Us Section--->
    <div class="whyChooseUs">
        <div class="container">
            <h1>Why Choose Us</h1>

            <div class="row featurette">
                <div class="col-md-6 img-fluid order-sm-12">
                    <img src="/images/main/1.png" width="360">
                </div>
                <div class="col-md-6 mt-5 pt-3 order-sm-1">
                    <h2 class="featurette-heading">Easy To Use
                        <span class="text-muted">User Friendly.</span>
                    </h2>
                    <p class="lead">Our Services are easy to use.anyone can use them without any hesitation.Because we
                        provide simple design that will help to use it easily.</p>
                </div>
            </div>

            <div class="row featurette">
                <div class="col-md-5">
                    <img src="/images/main/2.png" width="380">
                </div>
                <div class="col-md-6 offset-1 pt-5 mt-5">
                    <h2 class="featurette-heading">Find Suitable Jobs.
                        <span class="text-muted">Better Job Options.</span>
                    </h2>
                    <p class="lead">We Are Providing Job Portal That will help to find you a suitable job. You may find
                    </p>
                </div>
            </div>

            <div class="row featurette mt-5">
                <div class="col-md-5 order-sm-12">
                    <img src="/images/main/3.png" width="350">
                </div>
                <div class="col-md-7 mt-5 pt-5 order-sm-1">
                    <h2 class="featurette-heading">Resume Analytics
                        <span class="text-muted">Analytics for your resume.</span>
                    </h2>
                    <p class="lead">We provide analytics for your CV/Resume so you can crate a decent resume without any
                        expertise and hesitation.</p>
                </div>
            </div>

            <div class="row featurette mt-5">
                <div class="col-md-5">
                    <img src="/images/main/4.png" width="260">
                </div>
                <div class="col-md-7 pt-5">
                    <h2 class="featurette-heading">Pdf Conversion.
                        <span class="text-muted">Can Convert CV in Pdf.</span>
                    </h2>
                    <p class="lead">If you want to convert your CV/Resume in Pdf than you can convert it easily. </p>
                </div>
            </div>

            <!--  <hr class="featurette-divider">    -->
        </div>
    </div>
    <!-- End Why Choose Us -->
    <div class="row">
        <div class="col-12 py-4 text-center" style="color: black">
            <h1>Our Trusted Partners</h1>
            <hr style="width: 20%;background-color: #5DD28E;height: 2px">
        </div>
        <div class="col-md-3"><img src="../images/trusted_emp/1.png"></div>
        <div class="col-md-3"><img src="../images/trusted_emp/2.png"></div>
        <div class="col-md-3"><img src="../images/trusted_emp/3.png"></div>
        <div class="col-md-3"><img src="../images/trusted_emp/4.png"></div>
    </div>


    <!-- start clients Section  -->
    <div id="test" class="reviews">
        <h1>Clients</h1>
        <div class="container">
        <div class="owl-carousel owl-theme">
         @if($test->count())
            @foreach($test as $t)
            <div class="item">
                <div class="card testimonial">
                    <div class="card-body">
                        <div class="quote-img">
                        <img src="../images/img.png">
                        </div>
                            <div class="content">
                        <p class="card-text">{{$t->message}}</p>
                        </div>
                            <center><img class="card-img img col-5 py-2 px-2" src="{{url(str_replace("public", "storage", $t->user->profile_image))}}" alt="Card image"></center>
                    </div>
                    <center><h4 class="card-title name">{{$t->user->first_name}} {{$t->user->last_name}}</h4></center>
                    <center><small class="email">{{$t->user->email}}</small></center>
                </div>
            </div>
            @endforeach
            @else
                <div class="alert alert-info">No Job Posts Found.</div>

            @endif
        </div>
    </div>
    <!-- End clients Section  -->
@endsection
