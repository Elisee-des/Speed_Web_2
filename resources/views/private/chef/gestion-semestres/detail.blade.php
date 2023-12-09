@extends('layouts.private.app')

@section('titre', "Gestion des résultats")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('delegue.semestres.index')}}">Gestion des affiches</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">Détail</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header" style="text-align: center;, margin-bottom:10px margin-top:10px">
    {{$semestre->nom}}
  </h2>

  <div class="">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-0"></h1>
      <div>
        <a href="{{route('delegue.affiches.ajout', ['idSemestre' => $semestre->id])}}" class="btn btn-primary btn-cool"
          title="Clique  ici pour ajouter un nouveau semestre."><i class="fa-solid fa-plus"></i> Nouvelle affiche</a>
      </div>
    </div>

    <hr>
    <table class="table table-bordered table-container-elements">
      <thead>
        <tr>
          <th scope="col">Affiches</th>
          <th scope="col">Images</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($affiches as $affiche)

        <tr>
          <td><a href="{{route('delegue.semestres.show', $affiche->id)}}"
              title="Cliquez pour voir les details">{{$affiche->nom}}</a></td>
          <td><a href="{{route('delegue.semestres.show', $affiche->id)}}"
              title="Cliquez pour voir les details">{{count($affiche->images)}}</a>
          </td>
          <td><a href="{{route('delegue.semestres.show', $affiche->id)}}"
              title="Cliquez pour voir les details">{{$affiche->created_at->format('d/m/y')}}</a></td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>

  <div class="mt-3 cnt-profil">
    <a href="{{route('delegue.semestres.index')}}" type="submit"
      style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
      <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
    </a>
  </div>
</div>

{{-- Modal pour la suppression du semestre --}}
{{-- <div class="modal fade" id="exampleModalDeletesemestre" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Suppression des résultats de
          <strong>{{$semestre->nom_module}}</strong>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('delegue.suppresion-module.action', $semestre->id)}}" method="POST">
          @method('delete')
          @csrf
          <div class="">
            <label for="recipient-name" class="col-form-label">Tout les images associés au résultat de
              <strong>{{$semestre->nom_module}}</strong> seront supprimées.
            </label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"
                style="color: #feffff;"></i> Annuler</button>
            <button type="submit" class="btn btn-primary btn-cool-delete"><i class="fa-solid fa-trash"
                style="color: #feffff;"></i>
              Supprimer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
{{-- Modal pour la suppression du semestre --}}

{{-- <div class="modal fade" id="exampleModalEdition" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edition du résultat <strong>{{$semestre->nom_module}}</strong>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('delegue.edition-nom-module.action', $semestre->id)}}" method="POST">
          @csrf
          <div class="">
            <label for="recipient-name" class="col-form-label">Nom du résultat</label>
            <input type="text" name="nom_module" class="form-control" value="{{$semestre->nom_module}}"
              placeholder="Veuillez entre le nom du module" id="recipient-name">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"
                style="color: #feffff;"></i> Fermer</button>
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
          <strong>{{$semestre->nom_module}}</strong>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('delegue.ajout-image.action', $semestre->id)}}" method="POST"
          enctype="multipart/form-data">
          @csrf
          <div class="">
            <label for="recipient-name" class="col-form-label">Choisir une image</label>
            <input type="file" name="images[]" multiple class="form-control" id="recipient-name">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"
                style="color: #feffff;"></i> Fermer</button>
            <button type="submit" class="btn btn-primary btn-cool"><i class="fa-sharp fa-plus"
                style="color: #feffff;"></i> Ajouter l'image</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
{{-- Fin Modal ajout de l'image --}}

{{-- Modal pour la suppression du semestre --}}
{{-- <div class="modal fade" id="exampleModalsemestreAffiche" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Afficher
          <strong>{{$semestre->nom_module}}</strong>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('delegue.semestres.affiche', $semestre->id)}}" method="POST">
          @method('post')
          @csrf
          <div class="">
            <label for="recipient-name" class="col-form-label">Tout les images associés à
              <strong>{{$semestre->nom_module}}</strong> seront visible chez vos etudiants.
            </label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"
                style="color: #feffff;"></i> Annuler</button>
            <button type="submit" class="btn btn-primary btn-cool-delete"><i class="fa-solid fa-trash"
                style="color: #feffff;"></i>
              Je confirme</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
{{-- Modal pour la suppression du semestre --}}

{{-- Modal pour la suppression du semestre --}}
{{-- <div class="modal fade" id="exampleModalsemestreCache" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cacher
          <strong>{{$semestre->nom_module}}</strong>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('delegue.semestres.cacher', $semestre->id)}}" method="POST">
          @method('post')
          @csrf
          <div class="">
            <label for="recipient-name" class="col-form-label">Tout les images associés à
              <strong>{{$semestre->nom_module}}</strong> seront cachés chez vos etudiants.
            </label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"
                style="color: #feffff;"></i> Annuler</button>
            <button type="submit" class="btn btn-primary btn-cool-delete"><i class="fa-solid fa-trash"
                style="color: #feffff;"></i>
              Je confirme</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
{{-- Modal pour la suppression du semestre --}}

@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection