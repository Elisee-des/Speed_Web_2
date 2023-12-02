@extends('layouts.private.app')

@section('titre', "Gestion des proclamations")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('delegue.proclamations.index')}}">Gestion des proclamations</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Détail</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Detail des proclamations de {{$proclamation->nom_module}}
    </h2>

    <div class="">
        <table class="table table-container-elements">
            <thead>
                <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Creé le</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{count($proclamation->images)}}</td>
                    <td>{{$proclamation->created_at->format('d/m/y')}}</td>
                    <td>
                        <a href='#' class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalEdition" title="Cliquez ici pour modifier la proclamation"><i
                                class="fa-solid fa-pen" style="color: #0432ff;"></i> Modifier</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="mb-0"></h1>
            <div class="option-detail-liste-container">
                {{-- <a href="{{route('delegue.proclamation.parametre')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter une nouvelle délibération."><i class="fa-solid fa-gear"
                        style="color: #feffff;"></i> Paramètre</a> --}}
                <a href="{{route('delegue.proclamations.ajout-image.action', $proclamation->id)}}"
                    data-bs-toggle="modal" data-bs-target="#exampleModalAjoutImage" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour modifier une ou des images."><i class="fa-solid fa-plus"></i>
                    Ajouter une ou des images</a>

                @if ($proclamation->actif == 0)
                <form action="{{route('delegue.proclamations.affiche', $proclamation->id)}}" method="POST">
                    @csrf
                    <a href="#" class="btn btn-primary btn-cool-2" data-bs-toggle="modal" type="submit"
                        data-bs-target="#exampleModalProclamationAffiche"
                        title="Clique  Ici pour afficher ces proclamations."><i class="fa-solid fa-eye"></i>
                        Afficher ces images</a>
                </form>
                @else
                <form action="{{route('delegue.proclamations.cacher', $proclamation->id)}}" method="POST">
                    @csrf
                    <a href="#" class="btn btn-primary btn-cool-2" data-bs-toggle="modal" type="submit"
                        data-bs-target="#exampleModalProclamationCache"
                        title="Clique  Ici pour cacher ces proclamations."><i class="fa-solid fa-eye"></i>
                        Cacher ces images</a>
                </form>
                @endif
            </div>
        </div>

        <div class="f-colunm ">
            {{-- @dd($proclamation->images) --}}
            @foreach ($proclamation->images as $image)
            <div class="card p-1 mb-3 contenair-images-detail">
                <div class="a-content-option mb-3">
                    <a href="" class="img-gestion" data-bs-toggle="modal" title="Cliquez ici pour modifier cette image"
                        data-bs-target="#exampleModalEditionImage"><i class="fa-solid fa-pen-to-square"
                            style="color: #0432ff;"></i> Changer cette image</a>
                    <a href="" class="img-gestion" data-bs-toggle="modal"
                        title="Cliquez ici pour supprimer cette le image" data-bs-target="#exampleModalDelete"
                        style="color: #e3423d"><i class="fa-solid fa-trash" style="color: #ff2600;"></i> Supprimer
                        cette image</a>
                </div>
                <img src="{{ asset('storage/images/proclamations/' . $image->path) }}" class="d-block w-100"
                    alt="images des proclamations de {{ $proclamation->nom_module }}" />
            </div>

            {{-- Modal pour la suppression de l'image --}}
            <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suppression de cette image
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form
                                action="{{route('delegue.proclamations.suppression-image.action', [$proclamation->id, $image->id])}}"
                                method="post">
                                @csrf
                                <div class="">
                                    <label for="recipient-name" class="col-form-label">Confirmer la suppression de
                                        l'image</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                            class="fa-solid fa-xmark" style="color: #feffff;"></i> Annuler</button>
                                    <button type="submit" class="btn btn-primary btn-cool-delete"><i
                                            class="fa-solid fa-trash" style="color: #feffff;"></i>
                                        Supprimer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Modal pour la suppression de l'image --}}

            {{-- Modal pour la suppression de l'image --}}
            <div class="modal fade" id="exampleModalEditionImage" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Changer cette image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form
                                action="{{route('delegue.proclamations.edition-image.action', [$proclamation->id, $image->id])}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="">
                                    <label for="recipient-name" class="col-form-label">Choisir une nouvelle
                                        image</label>
                                    <input type="file" name="image" class="form-control" id="recipient-name">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                            class="fa-solid fa-xmark" style="color: #feffff;"></i> Fermer</button>
                                    <button type="submit" class="btn btn-primary btn-cool"><i class="fa-sharp fa-plus"
                                            style="color: #feffff;"></i> Changer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Modal pour la l'edition de l'image --}}
            @endforeach

        </div>

        <div class="text-images-plus-delete">

            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalDeleteProclamation"
                class="text-images-plus-text" type="submit"
                title="Cliquez ici pour supprimer definitivement cette publication"
                onclick="return confirm('Etes vous sûr ?')" style="font-size: 15px;"><i class="fa-solid fa-trash"
                    style="color: #feffff;"></i> Supprimer cette proclamation
            </a>
        </div>
    </div>

    <div class="mt-3 cnt-profil">
        <a href="{{route('delegue.proclamations.index')}}" type="submit"
            style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
            <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
        </a>
    </div>
</div>

{{-- Modal pour la suppression du proclamation --}}
<div class="modal fade" id="exampleModalDeleteProclamation" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression de la proclamation
                    <strong>{{$proclamation->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.proclamations.suppresion-module.action', $proclamation->id)}}"
                    method="POST">
                    @method('delete')
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Tout les images associés à la proclamation
                            <strong>{{$proclamation->nom_module}}</strong> seront supprimées.
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary btn-cool-delete"><i class="fa-solid fa-trash"
                                style="color: #feffff;"></i>
                            Oui! Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal pour la suppression du proclamation --}}

<div class="modal fade" id="exampleModalEdition" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edition de la proclamation
                    <strong>{{$proclamation->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.proclamations.edition-nom-module.action', $proclamation->id)}}"
                    method="POST">
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Nom du résultat</label>
                        <input type="text" name="nom_module" class="form-control" value="{{$proclamation->nom_module}}"
                            placeholder="Veuillez entre le nom du module" id="recipient-name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Fermer</button>
                        <button type="submit" class="btn btn-primary btn-cool"><i class="fa-sharp fa-plus"
                                style="color: #feffff;"></i> Enregistré</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal ajout de l'image --}}
<div class="modal fade" id="exampleModalAjoutImage" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'image à la proclamation
                    <strong>{{$proclamation->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.proclamations.ajout-image.action', $proclamation->id)}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Choisir une image</label>
                        <input type="file" name="images[]" multiple class="form-control" id="recipient-name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Fermer</button>
                        <button type="submit" class="btn btn-primary btn-cool"><i class="fa-sharp fa-plus"
                                style="color: #feffff;"></i> Ajouter l'image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Fin Modal ajout de l'image --}}

{{-- Modal pour la suppression du proclamation --}}
<div class="modal fade" id="exampleModalProclamationAffiche" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Afficher la proclamation
                    <strong>{{$proclamation->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.proclamations.affiche', $proclamation->id)}}" method="POST">
                    @method('post')
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Tout les images associés à
                            <strong>{{$proclamation->nom_module}}</strong> seront visible chez vos etudiants.
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary btn-cool-delete"><i class="fa-solid fa-trash"
                                style="color: #feffff;"></i>
                            Je confirme</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal pour la suppression du proclamation --}}

{{-- Modal pour la suppression du proclamation --}}
<div class="modal fade" id="exampleModalProclamationCache" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cacher la proclamation
                    <strong>{{$proclamation->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.proclamations.cacher', $proclamation->id)}}" method="POST">
                    @method('post')
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Tout les images associés à
                            <strong>{{$proclamation->nom_module}}</strong> seront cachés chez vos etudiants.
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary btn-cool-delete"><i class="fa-solid fa-trash"
                                style="color: #feffff;"></i>
                            Je confirme</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal pour la suppression du proclamation --}}

@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection