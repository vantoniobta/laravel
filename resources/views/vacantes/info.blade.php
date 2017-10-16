@extends('layouts.app')

@section('title', 'Page Child')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #4a4a4a">
                <p style="color: white">Puesto:</p>  
                <h2 style="color: white">{{ $work->puesto}}</h2>
                </div>
                <div class="panel-body">
                        
                        <div class="col-md-6">
                           <h3>Sueldo:</h3>
                           <h4>{{ $work->sueldo}}</h4>
                        </div>

                        <div class="col-md-6">
                           <h3>Lugar:</h3>
                           <h4>{{ $work->lugar}}</h4>
                        </div>

                        <div class="col-md-6">
                           <h3>Requerimientos: </h3>
                           <h4>{{ $work->habilidades}}</h4>
                        </div>

                         <div class="col-md-6">
                           <h3>Prestaciones: </h3>
                           <h4>{{ $work->prestaciones}}</h4>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

