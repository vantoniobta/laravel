@extends('layouts.app')

@section('title', 'Page Child')



@section('content')
<h1>countries</h1>
   
 



   @forelse ($countries as $country)
	    <li>{{ $country->countryName }}</li>
	@empty
	    <p>No users</p>
	@endforelse

   
 

@endsection


