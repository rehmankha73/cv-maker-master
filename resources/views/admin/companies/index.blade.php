@extends('admin.layouts.app')
@section('content')

    <h1><i class="fas fa-briefcase"></i> &nbsp;&nbsp; Companies</h1>
    @include('flash::message')
    @include('layouts.errors')
    <style>
        a:hover{color:black;}
        th,td{
            color: black;
        }
    </style>
    <section class="bg-white mt-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Profile_pic</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Created at</th>
                <th scope="col">Op</th>
            </tr>
            </thead>
            <tbody>
            @if($company->count())
                @foreach($company as $com)
                    <tr>
                        <td><img class="img-thumbnail rounded-circle" style="width:100px;height:100px;"  src="{{url(str_replace("public", "storage", $com->image))}}"></td>
                        <td>{{$com->name}}</td>
                        <td>{{$com->email}}</td>
                        <td>{{$com->phone}}</td>
                        <td>{{$com->address}}</td>
                        <td>{{$com->created_at->toDayDateTimeString()}}</td>
                        <td>
                                <a class="btn btn-success btn-sm btn-block mb-2" href="{{route('admin.companies.edit',[$com->id])}}">Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
                        </td>
                    </tr>

                    {{--                        <td>--}}
                    {{--                            <form action="{{route('company.jobpost.destroy', [$job->id])}}" method="POST">--}}
                    {{--                                @csrf--}}
                    {{--                                @method('DELETE')--}}
                    {{--                                <a href="{{route('company.jobpost.requests.index', [$job->id])}}" class="btn btn-sm btn-primary btn-block">Requests</a>--}}
                    {{--                                <a href="{{route('company.jobpost.edit', [$job->id])}}" class="btn btn-sm btn-success btn-block">Edit</a>--}}
                    {{--                                <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>--}}
                    {{--                            </form>--}}
                    {{--                        </td>--}}
                    {{--                    </tr>--}}
                @endforeach
            @else
                <div class="alert alert-danger"><b>No Companies Registered yet.Please Registered....</b></div>
            @endif
            </tbody>
        </table>
    </section>

    <!-- Modal -->
    <form action="{{route('admin.companies.destroy', [$com->id])}}" method="POST">
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
