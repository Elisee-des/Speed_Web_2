@extends('layouts.private.app')

@section('titre', "Proclamations")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="deliberation.html">Proclamation des resultats</a>
      </li>

      <li class="breadcrumb-item active" aria-current="page">Liste</li>
    </ol>
  </nav>

  <div class="container-content">
    <h2 class="title-header">Les proclamations des résultats</h2>
    <div
      class="accordion accordon-container"
      id="accordionPanelsStayOpenExample"
    >
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseOne1"
            aria-expanded="true"
            aria-controls="panelsStayOpen-collapseOne1"
          >
            Proclamation des resultats definitif SVT L2 S4 session de
            ratrappage
          </button>
        </h2>
        <div
          id="panelsStayOpen-collapseOne1"
          class="accordion-collapse collapse show"
        >
          <div class="accordion-body">
            <div id="carouselExampleIndicators1" class="carousel slide">
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="4"
                  aria-label="Slide 5"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="5"
                  aria-label="Slide 6"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="6"
                  aria-label="Slide 7"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="7"
                  aria-label="Slide 8"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="8"
                  aria-label="Slide 9"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125112.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125117.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125121.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src=".{{asset('ssets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125124.jpg"')}}
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125127.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125130.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125133.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125137.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{asset('assets/images/Proclamation des résultats svt l2 s3 session norma/20231031_125141.jpg')}}"
                    class="d-block w-100"
                    alt="Image des proclamation des resultats"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

@endsection