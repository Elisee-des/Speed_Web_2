<div class="header">
    <a href="{{route('accueil')}}" class="logo">SPEED-RESULTAT</a>
    <div class="header-right">
        <div>
            <a href="{{route('accueil')}}">Accueil</a>
            <a href="{{route('apropos')}}">A propos</a>
            <a href="{{route('contact')}}">Contact</a>
            @auth
            <a href="#">{{ Auth::user()->nom_prenom }}</a>
            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            @else
            <a href="{{route('register')}}" class="">Inscription</a>
            <a class=" active" href="{{route('login')}}" class="">Connexion</a>
            @endauth
            {{-- <a href="private/profil.html"><i class="fa-solid fa-user" style="color: #feffff"></i></a> --}}
        </div>
    </div>
    <a href="javascript:void(0);" class="img-hamg" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="navbar-submenu">
    <div id="myLinks">
        <a href="index.html">Accueil</a>
        <a href="#about">A propos</a>
        <a href="contact.html">Contact</a>
        <a href="inscription.html">Inscription</a>
        <a class="active" href="connexion.html">Connexion</a>
    </div>
</div>