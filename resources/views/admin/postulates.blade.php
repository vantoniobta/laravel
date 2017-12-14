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

@endsection

