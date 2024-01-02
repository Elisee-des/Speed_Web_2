@extends('public.layouts.app')

@section('titre', "Detail")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register">{{$affiche->categorie->nom}} - @if($affiche->nom != '') {{$affiche->nom}} - @endif {{$affiche->semestre->nom}}
        </h1>

        <div class="f-colunm ">
            <div class="a-content-option mb-3">
                <div class="container-contenu-propos">
                    {{-- <a href="{{route('affiches.detail', $affiche->id)}}"
                        class="title-option-propos">{{$affiche->categorie->nom}} - @if($affiche->nom != '')
                        {{$affiche->nom}} - @endif</a> --}}
                    {{-- <a href="{{route('affiches.detail', $affiche->id)}}"
                        class="title-option-propos">{{$affiche->semestre->nom}}</a> --}}
                    <h6 class="description-propos-h5"><span style="text-decoration: underline">Session</span> :
                        <strong>{{$affiche->session}}</strong>
                    </h6>
                    <h6 class="description-propos-h6"><span style="text-decoration: underline">université</span> :
                        {{$affiche->semestre->universite->nom}}</h6>
                    <h6 class="description-propos-h6"><span style="text-decoration: underline">Images</span> :
                        {{count($affiche->images)}}</h6>
                        <p class="">
                            <span style="text-decoration: underline">Publié par les chefs</span> :
                            {{$affiche->user->nom_prenom}}
                        </p>
                        <p class="description-propos">
                            <span style="text-decoration: underline">Publié le</span> :
                            {{$affiche->created_at->format('d/m/y')}}
                        </p>
                </div>
            </div>
            @foreach ($affiche->images as $image)
            <div class="card p-1 mb-3 contenair-images-detail">
                {{-- <img src="{{ asset('storage/images/deliberations/' . $image->path) }}" class="d-block w-100"
                    alt="images des deliberations de {{ $deliberation->nom_module }}" /> --}}
                <img src="{{ asset('storage/images/affiches/' . $image->path) }}" class="d-block w-100"
                    alt="images des affichages" />
            </div>
            @endforeach

        </div>
        <div class="mt-3 mb-3 cnt-profil">
            <a href="{{route('affiches')}}" type="submit" style="text-decoration:none;, gap: 3; background:#ff6333;"
                class="submit-profil">
                <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Tableau d'affiches
            </a>
        </div>
    </div>
</div>
@endsection