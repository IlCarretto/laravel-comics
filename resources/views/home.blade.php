@extends('layouts.app')

@section('content')
    <main class="myContent-main">
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    <div class="col mb-3">
                        <div class="comic-card">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <a href="{{ $comic }}">
                                <h4 class="text-center">{{ $comic['title'] }}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="btn">
                <a class="load-more" href="">LOAD MORE</a>
            </div>
        </div>
    </main>
@endsection
