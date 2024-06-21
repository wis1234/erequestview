<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.jpeg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.jpeg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/my_style1.css')}}" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    .login-box {
      background-color: #f9f9f9;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-box h3 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .login-box form {
      margin-bottom: 30px;
    }

    .login-box input[type="email"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
    }

 

    .login-box .btn-primary:hover {
      background-color: #0056b3;
    }

    .login-box a {
      color: #007bff;
    }

.btn {
  font-weight: bold;
  background-color: #007bff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  margin: 0 auto; 
  display: block; 
  color: #fff;

}

.btn:hover {
  background-color: #0056b3;
  color: #fff

}

     .login-box a:hover {
      color: #0056b3;
    }

    .login-box p {
      text-align: center;
      margin-top: 15px;
      color: #555;
    }

    .login-box .social-links {
      margin-top: 15px;
    }

    .login-box .social-links a {
      margin-right: 10px;
      font-size: 24px;
      color: #007bff;
    }

    .login-box .social-links a:hover {
      color: #0056b3;
    }

    .login-box .footer-links ul li {
      margin-bottom: 10px;
    }

    .login-box .footer-links ul li a {
      color: #777;
    }

    .login-box .footer-links ul li a:hover {
      color: #555;
    }
    /* Center the button and adjust font size for small screens */
@media (max-width: 768px) {
  .btn-center {
    align-content: center
    margin: 0 auto;
    display: block;
    font-size: 14px; /* Adjust the font size as needed */
    width: 80%; /* Adjust the width as needed */
  }
}


</style>
</head>

<body >
@extends('layouts.header')

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


  <!-- End Footer -->
  
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i  class="bi bi-arrow-up-short"></i></a>
  
  <div id="preloader"></div>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>
  </html>