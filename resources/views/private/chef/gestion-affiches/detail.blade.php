@extends('layouts.private.app')

@section('titre', "Detail de {$affiche->nom}")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('delegue.semestres.show', $semestre->id)}}">Liste des affiches</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Détail</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        {{$affiche->nom}}
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
                    <td>{{count($affiche->images)}}</td>
                    <td>{{$affiche->created_at->format('d/m/y')}}</td>
                    <td>
                        <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalEdition" title="Cliquez ici pour modifier le résultat"><i
                                class="fa-solid fa-pen" style="color: #0432ff;"></i> Modifier</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="mb-0"></h1>
            <div class="option-detail-liste-container">
                {{-- <a href="{{route('delegue.resultat.parametre')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter une nouvelle délibération."><i class="fa-solid fa-gear"
                        style="color: #feffff;"></i> Paramètre</a> --}}
                <a href="{{route('delegue.affiches.ajout-image.action', $affiche->id)}}" data-bs-toggle="modal"
                    data-bs-target="#exampleModalAjoutImage" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter une ou des images."><i class="fa-solid fa-plus"></i>
                    Ajouter une ou des images</a>

                @if ($affiche->actif == 0)
                <form action="{{route('delegue.affiches.affiche', $affiche->id)}}" method="POST">
                    @csrf
                    <a href="#" class="btn btn-primary btn-cool-2" data-bs-toggle="modal" type="submit"
                        data-bs-target="#exampleModalResultatAffiche"
                        title="Clique  Ici pour afficher ces résultats."><i class="fa-solid fa-eye"></i>
                        Afficher ces images</a>
                </form>
                @else
                <form action="{{route('delegue.affiches.resultats.cacher', $affiche->id)}}" method="POST">
                    @csrf
                    <a href="#" class="btn btn-primary btn-cool-2" data-bs-toggle="modal" type="submit"
                        data-bs-target="#exampleModalResultatCache" title="Clique  Ici pour cacher ces résultats."><i
                            class="fa-solid fa-eye"></i>
                        Cacher ces images</a>
                </form>
                @endif
            </div>
        </div>

        <div class="f-colunm ">
            {{-- @dd($resultat->images) --}}
            @foreach ($affiche->images as $image)
            <div class="card p-1 mb-3 contenair-images-detail">
                <div class="a-content-option mb-3">
                    <a href="" class="img-gestion" data-bs-toggle="modal" title="Cliquez ici pour modifier cette image"
                        data-bs-target="#exampleModalEditionImage_{{ $image->id }}"><i class="fa-solid fa-pen-to-square"
                            style="color: #0432ff;"></i> Changer cette image</a>
                    <a href="" class="img-gestion" data-bs-toggle="modal"
                        title="Cliquez ici pour supprimer cette le image" data-bs-target="#exampleModalDelete_{{ $image->id }}"
                        style="color: #e3423d"><i class="fa-solid fa-trash" style="color: #ff2600;"></i> Supprimer
                        cette image</a>
                </div>
                <img src="{{ asset('storage/images/affiches/' . $image->path) }}" class="d-block w-100"
                    alt="images des proclamations de resultats de {{ $affiche->nom_module }}" />
            </div>

            {{-- Modal pour la suppression de l'image --}}
            <div class="modal fade" id="exampleModalDelete_{{ $image->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suppression de l'image
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('delegue.affiches.suppression-image.action', [$affiche->id, $image->id])}}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="">
                                    <label for="recipient-name" class="col-form-label">Confirmer la suppression de
                                        cette image ? Elle sera definitivement perdu !!!!</label>
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
            <div class="modal fade" id="exampleModalEditionImage_{{ $image->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Changer cette image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form
                                action="{{route('delegue.affiches.edition-image.action', [$affiche->id, $image->id])}}"
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

            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalDeleteResultat"
                class="text-images-plus-text" type="submit"
                title="Cliquez ici pour supprimer definitivement cette publication"
                onclick="return confirm('Etes vous sûr ?')" style="font-size: 15px;"><i class="fa-solid fa-trash"
                    style="color: #feffff;"></i> Supprimer tout ces résultats</a>
        </div>
    </div>

    <div class="mt-3 cnt-profil">
        <a href="{{route('delegue.semestres.show', [$semestre->id])}}" type="submit"
            style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
            <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
        </a>
    </div>
</div>

<div class="modal fade" id="exampleModalEdition" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier le nom de l'affiche</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.affiches.edition-nom-affiche.action', $affiche->id)}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <label for="recipient-etude" class="col-form-label">Nom de l'affiche</label>
                        <input type="text" name="nom" class="form-control" value="{{$affiche->nom}}"
                            placeholder="Exple : Electricité" id="recipient-etude">
                        @if ($errors->has('nom'))
                        <span class="text-danger">{{ $errors->first('nom') }}</span>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Fermer</button>
                        <button type="submit" class="btn btn-primary btn-cool"><i class="fa-regular fa-floppy-disk"
                                style="color: #feffff;"></i>
                            Changer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal pour la suppression du resultat --}}
{{-- <div class="modal fade" id="exampleModalDeleteResultat" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression des résultats de
                    <strong>{{$resultat->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.suppresion-module.action', $resultat->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Tout les images associés au résultat de
                            <strong>{{$resultat->nom_module}}</strong> seront supprimées.
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Annuler</button>
                        <button type="submit" class="btn btn-primary btn-cool-delete"><i class="fa-solid fa-trash"
                                style="color: #feffff;"></i>
                            Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
{{-- Modal pour la suppression du resultat --}}

{{-- <div class="modal fade" id="exampleModalEdition" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edition du résultat
                    <strong>{{$resultat->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.edition-nom-module.action', $resultat->id)}}" method="POST">
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Nom du résultat</label>
                        <input type="text" name="nom_module" class="form-control" value="{{$resultat->nom_module}}"
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
</div> --}}

{{-- Modal ajout de l'image --}}
{{-- <div class="modal fade" id="exampleModalAjoutImage" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'image à
                    <strong>{{$resultat->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.ajout-image.action', $resultat->id)}}" method="POST"
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
</div> --}}
{{-- Fin Modal ajout de l'image --}}

{{-- Modal pour la suppression du resultat --}}
{{-- <div class="modal fade" id="exampleModalResultatAffiche" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Afficher
                    <strong>{{$resultat->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.resultats.affiche', $resultat->id)}}" method="POST">
                    @method('post')
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Tout les images associés à
                            <strong>{{$resultat->nom_module}}</strong> seront visible chez vos etudiants.
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
</div> --}}
{{-- Modal pour la suppression du resultat --}}

{{-- Modal pour la suppression du resultat --}}
{{-- <div class="modal fade" id="exampleModalResultatCache" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cacher
                    <strong>{{$resultat->nom_module}}</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.resultats.cacher', $resultat->id)}}" method="POST">
                    @method('post')
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Tout les images associés à
                            <strong>{{$resultat->nom_module}}</strong> seront cachés chez vos etudiants.
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
</div> --}}
{{-- Modal pour la suppression du resultat --}}

@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection