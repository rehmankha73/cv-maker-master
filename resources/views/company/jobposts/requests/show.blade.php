@extends('company.layouts.companyaccount')
@section('centermain')

    <h1 id="heading"><i class="fas fa-edit mr-3"></i>Request From Applier</h1>
    <hr>
    <section class="bg-white">
        <b>Email:</b>{{$request->user->email}}<br>
        <b>Proposal:</b><br>
        <center><p class="text-justify">{{$request->details}}</p></center><br>
        <b>Attachment:</b><img height="100px" width="100px" src="{{url(str_replace("public", "storage", $request->image))}}"><br>
    </section>
@endsection
