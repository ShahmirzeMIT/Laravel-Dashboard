@extends('layouts.master')  @section('content') <div class="container-fluid">
	<div class="card mt-4">
		<div class="card-header">
			<h5>Add Posts </h5>
		</div>
		<div class="card-body">
			<form action="{{url('admin/posts-add')}}" method="POST">
			@csrf
				<div class="keepCatData">
					<div class="mb-3">
						<label for="">Catagory</label>
						<select name="catagory_id" class="form-control" id="">
							@foreach($catagory as $selectItems)
							<option value="{{$selectItems->id}}">{{$selectItems->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="mb-3">
						<label for="">Post Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="mb-3">
						<label for="">Slug</label>
						<input type="text" name="slug" class="form-control">
					</div>
					
					<div class="mb-3">
						<label for="">Youtube Iframe Link</label>
						<input type="text" name="yt_iframe" class="form-control">
					</div>
					<div class="mb-3 desc">
						<label for="">Description</label>
						<textarea name="description" id="my_summernote"  rows="3" class="form-control"></textarea>
					</div>
				</div>
				<div class="keepCatMeta">
					<h5>Seo Tags</h5>
					<div class="mb-3">
						<label for="">Meta Title</label>
						<input type="text" name="meta_title" class="form-control">
					</div>
					<div class="mb-3">
						<label for="">Meta Description</label>
						<input type="text" name="meta_description" class="form-control">
					</div>
					<div class="mb-3">
						<label for="">Meta Keyword</label>
						<input type="text" name="meta_keyword" class="form-control">
					</div>
					<h4>Status</h4>
					<div class="row">
						<div class="col-md-4">
							<div class="mb3">
								<label for="">Status</label>
								<input type="checkbox" name="status" id="" value="1" />
							</div>
						</div>
						<div class="col-md-8">
							<div class="mb3">
								<button type="submit" class="btn btn-primary float-end">Save Post</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div> @endsection