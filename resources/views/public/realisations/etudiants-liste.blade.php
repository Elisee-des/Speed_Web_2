@extends('public.layouts.app')

@section('titre', "Liste des etudiants ayant enregistré un projet")

@section('content')


<div class="container">
    <div class="main-body">

        <div class="main">
            <div class="container-regsiter">
                <h2 class="title-register">Liste des etudiants</h2>

                <p style="text-align: center">NB : Ce sont des etudiants ayant enregistrés leurs projets academiques et personnels, réalisations ou
                    travaux de groupe.</p>
                <div style="display: flex; justify-content:center;">
                    <hr>
                </div>

            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-img-top"></div>
                    <div class="card-body text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            style="width:100px;margin-top:-65px" alt="User"
                            class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
                        <h5 class="card-title"><strong>Sabidani Elisée</strong></h5>
                        <div class="mb-2" style="display: flex; justify-content:center; flex-direction:column;">
                            <h6 class="etiquete-competence">Developeur Full stack</h6>
                            <h6 class="etiquete-competence">Administrateur réseau</h6>
                            <h6 class="etiquete-competence">Maintenance</h6>
                        </div>

                        <span class="font-size-sm"><span class="etiquete-competence-1">Projets(3)</span></span>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('realisations.mapage', [1, 2])}}" class="btn btn-sm w-100 has-icon btn-block bouton-voir-plus"
                            style="background-color: #008069; color:white; padding:7px;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4); font-size:17px; transition: 0.5s;"
                            type="button">Voir +</a>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card">
                    <div class="card-img-top"></div>
                    <div class="card-body text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            style="width:100px;margin-top:-65px" alt="User"
                            class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
                        <h5 class="card-title"><strong>Sawadogo Wendkunta Benjaminn</strong></h5>
                        <div class="mb-2" style="display: flex; justify-content:center;">
                            <h6 class="etiquete-competence">Analyse Politique Econonique</h6>
                        </div>
                        <span class="etiquete-competence-1 font-size-sm">Projets(2)</span>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('realisations.mapage', [1, 2])}}" class="btn btn-sm w-100 has-icon btn-block bouton-voir-plus"
                            style="background-color: #008069; color:white; padding:7px;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4); font-size:17px; transition: 0.5s;"
                            type="button">Voir +</a>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card">
                    <div class="card-img-top"></div>
                    <div class="card-body text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            style="width:100px;margin-top:-65px" alt="User"
                            class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
                        <h5 class="card-title"><strong>Kaboré Antoine</strong></h5>
                        <div class="mb-2" style="display: flex; justify-content:center;">
                            <h6 class="etiquete-competence">Histoire et archeologie</h6>
                        </div>
                        <span class="etiquete-competence-1 font-size-sm" style="width: auto">Projets(2)</span>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('realisations.mapage', [1, 3])}}" class="btn btn-sm w-100 has-icon btn-block bouton-voir-plus"
                            style="background-color: #008069; color:white; padding:7px;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4); font-size:17px; transition: 0.5s;"
                            type="button">Voir +</a>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="mt-3 mb-3 cnt-profil">
            <a href="{{route('realisations.index')}}" type="submit" style="text-decoration:none;, gap: 3; background:#ff6333;"
                class="submit-profil">
                <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
            </a>
        </div>
    </div>
</div>
@endsection