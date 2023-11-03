@extends('layouts.private.app')

@section('titre', "Profil")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="profil.edition.compte.html">Profil</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">
      Edition du mot de passe
    </li>
  </ol>
</nav>

<div class="container-content">
  <h2
    class="title-header"
    style="text-align: center;, margin-bottom:10px;"
  >
    Modification du mot de passe
  </h2>
  <div class="container-formulaire-profil">
    <form action="../profil.html">
      <div class="content-edit-password">
        <div class="container-edit-password">
          <label for="fname">Mot de passe actuel</label>
          <input
            type="text"
            id="fname"
            name="nom"
            class="input-profil-edit"
            placeholder="Veuillez entrer votre mot de passe actuel"
          />
        </div>
        <div class="container-edit-password">
          <label for="fname">Nouveau mot de passe</label>
          <input
            type="text"
            id="fname"
            name="nom"
            class="input-profil-edit"
            placeholder="Veuillez entrer votre mot nouveau mot de passe"
          />
        </div>
        <div class="container-edit-password">
          <label for="fname">Repetez votre mot de passe</label>
          <input
            type="text"
            id="fname"
            name="nom"
            class="input-profil-edit"
            placeholder="Veuillez entrer votre mot nouveau mot de passe"
          />
        </div>
      </div>

      <div class="cnt-profil">
        <button type="submit" style="gap: 3" class="submit-profil">
          <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i>
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</div>

@endsection