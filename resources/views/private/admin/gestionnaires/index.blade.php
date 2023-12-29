@extends('private.layouts.app')

@section('titre', "Gestion des gestionnaires")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Gestion des gestionnaires</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Liste</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Liste des gestionnaires
    </h2>

        <div class="">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0"></h1>
                <div>
                    {{-- <a href="{{route('delegue.setting')}}" class="btn btn-primary btn-cool" title="Clique  Ici pour ajouter une nouvelle délibération."><i class="fa-solid fa-gear" style="color: #feffff;"></i> Paramètre</a> --}}
                    <a href="{{route('admin.gestionnaires.create')}}" class="btn btn-primary btn-cool" title="Clique  Ici pour ajouter un nouveau gestionnaire."><i class="fa-solid fa-plus"></i> Ajouter</a>
                </div>
            </div>
        
            <hr>
            <table class="table table-bordered table-container-elements">
                <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Noms et prénoms</th>
                        <th scope="col">Filières</th>
                        <th scope="col">Date</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gestionnaires as $gestionnaire)
                        
                    <tr>
                        {{-- <th scope="row"><a href="{{route('delegue.resultats.show', 1)}}" title="Cliquez pour voir les details">1</a></th> --}}
                        <td><a href="{{route('admin.gestionnaires.show', $gestionnaire->id)}}" title="Cliquez pour voir les details">{{$gestionnaire->nom_prenom}}</a></td>
                        <td><a href="{{route('admin.gestionnaires.show', $gestionnaire->id)}}" title="Cliquez pour voir les details">{{$gestionnaire->filiere}}</a></td>
                        <td><a href="{{route('admin.gestionnaires.show', $gestionnaire->id)}}" title="Cliquez pour voir les details">{{$gestionnaire->created_at->format('d/m/y')}}</a></td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

@include('layouts.private.modal-create-gestion')

@endsection