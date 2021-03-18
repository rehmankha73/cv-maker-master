@extends('admin.layouts.app')
@section('content')
{{--<h1>edit:{{$post->title}}</h1>--}}
    <hr>
<section class="row">
    <div class="col-md-8">
        <form action="{{route('admin.posts.update', [$posts->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label">Post Title</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="inputEmail3" name="title" value="{{$posts->title}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label ">Feature Image</label>
                <div class="col-md-9">
                    <input type="file" class="form-control border-0" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label ">Details</label>
                <div class="col-md-9">
                    <div class="md-form">
                        <textarea type="text" name="details" rows="5" class="form-control md-textarea">{{$posts->details}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label ">Location</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="location" value="{{$posts->location}}">
                </div>
            </div>

            <div class="form-group">
                <!-- test -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- </form> -->
                        <!-- Copy Fields -->
                        <button id="add-skill" class="btn btn-success add-s" type="button">Add</button>

                        <div id="s">
                            @foreach($posts->jobskills as $skill)
                                <div class="input-group row" style="margin-top:10px">
                                    <div class="form-group col-sm-10">
                                        <input name="job_skills[]" type="text" class="form-control" placeholder="Skills" value="{{$skill->job_skills}}" />
                                    </div>
                                    <div class="form-group col-sm-1">
                                        <button class="btn btn-danger remove-row" type="button">X</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- test end -->
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label ">Level of Experience</label>
                <div class="col-md-9">
                    {{--                <input type="text" class="form-control" name="career" value="{{$posts->career}}">--}}
                    <select class="p-1" name="career">
                        <option selected>{{$posts->career}}</option>
                        <option >Intern/Student</option>
                        <option >Entry Level</option>
                        <option >Experienced Professional</option>
                        <option >Department Head</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label">No of Position</label>
                <div class="col-md-9">
                    {{--                <input type="text" class="form-control" name="positions" value="{{$posts->positions}}">--}}
                    <select class="p-1" name="positions">
                        <option selected>{{$posts->positions}}</option>
                        <option >1</option>
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option >10</option>
                        <option >20</option>
                        <option >30</option>
                        <option >40</option>
                        <option >50</option>
                        <option >50+</option>
                        <option >100</option>
                        <option >100+</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label ">What is minimum qualification is required?</label>
                <div class="col-md-9">
                    {{--                <input type="text" class="form-control" name="qualifications" value="{{$posts->qualifications}}">--}}
                    <select class="p-1" name="qualifications">
                        <option selected>{{$posts->qualifications}}</option>
                        <option >Non-Matriculation</option>
                        <option >Matriculation/O-Level</option>
                        <option >Intermediate/A-Level</option>
                        <option >Bachelor</option>
                        <option >Master</option>
                        <option >MBBS/BDS</option>
                        <option >Pharm-D</option>
                        <option >M-Phill</option>
                        <option >PHD/Doctorate</option>
                        <option >Certification</option>
                        <option >Diploma</option>
                        <option >Short Course</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label ">Experience is required?</label>
                <div class="col-md-9">
                    {{--                <input type="text" class="form-control" name="experiences" value="{{$posts->experiences}}">--}}
                    <select class="p-1" name="experiences">
                        <option selected >{{$posts->experiences}}</option>
                        <option >1</option>
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option >10</option>
                        <option >20</option>
                        <option >30</option>
                        <option >40</option>
                        <option >50</option>
                        <option >50+</option>
                        <option >100</option>
                        <option >100+</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label ">Salary Ranges</label>
                <div class="col-md-4">
                    <input type="number" min="1" class="form-control" name="salary_from" value="{{$posts->salary_from}}">
                </div>
                <div class="col-md-5">
                    <input type="number" class="form-control" name="salary_to" value="{{$posts->salary_to}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-3 col-form-label">any preference?</label>
                <div class="col-md-9">
                    {{--                <input type="text" class="form-control" name="preferences" value="{{$posts->preferences}}">--}}
                    <select class="p-1" name="preferences">
                        <option selected>{{$posts->preferences}}</option>
                        <option >Male</option>
                        <option >Female</option>
                        <option >Transgender</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-9 col-form-label "></label>
                <div class="col-md-3">
                    <button class="btn btn-sm btn-block btn-success">Update</button>
                </div>
            </div>
            <hr>
            <hr>

        </form>

</section>
<div id="s-copy" style="display: none;">
    <div class="input-group row" style="margin-top:10px">
        <div class="form-group col-sm-11">
            <input name="job_skills[]" type="text" class="form-control" placeholder="Skills" />
        </div>
        <div class="form-group col-sm-1">
            <button class="btn btn-danger remove-row" type="button">X</button>
        </div>
    </div>
</div>




@endsection
