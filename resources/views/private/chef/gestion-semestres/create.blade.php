@extends('private.layouts.app')

@section('titre', "Ajoute d'un nouveau gestionnaire")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('delegue.semestres.index')}}">Liste des semestres</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="mb-4 title-header" style="text-align: center;, margin-bottom:10px;">
        Enregistré un nouveau semestre
    </h2>

    <div class="container-formulaire-card">
        <div class="modal-body">
            <form action="{{route('delegue.semestres.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="recipient-name" class="col-form-label">De quel Filière,  Licence et Semestre il s'agit ?</label>
                    <input type="text" name="nom" value="{{ old('nom') }}" class="form-control" placeholder="Inspirez-vous de l'exemple"
                        id="recipient-name">
                    @if ($errors->has('nom'))
                    <span class="text-danger">{{ $errors->first('nom') }}</span>
                    @endif
                </div>
                <span class="text-success"><p style="text-decoration: underline">Exemple:</p> <i><strong>MPCI Licence 1 Semestre 1 Promotion 2023</strong></i></span>
                
                <div class="mt-4 cnt-file" style="gap: 3px">
                    <button type="submit" style="gap: 3" class="submit-file">
                        <i class="fa-solid fa-plus" style="color: #feffff;"></i>
                        Créer
                    </button>
                    <a href="{{route('delegue.semestres.index')}}" type="submit"
                        style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
                        <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End Page-content -->
{{-- <div class="container-formulaire-card">
    <div class="modal-body">
        <form action="{{route('admin.gestionnaires.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="recipient-name" class="col-form-label">Nom et prénoms</label>
                <input type="text" name="nom_module" class="form-control" placeholder="Veuillez entre un nom et prénom"
                    id="recipient-name">
                @if ($errors->has('nom_prenom'))
                <span class="text-danger">{{ $errors->first('nom_prenom') }}</span>
                @endif
            </div>
            <div class="">
                <label for="recipient-name" class="col-form-label">Email</label>
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
</div> --}}
</div>

@include('private.layouts.modal-update-gestion')
@include('private.layouts.modal-delete')
@include('private.layouts.modal-update-image-gestion')
@include('private.layouts.modal-update-all-images-gestion')

@endsection