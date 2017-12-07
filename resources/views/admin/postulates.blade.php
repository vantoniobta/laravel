@extends('layouts.admin')

@section('title', 'Page Child')

@section('content')
<div class="container"><br>
    <div class="row">
        <div class="col-md-10">
         @foreach($job as $a)
            <h3>{{ $a->title }}</h3>
        @endforeach
      </div>
    </div>
</div>

@endsection

