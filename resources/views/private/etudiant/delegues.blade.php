@extends('layouts.private.app')

@section('titre', "Liste des délégués")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('etudiant.tableaudebord')}}">Tableau de bord</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Délégués</li>
  </ol>
</nav>

<div class="container-content">

  <div class="row mt-4 g-2">
    <p class="title-liste-fichier">Liste de mes délégues</p>
    <div class="list-fichiers">

      <div class="detail-liste-notification-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Délégues
          de la Licence 1</a>
      </div>

      <div class="detail-liste-profil-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-user"
            style="color: #feffff;"></i> Ouedraogo Alain</a>
      </div>
      <div class="detail-liste-nos-delegue-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-user" style="color: #feffff;"></i> Tapsoba
          Karim</a>

      </div>

      {{-- <div class="detail-liste-notification-dashbord">
        <a href="" class="" style="color: white"><i class="fa-solid fa-bell" style="color: #feffff;"></i>
          Notifications</a>

      </div> --}}
    </div>

    <div class="list-fichiers">
      <div class="detail-liste-notification-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-right-long" style="color: #feffff"></i>
          Délégues de la Licence 2</a>
      </div>
      <div class="detail-liste-profil-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-user"
            style="color: #feffff;"></i> Zongo Daniel</a>
      </div>
      <div class="detail-liste-nos-delegue-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-user" style="color: #feffff;"></i> Sawadogo Salif
        </a>

      </div>
      {{-- <div class="detail-liste-fichier-dashbord">
        <a href="" class="" style="color: white"><i class="fa-regular fa-file-image" style="color: #feffff;"></i> Mes
          fichiers</a>

      </div>
      <div class="detail-liste-notification-dashbord">
        <a href="" class="" style="color: white"><i class="fa-solid fa-bell" style="color: #feffff;"></i>
          Notifications</a>

      </div> --}}
    </div>

    <div class="list-fichiers">
      <div class="detail-liste-notification-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Délégues
          de la Licence 3</a>
      </div>
      <div class="detail-liste-profil-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-user"
            style="color: #feffff;"></i> Zongo Daniel</a>
      </div>
      <div class="detail-liste-nos-delegue-dashbord">
        <a href="#" class="" style="color: white"><i class="fa-solid fa-user" style="color: #feffff;"></i> Sawadogo Salif
        </a>

      </div>
      {{-- <div class="detail-liste-fichier-dashbord">
        <a href="" class="" style="color: white"><i class="fa-regular fa-file-image" style="color: #feffff;"></i> Mes
          fichiers</a>

      </div>
      <div class="detail-liste-notification-dashbord">
        <a href="" class="" style="color: white"><i class="fa-solid fa-bell" style="color: #feffff;"></i>
          Notifications</a>

      </div> --}}
    </div>

  </div>
</div>

@endsection