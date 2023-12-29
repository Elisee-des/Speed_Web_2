@extends('public.layouts.app')

@section('titre', "Accès refuser")

@section('content')
<div class="main">
    <div class="container-content-other-page">
        <div class="container-page-error">
            <div class="container-page-other">
                <p class="title-page-other">Accès refusé</p>
                <h1 class="page-container-other">403</h1>
            </div>
            <p class="retour-page-accueil">Page d'accueil <a href="{{route('accueil')}}">Retour</a></p>
            {{-- <p class="retour-page-accueil">Tableau de bord <a href="{{route('accueil')}}">Retour</a></p> --}}
        </div>
    </div>
@endsection