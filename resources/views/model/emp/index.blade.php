@extends('layouts.index')

@section('title')
	Employee
@endsection

@section('data')
	@foreach($emps as $emp)
		<a href='/emp/{{$emp->id}}'>
			<li class='list-group-item hoverlist'>{{$emp->name}}</li>
		</a>
	@endforeach
@endsection
