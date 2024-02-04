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
                {{-- <a href="{{route('delegue.setting')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter une nouvelle délibération."><i class="fa-solid fa-gear"
                        style="color: #feffff;"></i> Paramètre</a> --}}
                <a href="{{route('admin.gestionnaires.create')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter un nouveau gestionnaire."><i class="fa-solid fa-plus"></i>
                    Ajouter</a>
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
                    {{-- <th scope="row"><a href="{{route('delegue.resultats.show', 1)}}"
                            title="Cliquez pour voir les details">1</a></th> --}}
                    <td><a href="{{route('admin.gestionnaires.show', $gestionnaire->id)}}" data-bs-toggle="modal"
                            data-bs-target="#exampleModalDetail_{{$gestionnaire->id}}"
                            title="Cliquez pour voir les details">{{$gestionnaire->nom_prenom}}</a></td>
                    <td><a href="{{route('admin.gestionnaires.show', $gestionnaire->id)}}" data-bs-toggle="modal"
                            data-bs-target="#exampleModalDetail_{{$gestionnaire->id}}"
                            title="Cliquez pour voir les details">{{$gestionnaire->filiere->nom}}</a></td>
                    <td><a href="{{route('admin.gestionnaires.show', $gestionnaire->id)}}" data-bs-toggle="modal"
                            data-bs-target="#exampleModalDetail_{{$gestionnaire->id}}"
                            title="Cliquez pour voir les details">{{$gestionnaire->created_at->format('d/m/y')}}</a>
                    </td>
                    <div class="modal fade" id="exampleModalDetail_{{$gestionnaire->id}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel_{{$gestionnaire->nom_prenom}}">
                                        Detail de <strong>{{ $gestionnaire->nom_prenom }}</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Nom et prénom
                                                :
                                                <strong>{{$gestionnaire->nom_prenom}}</strong></label>
                                        </div>
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Adresse
                                                email :
                                                <strong>{{$gestionnaire->email}}</strong>
                                            </label>
                                        </div>
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Numéro
                                                :
                                                <strong>@if ($gestionnaire->numero == '')
                                                    Pas mis à jour
                                                    @endif {{$gestionnaire->numero}}</strong></label>
                                        </div>
                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">UFR
                                                :
                                                <strong>@if ($gestionnaire->ufr == '')
                                                    Pas mis à jour
                                                    @endif{{$gestionnaire->ufr}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Filière
                                                :
                                                <strong>@if ($gestionnaire->filiere == '')
                                                    Pas mis à jour
                                                    @endif{{$gestionnaire->filiere->nom}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Promotion
                                                :
                                                <strong>@if ($gestionnaire->promotion == '')
                                                    Pas mis à jour
                                                    @endif{{$gestionnaire->promotion}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Niveau de licence
                                                :
                                                <strong>@if ($gestionnaire->niveau_licence == '')
                                                    Pas mis à jour
                                                    @endif{{$gestionnaire->niveau_licence}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Date
                                                d'inscription :
                                                <strong>{{$gestionnaire->created_at->format('d/m/y')}}</strong></label>
                                        </div>

                                        {{-- <div class="modal-footer">
                                            <a href="{{route('gestionnaire.delegues.edit', $gestionnaire->id)}}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModalDelete_{{ $gestionnaire->id }}"
                                                class="btn btn-success btn-cool-delete" style="color: #feffff;"><i
                                                    class="fa-solid fa-trash" style="color: #feffff;"></i>
                                                Supprimer le compte</a>
                                            <a href="{{route('gestionnaire.delegues.edit', $gestionnaire->id)}}"
                                                class="btn btn-success btn-cool" style="color: #feffff;"><i
                                                    class="fa-solid fa-pen-to-square" style="color: #feffff;"></i>
                                                Modifié le compte</a>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection