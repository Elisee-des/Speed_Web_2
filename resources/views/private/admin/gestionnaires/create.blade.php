@extends('layouts.private.app')

@section('titre', "Ajoute d'un nouveau gestionnaire")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('admin.gestionnaires.index')}}">Liste des gestionnaires</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="mb-4 title-header" style="text-align: center;, margin-bottom:10px;">
        Enregistré un nouveau gestionnaire
    </h2>

    <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-lg-8 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-1">
                            <label class="form-label" id="nom_prenom" for="product-title-input">Nom et
                                prénom</label>
                            <input type="text" class="form-control" placeholder="Veuillez entré le nom et prénom"
                                name="nom_prenom" required>
                            @if ($errors->has('nom_prenom'))
                            <span class="text-danger">{{ $errors->first('nom_prenom') }}</span>
                            @endif
                        </div>

                        <div class="mb-1">
                            <label class="form-label" id="email" for="product-title-input">Email</label>
                            <input type="email" class="form-control" placeholder="Veuillez entré un email" name="email"
                                required>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="mb-1">
                            <label class="form-label" id="telephone" for="product-title-input">Telephone</label>
                            <input type="text" class="form-control" placeholder="Veuillez entré un telephone"
                                name="telephone" required>
                            @if ($errors->has('telephone'))
                            <span class="text-danger">{{ $errors->first('telephone') }}</span>
                            @endif
                        </div>

                        <div class="mb-1">
                            <label class="form-label" id="ine" for="product-title-input">INE</label>
                            <input type="text" class="form-control" placeholder="Veuillez entré un ine" name="ine"
                                required>
                            @if ($errors->has('ine'))
                            <span class="text-danger">{{ $errors->first('ine') }}</span>
                            @endif
                        </div>

                        <div class="mb-1">
                            <label class="form-label" id="promotion" for="product-title-input">Promotion</label>
                            <input type="text" class="form-control" placeholder="Veuillez entré un telephone"
                                name="promotion" required>
                            @if ($errors->has('promotion'))
                            <span class="text-danger">{{ $errors->first('promotion') }}</span>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Mot de passe</h5>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <label for="choices-publish-status-input" class="form-label">Nouveau mot de
                                passe</label>
                            <input type="text" class="form-control" placeholder="Nouveau" name="password" required>
                        </div>

                        <div>
                            <label for="choices-publish-visibility-input" class="form-label">Rététez le mot de
                                passe</label>
                            <input type="text" class="form-control" placeholder="Veuillez répétez"
                                name="password_confirmation" required>
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card mt-2 mb-2">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Département(UFR)</h5>
                    </div>
                    <!-- end card body -->
                    <div class="card-body">
                        <select class="form-select" id="choices-publish-visibility-input" data-choices
                            data-choices-search-false>
                            <option value="Public" selected>Aucun</option>
                            <option value="Hidden">Hidden</option>
                        </select>
                    </div>
                    @if ($errors->has('nom_module'))
                    <span class="text-danger">{{ $errors->first('nom_module') }}</span>
                    @endif
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>

        <div class="mt-2 mb-3 cnt-file " style="gap: 3px">
            <button type="submit" style="gap: 3" class="submit-file">
                <i class="fa-solid fa-plus" style="color: #feffff;"></i>
                Créer le compte
            </button>
            <a href="{{route('admin.gestionnaires.index')}}" type="submit"
                style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
                <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
            </a>
        </div>
        <!-- end row -->

    </form>
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

@include('layouts.private.modal-update-gestion')
@include('layouts.private.modal-delete')
@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection