@extends('company.layouts.companyaccount')

@section('centermain')
    <style>
        .b{border:1px solid black}
        input{border:0}

    </style>

    <h1 id="heading"><i class="fas fa-user  mr-3"></i>Manage Company Profile</h1>
    <hr>
    @include('flash::message')
    @include('layouts.errors')
    <!-- show up Messgae-->
    <div class="alert alert-success" role="alert"><b>"Note:Be A Professional, Complete Your Profile Like Pro user!"</b></div>
    <div class="alert alert-danger" role="alert"><b>"Note:Field having * on it,must be filled!"</b></div>

    <div class="px-5 py-2 bg-white">
        <form action="{{url('/company/dashboard/profile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>About company</h3>
            <hr class="bg-success">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Profile Picture<span class="text-danger"><b>*</b></span></label>
                <div class="col-sm-5">
                    <input type="file" class="form-control border-0" name="image">
                </div>
            </div>
                    <div class="form-group row">
                <label class="col-sm-3 col-form-label">Company Name<span class="text-danger"><b>*</b></span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control " name="name" placeholder="Enter Company Name" value="{{old('name', auth('company')->user()->name)}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="tagline" placeholder="Enter Tagline" value="{{old('name', auth('company')->user()->tagline)}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">About</label>
                <div class="col-sm-9">
                    <textarea type="text" id="message" name="about" rows="5" class="form-control md-textarea">{{old('about', auth('company')->user()->about)}}</textarea>
                </div>
            </div>

            <h3 class="mt-5">For Company Contact</h3>
            <hr class="bg-success">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email Address<span class="text-danger"><b>*</b></span></label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" placeholder="Official Email Address" value="{{old('email',auth('company')->user()->email)}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Contact <span class="text-danger"><b>*</b></span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" placeholder="Office Ptcl ya mobile" value="{{old('phone',auth('company')->user()->phone)}}">
                </div>
            </div>


            <h3 class="mt-5">Physical Address</h3>
            <hr class="bg-success">
            <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Office Address</label>
                <div class="col-sm-9">
                    <textarea type="text" id="message" name="address" rows="5" class="form-control md-textarea">{{old('address',auth('company')->user()->address)}}</textarea>

                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-9">

                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-lg btn-block btn-success">Saves</button><hr><hr>
                </div>
            </div>
        </form>
    </div>
@endsection

