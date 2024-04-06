<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Omission de mot de passe </title>
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

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    
        <h2 class="responsive-heading" style="font-weight: bold; font-size: 35px;" >IDENTIFICATION</h2>
        
        <ol>
            {{-- <li><a href="{{route('index')}}">Accueil</a></li> --}}
            <li class="white-text">Le code de réinitialisation du mot de passe sera envoyé dans votre boîte élèctronique.</li>
        </ol>
        
      </div>
    </div>
    <!-- End Breadcrumbs -->

<!-- Center the forgot password form and move it a bit to the top -->
<div class="container" style="height: 50vh; display: flex; justify-content: center; align-items: center; margin-top: 50px;">
    <div class="col-lg-6" data-aos="fade-up">
      <form class="forgot-password-form" method="post" action="{{ route('request_reset')}}" id="password-reset-form" onsubmit="redirectToVerificationPage()">
        @csrf
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <br><br>
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <button type="submit" class="btn btn-primary btn-yellow" style="margin-top: 10px; width: 85px;">Recevoir</button>
          <a href="{{route('login')}}" style="color: blue; width: 85px;">Retour</a>
        </div>
      </form>
      
    
        <br><br><br>
        <p style="color: gray; font-family: Arial, sans-serif;">
            <!-- Don't have an account? <a href="register.html">Create one here</a> -->
        </p>
    </div>
</div>



   
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
<!-- <script>
    function redirectToVerificationPage() {
      // Prevent the form from being submitted to the server
      event.preventDefault();
      console.log

      // Perform the form submission using JavaScript or an AJAX request
      // You can use the Fetch API, Axios, or another method to send the form data to the server
      // Ensure the server sends a success response

      // Simulate a successful response (you should replace this with actual code)
      const successfulResponse = true;

      if (successfulResponse) {
        // Redirect to the verification page
        window.location.href = 'http://localhost/reset/send-verification-code.html';
      } else {
        // Handle errors if the response is not successful
        alert('Email not sent. Please try again.');
      }
    }
  </script> -->

</body>

</html>