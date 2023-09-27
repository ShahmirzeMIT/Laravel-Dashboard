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
   <table id="myDataTable" class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>User_id</th>
			<th>Instagram</th>
			<th>X</th>
			<th>Linkedin</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
	  
	</tbody>
   </table>
  </div>
</div>
</div>
@endsection