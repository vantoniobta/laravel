@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

<div class="mk-info md-padding container" style="background-color: #AFEEEE; top: 0;left: 0;width: 100%;height: 100%;">
 <div class="md-padding col-sm-4">
 a
  </div>

   <div class="md-padding col-sm-4">
   a
  </div>

     <div class="md-padding col-sm-4">
     a
  </div>

</div>

<div class="container" style="background-color: #ededed;top: 0;left: 0;width: 100%;height: 100%; ">
  <div class="col-md-6">
   <div id="my-popup" class="mfp-hide white-popup"></div>  <!-- DIV VANTONIO popup -->
    <h1 class="title_va" style="color:#000"><b>NUESTRA ESTRATEGIA DIGITAL</b></h1>
    </div>
 </div>

<div class="container" style="background-color: #1c6e80;">
   <div class="row">
     <div class="col-md-12">
     <h1 style="font-family: 'Anton', sans-serif; color: #fff" align="center">ÚLTIMAS OFERTAS DE TRABAJO</h1>
     </div>
   </div>
 </div>

<div class="container">
    <div class="row">
	        <div class="col-md-12">
	             <!--  <h1 align="center" style="font-family: 'Anton', sans-serif; color: #1c6e80">ÚLTIMAS OFERTAS DE TRABAJO</h1><br> -->
	                <div class="panel-body" >
	                      	@forelse ($works as $work)
						<div class="col-md-4 ">
						    <h4 style="font-family: 'Anton', sans-serif;">PUESTO</h4>
						    <h4><a href="{{ URL::to('vacantes/info', $work->id)}}">{{ $work->puesto }}</a></h4>
						</div>
							
						<div class="col-md-8">
							    <h4 style="font-family: 'Anton', sans-serif;">REQUISITOS:</h4>
							    <li style="color: #1c6e80">{{ $work->habilidades }}</li>
							    <hr>
						 </div>
							@empty
							    <p>No users</p>
							@endforelse
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


