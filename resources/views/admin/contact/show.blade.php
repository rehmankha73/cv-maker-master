@extends('admin.layouts.app')
@section('content')
    <style>
        h1{
            text-shadow:1px 1px black;
        }
        h4{
            color:black;
            font-weight: normal;
        }
        p{
            color:black;
            text-align: justify;
        }
    </style>

<h1>Conplain:&nbsp; {{$con->subject}}</h1>
    <a href="{{route('admin.contact.index')}}">Back</a><hr>
    <label>From:</label>
    <h4>{{$con->user->first_name}} {{$con->user->last_name}}</h4>
    <label>Email:</label>
    <h4>{{$con->user->email}}</h4>
    <label>Subject:</label>
    <h4>{{$con->subject}}</h4>
    <label>Message:</label>
    <h2><p>{{$con->message}}</p></h2>

@endsection
