@extends('layouts.private.app')

@section('titre', "Profil")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="profil.html">Mon Profil</a>
      </li>
    </ol>
  </nav>

  <div class="container-content">
    <h2 class="title-header">Mon profil</h2>
    <div class="profil-container">
      <div class="content-profil-image">
        <img src="{{asset('assets/images/img-2.jpg')}}" alt="" class="image-profil" />
        <div class="options-content">
          <a
            href="{{route('profil.edition.profil')}}"
            class="edit-account-buttom"
            title="Cliquez ici pour editer les information de votre compte"
            ><i
              class="fa-regular fa-pen-to-square"
              style="color: #feffff"
            ></i>
            Mettre mon profil à jour
          </a>
          <a
            href="{{route('profil.edition.motdepasse')}}"
            class="edit-password-buttom"
            title="Cliquez ici pour editer les le  mot de passe de votre compte"
            ><i class="fa-solid fa-pen-fancy" style="color: #feffff"></i>
            Modifier mon mot de passe
          </a>
          <a
            href="{{route('profil.edition.image')}}"
            class="edit-image-buttom"
            title="Cliquez ici pour editer votre image"
            ><i class="fa-solid fa-marker" style="color: #feffff"></i>
            Mettre mon image à jour
          </a>
          <a
            href=""
            class="delete-account-buttom"
            title="Cliquez ici pour editer supprimer votre compte"
            onclick="return confirm('Etes vous sûr?')"
            ><i
              class="fa-sharp fa-solid fa-trash"
              style="color: #feffff"
            ></i>
            Supprimer mon compte</a
          >
        </div>
      </div>

      <div class="profil-content">
        <div class="content-element">
          <h3 class="first-profil">Nom:</h3>
          <h3 class="seccond-profil">Ouedraogo</h3>
        </div>
        <div class="content-element">
          <h4 class="first-profil">Prénom:</h4>
          <h4 class="seccond-profil">Albert</h4>
        </div>
        <div class="content-element">
          <h4 class="first-profil">INE:</h4>
          <h4 class="seccond-profil">N00290320211</h4>
        </div>
        <div class="content-element">
          <h4 class="first-profil">Email:</h4>
          <h4 class="seccond-profil">odgalbert@gmail.com</h4>
        </div>
        <div class="content-element">
          <h4 class="first-profil">Niveau d'etude:</h4>
          <h4 class="seccond-profil">Licence 2</h4>
        </div>
        <div class="content-element">
          <h4 class="first-profil">Promotion:</h4>
          <h4 class="seccond-profil">2020</h4>
        </div>
      </div>
    </div>
  </div>

@endsection