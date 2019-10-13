@extends('layouts.home')

@section('title', 'お問い合わせ確認画面')

@section('content')

    <form action="{{ route('contact.sent) }}">
        @csrf
    
        <div class="contact-form">
            <h3 class="contact-title">お問い合わせ</h3>
            
            <label for="name" class="contact-text">お名前</label>
            {{ $inputs['name'] }}
            <input class="box" type="hidden" id="name" name="name" value="{{ $inputs['name'] }}">
        
            
            <label for="tel" class="contact-text">電話番号</label>
            <input class="box" type="hidden" id="tel" 
            placeholder="半角、ハイフン無しでお願いします。" value="{{ $inputs['tel'] }}">
            {{ $inputs['tel'] }}
            
            <label for="mail" class="contact-text">メールアドレス</label>
            <input class="mail" type="hidden" id="mail" name="email" value="{{ $inputs['email'] }}">
            {{ $inputs['email'] }}
            
            
            <label for="contact" class="contact-text">お問い合わせ内容</label>
            <textarea id="contact" type="hidden" name="contact" value="{{ $inputs['body'] }}"></textarea>
            {{ $inputs['body'] }}
            
            <button type="submit" name="form" value="back">入力内容修正</button>
            <button type="submit" name="form" value="send">送信する</button>
        </div>
    </form>
@endsection