@extends('layouts.app')
@section('content')
    <div class="container articoli">
        <div class=" card-group">
            @foreach($posts as $post)
                <div class="card shadow p-3 bg-white rounded" style="width: 18rem;">
                    @if ($post->img != null)
                    <div class="card-img">
                        <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->title }}">
                    </div>                   
                    @endif                       
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($post->title, 38)}}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 60)}}</p>                        
                        <a href="{{ route('guests.show', $post->slug) }}" class="">Vai all'articolo</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection