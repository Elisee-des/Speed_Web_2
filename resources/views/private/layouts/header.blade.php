@php
$roles = \App\Helpers\RoleHelper::getUserRoles();
@endphp


<div class="header">
  <a href="{{route('accueil')}}" class="logo">CAMPUS-AFFICHES</a>
  <div class="header-right">
    <div>
      <a class="" href="{{route('accueil')}}">Accueil</a>
      <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Déconnexion</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
      </form>
    </div>
  </div>
  <a href="javascript:void(0);" class="img-hamg">
    <span onclick="openNav2()"><i class="fa fa-bars"></i></span>
  </a>
</div>

<div id="mySidenavprivate" class="sidenav">
  <div class="">
    @if(in_array('Admin', $roles))
    <a href="{{route('accueil')}}" class=""><i class="fa-solid fa-home" style="color: #feffff"></i>
      Accueil du site</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-gauge" style="color: #feffff"></i>
      Tableau de
      bord</a>
    {{-- <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-file-image" style="color: #feffff;"></i>
      Fichiers</a> --}}
    <a href="{{route('admin.gestionnaires.index')}}" class=""><i class="fa-solid fa-user-secret"
        style="color: #feffff;"></i>
      Gestionnaires</a>
    {{-- <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-user-group" style="color: #feffff;"></i>
      Délégués</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-users-gear" style="color: #feffff;"></i>
      Etudiants</a> --}}
      <a href="{{route('admin.universites.index')}}" class=""><i class="fa-solid fa-users-gear" style="color: #feffff;"></i>
        Universités</a>
    {{-- <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-bell" style="color: #feffff;"></i>
      Notifications</a> --}}
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
      Profil</a>
    {{-- <a href="{{route('profil.accueil')}}"><i class="fa-solid fa-gear" style="color: #feffff;"></i>
      Paramètre du site</a> --}}
    <a href="" class=""><i class="fa-solid fa-user" style="color: #feffff"></i>
      {{Auth()->user()->nom_prenom}}</a>
    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"
        style="color: #feffff;"></i> Déconnexion</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">x</a>
    @endif


    @if(in_array('Gestionnaire', $roles))
    <a href="{{route('accueil')}}" class=""><i class="fa-solid fa-home" style="color: #feffff"></i>
      Accueil du site</a>
    <a href="{{route('gestionnaire.tableaudebord')}}" class="m"><i class="fa-solid fa-gauge" style="color: #feffff"></i>
      Tableau de bord</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-user-group" style="color: #feffff;"></i>
      Délégués</a>
    {{-- <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-users-gear" style="color: #feffff;"></i>
      Etudiants</a> --}}
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
      Profil</a>
    <hr class="hr">
    <a href="" class=""><i class="fa-solid fa-user" style="color: #feffff"></i>
      {{Auth()->user()->nom_prenom}}</a>
    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"
        style="color: #feffff;"></i> Déconnexion</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">x</a>
    @endif


    @if(in_array('Delegue', $roles))
    <a href="{{route('accueil')}}" class=""><i class="fa-solid fa-home" style="color: #feffff"></i>
      Accueil du site</a>
    <a href="{{route('delegue.tableaudebord')}}" class=""><i class="fa-solid fa-gauge" style="color: #feffff"></i>
      Tableau de bord</a>
    <a href="{{route('delegue.semestres.index')}}" class=""><i class="fa-solid fa-users-gear"
        style="color: #feffff;"></i>
      Gestions</a>
    <a href="{{route('compte.aide')}}"><i class="fa-solid fa-message" style="color: #feffff"></i> Aide</a>
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
      Profil</a>
    <hr class="hr">
    <a href="" class=""><i class="fa-solid fa-user" style="color: #feffff"></i>
      {{Auth()->user()->nom_prenom}}</a>
    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"
        style="color: #feffff;"></i> Déconnexion</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">x</a>
    @endif


    @if(in_array('Etudiant', $roles))
    <a href="{{route('accueil')}}" class=""><i class="fa-solid fa-home" style="color: #feffff"></i>
      Accueil du site</a>
    <a href="{{route('etudiant.tableaudebord')}}"><i class="fa-solid fa-gauge" style="color: #feffff"></i> Tableau de
      bord</a>
    <a href="{{route('compte.resultats')}}"><i class="fa-solid fa-rectangle-list" style="color: #feffff;"></i>
      Résultats</a>
    <a href="{{route('compte.proclamations')}}"><i class="fa-solid fa-list" style="color: #feffff"></i>
      Proclamations</a>
    <a href="{{route('compte.deliberations')}}">
      <i class="fa-solid fa-list-check" style="color: #feffff"></i>
      Delibérations</a>
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
      Profil</a>
    <a href="{{route('compte.aide')}}"><i class="fa-solid fa-message" style="color: #feffff"></i> Aide</a>
    <hr class="hr">
    <a href="" class=""><i class="fa-solid fa-user" style="color: #feffff"></i>
      {{Auth()->user()->nom_prenom}}</a>
    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"
        style="color: #feffff;"></i> Déconnexion</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    </form>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">x</a>
    @endif

  </div>

</div>