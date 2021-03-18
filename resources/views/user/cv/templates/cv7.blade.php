<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
--->
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <title>CV-7</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: "Montserrat", sans-serif;
        }

        body {
            background: #585c68;
            font-size: 14px;
            line-height: 20px;
            color: #555555;
        }

        .bold {
            font-weight: 700;
            font-size: 20px;
            text-transform: uppercase;
        }

        .semi-bold {
            font-weight: 500;
            font-size: 16px;
        }

        .resume{
            width: 842px;
            height: auto;
            display: -webkit-box;
            margin-left:auto;margin-right:auto;
        }

        .resume .resume_left{
            padding-top:160px;
            width: 33%;
            background: #2d4373;
        }

        .resume .resume_right .resume_profile img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            margin-left: 150px;
            margin-bottom:20px;
            margin-top: auto;
        }

        .resume .resume_left .resume_content {
            padding: 0 25px;
        }

        .resume .title {

            margin-bottom: 20px;
        }

        .resume .resume_left .bold {
            color: #fff;
        }

        .resume .resume_left .regular {
            color: white;
        }

        .resume .resume_item {
            padding: 25px 0;
            border-bottom: 2px solid #b3b3b3;
        }


        .resume .resume_left .resume_item:last-child,
        .resume .resume_right .resume_item:last-child {
            border-bottom: 0;
        }
        /*
         .resume .resume_left ul li:before,
        .resume .resume_left .resume-content .resume-skills ul li:before {
          content: "";
          position: inherit;
          top: 5px;
          left: 25px;
          width: 6px;
          height: 6px;
          border-radius: 50%;
          border: 2px solid #b3b3b3;
        }

        .resume .resume_left ul li:after,
        .resume .resume_left .resume-content .resume-skills ul li:after {
           content: "";
          position: absolute;
          top: 183px;
          margin-left: 4px;
          width: 2px;
          height: 145px;
          background: #0bb5f4;
        }
         */


        .resume .resume_left ul li {
            display: flex;
            margin-bottom: 10px;
            align-items: center;
        }

        .resume .resume_left ul li:last-child {
            margin-bottom: 0;
        }

        .resume .resume_left ul li .icon {
            width: 35px;
            height: 35px;
            color: white;
            border-radius: 50%;
            margin-right: 15px;
            font-size: 16px;
            position: relative;
        }

        .resume .icon i,
        .resume .resume_right .resume_hobby ul li i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .resume .resume_left ul li .data {
            color: white;
        }

        .resume .resume_left .resume_skills ul li {
            display: flex;
            margin-bottom: 10px;
            color: white;
            justify-content: space-between;
            align-items: center;
        }

        .resume .resume_left .resume_skills ul li .skill_name {
            width: 100%;
        }

        .resume .resume_left .resume_skills ul li .skill_progress {
            width: 60%;
            margin: 0 5px;
            height: 5px;
            background: #636b6f;
            position: relative;
        }

        .resume .resume_left .resume_skills ul li .skill_per {
            width: 15%;
        }

        .resume .resume_left .resume_skills ul li .skill_progress span {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: #fff;
        }

        .resume .resume_left .resume_social .semi-bold {
            color: #fff;
            margin-bottom: 3px;
        }

        .resume .resume_right{
            width: 67%;
            background: #fff;
            padding: 20px;
        }
        .resume .resume_right .name{
            padding-left: 40px;
            padding-top: 40px;
        }
        .resume .resume_right p{
            padding-left: 40px;
        }
        .resume .resume_right #work{
            font-size: 20px;
        }



        .resume .resume_right .heading {
            padding: 2px 0;
            border-bottom: 2px solid #b3b3b3;
        }

        .resume .resume_right .resume_work ul,
        .resume .resume_right .resume_education ul {
            padding-left: 40px;
            overflow: hidden;
        }
        .resume .resume_right .resume_item .row .semi-bold{
            text-transform: uppercase;
        }



        .resume .resume_right ul li {
            position: relative;
        }

        .resume .resume_right ul li .date {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .resume .resume_right ul li .info {
            margin-bottom: 10px;
        }

        .resume .resume_right ul li:last-child .info {
            margin-bottom: 20px;
        }

        .resume .resume_right {
            width: 520px;
            background: #fff;
            padding: 25px;
        }

        .resume .resume_right .bold {
            color: #2d4373;
        }

        .resume .resume_right .resume_work ul,
        .resume .resume_right .resume_education ul {
            padding-left: 40px;
            overflow: hidden;
        }

        .resume .resume_right ul li {
            position: relative;
        }

        .resume .resume_right ul li .date {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .resume .resume_right ul li .info {
            margin-bottom: 20px;
        }

        .resume .resume_right ul li:last-child .info {
            margin-bottom: 0;
        }

        .resume .resume_right .resume_work ul li:before,
        .resume .resume_right .resume_education ul li:before {
            content: "";
            position: absolute;
            top: 5px;
            left: -25px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            border: 2px solid #2d4373;
        }

        .resume .resume_right .resume_work ul li:after,
        .resume .resume_right .resume_education ul li:after {
            content: "";
            position: absolute;
            top: 14px;
            left: -21px;
            width: 2px;
            height: 115px;
            background: #2d4373;
        }

        .resume .resume_right .resume_hobby ul {
            display: flex;
            justify-content: space-between;
        }

        .resume .resume_right .resume_hobby ul li {
            width: 80px;
            height: 80px;
            border: 2px solid #2d4373;
            border-radius: 50%;
            position: relative;
            color: #2d4373;
        }

        .resume .resume_right .resume_hobby ul li i {
            font-size: 30px;
        }


        .resume .resume_right .resume_hobby ul li:before {
            content: "";
            position: absolute;
            top: 40px;
            right: -52px;
            width: 50px;
            height: 2px;
            background: #2d4373;
        }

        .resume .resume_right .resume_hobby ul li:last-child:before {
            display: none;
        }


        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="resume">
    <div class="resume_left">

        <div class="resume_content">
            <div class="resume_item resume_info">
                <div class="title resume_item">
                    <p class="bold">Contact Me</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="data">
                        {{$data->number}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="data">
                            {{$data->email}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="data">
                         {{$data->address}}
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_skills">
                <div class="title">
                    <p class="bold">PRO Skill's</p>
                </div>
                <ul>
                    @foreach($skills as $s)
                    <li>
                        <div class="skill_name">
                            {{$s->skills}}
                        </div>
                    </li>
                    <li>
                        <div class="skill_progress">
                            <span style="width: {{$s->skills_level}}%;"></span>
                        </div>
                        <div class="skill_per">{{$s->skills_level}}%</div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="resume_item resume_social">
                <div class="title">
                    <p class="bold">Social</p>
                </div>
                <ul>
                    @if($data->facbook)
                    <li>
                        <div class="icon">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Facebook</p>
                            <p>{{$data->facebook}}</p>
                        </div>
                    </li>
                    @endif
                    @if($data->twitter)
                        <li>
                        <div class="icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Twitter</p>
                            <p>{{$data->twitter}}</p>
                        </div>
                    </li>
                    @endif
                    @if($data->linkedin)
                    <li>
                        <div class="icon">
                            <i class="fa fa-linkedin"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Linkedin</p>
                            <p>{{$data->linkedin}}</p>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>





    <div class="resume_right">
        <div class="resume_item resume_about">
            <div class="resume_profile">
                <img src="{{url(str_replace('public', 'storage', $data->image))}}" class="user">
            </div>
            <div class="title">
                <p class="bold">About Me</p>
            </div>
            <p style="text-align: justify">{{$data->biography}}</p>
        </div>
        <div class="resume_item resume_work">
            <div class="title">
                <p class="bold">Work Experience</p>
            </div>
            <ul>
                @foreach($experience as $e)
                <li>
                    <div class="date">{{$e->join_date}}- {{$e->leave_date}}</div>
                    <div class="info">
                        <p class="semi-bold">{{$e->companies}}<br>{{$e->posts}}</p>
                        <p style="text-align: justify">{{$e->E_des}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="resume_item resume_education">
            <div class="title">
                <p class="bold">Education</p>
            </div>
            <ul>
                @foreach($qualification as $q)
                <li>
                    <div class="date">{{$q->session}}</div>
                    <div class="info">
                        <p class="semi-bold">{{$q->degree}}({{$q->marks}}) from {{$q->insitude}}</p>
                        <p style="text-align: justify">{{$q->Q_des}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="resume_hobby">
            <div class="title heading resume_item">
                <p class="bold">Hobby</p>
            </div>
            <ul>
                @foreach($hobbies as $h)
                    {{$h->hobbies}}
                @endforeach
                {{--         <li><i class="fa fa-book"></i></li>--}}
                {{--         <li><i class="fa fa-gamepad"></i></li>--}}
                {{--         <li><i class="fa fa-music"></i></li>--}}
                {{--         <li><i class="fa fa-camera"></i></li>--}}
            </ul>
        </div>


        <div class="resume_hobby">
            <div class="title heading resume_item">
                <p class="bold">References</p>
            </div>
            <ul>
                @foreach($reference as $r)
                    <b>{{$r->references}}</b></h4>
                        Contact:{{$r->refphone}}
                        Email:{{$r->refaddress}}

                @endforeach
            </ul>
        </div>
    </div>
</div>



<!-- Optional JavaScript
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
-->



</body>
</html>




{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Cv-16</title>--}}
{{--    <style>--}}
{{--        *{--}}
{{--            padding: 0;--}}
{{--            margin: 0;--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}
{{--        body{--}}
{{--            background: #F2F2F2;--}}
{{--        }--}}
{{--        .resume{--}}
{{--            width: 942px;--}}
{{--            margin: auto;--}}
{{--            border: 5px solid black;--}}
{{--        }--}}
{{--        .main{--}}
{{--            width: 90%;--}}
{{--            margin: auto;--}}
{{--        }--}}
{{--        .name{--}}
{{--            margin-top: 100px;--}}
{{--        }--}}
{{--        .name h1{--}}
{{--            letter-spacing: 8px;--}}
{{--            text-align: center;--}}
{{--            line-height: 40px;--}}
{{--        }--}}
{{--        .resume .main .name h3{--}}
{{--            letter-spacing: 8px;--}}
{{--            text-align: center;--}}
{{--            line-height: 40px;--}}

{{--        }--}}
{{--        .border{--}}
{{--            width: 160px;--}}
{{--            height: 6px;--}}
{{--            background: black;--}}
{{--            margin: auto;--}}
{{--        }--}}
{{--        .name h1{--}}
{{--            font-size: 34px;--}}
{{--        }--}}
{{--        .name p{--}}
{{--            text-align: center;--}}
{{--            margin-top: 70px;--}}
{{--        }--}}
{{--        .border2{--}}
{{--            height: 6px;--}}
{{--            background: black;--}}
{{--            margin: 20px 0px 10px 0px;--}}
{{--        }--}}
{{--        .experience h1{--}}
{{--            letter-spacing: 8px;--}}
{{--            margin-top: 50px;--}}
{{--        }--}}
{{--        .experience h3{--}}
{{--            letter-spacing: 5px;--}}
{{--            margin: 20px 0px 0px 60px;--}}
{{--        }--}}
{{--        .education h3{--}}
{{--            letter-spacing: 5px;--}}
{{--            margin: 20px 0px 0px 60px;--}}
{{--        }--}}
{{--        .content{--}}
{{--            display: flex;--}}
{{--            margin-top: 20px;--}}
{{--        }--}}
{{--        .content p{--}}
{{--            margin: 10px 0px 0px 30px;--}}
{{--        }--}}
{{--        .education p{--}}
{{--            margin: 10px 0px 0px 30px;--}}
{{--        }--}}
{{--        .education h1{--}}
{{--            letter-spacing: 8px;--}}
{{--            margin-top: 50px;--}}
{{--        }--}}
{{--        .progress{--}}
{{--            margin: 20px 0px 5px 0px ;--}}
{{--        }--}}
{{--        .bar-outline{--}}
{{--            position: relative;--}}
{{--            border: 1px solid black;--}}
{{--            width: 200px;--}}
{{--            height: 10px;--}}
{{--        }--}}
{{--        .progress p{--}}
{{--            font-size: 18px;--}}
{{--        }--}}
{{--        .bar-inner{--}}
{{--            width: 170px;--}}
{{--            background: coral;--}}
{{--            height: 8px;--}}
{{--        }--}}
{{--        .languages h1{--}}
{{--            margin-top: 40px;--}}
{{--            letter-spacing: 8px;--}}
{{--        }--}}
{{--        .skills{--}}
{{--            margin-left: 500px;--}}
{{--            margin-top: -220px;--}}
{{--        }--}}
{{--        .bars{--}}
{{--            margin-top: -10px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div class="resume">--}}
{{--        <div class="main">--}}
{{--            <div class="name">--}}
{{--                <h1>{{$data->name}}</h1>--}}
{{--                <h3>{{$data->fathername}}</h3>--}}
{{--                <h3>{{$data->position}}</h3>--}}
{{--                <hr class="border">--}}
{{--                <p>{{$data->biography}}</p>--}}
{{--                <hr class="border2">--}}
{{--            </div>--}}
{{--            <div class="experience">--}}
{{--                <div class="work">--}}
{{--                    <h1>Work Experience</h1>--}}
{{--                    @foreach($experience as $e)--}}
{{--                    <div class="content">--}}
{{--                        <h4>{{$e->posts}}</h4>--}}
{{--                        <h3>{{$e->companies}}</h3>--}}
{{--                        <small>{{$e->join_date}} to {{$e->leave_date}}</small>--}}
{{--                        <p>{{$e->E_des}}</p>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="education">--}}
{{--                <h1>Education</h1>--}}
{{--                <div class="content">--}}
{{--                    <h3>2002/2004</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cumque dolores enim ex expedita labore non officiis quis vitae voluptas?</p>--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <h3>2005/2009</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cumque dolores enim ex expedita labore non officiis quis vitae voluptas?</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="languages">--}}
{{--                <h1>Languags</h1>--}}
{{--                <div class="progress">--}}
{{--                    <p>Java</p>--}}
{{--                    <div class="bar-outline">--}}
{{--                        <div class="bar-inner"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress">--}}
{{--                    <p>C++</p>--}}
{{--                    <div class="bar-outline">--}}
{{--                        <div class="bar-inner"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress">--}}
{{--                    <p>C#</p>--}}
{{--                    <div class="bar-outline">--}}
{{--                        <div class="bar-inner"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="skills">--}}
{{--                    <h1>Skills</h1>--}}
{{--                    <div class="bars">--}}
{{--                        <div class="progress">--}}
{{--                            <p>Illustrator</p>--}}
{{--                            <div class="bar-outline">--}}
{{--                                <div class="bar-inner"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="progress">--}}
{{--                            <p>Photoshop</p>--}}
{{--                            <div class="bar-outline">--}}
{{--                                <div class="bar-inner"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="progress">--}}
{{--                            <p>UI/UX</p>--}}
{{--                            <div class="bar-outline">--}}
{{--                                <div class="bar-inner"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
