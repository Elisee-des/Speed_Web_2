@extends('layouts.app')

@section('titre', "Inscription")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register">Inscription</h1>
        <p class="title-register">
            Veuillez entrez vos cordonnées pour vous creér un compte
        </p>

        <form action="{{route('auth.inscription.save')}}" class="form-regsiter">
            <div class="container">
                <label for="nom_prenom"><b>Nom Prénom</b></label>
                <input type="text" placeholder="Entrez Votre Nom Et Votre Prenom" name="nom_prenom" id="nom_prenom" />

                <label for="ine"><b>INE</b></label>
                <input type="text" placeholder="Entrez Votre Ine" name="ine" id="ine" />

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Entrez Votre Email" name="email" id="email" />

                <label for="psw"><b>Mot De Passe</b></label>
                <input type="password" placeholder="Entrez Un Mot de Passe" name="psw" id="psw" />

                <label for="psw-repeat"><b>Repetez Le Mot De Passe</b></label>
                <input type="password" placeholder="Répétez Votre Mot De Passe" name="psw-repeat" id="psw-repeat" />
                <hr />

                <p>
                    Pour creer votre compte assurer vous de lire le condition
                    d'utilisation
                    <a href="#">Terms & Politique</a>.
                </p>
                <button type="submit" class="registerbtn">S'Inscrire</button>
            </div>

            <div class="container signin">
                <p>
                    Avez-vous dèja un compte ?
                    <a href="connexion.html">Se Connecter</a>.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection