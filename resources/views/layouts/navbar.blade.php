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
    <a href="javascript:void(0);" class="img-hamg">
        <span onclick="openNav()"><i class="fa fa-bars"></i></span>
    </a>
</div>
{{-- <div class="navbar-submenu">
    <div id="myLinks">
        <a href="index.html">Accueil</a>
        <a href="#about">A propos</a>
        <a href="contact.html">Contact</a>
        <a href="inscription.html">Inscription</a>
        <a class="active" href="connexion.html">Connexion</a>
    </div>
</div> --}}

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('apropos')}}">A propos</a>
    <a href="{{route('contact')}}">Contact</a>
    <a href="{{route('register')}}">Inscription</a>
    <a href="{{route('login')}}">Connexion</a>
    <a href="{{route('login')}}">Aller dans mon compte</a>
    <a href="{{route('login')}}">Sabidani Elisee</a>
    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Se déconnecter</a><br>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</div>

<!-- Use any element to open the sidenav -->