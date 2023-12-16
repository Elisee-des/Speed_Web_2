@extends('layouts.private.app')

@section('titre', "Ajoute d'une nouvelle affiche")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('delegue.semestres.show', $semestre->id)}}">Liste des affiches</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
    </ol>
</nav>

<div class="container-content">
    <div class="container-content">
        <h2 class="mb-4 title-header" style="text-align: center;, margin-bottom:10px;">
            Enregistré une nouvelle affiche
        </h2>

        <form id="createproduct-form" action="{{route('delegue.affiches.action', $semestre->id)}}"
            class="needs-validation" novalidate method="POST">
            @csrf
            <div class="row">

                <div class="col-lg-4">

                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Catégories</h5>
                        </div>
                        <!-- end card body -->
                        <div class="card-body">
                            <select name="categorie_id" class="form-select" id="choices-publish-visibility-input" data-choices
                                data-choices-search-false>
                                @foreach ($categories as $categorie)
                                <option value="{{$categorie->id}}" selected>{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('categorie_id'))
                        <span class="text-danger">{{ $errors->first('categorie_id') }}</span>
                        @endif
                    </div>
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Date de création</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" disabled class="form-control"
                                placeholder="Elle sera mise automatiquement" required>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->


                    <!-- end card -->
                </div>
                <div class="col-lg-8 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Informations</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-1">
                                <label for="recipient-name" class="col-form-label">Nom du module</label>
                                <input type="text" name="nom" class="form-control"
                                    placeholder="Exple: Electricité" id="recipient-name">
                                @if ($errors->has('nom_module'))
                                <span class="text-danger">{{ $errors->first('nom_module') }}</span>
                                @endif
                            </div>

                            <div class="mb-1">
                                <label for="recipient-name" class="col-form-label">Niveau d'etude</label>
                                <input type="text" name="niveau_etude" class="form-control"
                                    placeholder="Exple : L1 S1" id="recipient-name">
                                @if ($errors->has('niveau_etude'))
                                <span class="text-danger">{{ $errors->first('niveau_etude') }}</span>
                                @endif

                            </div>

                            <div class="mb-1">
                                <label for="recipient-name" class="col-form-label">Session</label>
                                <input type="text" name="session" class="form-control"
                                    placeholder="Exple : Session normal" id="recipient-name">
                                @if ($errors->has('session'))
                                <span class="text-danger">{{ $errors->first('session') }}</span>
                                @endif
                            </div>

                            <div class="mb-1">
                                <label for="recipient-file" class="col-form-label">Choisir des images</label>
                                <input type="file" name="images[]" class="form-control" multiple id="recipient-file">
                                @if ($errors->has('images'))
                                <span class="text-danger">{{ $errors->first('images') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end col -->


            </div>

            <div class="mt-2 mb-3 cnt-file " style="gap: 3px">
                <button type="submit" style="gap: 3" class="submit-file">
                    <i class="fa-solid fa-plus" style="color: #feffff;"></i>
                    Créer
                </button>
                <a href="{{route('delegue.semestres.show', $semestre->id)}}" type="submit"
                    style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
                    <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
                </a>
            </div>
            <!-- end row -->

        </form>
    </div>
</div>

@include('layouts.private.modal-update-gestion')
@include('layouts.private.modal-delete')
@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection