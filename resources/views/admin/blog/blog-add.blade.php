@extends('layouts.master') @section('content') <div class="container-fluid">
	<div class="card my-5 m-auto">
		<div class="card-header"> Add Blog <a href="{{url('admin/news')}}" class="btn btn-danger float-end">Back</a>
		</div>
		<div class="card-body">
			@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<div>{{ $error }}</div>
				@endforeach
			</div>
			@endif
			<form action="{{url('admin/blog-add')}}" method="post" >
			@csrf 
				<div class="mb-3">
					<label for="">Title</label>
					<input type="text" name="title" id="" class="form-control">
				</div>
				<div class="mb-3">
					<label for="">Description</label>
					<textarea name="description"  rows="10" col="10" class="form-control"
					></textarea>
				</div>
				<div class="mb-3">
					<label for="">Status</label>
					<select name="status" id="" class="form-control">
						<option value="0">0</option>
						<option value="1">1</option>
					</select>
				</div>
				<div class="text-center"><button type="submit" class="btn btn-primary text-center">Add Blog</button></div>
			</form>
		</div>
	</div>
</div> @endsection