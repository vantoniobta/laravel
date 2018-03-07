@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8" >
            <div class="panel panel-default" id="div_home">
                <div class="panel-heading" style="background-color: #17baef; color: #fff"><h4><b>Hola! <i class="far fa-smile"></i> - {{ Auth::user()->name }}</b></h4></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h6 id="title_vacantes" align="center">Tu ultima postulación</h6>
                     @if ($jobs == '0')
                       <h6 style="color: red" id="title_vacantes"><b>Aun no te haz postulado en ninguna vacantes</h6>
                       
                        @else
                        
                          <h3 id="title_vacantes" align="center">{{ $jobs->title }}</h3>
                        
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <div class="panel panel-default" id="div_home">
              <div class="panel-heading" style="background-color: #008b8b; color: #fff">
              Vacantes Nuevos!</div>
              <div class="panel-body">
              <ul>
                <li><a href="">Desarrollador web</a></li>
                <li><a href="">Capturista de datos</a></li>
              </ul>
              </div>
              
           </div>
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
