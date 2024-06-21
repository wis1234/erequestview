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

@extends('layouts.footer')

@section('footer')
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
@endsection




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