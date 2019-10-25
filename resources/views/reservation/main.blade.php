@extends('layouts.home')

@section('title', '予約画面')

@section('content')
    <div class="reservation-page">
        <h2>予約画面</h2>
        <div class="reservation-wrapper">
            <iframe class ="reservation-form" src="https://docs.google.com/forms/d/e/1FAIpQLScxyCeugVzDQPEIQABOUVIOG09-uVFBjZf50rqlaW7M9FB88A/viewform?embedded=true" width="50%" height="600" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
            <iframe src="https://calendar.google.com/calendar/embed?src=etl9g7pdqok7ujkc4v3g35l8co%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="50%" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
@endsection