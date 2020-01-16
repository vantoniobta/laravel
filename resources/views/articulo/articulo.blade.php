@extends('layouts.app')

@section('title', 'Page Child')

@section('content')




    <div class="article_page_view_">


      <div class="item_article_page_view_">
        <h1 class="inf_jobs_title" >{{ $work->title}}</h1>
        <p class="inf_jobs">By {{ $work->author}} | {{ date('F d, Y', strtotime($work->created_at)) }} <i class="far fa-calendar"></i> </p>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <div class="addthis_inline_share_toolbox"></div>
        <p class="p_article_origin">{{ $work->abstract}}</p>
        <img src="../../uploads/img_art/{{ $work->image_article }}" class="img_article_view">
        <hr>
        <p class="p_article_origin_2">{{ $work->text}}</b></p>

      

        <p class="p_article_origin_2">{{ $work->text2}}</b></p>
        <p class="p_article_origin_2">{{ $work->text3}}</b></p>

      </div>




       <div class="item_article_page_view_2">

         <blockquote class="twitter-tweet"><p lang="en" dir="ltr">I was inspired by <a href="https://twitter.com/ASpittel?ref_src=twsrc%5Etfw">@ASpittel</a>&#39;s tweet where people shared their portfolios, so I decided to make a GitHub repo to curate them! I added some of the portfolios from the thread, but feel free to open a PR with your own!<a href="https://t.co/qJD5eS9Eyd">https://t.co/qJD5eS9Eyd</a></p>&mdash; Emma Bostian 🐞 (@EmmaBostian) <a href="https://twitter.com/EmmaBostian/status/1172520232453365760?ref_src=twsrc%5Etfw">September 13, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
         
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