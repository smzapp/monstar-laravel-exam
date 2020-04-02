@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="col-md-12">
			<h3>List of Companies</h3>
			<a href="{{ route('company.create') }}">Create new</a>
			<div class="card-body">
				<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
						<th>Website</th>
						<th colspan="3" class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach($companies as $comp)
					<tr>
						<td>{{ $comp->id }}</td>
						<td>{{ $comp->name }}</td>
						<td>{{ $comp->address }}</td>
						<td>{{ $comp->website }}</td>
						<td><a href="{{ route('company.edit', $comp->id)}}" class="btn btn-warning">Edit</a></td>
						<td>
						<form action="{{ route('company.destroy', $comp->id)}}" method="post">
						@csrf
						<input name="_method" type="hidden" value="DELETE">
						<button class="btn btn-danger" type="submit">Delete</button>
						</form>
						</td>
						<td>
							<a href="{{ route('company.show', $comp->id) }}" class="btn btn-primary">Show Details</a>
						</td>
					</tr>
				@endforeach
				</tbody>
				</table>
				{{ $companies->links() }}
			</div>
		</div>
	</div>
@endsection