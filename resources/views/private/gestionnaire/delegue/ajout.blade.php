@extends('private.layouts.app')

@section('titre', "Ajoute d'une nouveau délégué")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('gestionnaire.delegues.index')}}">Liste des délégués</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
    </ol>
</nav>

<div class="container-content">
    <div class="container-content">
        <h2 class="mb-4 title-header" style="text-align: center;, margin-bottom:10px;">
            Enregistré un nouveau délégué
        </h2>

        <form action="{{route('gestionnaire.delegues.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-lg-4">

                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Gestionnaire</h5>
                        </div>
                        <!-- end card body -->
                        <div class="card-body">
                            <select name="gestionnaire_id" class="form-select" id="categorie-select">
                                <option value="{{Auth::user()->id}}" selected>{{Auth::user()->nom_prenom}}</option>
                            </select>
                        </div>
                        @if ($errors->has('gestionnaire_id'))
                        <span class="text-danger">{{ $errors->first('gestionnaire_id') }}</span>
                        @endif
                    </div>
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Date de création</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" disabled class="form-control"
                                placeholder="Elle sera mise automatiquement">
                        </div>
                        <!-- end card body -->
                    </div>
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Filière</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" disabled class="form-control" value="{{Auth::user()->filiere->sigle}}"
                                placeholder="Elle sera mise automatiquement">
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                </div>
                <div class="col-lg-8 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Informations du délégué</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-0 nom-affiche">
                                <label for="recipient-name" class="col-form-label">Nom complet</label>
                                <input type="text" name="nom_prenom" class="form-control" placeholder="Ouedraogo Alassane"
                                    id="recipient-name">
                                @if ($errors->has('nom_prenom'))
                                <span class="text-danger">{{ $errors->first('nom_prenom') }}</span>
                                @endif
                            </div>

                            <div class="mb-2">
                                <label for="recipient-session" class="col-form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Exple: alassane@gmail.com"
                                    id="recipient-name">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="mb-2">
                                <label for="recipient-session" class="col-form-label">Mot de passe</label>
                                <input type="text" name="password" class="form-control" placeholder="Choisez un mot de passe assez securisé"
                                    id="recipient-name">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
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
                <a href="{{route('gestionnaire.delegues.index')}}" type="submit"
                    style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
                    <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
                </a>
            </div>
            <!-- end row -->

        </form>
    </div>
</div>

@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Détectez le changement de valeur dans le sélecteur de catégorie
        $('#categorie-select').change(function () {
            // Récupérez la valeur sélectionnée
            var selectedValue = $(this).val();

            // Ajoutez ou supprimez la classe en fonction de la valeur sélectionnée
            if (selectedValue === 'Proclamation' || selectedValue === 'Délibération') {
                $('.nom-affiche').addClass('hidden'); // Ajoutez une classe pour masquer
            } else {
                $('.nom-affiche').removeClass('hidden'); // Supprimez la classe pour afficher
            }
        });
    });
</script>
@endsection