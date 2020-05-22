@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <h1 class="inf_jobs_title" >{{ $work->title}}</h1>
          <p class="inf_jobs">By {{ $work->author}} | {{ date('F d, Y', strtotime($work->created_at)) }} <i class="far fa-calendar"></i> </p>
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_inline_share_toolbox"></div>
          <p class="p_article_origin">{{ $work->abstract}}</p>
          <img src="../../uploads/img_art/{{ $work->image_article }}" class="img_article_view">
          <hr>
          <p class="p_article_origin_2">{{ $work->text}}</b></p>
          <p class="p_article_origin_2">{{ $work->text2}}</b></p>
          <p>{!! $work->text3 !!}</p>
      </div>
      
      <div class="col-md-4">
         <blockquote class="twitter-tweet"><p lang="und" dir="ltr"><a href="https://t.co/rRv1OQy8fu">https://t.co/rRv1OQy8fu</a></p>&mdash; Valentin Antonio Bautista (@vantonio_) <a href="https://twitter.com/vantonio_/status/1181792520843517952?ref_src=twsrc%5Etfw">October 9, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>

    </div>
  </div>


   <footer class="footer-distributed">
      <div class="footer-right">
        <p class="footer-company-about">
          <span>Lorem Ipsum</span>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>

@endsection