@extends('layouts.detail')

@section('title', 'Beauty salon')

@section('content')
    <div class="container" style="height:auto; padding-top:200px;">
        <div class="row">
            <div class="col-md-8 mx-auto mb-3" >
                @foreach ($posts as $news)
                <a href="{{ action('BrowseController@browse', ['id' => $news->id]) }}" style="color: #9D8468;">
                    <div class="row mb-5">
                        <div class="text col-md-6">
                            <div class="date">
                                {{ $news->updated_at->format('y/m/d') }}
                            </div>
                            <div class="title">
                                {{ Str::limit($news->title, 50) }}
                            </div>
                            <div class="body mt-3">
                                {{ Str::limit($news->body, 300) }}
                            </div>
                        </div>
                        <div class="col-md-6 text-right mt-4">
                            <img src="{{ asset('storage/image/' . $news->image_path) }}" style="width:100%; height:230px;" >
                        </div>
                    </div>
                </a>
                <hr>
                @endforeach
                <div class="row mt-3 ml-3">
                    <a href="{{ action('HomeController@browse') }}" role="button" class="btn btn-primary">TOPへ戻る</a>
                </div>
            </div>
        </div>
       
    </div>
@endsection