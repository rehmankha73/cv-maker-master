<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8">
    <meta charset="utf-8">

    <title>CV-12</title>

    <!-- Meta -->
    <meta name="description" content="A few lines about yourself">
    <meta name="keywords" content="web,developer,designer,resume" />
    <meta name="author" content="Your Name">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
        /* Default Styles
       --------------------------------------------------- */

        body {
            background: #585c68;
            margin: 0px;
            padding: 0px;
            background: url("../images/bg_dark_green.png");
            background-color: inherit;
            font-size: 16px;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            color: #000;
        }
        .t{text-align: justify}
        a:link {
            text-decoration: underline;
            color: #000;
            font-weight: bold;
        }

        a:visited {
            text-decoration: underline;
            color: #000;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #669933;
            font-weight: bold;
        }

        a:active {
            text-decoration: underline;
            color: #000;
            font-weight: bold;
        }

        #wrapper    {
            width: 842px;
            margin: 0 auto;
        }

        #content {
            background-color: #eee;
            width: 842px;
            text-align: left;
            overflow: auto;
            position: relative;
            margin: 25px 0px 25px 0px;
            border: #fff solid 2px;
        }

        .clear  {
            float: none;
            clear: both;
            margin: 20px 0px 20px 0px;
        }


        /* Header
        --------------------------------------------------- */


        #contact-details .header_1 {
            float: left;
            width: 350px;
            text-align: center;
            margin: 40px 0px 0px 20px;
        }

        #contact-details .header_1 img {
            border: #fff solid 4px;
            background: url("../images/bg_img_dark_green.png");
            padding: 16px;
            margin: 10px 0px 0px 0px;
        }

        #contact-details .header_2 {
            float: left;
            width: 570px;
            margin: 40px 0px 0px 10px;
        }

        #contact-details .header_2 a {
            font-weight: normal;
        }

        #contact-details  h1    {
            margin: 0px 0px 0px 20px;
            font-size: 52px;
            font-weight: bold;
        }

        #contact-details  h3    {
            margin: 0px 0px 32px 20px;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
        }

        #contact-details ul.info_1  {
            list-style: none;
            margin: 0px 0px 0px -12px;
            font-size: 18px;
        }

        #contact-details ul.info_2  {
            list-style: none;
            margin: 0px 0px 15px -12px;
            font-size: 18px;
        }

        #contact-details li.address {
            background: url("../images/home.png") no-repeat;
            background-position: 0px 0px;
            padding: 0px 0px 12px 40px;
        }

        #contact-details li.phone   {
            background: url("../images/phone.png") no-repeat;
            background-position: 0px 0px;
            padding: 0px 0px 12px 40px;
        }

        #contact-details li.email   {
            background: url("../images/mail.png") no-repeat;
            background-position: 0px 0px;
            padding: 0px 0px 12px 40px;
        }

        #contact-details li.site_url    {
            background: url("../images/computer.png") no-repeat;
            background-position: 0px 2px;
            padding: 0px 0px 12px 40px;
        }

        #contact-details li.twitter {
            background: url("../images/twitter_sm.png") no-repeat;
            background-position: 0px 0px;
            padding: 0px 0px 12px 40px;
        }



        /* Main Content
        --------------------------------------------------- */

        h2.top  {
            margin: 0px;
            font-size: 22px;
            font-weight: bold;
        }

        h2  {
            margin: 40px 0px 0px 0px;
            font-size: 22px;
            font-weight: bold;
        }


        dl  {
            margin: 0px 50px 0px 0px;
        }


        dt  {
            float: left;
            width: 200px;
            font-size: 20px;
            font-weight: bold;
            font-style: italic;
            text-align: right;
        }

        dd  {
            width: 620px;
            float: right;
            margin-right: 20px;
        }

        dl#contact  {
            margin: 0px;
        }

        dt#contact  {
            margin: 0px;
        }

        dd#contact  {
            margin: 0px;
        }

        p.bus1  {
            margin: 0px;
            font-weight: bold;
            color: #669933;
        }

        p.edu-info  {
            margin: 10px 0px 0px 0px;
            font-weight: bold;
            color: #669933;
        }

        p.edu-info a    {
            color: #000;
        }

        p.edu-info a:hover  {
            color: #669933;
        }

        p.time  {
            margin: 0px;
        }

        p.summary   {
            margin: 10px 0px 0px 0px;
        }


        #skills ul.list1    {
            float: left;
            list-style: none;
            margin: 0px 0px 0px -40px;
            width: 220px;
        }

        #skills ul.list2    {
            float: left;
            list-style: none;
            margin: 0px 0px 0px 0px;
            width: 220px;
        }

        #skills li {
            background: url("../images/bullet_green.png") no-repeat;
            background-position: 0px 2px;
            padding: 0px 0px 0px 25px;
        }

        abbr    {
            border-width: 0px;
        }


        /* Footer
        --------------------------------------------------- */

        #footer {
            margin: 60px 40px 0px 40px;
        }

        #footer img {
            border: 0px;
        }

        #footer .footer_content {
            width: 700px;
            overflow: auto;
            margin: auto;
            border: #fff solid 2px;
            background-color: #dcdcdc;
        }

        #footer ul.icons_1  {
            float: left;
            width: 525px;
            margin: 15px 10px 10px 15px;
            padding: 0px;
        }

        #footer ul.icons_2  {
            float: right;
            width: 100px;
            margin: 10px 20px 10px 10px;
            padding: 0px;
        }

        #footer .icons_1 li, #footer .icons_2 li {
            margin: 0px 0px 0px 7px;
            padding: 0px;
            list-style-type: none;
            display: inline;
        }

        #footer a   {
            color: #000;
        }

        #footer a:hover {
            color: #669933;
        }

        #footer .credits {
            float: none;
            clear: both;
            margin: 10px 0px 20px 0px;
            font-size: 12px;
            text-align: center;
        }

        #footer .credits a  {
            font-weight: normal;
        }
    </style>
