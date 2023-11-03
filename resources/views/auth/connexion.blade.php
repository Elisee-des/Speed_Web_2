@extends('layouts.app')

@section('titre', "Connexion")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register">Connexion</h1>
        <p class="title-register">
            Veuillez entrez vos cordonnées pour vous connecter
        </p>

        <form action="{{route('auth.connexion.action')}}" class="form-login">
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Entrez Votre Email" name="email" id="email" />

                <label for="psw"><b>Mot De Passe</b></label>
                <input type="password" placeholder="Entrez Un Mot de Passe" name="psw" id="psw" />

                <hr />

                <a href=""><button type="submit" class="registerbtn">
                        Se Connecter
                    </button></a>
            </div>

            <div class="container signin">
                <p>
                    Avez-vous dèja un compte ?
                    <a href="inscription.html">S'Inscrire</a>.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection