@extends('layouts.app')

@section('title', 'Page Child')

@section('content')


      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 style="Montserrat, Helvetica, Arial, sans-serif; color: #000" align="center">{{ $work->title}}</h1>
               <hr>
             </div>

             <div class="col-md-2">
                <h5><b>Sueldo</b></h5>
                <p>${{ $work->salary}}</p>
             </div>

             <div class="col-md-4">
               <h5><b>Lugar</b></h5>
               <p>{{ $work->address}}</p>
             </div>
            
             <div class="col-md-6">
               <h5><b>Requerimientos</b></h5>
               <p>{{ $work->abilities}}</p>
             </div>
             
             <div class="col-md-6">
                <h5><b>Prestaciones</b></h5>
                <p>{{ $work->benefits}}</b></p>
             </div>
             
             <div class="col-md-4">
                <h5><b>Fecha Publicada</b></h5>
                <p>{{ $work->created_at }}</p>
             </div>


           @if (Auth::check())
               <div class="col-md-8">
                  <form action="{{ URL::to('vacantes/insert') }}" method="POST">
                      {{ csrf_field() }}
                      <input type="text" name="userId" value="{{ Auth::user()->id }}" style="visibility:hidden;">
                      <input type="text" name="workId" value="{{ $work->id}}" style="visibility:hidden;">
                      <div class="col-md-12">
                      <input type="submit" value="APLICAR A LA VACANTE" class=" btn btn-primary" style="background-color: #DAA520;border-color:#DAA520 " >
                    </div>
                 </form>
                </div>
                @else
                  <div class="col-md-8">
                    <div class="alert alert-danger" style="background-color: #F08080; color: #fff">
                      Oh! <a href="../../login" class="alert-link" style="color: #fff"> Iniciar session</a> o <strong><a href="../../register" style="color: #fff">Registrarse.</strong>
                      </div>
                  </div>
                @endif


                <div class="col-md-8">
                  <h3 style="color: #000">Compartir Vacante</h3>
                    <a href="http://twitter.com/share?url=http://localhost/laravel/public/vacantes/info/Practicas-Profesionales-Noticias&text=HMTL%20Share%20Buttons&via=MultimediosRH" target="_blank" class="share-btn twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://www.facebook.com/sharer/sharer.php?u=https://github.com/gschier/html-share-buttons" target="_blank" class="share-btn facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="http://www.linkedin.com/shareArticle?url=https://github.com/gschier/html-share-buttons&title=HMTL%20Share%20Buttons&summary=HMTL%20Share%20Buttons&source=http://schier.co/blog/2014/10/22/pure-html-share-buttons.html" target="_blank" class="share-btn linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
          </div>
    </div>
<!--  -->


<br>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #265d7e">
                <p style="color: white">PUESTO:</p>  
                <h3 style="color: white">{{ $work->title}}</h3>
                </div>

                <div class="panel-body">
                    <div class="col-md-6">
                         <h3><b>Sueldo:</b></h3>
                         <h4>${{ $work->salary}}</h4>
                    </div>
                    <div class="col-md-6">
                       <h3><b>Lugar:</b></h3>
                      <h4>{{ $work->address}}</h4>
                    </div>

                    <div class="col-md-6">
                       <h3><b>Requerimientos:</b></h3>
                        <h4>{{ $work->abilities}}</h4>
                    </div>

                    <div class="col-md-6">
                       <h3><b>Prestaciones:</b></h3>
                       <h4>{{ $work->benefits}}</h4>
                    </div><br>
                    @if (Auth::check())
                   <form action="{{ URL::to('vacantes/insert') }}" method="POST">
                      {{ csrf_field() }}
                      <input type="text" name="userId" value="{{ Auth::user()->id }}" style="visibility:hidden;">
                      <input type="text" name="workId" value="{{ $work->id}}" style="visibility:hidden;">
                      <div class="col-md-12">
                           <input type="submit" value="APLICAR A LA VACANTE" class=" btn btn-primary">

                      </div>
                    </form>
                    @else
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <strong>Oh!</strong> <a href="../../login" class="alert-link"> Inciar session</a>  por favor para Postularte.
                        </div>
                    </div>
                    @endif



                    <div class="col-md-12">
                     <h3 style="font-family: 'Anton', sans-serif; color: #c96a1b">COMPARTIR VACANTE</h3>
                    <div class="share-social">
                        <ul>
                            <li><a data-via="empleosti" href="https://twitter.com/share?"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/shareArticle?mini=true"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

  


<div style="background-color: #444444"><br>
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
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright" style="background-color:#2d2d2d">
  <div class="container">
    <div class="col-md-6">
      <p style="color: #ffffff">© 2017 - All Rights Grupo Multimedios</p>
    </div>
  </div>
</div>
</div>

@endsection

