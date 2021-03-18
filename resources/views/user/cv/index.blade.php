@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>CV Manager</h1>
        <hr>
        @include('flash::message')
        @if(is_null($cv))
        <div class="card">
            <div class="card-body">
                <div class="alert alert-info">Setup your CV Data to access CV Manager!</div>
                <a href="{{route('user.cv.create')}}" class="btn btn-primary">Setup CV Data</a>
            </div>
        </div>
        @else
            <div class="alert alert-info">
                <a href="{{route('user.cv.create')}}">Click here to edit CV Data!</a>
            </div>
        <div class="row">
            @for($i = 1; $i <=12; $i++)
                <div class="col-sm-4 px-2 py-4">
                    <div class="card">
                        <img src="{{url('/images/cvs_temp/cv'.$i.'.png')}}" class="card-img-top" alt="CV Template">
                        <div class="card-body">
                            <h5 class="card-title">Template {{$i}}</h5>
                            <a href="{{url('/cv/pdf/'.$i.'/'.auth()->id())}}" target="_blank" class="btn btn-primary">Preview</a>
                            <a href="{{url('/user/cv/pdf/'.$i)}}" class="btn btn-primary">Download PDF</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        @endif
    </div>
@endsection
