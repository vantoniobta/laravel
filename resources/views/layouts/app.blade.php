<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/32x32.png" />
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:600" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700'>
    <link href='https://fonts.googleapis.com/css?family=Croissant+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/9b694f38b1.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Poppins&subset=latin" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    

    <link href="//fonts.googleapis.com/css?family=Armata&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Anton&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Archivo&subset=latin" rel="stylesheet" type="text/css">


    <style type="text/css">
  .swal-overlay {
  background-color: rgba(43, 165, 137, 0.45);
}
</style>


</head>
<!-- menu responsivo -->
<body style="background-color: #fafafa">
    <div id="app" style="background-color: #f4f4f4:">
        <nav class="navbar navbar-default navbar-static-top" style="box-shadow: 0 3px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);transition: all 0.3s cubic-bezier(.25,.8,.25,1);">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="background-color: #EFD44D;">
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

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                             <li><a href="/vacantes_mty" style="color: #fff">Monterrey</a></li>
                             <li><a href="/vacantes_cdmx" style="color: #fff">CDMX</a></li>
                            <li><a href="{{ route('register') }}" style="color: #fff"><i class="fa fa-user-plus"  aria-hidden="true"></i>&nbsp;Registro</a></li>
                            <li><a href="{{ route('login') }}" style="color: #fff"><i class="fas fa-sign-in-alt" ></i>&nbsp;Login</a></li>
                        @else
                             <li><a href="/vacantes_mty" style="color: #fff">Monterrey</a></li>
                             <li><a href="/vacantes_cdmx" style="color: #fff">CDMX</a></li>
                       
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;color: #fff">
                                    <img src="http://localhost/laravel/public/uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" style="background-color: #eeeeee;">
                                 <li><a href="/home" style="color: #000"><i class="fas fa-home" style="color: #000"></i>&nbsp;Inicio</a>
                                 <li><a href="{{ url('/profile') }}" style="color: #000"><i class="fas fa-user-circle" style="color: #000"></i>&nbsp;Mi perfil</a>
                                 <!-- <li><a href="home">Postulaciones</a> -->
                                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #000"><i class="fas fa-sign-out-alt" style="color: #000"></i>&nbsp;Logout</a>

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
     <script src="{{ asset('js/loader.js') }}"></script>
         <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{ asset('js/share.js') }}"></script>
     </div>
</body>
</html>
