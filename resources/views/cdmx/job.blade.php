

@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

@include('sweet::alert')


      <div class="container" style=" background-image: url('https://www.socialtools.me/img/n/bg/crossedlines1-1.png');background-size: cover;">
         <div class="row">
            <div class="col-md-12">
               <h1 style="Montserrat, Helvetica, Arial, sans-serif; color: #000" align="center">{{ $work->title}}</h1><hr>
             </div>

             <div class="col-md-2">
                <h4><b>Sueldo</b></h4>
                <p style="font-size: 18px; font-family: 'Anonymous Pro', sans-serif;">{{ $work->salary}}</p>
             </div>

             <div class="col-md-4">
               <h4><b>Lugar</b></h4>
               <p style="font-size: 18px; font-family: 'Anonymous Pro', sans-serif;"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address}}</p>
             </div>
            
             <div class="col-md-6">
               <h4><b>Requerimientos</b></h4>
               <p style="font-size: 18px; font-family: 'Anonymous Pro', sans-serif;">{{ $work->abilities}}</p>
             </div>
             
             <div class="col-md-6">
                <h4><b>Prestaciones</b></h4>
                <p style="font-size: 18px; font-family: 'Anonymous Pro', sans-serif;">{{ $work->benefits}}</b></p>
             </div>
             
             <div class="col-md-4">
                <h4><b>Fecha Publicada</b></h4>
                <p style="font-size: 18px; font-family: 'Anonymous Pro', sans-serif;"><i class="far fa-calendar"></i>&nbsp;{{ date('F d, Y', strtotime($work->created_at)) }}</p>

             </div>


           @if (Auth::check())
               <div class="col-md-8">
                  <form action="{{ URL::to('cdmx/send') }}" method="POST">
                      {{ csrf_field() }}
                      <input type="text" name="userId" value="{{ Auth::user()->id }}" style="visibility:hidden;">
                      <input type="text" name="workId" value="{{ $work->id}}" style="visibility:hidden;">
                      <div class="col-md-12">
                      <input type="submit" value="APLICAR A LA VACANTE" class="btn_send" style="border-color:#DAA520 " >
                    </div>
                 </form>
                </div>
                @else
                  <div class="col-md-4">
                    <div class="alert alert-danger" style="background-color: #F08080; color: #fff">
                      Oh! <a href="../../login" class="alert-link" style="color: #fff"> Iniciar session</a>
                      </div>
                  </div>
                @endif
          </div>
            <div class="col-md-12">
                  <div id="social-links">
                     <ul class="social">
                        <h4>Compartir en redes Sociales</h4>
                        <li class="item">
                          <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.multimedios.com/" class="social-button"><i class="fa fa-facebook" class="social-button "></i></a>
                        </li>
                        <li class="item">
                          <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=http://www.multimedios.com/" class="social-button"><i class="fa fa-twitter"></i></a>
                         </li>
                         <li class="item">
                          <a href="https://plus.google.com/share?url=http://www.multimedios.com/" class="social-button"><i class="fa fa-google-plus"></i></a>
                         </li>
                        <li class="item">
                          <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.multimedios.com/&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button"><i class="fa fa-linkedin"></i></a>
                        </li>
                     </ul>
                  </div>
                  <h4><a href="/cdmx"><i class="fas fa-undo-alt"></i>&nbsp;Volver</a></h4>
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
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>



@endsection

