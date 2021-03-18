@extends('admin.layouts.app')
@section('content')
    <h1><i class="fas fa-fw fa-wrench mb-3"></i> &nbsp;Settings</h1>
    <hr>
    @include('flash::message')
    @include('layouts.errors')


    @include('flash::message')

    <form action="{{route('admin.settings.update',[1])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Current Password<span class="text-danger">*</span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="inputEmail3" name="current_password" placeholder="Current Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">New Password<span class="text-danger">*</span></label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="inputEmail3" name="new_password" placeholder="New Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Conform Password<span class="text-danger">*</span></label>
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
