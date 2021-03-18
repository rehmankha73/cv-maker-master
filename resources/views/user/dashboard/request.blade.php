@extends('user.layouts.useraccount')

@section('centermain')

    <h1 id="heading"><i class="fas fa-edit pt-4 mr-3"></i>Proposal Request</h1>
    <hr>
    @include('flash::message')
    @include('layouts.errors')

    <section class="bg-white">
        @if($requests->count())
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Proposal</th>
                    <th scope="col">Posted Job</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Approve/Not</th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $req)
                    <tr>
                        <td class="text-justify">{{$req->details}}</td>
                        <td>{{$req->jobpost->title}}</td>
                        <td>{{$req->created_at->toDayDateTimeString()}}</td>
                        <td>
                            @if($req->is_approved)
                                Yes
                            @else
                                No
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info">There is no any request applied on a particuler Job !</div>
        @endif
    </section>
@endsection

