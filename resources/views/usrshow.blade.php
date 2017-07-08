@extends('layouts.app')

@section('content')
	<div class='container'>
		ID: {{ $usr->id }}
		<br />
		Name: {{ $usr->name }}
		<br />
		Role: {{ $usr->role }}
		<br />
	</div>
@endsection
