@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row"><br>
      <!--   <div class="col-md-12">
        </div>
 -->

<div class="col-md-12">
    <main>
           <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" style="color:#10ca7e">Actividad</label>

            <input id="tab2" type="radio" name="tabs" >
            <label for="tab2" style="color: #ffbb11">Todos los activos</label>
              
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" style="color: #f00b42">Inactivos</label>
              
            <section id="content1">
                    <div class="col-md-12">
                    <input type="text" name="search_v" id="search_v" ng-model="search" class="form-control" placeholder="Buscar Vacante " onkeyup="search_all()">
                  </div>
                   <br><br><br>
                  <div class="table-responsive">
                     <h4 id="title_table1" style="color: #9ACD32;"><i class="fas fa-check-circle" style="color: #9ACD32"></i>&nbsp;Vacantes en Actividad</h4>
                     <h4 style="display: inline-block;">&nbsp;&nbsp;<a href="{{ URL::to('admin/xlsx') }}"><i class="fas fa-download"></i></a></h4>
                          <table class="table" id="table_general1" >
                            <thead>
                              <tr>
                                <th class="activity_table">FECHA</th>
                                <th class="activity_table">PUESTO</th>
                                <th class="activity_table">LUGAR</th>
                                <th class="activity_table">Postulados</th>
                              </tr>
                               @foreach ($data as $datax)
                                  <tr>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{{ date('F d, Y', strtotime($datax->created_at)) }}</td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;color: #000"><b>{!! $datax->title !!}</b></td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $datax->address !!}</td>
                                     <td><a href="{{  URL::to('admin/postulates',$datax->id )}}" class="btn btn-success btn-sm"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-light">{!! $datax->postulados !!}</span></a></td>
                                </tr>
                              @endforeach
                            </thead>
                          </table>
                   </div>
            </section>
              
            <section id="content2">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                      <input type="text" name="search_v" id="search_v" ng-model="search" class="form-control" placeholder="Buscar Vacante " onkeyup="search_all()">
                    </div>

                    <br><br><br>
                    <div class="table-responsive">
                     <h4 id="title_table1"><i class="fas fa-users"></i>&nbsp;Vacantes Activos</h4>
                     <h4 style="display: inline-block;">&nbsp;&nbsp;<a href="{{ URL::to('admin/xlsx') }}"><i class="fas fa-download"></i></a></h4>
                          <table class="table" id="table_general2" >
                            <thead>
                              <tr>
                                <th class="ready_table">Fecha</th>
                                <th class="ready_table">Puesto</th>
                                <th class="ready_table">Lugar</th>
                                <th class="ready_table">Tiempo</th>
                                <th class="ready_table">Salario</th>
                                <th class="ready_table">###</th>
                              </tr>
                              @foreach ($jobs as $job)
                                  <tr>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;font-size: 12px;">{{ date('F d, Y', strtotime($job->created_at)) }}</td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;color: #009189"><b>{!! $job->title !!}</b></td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $job->address !!}</td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $job->time !!}</td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $job->salary !!}</td>
                                    <td><a href="{{ URL::to('admin/jobs_edit',$job->id) }}" class="btn btn-default btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>Editar</a></td>
                                   <!--  <td><a href="{{  URL::to('admin/postulates',$job->id )}}" class="btn btn-success btn-sm"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-light">3</span></a></td> -->
                                </tr>
                              @endforeach
                            </thead>
                          </table>

                          <div class="text-center">
                              {!! $jobs->links() !!}
                          </div>
                   </div>
            </section>


             <section id="content3">
                 <div class="col-md-12">
                    <input type="text" name="search_v" id="search_v" ng-model="search" class="form-control" placeholder="Buscar Vacante " onkeyup="search_all()">
                  </div>
                   <br><br><br>
                  <div class="table-responsive">
                     <h4 id="title_table1" style="color: #CD5C5C"><i class="fas fa-times" style="color: #CD5C5C"></i>&nbsp;Vacantes Inactivos</h4>
                     <h4 style="display: inline-block;">&nbsp;&nbsp;<a href="#"><i class="fas fa-download" onclick="tableToExcel('table_general3', 'W3C Example Table')"></i></a></h4>
                          <table class="table" id="table_general3" >
                            <thead>
                              <tr>
                                <th class="stop_table">FECHA</th>
                                <th class="stop_table">PUESTO</th>
                                <th class="stop_table">LUGAR</th>
                                <th class="stop_table">TIEMPO</th>
                                <th class="stop_table">SALARIO</th>
                                <th class="stop_table">###</th>
                              </tr>
                               @foreach ($jobs_x as $jobx)
                                  <tr>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{{ date('F d, Y', strtotime($jobx->created_at)) }}</td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;color: #000"><b>{!! $jobx->title !!}</b></td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $jobx->address !!}</td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $jobx->time !!}</td>
                                    <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $jobx->salary !!}</td>
                                    <td><a href="{{ URL::to('admin/jobs_edit',$jobx->id) }}" class="btn btn-default btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>Editar</a></td>
                                </tr>
                              @endforeach
                            </thead>
                          </table>
                   </div>
             </section>
    </main>
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
<script>
// function search_all() {
//   var input, filter, table, tr, td, i;
//   input = document.getElementById("search_v");
//   filter = input.value.toUpperCase();
//   table = document.getElementById("table_general2");
//   tr = table.getElementsByTagName("tr");
//   for (i = 0; i < tr.length; i++) {
//     td = tr[i].getElementsByTagName("td")[1];
//     if (td) {
//       if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
//         tr[i].style.display = "";
//       } else {
//         tr[i].style.display = "none";
//       }
//     }       
//   }
// }
</script>

@endsection
