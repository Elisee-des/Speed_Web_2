<div class="header">
  <a href="{{route('accueil')}}" class="logo">SPEED-RESULTAT</a>
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
</div>