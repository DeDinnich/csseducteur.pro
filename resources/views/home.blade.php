@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<div class="home">
        <div class="home_text">
            <h1>Trouve le CsSéducteur qui partagera la carriere</h1>
        </div>
        <div class="home_button">
        <a href="{{ route('search') }}" class="start-button">Commencer</a>
        </div>
        <div class="home_img">
        @foreach ($frameworks as $index => $framework)
        <!-- Image en base64 -->
        <img src="data:image/jpeg;base64,{{ $framework->image ?? 'DEFAULT_IMAGE_BASE64_STRING' }}" alt="Framework Image">

        @endforeach
        </div>
    </div>
@endsection