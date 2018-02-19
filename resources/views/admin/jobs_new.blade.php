@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')

<div class="container"><br>
    <div class="row" style=" margin:top;border: 1px solid #D3D3D3;">
     <div class="panel-heading" style="background-color: #444;color: #F0E68C"><h4 align="center"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;NUEVA VACANTE</h4></div><br>
        <div class="col-md-10" >
              <form id="contact-form" class="form-horizontal" action="{{ URL::to('admin/jobs_save') }}" method="POST">
                   {{ csrf_field() }}
              <fieldset>
                <div id="success-container" class="text-center" style="display:none;">
                  <p class="lead text-success"><span class="glyphicon glyphicon-ok"></span></p>
                  <p class="lead">Your message has been sent successfully!</p>
                </div>

                <div id="form-container">

                  <!-- Name input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label">Puesto</label>
                    <div class="col-md-9">
                      <input id="puesto" name="puesto" type="text" placeholder="Puesto Principal" class="form-control" onkeyup="miFuncion()" autocomplete="off" onpaste="return false" required="">
                    </div>
                  </div>

                   <div class="form-group" style="display:none;">
                    <label class="col-md-3 control-label">URL</label>
                    <div class="col-md-9">
                      <input id="url" name="url" type="text" placeholder="Puesto Principal" class="form-control">
                    </div>
                  </div>

                  <!-- Email input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" >Lugar</label>
                    <div class="col-md-9">
                      <input id="Lugar" name="lugar" type="text" placeholder="Lugar" class="form-control" required="">
                    </div>
                  </div>

                  <!-- Message body -->
                  <div class="form-group">
                    <label class="col-md-3 control-label">Tiempo</label>
                    <div class="col-md-9">
                       <input id="tiempo" name="tiempo" type="text" placeholder="Tiempo" class="form-control" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" >Habilidades</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="habilidades" name="habilidades" placeholder="Habilidades" rows="5" required=""></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message">Prestaciones</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="prestaciones" name="prestaciones" placeholder="Prestaciones" rows="5" required=""></textarea>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label" for="message">Sueldo</label>
                    <div class="col-md-9">
                       <input id="Sueldo" name="sueldo" type="text" placeholder="Sueldo" class="form-control" required="">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="color: red">Status</label>
                    <div class="col-md-9">
                      <select class="form-control" id="status" name="status">
                         <option value="Activo">Activo</option>
                         <option value="Inactivo">Inactivo</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-md-12 text-right" id="spin-area">
                      <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                  </div>
                </div>
              </form>
         </div>
    </div>
</div>



    <footer class="footer-distributed">
        <div class="footer-left">
          <h3>Bolsa de<span>Trabajo</span></h3>

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

