@extends('layouts.private.app')

@section('titre', "Gestion des delibérations")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="contact.html">Gestion des délibérations</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Détail</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Detail de la délibération SVT L2 S3 session normal
    </h2>

    <div class="container">
        <div class="">
            <table class="table table-container-elements">
                <thead>
                    <tr>
                        <th scope="col">Images</th>
                        <th scope="col">Creé le</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>29</td>
                        <td>12/02/2023</td>
                        <td>
                            <a href='' class="btn btn-outline-primary"><i class="fa-sharp fa-pencil"></i> Modifier</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="card p-3">
                <div class="f-colunm ">
                    <div class="card p-3 mb-3 contenair-images-detail">
                        <a href="" class="img-gestion mb-3">Editer cette image</a>
                        <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125117.jpg')}}"
                        class="d-block w-100" alt="images des proclamations de resultats de" />
                    </div>

                    <div class="card p-3 mb-3 contenair-images-detail">
                        <a href="" class="img-gestion mb-3">Editer cette image</a>
                        <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125117.jpg')}}"
                        class="d-block w-100" alt="images des proclamations de resultats de" />
                    </div>

                    <div class="card p-3 mb-3 contenair-images-detail">
                        <a href="" class="img-gestion mb-3">Editer cette image</a>
                        <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125117.jpg')}}"
                        class="d-block w-100" alt="images des proclamations de resultats de" />
                    </div>

                    <div class="card p-3 mb-3 contenair-images-detail">
                        <a href="" class="img-gestion mb-3">Editer cette image</a>
                        <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125117.jpg')}}"
                        class="d-block w-100" alt="images des proclamations de resultats de" />
                    </div>
                </div>
            </div>

            <div class="text-images-plus-delete">
                <a href="" class="text-images-plus-text" style="font-size: 15px;">Changer tous les images</a>
            </div>
            <div class="text-images-plus-delete">
                <a href="" class="text-images-plus-text" onclick="return confirm('Etes vous sûr?')" style="font-size: 15px;">Supprimer cette publication</a>
            </div>
        </div>
    </div>
</div>

@endsection