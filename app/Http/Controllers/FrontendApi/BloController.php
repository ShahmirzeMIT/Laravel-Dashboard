<?php

namespace App\Http\Controllers\FrontendApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\BLog;

class BloController extends Controller
{
    public function index(){
        $blog=BLog::all();
        if($blog->count()>0 ){
            return response()->json([
                'status'=>200,
                'blog'=>$blog
            ],200);
        }
        else{
            return response()->json([
                'status'=>200,
                'news'=>"Don't have blog"
            ],404);
        }
    }
}
