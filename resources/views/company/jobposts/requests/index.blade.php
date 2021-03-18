@extends('company.layouts.companyaccount')
@section('centermain')

    <h1 id="heading"><i class="fas fa-edit mr-3"></i>Post: {{$post->title}}</h1>
    <hr>
    @include('flash::message')
    <section class="bg-white">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Proposal</th>
                <th scope="col">Created at</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            <tbody>
            @if($post->requests->count())
                @foreach($post->requests as $request)
                    <tr>
                        <td>{{$request->user->first_name}}</td>
                        <td>{{$request->user->email}}</td>
                        <td class="text-justify">{{$request->details}}</td>
                        <td class="text-justify">{{$request->created_at->toDayDateTimeString()}}</td>
                        <td>
                            @if($request->is_approved)
                                <form action="{{ route('company.jobpost.requests.disapprove', [$post->id,$request->id]) }}" method="POST">
                                    @csrf
                                    <a href="{{route('company.jobpost.requests.show', [$post->id, $request->id])}}" class="btn btn-primary btn-sm btn-block">View</a>
                                    <button class="btn btn-sm btn-danger btn-block" type="submit">Disapprove</button>
                                </form>
                            @else
                                <form action="{{ route('company.jobpost.requests.approve', [$post->id,$request->id]) }}" method="POST">
                                    @csrf
                                    <a href="{{route('company.jobpost.requests.show', [$post->id, $request->id])}}" class="btn btn-primary btn-sm btn-block">View</a>
                                    <button class="btn btn-sm btn-success btn-block" type="submit">Approve</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @else
                <div class="alert alert-info"><b>No Job Post Request Found.</b></div>
            @endif
            </tbody>
        </table>
    </section>
@endsection
