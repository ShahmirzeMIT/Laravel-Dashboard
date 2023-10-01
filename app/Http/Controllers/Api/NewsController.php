<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\NewsFormRequest;
use App\Models\Backend\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::all();
        return view('admin.news.news',compact('news'));
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

    public function edit($news_id){
        $news=News::find($news_id);
        return view('admin.news.news-edit',compact('news'));
    }

    public function update(NewsFormRequest $request, $news_id)
    {
        $data = $request->validated();
        $news = News::find($news_id);
    
        if (!$news) {
            return redirect()->back()->with('error', 'News not found.');
        }
    
        $news->title = $data['title'];
        $news->description = $data['description'];
        $news->status = $data['status'];
    
        if ($request->hasFile('image')) {
            $destination = 'assets/image/news/' . $news->image;
    
            if (File::exists($destination)) {
                File::delete($destination);
            }
    
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/image/news', $filename);
            $news->image = $filename;
        }
    
        $news->created_by = Auth::user()->id;
        $news->save();
    
        return redirect('admin/news')->with('message', 'News Updated Successfully');
    }
    
}
