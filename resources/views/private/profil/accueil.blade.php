@extends('private.layouts.app')

@section('titre', "Profil")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      @role('Admin')
      <a href="{{route('admin.tableaudebord')}}">Accueil</a>
      @endrole
      @role('Gestionnaire')
      <a href="{{route('gestionnaire.tableaudebord')}}">Accueil</a>
      @endrole
      @role('Delegue')
      <a href="{{route('delegue.tableaudebord')}}">Accueil</a>
      @endrole
      @role('Etudiant')
      <a href="{{route('etudiant.tableaudebord')}}">Accueil</a>
      @endrole
    </li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header">Mon profil</h2>
  <div class="profil-container">
    <div class="content-profil-image">
      @if (Auth()->user()->image)
      <img src="{{asset(Auth()->user()->image->nom)}}" alt="" class="image-profil" />
      @else
      <img src="{{asset('assets/images/img-4.jpeg')}}" alt="" class="image-profil" />
      @endif
      <div class="options-content">
        <a href="{{route('profil.edition.profil')}}" class="edit-account-buttom"
          title="Cliquez ici pour editer les informations de votre compte"><i class="fa-regular fa-pen-to-square"
            style="color: #feffff"></i>
          Mettre mon profil à jour
        </a>
        <a href="{{route('profil.edition.motdepasse')}}" class="edit-password-buttom"
          title="Cliquez ici pour editer le  mot de passe de votre compte"><i class="fa-solid fa-pen-fancy"
            style="color: #feffff"></i>
          Modifier mon mot de passe
        </a>
        <a href="{{route('profil.edition.image')}}" class="edit-image-buttom"
          title="Cliquez ici pour editer votre image"><i class="fa-solid fa-marker" style="color: #feffff"></i>
          Mettre mon image à jour
        </a>
        <a href="{{route('profil.edition.email')}}" class="edit-email-buttom"
          title="Cliquez ici pour editer votre email"><i class="fa-solid fa-square-pen" style="color: #feffff;"></i>
          Changer d'email
        </a>
        {{-- <a href="" class="delete-account-buttom" title="Cliquez ici pour editer supprimer votre compte"
          onclick="return confirm('Etes vous sûr?')"><i class="fa-sharp fa-solid fa-trash" style="color: #feffff"></i>
          Supprimer mon compte</a> --}}
      </div>
    </div>

    <div class="profil-content">
      <div class="content-element">
        <h3 class="first-profil">Nom:</h3>
        <h3 class="seccond-profil">{{Auth()->user()->nom_prenom}}</h3>
      </div>
      <div class="content-element">
        <h4 class="first-profil">UFR(Departement):</h4>
        @if (Auth()->user()->ufr != '')
        <h4 class="seccond-profil">{{Auth()->user()->ufr}}</h4>
        @else
        <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Filière:</h4>
        @if (Auth()->user()->ufr != '')
        <h4 class="seccond-profil">{{Auth()->user()->filiere}}</h4>
        @else
        <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Telephone:</h4>
        @if (Auth()->user()->ufr != '')
        <h4 class="seccond-profil">{{Auth()->user()->telephone}}</h4>
        @else
        <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">INE:</h4>
        @if (Auth()->user()->ine != '')
        <h4 class="seccond-profil">{{Auth()->user()->ine}}</h4>
        @else
        <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Email:</h4>
        @if (Auth()->user()->email != '')
        <h4 class="seccond-profil">{{Auth()->user()->email}}</h4>
        @else
        <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Niveau d'etude:</h4>
        @if (Auth()->user()->niveau_licence != '')
        <h4 class="seccond-profil">{{Auth()->user()->niveau_licence}}</h4>
        @else
        <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
        @endif
      </div>
      <div class="content-element">
        <h4 class="first-profil">Promotion:</h4>
        @if (Auth()->user()->promotion != '')
        <h4 class="seccond-profil">{{Auth()->user()->promotion}}</h4>
        @else
        <h4 class="seccond-profil"><a href="{{route('profil.edition.profil')}}">Mettre à jour</a></h4>
        @endif
      </div>
      {{-- <div class="content-element">
        <h4 class="first-profil">Vos Délégues:</h4>
        <h4 class="seccond-profil"></h4>
      </div> --}}
    </div>
  </div>
  
@role("Admin")
<div class="cnt-profil" style="margin-bottom: 40px">
  <a href="{{route('admin.tableaudebord')}}" type="submit"
    style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
    <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
  </a>
</div>
@endrole

@role("Gestionnaire")
<div class="cnt-profil" style="margin-bottom: 40px">
  <a href="{{route('gestionnaire.tableaudebord')}}" type="submit"
    style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
    <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
  </a>
</div>
@endrole

@role("Delegue")
<div class="cnt-profil" style="margin-bottom: 40px">
  <a href="{{route('delegue.tableaudebord')}}" type="submit"
    style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
    <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
  </a>
</div>
@endrole

@role("Etudiant")
<div class="cnt-profil" style="margin-bottom: 40px">
  <a href="{{route('etudiant.tableaudebord')}}" type="submit"
    style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
    <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
  </a>
</div>
@endrole
</div>

@endsection