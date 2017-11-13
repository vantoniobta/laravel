@extends('layouts.app')

@section('content')
<!-- profile form data imagen edit -->

<br>
<div class="container" style="background-color: #1c6e80;">
   <div class="row">
     <div class="col-md-12">
     <h1 style="font-family: 'Anton', sans-serif; color: #fff" align="center">INFORMACIÓN BASICA</h1>
     </div>
   </div>
 </div>


<div class="container">
  <form enctype="multipart/form-data" action="profile/{{$user->id}}" method="POST">
    <div class="row"><br>
        <div class="col-md-6">
		      <label style="color: #1c6e80">Nombre</label>
		       <input type="text" name="name" value="{{ $user->name }}" class="form-control"><br>
		       <label style="color: #1c6e80">Apellidos</label>
	        <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control"><br>
        </div>
        <div class="col-md-6">
          <label style="color: #1c6e80">Nivel de Inglés</label>
	          <select class="form-control" name="ingles" id="sel1">
				   <option value="">---</option>
				   <option value="Nivel Básico">Nivel Básico</option>
				   <option value="Nivel Intermedio">Nivel Intermedio</option>
				   <option value="Nivel Avanzado">Nivel Avanzado</option>
			    </select><br>
              <label style="color: #1c6e80">Teléfono de Contacto</label>
           <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"><br>
        </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="title-form text-fade-in" style="color: #1c6e80">Imagen Perfil</h2>
        <img src="uploads/avatars/{{$user->avatar}}" class="img-thumbnail" alt="Cinque Terre" width="20%" height="20%"><br>
      <!--    <a href="uploads/avatars/{{$user->avatar}}" style="color: red" download>{{$user->avatar}}</a><br> -->
           <label style="color: #1c6e80">Update profile Image</label><br>
            <input type="file" name="avatar" value="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
       </div>
       <div class="col-md-6">
          <h2 class="title-form text-fade-in" style="color: #1c6e80">subir CV</h2>
          <img src="uploads/avatars/pdf.png" class="img-thumbnail" alt="Cinque Terre" width="20%" height="20%"><br>
          <a href="uploads/cv/{{$user->id}}/{{$user->cv}}"  style="color: red" download>Descargar tu CV</a><br>
          <label>Los tipos de archivos permitidos son pdf,doc,docx</label><br>
          <input type="file" name="cv">
           <input type="submit" class="pull-right btn btn-sm btn-primary" value="Guardar Datos">
        </div>
     </div>
   </form>
</div><br>




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
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://twitter.com/multimediostv"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></blockquote>
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/multimediostv/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></blockquote>
             <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.instagram.com/multimediostv/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></blockquote>
          </div>
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
