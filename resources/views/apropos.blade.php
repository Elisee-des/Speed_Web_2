@extends('layouts.app')

@section('titre', "A propos")


@section('content')
<div class="container-regsiter">
  <h1 class="title-register">A propos</h1>
  <div class="propos">
    <div class="propos-container">
      <div class="p-container">
        <div class="container-contenu-propos">
          <h2 class="title-option-propos">Notre mission</h2>
          <p class="description-propos">
            Faciliter l acces aux resultats scolaires et universitaire
            tout en promouvant la transparence et l accessibilite de l
            information educative.
          </p>
        </div>

        <div class="container-contenu-propos">
          <h2 class="title-option-propos">Notre equipe</h2>
          <p class="description-propos">
            Notre equipe est compose de professionnels passionnees par l
            education et engagee a fournir un service de qualite
            superieure a nos utilisateurs. Chaque membre apporte son
            expertise pour garantir une experience utilisateur
            exeptionnelle.
          </p>
        </div>
      </div>

      <div class="p-container">
        <div class="container-contenu-propos">
          <h2 class="title-option-propos">Notre engagement</h2>
          <p class="description-propos">
            Nous nous engageons a assurer la confidentialite et la
            securite des donnees des etudiants tout en offrant un acces
            facile aux informations sur les resultats academiques.
          </p>
        </div>

        <div class="container-contenu-propos">
          <h2 class="title-option-propos">Contactez-nous</h2>
          <p class="description-propos">
            N hesitez pas a nous contacter pour toute question ,
            commentaire ou suggestion.vous pouver nous rejoindre en
            utilisant le formuaire de contact sur notre site.
            <a href="contact.html">cliquer ici</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection