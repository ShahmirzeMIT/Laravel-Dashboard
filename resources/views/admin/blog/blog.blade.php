@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">Wiew Blog 
	<a href="{{url('admin/blog-add')}}" class="btn btn-primary btn-sm float-end">Add News</a>
  </h5>
  <div class="card-body">
  @if (@session('message'))
	<div class="alert alert-success">{{@session('message')}}</div>
	</div>
  @endif
   <table id="myDataTable" class="table table-bordered">
   <thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Status</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach($blog as $items)
			<tr>
				<th>{{$items->id}}</th>
				<th>{{$items->title}}</th>
				<th>{{$items->description}}</th>
				<th>{{$items->status}}</th>
				<th><a href="{{url('admin/blog-edit/'.$items->id)}}" class="btn btn-success">Edit <i class="fa-solid fa-pen-to-square"></i></a></th>
			</tr>
		@endforeach
	</tbody>
   </table>
  </div>
</div>
</div>
@endsection