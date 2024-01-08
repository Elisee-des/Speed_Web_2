@extends('private.layouts.app')

@section('titre', "Gestion des universites")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Gestion des universités</a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">Liste</li>
    </ol>
</nav>

<div class="container-content">
    <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
        Liste des universités
    </h2>

    <div class="">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0"></h1>
            <div>
                {{-- <a href="{{route('delegue.setting')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter une nouvelle délibération."><i class="fa-solid fa-gear"
                        style="color: #feffff;"></i> Paramètre</a> --}}
                <a href="{{route('admin.universites.create')}}" class="btn btn-primary btn-cool"
                    title="Clique  Ici pour ajouter un nouveau universite."><i class="fa-solid fa-plus"></i> Ajouter</a>
            </div>
        </div>

        <hr>
        <table class="table table-bordered table-container-elements">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Noms</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($universites as $universite)

                <tr>
                    <td><a href="{{route('admin.universites.show', $universite->id)}}"
                        title="Cliquez pour voir les details" title="Cliquez ici pour modifier cette image">{{$universite->nom}}</a></td>
                    <td><a href="{{route('admin.universites.show', $universite->id)}}"
                        title="Cliquez pour voir les details" title="Cliquez ici pour modifier cette ">Détail</a>
                    </td>
                </tr>

                {{-- <div class="modal fade" id="exampleModalEdition_{{ $universite->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('admin.universites.update', $universite->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="">
                                        <label for="recipient-etude" class="col-form-label">Nom de l'université</label>
                                        <input type="text" name="nom" class="form-control" value="{{$universite->nom}}"
                                            placeholder="" id="recipient-etude">
                                        @if ($errors->has('nom'))
                                        <span class="text-danger">{{ $errors->first('nom') }}</span>
                                        @endif
                                    </div>
                
                                    <div class="">
                                        <label for="recipient-etude2" class="col-form-label">Sigle</label>
                                        <input type="text" name="sigle" class="form-control" value="{{$universite->sigle}}"
                                            placeholder="" id="recipient-etude2">
                                        @if ($errors->has('sigle'))
                                        <span class="text-danger">{{ $errors->first('sigle') }}</span>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                                class="fa-solid fa-xmark" style="color: #feffff;"></i> Fermer</button>
                                        <button type="submit" class="btn btn-primary btn-cool"><i class="fa-regular fa-floppy-disk"
                                                style="color: #feffff;"></i>
                                            Changer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}

                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@endsection

