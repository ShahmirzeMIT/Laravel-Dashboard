@extends('layouts.master') 
@section('content') 
<div class="container-fluid">
	<div class="card mt-3">
		<h3 class="card-header">Image Add</h3>
		<div class="card-body"> 
			@if($errors->any()) <div class="alert alert-danger">
				 @foreach($errors->all() as $error)
				 <div>{{ $error }}</div>
				  @endforeach 
				</div> 
				@endif 
				<form action="{{url('admin/images-add')}}" method="post" enctype="multipart/form-data"> 
				@csrf <div class="mb-3">
					<label for="" class="mb-2">Image</label>
					<input type="file" name="image[]" id="" multiple class="form-control" accept="image/jpeg, image/jpg, image/png">
				</div>
				<div class="mb-3">
					<label for="">Status</label>
					<select name="status" id="" class="form-control">
						<option value="0">0</option>
						<option value="1">1</option>
					</select>
				</div>
				<div class="col-md-3 mb-3">
					<button type="submit" class="btn btn-primary">Save Image</button>
				</div>
		</div>
	</div>
	</form>
</div>
</div>
</div> @endsection