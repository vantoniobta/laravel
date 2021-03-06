@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')


    <div class="container">
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
              <h3 style="color:#000;font-family: 'Open Sans', sans-serif;" align="center"><b>{{ $jobs->title }}</b></h3>
              <p style="color: #000" align="center">Usuarios Postulados</p>
          </div>
        </div>
     </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <!--  <h3>Usuarios Postulados: Vacante <b>{{ $jobs->title }} </b></h3> -->
                        <div class="table-responsive">    
                           <table class="table" id="table_general3" >
                            <thead>
                              <tr>
                              <th style="background-color: #17baef;color: #fff; text-align: center;">Fecha</th>
                                <th style="background-color: #17baef;color: #fff;text-align: center;">Nombre</th>
                                <th style="background-color: #17baef;color: #fff;text-align: center;">Apellidos</th>
                                <th style="background-color: #17baef;color: #fff; text-align: center;">Telefono</th>
                                <th style="background-color: #17baef;color: #fff; text-align: center;">Email</th>
                                <th style="background-color: #17baef;color: #fff; text-align: center;">Curriculum</th>
                              </tr>
                                @foreach ($data as $u)
                                  <tr>
                                  <td style="text-align: center;">{{ date('F d, Y', strtotime($u->created_at)) }}</td>
                                    <td style="text-align: center;">{!! $u->name !!}</td>
                                    <td style="text-align: center;">{!! $u->lastname !!}</td>
                                    <td style="text-align: center;">{!! $u->phone !!}</td>
                                    <td style="text-align: center;">{!! $u->email !!}</td>

                                    <td><a href="../../uploads/cv/{{$u->userId}}/{{$u->cv}}" download>{!! $u->cv !!}</a></td>
                                    <!-- <td><a class="badge badge-success">Enviar Notificacacion</a></td> -->
                                </tr>
                              @endforeach
                            </thead>
                          </table>
                   </div>
             </div>
        </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xs-12 centered">
                <a href="/admin"><i class="fas fa-undo-alt fa-lg"></i></a>
          </div><br><br>
         </div>
    </div>

<div style="background-color: #444444"><br>
   <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 footerleft ">
          <div class="logofooter" style="color:#fff;"><b>NOSOTROS</b></div>
          <p style="color:#fff;">Somos una empresa lider en cada uno de los negocios, estamos comprometidos con la mejora continua para satisfacer a nuestros clientes.</p>
         <!--  <p style="color:#fff;"><i class="fa fa-map-marker"></i >Calle Paricutín 312, Roma, 64700 Monterrey, N.L.</p>
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

