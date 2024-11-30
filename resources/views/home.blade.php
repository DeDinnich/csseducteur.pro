@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="page-container">
    <h1 class="page-title">Trouve le CsSéducteur qui partagera la carriere</h1>
    <div class="button-container">
        <a href="{{ route('search') }}" class="start-button">Commencer</a>
    </div>
</div>
@endsection