@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">View Images 
	<a href="{{ url('admin/images-add') }}" class="btn btn-primary btn-sm float-end">Add Image</a>
  </h5>
  <div class="card-body">
  @if (session('message'))
	<div class="alert alert-success">{{ session('message') }}</div>
  @endif
   <table  class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Images</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($images as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>
					@if (!is_null($item->image))
						@php
							$imageArray = json_decode($item->image);
						@endphp
						@if (is_array($imageArray) && count($imageArray) > 1)
							@foreach ($imageArray as $image)
								<img src="{{ asset('assets/image/images/' . $image) }}" alt="" width="90px" height="90px">
							@endforeach
						@else
							<img src="{{ asset('assets/image/images/' . (is_array($imageArray) ? $imageArray[0] : $item->image)) }}" alt="" width="90px" height="90px">
						@endif
					@endif
				</td>
				<td>{{ $item->status }}</td>
			</tr>
		@endforeach
	</tbody>
   </table>
   {{$images->links('pagination::bootstrap-5')}}
  </div>
</div>
</div>
@endsection
