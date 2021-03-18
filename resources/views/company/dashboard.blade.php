@extends('company.layouts.companyaccount')



@section('centermain')
    <h1 id="heading"><i class="fas fa-user"></i>&nbsp;&nbsp;Dashboard</h1>
    <div class="bg-white px-5 py-2 ">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">WELCOME TO COMPANY ACCOUNT!</h4>
            <p>We are providing you best services to facilitates you. There are many skillful registered employee available for you to hire according to your need and demands!.</p>
            <hr>
        </div>
        <h5 class="text-success">Recent Update <span>(just now!)</span></h5>
        <div class="row">
            <div class="col-md-10 mb-4">
                <div class="card border-left-success shadow h-100 py-2 ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 16px"><i class="fas fa-clipboard mr-3" style="font-size:30px"></i>&nbsp;Total Job Posts Available</div>
                            </div>
                            <div class="col-auto">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="blink_text" style="font-size:50px">{{$posts}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 16px"><i class="fas fa-edit mr-3" style="font-size:30px"></i>&nbsp;Total Application for jobs</div></div>
                            <div class="col-auto">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="blink_text" style="font-size:50px">{{$req}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 16px"><i class="fas fa-users mr-3" style="font-size:30px"></i>&nbsp;Total Registered User</div>
                            </div>
                            <div class="col-auto">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="blink_text" style="font-size:50px">{{$user}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
