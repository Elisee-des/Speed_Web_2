@extends('public.layouts.app')

@section('titre', "Tableau d'affichage")

@section('content')
<div class="main">
  <div class="container-regsiter">
    <h1 class="title-register">Tableau d'affiches</h1>
    <div class="propos">
      <div class="propos-container">
        <div class="p-container">

          @foreach ($affiches as $affiche)
          <div class="container-contenu-propos">
            <a href="{{route('affiches.detail', $affiche->id)}}" class="title-option-propos">{{$affiche->categorie->nom}} - @if($affiche->nom != '') {{$affiche->nom}} -  @endif</a>
              <a href="{{route('affiches.detail', $affiche->id)}}" class="title-option-propos">{{$affiche->semestre->nom}}</a>
            <h6 class="description-propos-h5"><span style="text-decoration: underline">Session</span> :
              <strong>{{$affiche->session}}</strong>
            </h6>
            <h6 class="description-propos-h6"><span style="text-decoration: underline">université</span> : {{$affiche->semestre->universite->nom}}</h6>
            <h6 class="description-propos-h6"><span style="text-decoration: underline">Images</span> : {{count($affiche->images)}}</h6>
            <p class="description-propos">
              <span style="text-decoration: underline">Publié le</span> : {{$affiche->created_at->format('d/m/y')}}
            </p>
            <p class="">
              <span style="text-decoration: underline">Publié par les chefs</span> : {{$affiche->user->nom_prenom}}
            </p>
          </div>
          @endforeach

        </div>

      </div>

    </div>

    <div class="mt-1 mb-3 cnt-profil">
      <a href="{{route('accueil')}}" type="submit" style="text-decoration:none;, gap: 3; background:#ff6333;"
        class="submit-profil">
        <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Accueil
      </a>
    </div>
  </div>
</div>
@endsection