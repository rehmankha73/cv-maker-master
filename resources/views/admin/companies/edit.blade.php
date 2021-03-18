@extends('admin.layouts.app')
@section('content')

    <style>h3{color:black}</style>
    <h1 style="font-size: 30px;">Edit Company: &nbsp;  {{$company->email}}</h1>

    @include('flash::message')
    @include('layouts.errors')
    <!-- show up Messgae-->
    <div class="px-5 py-2 bg-white">
        <form action="{{route('admin.companies.update',[$company->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h3>About company</h3>
            <hr class="bg-success">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Profile Picture<span class="text-danger">*</span></label>
                <div class="col-sm-5">
                    <input type="file" class="form-control border-0" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Company Name<span class="text-danger">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control " name="name" placeholder="Enter Company Name" value="{{old('name', $company->name)}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="tagline" placeholder="Enter Tagline" value="{{old('name', $company->tagline)}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">About</label>
                <div class="col-sm-9">
                    <textarea type="text" id="message" name="about" rows="5" class="form-control md-textarea">{{old('about', $company->about)}}</textarea>
                </div>
            </div>

            <h3 class="mt-5">For Company Contact</h3>
            <hr class="bg-success">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email Address<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" placeholder="Official Email Address" value="{{old('email',$company->email)}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Contact <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" placeholder="Office Ptcl ya mobile" value="{{old('phone',$company->phone)}}">
                </div>
            </div>


            <h3 class="mt-5">Physical Address</h3>
            <hr class="bg-success">
            <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Office Address</label>
                <div class="col-sm-9">
                    <textarea type="text" id="message" name="address" rows="5" class="form-control md-textarea">{{old('address',$company->address)}}</textarea>

                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-lg btn-block btn-success">Saves</button>
                </div>
            </div>
        </form>
    </div>



@endsection
