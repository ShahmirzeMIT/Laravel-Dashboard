@extends('layouts.master') @section('content') <div class="container-fluid">
	<div class="card my-5 m-auto">
		<div class="card-header"> Add News <a href="{{url('admin/news')}}" class="btn btn-danger float-end">Back</a>
		</div>
		<div class="card-body">
			@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<div>{{ $error }}</div>
				@endforeach
			</div>
			@endif
			<form action="{{url('admin/news-edit/'.$news->id)}}" method="post" enctype="multipart/form-data">
			@csrf 
			@method("PUT")
				<div class="mb-3">
					<label for="">Title</label>
					<input type="text" name="title" id="" value="{{$news->title}}" class="form-control">
				</div>
				<div class="mb-3">
					<label for="">Description</label>
					<textarea name="description" id="my_summernote" value=""  rows="3" class="form-control"
					>{{$news->description}}</textarea>
				</div>
				<div class="mb-3">
					<label for="">Status</label>
					<select name="status" id="" class="form-control">
						<option value="0" {{ $news->status == 0 ? 'selected' : '' }}>0</option>
						<option value="1" {{ $news->status == 1 ? 'selected' : '' }}>1</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="">Image</label>
					<input type="file" name="image" id="" class="form-control">
				</div>
				<div class="text-center"><button type="submit" class="btn btn-primary text-center">Add News</button></div>
			</form>
		</div>
	</div>
</div> @endsection