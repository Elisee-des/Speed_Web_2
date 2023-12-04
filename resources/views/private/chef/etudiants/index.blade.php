@extends('layouts.private.app')

@section('titre', "Gestion des étudiants")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Gestion des étudiant</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Liste</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Liste des etudiants qui vous suivent
    </h2>

        <div class="">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0"></h1>
                <div>
                    <a href="{{route('delegue.etudiants.create')}}" class="btn btn-primary btn-cool" title="Clique  ici pour ajouter un étudiant(e)."><i class="fa-solid fa-plus"></i> Ajouter un(e) etudiant(e)</a>
                </div>
            </div>
        
            <hr>
            <table class="table table-bordered table-container-elements">
                <thead>
                    <tr>
                        <th scope="col">Noms et prénoms</th>
                        <th scope="col">Date d'ajout</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($etudiants as $etudiant)
                        
                    <tr>
                        <td><a href="{{route('delegue.etudiants.show', $etudiant->id)}}" title="Cliquez pour voir les details">{{$etudiant->nom_prenom}}</a></td>
                        <td><a href="{{route('delegue.etudiants.show', $etudiant->id)}}" title="Cliquez pour voir les details">{{$etudiant->created_at->format('d/m/y')}}</a></td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

@include('layouts.private.modal-create-gestion')

@endsection