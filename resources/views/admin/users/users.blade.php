@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">Wiew Users 
	<a href="#" class="btn btn-primary btn-sm float-end">Add User</a>
  </h5>
  <div class="card-body">
  @if (@session('message'))
	<div class="alert alert-success">{{@session('message')}}</div>
	</div>
  @endif
   <table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $userItem)
			<tr>
				<td>{{$userItem->id}}</td>
				<td>{{$userItem->name}}</td>
				<td>{{$userItem->email}}</td>
				<td>{{$userItem->role_as}}</td>
				<td><a href="#" class="btn  btn-success">Edit <i class="fa-solid fa-pen-to-square"></i></a></td>
			</tr>
		@endforeach
	</tbody>
   </table>
  </div>
</div>
</div>
@endsection