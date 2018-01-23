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

                   <div class="form-group">
                    <label class="col-md-3 control-label">URL</label>
                    <div class="col-md-9">
                      <input id="url" name="url" type="text" placeholder="Puesto Principal" class="form-control" disabled="true">
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

                  <!-- Form actions -->
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

