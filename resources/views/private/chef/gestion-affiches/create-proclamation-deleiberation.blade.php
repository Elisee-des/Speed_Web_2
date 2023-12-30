@extends('private.layouts.app')

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
            Enregistré une nouvelle proclamtion ou une délibération
        </h2>

        <form action="{{route('delegue.affiches.action', $semestre->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-lg-4">

                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Catégories</h5>
                        </div>
                        <!-- end card body -->
                        <div class="card-body">
                            <select name="categorie" class="form-select" id="categorie-select" data-choices
                                data-choices-search-false>
                                {{-- @foreach ($categories as $categorie) --}}
                                <option value="Proclamation" selected>Proclamation</option>
                                <option value="Délibération" selected>Délibération</option>
                                {{-- @endforeach --}}
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
                                placeholder="Elle sera mise automatiquement">
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                </div>
                <div class="col-lg-8 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Informations</h5>
                        </div>
                        <div class="card-body">
                            {{-- <div class="mb-0 nom-affiche">
                                <label for="recipient-name" class="col-form-label">Nom de l'affiche</label>
                                <input type="text" name="nom" class="form-control" placeholder="Exple: Electricité"
                                    id="recipient-name">
                                @if ($errors->has('nom'))
                                <span class="text-danger">{{ $errors->first('nom') }}</span>
                                @endif
                            </div> --}}

                            <div class="mb-4">
                                <label for="recipient-session" class="col-form-label">Session</label>
                                <select name="session" class="form-select" id="recipient-session" data-choices
                                    data-choices-search-false>
                                    <option value="Session normal" selected>Session normal</option>
                                    <option value="Session de rattrapage">Session de rattrapage</option>
                                </select>
                                @if ($errors->has('session'))
                                <span class="text-danger">{{ $errors->first('session') }}</span>
                                @endif
                            </div>

                            <div class="mb-1">
                                <label for="recipient-file" class="col-form-label">Choisir des images</label>
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