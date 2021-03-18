<!DOCTYPE html>
<html>
<head>
    <title>CV-11</title>

    <meta name="viewport" content="width=device-width"/>
    <meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video {
            border:0;
            font:inherit;
            font-size:100%;
            margin:0;
            padding:0;
            vertical-align:baseline;
        }

        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
            display:block;
        }

        html, body {background: #181818; font-family: 'Lato', helvetica, arial, sans-serif; font-size: 16px; color: #222;}

        .clear {clear: both;}

        p {
            font-size: 1em;
            line-height: 1.4em;
            margin-bottom: 20px;
            color: #444;
        }

        #cv {
            width: 90%;
            max-width: 800px;
            background: #f3f3f3;
            margin: 30px auto;
        }

        .mainDetails {
            padding: 25px 35px;
            border-bottom: 2px solid #cf8a05;
            background: #ededed;
        }
        .t{text-align: justify}
        #name h1 {
            font-size: 2.5em;
            font-weight: 700;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            margin-bottom: -6px;
        }

        #name h2 {
            font-size: 2em;
            margin-left: 2px;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        }

        #mainArea {
            padding: 0 40px;
        }

        #headshot {
            width: 12.5%;
            float: left;
            margin-right: 30px;
        }

        #headshot img {
            width: 100%;
            height: auto;
            -webkit-border-radius: 50px;
            border-radius: 50px;
        }

        #name {
            float: left;
        }

        #contactDetails {
            float: right;
        }

        #contactDetails ul {
            list-style-type: none;
            font-size: 0.9em;
            margin-top: 2px;
        }

        #contactDetails ul li {
            margin-bottom: 3px;
            color: #444;
        }

        #contactDetails ul li a, a[href^=tel] {
            color: #444;
            text-decoration: none;
            -webkit-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            -ms-transition: all .3s ease-in;
            transition: all .3s ease-in;
        }

        #contactDetails ul li a:hover {
            color: #cf8a05;
        }


        section {
            border-top: 1px solid #dedede;
            padding: 20px 0 0;
        }

        section:first-child {
            border-top: 0;
        }

        section:last-child {
            padding: 20px 0 10px;
        }

        .sectionTitle {
            float: left;
            width: 25%;
        }

        .sectionContent {
            float: right;
            width: 72.5%;
        }

        .sectionTitle h1 {
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            font-style: italic;
            font-size: 1.5em;
            color: #cf8a05;
        }

        .sectionContent h2 {
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            font-size: 1.5em;
            margin-bottom: -2px;
        }

        .subDetails {
            font-size: 0.8em;
            font-style: italic;
            margin-bottom: 3px;
        }

        .keySkills {
            list-style-type: none;
            -moz-column-count:3;
            -webkit-column-count:3;
            column-count:3;
            margin-bottom: 20px;
            font-size: 1em;
            color: #444;
        }

        .keySkills ul li {
            margin-bottom: 3px;
        }

        @media all and (min-width: 602px) and (max-width: 800px) {
            #headshot {
                display: none;
            }

            .keySkills {
                -moz-column-count:2;
                -webkit-column-count:2;
                column-count:2;
            }
        }

        @media all and (max-width: 601px) {
            #cv {
                width: 95%;
                margin: 10px auto;
                min-width: 280px;
            }

            #headshot {
                display: none;
            }

            #name, #contactDetails {
                float: none;
                width: 100%;
                text-align: center;
            }

            .sectionTitle, .sectionContent {
                float: none;
                width: 100%;
            }

            .sectionTitle {
                margin-left: -2px;
                font-size: 1.25em;
            }

            .keySkills {
                -moz-column-count:2;
                -webkit-column-count:2;
                column-count:2;
            }
        }

        @media all and (max-width: 480px) {
            .mainDetails {
                padding: 15px 15px;
            }

            section {
                padding: 15px 0 0;
            }

            #mainArea {
                padding: 0 25px;
            }


            .keySkills {
                -moz-column-count:1;
                -webkit-column-count:1;
                column-count:1;
            }

            #name h1 {
                line-height: .8em;
                margin-bottom: 4px;
            }
        }

    </style>

</head>
<body id="top">
<div id="cv" class="instaFade">
    <div class="mainDetails">
        <div id="headshot" class="quickFade">
            <img src="{{url(str_replace('public', 'storage', $data->image))}}" alt="Alan Smith" />
        </div>

        <div id="name">
            <h1 class="quickFade delayTwo">{{$data->name}}</h1>
            <small>{{$data->fathername}}</small>
            <h2 class="quickFade delayThree">{{$data->position}}</h2>
        </div>

        <div id="contactDetails" class="quickFade delayFour">
            <ul>
                <li>email: {{$data->email}}</li>
                <li>add: {{$data->address}}</li>
                <li>no: {{$data->number}}</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

    <div id="mainArea" class="quickFade delayFive">
        <section>
            <article>
                <div class="sectionTitle">
                    <h1>Personal Profile</h1>
                </div>

                <div class="sectionContent">
                    <p class="t">{{$data->biography}}</p>
                </div>
            </article>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>Work Experience</h1>
            </div>

            <div class="sectionContent">
                @foreach($experience as $e)
                <article>
                    <h2>{{$e->posts}} at {{$e->companies}}</h2>
                    <p class="subDetails">{{$e->join_date}} to {{$e->leave_date}}</p>
                    <p class="t">{{$e->E_des}}</p>
                </article>
                @endforeach

            </div>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>Key Skills</h1>
            </div>

            <div class="sectionContent">
                <ul class="keySkills">
                    @foreach($skills as $s)
                        <li>{{$s->skills}} &nbsp; <b>{{$s->skills_level}}%</b></li>
                    @endforeach
                </ul>
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Hobbies</h1>
            </div>

            <div class="sectionContent">
                <ul class="keySkills">
                    @foreach($hobbies as $h)
                        <li>{{$h->hobbies}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>Education</h1>
            </div>

            <div class="sectionContent">
                @foreach($qualification as $q)
                <article>
                    <h2>{{$q->degree}}({{$q->marks}})</h2>
                    <p class="subDetails">{{$q->insitude}}-{{$q->session}}</p>
                    <p class="t">{{$q->Q_des}}</p>
                </article>
                @endforeach
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>References</h1>
            </div>

            <div class="sectionContent">
                @foreach($reference as $r)
                    <article>
                        <h2>{{$r->references}}</h2>
                        <p class="subDetails">{{$r->refphone}}</p>
                        <p>{{$r->refaddress}}</p>
                    </article>
                @endforeach
            </div>
            <div class="clear"></div>
        </section>

    </div>
</div>
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-3753241-1");
    pageTracker._initData();
    pageTracker._trackPageview();
</script>
</body>
</html>
