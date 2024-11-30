@extends('layouts.app')

@section('title', 'Resultats')

@section('content')
<div class="page-container">
    <!-- Titre -->
    <h1 class="page-title">Voici ton résultat !</h1>
    
    <!-- Div blanche avec opacité -->
    <div class="result-box">
        Félicitations ! Voici les détails correspondant à ton profil CSS :.
    </div>

    <!-- Contenu avec image à gauche et texte à droite -->
    <div class="result-content">
        <div class="result-item">
            <img src="{{ asset('images/result1.jpg') }}" alt="Résultat 1" class="result-image">
            <p class="result-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum, risus nec tincidunt fermentum.</p>
        </div>
    </div>
</div>
@endsection