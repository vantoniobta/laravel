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
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Candal|Concert+One|Francois+One|Fredoka+One|Lilita+One|Passion+One|Patua+One" rel="stylesheet">
    <script src="https://use.fontawesome.com/9b694f38b1.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- menu responsivo -->
<style type="text/css">





    nav ul li:hover {
      background: #a0c41c;
    }



   /* .navbar-toggle {
       margin: 23px 0; 
    }

    .navbar-nav, .navbar-nav li, .navbar-nav li a {
      height: 64px;
      line-height: 64px;
    }*/
</style>
<body>
    <div id="app" >
        <nav class="navbar navbar-default navbar-static-top" style="margin:0;padding:0; background-color: #413f3f;border-color: #413f3f;">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        LogoRH
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <ul class="nav navbar-nav">
                    <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
                          <li><a href="{{ url('/vacantes') }}" style="color: #fff">Vacantes</a></li>
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" style="color: #fff">Login&nbsp;&nbsp;<i class="fa fa-sign-in fa-1x" aria-hidden="true"></i></a></li>
                            <li><a href="{{ route('register') }}" style="color: #fff">Register&nbsp;&nbsp;<i class="fa fa-user-plus fa-1x" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook-official fa-1x" aria-hidden="true" style="color: #fff"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter fa-1x" aria-hidden="true" style="color: #fff"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram fa-1x" aria-hidden="true" style="color: #fff"></i></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;">
                                    <img src="uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                 <li><a href="{{ url('/profile') }}">Mi perfil</a>
                                 <li><a href="home">Postulaciones</a>
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
