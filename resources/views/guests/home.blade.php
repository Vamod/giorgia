@extends('layouts.app')
@section('content')
<div class="container-home">
    <div class="slider-wrapper">
        <div class="images">
            <img class="active first" src="{{ asset('img/corn-field.jpg') }}" alt="corn-field">
            <img src="{{ asset('img/flowers.jpg') }}" alt="flowers">
            <img src="https://cdn.mos.cms.futurecdn.net/FUE7XiFApEqWZQ85wYcAfM.jpg" alt="">
            <img class="last" src="https://static.photocdn.pt/images/articles/2017/04/28/iStock-546424192.jpg" alt="">
        </div>
    </div>
    <section class="about-me">
        <div class="container">
            <h2 class="about-me-title">ABOUT ME</h2>
            <p class="about-me-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga vel laboriosam amet
                iste dolorem suscipit nemo autem consectetur repudiandae placeat et facere corporis asperiores tenetur,
                impedit temporibus. Voluptatem, enim nostrum.</p>
        </div>
    </section>

    <section class="posts">
        <div class="container">
            <div class="card-group">
                @foreach($posts as $post)
                    <div class="card" style="width: 18rem;">
                        @if ($post->img != null)
                        <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif                       
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->body }}</p>
                            <a href="{{ route('guests.show', $post->slug) }}" class="btn btn-primary">Vai all'articolo</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="map">
        <div id="map"></div>
    </section>
</div>
@endsection
