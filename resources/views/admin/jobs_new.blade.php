@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')
<div class="container"><br>
    <div class="row">
        <div class="col-md-10">
             
              <form id="contact-form" class="form-horizontal" action="{{ URL::to('admin/jobs_save') }}" method="POST">
                   {{ csrf_field() }}
              <fieldset>
                <legend class="text-center">Nueva Vacante</legend>
                <div id="success-container" class="text-center" style="display:none;">
                  <p class="lead text-success"><span class="glyphicon glyphicon-ok"></span></p>
                  <p class="lead">Your message has been sent successfully!</p>
                </div>

                <div id="form-container">

                  <!-- Name input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label">Puesto</label>
                    <div class="col-md-9">
                      <input id="puesto" name="puesto" type="text" placeholder="Puesto Principal" class="form-control" required="">
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
              </fieldset>
              </form>
    </div>
    </div>
</div>

@endsection

