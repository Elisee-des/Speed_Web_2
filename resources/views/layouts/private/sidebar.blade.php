<div class="sidebar">
    <a href="{{route('compte.resultats')}}"><i class="fa-solid fa-gauge" style="color: #feffff"></i> Tableau de
        bord</a>
    <a href="{{route('compte.proclamations')}}"><i class="fa-solid fa-list" style="color: #feffff"></i>
        Proclamations</a>
    <a href="{{route('compte.deliberations')}}">
        <i class="fa-solid fa-list-check" style="color: #feffff"></i>
        Delibérations</a>
    <a href="#" class="dropdown-btn"><i class="fa-solid fa-bars-progress" style="color: #feffff"></i>
        Gestions
        <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-container">
        <a href="{{route('resultats.index')}}"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Gestion
            Résultats</a>
        <a href="{{route('proclamations.index')}}"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Gestion
            Proclamations</a>
        <a href="{{route('deliberations.index')}}"><i class="fa-solid fa-right-long" style="color: #feffff"></i> Gestion
            Délibérations</a>
    </div>
    <a href="{{route('compte.aide')}}"><i class="fa-solid fa-message" style="color: #feffff"></i> Aide</a>
    <a href="{{route('profil.accueil')}}"><i class="fa-sharp fa-solid fa-address-card" style="color: #feffff"></i>
        Profil</a>
</div>