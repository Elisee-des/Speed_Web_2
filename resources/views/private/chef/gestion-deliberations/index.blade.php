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

    <div class="container">
        <div class="">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0"></h1>
                <div>
                    <a href="" class="btn btn-primary btn-cool" title="Clique  Ici pour ajouter un nouveau resultats" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-sharp fa-plus"></i> Ajouter</a>
                </div>
            </div>
        
            <hr>
            <table class="table table-bordered table-container-elements">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Noms</th>
                        <th scope="col">Images</th>
                        <th scope="col">Date</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="{{route('delegue.deliberations.show', 1)}}" title="Cliquez pour voir les details">1</a></th>
                        <td><a href="{{route('delegue.deliberations.show', 1)}}" title="Cliquez pour voir les details">Electronique</a></td>
                        <td><a href="{{route('delegue.deliberations.show', 1)}}" title="Cliquez pour voir les details">9</a></td>
                        <td><a href="{{route('delegue.deliberations.show', 1)}}" title="Cliquez pour voir les details">12/02/2023</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('layouts.private.modal-create-gestion')

@endsection