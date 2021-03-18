@extends('company.layouts.companyaccount')


@section('centermain')

<h1 id="heading"><i class="fas fa-cogs mr-3"></i>Settings</h1>
<hr>
<h3>Change password</h3>
<hr class="bg-success">
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('flash::message')

<form action="/company/dashboard/setting" method="POST">
    @csrf
    <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Current Password<span class="text-danger"><b>*</b></span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="inputEmail3" name="current_password" placeholder="Current Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">New Password<span class="text-danger"><b>*</b></span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="inputEmail3" name="new_password" placeholder="New Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Conform Password<span class="text-danger"><b>*</b></span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="inputEmail3" name="new_password_confirmation" placeholder="Conform Password">
            </div>
        </div>
    <div class="form-group row">
            <label for="inputEmail3" class="col-sm-9 col-form-label"></label>
            <div class="col-sm-3">
                <button class="btn btn-sm btn-block btn-success">Changes</button>
            </div>
        </div>
</form>

@endsection
