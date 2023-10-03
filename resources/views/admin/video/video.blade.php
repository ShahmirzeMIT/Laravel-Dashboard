@extends('layouts.master')

@section('content')
<div class="container-fluid">

<div class="card mt-4">
  <h5 class="card-header">View Video 
	<a href="{{ url('admin/video-add') }}" class="btn btn-primary btn-sm float-end">Add Video</a>
  </h5>
  <div class="card-body">
  @if (session('message'))
	<div class="alert alert-success">{{ session('message') }}</div>
  @endif
   <table  class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Video</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($videos as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>
					@if (!is_null($item->video))
						@php
							$videoArray = json_decode($item->video);
						@endphp
						@if (is_array($videoArray) && count($videoArray) > 1)
							@foreach ($videoArray as $video)
								<video controls vidth="100%" height="300px">
									<source src="{{ asset('assets/video/' . $video) }}" type="video/mp4">
									Your browser does not support the video tag.
								</video><br>
							@endforeach
						@else
							<video controls vidth="100%" height="300px">
								<source src="{{ asset('assets/video/' . (is_array($videoArray) ? $videoArray[0] : $item->video)) }}" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						@endif
					@endif
				</td>
				<td>{{ $item->status }}</td>
			</tr>
		@endforeach
	</tbody>
   </table>
   <!-- Assuming you want pagination for videos -->
   {{ $videos->links('pagination::bootstrap-5') }}
  </div>
</div>
</div>
@endsection
