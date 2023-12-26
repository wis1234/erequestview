<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>gestion des réclamations de notes</title>
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

  </style>
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
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
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center"
         style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 class="responsive-heading" style="font-weight: bold; font-size: 40px; " >CONNEXION</h2>
        <ol>
          <li><a href="{{ route('index')}}" style="color: blue;">Accueil</a></li>
          <li class="white-text">Connexion</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    
<!-- Centrez le formulaire de connexion et décalez-le légèrement vers le haut -->
<div class="container" style="height: 500px; display: flex; justify-content: center; align-items: center; margin-top: 50px;">
  <div class="col-lg-6 login-box" data-aos="fade-up">
    <i class="fas fa-user fa-4x" style="color: blue; display: block; margin-left: 45%; margin-top: 10px;"></i><br><br>
    <!-- Icône de personne centrée -->
    <!-- Login Form -->

    @guest

    <form class="login-form" method="post" action="{{ route('login_post')}}">
      
      @csrf

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
      </div><br>

      <div class="form-group mb-3"> <!-- Ajout de la classe mb-3 pour la marge inférieure -->
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
          <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
          <!-- <button id="togglePassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button> -->
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center">
        <button type="submit" class="btn btn-primary btn-yellow" style="margin-bottom: 40px; top:10px height: 65px; width: 145px;">Seconnecter</button>
        <a href="{{ route('forgot_password')}}" style="color: blue; margin-bottom: 10px; height: 65px; margin-left: 10px;">Mot de passe oublié?</a>
      </div>
    </form>

    <!-- End Login Form -->

    @else

    {{-- <p>Welcome, {{ Auth::user()->name }}</p> --}}
    <form class="login-form" method="post" action="{{ route('login_post')}}">
      
      @csrf

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
      </div><br>

      <div class="form-group mb-3"> <!-- Ajout de la classe mb-3 pour la marge inférieure -->
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
          <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
          <!-- <button id="togglePassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button> -->
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center">
        <button type="submit" class="btn btn-primary btn-yellow" style="margin-bottom: 60px; height: 40px; width: 125px;">Se connecter</button>
        <a href="{{ route('forgot_password')}}" style="color: blue; margin-bottom: 30px; height: 55px; margin-left: 10px;">Mot de passe oublié?</a>
      </div>

    </form>
    <!-- End Login Form -->

    @endguest

    <p style="color: gray; font-family: Arial, sans-serif; top: 800px;">
      N'avez-vous pas de compte ? <a href="{{ route('register')}}">  Créez-en un</a>
    </p>
  </div>
</div>
  </main>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">


         
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>FASEG-UAC</h4>
          <ul>
            <li><a href="#"><strong>Phone:</strong> +229 97247851</a></li>
            <li><a href="#"><strong>Email:</strong>ronaldoownpurpose@gmial.com</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><a href="#">Réclamation de note</a></li>
            <li><a href="#">Demande d'acte academique</a></li>

          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Réseaux sociaux</h4>
          <div class="social-links d-flex mt-3">
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens utiles</h4>
          <ul>
            <li><a href="contact.html">A propos</a></li>
            <li><a href="#">Termes et confidentialités</a></li>

          </ul>
        </div>
        <!-- End footer links column-->


      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>faseg/uac</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

      </div>
    </div>
  </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

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