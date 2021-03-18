
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CV Makers</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        @if ($errors->any())
            <div class="alert alert-danger text-left">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="title m-b-md">
            Welcome to cv makering
        </div>
        <a href="{{url('/templetes')}}" type="button" class="btn btn-primary btn-lg btn-block">Create your CV </a>
        @guest()
            <a href="{{url('/login')}}" type="button" class="btn btn-warning btn-lg btn-block">login </a>
            <a type="button"data-toggle="modal" data-target="#register" class="text-white btn btn-success btn-lg btn-block">Job Portal </a>
        @endguest
            <a href="{{url('/company')}}" class="text-white btn btn-danger btn-lg btn-block">Login As company acoount </a>
            <a href="{{url('/user')}}" class="text-white btn btn-info btn-lg btn-block">Login As User acoount </a>

    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<form action="{{url('/register')}}" method="POST">
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Free Sign Up!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center><a href="{{url('/loginpage')}}" style="color:#1d643b;font-family: 'Arial Black';font-size: 20px;">Already have account</a></center>
                    <h1 class="text-center text-black-50">OR</h1>
                    @csrf
                    <h5>Create a free signup account</h5>
                    <div class="px-4 py-2">
                        <div class="row">
                            <input class="col-md-5" type="text" name="firstname" placeholder="First Name" value="{{old('firstname')}}">
                            <div class="col-md-1"></div>
                            <input  class="col-md-6" type="text" name="sirname" placeholder="Sir Name" value="{{old('sirname')}}">
                            <input class="col-md-12 my-2" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                            <input class="col-md-12 my-2" type="password" name="password" placeholder="password">
                            <div class="col-md-12">
                                <span>Login As a <span class="text-danger">*</span></span>
                                <input type="radio" name="type" value="2" {{old('type') == 2 ? 'checked' : '' }}>
                                <label for="user">User</label>
                                <input type="radio" name="type" value="3" {{old('type') == 3 ? 'checked' : '' }}>
                                <label for="company">Company</label>
                            </div>
                            <label>Birthday</label>
                            <input class="col-md-12 my-2" name="date" type="date" value="{{old('date')}}">
                            <div class="col-md-12">
                                <span>Please select your gender:</span>
                                <input type="radio" class="mx-1" name="gender" value="male"><label class="ml-1" for="male" {{old('gender') == "male" ? 'checked' : '' }}>Male</label>
                                <input type="radio" class="mx-1" name="gender" value="female"><label class="ml-1" for="female" {{old('gender') == "female" ? 'checked' : '' }}>Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-success">Register</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
</html>
