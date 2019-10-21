@extends('layouts.home')

@section('title', '予約画面')

@section('content')
    <div class="calendar">
        <h2>予約画面</h2>
        <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=OHQ2cm1ubDMzZmw3azNuNzJyZzUydWlsaWdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%238E24AA&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0&amp;showPrint=0&amp;mode=WEEK" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    
@endsection