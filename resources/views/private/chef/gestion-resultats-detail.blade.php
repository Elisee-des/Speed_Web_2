@extends('layouts.private.app')

@section('titre', "Gestion des resultats")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="contact.html">Gestion des résultats</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Détail</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Detail du resultat de Electronique
    </h2>

    <div class="container">
        <div class="">
            <table class="table table-container-elements">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Noms</th>
                        <th scope="col">Images</th>
                        <th scope="col">Date</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Electronique</td>
                        <td>9</td>
                        <td>12/02/2023</td>
                    </tr>
                </tbody>
            </table>

            <div class="accordion accordon-container" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                        aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                        aria-label="Slide 5"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('assets/images/Droit de lenvironnement SVT L2 S4 session normal/20231031_125347.jpg')}}"
                                            class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/images/Droit de lenvironnement SVT L2 S4 session normal/20231031_125354.jpg')}}"
                                            class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/images/Droit de lenvironnement SVT L2 S4 session normal/20231031_125421.jpg')}}"
                                            class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/images/Droit de lenvironnement SVT L2 S4 session normal/20231031_125447.jpg')}}"
                                            class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/images/Droit de lenvironnement SVT L2 S4 session normal/20231031_125428.jpg')}}"
                                            class="d-block w-100" alt="..." />
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-images-plus">
                <a href="" class="text-images-plus-text" style="font-size: 15px;">Voir une liste de tous les images</a>
            </div>
        </div>
    </div>
</div>

@endsection