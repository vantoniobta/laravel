

@extends('layouts.app')

@section('title', 'Page Child')

@section('content')



    <div class="article_page_view_">
      <div class="item_article_page_view_">
        <h1 class="inf_jobs_title">{{ $work->title}}</h1>
         
        
        <p class="inf_jobs"><i class="far fa-calendar"></i>&nbsp;{{ date('F d, Y', strtotime($work->created_at)) }}</p>
      
        <p class="p_article_origin">{{ $work->abilities}}</p>
         <img src="../../uploads/img_art/{{ $work->image_article }}" width="700">
        <p class="p_article_origin">{{ $work->benefits}}</b></p>
        <p class="p_article_origin"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address}}</p>
      </div>

       <div class="item_article_page_view_2">
        articles banners
       </div>

    </div>


  





   <footer class="footer-distributed">
      <div class="footer-right">
        <p class="footer-company-about">
          <span>Lorem Ipsum</span>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>



@endsection

