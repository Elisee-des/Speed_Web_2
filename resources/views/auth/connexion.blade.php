@extends('layouts.app')

@section('titre', "Connexion")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register">Connexion</h1>
        <p class="title-register">
            Veuillez entrez vos cordonnées pour vous connecter
        </p>
        <form action="{{route('login.action')}}" class="form-login" method="POST">
            @csrf
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez Votre Email"
                    name="email"  value="{{ old('email') }}" id="email" />
                @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <label for="password"><b>Mot De Passe</b></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Entrez Un Mot de Passe" name="password" id="password" />
                @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

                <hr />

                <a href=""><button type="submit" class="registerbtn">
                        Se Connecter
                    </button></a>
            </div>

            <div class="container signin">
                <p>
                    Avez-vous dèja un compte ?
                    <a href="{{route('register')}}">S'Inscrire</a>.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection