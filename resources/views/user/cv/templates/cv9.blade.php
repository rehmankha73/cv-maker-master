<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>CV-9</title>

    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 842px; margin: 0px auto 0px;padding-left:30px;padding-right:30px;}
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
        .img{width: 220px;
             height: 220px;
             border-radius: 50%;
             margin-left: 30px;
             margin-top: 30px;}
        .t{text-align:justify}
    </style>
</head>

<body>

<div id="page-wrap" style="border:1px solid black  ">

    <center><img class="img" src="{{url(str_replace('public', 'storage', $data->image))}}" alt="image" /></center>

    <div id="contact-info" class="vcard">

        <!-- Microformats! -->

        <h1 class="fn" style="padding-top:10px">{{$data->name}}</h1>

        <p>
            Cell: <span class="tel">{{$data->number}}</span><br />
            Email: {{$data->email}}
        </p>
    </div>

    <div id="objective">
        <p class="t">
            {{$data->biography}}
        </p>
    </div>

    <div class="clear"></div>

    <dl>
        <dd class="clear"></dd>

        <dt>Education</dt>
            <dd>
                @foreach($qualification as $q)
                <h2>{{$q->insitude}}</h2>
            <p><strong>{{$q->degree}}</strong> {{$q->marks}}<br />
                <strong>{{$q->session}}</strong><br>
                <p class="t">{{$q->Q_des}}</p>
            </p>
                @endforeach
            </dd>

        <dd class="clear"></dd>

        <dt>Skills</dt>
        <dd>
            @foreach($skills as $s)
            <span><b>{{$s->skills}}</b> &nbsp; &nbsp;<small>{{$s->skills_level}}%</small></span>
            @endforeach

        </dd>
        <dd class="clear"></dd>


        <dt>Experience</dt>
        <dd>
            @foreach($experience as $e)
            <h2>{{$e->posts}}<span>{{$e->companies}} <br>
                {{$e->join_date}} to {{$e->leave_date}}</span></h2>
                <p class="t">{{$e->E_des}}</p>
            @endforeach
        </dd>

        <dd class="clear"></dd>

        <dt>Hobbies</dt>
        <dd>
            @foreach($hobbies as $h)
            {{$h->hobbies}}
            @endforeach
        </dd>

        <dd class="clear"></dd>

        <dt>References</dt>
        <dd>
            @foreach($reference as $r)
            <b>{{$r->references}}</b><br>
                {{$r->refphone}}<br>
                {{$r->refaddress}}
            @endforeach
        </dd>

        <dd class="clear"></dd>
    </dl>

    <div class="clear"></div>

</div>

</body>

</html>
