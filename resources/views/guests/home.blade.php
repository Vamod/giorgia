@extends('layouts.app')
@section('content')
    <div class="container-home">
        <div class="slider-wrapper">
            <div class="prev">
                <i class="fas fa-angle-left"></i>
            </div>
            <div class="images">
                <img class="active first" src="{{ asset('img/cups.jpg') }}" alt="cups">
                <img src="https://static.photocdn.pt/images/articles/2017/04/28/iStock-646511634.jpg" alt="">
                <img src="https://cdn.mos.cms.futurecdn.net/FUE7XiFApEqWZQ85wYcAfM.jpg" alt="">
                <img class="last" src="https://static.photocdn.pt/images/articles/2017/04/28/iStock-546424192.jpg" alt="">
            </div>
            <div class="next">
                <i class="fas fa-angle-right"></i>
            </div>
            <div class="nav">
                <i class="fas fa-circle active first"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle"></i>
                <i class="fas fa-circle last"></i>
            </div>
        </div>
    </div>
@endsection