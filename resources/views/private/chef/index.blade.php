@extends('layouts.private.app')

@section('titre', "Délégué-Tableau de bord ")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="deliberation.html">Délégué</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header">Bienvenu Délégue {{ auth()->user()->nom_prenom }}</h2>
</div>

@endsection