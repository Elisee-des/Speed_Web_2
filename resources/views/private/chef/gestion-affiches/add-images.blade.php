@extends('layouts.private.app')

@section('titre', "Ajoute de nouvelles images")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('delegue.affiches.detail', [$semestre->id, $affiche->id])}}">Détail de l'affiche</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
    </ol>
</nav>

<div class="container-content">
    <div class="container-content">
        <h2 class="mb-4 title-header" style="text-align: center;, margin-bottom:10px;">
            Enregistré une ou des images
        </h2>

        <form action="{{route('delegue.affiches.ajout-image.action', [$semestre->id, $affiche->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Informations</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-1">
                                <label for="recipient-file" class="col-form-label">Choisir une ou des images</label>
                                <input type="file" name="images[]" class="form-control" multiple id="recipient-file">
                                @if ($errors->has('images'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach($errors->get('images.*') as $error)
                                        <li>{{ $error[0] }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 mb-3 cnt-file " style="gap: 3px">
                <button type="submit" style="gap: 3" class="submit-file">
                    <i class="fa-solid fa-plus" style="color: #feffff;"></i>
                    Ajouter
                </button>
                <a href="{{route('delegue.affiches.detail', [$semestre->id, $affiche->id])}}" type="submit"
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