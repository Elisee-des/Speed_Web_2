@extends('layouts.private.app')

@section('titre', "Paramètrage des délégués")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Liste des délégués</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Paramètrage</li>
    </ol>
</nav>

<div class="container-content">

    <div class="row mt-4 g-2">
        <p class="title-liste-fichier">Paramétrage de mes délégues</p>
        <div class="delegues-parametre-container-2">
            @if (!$delegues->isEmpty())
             <div class="container-formulaire-file">
                <form action="{{route('etudiant.delegues.parametre.ajout')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="content-edit-file">
                        {{-- <h5>Mon image actuel</h5> --}}

                        <div class="container-edit-file">
                            <label for="new_image">Choisir un délégue</label>
                            {{-- <input type="file" id="new_image" name="new_image" class="input-file-edit" /> --}}
                            <select class="form-select-auth"
                                class="input-file-edit @error('delegue_id') is-invalid @enderror" id="delegue_id"
                                name="delegue_id" aria-label="Default select example">
                                @foreach ($delegues as $delegue)
                                <option value="{{$delegue->id}}">{{$delegue->delegues}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="cnt-file" style="gap: 3px">
                        <button type="submit" class="submit-file">
                            <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i>
                            Ajouter
                        </button>
                    </div>
                </form>
            </div>
            @endif

            <div class="container-formulaire-file-parametre">
                @foreach (auth()->user()->delegues as $delegue)
                <div class="parametre-delegue-detail">
                    <p class="parametre-npm_delegue">{{$delegue->delegues}}</p> <a href="" onclick="event.preventDefault();
      document.getElementById('detach-form').submit();" class="parametre-npm_delegue-action"><i
                            class="fa-solid fa-user-minus"></i></a>
                </div>
                <form id="detach-form" action="{{route('etudiant.delegues.parametre.detache', $delegue->id)}}"
                    method="POST">
                    @csrf
                </form>
                <hr class="hr-trait" />
                @endforeach
            </div>
        </div>
        <div class="cnt-profil" style="margin-bottom: 40px">
            <a href="{{route('etudiant.delegues')}}" type="submit"
                style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
                <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
            </a>
        </div>
    </div>
</div>

{{-- Using bootstrap model --}}



@endsection