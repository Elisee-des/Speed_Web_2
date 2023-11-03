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
  <h2
    class="title-header"
    style="text-align: center;, margin-bottom:10px;"
  >
    Mettez à jour votre compte
  </h2>
  <div class="container-formulaire-profil">
    <form action="../profil.html">
      <div class="content-edit-profil">
        <div class="container-edit-profil">
          <label for="fname">Nom</label>
          <input
            type="text"
            id="fname"
            name="nom"
            value="Ouedraogo"
            class="input-profil-edit"
            placeholder="Veuillez entrer votre nom"
          />
        </div>

        <div class="container-edit-profil">
          <label for="fname">Prenom</label>
          <input
            type="text"
            id="fname"
            name="prenom"
            class="input-profil-edit"
            value="Albert"
            placeholder="Veuillez entrer votre prénom"
          />
        </div>
      </div>

      <div class="content-edit-profil">
        <div class="container-edit-profil">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            value="adgalbert@gmail.com"
            class="input-profil-edit"
            placeholder="Veuillez entrer votre email"
          />
        </div>

        <div class="container-edit-profil">
          <label for="sujet">INE</label>
          <input
            type="text"
            id="sujet"
            name="ine"
            value="N00290320211"
            class="input-profil-edit"
            placeholder="Veuillez entrer votre ine"
          />
        </div>
      </div>

      <div class="content-edit-profil">
        <div class="container-edit-profil">
          <label for="sujet">Niveau etude</label>
          <input
            type="text"
            id="sujet"
            name="niveau_etude"
            class="input-profil-edit"
            value="Licence 2"
            placeholder="Veuillez entrer votre niveau d'etude"
          />
        </div>

        <div class="container-edit-profil">
          <label for="sujet">Promotion</label>
          <input
            type="text"
            id="sujet"
            name="promotion"
            value="2020"
            class="input-profil-edit"
            placeholder="Veuillez entrer votre promotion"
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