@extends('company.layouts.companyaccount')

@section('centermain')
    <h1 id="heading"><i class="fas fa-plus-circle mr-3"></i>Add New Job</h1>
    <hr>

    @include('layouts.errors')
    @include('flash::message')
    <form method="POST" action="{{route('company.jobpost.store')}}" enctype="multipart/form-data">
        @csrf
        <section class="container py-2 px-5 bg-white" >
            <div class="row">
                <label class="col-md-3">Add Title<span class="text-danger"><b>*</b></span></label>
                <input class="col-md-9" type="text" name="title" placeholder="Add Title">

            <span class="mt-3"><label class="col-md-3">Add Feat0ured Image</label>
                <input type='file' name="image" class="col-md-8" />
            </span>
            </div>

            {{--                <label>About the job<span class="text-danger">*</span></label><textarea cols="65" name="details" rows="10"></textarea>--}}
            <div class="md-form">
                <label for="message">Job Details</label>
                <textarea type="text" name="details" rows="5" class="form-control md-textarea"></textarea>
            </div>
            <br>
            <div class="row">
                <label class="col-md-3">Add Location<span class="text-danger"><b>*</b></span></label>
                <input class="col-md-9" type="text" name="location" placeholder="Add Location like Karachi, Pakistan">
            </div>

            <div class="form-group">
                <!-- test -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- </form> -->
                        <!-- Copy Fields -->
                        <button id="add-skill" class="mt-3 btn btn-success add-s" type="button">Add</button>

                        <div id="s">
                            <div class="input-group row" style="margin-top:10px;">
                                <div class="form-group col-sm-11">
                                    <input name="job_skills[]" type="text" class="form-control" placeholder="Skills" />
                                </div>
                                <div class="form-group col-sm-1">
                                    <button class="btn btn-danger remove-row" type="button">X</button>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- test end -->
            </div>

            <div class="row my-1" >
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-12">Required career level for job?<span class="text-danger"><b>*</b></span></label>
                        <div class="col-md-12">
                            <select class="p-1" name="career">
                                <option >Choose career level</option>
                                <option >Intern/Student</option>
                                <option >Entry Level</option>
                                <option >Experienced Professional</option>
                                <option >Department Head</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <label class="col-md-12">No. of Positions?<span class="text-danger"><b>*</b></span></label>
                        <div class="col-md-12">
                            <select class="p-1" name="positions">
                                <option >No. of Avaiable Seats</option>
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
                </div>

            </div>
            <div class="row my-1">
                <label class="col">
                    What minimium qualifications is required?<span class="text-danger"><b>*</b></span>
                </label>
                <div class="col-md-12">
                    <select class="p-1" name="qualifications">
                        <option >Chosse Qualification</option>
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

            <div class="row my-1">
                <label class="col">
                    What should be the year of experience?<span class="text-danger"><b>*</b></span>
                </label>
                <div class="col-md-12">
                    <select class="p-1" name="experiences">
                        <option >PLease chosse year of experiences</option>
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

            <div class="row my-1">
                <label class="col-md-12">
                    What should be the range of salary required?(optional)
                </label>
                <div class="col-md-6">
                    <input type="number" min="1" name="salary_from" placeholder="Form">
                </div>
                <div class="col-md-6">
                    <input type="number" name="salary_to" placeholder="To" >
                </div>
            </div>
            <div class="row my-1">
                <label class="col">
                    Is there a gender preference for this job?
                </label>
                <div class="col-md-12">
                    <select class="p-1" name="preferences">
                        <option >No any Preferences</option>
                        <option >Male</option>
                        <option >Female</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-outline-success my-5">POST</button>
        </section>
    </form>
@endsection

@section('scripts')
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
    <script type="text/javascript">
        console.log('test');
        $("#add-skill").click(function(){
            var html = $("#s-copy").html();
            $('#s').append(html);
        });

        $("body").on("click",".remove-row",function(){
            $(this).parent().parent().remove();
        });
    </script>
@endsection
