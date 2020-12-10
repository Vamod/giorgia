@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 70px">
        <div class="card mb-3">
            @if ($post->img != null)
            <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->title }}">
            @endif   
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>
    </div>
@endsection
