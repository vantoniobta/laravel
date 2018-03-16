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
                    <br>
                    <div class="col-md-12">

                      <input type="text" name="search_v" id="search_v" ng-model="search" class="form-control" placeholder="Buscar Usuario " onkeyup="search_all()">
                    </div>

                    <br><br><br>
                <div class="table-responsive">
                 <h4 id="title_table1"><i class="fas fa-users"></i>&nbsp;Lista de Usuarios</h4>  
                      <table class="table" id="table_general2" >
                        <thead>
                          <tr>
                            <th style="color: #fff; background-color: #009189;">Nombre</th>
                            <th style="color: #fff; background-color: #009189">Apellidos</th>
                            <th style="color: #fff; background-color: #009189">Celular</th>
                            <th style="color: #fff; background-color: #009189">Email</th>
                            <th style="color: #fff; background-color: #009189">Fechar Registro</th>
                            <th style="color: #fff; background-color: #009189">Ultima Actualización</th>
                          </tr>
                          @foreach ($users as $user)
                              <tr>
                               
                                <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $user->name !!}</td>
                                 <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $user->lastname !!}</td>
                                 <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $user->phone !!}</td>
                                 <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $user->email !!}</td>
                                  <td style="font-family: 'Anonymous Pro', sans-serif;">{{ date('F d, Y', strtotime($user->created_at)) }}</td>
                                 <td style="font-family: 'Anonymous Pro', sans-serif;">{!! $user->updated_at !!}</td>
                            </tr>
                          @endforeach
                        </thead>
                      </table>

                      
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
