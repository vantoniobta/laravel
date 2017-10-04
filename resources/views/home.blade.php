@extends('layouts.app')

@section('title', 'Page Child')



@section('content')
<h1>Hola! esto es laravel 5.5.</h1>

	@if (count($records) === 1)
	    Tengo un registro!
	@elseif (count($records) > 1)
	    Tengo varios registros!
	@else
	    ¡No tengo ningún disco!
	@endif
	
	<hr>

	@unless (Auth::check()) 
     No has iniciado sesión.
    @endunless



@endsection
