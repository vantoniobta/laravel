@extends('layouts.app')

@section('content')
<!-- profile form data imagen edit -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
               <img src="uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                <h2>Hola! {{ $user->name }} </h2>
        </div>
    </div>
</div>
@endsection
