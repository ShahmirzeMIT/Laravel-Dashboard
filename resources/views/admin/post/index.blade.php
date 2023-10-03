@extends('layouts.master')
@section('title',"View  Post")
@section('content')
<div class="container-fluid">
<div class="card mt-4">
	<div class="card-header">
		<h5>View Posts
			<a href="{{url('admin/posts-add')}}" class="btn btn-primary float-end">Add Post</a>
		</h5>
	</div>
	<div class="card-body">
	@if (@session('message'))
	<div class="alert alert-success">{{@session('message')}}</div>
	</div>
	@endif
		<table  class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Catagory</th>
					<th>Post Name</th>
					<th>Status</th> 
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $postItem)
				<tr>
					<td>{{$postItem->id}}</td>
					<td>{{$postItem->catagory->name}}</td>
					<td>{{$postItem->name}}</td>
					<td>{{$postItem-> status == 1 ?"Hidden ":"Visible"}}</td>
					<td><a href="{{url('admin/post-edit/'.$postItem->id)}}" class="btn btn-success">Edit <i class="fa-solid fa-pen-to-square"></i> </a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$posts->links('pagination::bootstrap-5')}}
	</div>
</div>
</div>
@endsection
