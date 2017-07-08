@extends('layouts.index')

@section('title')
	Post
@endsection

@section('data')
	@foreach($posts as $post)
		<a href='/post/{{$post->id}}'>
			<li class='list-group-item hoverlist'>{{$post->content}}</li>
		</a>
	@endforeach
@endsection
