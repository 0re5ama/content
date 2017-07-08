@extends('layouts.app')

@section('content')
	<div class='container'>
		<h2>{{ $emp->name }}</h2>
		<hr>

		<div class='col-sm-4'>
			<table class='table table-noborder table-striped'>
				<tbody>
					<tr>
						<td class='col-sm-4'>ID</td>
						<td>{{ $emp->id }}</td>
					</tr>

					<tr>
						<td>Year Joined</td>
						<td>{{ $emp->joined }}</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
@endsection
