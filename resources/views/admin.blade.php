@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"><br>
<!--             <div class="panel-heading">ADMIN Dashboard</div> -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- You are logged in as <strong>ADMIN</strong><br> -->
                    <a href="{{ url('admin/jobs_new') }}" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>&nbsp;Nueva Vacante</a>
                 <br><hr>
                                 <h2 align="center" style="color: #214c66">Lista de Vacantes Multimedios Televisión</h2>
                    <div class="col-md-12">

                      <input type="text" name="search_v" id="search_v" ng-model="search" class="form-control" placeholder="Buscar Vacante " onkeyup="search_all()">
                    </div>

                    <br><br><br>
                <div class="table-responsive">    
                      <table class="table" id="table_general">
                        <thead>
                          <tr>
                            <th style="color: #fff; background-color: #17baef">FECHA</th>
                            <th style="color: #fff; background-color: #17baef">PUESTO</th>
                            <th style="color: #fff; background-color: #17baef">LUGAR</th>
                            <th style="color: #fff; background-color: #17baef">TIEMPO</th>
                            <th style="color: #fff; background-color: #17baef">SALARIO</th>
                            <th style="color: #fff; background-color: #17baef">###</th>
                            <th style="color: #fff; background-color: #17baef">###</th>
                          </tr>
                          @foreach ($jobs as $job)
                              <tr>
                                <td>{{ date('F d, Y', strtotime($job->created_at)) }}</td>
                                <td>{!! $job->title !!}</td>
                                <td>{!! $job->address !!}</td>
                                <td>{!! $job->time !!}</td>
                                <td>{!! $job->salary !!}</td>
                                <td><a href="{{ URL::to('admin/jobs_edit',$job->id) }}" class="btn btn-default btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>Editar</a></td>
                                <td><a href="{{  URL::to('admin/postulates',$job->id )}}" class="btn btn-success btn-sm"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-light">3</span></a></td>
                            </tr>
                          @endforeach
                        </thead>
                      </table>

                      <div class="text-center">
                          {!! $jobs->links() !!}
                      </div>
               </div>
        </div>
    </div>
</div>
<script>
function search_all() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_v");
  filter = input.value.toUpperCase();
  table = document.getElementById("table_general");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>



<div style="background-color: #214c66"><br>
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
