<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/9b694f38b1.js"></script>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <script src="https://use.fontawesome.com/9b694f38b1.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">


    <link href="//fonts.googleapis.com/css?family=Anonymous Pro&subset=latin" rel="stylesheet" type="text/css">




    


</head>
<!-- menu responsivo -->
    <style>



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
            font-family: 'Poppins', sans-serif; 
            }

/*@media (min-width: 768px) {
  .navbar-nav > li > a {
    padding-top: 16.5px;
    padding-bottom: 16.5px;
    line-height: 17px;
  }
}*/

        nav div > ul > li > a {  font-size: 16px;line-height: 32px;padding: 0 16px;color: #fff}
        .navbar-brand { padding: 0px;}
        .navbar-brand>img { padding: 7px 10px; }
         nav ul li:hover { background-color: #00CED1;}
        .dropdown-toggle:active, .open .dropdown-toggle { background:#00CED1 !important; color:#000 !important;}
        .dropdown-menu {background-color: #FFFFFF;color: #red;}
        .dropdown-menu > li > a {color: #000}
        .dropdown-menu > li > a:hover,
        .dropdown-menu > li > a:focus {text-decoration: none;color: #000 !important;}


        #table_general {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #table_general td, #table_general th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #table_general tr:nth-child(even){background-color: #f2f2f2;}
        #table_general tr:hover {background-color: #ddd;}
        #table_general th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        #title_table1 {
            font-family: 'Lato', sans-serif;
            font-weight: bold;
            color: #009189;
        }
    </style>
<body style="background-color: #fafafa">
    <div id="app" >
        <nav class="navbar navbar-default navbar-static-top" style="margin:0;padding:0; background-color: #2E2E2E">
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
                    <a class="navbar-brand" href="{{ url('/admin') }}" style="color: #ffffff">
                        <img src="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/test.png" width="160px">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                          <li><a href="{{ url('/admin') }}" style="color: #fff"><i class="fas fa-list-alt"></i>&nbsp;Vacantes</a></li>
                          <li><a href="{{ url('admin/jobs_new') }}" style="color: #fff"><i class="fas fa-user-plus"></i>&nbsp;Agregar Vacante</a></li>
                          <li><a href="{{ url('/admin/users') }}" style="color: #fff"><i class="fas fa-users"></i>&nbsp;Users</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px; color: #fff"><i class="fab fa-dashcube"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-exclamation"></i>&nbsp;Logout</a>

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
    <script type="text/javascript">
        function miFuncion() {
          var v1 = document.getElementById("puesto").value;
          var v2 = v1.replace(/ /g, "-");
             document.getElementById("url").value = v2;
        }
    </script>
    </script>
</body>
</html>
