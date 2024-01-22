<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inscription</title>
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
    .registration-form {
      background-color: white;
      padding: 20px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      border-radius: 8px;
    }

    .toggle-password {
      cursor: pointer;
      height: 38px;
    }

    .registration-form .form-group {
      position: relative;
      margin-bottom: 20px;
    }

    .registration-form .form-group input {
      padding-left: 30px; /* Adjust the left padding to accommodate the icon */
    }

    .registration-form .form-group .input-group-prepend {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 0;
      z-index: 2;
    }

    .registration-form .form-group .input-group-prepend i {
      font-size: 18px;
      color: #333; /* Change the color to match the text color */
    }

    .registration-form .btn-toggle-password {
      cursor: pointer;
      height: 100%;
    }
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px; ">INSCRIPTION</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Inscription</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

       <!-- Registration Form -->
<section id="registration-form" class="registration-form">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form class="registration-form" action="{{ route('register')}}" method="post">
          @csrf

          <div class="form-group">
            <label for="lastname">Nom: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" id="lastname" name="lastname" class="form-control" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="firstname">Prénom: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" id="firstname" name="firstname" class="form-control" placeholder="" required>
            </div>
          </div>

          <div class="form-group">
            <label for="date">Date de naissance: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
              <input type="date" id="date" name="date" class="form-control" placeholder="" required>
            </div>
          </div>

          <div class="form-group">
            <label for="place_birth">Lieu de naissance: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              <input type="text" id="place_birth" name="place_birth" class="form-control" placeholder="" required>
            </div>
          </div>

          <div class="form-group">
            <label for="matricule">Numéro matricule: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
              <input type="text" id="matricule" name="mat_number" class="form-control" placeholder="" required maxlength="8">
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              <input type="email" id="email" name="email" class="form-control" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="phone">Téléphone: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
              <input type="tel" id="phone" name="phone" class="form-control" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" id="password" name="password" class="form-control" placeholder="" required>
              <button id="togglePassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirmez le mot de passe: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="" required>
              <button id="toggleConfirmPassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="form-group" style="margin-top: 10px; margin-left: auto; margin-right: auto; text-align: center;">
            <button type="submit" id="register" style="width:85px; " class="btn btn-primary">S'inscrire</button>
          </div>
          <br><br>
          <p style="color: black">Déjà inscrit ? <a href="{{ route('login')}}">Connectez-vous</a></p>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End Registration Form -->

    <!-- End Registration Form -->
  </main>

  <!-- Footer -->
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

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <script>
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmPassword");
    const togglePassword = document.querySelector("#togglePassword");
    const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
    const registerButton = document.getElementById("register");

    function togglePasswordVisibility(inputElement, toggleButton) {
      const type = inputElement.getAttribute("type") === "password" ? "text" : "password";
      inputElement.setAttribute("type", type);

      // Toggle the eye icon
      if (type === "text") {
        toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
      } else {
        toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
      }
    }

    togglePassword.addEventListener("click", () => {
      togglePasswordVisibility(passwordInput, togglePassword);
    });

    toggleConfirmPassword.addEventListener("click", () => {
      togglePasswordVisibility(confirmPasswordInput, toggleConfirmPassword);
    });

    registerButton.addEventListener("click", (event) => {
      const passwordValue = passwordInput.value;
      const confirmPasswordValue = confirmPasswordInput.value;

      if (passwordValue !== confirmPasswordValue) {
        alert("Les mots de passe ne correspondent pas.");
        event.preventDefault(); // Prevents the form from being submitted if passwords don't match
      }
    });
  </script>

</body>
</html>
