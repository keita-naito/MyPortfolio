<?php

namespace App\Http\Controllers;

use App\Mail\ContactSendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form()
    {
        return view('contact/form');
    }
    
    public function confirm(Request $request)
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
    
    public function finish(Request $request)
    {
        $inputs = $request->all();
        
        Mail::to('atiek.nn.xx@gmail.com')->send(new ContactSendmail($inputs));
        
        // 二重送信防止の為トークンを再生成
        $request->session()->regenerateToken();
        
        return view('contact/sent');
    }
}
