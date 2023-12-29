@extends('private.layouts.app')

@section('titre', "Admin-Tableau de bord ")

@section('content_private')

<nav style="--bs-breadcrumb-divider" aria-label="breadcrumb">
  <ol class="breadcrumb">
    {{-- <li class="breadcrumb-item">
      <a href="deliberation.html">Admin</a>
    </li> --}}

    <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header">Bienvenu Administrateur {{ auth()->user()->nom_prenom }}</h2>
  {{-- <h2 class="title-header">Bienvenu Gestionnaire {{ auth()->user()->nom_prenom }}</h2> --}}
  <div class="page-content">
    <div class="container-fluid">
      <div class="row mt-3 total-container-info-users">
        <div class="col-xl-12">
          <div class="card crm-widget">
            <div class="card-body p-0 card-dashbord" style="background-color:#f2f3f5">
              <div class="row row-cols-md-3 row-cols-1">
                <div class="col col-lg border-end">
                  <div class="py-4 px-3">
                    <h5 class="text-muted text-uppercase fs-13">T-Administrateurs<i
                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                    </h5>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <i class="ri-space-ship-line display-6 text-muted"></i>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2 class="mb-0"><span class="counter-value" data-target="197">3</span></h2>
                      </div>
                    </div>
                  </div>
                </div><!-- end col -->
                <div class="col col-lg border-end">
                  <div class="mt-3 mt-md-0 py-4 px-3">
                    <h5 class="text-muted text-uppercase fs-13">Total Gestionnaires<i
                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i></h5>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <i class="ri-exchange-dollar-line display-6 text-muted"></i>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2 class="mb-0"><span class="counter-value" data-target="489.4">7</span></h2>
                      </div>
                    </div>
                  </div>
                </div><!-- end col -->
                <div class="col col-lg border-end">
                  <div class="mt-3 mt-md-0 py-4 px-3">
                    <h5 class="text-muted text-uppercase fs-13">
                      Total Délégués <i class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                    </h5>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <i class="ri-pulse-line display-6 text-muted"></i>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2 class="mb-0"><span class="counter-value" data-target="32.89">20</span></h2>
                      </div>
                    </div>
                  </div>
                </div><!-- end col -->
                <div class="col col-lg border-end">
                  <div class="mt-3 mt-lg-0 py-4 px-3">
                    <h5 class="text-muted text-uppercase fs-13">
                      Total Etudiants <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                    </h5>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <i class="ri-trophy-line display-6 text-muted"></i>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h2 class="mb-0"><span class="counter-value" data-target="1596.5">10000</span></h2>
                      </div>
                    </div>
                  </div>
                </div><!-- end col -->
              </div><!-- end row -->
            </div><!-- end card body -->
          </div><!-- end card -->
        </div><!-- end col -->
      </div><!-- end row -->

      <div class="row mt-4 g-2">
        <div class="col-xl-3 col-md-6">
          <div class="card card-animate card-details-elements" style="background-color: #ff6333">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="fw-medium text-white mb-0">Résultats</p>
                  <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" style="color: white"
                      data-target="28.05">102</span>
                  </h2>
                  <p class="mb-0 text-white"><span class="badge bg-light text-success mb-0"><i
                        class="ri-arrow-up-line align-middle"></i>Le totale </span> résultats</p>
                </div>
                <div>
                  <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-soft-info rounded-circle fs-2">
                      <i data-feather="users" class="text-info"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div><!-- end card body -->
          </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
          <div class="card card-animate card-details-elements" style="background-color: #008069">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="fw-medium text-white mb-0" style="color: white">Proclamations</p>
                  <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="97.66"
                      style="color: white">212</span>
                  </h2>
                  <p class="mb-0 text-white"><span class="badge bg-light text-danger mb-0"><i
                        class="ri-arrow-down-line align-middle" style="color: white"></i> Le total </span> proclamations
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

        <div class="col-xl-3 col-md-6">
          <div class="card card-animate bg-secondary card-details-elements">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="fw-medium text-white-50 mb-0">Déliberation</p>
                  <h2 class="mt-4 ff-secondary fw-semibold text-white"><span class="counter-value"
                      data-target="3">309</span>
                  </h2>
                  <p class="mb-0 text-white-50"><span class="badge badge-soft-light mb-0"><i
                        class="ri-arrow-down-line align-middle"></i> le total </span> Déliberation</p>
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

        <div class="col-xl-3 col-md-6">
          <div class="card card-animate bg-dark card-details-elements">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="fw-medium text-white mb-0">L'ensemble</p>
                  <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" style="color: white"
                      data-target="33.48">502</span>
                  </h2>
                  <p class="mb-0 text-white"><span class="badge bg-light text-success mb-0"><i
                        class="ri-arrow-up-line align-middle"></i> Total </span> des fichiers</p>
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

      <div class="card p-3 mt-3 mb-4 card-container-graphe-all">
        <p class="fs-13 title-graphe ">Voir plus de details aves les graphes pour les :</p>
        <div class="container-graphe-dashbord">
          <a href="" class="btn-graphe-admindashbord">Utilisateurs</a>
          <a href="" class="btn-graphe-admindashbord">Fichiers</a>
          <a href="" class="btn-graphe-admindashbord">Connectivité</a>
        </div>
      </div>

      <div class="row g-2">
        <div class="col-xl-6 col-md-6">
          <div class="card card-height-100 card-details-elements">
              <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Fichiers par filières</h4>
                  <div class="flex-shrink-0">
                      <div class="dropdown card-header-dropdown">
                          <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                          </a>
                      </div>
                  </div>
              </div><!-- end card header -->
              <div class="card-body">
                  <div class="table-responsive table-card">
                      <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                          <thead class="text-muted table-light">
                              <tr>
                                  <th scope="col" style="width: 62;">Filières</th>
                                  <th scope="col">Résultas</th>
                                  <th scope="col">Proclamations</th>
                                  <th scope="col">Délibérations</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                      <a href="javascript:void(0);">MPCI</a>
                                  </td>
                                  <td>291</td>
                                  <td>230</td>
                                  <td>330</td>
                              </tr>
                              
                              <tr>
                                <td>
                                    <a href="javascript:void(0);">SEG</a>
                                </td>
                                <td>31</td>
                                <td>100</td>
                                <td>130</td>
                            </tr>
                            
                            <tr>
                              <td>
                                  <a href="javascript:void(0);">LSH</a>
                              </td>
                              <td>391</td>
                              <td>1200</td>
                              <td>1230</td>
                          </tr><!-- end -->
                              
                          </tbody><!-- end tbody -->
                      </table><!-- end table -->
                  </div><!-- end -->
              </div><!-- end cardbody -->
          </div><!-- end card -->
      </div><!-- end col -->

        <div class="col-xl-6 col-md-6">
            <div class="card card-height-100 card-details-elements">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Derniers inscris</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col" style="width: 62;">Noms prénoms</th>
                                    <th scope="col">Délégués</th>
                                    <th scope="col">Licences</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">Ouedraogo alassane</a>
                                    </td>
                                    <td>Ouedraogo Zakaria</td>
                                    <td>Licence 2</td>
                                </tr><!-- end -->

                                <tr>
                                  <td>
                                      <a href="javascript:void(0);">Ouedraogo alassane</a>
                                  </td>
                                  <td>Ouedraogo Zakaria</td>
                                  <td>Licence 2</td>
                              </tr><!-- end -->

                              <tr>
                                <td>
                                    <a href="javascript:void(0);">Ouedraogo alassane</a>
                                </td>
                                <td>Ouedraogo Zakaria</td>
                                <td>Licence 2</td>
                            </tr><!-- end -->

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end -->
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
    </div>
  </div>
</div>

@endsection