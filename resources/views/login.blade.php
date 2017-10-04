@extends('layouts.app')

@section('title', 'Page Child')



@section('content')
<h1>Hello :)</h1>


	@unless (Auth::check()) 
     <h3>No has iniciado sesión</h3>
    @endunless



@endsection
