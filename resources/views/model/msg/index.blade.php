@extends('layouts.index')

@section('data')
	@foreach($msgs as $msg)
		<a href='/msg/{{$msg->id}}'>
			<li class='list-group-item hoverlist'>{{$msg->content}}</li>
		</a>
	@endforeach
@endsection
