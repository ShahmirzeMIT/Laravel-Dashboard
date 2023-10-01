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
	  
	</tbody>
   </table>
  </div>
</div>
</div>
@endsection