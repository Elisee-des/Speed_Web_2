@extends('layouts.app')

@section('titre', "Tableau d'affichage")

@section('content')
<div class="main">
  <div class="container-regsiter">
    <h1 class="title-register">Tableau d'affiches</h1>
    <div class="propos">
      <div class="propos-container">
        <div class="p-container">
          <div class="container-contenu-propos">
            <a href="{{route('affiches.detail', 1)}}" class="title-option-propos">SVT L1 S2 Session normal Promotion 2019.</a>
            <h6 class="description-propos-h5"><span style="text-decoration: underline">Catégories</span> : <strong>Proclamation des résultas</strong></h6>
            <h6 class="description-propos-h6"><span style="text-decoration: underline">Images</span> : 10</h6>
            <p class="description-propos">
              <span style="text-decoration: underline">Publié le</span> : 12/02/2023
            </p>
          </div>

          <div class="container-contenu-propos">
            <a href="{{route('affiches.detail', 1)}}" class="title-option-propos">MPCI L1 S1 Session normal Promotion 2022.</a>
            <h6 class="description-propos-h5"><span style="text-decoration: underline">Catégories</span> : <strong>Proclamation des résultas</strong></h6>
            <h6 class="description-propos-h6"><span style="text-decoration: underline">Images</span> : 10</h6>
            <p class="description-propos">
              <span style="text-decoration: underline">Publié le</span> : 12/02/2023
            </p>
          </div>

          <div class="container-contenu-propos">
            <a href="{{route('affiches.detail', 1)}}" class="title-option-propos">SEG L2 S3 Session normal Promotion 2023.</a>
            <h6 class="description-propos-h5"><span style="text-decoration: underline">Catégories</span> : <strong>Délibération des résultas</strong></h6>
            <h6 class="description-propos-h6"><span style="text-decoration: underline">Images</span> : 10</h6>
            <p class="description-propos">
              <span style="text-decoration: underline">Publié le</span> : 12/02/2023
            </p>
          </div>
        </div>
  
      </div>
    </div>
  </div>
</div>
@endsection