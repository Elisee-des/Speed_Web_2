@extends('private.layouts.app')

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
    <div class="delegues-tile-container-2">
      <a href="{{route('etudiant.delegues.parametre')}}" class="ajout-delegue-association"
        title="Clique  ici pour ajouter un nouveau délégué a suivre" data-toggle="modal"
        data-target="#exampleModalCenter"><i class="fa-solid fa-gear" style="color: #feffff;"></i>
        Paramètre</a>
    </div>

    @foreach ($delegues as $delegue)
    <div class="delegue-detail-liste-etudiant">
      <a href="{{route('etudiant.delegues.detail', $delegue->id)}}" class="detail-liste-delegue-licence-detail"
        style="color: white"><i class="fa-solid fa-right-long" style="color: #feffff"></i>
        {{$delegue->niveau_etude}}</a>

      <a href="{{route('etudiant.delegues.detail', $delegue->id)}}" class="detail-liste-delegue-detail"
        style="color: white"><i class="fa-solid fa-user" style="color: #feffff;"></i> {{$delegue->delegues}}</a>
    </div>
    @endforeach
    <div class="cnt-profil" style="margin-bottom: 40px">
      <a href="{{route('etudiant.tableaudebord')}}" type="submit"
        style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
        <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
      </a>
    </div>
  </div>
</div>

{{-- Using bootstrap model --}}



@endsection