@extends('layouts.app')

@section('title', 'Page Child')

@section('content')
<br>
<div class="container">
    <div class="row">
       <div class="col-sm-6 col-md-10 col-md-offset-1">
         @if (Auth::check())
         <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #17baef"><h4 style="color: #fff; text-align: center;"><b>Hola {{ Auth::user()->name }} !</b></h4></div>
               <div class="panel-body">
                <h3 align="center">{{ $key}}</h3>
                <img src="http://icongal.com/gallery/image/6134/sad_face.png" class="img-responsive center-block" alt="Responsive image" width="10%">
               </div>
            </div>
            </div>
            @else
              <div class="col-md-8">
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

