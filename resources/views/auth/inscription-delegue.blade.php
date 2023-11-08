@extends('layouts.app')

@section('titre', "Inscription")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register"><i class="fa-solid fa-user-nurse" style="color: #000000;"></i> Inscription-Délegué</h1>
        <p class="title-register"><i class="fa-solid fa-triangle-exclamation" style="color: #000000;"></i> Le délegué et son adjoint s'incrit en même temps.
        </p>

        <form action="{{route('auth.inscription.save')}}">
            <div class="delegue-container-formulaire">
                <div class="form-regsiter">
                    <p class="title-delegue">Délégué</p>
                    <div class="container">
                        <label for="nom_prenom"><b>Nom Prénom</b><span style="color: red">*</span></label>
                        <input type="text" placeholder="Entrez Votre Nom Et Votre Prenom" name="nom_prenom"
                            id="nom_prenom" />

                        <label for="ine"><b>INE</b><span style="color: red">*</span></label>
                        <input type="text" placeholder="Entrez Votre Ine" name="ine" id="ine" />

                        <label for="email"><b>Email</b><span style="color: red">*</span></label>
                        <input type="text" placeholder="Entrez Votre Email" name="email" id="email" />

                        <label for="psw"><b>Mot De Passe</b><span style="color: red">*</span></label>
                        <input type="password" placeholder="Entrez Un Mot de Passe" name="psw" id="psw" />

                        <label for="psw-repeat"><b>Repetez Le Mot De Passe</b><span style="color: red">*</span></label>
                        <input type="password" placeholder="Répétez Votre Mot De Passe" name="psw-repeat"
                            id="psw-repeat" />

                        <label for="psw-repeat"><b>Choisir vos délégués</b><span style="color: red">*</span></label>
                        <select class="form-select-auth" aria-label="Default select example">
                            <option selected>Aucun</option>
                            <option value="1">Justin & Alex (p20)</option>
                            <option value="2">Albert & Doli (p21)</option>
                        </select>

                    </div>
                </div>

                <div class="form-regsiter">
                    <p class="title-delegue">Délégué adjoint</p>
                    <div class="container">
                        <label for="nom_prenom"><b>Nom Prénom</b><span style="color: red">*</span></label>
                        <input type="text" placeholder="Entrez Votre Nom Et Votre Prenom" name="nom_prenom"
                            id="nom_prenom" />

                        <label for="ine"><b>INE</b><span style="color: red">*</span></label>
                        <input type="text" placeholder="Entrez Votre Ine" name="ine" id="ine" />

                        <label for="email"><b>Email</b><span style="color: red">*</span></label>
                        <input type="text" placeholder="Entrez Votre Email" name="email" id="email" />

                        <label for="psw"><b>Mot De Passe</b><span style="color: red">*</span></label>
                        <input type="password" placeholder="Entrez Un Mot de Passe" name="psw" id="psw" />

                        <label for="psw-repeat"><b>Repetez Le Mot De Passe</b><span style="color: red">*</span></label>
                        <input type="password" placeholder="Répétez Votre Mot De Passe" name="psw-repeat"
                            id="psw-repeat" />

                        <label for="psw-repeat"><b>Choisir vos délégués</b><span style="color: red">*</span></label>
                        <select class="form-select-auth" aria-label="Default select example">
                            <option selected>Aucun</option>
                            <option value="1">Justin & Alex (p20)</option>
                            <option value="2">Albert & Doli (p21)</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="container signin">
                <button type="submit" class="registerbtn-delegue">Inscription</button>
                <p>
                    En m'incrivant en tant que delegue, je confirme avoir lu les
                    <a href="#">Terms & Politique</a>.
                </p>
                <p>
                    Avez-vous dèja un compte ?
                    <a href="{{route('auth.connexion')}}">Se Connecter</a>.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection