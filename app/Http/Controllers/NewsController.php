<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function add ()
    {
        return view('news.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, News::$rules);
        
        $news = new News;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $news->image_path = basename($path);
        } else {
            $news->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $news->fill($form);
        $news->save();
        
        return redirect('news/create');
    }
}


