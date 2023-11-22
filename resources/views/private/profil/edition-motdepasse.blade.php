@extends('layouts.private.app')

@section('titre', "Editionn du mot de passe")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('profil.accueil')}}">Profil</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">
      Edition du mot de passe
    </li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
    Modification du mot de passe
  </h2>
  <div class="container-formulaire-profil">
    <form action="{{route('profil.edition.motdepasse.action')}}" method="POST">
      @csrf
      <div class="content-edit-password">
        {{-- <div class="container-edit-password">
          <label for="fname">Mot de passe actuel</label>
          <input type="text" id="fname" name="nom" class="input-profil-edit"
            placeholder="Veuillez entrer votre mot de passe actuel" />
        </div> --}}
        <div class="container-edit-password">
          <label for="new_password">Nouveau mot de passe <span style="color: red">*</span></label>
          <input type="text" id="new_password" name="new_password"
            class="input-profil-edit @error('new_password') is-invalid @enderror"
            placeholder="Votre nouveau mot de passe" />

        </div>
        <div class="container-edit-password">
          <label for="new_password">Répétez votre mot de passe <span style="color: red">*</span></label>
          <input type="text" id="new_password" name="new_password_confirmation" class="input-profil-edit"
            placeholder="Répéter votre nouveau mot de passe" />
        </div>

        @if ($errors->has('new_password'))
        <span class="text-danger">{{ $errors->first('new_password') }}</span>
        @endif
      </div>


      <div class="cnt-profil" style="gap: 3px">
        <button type="submit" class="submit-profil">
          <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i>
          Changer
        </button>
        <a href="{{route('profil.accueil')}}" type="submit" style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
          {{-- <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i> --}}
          Retour
        </a>
      </div>
    </form>
  </div>
</div>

@endsection