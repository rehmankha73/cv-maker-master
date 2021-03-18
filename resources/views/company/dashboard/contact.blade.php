@extends('company.layouts.companyaccount')

@section('centermain')

    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h1 id="heading"><i class="fas fa-hard-hat mr-3"></i>Contact us</h1>
        <hr>
        @include('flash::message')
        @include('layouts.errors')
        <div class="container">
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5 mt-3">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form action="{{url('/company/dashboard/contact')}}" method="POST">
                            @csrf
                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{auth('company')->user()->name}}">
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="{{auth('company')->user()->email }}">
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->



                        <div class="text-center my-5 text-md-left">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Send</button>
                        </div>
                        </form>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-3 text-center text-success">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>University of Education Lahore.</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 92-303-6473659</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>rehmankha73@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

    </section>
    <!--Section: Contact v.2-->

@endsection
