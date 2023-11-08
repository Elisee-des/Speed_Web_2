@extends('layouts.app')

@section('titre', "Inscription")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register">Inscription</h1>
        <p class="title-register">
            Je m'incris en tant que :
        </p>

        <div class="container-options-inscription">
            <a href="{{route('auth.inscription.etudiant')}}" class="link-option-inscription-etudiant"><i class="fa-solid fa-user" style="color: #feffff;"></i> Etudiant</a>
            <a href="{{route('auth.inscription.delegue')}}" class="link-option-inscription-delegue"><i class="fa-solid fa-user-nurse" style="color: #feffff;"></i> Délégue</a>
        </div>
    </div>
</div>
@endsection