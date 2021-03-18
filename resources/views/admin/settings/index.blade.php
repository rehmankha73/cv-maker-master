@extends('admin.layouts.app')
@section('content')
    <h1><i class="fas fa-fw fa-wrench"></i>&nbsp; Settings</h1>
@include('flash::message')
@include('layouts.errors')

    <style>
        a:hover{color:black;}
        th,td{
            color: black;
        }
    </style>

    @include('flash::message')

    <section class="bg-white mt-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">SirName</th>
                <th scope="col">Email</th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">Created at</th>
                <th scope="col">Op</th>
            </tr>
            </thead>
            <tbody>
            @if($admin->count())
                @foreach($admin as $ad)
                    <tr>
                        <td>{{$ad->firstname}}</td>
                        <td>{{$ad->sirname}}</td>
                        <td>{{$ad->email}}</td>
                        <td>{{$ad->dob}}</td>
                        <td>{{$ad->gender}}</td>
                        <td>{{$ad->created_at->toDayDateTimeString()}}</td>
                        <td>
                            <button type="button" class="btn btn-block btn-danger btn-block" data-toggle="modal" data-target="#exampleModal">Delete</button>
                        </td>
                    </tr>

                @endforeach
            @else
                <div class="alert alert-info">No Job Posts Found.</div>
            @endif
            </tbody>
        </table>
    </section>

    <!-- Modal -->
    <form action="{{route('admin.settings.destroy', [$ad->id])}}" method="POST">
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
