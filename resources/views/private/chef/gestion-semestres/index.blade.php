@extends('private.layouts.app')

@section('titre', "Gestion des semestres")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Gestion des semestres</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Liste</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Liste des semestres
    </h2>

        <div class="">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0"></h1>
                <div>
                    <a href="{{route('delegue.semestres.create')}}" class="btn btn-primary btn-cool" title="Clique  Ici pour ajouter un nouveau semestre."><i class="fa-solid fa-plus"></i> Ajouter un semestre</a>
                </div>
            </div>
        
            <hr>
            <table class="table table-bordered table-container-elements">
                <thead>
                    <tr>
                        <th scope="col">Semestres</th>
                        {{-- <th scope="col">Element Total</th> --}}
                        {{-- <th scope="col">Date</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semestres as $semestre)
                        
                    <tr>
                        <td><a href="{{route('delegue.semestres.show', $semestre->id)}}" title="Cliquez pour voir les details">{{$semestre->nom}}</a></td>
                        {{-- <td><a href="{{route('delegue.semestres.show', $semestre->id)}}" title="Cliquez pour voir les details">{{count($semestre->affiches)}}</a></td> --}}
                        {{-- <td><a href="{{route('delegue.semestres.show', $semestre->id)}}" title="Cliquez pour voir les details">{{$semestre->created_at->format('d/m/y')}}</a></td> --}}
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

@include('private.layouts.modal-create-gestion')

@endsection