@extends('jobportal.layouts.layouts')

@section('content')
    <style>.color{color:black;}li{list-style-type: none;]
        }</style>
    <div class="container-fluid">
        <div class=" mt-5 pt-5 text-center">
            {{--        <h1> <span class="colorH">Jobs</span> Portal</h1>--}}
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <h4 class="color"><li><i class="fas fa-clipboard" style="color:gray;text-shadow: 1px 1px black;"></i>&nbsp;Qualification</li></h4>
                <ul>
                    <li><a href="{{url('jobs/qualifications/1')}}">Non-Matriculation</a></li>
                    <li><a href="{{url('jobs/qualifications/2')}}">Matriculation/O-Level</a></li>
                    <li><a href="{{url('jobs/qualifications/3')}}">Intermediate/A-Level</a></li>
                    <li><a href="{{url('jobs/qualifications/4')}}">Bachelor</a></li>
                    <li><a href="{{url('jobs/qualifications/5')}}">Master</a></li>
                    <li><a href="{{url('jobs/qualifications/6')}}">MBBS/BDS</a></li>
                    <li><a href="{{url('jobs/qualifications/7')}}">Pharm-D</a></li>
                    <li><a href="{{url('jobs/qualifications/8')}}">M-Phill</a></li>
                    <li><a href="{{url('jobs/qualifications/9')}}">PHD/Doctorate</a></li>
                    <li><a href="{{url('jobs/qualifications/10')}}">Certification</a></li>
                    <li><a href="{{url('jobs/qualifications/11')}}">Diploma</a></li>
                    <li><a href="{{url('jobs/qualifications/12')}}">Short Course</a></li>
                </ul>
                <h4 class="color"><li><i class="fas fa-search"style="color:gray;text-shadow: 1px 1px black;"></i>&nbsp;Skills</li></h4>
                <form action="{{url('/jobs/skill')}}" method="POST">
                    @csrf
                <div class="input-group mt-4">
                    <input type="text" class="form-control"name="skill" placeholder="Php, Laravel, Java">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Go</button>
                    </div>
                </div>
                </form>
                <h4 class="mt-4 color"><li><i class="fas fa-map-marked"style="color:gray;text-shadow: 1px 1px black;"></i>&nbsp;Locations</li></h4>
                <form action="{{url('/jobs/location')}}" method="POST">
                    @csrf
                <div class="input-group mt-4">
                    <input type="text" class="form-control" name="location" placeholder="Lahore, Multan, Karachi">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Go</button>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-md-7 jobsDetails">
                @if($posts->count())
                    @foreach($posts as $post)
                     <a href="/jobs/{{$post->id}}" id="color">
                        <section>
                        <div class="container py-3">
                                    <div class="card">
                                        <div class="row ">
                                            <div class="col-md-5" >
                                                <img class="img-fluid " src="{{url( str_replace("public", "storage", $post->image))}}" alt="job Image" class="w-100">
                                            </div>
                                            <div class="col-md-7 px-3">
                                                <div class="card-block px-3">
                                                    <h4 class="card-title title">{{$post->title}}</h4>
                                                    <small class="">{{$post->company->email}}</small>
                                                    <hr><p class="card-text text-justify description">{{$post->details}}</p><hr><div class="row">
                                                        <div class="col-md-6">
                                                            <p class="sub-head " style="text-wrap: normal">Location <span class="sub-value"> {{$post->location}} </span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="sub-head" > Salary <br> <span class="sub-value"> Rs {{$post->salary_from}} - {{$post->salary_to}} </span></p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </section>
                     </a>

                        <hr class="bg-dark">
                    @endforeach

                    {{$posts->links()}}
                @else
                    <div class="alert alert-info">No jobs found! Check Later!</div>
                @endif
            </div>

            <div class="col-md-2">
                <img height="500px" width="230px" src="{{url('/images/adds/4.png') }}">
                <img height="500px" width="230px" src="{{url('/images/adds/5.png') }}">

            </div>
        </div>
    </div>

@endsection
