@extends('private.layouts.app')

@section('titre', "Detail de $universite->nom")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('admin.universites.index')}}">Gestion des universités</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Détail</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header">{{$universite->nom}}</h2>
    <div class="profil-container">
      <div class="content-profil-image">
        @if (Auth()->user()->image)
        <img src="{{asset(Auth()->user()->image->nom)}}" alt="" class="image-profil" />
        @else
        <p>Aucune image disponible</p>
        @endif
        <div class="options-content">
          <a href="{{route('profil.edition.image')}}" class="edit-image-buttom"
            title="Cliquez ici pour editer votre image"><i class="fa-solid fa-marker" style="color: #feffff"></i>
            Mettre l'image à jour
          </a>

          <a href="{{route('profil.edition.motdepasse')}}" class="edit-password-buttom"
            title="Cliquez ici pour editer les le  mot de passe de votre compte"><i class="fa-solid fa-pen-fancy"
              style="color: #feffff"></i>
            Mettre les informations à jour
          </a>
        </div>
      </div>
  
      <div class="profil-content">
        <div class="content-element">
          <h3 class="first-profil">Nom :</h3>
          <h3 class="seccond-profil">{{$universite->nom}}</h3>
        </div>
        <div class="content-element">
          <h3 class="first-profil">Sigle :</h3>
          <h3 class="seccond-profil">{{$universite->sigle}}</h3>
        </div>
        <div class="content-element">
          <h3 class="first-profil">Filière :</h3>
          <h3 class="seccond-profil">{{count($universite->filieres)}}</h3>
        </div>
        <div class="content-element">
          <h4 class="first-profil">Date de création :</h4>
          <h4 class="seccond-profil">{{$universite->created_at}}</h4>
        </div>
        
        {{-- <div class="content-element">
          <h4 class="first-profil">Vos Délégues:</h4>
          <h4 class="seccond-profil"></h4>
        </div> --}}
      </div>
    </div>
    
    <div class="cnt-profil" style="margin-bottom: 40px">
      <a href="{{route('admin.gestionnaires.index')}}" type="submit"
        style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
        <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
      </a>
    </div>
  </div>

<div class="modal fade" id="exampleModalEdition" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Changer le mot de passe
                    <strong></strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action=""
                    method="POST">
                    @csrf
                    <div class="">
                        <label for="recipient-name" id="password" class="col-form-label">Nouveau mot de passe</label>
                        <input type="text" name="password" class="form-control"
                            placeholder="Veuillez entre le nom du module" id="recipient-name">
                    </div>
                    <div class="">
                        <label for="recipient-name" id="password_confirmation" class="col-form-label">Répétez le mot de passe</label>
                        <input type="text" name="password_confirmation" class="form-control"
                            placeholder="Veuillez entre le nom du module">
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

@endsection