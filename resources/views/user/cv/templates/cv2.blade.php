<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<title>CV-2</title>
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
            font-size: 14px;
            line-height: 22px;
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

        .resume {
            width: 842px;
            height: auto;
            display: -webkit-box;
            margin-left: auto;
            margin-right:auto;
        }

        .resume .resume_left {
            width: 33%;
            background: #0f96c5;
        }

        .resume .resume_left .resume_profile {
            width: 100%;
            height: 280px;
        }

        .resume .resume_left .resume_profile img {
            width: 220px;
            height: 220px;

            margin-left: 30px;
            margin-top: 30px;
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
            color: #b1eaff;
        }

        .resume .resume_item {
            padding: 25px 0;
            border-bottom: 2px solid #b1eaff;
        }

        .resume .resume_left .resume_item:last-child,
        .resume .resume_right .resume_item:last-child {
            border-bottom: 0px;
        }

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
            background: #fff;
            color: #0bb5f4;
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
            color: #b1eaff;
        }

        .resume .resume_left .resume_skills ul li {
            display: flex;
            margin-bottom: 10px;
            color: #b1eaff;
            justify-content: space-between;
            align-items: center;
        }

        .resume .resume_left .resume_skills ul li .skill_name {
            width: 25%;
        }

        .resume .resume_left .resume_skills ul li .skill_progress {
            width: 60%;
            margin: 0 5px;
            height: 5px;
            background: #009fd9;
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

        .resume .resume_right {
            width: 67%;
            background: #fff;
            padding: 25px;
        }

        .resume .resume_right .bold {
            color: #0bb5f4;
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
            border: 2px solid #0bb5f4;
        }

        .resume .resume_right .resume_work ul li:after,
        .resume .resume_right .resume_education ul li:after {
            content: "";
            position: absolute;
            top: 14px;
            left: -21px;
            width: 2px;
            height: 115px;
            background: #0bb5f4;
        }

        .resume .resume_right .resume_hobby ul {
            display: flex;
            justify-content: space-between;
        }

        .resume .resume_right .resume_hobby ul li {
            width: 80px;
            height: 80px;
            border: 2px solid #0bb5f4;
            border-radius: 50%;
            position: relative;
            color: #0bb5f4;
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
            background: #0bb5f4;
        }

        .resume .resume_right .resume_hobby ul li:last-child:before {
            display: none;
        }
        .t{text-align: justify;}
     </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="cv11.css">
</head>
<body>

<div class="resume" style="border:1px solid black">
   <div class="resume_left">
     <div class="resume_profile">
         <img
             src="{{url(str_replace('public', 'storage', $data->image))}}" class="user">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">{{$data->name}}</p>
           <p class="regular">{{$data->position}}</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fa fa-map-signs"></i>
             </div>
             <div class="data">
               {{$data->address}}
             </div>
           </li>
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
               <i class="fa fa-envelope"></i>
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
               {{$data->email}}
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">Skill's</p>
         </div>
         <ul>
             @foreach($skills as $sk)
                 <li>
                     <div class="skill_name">
                         {{$sk->skills}}
                     </div>
                 </li>
                 <li>
                     <div class="skill_progress">
                         <span style="width: {{$sk->skills_level}}%;"></span>
                     </div>
                     <div class="skill_per">{{$sk->skills_level}}%</div>
                 </li>
             @endforeach
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social Link</p>
         </div>
         <ul>
             @if($data->facebook)
           <li>
             <div class="icon">
               <i class="fa fa-facebook-square"></i>
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
               <i class="fa fa-twitter-square"></i>
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
        <div class="title">
           <p class="bold">About Me</p>
         </div>
        <p class="t">{{$data->biography}}</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Work Experience</p>
         </div>
        <ul>
            @foreach($experience as $e)
            <li>
                <div class="date">{{$e->join_date}} - {{$e->leave_date}}</div>
                <div class="info">
                     <p class="semi-bold">{{$e->posts}}</p>
                     <p class="semi-bold">{{$e->companies}}</p>
                  <p class="t"> {{$e->E_des}}</p>
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
                     <p class="semi-bold">{{$q->degree}} ({{$q->marks}}-{{$q->total}})</p>
                     <p class="semi-bold">{{$q->insiude}}</p>
                  <p class="t">{{$q->Q_des}}</p>
                </div>
            </li>
          @endforeach
        </ul>
    </div>
{{--    <div class="resume_item resume_hobby">--}}
{{--      <div class="title">--}}
{{--           <p class="bold">Hobby</p>--}}
{{--         </div>--}}
{{--       <ul>--}}
{{--         <li><i class="fa fa-book"></i></li>--}}
{{--         <li><i class="fa fa-gamepad"></i></li>--}}
{{--         <li><i class="fa fa-music"></i></li>--}}
{{--         <li><i class="fa fa-pagelines"></i></li>--}}
{{--      </ul>--}}
{{--    </div>--}}

      <div class="resume_hobby">
          <div class="title heading resume_item">
              <p class="bold">Hobby</p>
          </div>
          <ul>
              @foreach($hobbies as $h)
{{--                  <li style="color:black">{{$h->hobbies}}</li>--}}
                  <h4 class="semi-bold">{{$h->hobbies}}</h4>
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
                  <h4 class="semi-bold">{{$r->references}}</h4>
                  Contact:{{$r->refphone}}<br>
                  Email:{{$r->refaddress}}

              @endforeach
              {{--         <li><i class="fa fa-book"></i></li>--}}
              {{--         <li><i class="fa fa-gamepad"></i></li>--}}
              {{--         <li><i class="fa fa-music"></i></li>--}}
              {{--         <li><i class="fa fa-camera"></i></li>--}}
          </ul>
      </div>
  </div>
</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>
