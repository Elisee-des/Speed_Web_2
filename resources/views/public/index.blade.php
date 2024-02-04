@extends('public.layouts.app')

@section('titre', "CAMPUS-AFFICHES")

@section('content')


<div class="hero-image">
  <div class="hero-text">
    <h1>Rester Informer sur la disponibilité de vos copies,</h1>
    <p>des proclamations et des délibérations.</p>
    @auth
    <div class="auth-container">
      <a href="{{route('affiches')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
        class="fa-solid fa-list-check" style="color: #feffff"></i> Tableau d'affiches</a>
      {{-- <a href="{{route('realisations.index')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
        class="fa-solid fa-book-journal-whills" style="color: #feffff;"></i> Réalisations</a> --}}
    </div>
    <div class="auth-container">
      @role('Admin')
      <a href="{{route('admin.tableaudebord')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
          class="fa-solid fa-up-right-from-square" style="color: #feffff;"></i> Aller dans mon compte</a>
      @endrole
      @role('Gestionnaire')
      <a href="{{route('gestionnaire.tableaudebord')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
          class="fa-solid fa-up-right-from-square" style="color: #feffff;"></i> Aller dans mon compte</a>
      @endrole
      @role('Delegue')
      <a href="{{route('delegue.tableaudebord')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
          class="fa-solid fa-up-right-from-square" style="color: #feffff;"></i> Aller dans mon compte</a>
      @endrole
      @role('Etudiant')
      <a href="{{route('etudiant.tableaudebord')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
          class="fa-solid fa-up-right-from-square" style="color: #feffff;"></i> Aller dans mon compte</a>
      @endrole
      <a class="submit-contact-accueil" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket"
          style="text-decoration: none;, color: #feffff;"></i> Se déconnecter</a><br>
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
      </form>
    </div>

    @else
    {{-- <div class="auth-container">
      <a href="{{route('register')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
          class="fa-solid fa-user-plus" style="color: #feffff;"></i> Inscription</a>
      <a href="{{route('login')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
          class="fa-solid fa-arrow-right-to-bracket" style="color: #feffff;"></i> Connexion</a>
    </div> --}}
    <div class="auth-container">
      <a href="{{route('login')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
        class="fa-solid fa-arrow-right-to-bracket" style="color: #feffff;"></i> Connexion</a>
      <a href="{{route('affiches')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
        class="fa-solid fa-list-check" style="color: #feffff"></i> Tableau d'affiches</a>
      {{-- <a href="{{route('realisations.index')}}" style="text-decoration: none;" class="submit-contact-accueil"><i
        class="fa-solid fa-book-journal-whills" style="color: #feffff;"></i> Réalisations</a> --}}
    </div>

    @endauth
  </div>
</div>

<div class="main">
  <section class="section-about">
    <h1 class="title-about">Pourquoi Speed-Resultat ?</h1>
    <p class="description-about">
      <span class="indent">L'obtention</span> des résultats académiques est
      un processus fastidieux et stressant pour les étudiants de
      l'université Norbert Zongo de Koudougou. Notre mission est de
      simplifier ce processus, d'assurer la transparence et de fournir un
      accès facile aux résultats scolaires.Plus besoin de bousculade et des
      prises de tetes. La solution est desormais là.
    </p>
  </section>

  <section class="section-fonctionnement">
    <h1 class="title-about">Comment ça Fonctionne ?</h1>
    <div class="container-infos">
      <div class="detail-fonctionement">
        <h4 class="title-fonctionement">Connexion Facile</h4>
        <p class="container-fonctionement">
          Notre site propose une interface utilisateur conviviale qui permet
          aux étudiants, aux professeurs et au personnel administratif de se
          connecter en toute simplicité. Il suffit de saisir vos
          informations d'identification pour accéder à votre compte
          personnel.
        </p>
      </div>
      <div class="detail-fonctionement">
        <h4 class="title-fonctionement">Consultation des Résultats</h4>
        <p class="container-fonctionement">
          Une fois connecté, les étudiants peuvent consulter leurs
          résultats, que ce soient les copies des évaluations ou les
          résultats finaux de leurs diplômes. Plus de files d'attente
          interminables ni d'attente angoissante. Les informations dont vous
          avez besoin sont à portée de clic.
        </p>
      </div>
      <div class="detail-fonctionement">
        <h4 class="title-fonctionement">Confidentialité et Sécurité</h4>
        <p class="container-fonctionement">
          Nous comprenons l'importance de la confidentialité des données
          académiques. Notre site garantit une sécurité robuste pour
          protéger vos informations personnelles et vos résultats scolaires.
          Seuls les utilisateurs autorisés ont accès à ces informations.
        </p>
      </div>
      <div class="detail-fonctionement">
        <h4 class="title-fonctionement">Communication Simplifiée</h4>
        <p class="container-fonctionement">
          Nous comprenons l'importance de la confidentialité des données
          académiques. Notre site garantit une sécurité robuste pour
          protéger vos informations personnelles et vos résultats scolaires.
          Seuls les utilisateurs autorisés ont accès à ces informations.
        </p>
      </div>
    </div>
  </section>

  <section class="section-avantage">
    <h1 class="title-about">Les avantages</h1>
    <div class="container-avantage">
      <div class="detail-avantage">
        <h4 class="title-avantage">Connexion Facile</h4>
        <ul class="container-avantage-li">
          <li>Accès rapide et facile à leurs résultats.</li>
          <li>Réduction du stress lié à l'attente des résultats.</li>
          <li>
            Communication améliorée avec les enseignants et les pairs.
          </li>
          <li>Confidentialité et sécurité des informations académiques.</li>
        </ul>
      </div>
      <div class="detail-avantage">
        <h4 class="title-avantage">Consultation des Résultats</h4>
        <ul class="container-avantage-li">
          <li>Réduction de la charge de travail administrative.</li>
          <li>Amélioration de la satisfaction des étudiants.</li>
          <li>Augmentation de l'efficacité de la communication interne.</li>
          <li>
            Réduction des coûts liés à l'impression et à la distribution de
            copies papier.
          </li>
        </ul>
      </div>
    </div>
  </section>
</div>


@endsection