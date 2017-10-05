@extends('layouts.app')

@section('title', 'Page Child')



@section('content')
<h1>Hola! esto es laravel 5.5.</h1>

</pre>
		

		 
	<hr>

	@unless (Auth::check()) 
     No has iniciado sesión.
    @endunless



@endsection
