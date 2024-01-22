<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>contact</title>
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

  <!-- ======= Header ======= -->
  
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.jpeg" alt="FASEG">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar" style="right: 300px">
        <ul>

          <li><a href="index.html">Accueil</a></li>
          <!-- <li><a href="process.html">Demarche</a></li> -->
          <li class="dropdown"><a href=""><span>Démarches</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
            <li><a href="{{ route('complaint_process') }}">Faire une Réclamation</a></li>
            <li><a href="{{ route('transcript_process')}}">Demande de Relevé de note</a></li>
          <li><a href="{{ route('certificate_process')}}">Demande d'Attestation</a></li>
          <li><a href="{{ route('diploma_process')}}">Demande de Diplôme</a></li>

        </ul>
      </li>

          <li class="dropdown"><a href="#"><span>Services</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="{{ route('complaint_index') }}">Faire une Réclamation</a></li>

              <li class="dropdown"><a href="#"><span>Demander un acte academique</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{ route('transcript_redirect')}}" >Relevé de note</a></li>
                  <li><a href="{{ route('certificat_redirect')}}" >Attestation de succès</a></li>
                  <li><a href="{{ route('diploma_redirect')}}">Diplôme</a></li>

                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{ route('contact')}}">A propos</a></li>
          <li><a href="{{ route('contact')}}">Contact</a></li>

          
          
          <li><a href="contact.html"></a></li>


          {{-- <div class="header-buttons" id="auth_button">
            <a href="{{ route('login')}}" class="login-button">Connexion</a>
            <a href="{{ route('register')}}" class="register-button">Inscription</a>
          </div> --}}

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

        {{-- end header --}}

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Contact</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>Abomey-Calavi, Benin</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email </h3>
              <p><a href="mailto:ronaldoownpurpose@gmail.com">ronaldoownpurpose@gmail.com</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Phone</h3>
              <p><a href="tel:+22997247851">(+229) 972 478 51</a></p>
          </div>
          
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-12">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7910.774227749458!2d2.300995874389664!3d6.442219748441923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102f88b6d893d8f1%3A0x243e057e186ca795!2sUniversit%C3%A9%20d'Abomey-Calavi!5e0!3m2!1sen!2sbg!4v1630491470785!5m2!1sen!2sbg"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div><!-- End Google Maps -->
      
        

      <div class="col-lg-12" >
<!-- Your HTML content, including the form -->

<form action="{{route('message')}}" method="post" >
  @csrf
  <div class="row gy-4">
      <div class="form-group">
          <input type="email" class="form-control" name="sender_email" id="email" placeholder="Email" required>
      </div>
  </div>
  <div class="form-group">
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
  </div>
  <div class="form-group">
      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
  </div>
  <div class="d-flex justify-content-between align-items-center">
    <button type="submit" class="btn btn-primary btn-yellow" style="margin-bottom: 60px; height: 40px; width: 135px;">Envoyer</button>
    <a href="{{ route('index')}}" style="color: blue; margin-bottom: 30px; height: 55px; margin-left: 10px;">Abandonner?</a>
  </div>
  <br><br><br>

</form>
    </div>
    <!-- End Contact Form -->
    

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="margin-bottom:5px">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>FASEG</h3>
            <p>
              Abomey-Calavi / BENIN <br>
               <br><br>
              <strong>Phone:</strong> +229 97247851<br>
              <strong>Email:</strong>ronaldoownpurpose@gmail.com<br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End footer info column-->


        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens utiles</h4>
          <ul>
            <li><a href="#">Acceuil</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Règlements et confidentialités</a></li>
          </ul>
        </div><!-- End footer links column-->
        
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><a href="#">Reclamation de note</a></li>
            <li><a href="#">Demande d'Acte academique</a></li>
            <!-- <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li> -->
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
          href="https://themewagon.com">ThemeWagon</a> -->
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

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript code for handling form submission and displaying messages -->
{{-- <script>
    $(document).ready(function() {
        $("form.php-email-form").submit(function(e) {
            e.preventDefault(); // Prevent the default form submission
            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "https://honeybee-right-shortly.ngrok-free.app/api/messages",
                data: formData,
                success: function(response) {
                    $("#responseMessage").html('<div class="alert alert-success">' + response.message + '</div>');
                },
                error: function() {
                    $("#responseMessage").html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                }
            });
        });
    });
</script> --}}

</body>

</html>