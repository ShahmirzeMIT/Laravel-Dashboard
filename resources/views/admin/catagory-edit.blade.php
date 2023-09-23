@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card mt-3">
        <h3 class="card-header">Category Edit</h3>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('admin/catagory-edit/'.$catagory->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="keepCatData">
                    <div class="mb-3">
                        <label for="" class="mb-2">Category Name</label>
                        <input type="text" name="name" value="{{ $catagory->name }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Slug</label>
                        <input type="text" name="slug" value="{{ $catagory->slug }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Description</label>
                        <input type="text" name="description" value="{{ $catagory->description }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Image</label>
                        <input type="file" name="image"  value="{{ $catagory->image }}" class="form-control">
                    </div>
                </div>
                <div class="keepCatMeta">
                    <h5>SEO Tags</h5>
                    <div class="mb-3">
                        <label for="" class="mb-2">Meta Title</label>
                        <input type="text" name="meta_title" value="{{ $catagory->meta_title }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Meta Description</label>
                        <textarea name="meta_description"  rows="3" class="form-control">{{$catagory->meta_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Meta Keywords</label>
                        <textarea type="text" rows="3" name="meta_keyword" class="form-control">
				    {{$catagory->meta_keyword}}
				    </textarea>
                    </div>
                    <h5>Status Mode</h5>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="" class="mb-2">Navbar Status</label>
                            <input type="checkbox" name="navbar_status" {{$catagory->navbar_status==1?'checked':''}} value="1" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="mb-2">Status</label>
                            <input type="checkbox" name="status" {{$catagory->status==1?'checked':''}} value="1" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
