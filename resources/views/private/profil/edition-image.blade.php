@extends('private.layouts.app')

@section('titre', "Image edition")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('profil.accueil')}}">Profil</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">
      Edition de l'image
    </li>
  </ol>

  <div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
      Mise à jour de l'image du profil
    </h2>

    @if ($errors->has('new_image'))
    <div class="alert alert-danger form-login">
      {{ $errors->first('new_image') }}
    </div>
    @endif

    <div class="container-formulaire-file">
      <form action="{{route('profil.edition.image.action')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content-edit-file">
          <h5>Mon image actuel</h5>
          @if ($user->image)
          <img src="{{ asset($user->image->nom) }}" alt="{{ $user->image->nom }}" class="image-profil-file">
          @else
          <p>Aucune image disponible</p>
          @endif

          <div class="container-edit-file">
            <label for="new_image">Choisir une nouvelle image</label>
            <input type="file" id="new_image" name="new_image" class="input-file-edit" />
          </div>
          
        </div>

        <div class="cnt-file" style="gap: 3px">
          <button type="submit" style="gap: 3" class="submit-file">
            <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i>
            Sauvegarder
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