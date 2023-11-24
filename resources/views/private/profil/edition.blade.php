@extends('layouts.private.app')

@section('titre', "Profil")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('profil.accueil')}}">Profil</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">Edition</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
    Mettez à jour votre compte
  </h2>
  <div class="container-formulaire-profil">
    <form action="{{route('profil.edition.action')}}" method="POST">
      @csrf
      <div class="content-edit-profil">
        <div class="container-edit-profil">
          <label for="nom_prenom">Nom Prénom</label>
          <input type="text" id="nom_prenom" name="nom_prenom" value="{{Auth()->user()->nom_prenom}}"
            class="input-profil-edit form-control @error('nom_prenom') is-invalid @enderror"
            placeholder="Veuillez entrer votre nom et prenom" />
          @error('nom_prenom')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="container-edit-profil">
          <label for="telephone">Telephone</label>
          <input type="text" id="telephone" name="telephone"
            class="input-profil-edit form-control @error('telephone') is-invalid @enderror"
            value="{{Auth()->user()->telephone}}" placeholder="Veuillez entrer votre telephone" />
          @error('telephone')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="container-edit-profil">
          <label for="ufr">UFR</label>
          <input type="text" id="ufr" name="ufr"
            class="input-profil-edit form-control @error('ufr') is-invalid @enderror" value="{{Auth()->user()->ufr}}"
            placeholder="Veuillez entrer votre UFR" />
          @error('ufr')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="content-edit-profil">
        {{-- <div class="container-edit-profil">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="{{Auth()->user()->email}}"
            class="input-profil-edit form-control @error('email') is-invalid @enderror"
            placeholder="Veuillez entrer votre email" />
          @error('email')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div> --}}

        <div class="container-edit-profil">
          <label for="promotion">Promotion</label>
          <input type="text" id="supromotionjet" name="promotion" value="{{Auth()->user()->promotion}}"
            class="input-profil-edit form-control @error('email') is-invalid @enderror"
            placeholder="Veuillez entrer votre promotion" />
          @error('promotion')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="container-edit-profil">
          <label for="ine">INE</label>
          <input type="text" id="ine" name="ine" value="{{Auth()->user()->ine}}"
            class="input-profil-edit form-control @error('ine') is-invalid @enderror"
            placeholder="Veuillez entrer votre ine" />
          @error('ine')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="container-edit-profil">
          <label for="filiere">Filière</label>
          <input type="text" id="filiere" name="filiere" value="{{Auth()->user()->filiere}}"
            class="input-profil-edit form-control @error('filiere') is-invalid @enderror"
            value="{{Auth()->user()->ine}}" placeholder="Veuillez entrer votre filiere" />
          @error('filiere')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="content-edit-profil">
        <div class="container-edit-profil">
          <label for="niveau_licence">Niveau Licence</label>
          <input type="text" id="niveau_licence" name="niveau_licence"
            class="input-profil-edit form-control @error('niveau_licence') is-invalid @enderror"
            value="{{Auth()->user()->niveau_licence}}" placeholder="Veuillez entrer votre niveau d'etude" />
          @error('niveau_licence')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        {{-- <div class="container-edit-profil">
          <label for="sujet">Promotion</label>
          <input type="text" id="sujet" name="promotion" value="{{Auth()->user()->promotion}}" class="input-profil-edit"
            placeholder="Veuillez entrer votre promotion" />
        </div> --}}


      </div>

      <div class="cnt-profil" style="gap: 3px">
        <button type="submit" style="gap: 3" class="submit-profil">
          <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i>
          Enregistrer
        </button>
        <a href="{{route('profil.accueil')}}" type="submit" style="text-decoration:none;, gap: 3; background:#ff6333;"
          class="submit-profil">
          <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
        </a>
      </div>
    </form>
  </div>
</div>
@endsection