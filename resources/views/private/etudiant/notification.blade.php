@extends('layouts.private.app')

@section('titre', "Notifications")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('etudiant.tableaudebord')}}">Tableau de bord</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Notifications</li>
  </ol>
</nav>

<div class="container-content">
  <div class="row mt-4 g-2">
    <p class="title-liste-fichier">Notifications</p>
    <div class="list-fichiers">

        
      
    </div>
  </div>
</div>

@endsection