@extends('layouts.app')


@section('content')
	<div class="container justify-text-center">
		<div class="col-md-6">
			<h4>Company Details</h4>
			<table class="table table-striped">
				<tr>
					<td>Name :</td><td>{{ $comp->name }}</td>
				</tr>
				<tr>
					<td>Address :</td><td>{{ $comp->address }}</td>
				</tr>
				<tr>
					<td>Website :</td><td>{{ $comp->website }}</td>
				</tr>
			</table>
			<a href="{{ route('company.list') }}">Go back</a>
		</div>
	</div>
@endsection