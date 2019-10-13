<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function form()
    {
        return view('contact/form');
    }
    
    public function confirm()
    {
        // バリデーションを実行、結果に問題があったら中断してエラーを返す
        $request->validate([
            'name' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'body' => 'required',
        ]);
        
        // フォームから受け取った全てのinputの値を取得
        $inputs = $request->all();
        
        // 内容確認ページのviewに変数を渡して表示
        return view('contact/confirm', [
            'inputs' => $inputs,
        ]);
    }
    
    public function finish()
    {
        return view('contact/sent');
    }
}
