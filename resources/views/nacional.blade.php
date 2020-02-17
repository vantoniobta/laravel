@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

<!-- Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-6"> <h1 class="titulo_seccion">#Nacional</h1></div>
    </div>
  </div>

  <div class="page_view_section">

    @forelse ($articles as $work)
  

    <div class="item_page_view_section">
      <a href="{{ URL::to('/articulo', $work->url)}}">
      <div>
        <img src="../../uploads/img_art/{{ $work->image_article }}" width="290" height="200px" class="img_section">
      </div>
        <div>
          <p class="title_view">{{ $work->title }}</p>
        </div>
      </a>
    </div>

    @empty
           <div class="container" id="div_vacantes">
              <div class="row">
                    <div class="col-md-12">
                               <h3 align="center">No tenemos Articulos</h3>
                    </div>
                </div>
            </div>

     @endforelse

  </div>


    <footer class="footer-distributed" >
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
