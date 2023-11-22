@extends('layouts.private.app')

@section('titre', "Tableau de bord ")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    {{-- <li class="breadcrumb-item">
      <a href="deliberation.html">Etudiant</a>
    </li> --}}

    <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header">Bienvenu(e) {{auth()->user()->nom_prenom}}</h2>

  <div class="row mt-4 g-2">
    <a href="#" style="text-decoration: none" class="col-xl-4 col-md-6">
      <div class="card card-animate bg-secondary card-details-elements">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <p class="fw-medium text-white mb-0" style="color: white">Résultats</p>
              <h2 class="mt-2 ff-secondary fw-semibold"><span class="counter-value" data-target="97.66"
                  style="color: white">21</span>
              </h2>
              <p class="mb-0 text-white"><span class="badge bg-light text-danger mb-0"><i
                    class="ri-arrow-down-line align-middle" style="color: white"></i> Le total
                </span> des resultats
              </p>
            </div>
            <div>
              <div class="avatar-sm flex-shrink-0">
                <span class="avatar-title bg-soft-info rounded-circle fs-2">
                  <i data-feather="activity" class="text-info"></i>
                </span>
              </div>
            </div>
          </div>
        </div><!-- end card body -->
      </div> <!-- end card-->
    </a> <!-- end col-->

    <a href="#" style="text-decoration: none" class="col-xl-4 col-md-6">
      <div class="card card-animate bg-danger card-details-elements">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <p class="fw-medium text-white-50 mb-0">Proclamations</p>
              <h2 class="mt-2 ff-secondary fw-semibold text-white"><span class="counter-value" data-target="3">30</span>
              </h2>
              <p class="mb-0 text-white-50"><span class="badge badge-soft-light mb-0"><i
                    class="ri-arrow-down-line align-middle"></i> le total </span> des proclamations
              </p>
            </div>
            <div>
              <div class="avatar-sm flex-shrink-0">
                <span class="avatar-title bg-soft-light rounded-circle fs-2">
                  <i data-feather="clock" class="text-white"></i>
                </span>
              </div>
            </div>
          </div>
        </div><!-- end card body -->
      </div> <!-- end card-->
    </a> <!-- end col-->

    <a href="#" style="text-decoration: none" class="col-xl-4 col-md-6">
      <div class="card card-animate card-details-elements" style="background-color: #008069">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <p class="fw-medium text-white mb-0">Déliberation</p>
              <h2 class="mt-2 ff-secondary fw-semibold"><span class="counter-value" style="color: white"
                  data-target="33.48">50</span>
              </h2>
              <p class="mb-0 text-white"><span class="badge bg-light text-success mb-0"><i
                    class="ri-arrow-up-line align-middle"></i> Total </span> des délibérations.</p>
            </div>
            <div>
              <div class="avatar-sm flex-shrink-0">
                <span class="avatar-title bg-soft-info rounded-circle fs-2">
                  <i data-feather="external-link" class="text-info"></i>
                </span>
              </div>
            </div>
          </div>
        </div><!-- end card body -->
      </div> <!-- end card-->
    </a>

    <p class="title-liste-fichier">PERSONNEL</p>
    <div class="list-fichiers">
      <div class="detail-liste-profil-dashbord">
        <a href="{{route('profil.accueil')}}" class="" style="color: white"><i class="fa-solid fa-user"
            style="color: #feffff;"></i> Mon profil</a>
      </div>
      <div class="detail-liste-nos-delegue-dashbord">
        <a href="{{route('etudiant.delegues')}}" class="" style="color: white"><i class="fa-solid fa-users-between-lines" style="color: #feffff;"></i>
          Nos délégués</a>
      </div>
      <div class="detail-liste-fichier-dashbord">
        <a href="" class="" style="color: white"><i class="fa-regular fa-file-image" style="color: #feffff;"></i> Mes
          fichiers</a>
      </div>
      <div class="detail-liste-notification-dashbord">
        <a href="" class="" style="color: white"><i class="fa-solid fa-bell" style="color: #feffff;"></i>
          Notifications</a>
      </div>
      <div class="detail-liste-aide-dashbord">
        <a href="{{route('compte.aide')}}" class="" style="color: white"><i class="fa-solid fa-handshake-angle"
            style="color: #feffff;"></i> Demander de l'aide</a>
      </div>
      <div class="detail-liste-autre-dashbord"><a href="{{route('accueil')}}" class="a-liste-fichier"
          style="color: white"><i class="fa-solid fa-house" style="color: #feffff;"></i> Site</a>
        <a href="{{route('logout')}}" class="a-liste-fichier" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();" style="color: white"><i
            class="fa-solid fa-right-from-bracket" style="color: #feffff;"></i> Déconnexion</a>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        @method('post')
      </form>
    </div>

  </div>
</div>

@endsection