@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

      <div class="container" style=" background-image: url('https://www.socialtools.me/img/n/bg/crossedlines1-1.png');background-size: cover;">
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
            <div class="col-md-8">
                <h3 style="color: #000">Compartir Vacante</h3>




                  <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank" class="share-btn twitter"  data-size = "large"
                    ><i class="fa fa-twitter"></i></a>



                  <a href="https://www.facebook.com/sharer/sharer.php?" target="_blank" class="share-btn facebook"><i class="fab fa-facebook-square"></i></a>
                  <a href="https://www.facebook.com/sharer/sharer.php?" target="_blank" class="share-btn linkedin"><i class="fa fa-linkedin"></i></a>


            </div>

            
    </div>
<br>


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

