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
        <div class="container">
            <section class="about-me">
                <h2 class="about-me-title">ABOUT ME</h2>
                <p class="about-me-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga vel laboriosam amet iste dolorem suscipit nemo autem consectetur repudiandae placeat et facere corporis asperiores tenetur, impedit temporibus. Voluptatem, enim nostrum.</p>
            </section>
            <section class="map">
                <div id="map"></div>
            </section>
        </div>
    </div>
@endsection