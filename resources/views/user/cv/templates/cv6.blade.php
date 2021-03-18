<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <title>Cv-6</title>
    <style>
        body {
            background-color: white;
        }

        .bg-orange {
            background-color: orange;
        }

        .heading {
            background-color: orange;
            font-size: 28px;
            font-family: Tahoma;
            color: white;
            padding: 8px;
        }

        .cv-img {
            width: 200px;
            height: 200px;
        }

        .icon {
            width: 30px;
            hieght: 30px;
        }
    </style>
</head>
<body>

<div class="container" style="border:1px solid black;" style="width:842px";>
    <div class="row header text-white bg-orange">
        <div class="col-xs-4 col-cv-img p-5 text-center">
            <div>
                <img class="img-thumbnail rounded-circle cv-img"
                     src="{{url(str_replace('public', 'storage', $data->image))}}">
            </div>
        </div>
        <div class="col-xs-7 py-5 pr-5">
            <h1>{{$data->name}}</h1>
            <h6>{{$data->fathername}}</h6>
            <p class="text-justify">{{$data->biography}}</p>
        </div>
    </div>

    <div style="" class="row pb-3  pt-5">
        <section class="col-xs-4 px-5">
            <center><h1><i class="fas fa-phone-square-alt"></i>Contact</h1></center>
            <br>
            <div class="row">
                <div class="col-xs-2">
                    <img src="/images/home.png" class=" icon">
                </div>
                <h6 class="col-xs-10">{{$data->address}}</h6>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <img src="/images/mobile.png" class=" icon">
                </div>
                <h6 class="col-xs-10">{{$data->number}}</h6>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <img src="/images/email.png" class=" icon">
                </div>
                <h6 class="col-xs-10">{{$data->email}}</h6>
            </div>
            <hr>
            <br>
            <center><h1><i class="fas fa-language"></i>Languages</h1></center>
            <br>
            @foreach($languages as $l)
                <h3>{{$l->languages}}</h3>
                <div class="progress" style="height:20px">
                    <div class="progress-bar" style="width:{{$l->languages_level}}%;height:20px"></div>
                </div><br>
            @endforeach
            <hr>
            <br>
            <center><h1><i class="fas fa-align-left"></i>Skills</h1></center>
            <br>
            @foreach($skills as $skills)
                <h3>{{$skills->skills}}</h3>
                <div class="progress" style="height:20px">
                    <div class="progress-bar" style="width:{{$skills->skills_level}}%;height:20px"></div>
                </div><br>
            @endforeach
            <hr>
            <br>
            <center><h1><i class="fas fa-align-left"></i>Hobbies</h1></center>
            <br>
            @foreach($hobbies as $hobbies)
                <div class="row">
                    <ul>
                        <li><h6 class="col">{{$hobbies->hobbies}}</h6></li>
                    </ul>
                </div>
            @endforeach
            <center><h1><i class="fas fa-globe"></i>Other Links</h1></center>
            <br>
            @if($data->facebook)
                <i class="fab fa-facebook"></i>{{$data->facebook}}<br>
            @endif
            @if($data->linkedin)
                <i class="fab fa-linkedin"></i></i>{{$data->linkedin}}<br>
            @endif
            @if($data->twitter)
                <i class="fab fa-twitter"></i>{{$data->twitter}}<br>
            @endif


        </section>

        <section class="col-xs-8">
            <h1 class="heading"><i class="fas fa-graduation-cap"></i>Archivements</h1><br>
            @foreach($qualification as $qualification)
                <div class="pl-5 pr-5">
                    <h4>{{$qualification->degree}}<b>-</b>{{$qualification->insitude}}
                        <b>-</b>{{$qualification->session}}</h4><br>
                    <h5>{{$qualification->marks}} OUT OF {{$qualification->total}}</h5><br>
                    <p style="text-align: justify">{{$qualification->Q_des}}</p>
                </div>
            @endforeach
            <h1 class="heading"><i class="fas fa-briefcase"></i>Previous Expereince</h1><br>
            @foreach($experience as $experience)
                <div class="pl-5 pr-5">
                    <h4>{{$experience->companies}}<b>-</b>{{$experience->posts}}</h4><br>
                    <h5>{{$experience->join_date}} TO {{$experience->leave_date}}</h5><br>
                    <p style="text-align: justify">{{$experience->E_des}}</p>
                </div>
            @endforeach

            <h1 class="heading"><i class="fas fa-users"></i>References</h1><br>
            @foreach($reference as $reference)
                <div class="row">
                    <ul>
                        <li><h5 class="col">{{$reference->references}}</h5>
                            <h6 class='col'>{{$reference->refphone}}</h6>
                            <h6 class='col'>{{$reference->refaddress}}</h6></li>
                    </ul>
                </div>
            @endforeach


        </section>
    </div>

    <div class="row mt-3">
        <div class="col-xs-4  py-2 bg-danger"></div>
        <h4 class=" col-xs-4 bg-orange py-2 mb-0 text-center text-white">Professional Cv Makers</h4>
        <div class="col-xs-4  py-2 bg-info"></div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
</body>
</html>





