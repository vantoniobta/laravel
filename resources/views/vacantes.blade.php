@extends('layouts.app')

@section('title', 'Page Child')



@section('content')
<h1>Últimas ofertas de trabajo</h1>
   
 



	@forelse ($works as $work)

	<div style="background-color: #E0FFFF" class="col-md-4 ">
	    <h4>PUESTO</h4>
	    <h4><a href="">{{ $work->puesto }}</a></h4>
	</div>
	
	<div style="background-color: #E0FFFF" class="col-md-8">
	    <h4>REQUISITOS:</h4>
	    <li>{{ $work->habilidades }}</li>
	    <hr>
	 </div>
	@empty
	    <p>No users</p>
	@endforelse

   
 

@endsection


