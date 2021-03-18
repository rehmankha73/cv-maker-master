<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <title>Design 10</title>
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
            width: 942px;
            height: auto;
            display: flex;
            margin: 50px auto;
        }

        .resume .resume_left{
            width: 342px;
            background: #343a40;
        }

        .resume .resume_left .resume_profile img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
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
            width: 600px;
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

        .resume .resume_right .bold {
            color: #1c252d;
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





        .resume .resume_right .resume_hobby ul {
            display: flex;
            justify-content: space-between;
        }

        .resume .resume_right .resume_hobby ul li {
            width: 80px;
            height: 80px;

            position: relative;
            color: #b3b3b3;
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

        }

        .resume .resume_right .resume_hobby ul li:last-child:before {
            display: none;
        }
    </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="photo/cvtemplates/p1.png" class="user">
     </div>
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
               21 Street, Texas <br /> USA
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa fa-map-marker"></i>
             </div>
             <div class="data">
               +324 4445678
             </div>
           </li>
           <li>
             <div class="icon">

               <i class="fa fa-envelope"></i>
             </div>
             <div class="data">
               stephen@gmail.com
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa fa-globe"></i>
             </div>
             <div class="data">
               www.stephen.com
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">PRO Skill's</p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
               PHOTOSHOP
             </div>
           </li>
           <li>
             <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per">80%</div>
           </li>
           <li>
             <div class="skill_name">
               ILLUSTRATOR
             </div>
           </li>
           <li>
             <div class="skill_progress">
               <span style="width: 70%;"></span>
             </div>
             <div class="skill_per">70%</div>
           </li>
           <li>
             <div class="skill_name">MS Word</div>
           </li>
           <li>
             <div class="skill_progress">
               <span style="width: 90%;"></span>
             </div>
             <div class="skill_per">90%</div>
           </li>
           <li>
             <div class="skill_name">
               MS EXCEL
             </div>
           </li>
           <li>
             <div class="skill_progress">
               <span style="width: 60%;"></span>
             </div>
             <div class="skill_per">60%</div>
           </li>
         </ul>
       </div>

       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fa fa-facebook-square" aria-hidden="true"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p>Stephen@facebook</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa fa-twitter"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p>Stephen@twitter</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <p>Stephen@youtube</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p>Stephen@linkedin</p>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>





  <div class="resume_right">
    <div class="resume_about">
        <div class="title">
           <h1 class="name">HENRY MADISON</h1>
         </div>
        <p id="work">ART DIRECTOR</p>
    </div>


    <div class="resume_work">
        <div class="title heading1 resume_item">
           <p class="bold">Work Experience</p>
         </div>
        <ul>

            <li class="row">
              <div class="date col-md-4"><b>2015 - 2018 <br> Vision Multitune.net</b></div>
                <div class="info col-md-8">
                     <p class="semi-bold">Senior Web Developer</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>

          <li class="row">
            <div class="date col-md-4"><b>2013 - 2015 <br> Soft Tech Limited</b></div>
            <div class="info col-md-8">
              <p class="semi-bold">Lead Wed Developer</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
            </div>
          </li>

          <li class="row">
            <div class="date col-md-4"><b>2011 - 2013 <br> Creative Corporation</b></div>
            <div class="info col-md-8">
              <p class="semi-bold">Web & Graphic Designer</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
            </div>
          </li>
        </ul>




    <div class=" resume_work">
      <div class="title heading resume_item">
        <p class="bold">Education</p>
      </div>
      <ul>

        <li class="row">
          <div class="date col-md-4"><b>2010 - 2015 <br> Asian University</b></div>
          <div class="info col-md-8">
            <p class="semi-bold">Bachelors of art</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
          </div>
        </li>

        <li class="row">
          <div class="date col-md-4"><b>2008 - 2010 <br> Creative School</b></div>
          <div class="info col-md-8">
            <p class="semi-bold">Higher Secondary Examination</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
          </div>
        </li>

        <li class="row">
          <div class="date col-md-4"><b>2006 - 2008 <br> Creative School</b></div>
          <div class="info col-md-8">
            <p class="semi-bold">higher secondary examination</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
          </div>
        </li>

        <li class="row">
          <div class="date col-md-4"><b>2004 - 2006 <br> Creative School</b></div>
          <div class="info col-md-8">
            <p class="semi-bold">higher secondary examination</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
          </div>
        </li>

      </ul>
    </div>


    <div class="resume_hobby">
      <div class="title heading resume_item">
           <p class="bold">Hobby</p>
         </div>
       <ul>
         <li><i class="fa fa-book"></i></li>
         <li><i class="fa fa-gamepad"></i></li>
         <li><i class="fa fa-music"></i></li>
         <li><i class="fa fa-camera"></i></li>
      </ul>
    </div>
  </div>
</div>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>




</body>
</html>