{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Cv-6</title>--}}
{{--    <style>--}}
{{--        *{--}}
{{--            padding: 0;--}}
{{--            margin: 0;--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}
{{--        body{--}}
{{--            background: #fefefe;--}}
{{--        }--}}
{{--        .resume{--}}
{{--            background: white;--}}
{{--            width: 942px;--}}
{{--            margin: auto;--}}
{{--            border: 1px solid black ;--}}
{{--            display: -webkit-box;--}}
{{--        }--}}
{{--        .main{--}}
{{--            width: 100%;--}}
{{--            padding: 30px;--}}
{{--            margin: auto;--}}
{{--        }--}}
{{--        .head{--}}
{{--            display: -webkit-box;--}}
{{--            align-items: center;--}}
{{--        }--}}
{{--        .info p{--}}
{{--            margin-left: 90px;--}}
{{--        }--}}
{{--        .name,.profile_img,.info{--}}
{{--            width: 33%;--}}
{{--        }--}}
{{--        .name h1{--}}
{{--            font-weight: 600;--}}
{{--            font-size: 45px;--}}
{{--        }--}}
{{--        .name h3{--}}
{{--            font-size: 30px;--}}
{{--        }--}}
{{--        .profile_img img{--}}
{{--            width: 220px;--}}
{{--            height: 220px;--}}
{{--            border-radius: 50%;--}}
{{--        }--}}
{{--        .info p{--}}
{{--            font-weight: 500;--}}
{{--            font-size: 20px;--}}
{{--            color: #636e72;--}}
{{--        }--}}
{{--        .content-right{--}}
{{--            width: 45%;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}
{{--        .content-left{--}}
{{--            width: 45%;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}
{{--        .content-right h1{--}}
{{--            font-weight: 600;--}}
{{--            font-size: 40px;--}}
{{--            margin-bottom: 10px;--}}
{{--        }--}}
{{--        .content-right p{--}}
{{--            font-size: 18px;--}}
{{--            font-weight: 500;--}}
{{--            text-align: justify;--}}
{{--        }--}}
{{--        .content{--}}
{{--            display: -webkit-box;--}}
{{--            justify-content: space-evenly;--}}
{{--        }--}}
{{--        .experience{--}}
{{--            margin-left: 20px;--}}
{{--            margin-top: 10px;--}}
{{--        }--}}
{{--        .experience h3,p{--}}
{{--            margin-top: 10px;--}}
{{--            margin-left: 20px;--}}
{{--        }--}}
{{--        .skills{--}}
{{--            margin-top: 25px;--}}
{{--        }--}}
{{--        .bar-outline{--}}
{{--            position: relative;--}}
{{--            border: 1px solid black;--}}
{{--            border-radius: 20px;--}}
{{--            width: 200px;--}}
{{--            height: 20px;--}}
{{--        }--}}
{{--        .bar-inner{--}}
{{--            width: 170px;--}}
{{--            border-radius: 20px;--}}
{{--            background: black;--}}
{{--            height: 18px;--}}
{{--        }--}}
{{--        .progress p{--}}
{{--            font-weight: 500!important;--}}
{{--            font-size: 20px!important;--}}
{{--            margin-bottom: 10px;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}
{{--        .languages h1{--}}
{{--            margin-top: 60px;--}}
{{--        }.education h1{--}}
{{--            margin-top: 60px;--}}
{{--            margin-left: 30px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<div class="resume">--}}
{{--    <div class="main">--}}
{{--        <div class="head">--}}
{{--            <div class="name">--}}
{{--                <h1>{{$data->name}}</h1>--}}
{{--                <h3>{{$data->fathername}}</h3>--}}
{{--            </div>--}}

{{--            <div class="profile_img">--}}
{{--                <img src="{{url(str_replace('public', 'storage', $data->image))}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <p>{{$data->email}}</p>--}}
{{--                <p>{{$data->number}}</p>--}}
{{--                <p>{{$data->address}}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr>--}}
{{--        <div class="content">--}}
{{--            <div class="content-left">--}}
{{--                <div class="experience">--}}
{{--                    <h1>Work Experience</h1>--}}
{{--                    @foreach($experience as $e)--}}
{{--                        <li><h2 style="display: inline">{{$e->companies}} <br>({{$e->join_date}} to {{$e->leave_date}})</h2></li>--}}
{{--                        <h3>{{$e->posts}}</h3>--}}
{{--                        <p style="margin-bottom: 15px;">{{$e->E_des}}</p>--}}
{{--                    @endforeach--}}
{{--                </div>--}}

{{--                <div class="education">--}}
{{--                    <h1>Education</h1>--}}
{{--                    <div class="experience">--}}
{{--                        @foreach($qualification as $q)--}}
{{--                            <li><h2 style="display: inline">{{$q->degree}}({{$q->marks}})</h2></li>--}}
{{--                            <h3>{{$q->insitude}}</h3>--}}
{{--                            <p style="margin-bottom: 15px;">{{$q->Q_des}}</p>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="education">--}}
{{--                    <h1>References</h1>--}}
{{--                    <div class="experience">--}}
{{--                        @foreach($reference as $r)--}}
{{--                            <li><h2 style="display: inline">{{$r->references}}</h2></li>--}}
{{--                            <h3>{{$r->refphone}}</h3>--}}
{{--                            <p style="margin-bottom: 15px;">{{$r->refaddress}}</p>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="content-right">--}}
{{--                <h1>Profile</h1>--}}
{{--                <p>{{$data->biography}}</p>--}}

{{--                <div class="skills">--}}
{{--                    <h1>Skills</h1>--}}
{{--                    @foreach($skills as $s)--}}
{{--                    <div class="progress">--}}
{{--                        <p>{{$s->skills}}&nbsp;&nbsp;<b>{{$s->skills_level}}%</b></p>--}}
{{--                        <div class="bar-outline">--}}
{{--                            <div class="bar-inner" style="width: {{$s->skills_level}}%;"></div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                    </div><br><br>--}}

{{--                    <h1>Languages</h1>--}}
{{--                    @foreach($languages as $l)--}}
{{--                    <div class="progress">--}}
{{--                        <p>{{$l->languages}}&nbsp;&nbsp;<b>{{$l->languages_level}}%</b></p>--}}
{{--                        <div class="bar-outline">--}}
{{--                            <div class="bar-inner" style="width: {{$l->languages_level}}%;"></div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}



{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
