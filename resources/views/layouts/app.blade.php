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
    

    <link href="//fonts.googleapis.com/css?family=Anonymous Pro&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Armata&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Anton&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Archivo&subset=latin" rel="stylesheet" type="text/css">

    <style type="text/css">
        .social-button {
            background-position: 25px 0px;
            box-sizing: border-box;
            color: rgb(255, 255, 255);
            cursor: pointer;
            display: inline-block;
            height: 50px;
            line-height: 50px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: middle;
            width: 100%;
            border-radius: 3px;
            margin: 10px auto;
            outline: rgb(255, 255, 255) none 0px;
            transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
              -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        #facebook-connect {
            border: 1px solid rgb(60, 90, 154);
            background: rgb(60, 90, 154) url('https://eswarasai.com/projects/social-login/img/facebook-white.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;

        }

        #facebook-connect:hover {
              border-color: rgb(60, 90, 154);
              background: rgb(60, 90, 154) url('https://eswarasai.com/projects/social-login/img/facebook-white.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
              -webkit-transition: all .8s ease-out;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease-out;
        }

        #facebook-connect:hover span {
              color: #FFF;
              -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }


        #twitter-connect {
            background: rgb(85, 172, 238) url('https://eswarasai.com/projects/social-login/img/twitter-white.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
            border: 1px solid rgb(85, 172, 238);
        }

        #twitter-connect:hover {
              border-color: rgb(85, 172, 238);

              -webkit-transition: all .8s ease-out;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease-out;
        }

        #twitter-connect:hover span {
              color: #FFF;
              -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
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

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                          <li class="dropdown">
                             <a href="#" class="dropdown-toggle" style="color: #fff" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                               <i class="fas fa-users"></i>
                                &nbsp;Vacantes
                             </a>
                             <ul class="dropdown-menu" style="background-color: #98FB98;border-color: #98FB98">
                                 <li><a href="/vacantes_mty">Monterrey</a>
                                 <li><a href="/vacantes_cdmx">Ciudad de Mexico</a>
                                 </li>
                             </ul>

                          </li>

                           <!--  <li><a href="{{ url('/vacantes') }}" style="color: #fff">Vacantes&nbsp;<i class="fas fa-list-ul" ></i></a></li> -->
                            <li><a href="{{ route('register') }}" style="color: #fff"><i class="fa fa-user-plus"  aria-hidden="true"></i>&nbsp;Registro</a></li>
                            <li><a href="{{ route('login') }}" style="color: #fff"><i class="fas fa-sign-in-alt" ></i>&nbsp;Login</a></li>
                        @else
                        <li><a href="{{ url('/vacantes') }}" style="color: #fff">Vacantes&nbsp;<i class="fas fa-list-ul" ></i></a></li>
                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle" style="color: #fff" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-light" style="background-color: red">
                                3
                                </span>
                             </a>

                             <ul class="dropdown-menu" style="background-color: #98FB98;border-color: #98FB98">
                                @foreach(auth()->user()->unreadNotifications as $note)
                                 <li>
                                 <a href="">
                                     {!! $note->data['data'] !!}
                                     <?php $note->markAsRead() ?>
                                 </a>
                                 </li>
                                 @endforeach
                             </ul>

                          </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;color: #fff">
                                    <img src="http://localhost/laravel/public/uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" style="background-color: #24363e;">
                                 <li><a href="/home" style="color: #fff"><i class="fas fa-home" style="color: #c0eb75"></i>&nbsp;Inicio</a>
                                 <li><a href="{{ url('/profile') }}" style="color: #fff"><i class="fas fa-user-circle" style="color: #c0eb75"></i>&nbsp;Mi perfil</a>
                                 <!-- <li><a href="home">Postulaciones</a> -->
                                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #fff"><i class="fas fa-sign-out-alt" style="color: #c0eb75"></i>&nbsp;Logout</a>

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
     </div>
</body>
</html>
