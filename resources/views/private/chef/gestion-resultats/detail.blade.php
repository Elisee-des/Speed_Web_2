@extends('layouts.private.app')

@section('titre', "Gestion des résultats")

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
        Detail des résultats de Electronique svt L2 S3 session normal
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
                        <td>9</td>
                        <td>12/02/2023</td>
                        <td>
                            <a href='' class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalEdition"><i class="fa-solid fa-pen" style="color: #0432ff;"></i> Modifier</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="card p-3">
                <div class="f-colunm ">
                    <div class="card p-3 mb-3 contenair-images-detail">
                        <div class="a-content-option mb-3">
                            <a href="" class="img-gestion" data-bs-toggle="modal" data-bs-target="#exampleModalEditionImage"><i class="fa-solid fa-pen-to-square" style="color: #0432ff;"></i> Changer cette image</a>
                            <a href="" class="img-gestion" data-bs-toggle="modal" data-bs-target="#exampleModalDelete" style="color: #e3423d"><i class="fa-solid fa-trash" style="color: #ff2600;"></i> Supprimer cette image</a>
                        </div>
                        <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125117.jpg')}}"
                            class="d-block w-100" alt="images des proclamations de resultats de" />
                    </div>

                </div>
            </div>

            <div class="text-images-plus">
                <a href="" class="text-images-plus-text" data-bs-toggle="modal" data-bs-target="#exampleModalEditionAllImages" style="font-size: 15px;"><i class="fa-solid fa-pen-to-square" style="color: #feffff;"></i> Changer tous les images</a>
            </div>
            <div class="text-images-plus-delete">
                <a href="" class="text-images-plus-text" onclick="return confirm('Etes vous sûr cette  publication ?')" style="font-size: 15px;"><i class="fa-solid fa-trash" style="color: #feffff;"></i> Supprimer cette publication</a>
            </div>
        </div>
    </div>
</div>

@include('layouts.private.modal-update-gestion')
@include('layouts.private.modal-delete')
@include('layouts.private.modal-update-image-gestion')
@include('layouts.private.modal-update-all-images-gestion')

@endsection