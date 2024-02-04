@extends('private.layouts.app')

@section('titre', "Gestion des délégués")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Gestion des délégués</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Liste</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Liste des mes délégués
    </h2>

    <div class="">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0"></h1>
            <div>
                {{-- <a href="{{route('delegue.setting')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter une nouvelle délibération."><i class="fa-solid fa-gear"
                        style="color: #feffff;"></i> Paramètre</a> --}}
                <a href="{{route('gestionnaire.delegues.create')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter un nouveau universite."><i class="fa-solid fa-plus"></i> Ajouter</a>
            </div>
        </div>

        <hr>
        <table class="table table-bordered table-container-elements">
            <thead>
                <tr>
                    <th scope="col">Noms Prénoms</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($delegues as $delegue)
                <tr>
                    <td><a ref="#" class="" data-bs-toggle="modal" data-bs-target="#exampleModalDetail_{{$delegue->id}}"
                            title="Cliquez ici pour voir les details de {{$delegue->nom_prenom}}">{{$delegue->nom_prenom}}</a>
                    </td>
                    <td>
                        <a href="#" class="" data-bs-toggle="modal"
                            data-bs-target="#exampleModalDetail_{{$delegue->id}}"
                            title="Cliquez ici pour voir les details de {{$delegue->nom_prenom}}">
                            Détail</a>
                    </td>
                    <div class="modal fade" id="exampleModalDetail_{{$delegue->id}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel_{{$delegue->nom_prenom}}">
                                        Detail de <strong>{{ $delegue->nom_prenom }}</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Nom et prénom
                                                :
                                                <strong>{{$delegue->nom_prenom}}</strong></label>
                                        </div>
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Adresse
                                                email :
                                                <strong>{{$delegue->email}}</strong>
                                            </label>
                                        </div>
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Numéro
                                                :
                                                <strong>@if ($delegue->numero == '')
                                                    Pas mis à jour
                                                    @endif {{$delegue->numero}}</strong></label>
                                        </div>
                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">UFR
                                                :
                                                <strong>@if ($delegue->ufr == '')
                                                    Pas mis à jour
                                                    @endif{{$delegue->ufr}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Filière
                                                :
                                                <strong>@if ($delegue->filiere == '')
                                                    Pas mis à jour
                                                    @endif{{$delegue->filiere}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Promotion
                                                :
                                                <strong>@if ($delegue->promotion == '')
                                                    Pas mis à jour
                                                    @endif{{$delegue->promotion}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Niveau de licence
                                                :
                                                <strong>@if ($delegue->niveau_licence == '')
                                                    Pas mis à jour
                                                    @endif{{$delegue->niveau_licence}}</strong></label>
                                        </div>

                                        <div class="">
                                            <label for="recipient-file" class="col-form-label">Date
                                                d'inscription :
                                                <strong>{{$delegue->created_at->format('d/m/y')}}</strong></label>
                                        </div>

                                        <div class="modal-footer">
                                            <a href="{{route('gestionnaire.delegues.edit', $delegue->id)}}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModalDelete_{{ $delegue->id }}"
                                                class="btn btn-success btn-cool-delete" style="color: #feffff;"><i
                                                    class="fa-solid fa-trash" style="color: #feffff;"></i>
                                                Supprimer le compte</a>
                                            <a href="{{route('gestionnaire.delegues.edit', $delegue->id)}}"
                                                class="btn btn-success btn-cool" style="color: #feffff;"><i
                                                    class="fa-solid fa-pen-to-square" style="color: #feffff;"></i>
                                                Modifié le compte</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalDelete_{{$delegue->id}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression de
                                        <strong>{{$delegue->nom_prenom}}</strong>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form
                                        action="{{route('gestionnaire.suppression-delegue.action', $delegue->id)}}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Tout les informations associés a
                                                <strong>{{$delegue->nom_prenom}}</strong> seront supprimées.
                                            </label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                                    class="fa-solid fa-xmark" style="color: #feffff;"></i>
                                                Annuler</button>
                                            <button type="submit" class="btn btn-primary btn-cool-delete"><i
                                                    class="fa-solid fa-trash" style="color: #feffff;"></i>
                                                Oui! Supprimer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>

                {{-- <div class="modal fade" id="exampleModalEdition_{{ $universite->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('admin.universites.update', $universite->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="">
                                        <label for="recipient-etude" class="col-form-label">Nom de l'université</label>
                                        <input type="text" name="nom" class="form-control" value="{{$universite->nom}}"
                                            placeholder="" id="recipient-etude">
                                        @if ($errors->has('nom'))
                                        <span class="text-danger">{{ $errors->first('nom') }}</span>
                                        @endif
                                    </div>

                                    <div class="">
                                        <label for="recipient-etude2" class="col-form-label">Sigle</label>
                                        <input type="text" name="sigle" class="form-control"
                                            value="{{$universite->sigle}}" placeholder="" id="recipient-etude2">
                                        @if ($errors->has('sigle'))
                                        <span class="text-danger">{{ $errors->first('sigle') }}</span>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Fermer</button>
                                        <button type="submit" class="btn btn-primary btn-cool"><i
                                                class="fa-regular fa-floppy-disk" style="color: #feffff;"></i>
                                            Changer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}

                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection