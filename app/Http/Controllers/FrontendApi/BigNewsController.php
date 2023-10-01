<?php

namespace App\Http\Controllers\FrontendApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\BigNews;
class BigNewsController extends Controller
{
    public function index($news_id)
    {
        $bignews = BigNews::where('news_id', $news_id)->with('news')->get();
        return response()->json([
            'status' => 200,
            'bignews' => $bignews
        ], 200);
    }
}
