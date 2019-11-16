@extends('layouts.detail')

@section('title', 'Beauty salon')

@section('content')
        <div class="container mx-auto pb-5" style="height:auto; padding-top:200px;">
            <div class="bg-light pt-3">
                
                <div class="row">
                        <div class="image col-md-8 mx-auto">
                            <img class="img-fluid" src="{{ secure_asset('storage/image/' . $news_form->image_path) }}">
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-8 mx-auto pt-3">
                            <h1>{{ $news_form->title }}</h1>
                        </div>
                </div>
                <div class="row">
                        <div class="day col-md-8 mx-auto">
                            <p>{{ $news_form->updated_at->format('Y/m/d') }}</p>
                            <hr>
                        </div>
                </div>
                <div class="row">
                        <p class="body col-md-8 mx-auto" style="font-size: 20px;">
                            {{ $news_form->body }}
                        </p>
                </div>
            </div>
                
        </div>
            
@endsection
     
