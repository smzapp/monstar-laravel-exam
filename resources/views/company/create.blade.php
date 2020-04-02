@extends('layouts.app')
 
@section('content')
<div class="container justify-text-center">
	<div class="col-md-5">
		@if($errors->any())
			<div  class="alert alert-danger">
			    {{ implode('', $errors->all(':message')) }}
			</div>
		@endif
		<h3>Create Company</h3><hr>
		<form action="{{ route('company.store')}}" method="POST">
			@csrf
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control"><br>
			<label for="address">Address</label>
			<input type="text" name="address" id="address" class="form-control"><br>
			<label for="website">Website</label>
			<input type="text" name="website" id="website" class="form-control"><br>
			<input type="submit" value="Submit" name="submit" class="btn btn-primary">
		</form>
	</div>
</div>
@endsection