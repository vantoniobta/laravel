@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')
<div class="container"><br>
    <div class="row" style=" margin:top;border: 1px solid #D3D3D3;">
        <div class="panel-heading" style="background-color: #009189;color: #fff"><h4 align="center"><i class="fa fa-check" aria-hidden="true"></i> {{ $jobs->title}}</h4></div><br>
        <div class="col-md-10" >
              <form id="contact-form" class="form-horizontal" action="{{ url('admin/articles_save_edit',$jobs->id) }}" method="POST">
                   {{ csrf_field() }}
                <div id="success-container" class="text-center" style="display:none;">
                  <p class="lead text-success"><span class="glyphicon glyphicon-ok"></span></p>
                  <p class="lead">Your message has been sent successfully!</p>
                </div>

                <div id="form-container">

                  <!-- Name input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">Titulo</label>
                    <div class="col-md-9">
                      <input id="title" name="title" type="text" value="{{ $jobs->title}}" class="form-control" required="">
                    </div>
                  </div>



                  <!-- Email input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">abstract</label>
                    <div class="col-md-9">
                      <textarea id="abstract" name="abstract" type="text" class="form-control" required="">{{ $jobs->abstract}}</textarea>
                    </div>
                  </div>

                  <!-- Message body -->
                  <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">Tiempo</label>
                    <div class="col-md-9">
                      <textarea id="text" name="text" type="text" class="form-control" rows="10" required="">{{ $jobs->text}}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">Address</label>
                    <div class="col-md-9">
                      <input id="address" name="address" type="text" value="{{ $jobs->address}}" class="form-control" required="">
                    </div>
                  </div>


            

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="color: red">Status</label>
                      <div class="col-md-9">

                          @if ($jobs->status == 'Inactivo')
                            <select class="form-control" id="status" name="status">
                              <option value="{{ $jobs->status}}">{{ $jobs->status}}</option>
                              <option value="Activo">Activo</option>
                            </select>
                            @else
                            <select class="form-control" id="status" name="status">
                              <option value="{{ $jobs->status}}">{{ $jobs->status}}</option>
                              <option value="Inactivo">Inactivo</option>
                            </select>
                          @endif

                      </div>
                  </div>  

                  <!-- Form actions -->
                  <div class="form-group">
                    <div class="col-md-12 text-right" id="spin-area">
                      <button type="submit" class="btn btn-primary btn-lg" style="background-color: #009189"><i class="fas fa-check-circle"></i>&nbsp;Guardar</button>
                    </div>
                  </div>
                </div>
              </fieldset>
              </form>
        </div>
    </div>
</div><br>


<div style="background-color: #444444"><br>
 <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter" style="color:#fff;"><b>NOSOTROS</b></div>
        <p style="color:#fff;">Somos una empresa lider en cada uno de los negocios, estamos comprometidos con la mejora continua para satisfacer a nuestros clientes.</p>
        <!-- <p style="color:#fff;"><i class="fa fa-map-marker"></i >Calle Paricutín 312, Roma, 64700 Monterrey, N.L.</p>
        <p style="color:#fff;"><i class="fa fa-phone"></i> Phone (México) : +52 (81) 8880 4400</p>
        <p style="color:#fff;"><i class="fa fa-envelope"></i> E-mail : info@multimedios.com</p> -->
        
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright" style="background-color:#2d2d2d">
  <div class="container">
    <div class="col-md-6">
      <p style="color: #ffffff">© 2017 - All Rights Diarios de las Huasteca</p>
    </div>
  </div>
</div>
</div>

@endsection

