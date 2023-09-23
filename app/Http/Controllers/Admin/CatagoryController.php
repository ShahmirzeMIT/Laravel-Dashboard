<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CatagoryFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Catagory;
class CatagoryController extends Controller
{
    public function index(){
        $catagory=Catagory::all();
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
        $catagory->slug = $data['slug'];
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
    

}
