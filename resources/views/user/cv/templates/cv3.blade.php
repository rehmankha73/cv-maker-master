<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <title>CV-3</title>
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;

    }

    body {
    font-size: 16px;
    color: #343a40;
    }

    .bold {
    font-weight: 700;
    font-size: 20px;
    text-transform: uppercase;
    }


    .resume{
    width: 842px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    }
    .resume .resume_profile{
    width: 100%;
    }
    .resume .resume_profile img{
    width: 220px;
    height: 220px;
    border-radius: 50%;
    margin-left: 30px;
    margin-top: 30px;
    }

    .resume #name{
    text-transform: uppercase;
    font-weight: 100;
    font-size: 50px;
    padding-left: 30px;
    padding-top: 90px;
    }

    .resume #profession{
    text-transform: uppercase;
    font-weight: 100;
    font-size: 20px;
    padding-left: 60px;
    padding-top: 0px;
    color: #d3190d;
    }

    .resume .resume_item{
    margin-top: 30px;
    border-bottom: 2px solid #f23a2e;
    }


    .resume .resume_item:last-child,
    .resume .resume_item:last-child {
    border-bottom: 0px;
    }
    .midline{
    border-left: 2px solid #b3b3b3;
    padding-left: 40px;
    }


    .resume ul li {
    display: flex;
    margin-bottom: 10px;
    align-items: center;
    }
    .resume ul li:last-child {
    margin-bottom: 0;
    }


    .resume ul li .icon {
    width: 35px;
    height: 35px;
    color: #b3b3b3;
    border-radius: 50%;
    margin-right: 15px;
    font-size: 16px;
    position: relative;
    }



    .resume .icon i,
    .resume .resume_right .resume_hobby ul li i {
    position: absolute;
    color: #d3190d;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    .resume ul li .data {
    color: #b3b3b3;
    }

    .resume .resume_skills ul li {
    display: flex;
    margin-bottom: 10px;
    color: #b3b3b3;
    justify-content: space-between;
    align-items: center;
    }

    .resume .resume_left .resume_skills ul li .skill_name {
    width: 100%;
    }

    .row3 .degree{
    margin-bottom: 0;
    font-size: 18px;
    font-style: italic;
    }
    .row3 .col-md-6 u{
    text-decoration: #d3190d underline;
    }

    .row3 .resume_info .place{
    margin-bottom: 0;
    text-transform: uppercase;
    font-size: 18px;
    font-style: normal;
    }
    .row3 .resume_info ul .from{
    color: #d3190d;
    margin-top:0 ;
    margin-bottom: 0;
    }
    .resume .row4 .col-md-6 .resume_info ul li::before{
    content: "\2022";
    color: #d3190d;
    font-weight: bold;
    display: inline-block;
    margin-right: 1rem;
    margin-left: -1rem;
    }


    .resume .row4 .resume_skills ul li .skill_progress {
    width: 60%;
    margin: 0 5px;
    height: 5px;
    background: #9e9e9e;
    position: relative;
    }
    .resume .resume_skills ul li .skill_per {
    width: 15%;
    }

    .resume .resume_skills ul li .skill_progress span {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: #d3190d;
    }
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="cv12.css">

</head>
<body>

<div class="resume" style="border:1px solid black;padding:10px 20px 10px 30px">
<div class="row resume_profile">
	<div class="col-md-4">
		<img src="{{url(str_replace('public', 'storage', $data->image))}}">
	</div>
	<div class="col-md-8">
		<p id="name">{{$data->name}}</p>
		<p id="profession">{{$data->position}}</p>
	</div>
</div>


	<div class="row resume_item row3">
		<div class="col-md-6">
			<div class="resume_info">
				<div class="title">
					<p class="bold"><u>C</u>ontact Me</p>
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
							{{$data->address}}
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

		</div>



		<div class="col-md-6">
			<div class="resume_info midline">
			<div class="title">
				<p class="bold"><u>P</u>rofile Summary</p>
				<p class="text-justify">{{$data->biography}}</p>
			</div>
		</div>
		</div>

	</div>




	<div class="row resume_item row3">
		<div class="col-md-6">
			<div class="resume_info">
				<div class="title">
					<p class="bold"><u>E</u>ducation</p>
				</div>
				<ul>
                    @foreach($qualification as $q)
					<li>
						<div class="data degree"><p>{{$q->degree}}({{$q->marks}}/{{$q->total}})</p>
							<p class="place">{{$q->insitude}}</p>
							<p class="from">{{$q->session}}</p>
						</div>
					</li>
					<p class="text-justify">{{$q->Q_des}}</p>
                        @endforeach
                </ul>
			</div>
		</div>


		<div class="col-md-6">
			<div class="resume_info midline">
				<div class="title">
					<p class="bold"><u>W</u>ork Experience</p>
				</div>

				<ul>
                    @foreach($experience as $e)
					<li>
						<div class="data degree"><p>{{$e->companies}}</p>
							<p class="place">{{$e->posts}}</p>
							<p class="from">{{$e->join_date}} to {{$e->leave_date}}</p>
						</div>
					</li>
					<p>{{$e->E_des}}</p>
                        @endforeach
				</ul>

			</div>
		</div>

	</div>


		<div class="row resume_item row4">
			<div class="col-md-6 resume_skills">
				<div class="resume_info">
					<div class="title">
						<p class="bold">Skills</p>
					</div>
					<ul>
                    @foreach($skills as $s)
					<li>
						<div class="skill_name">
							{{$s->skills}}
						</div>
						<div class="skill_progress">
							<span style="width: {{$s->skills_level}}%;"></span>
						</div>
						<div class="skill_per">{{$s->skills_level}}%</div>
					</li>
                    @endforeach
					</ul>
				</div>
            </div>

			<div class="col-md-6 resume_skills">
				<div class="resume_info midline">
                    <div class="resume_info">
					<div class="title">
						<p class="bold">LANGUAGE</p>
					</div>
					<ul>
                        @foreach($languages as $l)
                            <li>
                                <div class="skill_name">
                                    {{$l->languages}}
                                </div>
                                <div class="skill_progress">
                                    <span style="width: {{$l->languages_level}}%;"></span>
                                </div>&nbsp;
                                <div class="skill_per">{{$l->languages_level}}%</div>
                            </li>
                        @endforeach
					</ul>
				</div>
			</div>
        </div>

</div>

    <div class="row resume_item row4">
        <div class="col-md-6 resume_skills">
            <div class="resume_info">
                <div class="title">
                    <p class="bold">REFERENCES</p>
                </div>
                    @foreach($reference as $r)
                            <div style="color:red">{{$r->references}}</div><br>
                            <div style="color:black">{{$r->refphone}}</div><br>
                            <div style="color:black">{{$r->refaddress}}</div>
                    @endforeach
            </div>
        </div>

        <div class="col-md-6 resume_skills"></div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



</body>
</html>
