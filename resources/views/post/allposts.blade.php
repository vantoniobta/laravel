@extends('layouts.app')

@section('title', 'Page Child')


@section('content')
<div class="container">
<h1>all post</h1>
<h3><a href="post/create">aqui</a></h3>
<table class="table table-bordered">

@foreach($posts as $post)
<tr>
	<td>
		{{  $post->title }}
	</td>

	<td>
		{{  $post->created_at }}
	</td>


</tr>
@endforeach


</table>


</div>

@endsection