@extends('layouts.index')

@section('title')
	User
@endsection

@section('data')
	@foreach($usrs as $usr)
		<a href='/usr/{{$usr->id}}'>
			<li class='list-group-item hoverlist'>{{$usr->name}}</li>
		</a>
	@endforeach
@endsection
