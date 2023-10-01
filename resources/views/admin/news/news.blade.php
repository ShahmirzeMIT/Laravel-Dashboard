@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">Wiew News 
	<a href="{{url('admin/news-add')}}" class="btn btn-primary btn-sm float-end">Add News</a>
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
			<th>Image</th>
			<th>Created-By</th>
			<th>Status</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
	  @foreach($news as $mynews)
			<tr>
				<td>{{$mynews->id}}</td>
				<td>{{$mynews->title}}</td>
				<td>{{$mynews->description}}</td>
				<td>
				<img src="{{ asset('assets/image/news/' . $mynews->image) }}" alt="" width="90px" height="90px">
				</td>
				<td>{{$mynews->created_by}}</td>
				<td>{{$mynews->status}}</td>
				<td> <a href="{{url('admin/news-edit/'.$mynews->id)}}" style="text-decoration: none;padding: 0 10px; color: green;text-align: center;">Edit <i class="fa-solid fa-pen-to-square"></i></a></td>
			</tr>
	  
	  @endforeach
	</tbody>
   </table>
  </div>
</div>
</div>
@endsection