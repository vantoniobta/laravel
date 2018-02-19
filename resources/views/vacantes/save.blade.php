@extends('layouts.app')

@section('title', 'Page Child')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
         @if (Auth::check())
         <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #265d7e"><h4 style="color: #fff" >Hola {{ Auth::user()->name }} !</h4></div>
               <div class="panel-body">
                <h3 align="center">{{ $key}}</h3>
               </div>
            </div>
            </div>
            @else
              <div class="col-md-12">
                  <div class="alert alert-danger" role="alert">
                      <strong>Oh!</strong> <a href="../../login" class="alert-link"> Error!!</a>el Usuario no existe
                  </div>
              </div>
            @endif
        </div>
    </div>
</div>





    <footer class="footer-distributed">
        <div class="footer-left">
          <h3>Bolsa de<span>Trabajo</span></h3>

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

