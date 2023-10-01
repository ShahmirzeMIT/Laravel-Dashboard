@extends('layouts.master') @section('content') <div class="container-fluid">
	<div class="card my-5 m-auto">
		<div class="card-header"> Add News <a href="{{url('admin/bignews')}}" class="btn btn-danger float-end">Back</a>
		</div>
		<div class="card-body">
			@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<div>{{ $error }}</div>
				@endforeach
			</div>
			@endif
			<form action="{{url('admin/bignews-edit/'.$bignews->id)}}" method="post" enctype="multipart/form-data">
			@csrf 
			@method("PUT")
				<div class="mb-3">
					<label for="">News Id</label>
					<select name="news-id" class="form-control" id="">
							@foreach($news as $selectItems)
							<option value="{{$selectItems->id}}" {{$bignews->id==$selectItems->id?"selected":""}} >{{$selectItems->title}}</option>
							@endforeach
					</select>
				</div>
				<div class="mb-3">
					<label for="">Title</label>
					<input type="text" name="title" id="" value="{{$bignews->title}}" class="form-control">
				</div>
				<div class="mb-3">
					<label for="">Description</label>
					<textarea name="description"  value="" col="10" rows="10" class="form-control"
					>{{$bignews->description}}</textarea>
				</div
				<div class="mb-3">
					<label for="">Image</label>
					<input type="file" name="image" id="" class="form-control">
				</div>
				<div class="text-center"><button type="submit" class="btn btn-primary text-center">Add News</button></div>
			</form>
		</div>
	</div>
</div> @endsection