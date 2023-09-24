@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">Edit User
	<a href="{{url('admin/users')}}" class="btn btn-danger btn-sm float-end">Back</a>
  </h5>
  <div class="card-body">
	
	
		<div class="mb-3">
			<label for="">Name</label>
			<p class="form-control">{{$user->name}}</p>
		</div>
		<div class="mb-3">
			<label for="">Email</label>
			<p class="form-control">{{$user->email}}</p>
		</div>
		<div class="mb-3">
			<label for="">Created At</label>
			<p class="form-control">{{$user->created_at->format('d/M/Y')}}</p>
		</div>
	<form ction="{{ url('admin/users/'.$user->id) }}" method="post">
		@csrf
		@method("PUT")
		<div class="mb-3">
			<label for="">Role as</label>
			<select name="role_as" class="form-control" id="">
				<option value="1" {{$user->role_as==1?"selected":''}}> Admin</option>
				<option value="0" {{$user->role_as==0?"selected":''}}>  User</option>
				<option value="2" {{$user->role_as==2?"selected":''}}> Blogger</option>
			</select>
		</div>
		<div class="mb-3 text-center">
			<button type="submit" class="btn btn-primary ">Update</button>
		</div>
	</form>
  </div>
</div>
</div>
@endsection