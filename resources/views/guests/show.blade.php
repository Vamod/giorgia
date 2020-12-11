@extends('layouts.app')
@section('content')
    <div class="container show">
        <div class="card mb-3">
            @if ($post->img != null)
            <div class="card-img-top-box">
                <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->title }}">
            </div>             
            @endif   
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>
    </div>
@endsection
