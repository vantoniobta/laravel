@extends('layouts.app')

@section('title', 'Page Child')



@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
              <h1 align="center" style="font-family: 'Anton', sans-serif;">ÚLTIMAS OFERTAS DE TRABAJO</h1><br>
                <div class="panel-body">
                      	@forelse ($works as $work)
						<div class="col-md-4 ">
						    <h4 style="font-family: 'Anton', sans-serif;">PUESTO</h4>
						    <h4><a href="{{ URL::to('vacantes/info', $work->id)}}">{{ $work->puesto }}</a></h4>
						</div>
						
						<div class="col-md-8">
						    <h4 style="font-family: 'Anton', sans-serif;">REQUISITOS:</h4>
						    <li>{{ $work->habilidades }}</li>
						    <hr>
						 </div>
						@empty
						    <p>No users</p>
						@endforelse
                </div>
        </div>
    </div>
</div>


















   
 

@endsection


