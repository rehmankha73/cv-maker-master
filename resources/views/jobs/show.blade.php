@extends('jobportal.layouts.layouts')

@section('content')
    <div class="container mt-5 pt-5">
        <section class="row">
            <div class="col-md-2">   <img height="500px" width="230px" src="{{url('/images/adds/3.png') }}"></div>
            <div class="col-md-8 bg-white" style="border:1px solid black">
                <section>
                    <img class="img-fluid px-5" width="100px" height="100px" src="{{url( str_replace("public", "storage", $post->image))}}" alt="job Image"></c>
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
                <div class="alert alert-success text-center" role="alert">"You can apply only if you have user account !"</div>
                <a href="{{route('jobs.edit', [$post->id])}}" class="btn btn-sm btn-success btn-block"> Apply Now</a>
                <br>
            </div>

            <div class="col-md-2">   <img height="600px" width="300px" src="{{url('/images/adds/6.png') }}"></div>

        </section>
    </div>
@endsection
