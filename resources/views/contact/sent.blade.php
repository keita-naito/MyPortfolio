@extends('layouts.home')

@section('title', '送信完了')

@section('content')

    <div class="contact-form">
        <h3 class="contact-title">お問い合わせ　送信完了</h3>
        <p class="finish">お問い合わせありがとうございました。<br>
        内容を確認のうえ、回答させて頂きます。<br>
        しばらくお待ちください。</p>
        <button type="button"><a class="after-sent" href="/">TOPへ戻る<a/></button>
    </div>
@endsection