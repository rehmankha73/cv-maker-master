@extends('admin.layouts.app')
@section('content')

<h1><i class="fas fa-clipboard"></i>&nbsp; Post:{{$post->title}}</h1>
    <hr>
<style>
    body{color:black;}
    .title{
        font-weight: bold;
        font-size: 22px;
        color:#2a9055;
    }
    .description{
        background: white;
        color:black;
    }
    .sub-head{
        font-weight: bold;
        font-size: 18px;
        color: #2a9055;
        display: inline-block;
        margin: 0;
    }
    .sub-value{
        color: black;
        font-size: 18px;
    }
</style>
<section class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 bg-white" style="border:1px solid black">
        <section>
            <img class="img-fluid px-5" src="{{url( str_replace("public", "storage", $post->image))}}" alt="job Image"></c>
            <h2 class="title mt-3" style="font-size:30px;text-shadow: 1px 1px black;">{{$post->title}}</h2>
            <small class="sub-head">{{$post->company->email}}</small><hr>
            <h3 class="text-dark">Description</h3>
            <p class="text-justify description">{{$post->details}}</p><hr>
            <div class="row">
                <div class="col-md-6">
                    <p class="sub-head">Location <span class="sub-value"> {{$post->location}} </span></p><br>
                    <p class="sub-head">NO. OF Positions <span class="sub-value"> {{$post->positions}} </span></p><br>
                    <p class="sub-head">Experience <span class="sub-value"> {{$post->experiences}} </span></p><br>
                    <p class="sub-head">Skills <span class="sub-value"> {{$post->jobskills->implode('job_skills', ', ')}} </span></p><br>

                    {{--                            @foreach($post->jobskills as $jobskill)--}}
                    {{--                                {{$jobskill->job_skills}}, --}}
                    {{--                            @endforeach--}}
                </div>
                <div class="col-md-6">
                    <p class="sub-head"> Career Level <span class="sub-value"> {{$post->career}} </span></p><br>
                    <p class="sub-head"> Minimum Qualification<span class="sub-value"> {{$post->qualifications}}</span></p><br>
                    <p class="sub-head"> Salary Range<span class="sub-value"> RS {{$post->salary_from}} - {{$post->salary_to}}</span></p><br>
                    <p class="sub-head"> Any Preferences<span class="sub-value"> {{$post->preferences}}</span></p><br>
                </div>
            </div>

        </section>
        <hr>
        <a href="{{route('admin.posts.edit', [$post->id])}}" class="btn btn-sm btn-success btn-block"> Edit</a>
        <br>
    </div>

    <div class="col-md-2"></div>

</section>
@endsection
