<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <title>CV-5</title>
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
            margin-right: auto;
        }

        .resume .resume_left{
            width: 35%;
            background: white;
        }
        .resume .resume_left .resume_profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-left: 30px;
            margin-top: 340px;
            margin-bottom: 10px;
        }
        .resume .resume_left .name p{
            font-size: 40px;
            font-weight: bold;
            color: #181818;
            padding-left: 40px;
            padding-top: 30px;
            padding-bottom:10px;
        }
        .resume .resume_left .name h1{
            font-size: 40px;
            color: black;
            font-weight: bolder;
            padding-left: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid #2B2B2B;
        }
        .resume .resume_left h5{
            font-size: 20px;
        }
        .resume .resume_left .pos{
            color: #2B2B2B;
        }



        .resume .resume_left .resume_content {
            padding: 0 25px;
        }

        .resume .title {
            color: black;
            margin-top: 70px;
            margin-bottom: 20px;
        }







        .resume .resume_left .resume_item:last-child,
        .resume .resume_right .resume_item:last-child {
            border-bottom: 0;
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
            color: #2B2B2B;
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
        .midline {
            border-left: 2px solid #b3b3b3;
            padding-left: 10px;
        }

        .resume .resume_left ul li .data {
            color: #2B2B2B;
        }


        .resume .resume_left .resume_social .semi-bold {
            color: #fff;
            margin-bottom: 3px;
        }

        .resume .resume_right {
            width: 65%;
            background: #fff;
            padding: 20px;
        }
        .resume .resume_right .resume_work .title_right{
            margin-top: 30px;
            color: black;
            margin-bottom: 30px;
        }

        .resume .resume_right ul .degree{
            margin-bottom: 0;
            font-size: 16px;
            color: #2B2B2B;
            font-style: italic;
        }

        .resume .resume_right ul .place{
            margin-bottom: 0;
            margin-top: 0;
            text-transform: uppercase;
            font-size: 16px;
            font-style: normal;
            font-weight: bold;
            color: #181818;
        }
        .resume .resume_right ul .from{
            color: #181818;
            margin-top:0 ;
            margin-bottom: 0;
        }

        .resume .resume_right p{
            padding-left: 40px;
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

        .resume .resume_right .resume_skills ul li {
            display: flex;
            margin-left: 70px;
            margin-bottom: 10px;
            color: #2B2B2B;
            justify-content: space-between;
            align-items: center;
        }

        .resume .resume_right.resume_skills ul li .skill_name {
            width: 100%;
        }

        .resume .resume_right .resume_skills ul li .skill_progress {
            width: 70%;
            margin: 0 5px;
            height: 3px;
            background: #919191;
            position: relative;
        }

        .resume .resume_right .resume_skills ul li .skill_per{
            width: 15%;
        }

        .resume .resume_right .resume_skills ul li .skill_progress span{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: black;
        }
        .resume .resume_right .resume_skills ul li .skill_progress .success-color{
            background-color:#919191 ;
        }
        .resume .resume_right .resume_skills ul li .skill_progress .one {
            /*left: 80%;*/
            position: absolute;
            margin-top: -10px;
            z-index: 1;
            height: 25px;
            width: 25px;
            border-radius: 25px;
        }
        .resume .resume_right .resume_skills ul li .skill_progress .two {
            left: 70%;
            position: absolute;
            margin-top: -10px;
            z-index: 1;
            height: 25px;
            width: 25px;
            border-radius: 25px;
        }
        .resume .resume_right .resume_skills ul li .skill_progress .three {
            left: 90%;
            position: absolute;
            margin-top: -10px;
            z-index: 1;
            height: 25px;
            width: 25px;
            border-radius: 25px;
        }
        .resume .resume_right .resume_skills ul li .skill_progress .four {
            left: 60%;
            position: absolute;
            margin-top: -10px;
            z-index: 1;
            height: 25px;
            width: 25px;
            border-radius: 25px;
        }
        .t{text-align: justify}
    </style>
	<link rel="stylesheet" href="cv14.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>


<div class="resume" style="justify-content: center">

   <div class="resume_left">
       <div class="resume_profile">
           <img src="{{url(str_replace('public', 'storage', $data->image))}}" class="user">
       </div>
       <div class="container name">
         <p>{{$data->name}}</p><br>
         <h1>{{$data->fathername}}</h1>
       </div>
       <center><h5 class="text-right mt-0 mr-4 pos">{{$data->position}}</h5></center>



     <div class="resume_content">
       <div class="title">
         <p class="bold">CONTACT</p>
       </div>

       <ul>
         <li>
           <div class="data">
               {{$data->number}}
           </div>
             <div class="icon">
                 <i class="fa fa-phone"></i>
             </div>
         </li>

         <li>
             <div class="data">
                 {{$data->address}}
           </div>
             <div class="icon">
                 <i class="fa fa-map-marker"></i>
             </div>
         </li>
         <li>
           <div class="data">
               {{$data->email}}
           </div>
             <div class="icon">
                 <i class="fa fa-globe"></i>
             </div>
         </li>
       </ul>
     </div>
  </div>






  <div class="resume_right midline">
      <div class="">
      <div class=" resume_info">
          <div class="title">
              <p class="bold">About Me</p>
          </div>
          <p class="t">{{$data->biography}}</p>
      </div>
    <div class="resume_work">
        <div class="title_right">
           <p class="bold">EDUCATION</p>
         </div>
          <ul>
              @foreach($qualification as $q)
              <li>
                 <p class="place">({{$q->session}}){{$q->insitude}}</p>
                <div class="data degree"><p>{{$q->degree}}({{$q->marks}})</p>
                </div>
                  <p class="t">{{$q->Q_des}}</p>
            </li>
              @endforeach

          </ul>
  </div>


      <div class="resume_work">
          <div class="title_right">
              <p class="bold">EXPERIENCE</p>
          </div>
          <ul>
              @foreach($experience as $e)
              <li>
                      <p class="place">({{$e->join_date}} to {{$e->leave_date}}){{$e->posts}}</p>
                  <div class="data degree"><p>{{$e->companies}}</p>
                  </div>
              </li>
                  <p class="t">{{$e->E_des}}</p>
              @endforeach
          </ul>
      </div>



      <div class="resume_item resume_skills col-md-10">
          <div class="title">
              <p class="bold">Skills</p>
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
                      <div class="success-color"></div>
                      <span style="width: {{$s->skills_level}}%;"></span>
                  </div>
                  <div class="skill_per">{{$s->skills_level}}%</div>
              </li>
              @endforeach
          </ul>
      </div>

          <div class="resume_item resume_skills col-md-10">
              <div class="title">
                  <p class="bold">Languages</p>
              </div>
              <ul>
                  @foreach($languages as $l)
                      <li>
                          <div class="skill_name">
                              {{$l->languages}}
                          </div>
                      </li>
                      <li>
                          <div class="skill_progress">
                              <div class="success-color"></div>
                              <span style="width: {{$l->languages_level}}%;"></span>
                          </div>
                          <div class="skill_per">{{$l->languages_level}}%</div>
                      </li>
                  @endforeach
              </ul>


              <div class="resume_item resume_skills col-md-10">
              <div class="title">
                  <p class="bold">References</p>
              </div>
              <ul>
                  @foreach($reference as $r)
                      <li>
                          <div class="skill_name">
                              {{$r->references}}
                          </div>
                      </li>
                      <li>
                          <div>
                              {{$r->refphone}}                 <i class="fa fa-phone"></i>

                          </div>
                          <div>
                              {{$r->refaddress}}                 <i class="fa fa-globe"></i>

                          </div>

                      </li>
                  @endforeach
              </ul>
          </div>

      </div>


</div>
</div>

<!-- Optional JavaScript -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



</body>
</html>
