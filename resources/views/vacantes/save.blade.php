@extends('layouts.app')

@section('title', 'Page Child')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
         @if (Auth::check())
            <h1>Hola {{ Auth::user()->name }}</h1>
            @else
              <div class="col-md-12">
                  <div class="alert alert-danger" role="alert">
                      <strong>Oh!</strong> <a href="../../login" class="alert-link"> Error!!</a>el Usuario no existe
                  </div>
              </div>
            @endif
        </div>
    </div>
</div>

@endsection

