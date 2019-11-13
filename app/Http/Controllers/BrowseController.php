<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\News;

class BrowseController extends Controller
{
    public function browse(Request $request)
    {   
        // 全てのnewsテーブルを取得して降順に並び替える
        $posts = \DB::table('news')->get();
         
        return view('news.details', ['posts' => $posts]);
    }
}
