<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/mapage.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/brands.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/fontawesome-free-6.4.2-web/css/solid.css')}}" rel="stylesheet" />
    {{--
    <link rel=" stylesheet" href='{{asset(' assets/css/dataTables.bootstrap5.min.css')}}' /> --}}
    {{--
    <link rel="stylesheet" href='{{asset(' assets/css/jquery.dataTables.min.css')}}' /> --}}
    <title>Mon profil</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>

<body>
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" style="text-decoration: none"
                    href="#" target="_blank">Mon profil</a>
                <!-- Form -->

                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">SABIDANI YENTEM ELISEE</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
            style="min-height: 600px; background-image: url(); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h3 class="display-2 text-white" style="text-transform: uppercase;">SABIDANI Yentem Elisée</h3>
                        <p class="text-white mt-0 mb-5">Je suis etudiant à UNZ de koudougou licence 3 en Science
                            Economique et Gestion. Mes activités, comptences, et projets son relaté dans ma page.</p>
                        {{-- <a href="#!" class="btn btn-info">Edit profile</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow"
                        style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important;">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="{{asset('assets/images/img-4.jpeg')}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                {{-- <a href="#" class="btn btn-sm btn-info mr-4">Connect</a> --}}
                                {{-- <a href="#" class="btn btn-sm btn-default float-right">Message</a> --}}
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        <div>
                                            <span class="heading">22</span>
                                            <span class="description">Comptences</span>
                                        </div>
                                        <div>
                                            <span class="heading">10</span>
                                            <span class="description">Projets</span>
                                        </div>
                                        <div>
                                            <span class="heading">89</span>
                                            <span class="description">Formations</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>
                                    Sabidani Yentem Elisée<span class="font-weight-light">, 25 ans</span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Nationnalité : Burkinabé
                                </div>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Lieu de naissance : Déou
                                </div>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Ethemie : Gourmantché
                                </div>

                                <div class="h4 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>Licence 3 - Informatique
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>Université Norbert Zongo de koudougou
                                </div>
                                <div class="mt-1">
                                    <i class="ni education_hat mr-2"></i>Coordonateur : Dr Bikienga
                                </div>
                                <div class="mt-1">
                                    <i class="ni education_hat mr-2"></i><strong>Mes contacts : 57788967
                                        61785687</strong>
                                </div>
                                <hr class="my-4">
                                <p>Baccalauréat obtenu en 2019, a Ouagadougou</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card shadow"
                        style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 10px;">
                        <div class="card-header border-0" style="background-color: #008069 !important">
                            <div class="row align-items-center">
                                <div class="">
                                    <h2 class="mb-0" style="color: white">Mes compétences</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Mes
                                    compétences techniques(Hard Skills)</strong></h5>
                            <div class="card p-2 mb-5">
                                <div class="pl-lg-4">
                                    <div class="">
                                        <h5 class="heading-small text-muted mb-1" style="text-align: center">
                                            <strong>Developpement web</strong>
                                        </h5>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">HTML</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">CSS</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">Javascript</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">Bootstrap</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">PHP</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">JAVA</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">Laravel</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">

                                            <label class="form-control-label" for="input-username">React JS</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 mb-5">
                                <div class="pl-lg-4">
                                    <div class="">
                                        <h5 class="heading-small text-muted mb-1" style="text-align: center">
                                            <strong>Admistration réseau</strong>
                                        </h5>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">Mise en réseau des
                                                ordinateurs</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">Mise en place de
                                                serveur NAK</label>
                                            <div class="progress animated-progress custom-progress mb-4">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 mb-5">
                                <div class="pl-lg-4">
                                    <div class="">
                                        <h5 class="heading-small text-muted mb-1" style="text-align: center">
                                            <strong>Securité informatique</strong>
                                        </h5>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">Chiffrement de
                                                fichier sous linux</label>
                                                <div class="progress animated-progress custom-progress mb-4">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username">Securité OpenSSL et
                                                OpenSSH</label>
                                                <div class="progress animated-progress custom-progress mb-4">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Address -->
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Mes
                                    compétences humaines (Soft Skills)</strong></h5>
                            <div class="card p-2 mb-5">
                                <div class="pl-lg-4">
                                    <div class="">

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username"><span
                                                    style="color: #008089">*</span> La communication efficace.</label>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username"><span
                                                    style="color: #008089">*</span> La pensée critique.</label>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username"><span
                                                    style="color: #008089">*</span> La collaboration et le travail
                                                d'équipe.</label>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username"><span
                                                    style="color: #008089">*</span> L'intelligence émotionnelle.</label>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username"><span
                                                    style="color: #008089">*</span> L'adaptabilité.</label>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username"><span
                                                    style="color: #008089">*</span> La créativité.</label>
                                        </div>

                                        <div class="card-hard-skil">
                                            <label class="form-control-label" for="input-username"><span
                                                    style="color: #008089">*</span> La gestion du temps.</label>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            {{-- <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-address">Address</label>
                                            <input id="input-address" class="form-control form-control-alternative"
                                                placeholder="Home Address"
                                                value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-city">City</label>
                                            <input type="text" id="input-city"
                                                class="form-control form-control-alternative" placeholder="City"
                                                value="New York">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-country">Country</label>
                                            <input type="text" id="input-country"
                                                class="form-control form-control-alternative" placeholder="Country"
                                                value="United States">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Postal
                                                code</label>
                                            <input type="number" id="input-postal-code"
                                                class="form-control form-control-alternative" placeholder="Postal code">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xxl-3 col-sm-6">
                                                <div
                                                    class="card card-soft-skils profile-project-card profile-project-warning">
                                                    <div class="card-body p-1">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted">
                                                                <h4 class="fs-14"><strong>Convertiseur d'unité</strong>
                                                                </h4>
                                                                <p class="text-muted text-truncate mb-0">Last Update :
                                                                    <span class="fw-semibold text-dark">2 year
                                                                        Ago</span>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-1.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-3.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-light text-primary">
                                                                                    J
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-sm-6">
                                                <div
                                                    class="card card-soft-skils profile-project-card  profile-project-success">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate"><a href="#"
                                                                        class="text-dark">ABC Project Customization</a>
                                                                </h5>
                                                                <p class="text-muted text-truncate mb-0">Last Update :
                                                                    <span class="fw-semibold text-dark">2 month
                                                                        Ago</span>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-8.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-7.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-6.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-primary">
                                                                                    2+
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-sm-6">
                                                <div
                                                    class="card card-soft-skils profile-project-card  profile-project-info">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate"><a href="#"
                                                                        class="text-dark">Client - Frank Hook</a></h5>
                                                                <p class="text-muted text-truncate mb-0">Last Update :
                                                                    <span class="fw-semibold text-dark">1 hr Ago</span>
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-info fs-10">New</div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0"> Members :
                                                                        </h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-4.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-light text-primary">
                                                                                    M
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-3.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-sm-6">
                                                <div
                                                    class="card card-soft-skils profile-project-card  profile-project-primary">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate"><a href="#"
                                                                        class="text-dark">Velzon Project</a></h5>
                                                                <p class="text-muted text-truncate mb-0">Last Update :
                                                                    <span class="fw-semibold text-dark">11 hr Ago</span>
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-success fs-10">Completed
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-7.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-5.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-sm-6">
                                                <div
                                                    class="card card-soft-skils profile-project-card  profile-project-danger">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate"><a href="#"
                                                                        class="text-dark">Brand Logo Design</a></h5>
                                                                <p class="text-muted text-truncate mb-0">Last Update :
                                                                    <span class="fw-semibold text-dark">10 min
                                                                        Ago</span>
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="badge badge-soft-info fs-10">New</div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-7.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-6.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-light text-primary">
                                                                                    E
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-sm-6">
                                                <div
                                                    class="card card-soft-skils profile-project-card  profile-project-primary">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 text-muted overflow-hidden">
                                                                <h5 class="fs-14 text-truncate"><a href="#"
                                                                        class="text-dark">Chat App</a></h5>
                                                                <p class="text-muted text-truncate mb-0">Last Update :
                                                                    <span class="fw-semibold text-dark">8 hr Ago</span>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mt-4">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div>
                                                                        <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                    </div>
                                                                    <div class="avatar-group">
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <div
                                                                                    class="avatar-title rounded-circle bg-light text-primary">
                                                                                    R
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-3.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="avatar-group-item">
                                                                            <div class="avatar-xs">
                                                                                <img src="assets/images/users/avatar-8.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>

                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div> --}}

                        </div>
                    </div>

                    <div class="card shadow"
                        style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 10px;">
                        <div class="card-header border-0" style="background-color: #008069 !important">
                            <div class="row align-items-center">
                                <div class="">
                                    <h2 class="mb-0" style="color: white">Mes Réalisations/Projets</h2>
                                </div>
                                {{-- <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Au
                                    Niveau accadémique (Universitaire)</strong></h5>

                            <div class="">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xxl-3 col-sm-6">
                                            <div
                                                class="card card-soft-skils profile-project-card profile-project-warning">
                                                <div class="card-body p-1">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 text-muted">
                                                            <h4 class="fs-14"><a href="" class="text-muted"
                                                                    style=""><strong>Application mobile avec le
                                                                        language JAVA (Convertiseur
                                                                        d'unité)</a></strong>
                                                            </h4>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>C'est un
                                                                application mobile dans lequel il est possible de
                                                                convertir...
                                                            </div>

                                                            <div class="h4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>Rapport
                                                                : android.pdf
                                                            </div>

                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Debut :
                                                                12/11/2023
                                                            </div>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Fin : 20/12/2023
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>

                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card card-soft-skils profile-project-card profile-project-dark">
                                                <div class="card-body p-1">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 text-muted">
                                                            <h4 class="fs-14"><a href="" class="text-muted"
                                                                    style=""><strong>Chiffrement des mots de passe
                                                                        sous linux</a></strong>
                                                            </h4>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Danss cette
                                                                etude chiffremment des mot de passe, nous verrons en
                                                                detail comment et quels sont les diferents...
                                                            </div>

                                                            <div class="h4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>Rapport
                                                                : chiffremment.pdf
                                                            </div>

                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Debut :
                                                                16/10/2023
                                                            </div>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Fin : 20/11/2023
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>

                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card card-soft-skils profile-project-card profile-project-dark">
                                                <div class="card-body p-1">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 text-muted">
                                                            <h4 class="fs-14"><a href="" class="text-muted"
                                                                    style=""><strong>Chiffrement des mots de passe
                                                                        sous linux</a></strong>
                                                            </h4>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Danss cette
                                                                etude chiffremment des mot de passe, nous verrons en
                                                                detail comment et quels sont les diferents...
                                                            </div>

                                                            <div class="h4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>Rapport
                                                                : chiffremment.pdf
                                                            </div>

                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Debut :
                                                                16/10/2023
                                                            </div>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Fin : 20/11/2023
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Niveau
                                    Professionel et personnel</strong></h5>
                            <div class="">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xxl-3 col-sm-6">
                                            <div
                                                class="card card-soft-skils profile-project-card profile-project-danger">
                                                <div class="card-body p-1">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 text-muted">
                                                            <h4 class="fs-14"><a href="" class="text-muted"
                                                                    style=""><strong>Developpement de site de
                                                                        colloque</a></strong>
                                                            </h4>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Le site est pour
                                                                le colloque de savoir endomgene a kdg...
                                                            </div>

                                                            {{-- <div class="h4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>Rapport
                                                                : android.pdf
                                                            </div> --}}

                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Debut :
                                                                12/11/2023
                                                            </div>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Fin : 20/12/2023
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>

                                        <div class="col-xxl-3 col-sm-6">
                                            <div
                                                class="card card-soft-skils profile-project-card profile-project-success">
                                                <div class="card-body p-1">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 text-muted">
                                                            <h4 class="fs-14"><a href="" class="text-muted"
                                                                    style=""><strong>Application Small
                                                                        Ecommerce</a></strong>
                                                            </h4>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Un petit site
                                                                ecommerce dans le cadre mon entre en stage...
                                                            </div>

                                                            {{-- <div class="h4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>Rapport
                                                                : chiffremment.pdf
                                                            </div> --}}

                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Debut :
                                                                29/10/2023
                                                            </div>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Fin : 20/12/2023
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div
                                                class="card card-soft-skils profile-project-card profile-project-success">
                                                <div class="card-body p-1">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 text-muted">
                                                            <h4 class="fs-14"><a href="" class="text-muted"
                                                                    style=""><strong>Application Small
                                                                        Ecommerce</a></strong>
                                                            </h4>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Un petit site
                                                                ecommerce dans le cadre mon entre en stage...
                                                            </div>

                                                            {{-- <div class="h4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>Rapport
                                                                : chiffremment.pdf
                                                            </div> --}}

                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Debut :
                                                                29/10/2023
                                                            </div>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Fin : 20/12/2023
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div
                                                class="card card-soft-skils profile-project-card profile-project-success">
                                                <div class="card-body p-1">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 text-muted">
                                                            <h4 class="fs-14"><a href="" class="text-muted"
                                                                    style=""><strong>Application Small
                                                                        Ecommerce</a></strong>
                                                            </h4>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Un petit site
                                                                ecommerce dans le cadre mon entre en stage...
                                                            </div>

                                                            {{-- <div class="h4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>Rapport
                                                                : chiffremment.pdf
                                                            </div> --}}

                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Debut :
                                                                29/10/2023
                                                            </div>
                                                            <div class="h5 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>Fin : 20/12/2023
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>

                        </div>
                    </div>

                    <div class="card shadow"
                        style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 10px;">
                        <div class="card-header border-0" style="background-color: #008069 !important">
                            <div class="row align-items-center">
                                <div class="">
                                    <h2 class="mb-0" style="color: white">Divers</h2>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong
                                    style="text-decoration: underline;">Competence Linguistique</strong></h5>

                            <div class="">
                                <div class="col-xl-12">
                                    <div class="live-preview">
                                        <div class="table-responsive"
                                            style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                            <table class="table table-bordered align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">N°</th>
                                                        <th scope="col">Langues</th>
                                                        <th scope="col">Oral</th>
                                                        <th scope="col">Ecris</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-medium">01</td>
                                                        <td>Français</td>
                                                        <td>Très bien</td>
                                                        <td>Bien</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium">03</td>
                                                        <td>Anglais</td>
                                                        <td>A. Bien</td>
                                                        <td>A. Bien</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium">02</td>
                                                        <td>Moré</td>
                                                        <td>Bien</td>
                                                        <td>Neant</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Mes
                                    Expériences Professionels</strong></h5>
                            <div class="">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="card"
                                                style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column w-100">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <h4 class="mb-1 fs-15"><a
                                                                        href="apps-projects-overview.html"
                                                                        class="text-dark">Structure :
                                                                        Project App</a></h4>
                                                                <p class="text-muted text-truncate-two-lines">
                                                                    Stagiare en tant que Developpeur web
                                                                    avec symfony, css, bootstrap,jquery
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Début : </h5>
                                                        <h5>03 Juin 2021</h5>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Fin : </h5>
                                                        <h5>03 Septembre 2021</h5>
                                                    </div>
                                                </div>
                                                <!-- end card footer -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Mes
                                    stages</strong></h5>
                            <div class="">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="card"
                                                style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column w-100">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <h4 class="mb-1 fs-15"><a
                                                                        href="apps-projects-overview.html"
                                                                        class="text-dark">Structure :
                                                                        Project App</a></h4>
                                                                <p class="text-muted text-truncate-two-lines">
                                                                    Stagiare en tant que Developpeur web
                                                                    avec symfony, css, bootstrap,jquery
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Début : </h5>
                                                        <h5>03 Juin 2021</h5>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Fin : </h5>
                                                        <h5>03 Septembre 2021</h5>
                                                    </div>
                                                </div>
                                                <!-- end card footer -->
                                            </div>
                                        </div>

                                        <div class="col-xxl-12">
                                            <div class="card"
                                                style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column w-100">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <h4 class="mb-1 fs-15"><a
                                                                        href="apps-projects-overview.html"
                                                                        class="text-dark">Structure :
                                                                        Project App</a></h4>
                                                                <p class="text-muted text-truncate-two-lines">
                                                                    Stagiare en tant que Developpeur web
                                                                    avec symfony, css, bootstrap,jquery
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Début : </h5>
                                                        <h5>03 Juin 2021</h5>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Fin : </h5>
                                                        <h5>03 Septembre 2021</h5>
                                                    </div>
                                                </div>
                                                <!-- end card footer -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong
                                    style="text-decoration: underline">Formations données</strong></h5>
                            <div class="">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="card"
                                                style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column w-100">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <h4 class="mb-1 fs-15"><a
                                                                        href="apps-projects-overview.html"
                                                                        class="text-dark">Structure :
                                                                        CIN</a></h4>
                                                                <p class="text-muted text-truncate-two-lines">
                                                                    Formation en bureautique et internet
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Début : </h5>
                                                        <h5>03 Juin 2021</h5>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent border-top-dashed">
                                                    <div class="text-muted dd-dd">
                                                        <h5>Fin : </h5>
                                                        <h5>03 Septembre 2021</h5>
                                                    </div>
                                                </div>
                                                <!-- end card footer -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">
                                    formations suivies</strong>
                            </h5>
                            <div class="">
                                <div class="card">

                                    <div class="row">
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="fw-medium text-muted mb-0">Art Oratoire</p>
                                                        </div>
                                                        <div>
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                                    <i class="fa-solid fa-graduation-cap"
                                                                        style="color: #1e3050;"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div> <!-- end card-->
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="fw-medium text-muted mb-0">Comment rediger un CV
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-warning text-warning rounded-circle fs-4">
                                                                    <i class="fa-solid fa-graduation-cap"
                                                                        style="color: #1e3050;"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="fw-medium text-muted mb-0">Comment rediger une
                                                                lettre de motivation</p>
                                                        </div>
                                                        <div>
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-success text-success rounded-circle fs-4">
                                                                    <i class="fa-solid fa-graduation-cap"
                                                                        style="color: #1e3050;"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p class="fw-medium text-muted mb-0 fs-12">Comment prendre
                                                                la parole en public</p>
                                                        </div>
                                                        <div>
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-danger text-danger rounded-circle fs-4">
                                                                    <i class="fa-solid fa-graduation-cap"
                                                                        style="color: #1e3050;"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong
                                    style="text-decoration: underline">Documents lus</strong></h5>
                            <div class="">
                                <div class="card">
                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless align-middle mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col">J'ai lu : </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center p-1"
                                                            style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px; border-radius:5px">
                                                            <div class="avatar-sm">
                                                                <div
                                                                    class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                    <i class="fa-solid fa-book-open"
                                                                        style="color: #367e69;"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h4 class="fs-15 mb-0">Plus malin que le diable</h4>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-center p-1"
                                                            style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px; border-radius:5px">
                                                            <div class="avatar-sm">
                                                                <div
                                                                    class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                    <i class="fa-solid fa-book-open"
                                                                        style="color: #367e69;"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h4 class="fs-15 mb-0">L'obtacle est le chemin</h4>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-center p-1"
                                                            style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px; border-radius:5px">
                                                            <div class="avatar-sm">
                                                                <div
                                                                    class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                    <i class="fa-solid fa-book-open"
                                                                        style="color: #367e69;"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h4 class="fs-15 mb-0">Vendre en moins de 2min</h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong
                                    style="text-decoration: underline">Cubles/Associations</strong></h5>
                            <div class="">
                                <div class="p-1">
                                    <div class="row g-2">
                                        <div class="col-xxl-3 col-sm-12">
                                            <div class="card mb-1 ribbon-box ribbon-fill ribbon-sm"
                                                style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                                <div class="ribbon ribbon-info"><i class="ri-flashlight-fill"></i></div>
                                                <div class="card-body">
                                                    <a class="d-flex align-items-center" data-bs-toggle="collapse"
                                                        href="#contactInitiated1" role="button" aria-expanded="false"
                                                        aria-controls="contactInitiated1">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h5 class="fs-14">Cuble des Numériques</h5>
                                                            <p class="text-muted mb-0 fs-14">Rejoins en : Decembre 2021
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="collapse border-top border-top-dashed"
                                                    id="contactInitiated1">
                                                    <p class="text-muted p-1">Club dans lequel les participants les
                                                        membres</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-sm-12">
                                            <div class="card mb-1 ribbon-box ribbon-fill ribbon-sm"
                                                style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                                <div class="ribbon ribbon-danger"><i class="ri-flashlight-fill"></i>
                                                </div>
                                                <div class="card-body">
                                                    <a class="d-flex align-items-center" data-bs-toggle="collapse"
                                                        href="#contactInitiated2" role="button" aria-expanded="false"
                                                        aria-controls="contactInitiated2">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h5 class="fs-14">Cuble d'anglais</h5>
                                                            <p class="text-muted mb-0 fs-15">Rejoins en : Decembre 2021
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="collapse border-top border-top-dashed"
                                                    id="contactInitiated2">
                                                    <p class="text-muted p-1">Club dans lequel les participants les
                                                        membres</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Centre
                                    d'intêret(Loisir)</strong></h5>
                            <div class="">
                                <div class="p-1">
                                    <div class="card p-1"
                                        style="box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3) !important; margin-bottom: 5px;">
                                        <div class="">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-medium">Sport</td>
                                                        <td>Joging</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium">Lecture</td>
                                                        <td>Developpement personnel</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Mes
                                    contacts</strong></h5>

                            <div class="">
                                <div class="p-1">
                                    <div class="row g-2">
                                        <div class="col-xxl-3 col-sm-3">
                                            <div class="card-hard-skil">
                                                <label class="form-control-label" for="input-username"><span
                                                        style="color: #008089"><i class="fa-solid fa-phone"></i></span>
                                                    56785678</label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <div class="card-hard-skil">
                                                <label class="form-control-label" for="input-username"><span
                                                        style="color: #008089"><i class="fa-solid fa-phone"></i></span>
                                                    51785678</label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <div class="card-hard-skil">
                                                <label class="form-control-label" for="input-username"><span
                                                        style="color: #008089"><i class="fa-solid fa-phone"></i></span>
                                                    78785678</label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <div class="card-hard-skil">
                                                <label class="form-control-label" for="input-username"><span
                                                        style="color: #008089"><i class="fa-solid fa-phone"></i></span>
                                                    66785678</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <h5 class="heading-small text-muted mb-4"><strong style="text-decoration: underline">Mes
                                    réseaux sociaux</strong></h5>
                            <div class="">
                                <div class="p-1">
                                    <div class="row g-2">
                                        <div class="col-xxl-3 col-sm-3">
                                            <a href="#" class="card-reseau-social-container">
                                                <div class="card-reseau-social">
                                                    <label class="form-control-label" for="input-username"><span
                                                            style="color: #008089"><i
                                                                class="fa-brands fa-whatsapp"></i></span>
                                                        Whatsapp</label>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <a href="#" class="card-reseau-social-container">
                                                <div class="card-reseau-social">
                                                    <label class="form-control-label" for="input-username"><span
                                                            style="color: #008089"><i
                                                                class="fa-brands fa-facebook"></i></span>
                                                        Facebook</label>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <a href="#" class="card-reseau-social-container">
                                                <div class="card-reseau-social">
                                                    <label class="form-control-label" for="input-username"><span
                                                            style="color: #008089"><i
                                                                class="fa-brands fa-facebook-messenger"></i></span>
                                                        Messenger</label>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <a href="#" class="card-reseau-social-container">
                                                <div class="card-reseau-social">
                                                    <label class="form-control-label" for="input-username"><span
                                                            style="color: #008089"><i
                                                                class="fa-brands fa-twitter"></i></span>
                                                        Twitter</label>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <a href="#" class="card-reseau-social-container">
                                                <div class="card-reseau-social">
                                                    <label class="form-control-label" for="input-username"><span
                                                            style="color: #008089"><i
                                                                class="fa-brands fa-instagram"></i></span>
                                                        Instagram</label>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <a href="#" class="card-reseau-social-container">
                                                <div class="card-reseau-social">
                                                    <label class="form-control-label" for="input-username"><span
                                                            style="color: #008089"><i
                                                                class="fa-brands fa-linkedin"></i></span>
                                                        Linkedin</label>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xxl-3 col-sm-3">
                                            <a href="#" class="card-reseau-social-container">
                                                <div class="card-reseau-social">
                                                    <label class="form-control-label" for="input-username"><span
                                                            style="color: #008089"><i
                                                                class="fa-brands fa-github"></i></span>
                                                        Github</label>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6 m-auto text-center">
                        <div class="copyright">
                            <p>Revenir a l'accueil du site <a href="{{route('accueil')}}" target="_blank">
                                    Accueil</a></p>
                        </div>
                    </div>
                </div>
            </footer>
            <script src="{{asset('assets/js/app.js')}}"></script>
            <script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery-3.7.0.js')}}"></script>
            <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>