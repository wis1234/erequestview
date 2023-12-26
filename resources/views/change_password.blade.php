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
</head>
<body>
  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px;">NOUVEAU</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Nouveau mot de passe</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container" style="height: 50vh; display: flex; justify-content: center; align-items: center; margin-top: 50px;">
      <div class="col-lg-6" data-aos="fade-up">
        <form class="login-form" method="post" action="{{ route('reset_password')}}" onsubmit="return validateForm()">
          @csrf
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            <input type="tel" id="code" name="verification_code" class="form-control" placeholder="réinserrer le code" required>
          </div>
          
          <br>

          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
            <button id="togglePassword" type="button" class="btn btn-toggle-password" onclick="togglePasswordVisibility('password', 'togglePassword')"><i class="fas fa-eye"></i></button>
          </div><br>

          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirmer le mot de passe" required>
            <button id="confirmtogglePassword" type="button" class="btn btn-toggle-password" onclick="togglePasswordVisibility('confirmPassword', 'confirmtogglePassword')"><i class="fas fa-eye"></i></button>
          </div><br>

          <div style="display: flex; justify-content: space-between; align-items: center;">
            <button type="submit" class="btn btn-primary btn-yellow" style="margin-top: 10px;width: 85px; ">Modifier</button>
            <a href="{{ route('login')}}" style="color: blue;">Abandonner?</a>
          </div>
        </form>
      </div>
    </div>
  </main><!-- End #main -->

  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>FASEG-UAC</h4>
            <ul>
              <li><a href="#"><strong>Phone:</strong> +229 97247851</a></li>
              <li><a href="#"><strong>Email:</strong> ronaldoownpurpose@gmail.com</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><a href="#">Réclamation de note</a></li>
              <li><a href="#">Demande d'acte académique</a></li>
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
          &copy; Copyright <strong><span>FASEG/UAC</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- You can include additional footer content or credits here if needed -->
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
    function togglePasswordVisibility(inputId, buttonId) {
      var passwordInput = document.getElementById(inputId);
      var passwordButton = document.getElementById(buttonId);

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
      } else {
        passwordInput.type = "password";
        passwordButton.innerHTML = '<i class="fas fa-eye"></i>';
      }
    }

    function validateForm() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      if (password !== confirmPassword) {
        alert("Les mots de passe ne correspondent pas.");
        return false; // Prevent form submission
      }
      return true; // Allow form submission
    }
  </script>

  <!-- Vendor JS Files -->
  
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Include your vendor JavaScript files here -->
  <script src="assets/js/main.js"></script>
</body>
</html>
