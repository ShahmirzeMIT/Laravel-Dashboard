<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BlogFormRequest;
use App\Models\Backend\Blog;


class BlogController extends Controller
{
    public function index(){
        $blog=Blog::paginate(2);
        return view('admin.blog.blog',compact('blog'));
    }

    public function create(){
        return view('admin.blog.blog-add');
    }

    public function store(BlogFormRequest $request){
        $data=$request->validated();
        $blog=new Blog;
        $blog->title=$data['title'];
        $blog->description=$data['description'];
        $blog->status=$data['status'];
        $blog->save();
        return \redirect('admin/blog')->with('message','Created Blog Successfully');
    }

    public function edit($blog_id){
        $blog=Blog::find($blog_id);
        return view('admin.blog.blog-edit',compact('blog'));
    }

    public function update(BlogFormRequest $request,$blog_id){
        $data=$request->validated();
        $blog=Blog::find($blog_id);
        $blog->title=$data['title'];
        $blog->description=$data['description'];
        $blog->status=$data['status'];
        $blog->update();
        return \redirect('admin/blog')->with('message','Updated Blog Successfully');
    }

}
