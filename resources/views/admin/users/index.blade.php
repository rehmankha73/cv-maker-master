@extends('admin.layouts.app')

@section('content')

    <style>
        a:hover{color:black;}
        th,td{
            color: black;
        }
    </style>

<h1><i class="fas fa-user"></i>&nbsp; Users</h1>
@include('flash::message')
@include('layouts.errors')
<section class="bg-white">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Profile_pic</th>
                <th scope="col">Full Name</th>
                <th scope="col">Father</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Created at</th>
                <th scope="col">Op</th>
            </tr>
            </thead>
            <tbody>
            @if($users->count())
                @foreach($users as $user)
                        <tr>
                        <td><img class="img-thumbnail rounded-circle" style="width:100px;height:100px;"  src="{{url(str_replace("public", "storage", $user->profile_image))}}"></td><td>{{$user->first_name}} {{$user->last_name}}</td>
                        <td>{{$user->father_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->created_at->toDayDateTimeString()}}</td>
                        <td>
                                <a class="btn btn-success btn-sm btn-block" href="{{route('admin.users.edit',[$user->id])}}">Edit</a>
{{--                                <button type="submit" class="btn btn-block btn-danger btn-bloack btn-sm">Delete</button>--}}
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>

                        </tr>
                @endforeach
            @else
                <div class="alert alert-info">No Any User Found/Register..</div>
            @endif
            </tbody>
        </table>
    </section>


    <!-- Modal -->
    <form action="{{route('admin.users.destroy', [$user->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header bg-danger" >
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">Conformation Dialogue?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb-5">
                    Are your sure to want to delete it completely!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-danger">Delete!</button>
                </div>
            </div>
        </div>
    </div>
    </form>

@endsection
