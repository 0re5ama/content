@extends('layouts.app')

@section('content')
	<div class='container'>
		ID: {{ $emp->id }}
		<br />
		Name: {{ $emp->name }}
		<br />
		Year Joined: {{ $emp->joined }}
		<br />
	</div>
@endsection
