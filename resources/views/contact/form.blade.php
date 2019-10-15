@extends('layouts.home')

@section('title', 'お問い合わせフォーム')

@section('content')
    <form action="{{ action('ContactController@confirm') }}" method="post">
        @csrf
        
        <div class="contact-form">
            <h3 class="contact-title">お問い合わせ</h3>
            
            <label for="name" class="contact-text">お名前</label>
             @if ($errors->has('name'))
                <p class="error-message">{{ $errors->first('name') }}</p>
            @endif
            <input class="box" type="text" id="name" name="name" value="{{ old('name') }}">
           
            
            <label for="tel" class="contact-text">電話番号</label>
            @if ($errors->has('tel'))
                <p class="error-message">{{ $errors->first('tel') }}</p>
            @endif
            <input class="box" type="number" id="tel" placeholder="半角、ハイフン無しでお願いします。"
            name="tel" value="{{ old('tel') }}">
            
            
            <label for="mail" class="contact-text">メールアドレス</label>
            @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
            <input class="mail" type="email" id="mail" name="email" value="{{ old('email') }}">
            
            
            
            <label for="body" class="contact-text">お問い合わせ内容</label>
            @if ($errors->has('body'))
                <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
            <textarea id="body" name="body" value="{{ old('body') }}"></textarea>
            
            
            
            <button type="submit" name="form" value="send">確認画面へ</button>
        </div>
    </form>
@endsection