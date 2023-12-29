@extends('private.layouts.app')

@section('titre', "Délibération")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="deliberation.html">Délibération</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">Liste</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header">Les procés verbals de délibération</h2>
  <div class="accordion accordon-container" id="accordionPanelsStayOpenExample">

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
          data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Délibération SVT L2 S4 session de ratrappage
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
        <div class="accordion-body">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                aria-label="Slide 7"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                aria-label="Slide 8"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                aria-label="Slide 9"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                aria-label="Slide 10"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125152.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125158.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125201.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125205.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125210.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125214.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125217.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125220.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125223.jpg')}}"
                  class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/Délibération svt l2 s4 session Normal/20231031_125226.jpg')}}"
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
</div>

@endsection