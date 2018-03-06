@extends('layouts.app')

@section('title', 'Page Child')


@section('content')

<div class="container">
	<h1>
		Create post
	</h1>


	<form action="{{ url('post') }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Title</label>
			<input type="text" name="title" id="name" class="form-control" />
		</div>

		<div class="form-group">
			<label for="name">Body</label>
			<textarea name="body" id="body" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<input type="submit" name="submit" value="Add post" class="btn btn-default">
		</div>


	</form>



</div>

@endsection