@extends('layouts.app')

@section('title', 'Page Child')

@section('content')



<div class="container" style="
    background-image: url('../public/img/header1.jpg');
    height: 500px;
    width: 100%;
    margin: auto;
    background-size: cover;
    background-position: center;
 ">
<!--   <div class="row">
  <div class="col-xs-6 col-sm-4" style="top: 30%"> -->
  <div class="row"><br><br>
     <div class="col-lg-8 col-centered " style="float: none; margin: 0 auto;" >
    
    <div class="transbox" style=" margin: 0px;
        background-color: #1c6e80;
        border: 1px solid #1c6e80;
        opacity: 0.7;
        filter: alpha(opacity=60); /* For IE8 and earlier */">
          <h1 style="color:#ffffff; font-family: 'Candal', sans-serif;" align="center"><b>RECLUTAMIENTO MULTIMEDIOS</b></h1>
           <p style="color: #fff" align="center">Encuentra ofertas de trabajo de tecnología</p>

         <blockquote style=" padding: 10px 5px;
          border-left: 1px solid #fff;
          display:inline-block;
          color: #666;
          " ><a href="#" style="color: #ffffff">Monterrey</i></a></blockquote>

         <blockquote style=" padding: 10px 5px;
          border-left: 1px solid #fff;
          display:inline-block;
          color: #666;"><a href="#" style="color: #ffffff">CDMX</i></a></blockquote>

         <blockquote style=" padding: 10px 5px;
          border-left: 1px solid #fff;
          display:inline-block;
          color: #666;"><a href="#" style="color: #ffffff">Torreón</i></a></blockquote>

          <blockquote style=" padding: 10px 5px;
          border-left: 1px solid #fff;
          display:inline-block;
          color: #666;"><a href="#" style="color: #ffffff">Tampico</i></a></blockquote>

          <blockquote style=" padding: 10px 5px;
          border-left: 1px solid #fff;
          display:inline-block;
          color: #666;"><a href="#" style="color: #ffffff">Saltillo</i></a></blockquote>




    </div>

<!--     <h1 style="color:#ff7f50; font-family: 'Passion One', cursive; size: " align="center"><b>EMPLEOS MULTIMEDIOS DIGITAL</b></h1>
    <p style="color: #fff" align="center">Encuentra cientos de ofertas de trabajo de tecnología</p> -->
  </div>
  </div>




 </div>







 <div class="container">
  <div class="col-md-6"> 
    <h1 class="title_va" style="color:#000;" align="center">Multimedios Radio</h1>
    <p style="color: #000" align="center">Encuentra cientos de ofertas de trabajo de tecnología</p>
  </div>
   <div class="col-md-6"> 
    <h1 class="title_va" style="color:#000;" align="center">Multimedios Televisión</h1>
    <p style="color: #000" align="center">Encuentra cientos de ofertas de trabajo de tecnología</p>
  </div>
 </div>

<div class="container" style="background-color: #265d7e; ">
   <div class="row">
     <div class="col-md-12">
     <h1 style="font-family: 'Anton', sans-serif; color: #fff" align="center">ÚLTIMAS OFERTAS DE TRABAJO</h1>
     </div>
   </div>
 </div>

<div class="container">
    <div class="row">
	        <div class="col-md-12">
	             <!--  <h1 align="center" style="font-family: 'Anton', sans-serif; color: #1c6e80">ÚLTIMAS OFERTAS DE TRABAJO</h1><br> -->
	                <div class="panel-body" >
	                      	@forelse ($works as $work)
						<div class="col-md-4 ">
						    <h4 style="font-family: 'Anton', sans-serif;">PUESTO</h4>
						    <h4><a href="{{ URL::to('vacantes/info', $work->id)}}">{{ $work->title }}</a></h4>
						</div>
							
						<div class="col-md-8">
							    <h4 style="font-family: 'Anton', sans-serif;">REQUISITOS:</h4>
							    <li style="color: #1c6e80">{{ $work->abilities }}</li>
							    <hr>
						 </div>
							@empty
							    <p>No users</p>
							@endforelse
	               </div>
	        </div>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        {{ $works->links()}}
      </div>
    </div>
</div>
<br>



<div style="background-color: #444444"><br>
 <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter" style="color:#fff;"><b>NOSOTROS</b></div>
        <p style="color:#fff;">Somos una empresa lider en cada uno de los negocios, estamos comprometidos con la mejora continua para satisfacer a nuestros clientes.</p>
        <p style="color:#fff;"><i class="fa fa-map-marker"></i >Calle Paricutín 312, Roma, 64700 Monterrey, N.L.</p>
        <p style="color:#fff;"><i class="fa fa-phone"></i> Phone (México) : +52 (81) 8880 4400</p>
        <p style="color:#fff;"><i class="fa fa-envelope"></i> E-mail : info@multimedios.com</p>
        
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7" style="color:#fff;"><b>MULTIMEDIOS</b></h6>
        <div class="post">
          <p style="color:#fff;">http://www.multimedios.com<span></span></p>
          <p style="color:#fff;">http://laguna.multimedios.com<span></span></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright" style="background-color:#2d2d2d">
  <div class="container">
    <div class="col-md-6">
      <p style="color: #ffffff">© 2017 - All Rights Grupo Multimedios</p>
    </div>
  </div>
</div>
</div>



@endsection


