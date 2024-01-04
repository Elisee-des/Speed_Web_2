@extends('public.layouts.app')

@section('titre', "Tableau d'affichage")

@section('content')
<div class="main">
  <div class="container-regsiter">
    <h1 class="title-register">Tableau d'affiches</h1>


    <div class="propos">
      <div class="propos-container">

        <livewire:public.filter-affiche />
        <br>

        <livewire:public.show-affiche />

        {{-- {{ $affiches->links() }}

        <div class="d-gird text-center">
          {{ $products->links('layouts.paginationlinks') }}
        </div> --}}

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