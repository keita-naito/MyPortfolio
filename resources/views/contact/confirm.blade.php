@extends('layouts.home')

@section('title', 'お問い合わせ確認画面')

@section('content')

    <form action="{{ action('ContactController@finish') }}" method="post">
        @csrf
    
        <div class="contact-form">
            <h3 class="contact-title">お問い合わせ内容の確認</h3>
            
            <div class="confirm">
                <label for="name" class="contact-text">お名前</label>
                <p class="confirm-message"> {{ $inputs['name'] }} </p>
                <input class="box" type="hidden" id="name" name="name" value="{{ $inputs['name'] }}">
            
                
                <label for="tel" class="contact-text">電話番号</label>
                <input class="box" type="hidden" id="tel" placeholder="半角、ハイフン無しでお願いします。"
                name="tel" value="{{ $inputs['tel'] }}">
                <p class="confirm-message"> {{ $inputs['tel'] }} </p>
                
                <label for="mail" class="contact-text">メールアドレス</label>
                <input class="mail" type="hidden" id="mail" name="email" value="{{ $inputs['email'] }}">
                <p class="confirm-message"> {{ $inputs['email'] }} </p>
                
                
                <label for="body" class="contact-text">お問い合わせ内容</label>
                <input id="body" type="hidden" name="body" value="{{ $inputs['body'] }}">
                <p class="confirm-message"> {{ $inputs['body'] }} </p>
            </div>
            
            <button class="correction" type="submit" name="form" value="back">入力内容修正</button>
            <button class="submit" type="submit" name="form" value="send">送信する</button>
        </div>
    </form>
@endsection