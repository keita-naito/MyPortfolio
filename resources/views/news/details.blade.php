@extends('layouts.detail')

@section('title', 'Beauty salon')

@section('content')
        <div class="container mx-auto" style="height:800px; padding-top:200px;">
            <div class="row">
                    <div class="image col-md-6">
                        <img src="{{ asset('storage/image/' . $news_form->image_path) }}">
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-2">
                        <h1>{{ $news_form->title }}</h1>
                    </div>
                    <div class="col-md-6 offset-md-2">
                        <h1>{{ $news_form->title }}</h1>
                    </div>
            </div>
            <div class="row">
                    <div class="day col-md-6">
                    
                    </div>
            </div>
            <div class="row">
                    <p class="body col-md-6" style="font-size: 20px;">
                        {{ $news_form->body }}
                    </p>
            </div>
                
        </div>
            
@endsection
     
