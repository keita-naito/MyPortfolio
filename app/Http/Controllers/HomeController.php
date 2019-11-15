<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
class HomeController extends Controller
{
    public function browse()
    {
        $posts = \App\News::orderBy('id', 'desc')->take(3)->get();
        $error = array();
        return view('top',['posts' => $posts, 'error' => $error]);
    }
    
    public function login()
    {
        return view('login');
    }
}
