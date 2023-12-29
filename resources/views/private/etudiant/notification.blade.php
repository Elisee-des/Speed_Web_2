@extends('private.layouts.app')

@section('titre', "Notifications")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('etudiant.tableaudebord')}}">Tableau de bord</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Notifications</li>
  </ol>
</nav>

<div class="container-content">
  <div class="row mt-4 g-2">
    <p class="title-liste-fichier">Notifications</p>
    <div class="list-fichiers">

      <div class="card-body">
        <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Informations</strong></h5>
        <div class="">
          <div class="p-1">
            <div class="row g-2">
              <div class="col-xxl-3 col-sm-12">
                <div class="card mb-1 ribbon-box ribbon-fill ribbon-sm"
                  style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                  <div class="ribbon ribbon-info"><i class="ri-flashlight-fill"></i></div>
                  <div class="card-body">
                    <a class="d-flex align-items-center" data-bs-toggle="collapse" href="#contactInitiated1"
                      role="button" aria-expanded="false" aria-controls="contactInitiated1">
                      <div class="flex-shrink-0">
                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="fs-14">Nouvelle fonctionnalité ajouter à CAMPUS-AFFICHES (Cliquez pour voir)</h5>
                        <p class="text-muted mb-0 fs-14">Publier le : 29/03/2023
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="collapse border-top border-top-dashed" id="contactInitiated1">
                    <div class="card-body">
                      <p class="text-muted p-1">La publication d'une nouvelle fonctionnalité dans notre site
                        CAMPUS-AFFICHES. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, in quam
                        officiis non vero labore eaque animi natus repudiandae nobis!</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3 col-sm-12">
                <div class="card mb-1 ribbon-box ribbon-fill ribbon-sm"
                  style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                  <div class="ribbon ribbon-danger"><i class="ri-flashlight-fill"></i>
                  </div>
                  <div class="card-body">
                    <a class="d-flex align-items-center" data-bs-toggle="collapse" href="#contactInitiated2"
                      role="button" aria-expanded="false" aria-controls="contactInitiated2">
                      <div class="flex-shrink-0">
                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="fs-14">Création d'une nouvelle applicaction pour la bibliothèque (Cliquez pour voir)</h5>
                        <p class="text-muted mb-0 fs-15">Publier le : 12/02/2023
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="collapse border-top border-top-dashed" id="contactInitiated2">
                    <div class="card-body">
                      <p class="text-muted p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis omnis
                        odio cum, eos corrupti nam porro. Obcaecati, vel unde? Libero quis facilis tempora culpa, eos
                        laudantium. Culpa qui magnam explicabo magni! </p>
                        
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="cnt-profil" style="margin-bottom: 40px">
    <a href="{{route('etudiant.tableaudebord')}}" type="submit"
      style="text-decoration:none;, gap: 3; background:#ff6333;" class="submit-profil">
      <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Retour
    </a>
  </div>
</div>

@endsection