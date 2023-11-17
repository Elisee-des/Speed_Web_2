@extends('layouts.app')

@section('titre', "Page Introuvable")

@section('content')
<div class="main">
    <div class="container-content-other-page">
        <div class="container-page-error">
            <div class="container-page-other">
                <p class="title-page-other">Page Introuvable</p>
                <h1 class="page-container-other">404</h1>
            </div>
            <p class="retour-page-accueil">Page d'accueil <a href="{{route('accueil')}}">Retour</a></p>
            {{-- <p class="retour-page-accueil">Tableau de bord <a href="{{route('accueil')}}">Retour</a></p> --}}
        </div>
    </div>
    @endsection