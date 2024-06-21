<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Processus de demande de diplôme</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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


    <!-- Ajouter le style pour la boîte de pop-up -->
    <style>
      /* Style pour la boîte de pop-up */
      .popup {
        display: none;
        position: fixed;
        top: 0;
        right: 100px;
        width: 100px;
        height: 100%;
        /* background-color: rgba(255, 255, 255, 0.9); */
        z-index: 9999;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

      }
  
      .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
  
      .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size:x-large;
        cursor: pointer;
      }
    </style>


</head>

<body>

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

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2 style="font-weight: bold; font-size: 40px; ">DEMARCHE</h2>
      <ol>
          <li><a href="{{route('index')}}">Accueil</a></li>
          <li class="white-text">Diplôme</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container">

        <p>
        POUR POUVOIR FAIRE UNE DEMANDE DE DIPLOME, VEUILLEZ PROCEDER COMME SUIT:

        <ul class="list-unstyled">
         
          <li><i class="bi bi-check2"></i> <span>Scannez (prenez une photo claire) de votre attestation de succès </span></li>
          <li><i class="bi bi-check2"></i> <span> <a href="{{route('login')}}">Connectez-vous</a> sur la plateforme en cliquant sur le bouton CONNEXION.</span></li>
          <li><i class="bi bi-check2"></i> <span>Rendez-vous dans Menu; accédez à la section SERVICES. Ensuite selectionnez DIPLOME</span></li>

          <li><i class="bi bi-check2"></i> <span>Remplissez soigneusement le <a href="{{route('diploma_form')}}"> formulaire</a> de demande
            d'attestation de succès. Suivez les instructions  <br>jusqu'à l'etape de paiement </span></li>
            <!-- <li><i class="bi bi-check2"></i> <span>Passez à l'étape suivante en cliquant sur le boutton SUIVANT </span></li> -->
            <li><i class="bi bi-check2"></i> <span>Renseigner les information relatives aux paiement en remplissant le formulaire de paiement.</span></li>
            <li><i class="bi bi-check2"></i> <span>Validez votre demande en confirmant la transaction sur votre téléphone </span></li>
            <li><i class="bi bi-check2"></i> <span>Un message de confirmation sera envoyé sur votre numéro de téléphone.Veuillez confirmez <br> la transaction en
            renseignant votre code secret. Rassurez-vous d'avoir un solde suffisant sinon <br> le payement echouera et votre dossier sera rejeté </span></li>
            <li><i class="bi bi-check2"></i> <span>Aprés confirmation de la transaction, vous receverez la quittance de paiement dans votre boite <br> élèctronique.
            Veuillez la télécharger et la conserver jalousement. Elle pourra vous servir plutard </span></li> 
        </ul>
        </p>

        <div class="header-buttons" id="auth_button" style="margin-bottom: 1px; position: relative; align-items: center; justify-content: center;">
          <a href="{{ route('login')}}" class="login-button">J'ai compris!</a>
        </div>
        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
  
  
           
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>FASEG-UAC</h4>
            <ul>
              <li><a href="#"><strong>Phone:</strong> +229 97247851</a></li>
              <li><a href="#"><strong>Email:</strong>ronaldoownpurpose@gmail.com</a></li>
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

