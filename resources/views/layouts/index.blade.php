@extends('layouts.app')

@section('content')
	<div class='container'>
		<div class='row'>
			<ul class='list-group'>
				@yield('data')
			</ul>
		</div>
	</div>
@endsection
