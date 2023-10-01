<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\NewsFormRequest;
use App\Models\Backend\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.news');
    }

    public function create()
    {
        return view('admin.news.news-add');
    }

    public function store(NewsFormRequest $request)
    {
        $data = $request->validated();
    $mynews = new News;
    $mynews->title = $data['title'];
    $mynews->description = $data['description'];
    $mynews->status=$data['status'];
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/image/news', $filename);
            $mynews->image=$filename;
        }
        $mynews->created_by=Auth::user()->id;
        $mynews->save();
        return redirect('admin/news')->with('message','Created Suuccesfully');
    }
}
