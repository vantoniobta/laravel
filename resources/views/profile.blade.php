@extends('layouts.app')

@section('content')
<!-- profile form data imagen edit -->


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
</div>
@endsection
