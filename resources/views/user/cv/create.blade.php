@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <h1> Basic Information:</h1>
        <hr>
{{--        {!! Form::open(['route' => 'user.cv.store', 'files' => true]) !!}--}}
{{--            @include('user.cv.form')--}}
{{--        {!! Form::close() !!}--}}
        <form action="{{route('user.cv.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('user.cv.form')
        </form>
    </div>

    <div class="container-fluid footer mt-5 bg">
        <div class="container"><div class="row">
                <div class="col-sm-6"><h6 style="text-align:left;">No Copyright@Rehman Ahmed</<h6></div>
                <div class="col-sm-6"><h6 style="text-align:right;">All issues reserved</h6></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('user.cv.form-field-copies')
    @include('user.cv.form-scripts')
@endsection
