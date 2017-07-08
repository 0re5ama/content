@extends('layouts.app')

@section('content')
	<div class='container'>
		<h1>@yield('title') List</h1>
		<hr>
		<div class='row'>
			<ul class='list-group'>
				@yield('data')
			</ul>
		</div>
		<div class='row'>
			<div class='col-sm-6'>
				<div class='text-center'>
					<a class='adding' href='/emp/create'><i class='fa fa-plus' aria-hidden='true'></i> Add @yield('title')</a>
				</div>
			</div>
		</div>
	</div>
@endsection
