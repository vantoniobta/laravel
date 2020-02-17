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
                   <!--  <a class="navbar-brand" href="{{ url('/admin') }}" style="color: #ffffff">
                        <img src="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/test.png" width="160px">
                       
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                          <li><a href="{{ url('/admin') }}" style="color: #fff"><i class="fas fa-list-alt"></i> Articulos</a></li>
                          <li><a href="{{ url('admin/article_new') }}" style="color: #fff"><i class="fa fa-book" aria-hidden="true"></i> Articulo Nuevo</a></li>
                          <li><a href="" style="color: #fff"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Secciones</a></li>
                          <li><a href="{{ url('/admin/users') }}" style="color: #fff"><i class="fas fa-users"></i> Usuarios</a></li>
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
       
        function url_article() {
          var v1 = document.getElementById("title").value;
          var v2 = normalize(v1);
         // var v2 = v1.replace(/ /g, "-");

             document.getElementById("url").value = v2;
        }


        var normalize = (function() {
              var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç", 
                  to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
                  mapping = {};
             
              for(var i = 0, j = from.length; i < j; i++ )
                  mapping[ from.charAt( i ) ] = to.charAt( i );
             
              return function( str ) {
                  var ret = [];
                  for( var i = 0, j = str.length; i < j; i++ ) {
                      var c = str.charAt( i );
                      if( mapping.hasOwnProperty( str.charAt( i ) ) )
                          ret.push( mapping[ c ] );
                      else
                          ret.push( c );
                  }      
                  return ret.join( '' ).replace( /[^-A-Za-z0-9]+/g, '-' ).toLowerCase();
              }
         
        })();











    </script>
    </script>
</body>
</html>
