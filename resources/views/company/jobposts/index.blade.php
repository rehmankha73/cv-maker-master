@extends('company.layouts.companyaccount')
@section('centermain')

    <h1 id="heading"><i class="fas fa-edit mr-3"></i>Posts</h1>
    <hr>
    @include('flash::message')
    <section class="bg-white">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Job Tilte</th>
                <th scope="col">Location</th>
                <th scope="col">Created at</th>
                <th scope="col">Updateed at</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            <tbody>
            @if($jobpost->count())
                @foreach($jobpost as $job)
                    <tr>
                        <td>{{$job->title}}</td>
                        <td>{{$job->location}}</td>
                        <td>{{$job->created_at->toDayDateTimeString()}}</td>
                        <td>{{$job->updated_at->toDayDateTimeString()}}</td>
                        <td>
                            <form action="{{route('company.jobpost.destroy', [$job->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('company.jobpost.requests.index', [$job->id])}}" class="btn btn-sm btn-primary btn-block">Requests</a>
                                <a href="{{route('company.jobpost.edit', [$job->id])}}" class="btn btn-sm btn-success btn-block">Edit</a>
                                <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <div class="alert alert-danger">No Any Job-Posts Found.Please Post Job!</div>
            @endif
            </tbody>
        </table>
    </section>
@endsection
