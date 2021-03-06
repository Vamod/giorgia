@extends('layouts.app')
@section('content')
<div class="container-home">
    <div class="slider-wrapper">
        <div class="images">
            <img class="active first" src="{{ asset('img/corn-field.jpg') }}" alt="corn-field">
            <img src="{{ asset('img/flower-flight.jpg') }}" alt="flower-flight">
            <img class="last" src="{{ asset('img/margherita.jpg') }}" alt="margherita">
        </div>
        <div class="container">
            <div class="main-text">
                <p class="cite-text">  
                    <i class="fas fa-quote-left"></i>        
                    La vita non è quello che dovrebbe essere.<br>
                    E' quello che è.<br>
                    E' come l'affrontiamo che fa la differenza. 
                    <i class="fas fa-quote-right"></i>                           
                </p>             
                <cite>Virginia Satir</cite>
            </div>
        </div>        
    </div>
    <section class="about-me">
        <div class="container">
            <h2 class="about-me-title text-center">Il mio approccio</h2>
            <p class="about-me-p">Sono la dott.ssa Giorgia Cesarini, psicologa iscritta all'albo con matricola 22047 e psicoterapeuta ad orientamento Sistemico - Relazionale (in formazione).
                                Laureata presso l'Università La Sapienza di Roma in Psicologia dello Sviluppo, dell'Educazione e del Benessere.
                                Specializzata nel trattamento dei Disturbi dello Spettro Autistico, ADHD e Disabilità psichica. Offro consulenza psicologica a famiglie e coppie genitoriali attraverso Parent Training e interventi di sostegno alla genitorialità.
                                Esperta in Disturbi Specifici dell'Apprendimento e formata come Tutor allo Studio, svolgo interventi specialistici di training e potenziamento per bambini e ragazzi con DSA.
                                Per tutti i miei interventi utilizzo un approccio sistemico - relazionale, considerando il singolo individuo imprescindibilmente legato ai suoi contesti relazionali e al suo sistema familiare.
                                L'ottica sistemica prevede dunque una presa in carico globale della persona, in cui la famiglia possiede un ruolo attivo e partecipe, finalizzato al raggiungimento del cambiamento desiderato.</p>
        </div>
    </section>

    <section class="posts">
        <div class="container">
            <div class="card-group">
                @foreach($posts as $post)
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                        @if ($post->img != null)
                        <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif                       
                        <div class="card-body">
                            <h5 class="card-title">{{ Str::limit($post->title, 38)}}</h5>
                            <p class="card-text">{{ Str::limit($post->body, 60)}}</p>
                            <a href="{{ route('guests.show', $post->slug) }}" id="home-button" class="">Vai all'articolo</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
