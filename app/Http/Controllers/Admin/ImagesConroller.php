<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;
use App\Http\Requests\Admin\ImageFormRequest;
use Illuminate\Support\Facades\File;


class ImagesConroller extends Controller
{
    public function index(){
        $images = Images::paginate(3);
        return view('admin.image.images', ['images' => $images]);
    }

    public function create(){
        return view('admin.image.images-add');
    }

    public function store(ImageFormRequest $request)
    {
        // dd($request->all()); 
        
        $data = $request->validated();
        foreach ($request->file('image') as $image) {
            $images = new Images;
            $images->status = $data['status'];
            $filename = time() . '.' . $image->getClientOriginalName();
            $image->move('assets/image/images', $filename);
            $images->image = $filename;
    
            $images->save();
        }
    
        return redirect('admin/images')->with('message', "Create Images Successfully");
    }
    
}
