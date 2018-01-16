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
    <script src="https://use.fontawesome.com/9b694f38b1.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- menu responsivo -->
<style type="text/css">
    .share-social {}
    .share-social ul {}
    .share-social ul li {display: inline;list-style-type: none;padding-right: 20px;}
    

    nav ul li:hover {background-color: #2E8B57;}

    
   /* .navbar-toggle {
       margin: 23px 0; 
    }

    .navbar-nav, .navbar-nav li, .navbar-nav li a {
      height: 64px;
      line-height: 64px;
    }*/
</style>
<body>
    <div id="app" style="background-color: #f4f4f4:">
        <nav class="navbar navbar-default navbar-static-top" style="margin:0;padding:0; background-color: #24363e;border-color: #24363e;">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="background-color: #2E8B57;">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                        <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                        <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="color: #ffffff">
                         <i class="fa fa-dashcube fa-lg fa-rotate-270" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <ul class="nav navbar-nav">
                    <!-- <form class="navbar-form navbar-right" style="">
                      <input type="text" class="form-control" placeholder="Search..." style="border:none">
                    </form> -->
                          <li><a href="{{ url('/vacantes') }}" style="color: #fff">Vacantes</a></li>
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" style="color: #fff">Login&nbsp;&nbsp;<i class="fa fa-sign-in fa-1x" aria-hidden="true"></i></a></li>
                            <li><a href="{{ route('register') }}" style="color: #fff">Registro&nbsp;&nbsp;<i class="fa fa-user-plus fa-1x" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/multimediostv"><i class="fa fa-facebook-official fa-lg" aria-hidden="true" style="color: #fff"></i></a></li>
                            <li><a href="https://twitter.com/multimediostv"><i class="fa fa-twitter fa-lg" aria-hidden="true" style="color: #fff"></i></a></li>
                            <li><a href="https://www.instagram.com/multimediostv/"><i class="fa fa-instagram fa-lg" aria-hidden="true" style="color: #fff"></i></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;color: #ffffff">
                                    <img src="uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
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
