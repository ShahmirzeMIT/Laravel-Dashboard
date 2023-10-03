<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CatagoryFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Catagory;
use Illuminate\Support\Str;

class CatagoryController extends Controller
{
    public function index(){
        $catagory=Catagory::paginate(5);
        return view('admin.catagory',compact('catagory'));
    }

    public function create(){
      return view('admin.catagory-add');
    }

    public function store(CatagoryFormRequest $request)
    {
        $data = $request->validated();
  
        $catagory = new Catagory;
        $catagory->name = $data['name'];
        $catagory->slug =Str::slug($data['slug']);
        $catagory->description = $data['description'];
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/image/catagory', $filename);
            $catagory->image = $filename;
        }
    
        $catagory->meta_title = $data['meta_title'];
        $catagory->meta_description = $data['meta_description'];
        $catagory->meta_keyword = $data['meta_keyword'];
        $catagory->navbar_status = $request->input('navbar_status') === '1';
        $catagory->status = $request->input('status') === '1';
        $catagory->created_by = Auth::user()->id;
        $catagory->save();
    
        return redirect('admin/catagory')->with("message", 'Category Added Successfully');
    }

    public function edit($catagory_id){
        $catagory=Catagory::find($catagory_id);
        return view('admin.catagory-edit',compact('catagory'));
    }

    public function update(CatagoryFormRequest $request,$catagory_id){
        $data = $request->validated();
  
        $catagory =Catagory::find($catagory_id);
        $catagory->name = $data['name'];
        $catagory->slug = Str::slug($data['slug']);
        $catagory->description = $data['description'];
    
        if ($request->hasFile('image')) {

            $destination='assets/image/catagory/'.$catagory->image;
            // dd($destination);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/image/catagory', $filename);
            $catagory->image = $filename;
        }
    
        $catagory->meta_title = $data['meta_title'];
        $catagory->meta_description = $data['meta_description'];
        $catagory->meta_keyword = $data['meta_keyword'];
        $catagory->navbar_status = $request->input('navbar_status') === '1';
        $catagory->status = $request->input('status') === '1';
        $catagory->created_by = Auth::user()->id;
        $catagory->update();
    
        return redirect('admin/catagory')->with("message", 'Category Updated Successfully');
    }
    

}
