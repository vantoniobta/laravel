@extends('layouts.app')

@section('content')
<br>
<form enctype="multipart/form-data" action="profile/{{$user->id}}" method="POST">
<div class="container" style="background-color: #17baef;">
   <div class="row">
     <div class="col-md-12"><br>
      <img src="uploads/avatars/{{$user->avatar}}" class="img-circle center-block" alt="Cinque Terre" width="10%">
      <h3 style="font-family: 'Anton', sans-serif; color: #fff" align="center">@_{{ $user->name }}</h3>
      <p align="center" style="color: #fff">{{ $user->email }}</p>
     </div>
   </div>
   <div>
      <p class="file">
         <input type="file" name="avatar" value=""  class="input-file">
         <input type="hidden"  name="_token" value="{{ csrf_token() }}">
         <label for="file">Cambiar tu imagen</label>
        </p>
   </div>
 </div>



<div class="container" style=" margin:top;border: 1px solid #D3D3D3;">
    <div class="row"><br>
        <div class="col-md-6">
		      <label style="color: #000">Nombre</label>
		       <input type="text" name="name" value="{{ $user->name }}" class="form-control"><br>
		       <label style="color: #000">Apellidos</label>
	        <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control"><br>
        </div>
        <div class="col-md-6">
          <label style="color: #000">Nivel de Inglés</label>
	          <select class="form-control" name="ingles" id="sel1">
				   <option value="">---</option>
				   <option value="Nivel Básico">Nivel Básico</option>
				   <option value="Nivel Intermedio">Nivel Intermedio</option>
				   <option value="Nivel Avanzado">Nivel Avanzado</option>
			    </select><br>
              <label style="color: #000">Teléfono de Contacto</label>
           <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"><br>
        </div>
    </div>

    <div class="row">
       <div class="col-md-6">
           <p class="file">
            <input type="file" name="cv">
            <label for="file">Actualizar tu CV</label>
           </p>
            @if ({{$user->cv}} =='vacio.pdf')
             <a href="uploads/cv/{{$user->id}}/{{$user->cv}}">Por favor adjuntar</a>
              @else
            @endif
           <a href="uploads/cv/{{$user->id}}/{{$user->cv}}">{{$user->cv}}</a>
        </div>
         <hr>
        <div class="container">
             <input type="submit" class="btn_send_profile btn-lg center-block" value="Guardar Datos">
        </div><br>
     </div>
  </div>
</form>







   <footer class="footer-distributed">
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
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer>





@endsection
