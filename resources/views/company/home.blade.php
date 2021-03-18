@extends('company.layouts.app')

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


    <!---Start How to use Section--->
    <div class="whyChooseUs">
        <div class="container">
            <h1>How To Use</h1>

            <div class="row featurette mt-lg-5">
                <div class="col-md-6 pb-5 img-fluid order-sm-12">
                    <img src="/images/main/1.png"  width="360">
                </div>
                <div class="col-md-6 order-sm-1 mt-4 pt-5">
                    <h2 class="featurette-heading">Free registration
                        <span class="text-muted">/SignUp.</span>
                    </h2>
                    <p class="lead">Registration to our web application is free.Just enter your details.</p>
                </div>
            </div>

            <div class="row featurette">
                <div class="col-md-5">
                    <img src="/images/main/2.png" width="360">
                </div>
                <div class="col-md-7 pt-5 mt-5">
                    <h2 class="featurette-heading">Profile Management
                        <span class="text-muted">Account details.</span>
                    </h2>
                    <p class="lead">We are providing user friendly view, So You can manage your profile easily.
                    </p>
                </div>
            </div>

            <div class="row featurette mt-5">
                <div class="col-md-5 order-sm-12">
                    <img src="/images/main/3.png" width="350">
                </div>
                <div class="col-md-7 order-sm-1 pt-5 mt-5">
                    <h2 class="featurette-heading">Can post new job
                        <span class="text-muted">For Employees.</span>
                    </h2>
                    <p class="lead">You can post new jobs, so you can find better employees.</p>
                </div>
            </div>

            <div class="row featurette mt-5">
                <div class="col-md-5">
                    <img src="/images/main/4.1.png" width="340">
                </div>
                <div class="col-md-7 mt-5 pt-4">
                    <h2 class="featurette-heading">Manages posted job
                        <span class="text-muted">/request management.</span>
                    </h2>
                    <p class="lead">You can post jobs and easily manage them. You can edit delete or add new posts for jobs easily. </p>
                </div>
            </div>

            <div class="row featurette mt-5">
                <div class="col-md-5 order-sm-12">
                    <img src="/images/main/5.png" width="390">
                </div>
                <div class="col-md-7 order-sm-1 mt-5 pt-5">
                    <h2 class="featurette-heading">Provide feedback
                        <span class="text-muted">/Your Experience.</span>
                    </h2>
                    <p class="lead">You can share your experience for our services.</p>
                </div>
            </div>
            <!--  <hr class="featurette-divider">    -->
        </div>
    </div>
    <!-- End Why Choose Us -->

    <!-- start clients Section  -->


    <div class="reviews ">
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
                                    <center><img class="card-img img col-5 py-2 px-2" src="{{url(str_replace("public", "storage", $t->company->image))}}" alt="Card image"></center>
                                </div>
                                <center><h4 class="card-title name">{{$t->company->name}}</h4></center>
                                <center><small class="email">{{$t->company->email}}</small></center>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-info">No Job Posts Found.</div>
                @endif
            </div>
        </div>
    </div>
</div>





    <!-- End clients Section  -->


@endsection
