

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

               <div class="col-sm-8" >
                   <p class="inf_jobs">{{ $work->abilities}}</p>
                   <h5><b>Prestaciones</b></h5>
                  <p class="inf_jobs">{{ $work->benefits}}</b></p>
                  <p class="inf_jobs"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address}}</p>

               </div>



                 @if (Auth::check())
               <div class="col-md-12">
                  <form action="{{ URL::to('mty/send') }}" method="POST">
                      {{ csrf_field() }}
                      <input type="text" name="userId" value="{{ Auth::user()->id }}" style="visibility:hidden;">
                      <input type="text" name="workId" value="{{ $work->id}}" style="visibility:hidden;">
                      <div class="col-md-12">
                      <input type="submit" value="APLICAR A LA VACANTE" class="btn_send" style="border-color:#DAA520 " >
                    </div>
                 </form>
                </div>
                @else
                  <div class="col-md-4" >
                    <img src="../../img/big_box.png">
                  </div>
                @endif


          </div><!--romw-->

      </div>






   <footer class="footer-distributed">
      <div class="footer-left">

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

