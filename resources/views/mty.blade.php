@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

<!-- Slider -->
  <div class="page_view_section">

    @forelse ($articles as $work)
    


    <div class="item_page_view_section">
      <a href="{{ URL::to('/articulo', $work->url)}}">
      <div>
        <img src="../../uploads/img_art/{{ $work->image_article }}" width="300" height="200px" class="img_section">
      </div>
        <div>
          <p style=" font-size: 20px; font-family: 'Lalezar', cursive;" class="title_view">{{ $work->title }}</p>
        </div>
      </a>
    </div>


    @empty
           <div class="container" id="div_vacantes">
              <div class="row">
                    <div class="col-md-12">
                               <h3 align="center">No tenemos notas</h3>
                    </div>
                </div>
            </div>

     @endforelse
  

  </div>

 





      <div class="container"> 
          <div class="row">  
            <div class="col-md-12 text-center" id="test">  
              {{ $articles->links()}} 
            </div> 
          </div> 
      </div>





    <footer class="footer-distributed" >
      <div class="footer-right">
        <p class="footer-company-about">
          <span>Huasteco Digital</span>
          Somos una empresa informativa desde la huasteca para todo México.
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>


@endsection


