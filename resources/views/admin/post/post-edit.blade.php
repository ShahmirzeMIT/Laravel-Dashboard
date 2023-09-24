@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card mt-3">
        <h3 class="card-header">Post Edit
		<a href="{{url('admin/posts')}}" class="btn btn-danger float-end">Back</a>
	   </h3>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{url('admin/post-edit/'.$posts->id)}}" method="post" >
                @csrf
			 @method("PUT")
			 <div class="keepCatData">
					<div class="mb-3">
						<label for="">Catagory</label>
						<select name="catagory_id" class="form-control" id="">
							<option value="">-- Select Catagory --</option>
							@foreach($catagory as $selectItems)
							<option value="{{$selectItems->id}}" {{$posts->id==$selectItems->id?"selected":""}} >{{$selectItems->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label for="">Post Name</label>
						<input type="text" name="name" value="{{$posts->name}}" class="form-control">
					</div>
					<div class="mb-3">
						<label for="">Slug</label>
						<input type="text" name="slug" value="{{$posts->slug}}" class="form-control">
					</div>
					
					<div class="mb-3">
						<label for="">Youtube Iframe Link</label>
						<input type="text" name="yt_iframe" value="{{$posts->yt_iframe}}" class="form-control">
					</div>
					<div class="mb-3 desc">
						<label for="">Description</label>
						<textarea name="description" id="my_summernote"  rows="3" class="form-control ">{{$posts->description}}</textarea>
					</div>
				</div>
				<div class="keepCatMeta">
					<h5>Seo Tags</h5>
					<div class="mb-3">
						<label for="">Meta Title</label>
						<input type="text" name="meta_title" value="{{$posts->meta_title}}" class="form-control">
					</div>
					<div class="mb-3">
						<label for="">Meta Description</label>
						<input type="text" name="meta_description" value="{{$posts->meta_description}}" class="form-control">
					</div>
					<div class="mb-3">
						<label for="">Meta Keyword</label>
						<input type="text" name="meta_keyword" value="{{$posts->meta_keyword}}" class="form-control">
					</div>
					<h4>Status</h4>
					<div class="row">
						<div class="col-md-4">
							<div class="mb3">
								<label for="">Status</label>
								<input type="checkbox" name="status"  id="" value="1" />
							</div>
						</div>
						<div class="col-md-8">
							<div class="mb3">
								<button type="submit" class="btn btn-primary float-end">Update Post</button>
							</div>
						</div>
					</div>
				</div>
        
            </form>
        </div>
    </div>
</div>
@endsection
