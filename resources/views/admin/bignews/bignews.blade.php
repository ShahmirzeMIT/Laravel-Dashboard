@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">Wiew News 
	<a href="{{url('admin/bignews-add')}}" class="btn btn-primary btn-sm float-end">Add Big News</a>
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
			<th>News-id </th>
			<th>Title</th>
			<th>Description</th>
			<th>Image</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach($bignews as $items)
		<tr>
			<td>{{$items->id}}</td>
			<td>{{$items->news_id}}{{'      '}}</td>
			<td>{{$items->title}}</td>
			<td>{{$items->description}}</td>
			<td> <img src="{{ asset('assets/image/bignews/' . $items->image) }}" alt="" width="90px" height="90px"></td>
			<td>
				<a href="{{url('admin/bignews-edit/'.$items->id)}}" class="btn btn-success">
					Edit <i class="fa-solid fa-pen-to-square"></i>
				</a>
			</td>	
		</tr>
		
		@endforeach
	</tbody>
	<tbody>
	
	</tbody>
   </table>
   {{$bignews->links('pagination::bootstrap-5')}}
  </div>
</div>
</div>
@endsection