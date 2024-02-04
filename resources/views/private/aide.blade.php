@extends('private.layouts.app')

@section('titre', "Aide")

@section('content_private')

<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('profil.accueil')}}">Profil</a>
    </li>

    <li class="breadcrumb-item active" aria-current="page">Message</li>
  </ol>
</nav>

<div class="container-content">
  <h2 class="title-header" style="text-align: center;, margin-bottom:10px;">
    Contact l'administrateur ou un gestionnaire en cas de besion
  </h2>

  <div class="contact-admin-aid">
    <p class="message-contact">En cas de problème rencontré a un niveau du site, d'un incomprehension ou d'un besoin
      d'assistance ou autres, veilliez nous contacter par appel, sms ou whatsapp au : </p>

    <div class="contact">
      <div class="row">
        <div class="col-xxl-3 col-sm-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 56885237</li>
        </div>

        <div class="col-xxl-3 col-sm-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 52815237</li>
        </div>

        <div class="col-xxl-3 col-sm-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 7687765</li>
        </div>

        <div class="col-xxl-3 col-sm-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 67454534</li>
        </div>

        <div class="col-xxl-3 col-sm-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 7656787</li>
        </div>

        <div class="col-xxl-3 col-sm-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 56785698</li>
        </div>

        <div class="col-xxl-3 col-sm-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 71876567</li>
        </div>

        <div class="col-xxl-3 col-sm-3 mb-3">
          <li><span style="color: #008089"><i class="fa-solid fa-phone"></i></span> 73987667</li>
        </div>

        <p class="message-contact">Vous pouvez aussi nous contacté en vous ecrivant par ce formulaire : </p>
      </div>
    </div>
  </div>

  {{-- <div class="container-formulaire-contact">
    <form action="#">
      <label for="sujet">Sujet</label>
      <input type="text" id="sujet" name="sujet" class="input-contact"
        placeholder="Veuillez entrer le sujet de votre message" />

      <label for="subject">Subject</label>
      <textarea id="subject" class="input-contact" name="subject" placeholder="Veuillez entrez ici votre message"
        style="height: 100px"></textarea>

      <div class="cnt">
        <input type="submit" value="Envoyez" class="submit-contact" />
      </div>
    </form>
  </div> --}}

  <div class="mt-1 mb-3 cnt-profil">
    <a href="{{route('delegue.tableaudebord')}}" type="submit" style="text-decoration:none;, gap: 3; background:#ff6333;"
      class="submit-profil">
      <i class="fa-solid fa-arrow-left" style="color: #feffff;"></i> Accueil
    </a>
  </div>
</div>

@endsection