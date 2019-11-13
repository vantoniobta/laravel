

@extends('layouts.app')

@section('title', 'Page Child')

@section('content')



    <div class="article_page_view_">
      <div class="item_article_page_view_">
        <h1 class="inf_jobs_title">{{ $work->title}}</h1>
         
        
        <p class="inf_jobs"><i class="far fa-calendar"></i>&nbsp;{{ date('F d, Y', strtotime($work->created_at)) }}</p>
      
        <p class="p_article_origin">{{ $work->abilities}}</p>
        
        <p class="p_article_origin">{{ $work->benefits}}</b></p>
        <p class="p_article_origin"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address}}</p>
      </div>

       <div class="item_article_page_view_2">
        articles banners
       </div>

    </div>


  





   <footer class="footer-distributed">
   <!--    <div class="footer-left">

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