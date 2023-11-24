@extends('layouts.private.app')

@section('titre', "Detail du délégué Ouedraogo Alassane")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('etudiant.delegues')}}">Liste des délégués</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Détail</li>
    </ol>
</nav>

<div class="" style="gap: 20px">
    <div>
        <p class="title-liste-fichier">Détail du délégué {{$delegue_1->nom_prenom}}</p>

        <div class="container-formulaire-file">
            <form action="{{route('profil.edition.image.action')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content-edit-file">
                    @if ($delegue_1->image)
                    <img src="{{ asset($delegue_1->image->nom) }}" alt="{{ $delegue_1->image->nom }}"
                        class="image-profil-file">
                    @else
                    <p>Aucune image disponible</p>
                    @endif
                </div>
                <div class="info-detail-delegue">
                    <div class="content-element">
                        <h3 class="first-profil">Nom:</h3>
                        <h3 class="seccond-profil">{{$delegue_1->nom_prenom}}</h3>
                    </div>
                    <div class="content-element">
                        <h4 class="first-profil">UFR(Departement):</h4>
                        @if ($delegue_1->ufr != '')
                        <h4 class="seccond-profil">{{$delegue_1->ufr}}</h4>
                        @else
                        <h4 class="seccond-profil">>Aucun</h4>
                        @endif
                    </div>
                    <div class="content-element">
                        <h4 class="first-profil">Telephone:</h4>
                        @if ($delegue_1->ufr != '')
                        <h4 class="seccond-profil">{{$delegue_1->telephone}}</h4>
                        @else
                        <h4 class="seccond-profil">Aucun</h4>
                        @endif
                    </div>
                    <div class="content-element">
                        <h4 class="first-profil">Email:</h4>
                        <h4 class="seccond-profil">{{$delegue_1->email}}</h4>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <hr class="hr-trait">
    <div style="margin-bottom: 20px">
        <p class="title-liste-fichier">Détail du délégué {{$delegue_2->nom_prenom}}</p>

        <div class="container-formulaire-file">
            <form action="{{route('profil.edition.image.action')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content-edit-file">
                    @if ($delegue_2->image)
                    <img src="{{ asset($delegue_2->image->nom) }}" alt="{{ $delegue_2->image->nom }}"
                        class="image-profil-file">
                    @else
                    <p>Aucune image disponible</p>
                    @endif
                </div>
                <div class="info-detail-delegue">
                    <div class="content-element">
                        <h3 class="first-profil">Nom:</h3>
                        <h3 class="seccond-profil">{{$delegue_2->nom_prenom}}</h3>
                    </div>
                    <div class="content-element">
                        <h4 class="first-profil">UFR(Departement):</h4>
                        @if ($delegue_2->ufr != '')
                        <h4 class="seccond-profil">{{$delegue_2->ufr}}</h4>
                        @else
                        <h4 class="seccond-profil">>Aucun</h4>
                        @endif
                    </div>
                    <div class="content-element">
                        <h4 class="first-profil">Telephone:</h4>
                        @if ($delegue_2->ufr != '')
                        <h4 class="seccond-profil">{{$delegue_2->telephone}}</h4>
                        @else
                        <h4 class="seccond-profil">Aucun</h4>
                        @endif
                    </div>
                    <div class="content-element">
                        <h4 class="first-profil">Email:</h4>
                        <h4 class="seccond-profil">{{$delegue_2->email}}</h4>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="cnt-profil" style="margin-bottom: 40px!important">
        <a href="{{route('etudiant.delegues')}}" type="submit"
            style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
            <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
        </a>
    </div>
</div>



@endsection