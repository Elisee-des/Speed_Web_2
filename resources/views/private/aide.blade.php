@extends('layouts.private.app')

@section('titre', "Aide")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('profil.accueil')}}">Profil</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">Message</li>
  </ol>
</nav>

<div class="container-content">
  <h2
    class="title-header"
    style="text-align: center;, margin-bottom:10px;"
  >
    Contact l'administrateur en cas de besion
  </h2>
  <div class="container-formulaire-contact">
    <form action="#">
      <label for="sujet">Sujet</label>
      <input
        type="text"
        id="sujet"
        name="sujet"
        class="input-contact"
        placeholder="Veuillez entrer le sujet de votre message"
      />

      <label for="subject">Subject</label>
      <textarea
        id="subject"
        class="input-contact"
        name="subject"
        placeholder="Veuillez entrez ici votre message"
        style="height: 100px"
      ></textarea>

      <div class="cnt">
        <input type="submit" value="Envoyez" class="submit-contact" />
      </div>
    </form>
  </div>
</div>

@endsection