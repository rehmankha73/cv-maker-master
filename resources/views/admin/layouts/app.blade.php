<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CVMaker') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="{{URL('design-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('design-assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <style>
        body{background-color: #fff0ff;}
        .sidebar{
            background:#2a9055;
        }
        h1{
            color: #2a9055;
            font-weight: 800;
            margin-top:20px;
        }
        label{
            color: #2a9055;
            font-weight: 600;
        }
        #wrapper span{
            color:white!important;
        }#wrapper i{
            color:yellow!important;
            text-shadow: 1px 1px black;
        }
    </style>
    @yield("styles")
</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <span class="text-left"><a class="navbar-brand" href="#"><img src="/images/main/logo.png" height="50px" width="50px" alt="logo"></a></span><h4 class="text-white">Professional CV Makers</h4>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
    {{--            <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">--}}
    {{--                <a class="nav-link" href="{{url('admin')}}">Home</a>--}}
    {{--            </li>--}}
            @auth('admin')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.logout')}}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth

            @guest('admin')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/login') ? 'active' : '' }}" href="{{route('admin.login')}}">Login</a>
                </li>
            @endguest
        </ul>
    </div>
    </div>
</nav>

{{--<div id="app" class="container my-5">--}}

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin Panel</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - User Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link " href="{{route('admin.users.index')}}" >
                <i class="fas fa-user"></i>
                <span>Users</span>
            </a>
        </li>

        <!-- Nav Item - Companies Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.companies.index')}}">
                <i class="fas fa-briefcase"></i>
                <span>Companies</span>
            </a>
        </li>

        <!-- Nav Item - Post Collapse Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiestwo" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-clipboard"></i>
                <span>Posts</span>
            </a>
            <div id="collapseUtilitiestwo" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.posts.create')}}">Add Job Post</a>
                    <a class="collapse-item" href="{{route('admin.posts.index')}}">Manage Post</a>
                </div>
            </div>
        </li>


        <!-- Nav Item - Testimonials Collapse Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesthree" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-star"></i>
                <span>Testimonials</span>
            </a>
            <div id="collapseUtilitiesthree" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.testimonials.index')}}">Users Testimonials</a>
                    <a class="collapse-item" href="{{route('admin.ctestimonials.index')}}">Companies Testimonials</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Requests Collapse Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesfour" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-comment-dots"></i>
                <span>Complains</span>
            </a>
            <div id="collapseUtilitiesfour" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.contact.index')}}">User Complains</a>
                    <a class="collapse-item" href="{{route('admin.companycontact.index')}}">Companies Complains</a>

                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Setting Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Settings</span>
            </a>
            <div id="collapseSetting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="{{route('admin.settings.show',[1])}}">Change Password</a>
                    <a class="collapse-item" href="{{route('admin.settings.create')}}">Add new Admin</a>
                    <a class="collapse-item" href="{{route('admin.settings.index')}}">Remove Admin</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <div class="container-fluid">
        @yield('content')
    </div>
{{--</div>--}}





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript">
        console.log('test');
        $("#add-skill").click(function(){
            var html = $("#s-copy").html();
            $('#s').append(html);
        });

        $("body").on("click",".remove-row",function(){
            $(this).parent().parent().remove();
        });
    </script>

    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- Bootstrap core JavaScript-->
<script src="{{url('design-assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('design-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url('design-assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('design-assets/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{url('design-assets/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{url('design-assets/js/demo/chart-area-demo.js')}}"></script>
<script src="{{url('design-assets/js/demo/chart-pie-demo.js')}}"></script>

@yield("scripts")
</body>
</html>
