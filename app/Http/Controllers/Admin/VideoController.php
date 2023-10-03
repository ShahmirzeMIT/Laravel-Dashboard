<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Requests\Admin\VideoFormRequest;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    public function index(){
        $videos=Video::paginate(3);
        return view('admin.video.video',compact('videos'));
    }

    public function create(){
        return view('admin.video.video-add');
    }

    public function store(VideoFormRequest $request){
        $data=$request->validated();
        
        foreach ($request->file('video') as $videoFile) {
            $video = new Video;
            $video->status = $data['status'];
            $filename = time() . '.' . $videoFile->getClientOriginalName();
            $videoFile->move('assets/video', $filename);
            $video->video = $filename;
    
            $video->save();
        }
        return \redirect('admin/video')->with('message','Video Created Succesfully');
    }
}
