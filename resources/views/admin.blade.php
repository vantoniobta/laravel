@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">ADMIN Dashboard</div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in as <strong>ADMIN</strong><br>
                    <a href="{{ url('admin/jobs_new') }}" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>&nbspNew</a>
                 <br><hr>
                    <div class="col-md-12">

                      <input type="text" name="search_v" id="search_v" ng-model="search" class="form-control" placeholder="Type your search keyword.." onkeyup="search_all()">
                    </div>

                    <br><br><br>

                <div class="table-responsive">    
                      <table class="table" id="table_wrapper">
                        <thead>
                          <tr>
                            <th>Fecha</th>
                            <th>Puesto</th>
                            <th>Lugar</th>
                            <th>Tiempo</th>
                            <th>Salario</th>
                            <th></th>
                            <th>Postulados</th>
                          </tr>
                          @foreach ($jobs as $job)
                              <tr>
                                <td>{!! $job->created_at !!}</td>
                                <td>{!! $job->title !!}</td>
                                <td>{!! $job->address !!}</td>
                                <td>{!! $job->time !!}</td>
                                <td>{!! $job->salary !!}</td>
                                
                                 <td><a href="#" class="btn btn-default btn-sm">Edit</a></td>
                                 <td><a href="{{  URL::to('admin/postulates',$job->id )}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp1</a></td>
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
  table = document.getElementById("table_wrapper");
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
@endsection
