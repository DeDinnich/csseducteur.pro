@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="page-container">
    <!-- Titre -->
    <h1 class="page-title">Tu veux en savoir plus sur les frameworks CSS (CSSeducteur) ?</h1>
    
    <!-- Barre de recherche -->
    <div class="search-bar-container">
        <input type="text" class="search-bar" placeholder="Rechercher un framework...">
    </div>

    <!-- Contenu alterné des frameworks -->
    <div class="articles-container">
        @foreach ($frameworks as $index => $framework)
            <!-- Chaque framework est un "article" -->
            <div class="article {{ $index % 2 === 1 ? 'reverse' : '' }}">
                <!-- Image en base64 -->
                <img src="data:image/jpeg;base64,{{ $framework->image }}" alt="{{ $framework->nom }}" class="article-image">
                
                <!-- Contenu du framework -->
                <div class="article-content">
                    <h2 class="article-title">{{ $framework->nom }}</h2>
                    <p class="article-text">{{ $framework->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection