@extends('layouts.home')

@section('title', 'お問い合わせフォーム')

@section('content')
    <form action="" method="post">
        <div class="contact-form">
            <h3 class="contact-title">お問い合わせ</h3>
            <h4 class="contact-text">お名前</h4>
            <input class="box">
            <h4 class="contact-text text-border">ご連絡について</h4>
            <label><input  type="radio" name="method" value="tell">電話で折り返して欲しい</label>
            <label><input  type="radio" name="method" value="mail">メールで折り返して欲しい</label>
            <h4 class="contact-text">電話番号</h4>
            <input class="box" placeholder="半角、ハイフン無しでお願いします。" type="number">
            <h4 class="contact-text">メールアドレス</h4>
            <input class="mail" type="email">
            <h4 class="contact-text">お問い合わせ内容</h4>
            <textarea></textarea>
            <button type="submit" name="form" value="contact">送信する</button>
        </div>
    </form>
@endsection