@extends('layouts.app')

@section('title', 'Page Child')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-14">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #1c6e80">
                <p style="color: white">PUESTO:</p>  
                <h2 style="color: white">{{ $work->puesto}}</h2>
                </div>

                <div class="panel-body">
                    <div class="col-md-6">
                         <h3>Sueldo:</h3>
                         <h4>${{ $work->sueldo}}</h4>
                    </div>
                    <div class="col-md-6">
                       <h3>Lugar:</h3>
                      <h4>{{ $work->lugar}}</h4>
                    </div>

                    <div class="col-md-6">
                       <h3>Requerimientos: </h3>
                        <h4>{{ $work->habilidades}}</h4>
                    </div>

                    <div class="col-md-6">
                       <h3>Prestaciones: </h3>
                       <h4>{{ $work->prestaciones}}</h4>
                    </div><br>
                    @if (Auth::check())
                   <form action="{{ URL::to('vacantes/insert') }}" method="POST">
                      {{ csrf_field() }}
                      <input type="text" name="userId" value="{{ Auth::user()->id }}" style="visibility:hidden;">
                      <input type="text" name="workId" value="{{ $work->id}}" style="visibility:hidden;">
                      <div class="col-md-2 pull-right">
                           <input type="submit" value="APLICAR A LA VACANTE" class="pull-right btn btn-primary">

                      </div>
                    </form>
                    @else
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <strong>Oh!</strong> <a href="../../login" class="alert-link"> Inciar session</a>  por favor para Postularte.
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<div style="background-color: #1c6e80"><br>
 <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter" style="color:#fff;"><b>NOSOTROS</b></div>
        <p style="color:#fff;">Somos una empresa lider en cada uno de los negocios, estamos comprometidos con la mejora continua para satisfacer a nuestros clientes.</p>
        <p style="color:#fff;"><i class="fa fa-map-marker"></i >Calle Paricutín 312, Roma, 64700 Monterrey, N.L.</p>
        <p style="color:#fff;"><i class="fa fa-phone"></i> Phone (México) : +52 (81) 8880 4400</p>
        <p style="color:#fff;"><i class="fa fa-envelope"></i> E-mail : info@multimedios.com</p>
        
      </div>
    <!--   <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7" style="color:#fff;">LINKS</h6>
        <ul class="footer-ul">
          <li><a href="#/" style="color:#fff;">Home</a></li>
          <li><a href="#/metricas" style="color:#fff;">Vacantes</a></li>
        </ul>
      </div> -->
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7" style="color:#fff;"><b>MULTIMEDIOS</b></h6>
        <div class="post">
          <p style="color:#fff;">http://www.multimedios.com<span></span></p>
          <p style="color:#fff;">http://laguna.multimedios.com<span></span></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://twitter.com/multimediostv"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></blockquote>
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/multimediostv/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></blockquote>
             <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.instagram.com/multimediostv/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright" style="background-color:#165665">
  <div class="container">
    <div class="col-md-6">
      <p style="color: #ffffff">© 2017 - All Rights Grupo Multimedios</p>
    </div>
  </div>
</div>
</div>

@endsection

