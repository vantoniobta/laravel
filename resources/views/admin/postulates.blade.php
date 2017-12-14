@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <h3>title puesto</h3>
                    <div class="table-responsive">    
                      <table class="table" id="table_wrapper">
                        <thead>
                          <tr>
                            <th style="background-color: #D3D3D3;">Nombre</th>
                            <th style="background-color: #D3D3D3;">Apellidos</th>
                            <th style="background-color: #D3D3D3;">Telefono</th>
                            <th style="background-color: #D3D3D3;">Email</th>
                            <th style="background-color: #D3D3D3;">Curriculum</th>
                          </tr>
                            @foreach ($abc as $job)
                              <tr>
                                <td>{!! $job->name !!}</td>
                                <td>{!! $job->lastname !!}</td>
                                  <td>{!! $job->phone !!}</td>
                                <td>{!! $job->email !!}</td>

                                <td><a href="../../uploads/cv/{{$job->userId}}/{{$job->cv}}" download>{!! $job->cv !!}</a></td>
                            </tr>
                          @endforeach
                        </thead>
                      </table>
               </div>
      </div>
    </div>
</div>

@endsection

