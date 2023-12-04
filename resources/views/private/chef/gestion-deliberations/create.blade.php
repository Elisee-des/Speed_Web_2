@extends('layouts.private.app')

@section('titre', "Ajoute d'une déliberation")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('delegue.deliberations.index')}}">Liste des délibérations</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Enregistré une nouvelle délibération
    </h2>

    <div class="container-formulaire-card">
        <div class="modal-body">
            <form action="{{route('delegue.deliberations.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="recipient-name" class="col-form-label">Nom du module</label>
                    <input type="text" name="nom_module" class="form-control" placeholder="Veuillez entre un nom"
                        id="recipient-name">
                    @if ($errors->has('nom_module'))
                    <span class="text-danger">{{ $errors->first('nom_module') }}</span>
                    @endif
                </div>
                <div class="">
                    <label for="recipient-name" class="col-form-label">Niveau d'etude</label>
                    <input type="text" name="niveau_licence" class="form-control"
                        placeholder="Veuillez entre le niveau d'etude" id="recipient-name">
                    @if ($errors->has('niveau_licence'))
                    <span class="text-danger">{{ $errors->first('niveau_licence') }}</span>
                    @endif
                </div>
                <div class="">
                    <label for="recipient-name" class="col-form-label">Session</label>
                    <input type="text" name="session" class="form-control" placeholder="Normal ou ratrappage ?"
                        id="recipient-name">
                    @if ($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                    @endif
                </div>
                <div class="">
                    <label for="recipient-file" class="col-form-label">Choisir des images</label>
                    <input type="file" name="images[]" class="form-control" multiple id="recipient-file">
                    @if ($errors->has('images'))
                    <span class="text-danger">{{ $errors->first('images') }}</span>
                    @endif
                </div>
                <div class="mt-4 cnt-file" style="gap: 3px">
                    <button type="submit" style="gap: 3" class="submit-file">
                        <i class="fa-sharp fa-plus" style="color: #feffff;"></i>
                        Ajouter
                    </button>
                    <a href="{{route('delegue.deliberations.index')}}" type="submit"
                        style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
                        <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>

@include('layouts.private.modal-update-gestion')
@include('layouts.private.modal-delete')
@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection