<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginationsConroller extends Controller
{
    public function index(){
        return view('admin.pagination');
    }
}
