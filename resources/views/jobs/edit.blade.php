@extends('jobportal.layouts.layouts')

@section('content')

    <div class="container mt-5 pt-5">
        <center><div class="alert alert-success" role="alert"><b>"Make sure that you can apply only for one time for one post!"</b></div></center>
        <section class="row">
            <div class="col-md-8">
                <form method="POST" action="{{route('jobs.update', [$post->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label class="control-label title">Proposal Request:</label>
                    <textarea class="form-control" rows="10" name="details"></textarea><br>
                    <div class="alert alert-info" role="alert"><b>"Please Attach pdf,or imege file etc</b></div>
                    <label class="control-label sub-head">Attachment:</label><input type="file" class="" name="image"><br>
                    <hr>
                    <button type="submit" class="btn btn-success btn-sm btn-block">Apply</button>
                </form>
            </div>
            <div class="col-md-4">
                <center><h3 class="title">{{$post->title}}</h3></center><hr>
                <ul>
                    <li><h4 class="sub-head">Location:</h4><p class="sub-value">{{$post->location}}</p></li>
                    <li><h4 class="sub-head">Career Level:</h4><p class="sub-value">{{$post->career}}</p></li>
                    <li><h4 class="sub-head">Minimum Qualification:</h4><p class="sub-value">{{$post->qualifications}}</p></li>
                    <li><h4 class="sub-head">Skills:</h4><p class="sub-value">{{$post->jobskills->implode('job_skills', ', ')}}</p></li>
                    <li><h4 class="sub-head">Salary:</h4><p class="sub-value"><b>RS: </b> {{$post->salary_from}}-{{$post->salary_to}}</p></li>
                </ul>
                <hr>
            </div>

        </section>
    </div>
@endsection
