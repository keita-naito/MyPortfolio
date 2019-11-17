<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
class HomeController extends Controller
{
    public function browse()
    {
        $posts = News::orderBy('id', 'desc')->take(3)->get();
        
        return view('top',['posts' => $posts]);
    }
    
    public function login()
    {
        return view('login');
    }
}
