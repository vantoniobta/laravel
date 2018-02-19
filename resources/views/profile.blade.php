@extends('layouts.app')

@section('content')
<!-- profile form data imagen edit -->

<br>
<div class="container" style="background-color: #265d7e;">
   <div class="row">
     <div class="col-md-12">
     <h2 style="font-family: 'Anton', sans-serif; color: #fff" align="center">INFORMACIÓN PERSONAL</h2>
     </div>
   </div>
 </div>


<div class="container" style=" margin:top;
    border: 1px solid #D3D3D3;">
  <form enctype="multipart/form-data" action="profile/{{$user->id}}" method="POST">
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
        <h2 class="title-form text-fade-in" style="color: #000">Imagen Perfil</h2>
        <img src="uploads/avatars/{{$user->avatar}}" class="img-thumbnail" alt="Cinque Terre" width="20%" height="20%"><br>
      <!--    <a href="uploads/avatars/{{$user->avatar}}" style="color: red" download>{{$user->avatar}}</a><br> -->
           <label style="color: #000">Update profile Image</label><br>
            <input type="file" name="avatar" value="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
       </div>
       <div class="col-md-6">
          <h2 class="title-form text-fade-in" style="color: #000">subir CV</h2>
          <img src="uploads/avatars/pdf.png" class="img-thumbnail" alt="Cinque Terre" width="20%" height="20%"><br>
          <a href="uploads/cv/{{$user->id}}/{{$user->cv}}"  style="color: #000" download>Descargar tu CV</a><br>
          <label>Los tipos de archivos permitidos son pdf,doc,docx</label><br>
          <input type="file" name="cv">
           <input type="submit" class="pull-right btn btn-sm btn-primary" value="Guardar Datos"><br><br>
        </div>
     </div>
   </form>
</div><br>


<!-- <div class="container" style="background-color: #265d7e;">
   <div class="row">
     <div class="col-md-12">
     <h4 style="font-family: 'Anton', sans-serif; color: #fff" align="center">POSTULACIONES</h4>
     </div>
   </div>
 </div>

 <div class="container" style=" margin:top;
    border: 1px solid #D3D3D3;">
     <div class="row"><br>
      <div class="col-md-6">
          <div class="table-responsive">    
              <table class="table" id="table_wrapper">
                  <thead>
                     <tr>
                     <th style="background-color: #D3D3D3;">Fecha</th>
                     <th style="background-color: #D3D3D3;">Nombre</th>
                     </tr>
                  </thead>
               </table>
           </div>
      </div>
     </div>
  </div><br> -->





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
