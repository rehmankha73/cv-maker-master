@extends('user.layouts.useraccount')

@section('centermain')
    <h1 id="heading"><i class="fas fa-user pt-4 mr-3"></i>Manage & Edit Profile</h1>
    <hr>
    @include('flash::message')
    @include('layouts.errors')
{{--    <message--}}
    <div class="alert alert-success" role="alert"><b>"Note:Be A Professional, Complete Your Profile Like Pro user!"</b></div>
    <div class="alert alert-danger" role="alert"><b>"Note:Field having * on it,must be filled!"</b></div>
    <form action="{{url('/user/dashboard/profile')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white px-5 py-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>First Name<span class="text-danger"><b>*</b></span></label>
                    <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{old('first_name', $user->first_name)}}">
                </div>
                <div class="form-group col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{old('last_name', $user->last_name)}}">
                </div>
            </div>
            <div class="md-form">
                <label>About yourself</label>
                <textarea type="text" name="about" rows="3" class="form-control md-textarea" placeholder="Write something about Yourself">{{old('about', $user->about)}}</textarea>
            </div>
            <div class="form-group mt-3">
                <label>profile picture<span class="text-danger"><b>*</b></span></label>&nbsp;&nbsp;<input type="file" class="" name="image">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Father Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Father Name" name="father_name" value="{{old('father_name', $user->father_name)}}">
                </div>
                <div class="form-group col-md-6">
                    <label>Date of Birth<span class="text-danger"> <b>*</b></span></label>
                    <input type="date" class="form-control" name="dob" value="{{old('dob', $user->dob->toDateString())}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email <span class="text-danger"><b>*</b></span></label>
                    <input type="email" class="form-control" placeholder="Email i.e abc@gmail.com" name="email" value="{{old('email', $user->email)}}">
                </div>
                <div class="form-group col-md-6">
                    <label>Contact Number<span class="text-danger"><b>*</b></span></label>
                    <input type="text" class="form-control" name="phone" placeholder="Contact Number i.e =92303-123456789,0303-123456789 etc"value="{{old('phone', $user->phone)}}">
                </div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address"  placeholder="Address i.e H@123,street xyz, city. etc" value="{{old('address', $user->address)}}">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Country i.e Pakistan" value="{{old('country', $user->country)}}">
                </div>
                <div class="form-group col-md-4">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" placeholder="City i.e Multan etc" value="{{ old('city', $user->city) }}">
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>Code</label>
                    <input type="text" class="form-control" name="code" placeholder="Code i.e 60000 etc" value="{{old('code', $user->code)}}">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-block btn-success">Update</button>
        </div>
    </form>
    <hr>
@endsection

