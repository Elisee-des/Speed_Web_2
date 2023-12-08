@extends('layouts.private.app')

@section('titre', "Detail d'un gestionnaire")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('admin.gestionnaires.index')}}">Gestion des gestionnaires</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Détail</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header">Mon profil</h2>
    <div class="profil-container">
      <div class="content-profil-image">
        @if (Auth()->user()->image)
        <img src="{{asset(Auth()->user()->image->nom)}}" alt="" class="image-profil" />
        @else
        <p>Aucune image disponible</p>
        @endif
        <div class="options-content">
          <a href="{{route('profil.edition.profil')}}" class="edit-account-buttom"
            title="Cliquez ici pour editer les information de votre compte"><i class="fa-regular fa-pen-to-square"
              style="color: #feffff"></i>
            Mettre mon profil à jour
          </a>
          <a href="{{route('profil.edition.motdepasse')}}" class="edit-password-buttom"
            title="Cliquez ici pour editer les le  mot de passe de votre compte"><i class="fa-solid fa-pen-fancy"
              style="color: #feffff"></i>
            Modifier mon mot de passe
          </a>
          <a href="{{route('profil.edition.image')}}" class="edit-image-buttom"
            title="Cliquez ici pour editer votre image"><i class="fa-solid fa-marker" style="color: #feffff"></i>
            Mettre mon image à jour
          </a>
          <a href="{{route('profil.edition.email')}}" class="edit-email-buttom"
            title="Cliquez ici pour editer votre email"><i class="fa-solid fa-square-pen" style="color: #feffff;"></i>
            Changer d'email
          </a>
          {{-- <a href="" class="delete-account-buttom" title="Cliquez ici pour editer supprimer votre compte"
            onclick="return confirm('Etes vous sûr?')"><i class="fa-sharp fa-solid fa-trash" style="color: #feffff"></i>
            Supprimer mon compte</a> --}}
        </div>
      </div>
  
      <div class="profil-content">
        <div class="content-element">
          <h3 class="first-profil">Nom:</h3>
          <h3 class="seccond-profil">{{Auth()->user()->nom_prenom}}</h3>
        </div>
        <div class="content-element">
          <h4 class="first-profil">UFR(Departement):</h4>
          @if (Auth()->user()->ufr != '')
          <h4 class="seccond-profil">{{Auth()->user()->ufr}}</h4>
          @else
          <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
          @endif
        </div>
        <div class="content-element">
          <h4 class="first-profil">Filière:</h4>
          @if (Auth()->user()->ufr != '')
          <h4 class="seccond-profil">{{Auth()->user()->filiere}}</h4>
          @else
          <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
          @endif
        </div>
        <div class="content-element">
          <h4 class="first-profil">Telephone:</h4>
          @if (Auth()->user()->ufr != '')
          <h4 class="seccond-profil">{{Auth()->user()->telephone}}</h4>
          @else
          <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
          @endif
        </div>
        <div class="content-element">
          <h4 class="first-profil">INE:</h4>
          @if (Auth()->user()->ine != '')
          <h4 class="seccond-profil">{{Auth()->user()->ine}}</h4>
          @else
          <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
          @endif
        </div>
        <div class="content-element">
          <h4 class="first-profil">Email:</h4>
          @if (Auth()->user()->email != '')
          <h4 class="seccond-profil">{{Auth()->user()->email}}</h4>
          @else
          <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
          @endif
        </div>
        <div class="content-element">
          <h4 class="first-profil">Niveau d'etude:</h4>
          @if (Auth()->user()->niveau_licence != '')
          <h4 class="seccond-profil">{{Auth()->user()->niveau_licence}}</h4>
          @else
          <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
          @endif
        </div>
        <div class="content-element">
          <h4 class="first-profil">Promotion:</h4>
          @if (Auth()->user()->promotion != '')
          <h4 class="seccond-profil">{{Auth()->user()->promotion}}</h4>
          @else
          <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
          @endif
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

@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection