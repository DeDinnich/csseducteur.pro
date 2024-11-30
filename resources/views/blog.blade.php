@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="page-container">
    <!-- Titre -->
    <h1 class="page-title">Tu veux en savoir plus sur les frameworks CSS (CSSeducteur) ?</h1>
    
    <!-- Barre de recherche -->
    <div class="search-bar-container">
        <input type="text" class="search-bar" placeholder="Rechercher un article...">
    </div>

    <!-- Contenu alterné -->
    <div class="articles-container">
        <!-- Article 1 -->
        <div class="article">
            <img src="{{ asset('images/article1.jpg') }}" alt="Article 1" class="article-image">
            <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum.</p>
        </div>

        <!-- Article 2 -->
        <div class="article reverse">
            <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod.</p>
            <img src="{{ asset('images/article2.jpg') }}" alt="Article 2" class="article-image">
        </div>

        <!-- Article 3 -->
        <div class="article">
            <img src="{{ asset('images/article3.jpg') }}" alt="Article 3" class="article-image">
            <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum.</p>
        </div>

        <!-- Article 4 -->
        <div class="article reverse">
            <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et lacus.</p>
            <img src="{{ asset('images/article4.jpg') }}" alt="Article 4" class="article-image">
        </div>
    </div>
</div>
@endsection