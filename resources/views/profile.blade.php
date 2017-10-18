@extends('layouts.app')

@section('content')
<!-- profile form data imagen edit -->
<div class="container">
  <form enctype="multipart/form-data" action="profile/{{$user->id}}" method="POST">
    <div class="row">
       <h2 class="title-form text-fade-in">Información Básica</h2><hr>
        <div class="col-md-6">
		      <label>Nombre</label>
		       <input type="text" name="name" value="{{ $user->name }}" class="form-control"><br>
		       <label>Apellidos</label>
	        <input type="text" name="lastname" value="" class="form-control"><br>
        </div>
        <div class="col-md-6">
          <label>Nivel de Inglés</label>
	          <select class="form-control" name="ingles" id="sel1">
				   <option>--</option>
				   <option value="Nivel Básico">Nivel Básico</option>
				   <option value="Nivel Intermedio">Nivel Intermedio</option>
				   <option value="Nivel Intermedio">Nivel Avanzado</option>
			    </select><br>
              <label>Teléfono de Contacto</label>
           <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"><br>
        </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="title-form text-fade-in">Imagen Perfil</h2><hr>
         <a href="uploads/avatars/{{$user->avatar}}" style="color: red" download>{{$user->avatar}}</a><br>
           <label>Update profile Image</label><br>
            <input type="file" name="avatar" value="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
       </div>
       <div class="col-md-6">
         <h2 class="title-form text-fade-in">subir CV</h2><hr>
          <a href="uploads/cv/{{$user->cv}}"  style="color: red" download>{{$user->cv}}</a><br>
         <label>Los tipos de archivos permitidos son pdf,doc,docx</label><br>
          <input type="file" name="cv">
           <input type="submit" class="pull-right btn btn-sm btn-primary">
        </div>
     </div>







   </form>
</div>
@endsection
