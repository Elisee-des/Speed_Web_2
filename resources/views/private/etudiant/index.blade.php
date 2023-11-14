@extends('layouts.private.app')

@section('titre', "Etudiant-Tableau de bord ")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="deliberation.html">Etudiant</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header">Bienvenu(e) {{auth()->user()->nom_prenom}}</h2>

  <div class="row mt-4 g-2">
    <div class="col-xl-4 col-md-6">
      <div class="card card-animate bg-secondary card-details-elements">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <p class="fw-medium text-white mb-0" style="color: white">Résultats</p>
              <h2 class="mt-2 ff-secondary fw-semibold"><span class="counter-value" data-target="97.66"
                  style="color: white">21</span>
              </h2>
              <p class="mb-0 text-white"><span class="badge bg-light text-danger mb-0"><i
                    class="ri-arrow-down-line align-middle" style="color: white"></i> Le total
                </span> des resultats
              </p>
            </div>
            <div>
              <div class="avatar-sm flex-shrink-0">
                <span class="avatar-title bg-soft-info rounded-circle fs-2">
                  <i data-feather="activity" class="text-info"></i>
                </span>
              </div>
            </div>
          </div>
        </div><!-- end card body -->
      </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-xl-4 col-md-6">
      <div class="card card-animate bg-danger card-details-elements">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <p class="fw-medium text-white-50 mb-0">Proclamations</p>
              <h2 class="mt-2 ff-secondary fw-semibold text-white"><span class="counter-value"
                  data-target="3">30</span>
              </h2>
              <p class="mb-0 text-white-50"><span class="badge badge-soft-light mb-0"><i
                    class="ri-arrow-down-line align-middle"></i> le total </span> des proclamations
              </p>
            </div>
            <div>
              <div class="avatar-sm flex-shrink-0">
                <span class="avatar-title bg-soft-light rounded-circle fs-2">
                  <i data-feather="clock" class="text-white"></i>
                </span>
              </div>
            </div>
          </div>
        </div><!-- end card body -->
      </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-xl-4 col-md-6">
      <div class="card card-animate card-details-elements" style="background-color: #008069">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <p class="fw-medium text-white mb-0">Déliberation</p>
              <h2 class="mt-2 ff-secondary fw-semibold"><span class="counter-value" style="color: white"
                  data-target="33.48">50</span>
              </h2>
              <p class="mb-0 text-white"><span class="badge bg-light text-success mb-0"><i
                    class="ri-arrow-up-line align-middle"></i> Total </span> des délibérations.</p>
            </div>
            <div>
              <div class="avatar-sm flex-shrink-0">
                <span class="avatar-title bg-soft-info rounded-circle fs-2">
                  <i data-feather="external-link" class="text-info"></i>
                </span>
              </div>
            </div>
          </div>
        </div><!-- end card body -->
      </div> <!-- end card-->
    </div> <!-- end col-->
  </div> <!-- end row-->
</div>

@endsection