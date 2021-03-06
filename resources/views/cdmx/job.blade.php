

@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

@include('sweet::alert')


    <div class="container">
          <div class="row"><!--romw-->

            <div class="col-md-12">
               <h1 class="inf_jobs_title">{{ $work->title}}</h1>
                <p class="inf_jobs"><i class="far fa-calendar"></i>&nbsp;{{ date('F d, Y', strtotime($work->created_at)) }}</p>
             </div>

                <div class="col-sm-8">
                  <h5><b>Requerimientos</b></h5>
                   <p class="inf_jobs">{{ $work->abilities}}</p>
                   <h5><b>Prestaciones</b></h5>
                  <p class="inf_jobs">{{ $work->benefits}}</b></p>
               </div>

                <div class="col-sm-2" >
                   <h5><b>Fecha Publicada</b></h5>
                  
                   <h5><b>Sueldo</b></h5>
                    <p class="inf_jobs">{{ $work->salary}}</p>
                 </div>

                  <div class="col-sm-2" >
                    <h5><b>Lugar</b></h5>
                     <p class="inf_jobs"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address}}</p>
                    <h5><b>Sexo</b></h5>
                     <p class="inf_jobs">Indistinto</p>
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


          </div><!--romw-->
            <h4><a href="/cdmx"><i class="fas fa-caret-square-left"></i>&nbsp;Volver</a></h4>
      </div>






   <footer class="footer-distributed">
      <!-- <div class="footer-left">
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
      </div> -->
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

