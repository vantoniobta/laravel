@extends('layouts.app')

@section('content')

@include('sweet::alert')
<br>
 <div class="container">
     <div class="row">
         <form enctype="multipart/form-data" action="profile/{{$user->id}}" method="POST">
               <div class="col-md-8" >
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color:#5DBFE3; color: #fff"><b><h5 id="title_vacantes" style="color: #fff"><i class="fas fa-user" style="color: #fff"></i>&nbsp;Informacion Personal</h5></b></div>
                      <div class="panel-body">
                          <div class="col-md-6">
                              <label style="color: #000; font-family: 'Armata', sans-serif;">Nombre</label>
                               <input type="text" name="name" value="{{ $user->name }}" class="form-control"><br>
                               <label style="color: #000; font-family: 'Armata', sans-serif;">Apellidos</label>
                              <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control"><br>
                          </div>
                          <div class="col-md-6">
                                <label style="color: #000; font-family: 'Armata', sans-serif;">Nivel de Inglés</label>
                                 <input type="text" name="ingles" value="{{ $user->ingles }}" class="form-control" placeholder="Básico-Intermedio-Avanzado"><br>
                                 <!--  <select class="form-control" name="ingles" id="sel1">
                                 <option value="">---</option>
                                 <option value="Nivel Básico">Nivel Básico</option>
                                 <option value="Nivel Intermedio">Nivel Intermedio</option>
                                 <option value="Nivel Avanzado">Nivel Avanzado</option>
                                </select><br> -->
                                <label style="color: #000;  font-family: 'Armata', sans-serif;">Teléfono de Contacto</label>
                             <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                          </div>
                      </div>
                  </div>
              </div>
               <div class="col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#5DBFE3; color: #fff"><b><h5 id="title_vacantes" style="color: #fff"><i class="fas fa-image" style="color: #fff"></i>&nbsp;Imagen Profile</h5></b></div>
                        <div class="panel-body">
                            <img src="uploads/avatars/{{$user->avatar}}" class="img-circle center-block" width="20%">
                            <h4 style=" font-family: 'Armata', sans-serif; color: #000" align="center">{{ $user->name }}</h4>
                            <p align="center" style="color: #000; font-family: 'Armata', sans-serif;">{{ $user->email }}</p>
                              <p class="file">
                               <input type="file" name="avatar" value=""  class="input-file">
                               <input type="hidden"  name="_token" value="{{ csrf_token() }}">
                               <center><label for="file" style=" font-family: 'Armata', sans-serif;"><i class="fas fa-cloud-upload-alt"></i>&nbsp;Cambiar foto</label></center>
                              </p>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-8">
                      <div class="panel panel-default">
                          <div class="panel-heading" style="background-color:#5DBFE3; color: #fff"><b><h5 id="title_vacantes" style="color: #fff"><i class="fas fa-file-pdf" style="color: #fff"></i>&nbsp;Curriculum(.pdf, .docx)</h5></b></div>
                          <div class="panel-body">
                             <div class="col-md-6">
                                 <label style="color: #000; font-family: 'Armata', sans-serif;">Descripción Personal(opcional)</label>
                                 <textarea name="description" class="form-control">{{ $user->description }}</textarea>
                            </div>
                            <div class="col-md-4">
                                  @if ($user->cv =='vacio.pdf')
                                   <p style="color: red; font-family: 'Armata', sans-serif;"><b>Aun no haz adjuntado tu CV</b></p>
                                    @else
                                     <p style="color: red; font-family: 'Armata', sans-serif;"><i class="fas fa-check-circle" style="color: #9ACD32"></i><a href="uploads/cv/{{$user->id}}/{{$user->cv}}" target="_blank">&nbsp;{{$user->cv}}</a></p>
                                  @endif
                                  <center><input type="file" name="cv" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple style="display: none;" />
                                <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Actualizar CV&hellip;</span></label></center>
                            </div>
                          </div>
                      </div>
               </div>

              <div class="col-md-2">
                   <input type="submit" class="btn_send_profile btn-lg center-block" value="Guardar Datos" style="float: right; font-family: 'Anton', sans-serif;">
              </div>


          </form>
        </div>
 </div>  


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
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>





@endsection
