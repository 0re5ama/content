@extends('layouts.app')

@section('content')
	<h1>Employee</h1>
	<hr>
	<form class='form-horizontal' method='post' action='/emp'>
		{{ csrf_field() }}
		<div class='form-group'>

			<div class='row'>
				<label class='control-label col-sm-2'>Name</label>
				<div class='col-sm-6'>
					<input type='text' class='form-control' name='name' />
				</div>
			</div>

			<div class='row'>
				<label class='control-label col-sm-2'>Joined on</label>
				<div class='col-sm-6'>
					<input type='text' class='form-control' name='joined' />
				</div>
			</div>
			<br />

			<div class='row'>
				<div class='col-sm-2'></div>
				<div class='col-sm-4'>
					<input type='submit' value='submit' class='btn btn-primary' />
				</div>
			</div>
		</div>
	</form>
@endsection
