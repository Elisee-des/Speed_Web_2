<div class="header">
    <a href="{{route('accueil')}}" class="logo">SPEED-RESULTAT</a>
    <div class="header-right">
        <div>
            <a href="{{route('accueil')}}">Accueil</a>
            <a href="{{route('apropos')}}">A propos</a>
            {{-- <a href="{{route('contact')}}">Contact</a> --}}
            @auth
            <a href="#">{{ Auth::user()->nom_prenom }}</a>
            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            @else
            <a href="{{route('register')}}" class="">Inscription</a>
            <a class='active' href="{{route('login')}}">Connexion</a>
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
    <a href="{{route('accueil')}}"><i class="fa-solid fa-house" style="color: #feffff;"></i> Accueil</a>
    <a href="{{route('apropos')}}"><i class="fa-solid fa-list" style="color: #feffff;"></i> A propos</a>
    {{-- <a href="{{route('contact')}}">Contact</a> --}}
    @auth
    @role('Admin')
    <a href="{{route('admin.tableaudebord')}}"><i class="fa-solid fa-arrow-right-to-bracket"
            style="color: #feffff;"></i> Aller dans mon compte</a>
    @endrole
    @role('Gestionnaire')
    <a href="{{route('gestionnaire.tableaudebord')}}"><i class="fa-solid fa-arrow-right-to-bracket"
            style="color: #feffff;"></i> Aller dans mon compte</a>
    @endrole
    @role('Delegue')
    <a href="{{route('delegue.tableaudebord')}}"><i class="fa-solid fa-arrow-right-to-bracket"
            style="color: #feffff;"></i> Aller dans mon compte</a>
    @endrole
    @role('Etudiant')
    <a href="{{route('etudiant.tableaudebord')}}"><i class="fa-solid fa-arrow-right-to-bracket"
            style="color: #feffff;"></i> Aller dans mon compte</a>
    @endrole
    <hr class="hr">
    <a href="#"><i class="fa-solid fa-user" style="color: #feffff"></i> {{Auth()->user()->nom_prenom}}</a>
    <a class="active" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"
            style="color: #feffff;"></i> Se déconnecter</a><br>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    @else
    <a href="{{route('register')}}"><i class="fa-solid fa-user-plus" style="color: #feffff;"></i> Inscription</a>
    <a href="{{route('login')}}"><i class="fa-solid fa-arrow-right-to-bracket" style="color: #feffff;"></i>
        Connexion</a>
    @endauth
</div>

<!-- Use any element to open the sidenav -->