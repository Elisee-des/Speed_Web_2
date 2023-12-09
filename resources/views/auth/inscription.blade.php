@extends('layouts.app')

@section('titre', "Inscription")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register"><i class="fa-solid fa-user-plus"></i> Inscription</h1>
        <p class="title-register">
            Veuillez entrez vos cordonnées pour vous creér un compte
        </p>

        <form action="{{route('register.save')}}" class="form-regsiter" method="POST">
            @csrf
            <div class="container">
                <div>
                    <label for="nom_prenom"><b>Nom Prénom</b><span style="color: red">*</span></label>
                <input type="text" value="{{ old('nom_prenom') }}" class="@error('nom_prenom') is-invalid @enderror"
                    placeholder="Entrez Votre Nom Et Votre Prenom" name="nom_prenom" id="nom_prenom" />
                @if ($errors->has('nom_prenom'))
                <span class="text-danger">{{ $errors->first('nom_prenom') }}</span>
                @endif
                </div>

                <div>
                    <label for="email"><b>Email</b><span style="color: red">*</span></label>
                <input type="text" class="@error('email') is-invalid @enderror" value="{{ old('email') }}"
                    placeholder="Entrez Votre Email" name="email" id="email" />
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                </div>

                <div>
                    <label for="password"><b>Mot De Passe</b><span style="color: red">*</span></label>
                <input type="password" class="@error('password') is-invalid @enderror"
                    placeholder="Entrez Un Mot de Passe" name="password" id="password" />
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                </div>

                <div>
                    <label for="password_confirmation"><b>Répétez Le Mot De Passe</b><span
                        style="color: red">*</span></label>
                <input type="password" class="@error('password_confirmation') is-invalid @enderror"
                    placeholder="Répétez Votre Mot De Passe" name="password_confirmation" id="password_confirmation" />
                </div>

                <div>
                    <label for="delegue_id"><b>Choisir vos délégués</b><span style="color: red">*</span></label>
                <select class="form-select-auth" class="@error('delegue_id') is-invalid @enderror" id="delegue_id"
                    name="delegue_id" aria-label="Default select example">
                    <option selected>Aucun</option>
                        @foreach ($delegues as $delegue)
                        <option value="{{$delegue->id}}">{{$delegue->delegues}}</option>
                        @endforeach
                </select>
                {{-- @if ($errors->has('delegue_id'))
                <span class="text-danger">{{ $errors->first('delegue_id') }}</span>
                @endif --}}
                </div>
                <div style="display: flex; justify-content:center;"><hr></div>

                <p>
                    Pour creer votre compte, assurer vous de lire les conditions
                    d'utilisation
                    <a href="#">Terms & Politique</a>.
                </p>
                <button type="submit" class="registerbtn"><i class="fa-solid fa-user-plus"></i> S'Inscrire</button>
            </div>

            <div class="container signin">
                <p>
                    Avez-vous dèja un compte ?
                    <a href="{{route('login')}}">Se Connecter</a>.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection