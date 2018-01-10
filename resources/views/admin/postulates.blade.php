@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <h3>Usuarios Postulados: Vacante <b>{{ $jobs->title }} </b></h3>
                    <div class="table-responsive">    
                      <table class="table" id="table_wrapper">
                        <thead>
                          <tr>
                          <th style="background-color: #D3D3D3;">Fecha</th>
                            <th style="background-color: #D3D3D3;">Nombre</th>
                            <th style="background-color: #D3D3D3;">Apellidos</th>
                            <th style="background-color: #D3D3D3;">Telefono</th>
                            <th style="background-color: #D3D3D3;">Email</th>
                            <th style="background-color: #D3D3D3;">Curriculum</th>
                          </tr>
                            @foreach ($data as $u)
                              <tr>
                              <td>{!! $u->created_at !!}</td>
                                <td>{!! $u->name !!}</td>
                                <td>{!! $u->lastname !!}</td>
                                  <td>{!! $u->phone !!}</td>
                                <td>{!! $u->email !!}</td>

                                <td><a href="../../uploads/cv/{{$u->userId}}/{{$u->cv}}" download>{!! $u->cv !!}</a></td>
                            </tr>
                          @endforeach
                        </thead>
                      </table>
               </div>
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

