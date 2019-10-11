@extends('layouts.home')

@section('title', 'お問い合わせフォーム')

@section('content')
    <form action="" method="post">
        <div class="contact-form">
            <h3 class="contact-title">お問い合わせ</h3>
            <label for="name" class="contact-text">お名前</label>
            <input class="box" type="text" id="name" name="name">
            <!--<h4 class="contact-text text-border">ご連絡について</h4>-->
            <!--<label><input  type="radio" name="method" value="tell">電話で折り返して欲しい</label>-->
            <!--<label><input  type="radio" name="method" value="mail">メールで折り返して欲しい</label>-->
            <label for="tel" class="contact-text">電話番号</label>
            <input class="box" type="number" id="tel" placeholder="半角、ハイフン無しでお願いします。" >
            <label for="mail" class="contact-text">メールアドレス</label>
            <input class="mail" type="email" id="mail" name="mail">
            <label for="contact" class="contact-text">お問い合わせ内容</label>
            <textarea id="contact" name="contact"></textarea>
            <button type="submit" name="form" value="form">送信する</button>
        </div>
    </form>
@endsection