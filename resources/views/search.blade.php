@extends('layouts.app')

@section('title', 'Search')

@section('content')
<div class="page-container">
    <!-- Titre -->
    <h1 class="page-title">Quel CsSéducteur te correspond le mieux ?</h1>
    
    <!-- Div blanche avec texte centré -->
    <!-- <div class="info-box">
        <p>Réponds honnêtement aux questions pour découvrir ton profil !</p>
    </div> -->

    <!-- Question actuelle -->
    <h2 class="question-title">{{ $question->texte }}</h2>

    <!-- Conteneur des réponses -->
    <div class="reponse-container">
        @foreach($question->responses->shuffle()->take(4) as $response)
            <a href="{{ route('search') }}" class="rep-button">{{ $response->texte }}</a>
        @endforeach
    </div>
</div>
@endsection