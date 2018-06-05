@extends('layouts.app')

@section('title', 'Page Child')

@section('content')
<!-- Slider -->
  <header>
  <section class="header-content">
    <img class="rocky-dashed animate-pop-in" src="https://cssanimation.rocks/levelup/public/images/rocky-dashed.svg">
    <h1 class="header-title animate-pop-in">header vantonio</h1>
    <h3 class="header-subtitle animate-pop-in">A useful start for your projects</h3>
  </section>
</header>


  <div class="container">;
   <div class="fusion-content-boxes content-boxes columns row fusion-columns-4 fusion-columns-total-4 fusion-content-boxes-1 content-boxes-icon-on-top content-left home-servicios" data-animationoffset="100%" style="margin-top:0px;margin-bottom:60px; ">
      <div class="fusion-column content-box-column content-box-column content-box-column-1 col-lg-3 col-md-3 col-sm-3 fusion-content-box-hover  content-box-column-first-in-row">
        <center><div class="col content-wrapper-background link-area-link-icon link-type-text content-icon-wrapper-yes icon-hover-animation-none"  data-animationoffset="100%">
          <div class="heading heading-with-icon icon-left">
            <a class="heading-link" href="#" target="_self"><div class="image"><img src="http://illa.org.pe/wp-content/uploads/2017/09/trabajoenequipo.png" width="100" height="100" alt="Lupa_Icon"></div></a>
          </div>
           <div class="fusion-clearfix"></div>
             <div class="content-container" style="color:#333333;">
              <h3 data-fontsize="17" data-lineheight="23"><span style="color: #000;">Formación</span></h3>
              <p>Contamos con diferentes areas en IT con las mas alta en tecnologia </p>
            </div>
        </div></center>
      </div>

      <div class="fusion-column content-box-column content-box-column content-box-column-2 col-lg-3 col-md-3 col-sm-3 fusion-content-box-hover ">
        <center><div class="col content-wrapper-background link-area-link-icon link-type-text content-icon-wrapper-yes icon-hover-animation-none"  data-animationoffset="100%">
          <div class="heading heading-with-icon icon-left">
            <a class="heading-link" href="#" target="_self"><div class="image"><img src="http://www.argia.es/images/INFORMAMOS.png" width="100" height="100" alt="Meeting_Icon"></div></a>
          </div>
           <div class="fusion-clearfix"></div>
            <div class="content-container" style="color:#333333;">
               <h3 data-fontsize="17" data-lineheight="23"><span style="color: #000;">Nuevas Idea</span></h3>
                <p>Soluciones de contratación para posiciones nacionales e internacionales</p>
            </div>
        </div></center>
      </div>


      <div class="fusion-column content-box-column content-box-column content-box-column-3 col-lg-3 col-md-3 col-sm-3 fusion-content-box-hover ">
        <center><div class="col content-wrapper-background link-area-link-icon link-type-text content-icon-wrapper-yes icon-hover-animation-none" data-animationoffset="100%">
          <div class="heading heading-with-icon icon-left"><a class="heading-link" href="#" target="_self">
            <div class="image"><img src="http://www.rh-plus.com/coaching2017/sections/section_4/img/image4.png" width="100" height="100" alt="Servicios_mercado_icon"></div></a>
          </div>
          <div class="fusion-clearfix"></div>
            <div class="content-container" style="color:#333333;">
                <h3 data-fontsize="17" data-lineheight="23"><span style="color: #000;">Clientes</span></h3>
                <p>Impulsamos la creación de estrategias, basadas en el conocimiento del mercado</p>
            </div>
        </div></center>
      </div>

      <div class="fusion-column content-box-column content-box-column content-box-column-4 col-lg-3 col-md-3 col-sm-3 fusion-content-box-hover  content-box-column-last content-box-column-last-in-row" >
        <center><div class="col content-wrapper-background link-area-link-icon link-type-text content-icon-wrapper-yes icon-hover-animation-none"  data-animationoffset="100%">
          <div class="heading heading-with-icon icon-left"><a class="heading-link" href="#" target="_self"><div class="image"><img src="http://el-clarin.com/wp-content/uploads/2017/07/icono-trabajo-equipo.png" width="100" height="" alt="servicios_outplacement_icon"></div></a>
          </div>
            <div class="fusion-clearfix"></div>
              <div class="content-container" style="color:#333333;">
                <h3 data-fontsize="17" data-lineheight="23"><span style="color: #000;">Trabajo en equipo</span></h3>
                <p>Nuevos enfoques para el desarrollo profesional de sus empleados</p>
              </div>
        </div></center>
      </div>
   </div>
</div>

  <div class="container" style="background-color: #f1c108; ">
       <div class="row">
         <div class="col-md-12">
         <h3 id="title_vacantes" align="center">ÚLTIMAS OFERTAS DE TRABAJO CIUDAD DE MEXICO</h3>
         </div>
       </div>
  </div>

 



   @forelse ($works as $work)
          <div class="container" id="div_vacantes">
              <div class="row">
          	        <div class="col-md-12">
          	                <div class="panel-body" >
                						<div class="col-md-4" style="">
                                <h6 data-fontsize="10" data-lineheight="23"><span style="color: #696969;">Puesto</span></h6>
                						    <p style=" font-size: 18px;"><a href="{{ URL::to('cdmx/job', $work->url)}}" style="color:#008B8B"><i class="fas fa-check-circle"></i>&nbsp;{{ $work->title }}</a></p>
                						</div>
          							
              						   <div class="col-md-6">
                               <p style=" font-size: 12px"><span style="color: #696969;">Requisitos</span></p>
                                <p style=" font-size: 16px;color: #000">{{ $work->abilities }}</p>
                                <h6 data-fontsize="10" data-lineheight="23"><span style="color: #696969;"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $work->address }} | {{ date('F d, Y', strtotime($work->created_at)) }}</span></h6>
              						   </div>

                            <div class="col-md-2 ">
                               <h6 data-fontsize="10" data-lineheight="23"><span style="color: #696969;">Sueldo</span></h6>
                                <p style=" font-size: 16px;color:#000;">{{ $work->salary }}</p>
                            </div>
          	               </div>
          	        </div>
              </div>
          </div>
          @empty
         <p>No existen Vacantes</p>
    @endforelse



      <div class="container"> 
          <div class="row">  
            <div class="col-md-12 text-center" id="test">  
              {{ $works->links()}} 
            </div> 
          </div> 
      </div>





    <footer class="footer-distributed" >
      <div class="footer-left">
        <img src="https://agencias-multimedios.s3.amazonaws.com/2018/RH_IMG/test.png" class="img-responsive">

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


