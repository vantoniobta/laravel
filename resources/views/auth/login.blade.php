@extends('layouts.app')

@section('content')

@include('sweet::alert')

<div class="container">
    <div class="row"><br>
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #1cbacc;color: #fff">Hola!</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6 col-md-offset-3" >
                                <label for="email" class="col-md-2 control-label">Usuario</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6 col-md-offset-3">
                             <label for="password" class="col-md-2 control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                 <button type="submit" class="social-button" style="background-color: #1cbacc;border-color: #fff">iniciar sesión</button>
                                <center>Conectar con </center>
                                     <a href="{{url('redirect/facebook')}}" class="social-button" id="facebook-connect" > <span>Facebook</span></a>
                                     <a href="{{url('redirect/twitter')}}" class="social-button" id="twitter-connect" > <span>Twitter</span></a>

                            </div>
                        </div>
                         <!--    <div class="col-md-6 col-md-offset-2">
                                   <button type="submit" class="social-button" style="background-color: #1cbacc;border-color: #fff">iniciar sesión</button>
                                   <center>Conectar con </center>
                                     <a href="{{url('redirect/facebook')}}" class="social-button" id="facebook-connect"> <span>Facebook</span></a>
                                     <a href="{{url('redirect/twitter')}}" class="social-button" id="twitter-connect"> <span>Twitter</span></a>
                            </div> -->
                         <a class="btn btn-link" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


                     <!--   <div class="container">
                            <div class="col-md-6">
                                   <button type="submit" class="social-button" style="background-color: #1cbacc;border-color: #fff">iniciar sesión</button>
                                   <center>Conectar con </center>
                                     <a href="{{url('redirect/facebook')}}" class="social-button" id="facebook-connect"> <span>Facebook</span></a>
                                     <a href="{{url('redirect/twitter')}}" class="social-button" id="twitter-connect"> <span>Twitter</span></a>
                            </div>
                        </div>


 -->

































   <footer class="footer-distributed">
      <div class="footer-left">
        <img src="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/test.png" class="img-responsive">

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Vacantes</a>
          ·
          <a href="#">Login</a>
          ·
          <a href="#">Registro</a>
        </p>
        <p class="footer-company-name">Multimedios Televisión &copy; 2018</p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Calle Paricutín 312, Roma, 64700 </span> Monterrey, N.L.</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+52 (81) 8880 4400</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">info@multimedios.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>Nosotros</span>
          Somos una empresa lider en cada uno de los negocios, estamos comprometidos con la mejora continua para satisfacer a nuestros clientes.
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer>



@endsection
