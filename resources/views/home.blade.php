@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" >
                <div class="panel-heading" style="background-color:#BADA55"><b><h5 style="color: #fff"><i class="fas fa-chart-line"></i>&nbsp;Historial</h5></b></div>
                <div class="panel-body">
                        <section id="content1">
                             <h4 id="title_table1" style="color: #9ACD32"><i class="fas fa-check-circle" style="color: #9ACD32"></i>Tu ultima postulación</h4>
                                  @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                             @if ($jobs == '0')
                               <h6 style="color: red" id="title_vacantes"><b>Aun no te haz postulado en ninguna vacantes</h6>
                                @else
                                  <h4 id="title_vacantes" >{{ $jobs->title }}</h4>
                            @endif
                    </section>
                </div>
        </div>
    </div>
</div>

   <footer class="footer-distributed">
      <div class="footer-left">
        <!-- <img src="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/test.png" class="img-responsive"> -->
        vantonio
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
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
    </footer>
@endsection
