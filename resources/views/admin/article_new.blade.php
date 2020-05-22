@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')

<div class="container" style="background-color: white"><br>
    <div class="row" style=" margin:top;border: 1px solid #D3D3D3;">
     <div class="panel-heading" style="background-color: #FA7A55;color: #fff;"><h4 align="center"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;NUEVO ARTICULO</h4></div><br>
        <div class="col-md-10" >
              <form enctype="multipart/form-data" id="contact-form" class="form-horizontal" action="{{ URL::to('admin/save_article') }}" method="POST">
                   {{ csrf_field() }}
              <fieldset>
                <div id="success-container" class="text-center" style="display:none;">
                  <p class="lead text-success"><span class="glyphicon glyphicon-ok"></span></p>
                  <p class="lead">Your message has been sent successfully!</p>
                </div>

                <div id="form-container">

                  <!-- Name input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">Titulo</label>
                    <div class="col-md-9">
                      <input id="title" name="title" type="text" class="form-control" onkeyup="url_article()" autocomplete="off" onpaste="return false" required="">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">URL</label>
                    <div class="col-md-9">
                      <input id="url" name="url" type="text"  class="form-control">
                    </div>
                  </div>

                  <!-- Email input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">Sección</label>
                    <div class="col-md-9">
                      <!-- <input id="Lugar" name="lugar" type="text" placeholder="Lugar" class="form-control" required=""> -->
                         <select class="form-control" id="seccion" name="seccion">
                         <option value="nacional">Nacional</option>
                         <option value="tendencia">Tendencia</option>
                          <option value="deportes">Deportes</option>
                           <option value="internacional">Internacional</option>
                      </select>
                    </div>
                  </div>




                  

                  <div class="form-group">
                    <label class="col-md-3 control-label" style="font-family: 'Anonymous Pro', sans-serif;">Abstract</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="abstract" name="abstract"  rows="2" required=""></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="font-family: 'Anonymous Pro', sans-serif;">Parrafo 1</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="text" name="text"  rows="10" required=""></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="font-family: 'Anonymous Pro', sans-serif;">Parrafo 2</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="text2" name="text2"  rows="10" required=""></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="font-family: 'Anonymous Pro', sans-serif;">Embed Twitter </label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="text3" name="text3"  rows="10" required=""></textarea>
                    </div>
                  </div>


                   <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="font-family: 'Anonymous Pro', sans-serif;">Imagen</label>
                    <div class="col-md-9">
                      <input type="file" name="image_article" id="image_article" required="">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="font-family: 'Anonymous Pro', sans-serif;">Address</label>
                    <div class="col-md-9">
                       <input id="address" name="address" type="text"  class="form-control" required="">
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="font-family: 'Anonymous Pro', sans-serif;">Autor</label>
                    <div class="col-md-9">
                       <input id="author" name="author" type="text"  class="form-control" required="">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label" for="message" style="font-family: 'Anonymous Pro', sans-serif;color: red">Status</label>
                    <div class="col-md-9">
                      <select class="form-control" id="status" name="status">
                         <option value="Activo">Activo</option>
                         <option value="Inactivo">Inactivo</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-md-12 text-right" id="spin-area">
                      <button type="submit" class="btn btn-primary btn-lg" style="font-family: 'Anonymous Pro', sans-serif;background-color: #009189"><i class="fas fa-check-circle"></i>&nbsp;Enviar</button>
                    </div>
                  </div>
                </div>
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
   <!--      <p style="color:#fff;"><i class="fa fa-map-marker"></i >Calle Paricutín 312, Roma, 64700 Monterrey, N.L.</p>
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
      <p style="color: #ffffff">© 2017 - All Rights Diarios de las Huastecas</p>
    </div>
  </div>
</div>
</div>

@endsection

