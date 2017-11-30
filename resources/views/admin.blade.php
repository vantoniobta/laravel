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
                    You are logged in as <strong>ADMIN</strong>
                    <a href="{{ url('admin/jobs_new') }}" class="pull-right btn btn-sm btn-primary">Nuevo Vacante</a>
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
                          </tr>
                          @foreach ($jobs as $job)
                              <tr>
                                <td>{!! $job->created_at !!}</td>
                                <td>{!! $job->title !!}</td>
                                  <td>{!! $job->address !!}</td>
                                <td>{!! $job->time !!}</td>
                                <td>{!! $job->salary !!}</td>
                                <td><a href="#" class="btn btn-default btn-sm">Edit</a></td>
                                 <td><a href="#" class="btn btn-default btn-sm">Delete</a></td>
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

@endsection
