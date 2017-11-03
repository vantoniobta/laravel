@extends('layouts.app')

@section('title', 'Page Child')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md-12">
         @if (Auth::check())
         <div class="panel panel-default">
            <div class="panel-heading">Hola {{ Auth::user()->name }}</div>
               <div class="panel-body">
                <h1>{{ $key}}</h1>
                
               </div>
            </div>
            </div>
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

