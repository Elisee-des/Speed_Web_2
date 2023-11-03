@extends('layouts.private.app')

@section('titre', "Aide")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="contact.html">Aide</a>
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
      <label for="fname">Nom et Prénom</label>
      <input
        type="text"
        id="fname"
        name="nom_prenom"
        class="input-contact"
        placeholder="Veuillez entrer votre nom et prénom"
      />

      <label for="email">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        class="input-contact"
        placeholder="Veuillez entrer votre email"
      />

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