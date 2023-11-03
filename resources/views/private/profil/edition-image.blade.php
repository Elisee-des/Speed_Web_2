@extends('layouts.private.app')

@section('titre', "Image edition")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="profil.edition.compte.html">Profil</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">
      Edition de l'image
    </li>
  </ol>

  <div class="container-content">
    <h2
      class="title-header"
      style="text-align: center;, margin-bottom:10px;"
    >
      Mise à jour de l'image du profil
    </h2>
    <div class="container-formulaire-file">
      <form action="../profil.html">
        <div class="content-edit-file">
          <h5>Image acctuel</h5>
          <img
            src="{{asset('assets/images/img-2.jpg')}}"
            alt="mon image de profil"
            class="image-profil-file"
          />
          <div class="container-edit-file">
            <label for="fname">Choisir une nouvelle image</label>
            <input
              type="file"
              id="fname"
              name="image"
              class="input-file-edit"
            />
          </div>
        </div>

        <div class="cnt-file">
          <button type="submit" style="gap: 3" class="submit-file">
            <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i>
            Sauvegarder
          </button>
        </div>
      </form>
    </div>
  </div>

@endsection