<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:600" rel="stylesheet">
    <script src="https://use.fontawesome.com/9b694f38b1.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- menu responsivo -->
<style type="text/css">
      nav.navbar {
            margin: 0; 
            padding: 5px; 
            list-style-type: none; 
            text-align: center; 
            background-color: #24363e; 
            border:0px solid #24363e;
            padding: .5em 2px;
            margin:0;
            padding:0;
        }
        nav div > ul > li > a { 

          font-size: 16px;
          line-height: 32px;
          padding: 0 16px;
          color: #fff
        }
        .navbar-brand {
            padding: 0px;

        }
        .navbar-brand>img {
            padding: 7px 10px;

        }
        
        nav ul li:hover {
            background-color: #00CED1;
        }

        .dropdown-toggle:active, .open .dropdown-toggle {
            background:#00CED1 !important; 
            color:#000 !important;
        }
       .dropdown-menu {
         background-color: #FFFFFF;
         color: #red;
        }
        .dropdown-menu > li > a {
        color: #000
        }
        .dropdown-menu > li > a:hover,
        .dropdown-menu > li > a:focus {
         text-decoration: none;
         color: #000 !important;
        }








</style>
<body style="background-color: #ffffff">
    <div id="app" style="background-color: #f4f4f4:">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="background-color: #00CED1;">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                        <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                        <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                         <img src="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/test.png" width="160px">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

               <!--      <ul class="nav navbar-nav">
                    <form class="navbar-form navbar-right" style="">
                      <input type="text" class="form-control" placeholder="Search..." style="border:none">
                    </form>
                        
                    </ul>
 -->


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ url('/vacantes') }}" style="color: #fff">Vacantes</a></li>
                            <li><a href="{{ route('register') }}" style="color: #fff">Registro&nbsp;&nbsp;<i class="fa fa-user-plus fa-1x" aria-hidden="true"></i></a></li>
                            <li><a href="{{ route('login') }}" style="color: #fff">Login&nbsp;&nbsp;<i class="fa fa-sign-in fa-1x" aria-hidden="true"></i></a></li>
<!--                             <li><a href="https://www.facebook.com/multimediostv"><i class="fa fa-facebook-official fa-lg" aria-hidden="true" style="color: #000"></i></a></li>
                            <li><a href="https://twitter.com/multimediostv"><i class="fa fa-twitter fa-lg" aria-hidden="true" style="color: #000"></i></a></li>
                            <li><a href="https://www.instagram.com/multimediostv/"><i class="fa fa-instagram fa-lg" aria-hidden="true" style="color: #000"></i></a></li> -->
                        @else
                        <li><a href="{{ url('/vacantes') }}" style="color: #fff">Vacantes</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;color: #fff">
                                    <img src="uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Inicio</a>
                                 <li><a href="{{ url('/profile') }}">Mi perfil</a>
                                 <!-- <li><a href="home">Postulaciones</a> -->
                                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
