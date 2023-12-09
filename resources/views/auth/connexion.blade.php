@extends('layouts.app')

@section('titre', "Connexion")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register"><i class="fa-solid fa-arrow-right-to-bracket"></i> Connexion</h1>
        <p class="title-register">
            Veuillez entrez vos coordonnées pour vous connecter
        </p>
        @if($errors->has('login'))
        <div class="alert alert-danger form-login">
            {{ $errors->first('login') }}
        </div>
        @endif
        <form action="{{route('login.action')}}" class="form-login" method="POST">
            @csrf
            <div class="container">
                <div>
                    <label for="email"><b>Email</b> <span style="color: red">*</span></label>
                    <input type="text" class="@error('email') is-invalid @enderror" value="{{ old('email') }}"
                        placeholder="Entrez votre email" name="email" value="{{ old('email') }}" id="email" />
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <label for="password"><b>Mot De Passe </b> <span style="color: red">*</span> <span toggle="#password"
                        class="fa fa-fw fa-eye field-icon toggle-password"></span></label>
                <div class="password-container">
                    <input type="password" class="password-input @error('password') is-invalid @enderror"
                        placeholder="Entrez votre mot de passe" name="password" id="password" />
                </div>
                <span class="mot-de-passe-oublier"><a href="" class="">Mot de passe oublié ?</a></span>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <div style="display: flex; justify-content:center;"><hr></div>

                <button type="submit" class="registerbtn">
                    <i class="fa-solid fa-arrow-right-to-bracket" style="color: #feffff;"></i> Se Connecter
                </button>
            </div>
        </form>

        <div class="container signin">
            <p>
                Avez-vous déjà un compte ?
                <a href="{{route('register')}}">S'Inscrire</a>.
            </p>
        </div>
    </div>
</div>

<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Script jQuery pour gérer l'affichage du mot de passe -->
<script>
    $(document).ready(function() {
        $(".toggle-password").click(function() {
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>

@endsection