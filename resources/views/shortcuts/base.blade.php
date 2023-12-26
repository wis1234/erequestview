@extends('shortcuts.base')

@section('header')
<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/logo.jpeg" alt="FASEG">
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>

        <li><a href="index.html">Accueil</a></li>
        <!-- <li><a href="process.html">Demarche</a></li> -->
        <li class="dropdown"><a href=""><span>Démarches</span> <i
          class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{ route('complaint_process') }}">Faire une réclamation</a></li>
            <li><a href="{{ route('transcript_process')}}">Demande de bulletin</a></li>
          <li><a href="{{ route('certificate_process')}}">Demande d'Attestation</a></li>
          <li><a href="{{ route('transcript_process')}}">Demande de duplicata d'attestation</a></li>
          <li><a href="{{ route('diploma_process')}}">Demande de Diplôme</a></li>
          <li><a href="{{ route('diploma_process')}}">Demande de duplicata de diplôme</a></li>
  
  
        </ul>
    </li>

        <li class="dropdown"><a href="#"><span>Services</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
              <li><a href="{{ route('complaint_index') }}">Faire une Réclamation</a></li>

            <li class="dropdown"><a href="#"><span>Demander un acte academique</span> <i
                  class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="{{ route('transcript_redirect')}}" >Bulletin</a></li>
                <li><a href="{{ route('certificat_redirect')}}" >Attestation</a></li>
                <li><a href="{{ route('certificat_redirect')}}" >Duplicata d'attestation</a></li>
                <li><a href="{{ route('diploma_redirect')}}">Diplôme</a></li>
                <li><a href="{{ route('diploma_redirect')}}">Duplicata de diplôme</a></li>


              </ul>
            </li>
          </ul>
        </li>
        <li><a href="{{ route('contact')}}">A propos</a></li>
        <li><a href="{{ route('contact')}}">Communiqué</a></li>

        <li><a href="{{ route('contact')}}">Contact</a></li>

        
        
        <li><a href="contact.html"></a></li>


        <div class="header-buttons" id="auth_button">
          <a href="{{ route('login')}}" class="login-button">Connexion</a>
          <a href="{{ route('register')}}" class="register-button">Inscription</a>
        </div>

      </ul>
    </nav><!-- .navbar -->

    <div id="login-modal" class="modal">
      <div class="modal-content">
          <span class="close">&times;</span>
          <p>Veuillez vous connecter</p>
          <button id="login-button">Login</button>
      </div>
  </div>

  </div> 
@endsection