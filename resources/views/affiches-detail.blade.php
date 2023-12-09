@extends('layouts.app')

@section('titre', "Detail")

@section('content')
<div class="main">
    <div class="container-regsiter">
        <h1 class="title-register">MPCI L1 S2 Session Normal Promotion 2020</h1>

        <div class="f-colunm ">
            <div class="a-content-option mb-3">
                <div class="container-contenu-propos">
                    <h6 class="description-propos-h5"><span style="text-decoration: underline">Catégories</span> : <strong>Proclamation des résultas</strong></h6>
                    <h6 class="description-propos-h6"><span style="text-decoration: underline">Images</span> : 10</h6>
                    <p class="description-propos">
                      <span style="text-decoration: underline">Publié le</span> : 12/02/2023
                    </p>
                  </div>
            </div>
            {{-- @foreach ($deliberation->images as $image) --}}
            <div class="card p-1 mb-3 contenair-images-detail">
                {{-- <img src="{{ asset('storage/images/deliberations/' . $image->path) }}" class="d-block w-100"
                    alt="images des deliberations de {{ $deliberation->nom_module }}" /> --}}
                <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125112.jpg')}}" class="d-block w-100"
                    alt="images des affichages" />
            </div>

            <div class="card p-1 mb-3 contenair-images-detail">
                {{-- <img src="{{ asset('storage/images/deliberations/' . $image->path) }}" class="d-block w-100"
                    alt="images des deliberations de {{ $deliberation->nom_module }}" /> --}}
                <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125117.jpg')}}" class="d-block w-100"
                    alt="images des affichages" />
            </div>

            <div class="card p-1 mb-3 contenair-images-detail">
                {{-- <img src="{{ asset('storage/images/deliberations/' . $image->path) }}" class="d-block w-100"
                    alt="images des deliberations de {{ $deliberation->nom_module }}" /> --}}
                <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125121.jpg')}}" class="d-block w-100"
                    alt="images des affichages" />
            </div>

            <div class="card p-1 mb-3 contenair-images-detail">
                {{-- <img src="{{ asset('storage/images/deliberations/' . $image->path) }}" class="d-block w-100"
                    alt="images des deliberations de {{ $deliberation->nom_module }}" /> --}}
                <img src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125127.jpg')}}" class="d-block w-100"
                    alt="images des affichages" />
            </div>

            {{-- @endforeach --}}

        </div>
    </div>
</div>
@endsection