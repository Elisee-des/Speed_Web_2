@extends('public.layouts.app')

@section('titre', "Réalisations")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register">Classement des réalisations</h1>

        <div style="display: flex; justify-content:center;"><hr></div>
        <div class="realisations">
            <div class="container-contenu-propos-realisations">
                <a href="{{route('realisations.etudiants-liste', 1)}}" style="font-size: 20px; font-weight:700;"
                    class="title-option-propos">UNZ - Informatiques</a>
                <div class="container-real-1">
                    <h6 class="description-propos-h3"><span>Niveau d'etude</span> :
                        <strong>Licence 3</strong>
                    </h6>
                </div>
                <div class="container-real-1">
                    <h6 class="description-propos-h1"><span>Etudiants</span> :
                        <strong>22</strong>
                    </h6>

                    <h6 class="description-propos-h2"><span>Promtion</span> :
                        <strong>2020</strong>
                    </h6>
                </div>

                <div class="container-real-1">
                    <p class="description-propos-h4">
                        <span>Creé le</span> : 12/02/2023
                    </p>
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content:center;"><hr></div>

        <div class="realisations">
            <div class="container-contenu-propos-realisations">
                <a href="{{route('realisations.etudiants-liste', 1)}}" style="font-size: 20px; font-weight:700;"
                    class="title-option-propos">UNZ - Informatiques</a>
                <div class="container-real-1">
                    <h6 class="description-propos-h3"><span>Niveau d'etude</span> :
                        <strong>Licence 2</strong>
                    </h6>
                </div>
                <div class="container-real-1">
                    <h6 class="description-propos-h1"><span>Etudiants</span> :
                        <strong>33</strong>
                    </h6>

                    <h6 class="description-propos-h2"><span>Promotion</span> :
                        <strong>2020</strong>
                    </h6>
                </div>

                <div class="container-real-1">
                    <p class="description-propos-h4">
                        <span>Creé le</span> : 12/12/2023
                    </p>
                </div>
            </div>
        </div>

        <div class="realisations">
            <div class="container-contenu-propos-realisations">
                <a href="{{route('affiches.detail', 1)}}" style="font-size: 20px; font-weight:700;"
                    class="title-option-propos">UNZ - Informatiques</a>
                <div class="container-real-1">
                    <h6 class="description-propos-h3"><span>Niveau d'etude</span> :
                        <strong>Licence 1</strong>
                    </h6>
                </div>
                <div class="container-real-1">
                    <h6 class="description-propos-h1"><span>Etudiants</span> :
                        <strong>22</strong>
                    </h6>

                    <h6 class="description-propos-h2"><span>Promtion</span> :
                        <strong>2020</strong>
                    </h6>
                </div>

                <div class="container-real-1">
                    <p class="description-propos-h4">
                        <span>Creé le</span> : 12/02/2023
                    </p>
                </div>
            </div>
        </div>

        <div class="realisations">
            <div class="container-contenu-propos-realisations">
                <a href="{{route('affiches.detail', 1)}}" style="font-size: 20px; font-weight:700;"
                    class="title-option-propos">UNZ - SVT</a>
                <div class="container-real-1">
                    <h6 class="description-propos-h3"><span>Niveau d'etude</span> :
                        <strong>Licence 3</strong>
                    </h6>
                </div>
                <div class="container-real-1">
                    <h6 class="description-propos-h1"><span>Etudiants</span> :
                        <strong>22</strong>
                    </h6>

                    <h6 class="description-propos-h2"><span>Promotion</span> :
                        <strong>2019</strong>
                    </h6>
                </div>

                <div class="container-real-1">
                    <p class="description-propos-h4">
                        <span>Creé le</span> : 12/02/2023
                    </p>
                </div>
            </div>
        </div>

        <div class="realisations">
            <div class="container-contenu-propos-realisations">
                <a href="{{route('affiches.detail', 1)}}" style="font-size: 20px; font-weight:700;"
                    class="title-option-propos">UNZ - SEG</a>
                <div class="container-real-1">
                    <h6 class="description-propos-h3"><span>Niveau d'etude</span> :
                        <strong>Licence 3</strong>
                    </h6>
                </div>
                <div class="container-real-1">
                    <h6 class="description-propos-h1"><span>Etudiants</span> :
                        <strong>22</strong>
                    </h6>

                    <h6 class="description-propos-h2"><span>Promotion</span> :
                        <strong>2022</strong>
                    </h6>
                </div>

                <div class="container-real-1">
                    <p class="description-propos-h4">
                        <span>Creé le</span> : 12/02/2023
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-3 mb-3 cnt-profil">
            <a href="{{route('accueil')}}" type="submit" style="text-decoration:none;, gap: 3; background:#ff6333;"
                class="submit-profil">
                <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Accueil
            </a>
        </div>
    </div>
</div>
@endsection