</head>
<body>

<!-- Begin Wrapper -->
<div id="wrapper" style="border:1px solid black">

    <!-- Begin Content Area -->
    <div id="content">

        <!-- Begin Header -->
        <header>

            <!-- Begin Contact Section -->
            <section id="contact-details">

                <!-- Begin Profile Image Section -->
                <div class="header_1">
                    <img src="{{url(str_replace('public', 'storage', $data->image))}}" width="250" height="250" alt="Your Name" />
                </div>
                <!-- End Profile Image Section -->

                <!-- Begin Profile Information Section -->
                <div class="header_2">

                    <h1><span>{{$data->name}}</span></h1>
                    <h3>{{$data->fathername}}</h3>

                    <ul class="info_1">
                        <li class="address">{{$data->address}}</li>
                    </ul>

                    <ul class="info_2">
                        <li class="phone">{{$data->number}}</li>
                        <li class="email">{{$data->email}}</li>
                    </ul>

                </div>
                <!-- End Profile Information Section -->

            </section>
            <!-- End Contact Section -->

        </header>
        <!-- End Header -->

        <div class="clear">&nbsp;</div>

        <!-- Begin Profile Section -->
        <dl>
            <dt>Profile:</dt>
            <dd>

                <section class="summary t">
                    {{$data->biography}}
                </section>

            </dd>
        </dl>
        <!-- End Profile Section -->

        <div class="clear">&nbsp;</div>

        <!-- Begin Skills Section -->

        <dl>
            <dt>Skills:</dt>
            <dd>

                <section id="skills">
                    <ul class="list1">
                       @foreach($skills as $s)
                        <li>{{$s->skills}} <b>{{$s->skills_level}}%</b></li>
                       @endforeach
                    </ul>
                </section>

            </dd>
        </dl>

        <!-- End Skills Section -->

        <div class="clear">&nbsp;</div>

        <!-- Begin Experience Section -->
        <dl>
            <dt>Experience:</dt>

            <dd>

                <section id="experience">

                    <!-- Position #1 -->
                    @foreach($experience as $e)
                    <h2 class="top">{{$e->posts}}</h2>
                    <p class="bus1">{{$e->companies}}</p>
                    <p class="time">{{$e->join_date}} &#45; {{$e->leave_date}}</p>

                    <p class="t">
                        {{$e->E_des}}
                    </p>
                    @endforeach


                </section>

            </dd>
        </dl>
        <!-- End Experience Section -->

        <div class="clear">&nbsp;</div>

        <div class="clear">&nbsp;</div>

        <!-- Begin Education Section -->
        <dl>
            <dt>Education:</dt>
            <dd>

                <section id="education">
                    @foreach($qualification as $q)
                    <p class="bus1">{{$q->insitude}}</p>

                    {{$q->degree}}({{$q->marks}})
                    <br />
                    {{$q->session}}

                    <p class="summary t">{{$q->Q_des}}</p>

                    @endforeach
                </section>

            </dd>
        </dl>
        <!-- End Education Section -->

        <div class="clear">&nbsp;</div>

        <dl>
            <dt>Reference:</dt>
            <dd>

                <section id="education">
                    @foreach($reference as $r)
                        <p class="bus1">{{$r->references}}</p>
                        <br />
                        {{$r->refphone}}

                        <p class="summary">{{$r->refaddress}}</p>

                    @endforeach
                </section>

            </dd>
        </dl>
    </div>
    <!-- End Content -->

</div>
<!-- End Wrapper -->

</body>
</html>
