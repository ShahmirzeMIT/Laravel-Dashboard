<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BigNewsFromRequest;
use App\Models\Backend\News;
use App\Models\Backend\BigNews;

class BigNewsController extends Controller
{
  public function index(){
    $bignews=BigNews::paginate(1);
    return view('admin.bignews.bignews',compact('bignews'));
  }
  public function create(){
    $news=News::where('status',1)->get();
    return view('admin.bignews.bignews-add',compact('news'));
  }
  
  public function store(BigNewsFromRequest $request){
    $data=$request->validated();
    $existingBigNews = BigNews::where('news_id', $data['news-id'])->first();
    if ($existingBigNews) {
        return redirect('admin/bignews')->with("message", "News ID already exists for a BigNews.");
    }
    $bignews=new BigNews;
    $bignews->news_id=$data['news-id'];
    $bignews->title=$data['title'];
    $bignews->description=$data['description'];
    if($request->hasFile('image')){
      $file=$request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $file->move('assets/image/bignews', $filename);
      $bignews->image=$filename;
    }

    $bignews->save();
    return \redirect('admin/bignews')->with("message","BigNews Created Successfully");

  }

  public function edit($bignews_id){
    $bignews=BigNews::find($bignews_id);
    $news=News::where('status',1)->get();
    return view('admin.bignews.bignews-edit',compact('bignews','news'));
  }
  public function update(BigNewsFromRequest $request,$bignews_id){
    $data=$request->validated();
    $bignews=BigNews::find($bignews_id);
    if ($bignews->news_id !== $data['news-id']) {
        $existingBigNews = BigNews::where('news_id', $data['news-id'])->first();
        if ($existingBigNews) {
            return redirect('admin/bignews')->with('message', 'News ID already exists for a BigNews.');
        }
    }
    $bignews->news_id = $data['news-id'];
    $bignews->title=$data['title'];
    $bignews->description=$data['description'];
    if ($request->hasFile('image')) {
      $destination = 'assets/image/bignews/' . $bignews->image;

      if (File::exists($destination)) {
          File::delete($destination);
      }

      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $file->move('assets/image/bignews', $filename);
      $bignews->image = $filename;
    }
    $bignews->update();
    return \redirect('admin/bignews')->with('message','Bignews Updated Successfully');
  }
}
