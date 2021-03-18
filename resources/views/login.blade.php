<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{url('login.css')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Log in</title>
    <style>
        @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image:url("../images/loginbg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .login-box{
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            color :white;

            /*--backdrop--*/
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            top: 50%;
            left: 50%;
            width: 33%;
            padding: 20px;

        }
        .login-box h1{
            float: left;
            font-size: 40px;
            border-bottom: 6px solid #1d643b;
            margin-bottom: 50px;
            padding: 13px 0;
            text-shadow: black;
        }
        .textbox{
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #1d643b;
        }
        .textbox i{
            width: 20px;
            float: left;
            text-align: center;
        }
        .textbox input{
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 18px;
            width: 80%;
            float: left;
            margin:0 10px;
        }
        .b{
            width: 100%;
            background: none;
            border: 1px solid #0f96c5;
            color: white;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }
        .su{
            border: 1px #0f96c5;
            background: none;
            color: white;
            cursor: pointer;
            border-radius: 25px;
        }
        h1{
            border-bottom:1px solid #1d643b;
        }
    </style>
</head>
<body>
<div class="login-box">
    <h1>Welcome to CV Maker!</h1>
    <form action="{{url('/jobportal')}}" method="POST">
        @csrf
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true" ></i>
        <input class="t ext-white" type="text" placeholder="Please Enter Username/Number" name="username" value="">
    </div>
    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input class="text-white" type="password" placeholder="Please Enter Password" name="password" value="">
    </div>
        <div>
            <span>Login As a <span class="text-danger">*</span></span>
            <input type="radio" id="admin" name="type" value="1">
            <label for="admin">Admin</label>
            <input type="radio" id="user" name="type" value="2">
            <label for="user">User</label>
            <input type="radio" id="company" name="type" value="3">
            <label for="company">Company</label>
        </div>
    <button class="su mt-3 btn btn-block test-white btn-outline-success" type="submit">LOGIN</button>
    </form>
{{--    <input class="su mt-3" type="button" name="" value="Sign Up">--}}

</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
