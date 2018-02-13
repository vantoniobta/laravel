@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #1cbacc;color: #fff">Hola!</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   <!--      <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                               <!--  <button type="submit" class="social-button" style="background-color: #1cbacc;border-color: #fff">
                                   iniciar sesión
                                </button> -->
                                  <div class="col-md-7">
                                   <button type="submit" class="social-button" style="background-color: #1cbacc;border-color: #fff">iniciar sesión</button>
                                   <center>Conectar con </center>
                                     <a href="{{url('redirect/facebook')}}" class="social-button" id="facebook-connect"> <span>Facebook</span></a>
                                     <a href="{{url('redirect/twitter')}}" class="social-button" id="twitter-connect"> <span>Twitter</span></a>
                                   </div>
                            </div>
                        </div>

                         <a class="btn btn-link" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
