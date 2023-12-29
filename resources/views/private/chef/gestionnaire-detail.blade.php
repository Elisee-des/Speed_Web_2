@extends('private.layouts.app')

@section('titre', "Profil")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('delegue.tableaudebord')}}">Accueil</a>
    </li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header">Detail de <a href="#">Ouedraogo Ali</a></h2>
  <div class="profil-container">
    <div class="content-profil-image">
      @if (Auth()->user()->image)
      <img src="{{asset(Auth()->user()->image->nom)}}" alt="" class="image-profil" />
      @else
      <p>Aucune image disponible</p>
      @endif
    </div>

    <div class="profil-content">
      <div class="content-element">
        <h3 class="first-profil">Nom:</h3>
        <h3 class="seccond-profil">{{Auth()->user()->nom_prenom}}</h3>
      </div>
      <div class="content-element">
        <h4 class="first-profil">UFR(Departement):</h4>
        @if (Auth()->user()->ufr != '')
        <h4 class="seccond-profil">{{Auth()->user()->ufr}}</h4>
        @else
        <h4 class="seccond-profil">Aucun</h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Filière:</h4>
        @if (Auth()->user()->ufr != '')
        <h4 class="seccond-profil">{{Auth()->user()->filiere}}</h4>
        @else
        <h4 class="seccond-profil">Aucun</h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Telephone:</h4>
        @if (Auth()->user()->ufr != '')
        <h4 class="seccond-profil">{{Auth()->user()->telephone}}</h4>
        @else
        <h4 class="seccond-profil">Aucun</h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">INE:</h4>
        @if (Auth()->user()->ine != '')
        <h4 class="seccond-profil">{{Auth()->user()->ine}}</h4>
        @else
        <h4 class="seccond-profil">Aucun</h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Email:</h4>
        @if (Auth()->user()->email != '')
        <h4 class="seccond-profil">{{Auth()->user()->email}}</h4>
        @else
        <h4 class="seccond-profil">Aucun</h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Niveau d'etude:</h4>
        @if (Auth()->user()->niveau_licence != '')
        <h4 class="seccond-profil">{{Auth()->user()->niveau_licence}}</h4>
        @else
        <h4 class="seccond-profil">Aucun</h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Promotion:</h4>
        @if (Auth()->user()->promotion != '')
        <h4 class="seccond-profil">{{Auth()->user()->promotion}}</h4>
        @else
        <h4 class="seccond-profil">Aucun</h4>
        @endif
      </div>
      {{-- <div class="content-element">
        <h4 class="first-profil">Vos Délégues:</h4>
        <h4 class="seccond-profil"></h4>
      </div> --}}
    </div>
  </div>
  
  <div class="cnt-profil" style="margin-bottom: 40px">
    <a href="{{route('delegue.tableaudebord')}}" type="submit"
      style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
      <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
    </a>
  </div>
</div>

@endsection