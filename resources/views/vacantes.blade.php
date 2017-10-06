@extends('layouts.app')

@section('title', 'Page Child')



@section('content')
<h1>Últimas ofertas de trabajo</h1>
   
 



	@forelse ($works as $work)
	<div style="background-color: #E0FFFF" class="col-md-6 col-md-offset-2">
	    <h4>PUESTO</h4>
	    <h4><a>{{ $work->puesto }}</a></h4>
	</div>
	
	<div style="background-color: #E0FFFF" class="col-md-6 col-md-offset-2">
	    <li>HABILIDADES:{{ $work->habilidades }}</li>
	    <hr>
	 </div>
	@empty
	    <p>No users</p>
	@endforelse

   
 

@endsection


