@extends('layouts.app')

@section('title', 'Page Child')

@section('content')

<!-- Slider -->




<!--   <div class="container_title_view">
       ÚLTIMAS OFERTAS DE TRABAJO MONTERREY , N.L
  </div> -->

  <div class="page_view_section">

    @forelse ($works as $work)

    <div class="item_page_view_section">

      <p style=" font-size: 16px;font-weight: bold;"><a href="{{ URL::to('mty/job', $work->url)}}" style="color:#000">{{ $work->title }}</a></p>
       <img src="../../img/big_box.png">
      <!-- <p style=" font-size: 12px"><span style="color: #696969;">Imagen: vantonio</span></p> -->
      <p style=" font-size: 14px;color: #000;"><a href="{{ URL::to('mty/job', $work->url)}}" style="color:#000">{{ $work->abilities }}</a></p>
      <h6 data-fontsize="10" data-lineheight="23"><span style="color: #696969;"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address }} | {{ date('F d, Y', strtotime($work->created_at)) }}</span></h6>
      <hr>
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
              {{ $works->links()}} 
            </div> 
          </div> 
      </div>





    <footer class="footer-distributed" >
      <div class="footer-left">
       <!--  <img src="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/test.png" class="img-responsive"> -->
        <p class="footer-company-name">Diarios las huastecas &copy; 2019</p>
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


