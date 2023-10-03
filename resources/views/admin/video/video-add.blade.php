@extends('layouts.master') 
@section('content') 
<div class="container-fluid">
	<div class="card mt-3">
		<h3 class="card-header">Video Add</h3>
		<div class="card-body"> 
			@if($errors->any()) <div class="alert alert-danger">
				 @foreach($errors->all() as $error)
				 <div>{{ $error }}</div>
				  @endforeach 
				</div> 
				@endif 
				<form action="{{url('admin/video-add')}}" method="post" enctype="multipart/form-data"> 
				@csrf <div class="mb-3">
					<label for="" class="mb-2">Video</label>
					<input type="file" name="video[]" id="" multiple class="form-control">
				</div>
				<div class="mb-3">
					<label for="">Status</label>
					<select name="status" id="" class="form-control">
						<option value="0">0</option>
						<option value="1">1</option>
					</select>
				</div>
				<div class="col-md-3 mb-3">
					<button type="submit" class="btn btn-primary">Save Video</button>
				</div>
		</div>
	</div>
	</form>
</div>
</div>
</div> @endsection