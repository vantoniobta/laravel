@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

    <div class="article_page_view_">
      <div class="item_article_page_view_">
        <h1 class="inf_jobs_title" style="font-family: 'Lalezar', cursive;font-size: 42px;">{{ $work->title}}</h1>
        <p class="inf_jobs">By {{ $work->author}} | {{ date('F d, Y', strtotime($work->created_at)) }} <i class="far fa-calendar"></i> </p>
        <p class="p_article_origin">{{ $work->abstract}}</p>
        <img src="../../uploads/img_art/{{ $work->image_article }}" class="img_article_view">
        <hr>
        <p class="p_article_origin_2">{{ $work->text}}</b></p>
        <p class="p_article_origin_2">{{ $work->text2}}</b></p>
        <p class="p_article_origin_2">{{ $work->text3}}</b></p>
      </div>
       <div class="item_article_page_view_2">
        articles banners
       </div>
    </div>

   <footer class="footer-distributed">
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