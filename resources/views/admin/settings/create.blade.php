@extends('admin.layouts.app')
@section('content')

    <h1><i class="fas fa-fw fa-wrench"></i>&nbsp; Add New Addmins</h1>
    @include('flash::message')
    @include('layouts.errors')

    <form action="{{route('admin.settings.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date of Birth</label>
            <input type="date" class="form-control" name="dob">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            <select class="p-1" name="gender">
                <option >Select Gender</option>
                <option >Male</option>
                <option >Female</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create New Admin</button>
    </form>
@endsection
