@extends('layouts.master') @section('content') <div class="container-fluid">
	<div class="card my-5 m-auto">
		<div class="card-header"> Add News <a href="{{url('admin/blog')}}" class="btn btn-danger float-end">Back</a>
		</div>
		<div class="card-body">
			@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<div>{{ $error }}</div>
				@endforeach
			</div>
			@endif
			<form action="{{url('admin/blog-edit/'.$blog->id)}}" method="post" >
			@csrf 
			@method("PUT")
				<div class="mb-3">
					<label for="">Title</label>
					<input type="text" name="title" id="" value="{{$blog->title}}" class="form-control">
				</div>
				<div class="mb-3">
					<label for="">Description</label>
					<textarea name="description"  col="10" rows="10" class="form-control"
					>{{$blog->description}}</textarea>
				</div>
				<div class="mb-3">
					<label for="">Status</label>
					<select name="status" id="" class="form-control">
						<option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>0</option>
						<option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>1</option>
					</select>
				</div>
				<div class="text-center"><button type="submit" class="btn btn-primary text-center">Add News</button></div>
			</form>
		</div>
	</div>
</div> @endsection