@extends('layouts.home')

@section('title', 'お問い合わせフォーム')

@section('content')
    <form action="{{ route('contact.confirm" method="post">
        @csrf
        
        <div class="contact-form">
            <h3 class="contact-title">お問い合わせ</h3>
            
            <label for="name" class="contact-text">お名前</label>
            <input class="box" type="text" id="name" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <p class="error-message">{{ $errors->first('name') }}</p>
            @endif
            
            <label for="tel" class="contact-text">電話番号</label>
            <input class="box" type="number" id="tel" 
            placeholder="半角、ハイフン無しでお願いします。" value="{{ old('tel') }}">
            @if ($errors->has('tel'))
                <p class="error-message">{{ $errors->first('tel') }}</p>
            @endif
            
            <label for="mail" class="contact-text">メールアドレス</label>
            <input class="mail" type="email" id="mail" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
            
            
            <label for="contact" class="contact-text">お問い合わせ内容</label>
            <textarea id="contact" name="contact" value="{{ old('body') }}"></textarea>
            @if ($errors->has('body'))
                <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
            
            <button type="submit" name="form" value="send">送信する</button>
        </div>
    </form>
@endsection