@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">Wiew Catagory 
	<a href="{{url('admin/catagory-add')}}" class="btn btn-primary btn-sm float-end">Add Catagory</a>
  </h5>
  <div class="card-body">
  @if (@session('message'))
	<div class="alert alert-success">{{@session('message')}}</div>
	</div>
  @endif
   <table " class="table table-bordered my-2">
	<thead>
		<tr>
			<th>Id</th>
			<th>Catagory Name</th>
			<th>Image</th>
			<th>Status</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
	   @foreach($catagory as $item)
	   <tr>
		<td>{{$item->id}}</td>
		<td>{{$item->name}}</td>
		<td><img src="{{ asset('assets/image/catagory/' . $item->image) }}" width="60px" height="60px" alt=""></td>
		<td>{{$item->status=='1'?'hidden':'shown'}}</td>
		<td><a href="{{url('admin/catagory-edit/'.$item->id)}}" class="btn btn-success mt-3">Edit <i class="fa-solid fa-pen-to-square"></i></a></td>
	   </tr>
	   @endforeach
	</tbody>
   </table>
   {{$catagory->links('pagination::bootstrap-5')}}
  </div>
</div>
</div>
@endsection