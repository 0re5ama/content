@extends('layouts.index')

@section('data')
	@foreach($usrs as $usr)
		<a href='/usr/{{$usr->id}}'>
			<li class='list-group-item hoverlist'>{{$usr->name}}</li>
		</a>
	@endforeach
@endsection
