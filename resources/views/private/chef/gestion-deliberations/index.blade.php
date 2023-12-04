@extends('layouts.private.app')

@section('titre', "Gestion des delibérations")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="contact.html">Gestion des delibérations</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Liste</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Liste des delibérations enregistrés
    </h2>

    <div class="">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0"></h1>
            <div>
                <a href="{{route('delegue.deliberations.create')}}" class="btn btn-primary btn-cool"
                    title="Clique  ici pour ajouter une nouvelle deliberations."><i class="fa-solid fa-plus"></i>
                    Ajouter</a>
            </div>
        </div>

        <hr>
        <table class="table table-bordered table-container-elements">
            <thead>
                <tr>
                    <th scope="col">Noms</th>
                    <th scope="col">Images</th>
                    <th scope="col">Date</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($deliberations as $deliberation)
                <tr>
                    <td><a href="{{route('delegue.deliberations.show', $deliberation->id)}}"
                            title="Cliquez pour voir les details">{{$deliberation->nom_module}}</a></td>
                    <td><a href="{{route('delegue.deliberations.show', $deliberation->id)}}"
                            title="Cliquez pour voir les details">{{count($deliberation->images)}}</a></td>
                    <td><a href="{{route('delegue.deliberations.show', $deliberation->id)}}"
                            title="Cliquez pour voir les details">{{$deliberation->created_at->format('d/m/y')}}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layouts.private.modal-create-gestion')

@endsection