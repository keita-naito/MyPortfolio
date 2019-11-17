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
        $news = News::find($request->id);
        if (empty($news)) {
            abort(404);
        }
        return view('news.details', ['news_form' => $news]);
    }
    
    public function index()
    {
        $post = News::all()->sortByDesc('id');
        return view('news.index', ['post' => $post]);
    }
}
