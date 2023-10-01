@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card my-5 m-auto">
        <div class="card-header">
            Add News
            <a href="{{ url('admin/bignews') }}" class="btn btn-danger float-end">Back</a>
        </div>
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
            <form action="{{ url('admin/bignews-add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="news-id">News-id</label>
                    <select name="news-id" class="form-control" id="news-id">
                        @foreach($news as $selectItem)
                        <option value="{{ $selectItem->id }}">{{ $selectItem->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" rows="10" cols="10" class="form-control" id="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add Big News</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
