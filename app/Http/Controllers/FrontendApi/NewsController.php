<?php

namespace App\Http\Controllers\FrontendApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\News;
class NewsController extends Controller
{
    public function index(){
        $news=News::all();
        if($news->count()>0 && $news->status==1){
            return response()->json([
                'status'=>200,
                'news'=>$news
            ],200);
        }
        else{
            return response()->json([
                'status'=>200,
                'news'=>"Don't have news"
            ],404);
        }
    }
}
