<div class="sidebar">
    @role('Admin')
    <a href="{{route('admin.tableaudebord')}}" class="mt-3"><i class="fa-solid fa-gauge" style="color: #feffff"></i>
        Tableau de
        bord</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-file-image" style="color: #feffff;"></i>
        Fichiers</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-user-secret" style="color: #feffff;"></i>
        Gestionnaires</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-user-group" style="color: #feffff;"></i>
        Délégués</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-users-gear" style="color: #feffff;"></i>
        Etudiants</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-bell" style="color: #feffff;"></i>
        Notifications</a>
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
        Profil</a>
    <a href="{{route('profil.accueil')}}"><i class="fa-solid fa-gear" style="color: #feffff;"></i>
        Paramètre du site</a>
    @endrole


    @role('Gestionnaire')
    <a href="{{route('gestionnaire.tableaudebord')}}" class="mt-3"><i class="fa-solid fa-gauge"
            style="color: #feffff"></i>
        Tableau de bord</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-user-group" style="color: #feffff;"></i>
        Délégués</a>
    <a href="{{route('admin.tableaudebord')}}" class=""><i class="fa-solid fa-users-gear" style="color: #feffff;"></i>
        Etudiants</a>
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
        Profil</a>
    @endrole


    @role('Delegue')
    <a href="{{route('delegue.tableaudebord')}}" class="mt-3"><i class="fa-solid fa-gauge" style="color: #feffff"></i>
        Tableau de bord</a>
    <a href="#" class="dropdown-btn"><i class="fa-solid fa-bars-progress" style="color: #feffff"></i>
        Gestions
        <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-container">
        <a href="{{route('delegue.resultats.index')}}"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Gestion
            Résultats</a>
        <a href="{{route('delegue.proclamations.index')}}"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Gestion
            Proclamations</a>
        <a href="{{route('delegue.deliberations.index')}}"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Gestion
            Délibérations</a>
    </div>
    <a href="" class=""><i class="fa-solid fa-users-gear" style="color: #feffff;"></i>
        Etudiants</a>
    <a href="{{route('compte.aide')}}"><i class="fa-solid fa-message" style="color: #feffff"></i> Aide</a>
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
        Profil</a>
    @endrole


    @role('Etudiant')
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
    @endrole

</div>

