
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="icon" href="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/32x32.png" /> -->

        <title>Golpe al Sistema</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Oswald&display=swap" rel="stylesheet">
        


        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">


        <!-- Styles -->
        
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            body{
               /* background: url(background-photo.jpg) center center cover no-repeat fixed;*/
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
                font-size: 12px;
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
                        <a href="{{ url('/home') }}" style="color: #fff">Home</a>
                    @else
                        <!-- <a href="{{ url('/vacantes') }}" style="color: #fff">Vacantes</a> -->
                       <!--  <a href="{{ route('login') }}" style="color: #fff">Login</a> -->
                       <!--  <a href="{{ route('register') }}" style="color: #fff">Register</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
             <div class="col-md-6"> 
                  <p style="font-family: 'Titan One', cursive; font-size: 57px;color: #4d665f">GOLPE AL SISTEMA</p>
             </div>
                <div class="links">
                    <a href="/nacional" style="color: #4d665f">Nacional</a>
                    <a href="/cdmx" style="color: #4d665f">Tendencia</a>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/loader.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    </body>
</html>
