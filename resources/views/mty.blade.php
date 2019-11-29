@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

<!-- Slider -->




<!--   <div class="container_title_view">
       ÚLTIMAS OFERTAS DE TRABAJO MONTERREY , N.L
  </div> -->

  <div class="page_view_section">

    @forelse ($articles as $work)
    <a href="{{ URL::to('/articulo', $work->url)}}" style="color:#4d665f">
      <div class="item_page_view_section">
        <div>
          <img src="../../uploads/img_art/{{ $work->image_article }}" width="300" height="200px">
        </div>
       <div>
        <div style="background-color: yellow; display: flex; ">
          <p style=" font-size: 24px; font-family: 'Lalezar', cursive;color: #333232">{{ $work->title }}</p>
        </div>
        
    </a>
  </div>
      
       
      <!-- <p style=" font-size: 12px"><span style="color: #696969;">Imagen: vantonio</span></p> -->
      <!-- <p style=" font-size: 14px;color: #000;"><a href="{{ URL::to('/articulo', $work->url)}}" style="color:#000">{{ $work->abilities }}</a></p> -->
      <!-- <h6 data-fontsize="10" data-lineheight="23"><span style="color: #696969;"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address }} | {{ date('F d, Y', strtotime($work->created_at)) }}</span></h6> -->
    </div>


    @empty
           <div class="container" id="div_vacantes">
              <div class="row">
                    <div class="col-md-12">
                               <h3 align="center">No tenemos Vacantes</h3>
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


