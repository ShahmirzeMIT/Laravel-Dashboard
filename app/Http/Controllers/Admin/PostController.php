<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\POst;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PostFormRequest;

class PostController extends Controller
{
  public function index(){
    $posts=POst::all();
    return view('admin.post.index',compact('posts'));
  }

  public function create(){
    $catagory=Catagory::where('status',0)->get();

    return view('admin.post.create',compact('catagory'));
  }

 public function store(PostFormRequest $request){
   $data=$request->validated();
   $post=new POst;
   $post->catagory_id=$data['catagory_id'];
   $post->name=$data['name'];
   $post->slug=$data['slug'];
   $post->description=$data['description'];
   $post->yt_iframe=$data['yt_iframe'];
   $post->meta_title=$data['meta_title'];
   $post->meta_description=$data['meta_description'];
   $post->meta_keyword=$data['meta_keyword'];
   $post->status = $request->input('status') === '1';
   $post->created_by=Auth::user()->id;
   $post->save();
   return redirect("admin/posts")->with('message',"Post Successfuly Created");
  }

}
