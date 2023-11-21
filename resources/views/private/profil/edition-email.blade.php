@extends('layouts.private.app')

@section('titre', "Edition de l'email")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('profil.accueil')}}">Profil</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            Edition de l'email
        </li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Modification de l'email
    </h2>

    <div class="container-formulaire-profil">
        <form action="{{route('profil.edition.email.action')}}" method="POST">
            @csrf
            <div class="content-edit-password">
                <div class="container-edit-password">
                    <label for="new_password">Nouveau Email <span style="color: red">*</span></label>
                    <input type="text" id="new_email" name="new_email"
                        class="input-profil-edit @error('new_email') is-invalid @enderror"
                        placeholder="Votre nouveau email" />

                </div>
                @if ($errors->has('new_email'))
                <span class="text-danger">{{ $errors->first('new_email') }}</span>
                @endif
            </div>

            <div class="cnt-profil">
                <button type="submit" style="margin-top:10px; gap: 3;" class="submit-profil"
                    onclick="return confirm('Etes vous sûr de vouloir changer votre email?')">
                    <i class="fa-regular fa-floppy-disk" style="color: #feffff"></i>
                    Changer l'email
                </button>

            </div>
        </form>

    </div>
    <p class="bon-a-savoir-email">
        <span style="color: black; margin-bottom:12px">Important !!!</span> <br>
        <span style="color: black">*</span> Votre email dois être un email unique (Il ne dois pas déja existe dans
        CAMPUS-AFFICHES). <br>
        <span style="color: black">*</span> En chageant votre email, désormais lors de votre connexion votre EMAIL sera
        le nouveau email. <br>
        <span style="color: black">*</span> Une notification vous sera envoyez sur votre nouveau email.
    </p>
</div>

@endsection