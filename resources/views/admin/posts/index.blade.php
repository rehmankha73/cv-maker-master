@extends('admin.layouts.app')
@section('content')
<h1><i class="fas fa-clipboard"></i> &nbsp;Posts</h1>
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
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Details</th>
            <th scope="col">Post by</th>
{{--            <th scope="col">Address</th>--}}
            <th scope="col">Created at</th>
            <th scope="col">Op</th>
        </tr>
        </thead>
        <tbody>
        @if($posts->count())
            @foreach($posts as $post)
                <tr>
                    <td><img class="img-thumbnail rounded-circle" style="width:100px;height:100px;"  src="{{url(str_replace("public", "storage", $post->image))}}"></td>
                    <td>{{$post->title}}</td>
                    <td class="text-justify">{{$post->details}}</td>
                    <td>{{$post->company->email}}</td>
{{--                    <td>{{$com->address}}</td>--}}
                    <td>{{$post->created_at->toDayDateTimeString()}}</td>
                    <td>
                        <a href="{{route('admin.posts.show',[$post->id])}}" class="btn btn-primary btn-sm btn-block mb-2">view</a>
                        <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModal">Delete</button>
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
    <form action="{{route('admin.posts.destroy', [$post->id])}}" method="POST">
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
