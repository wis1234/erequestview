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
    /* Your existing styles */
    .form-container {
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
    }
    .progress-container {
      margin-bottom: 20px;
    }
    /* Additional styling for progress bar */
    #progress-bar-container {
      background-color: #f0f0f0;
      border-radius: 10px;
    }
    #progress-bar {
      background-color: #007bff;
      border-radius: 10px;
    }
    /* Reduce the width of the title */
    .form-step p {
      font-size: 30px;
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
              <li><a href="{{ route('complaint_form') }}">Faire une Réclamation</a></li>

            <li class="dropdown"><a href="#"><span>Demander un acte academique</span> <i
                  class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="{{ route('transcript_form')}}" >Bulletin</a></li>
                <li><a href="{{ route('certificate_form')}}" >Attestation</a></li>
                <li><a href="{{ route('certificate_form')}}" >Duplicata d'attestation</a></li>
                <li><a href="{{ route('diploma_form')}}">Diplôme</a></li>
                <li><a href="{{ route('diploma_form')}}">Duplicata de diplôme</a></li>


              </ul>
            </li>
          </ul>
        </li>
        <li><a href="{{ route('contact')}}">A propos</a></li>
        <li><a href="{{ route('contact')}}">Communiqué</a></li>

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
<!-- End Header -->

  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px;">Attestation</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Demande d'Attestation</li>
        </ol>
      </div>
    </div>
    <!-- Registration Form Section -->
    <section id="registration-form" class="registration-form">
      <div class="container">
        <div class="progress-container">
          <div class="progress" id="progress-bar-container">
            <div class="progress-bar" role="progressbar" id="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <form action="{{('certificate_send')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- Step 1: Information personnelle -->
          <div class="col-lg-4 form-container form-step" id="step1">
            <fieldset>
              <div class="form-group">
                <p style="align-items: center; justify-content: center; display: grid; font-size: larger; text-decoration: underline;">INFORMATIONS DE LA DEMANDE</p>
                <label for="ac_year">Année de validation de la dernière UE:</label>
                <select id="ac_year" class="form-control" name="ac_year">
                  <optgroup label="Veuillez sélectionner l'année académique de la validation de la dernière UE">
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                    <option value="2025-2026">2025-2026</option>
                    <option value="2026-2027">2026-2027</option>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <label for="ac_level">Année d'étude:</label>
                <select id="ac_level" class="form-control" name="ac_level">
                  <optgroup label="Veuillez sélectionner votre année d'étude">
                    <option value="Licence 1">Licence 1</option>
                    <option value="Licence 2">Licence 2</option>
                    <option value="Licence 3">Licence 3</option>
                    <option value="Master 1">Master 1</option>
                    <option value="Master 2">Master 2</option>
                  </optgroup>
                </select>
              </div>
              {{-- <div class="form-group">
                <label for="mat">Matricule:</label>
                <input type="text" name="mat" class="form-control" id="mat" placeholder="17104018" maxlength="8">
              </div> --}}

              <div class="form-group">
                <label for="defense_date">Date de soutenance:</label>
                <input type="date" name="defense_date" class="form-control" id="defense_date" placeholder="date" maxlength="8">
              </div>

              <div class="form-group">
                <label for="field">Filière:</label>
                <select id="field" class="form-control" name="field">
                  <optgroup label="Veuillez choisir votre filière">
                    <option value="Sciences Economiques">Sciences Economiques</option>
                    <option value="Sciences de Gestion">Sciences de Gestion</option>
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label for="speciality">Spécialité:</label>
                <select id="speciality" class="form-control" name="speciality">
                  <optgroup label="Veuillez choisir votre spécialté">
                    <option value="Economie Appliquée">Economie Appliquée</option>
                    <option value="Economie et Finance des Collectivités Locales">Economie et Finance des Collectivités Locales</option>
                    <option value="Economie et Gestion des Exploitations Agricoles">Economie et Gestion des Exploitations Agricoles</option>
                    <option value="Economie et Gestion des Micro-Finances">Economie et Gestion des Micro-Finances</option>
                    <option value="Statistique et Econometrie">Statistique et Econometrie</option>
                    <option value="Tronc commun de Licence 1">Tronc commun de Licence 1</option>
                    <option value="Comptabilité et Finance">Comptabilité et Finance</option>
                    <option value="Gestion des banques et assurances">Gestion des banques et assurances</option>
                    <option value="Gestion des ressources humaines">Gestion des ressources humaines</option>
                    <option value="Marketing et action commerciale">Marketing et action commerciale</option>
                  </optgroup>
                </select>
              </div>


              <!-- Add a "Next" button to move to the next step (Step 2) -->
              <div class="text-center">
                <button type="button" onclick="nextStep(2)" class="btn btn-primary" style="width: 80px">Suivant</button>
              </div>
            </fieldset>
          </div>

          <!-- Step 2: Information de réclamation 1 -->
          <div class="col-lg-4 form-container form-step" id="step2">
            <fieldset>
              <div class="form-group">
                <p style="font-size: larger; text-decoration: underline;">Pièces jointes</p>
                <!-- <label for="exam_type">Semestre:</label>
                <select name="exam_type" id="exam_type">
                  <option value="session normale">Semestre 1 </option>
                  <option value="session de rattrapage">Semestre 2</option>
                </select> -->
              </div>

              <div class="form-group">
                <label for="birth_cert">Acte de naissance:</label>
                <input type="file" class="form-control-file" id="birth_cert" name="birth_cert" placeholder=" ">
              </div>

              <div class="form-group">
                <label for="cip">Carte d'Identification Personnelle:</label>
                <input type="file" class="form-control-file" id="cip" name="cip" placeholder=" ">
              </div>

              <div class="form-group">
                <label for="id_card">Pièce d'identité(CNI ):</label>
                <input type="file" class="form-control-file" id="id_card" name="id_card" placeholder=" ">
              </div>

              <div class="form-group">
                <label for="student_card">Carte d'étudiant:</label>
                <input type="file" class="form-control-file" id="student_card" name="student_card" placeholder=" ">
              </div>


              <div class="form-group">

              <!-- Add "Previous" and "Next" buttons for navigation between Step 1 and Step 3 -->
              <div class="text-center">
                <button type="button" onclick="prevStep(1)" class="btn btn-primary" style="width: 90px">Précédent</button>
                <button type="button" onclick="nextStep(3)" class="btn btn-primary" style="width: 85px">Suivant</button>
              </div>
            </fieldset>
          </div>

          <!-- Step 3: Information de réclamation 2 -->
          <div class="col-lg-4 form-container form-step" id="step3">
            <fieldset>
              <div class="form-group">
                <p style="font-size: larger; text-decoration: underline;">INFORMATIONS COMPLEMENTAIRES:</p>
              
              </div>
              <div class="form-group">
                <label for="enrolle1">Fiche de préinscription validée Licence 1:</label>
                <input type="file" class="form-control-file" id="enrolle1" name="enrolle1" placeholder=" ">
              </div>

              <div class="form-group">
                <label for="enrolle2">Fiche de préinscription validée Licence 2:</label>
                <input type="file" class="form-control-file" id="enrolle2" name="enrolle2" placeholder=" ">
              </div>

              <div class="form-group">
                <label for="enrolle3">Fiche de préinscription validée Licence 3:</label>
                <input type="file" class="form-control-file" id="enrolle3" name="enrolle3" placeholder=" ">
              </div>
              <div class="form-group">
                <label for="dis_cover_page">Page de garde du memoire signé(après soutenance):</label>
                <input type="file" class="form-control-file" id="dis_cover_page" name="dis_cover_page" placeholder=" ">
              </div>

              <div class="form-group">
                <label for="cert_thesis_def">Quitus de dépôt de mémoire( après soutenance):</label>
                <input type="file" class="form-control-file" id="cert_thesis_def" name="cert_thesis_def" placeholder=" ">
              </div>

              <div class="form-group">
                <label for="bio">Description:</label>
                <textarea class="form-control" id="bio" name="description" rows="3" placeholder="Brève description du problème"></textarea>
              </div>
              <!-- Add "Previous" and "Next" buttons for navigation between Step 2 and Step 4 -->
              <div class="text-center">
                <button type="button" onclick="prevStep(2)" class="btn btn-primary" style="width: 90px">Précédent</button>
                <button type="button" onclick="nextStep(4)" class="btn btn-primary" style="width: 85px">Suivant</button>
              </div>
            </fieldset>
          </div>

          <!-- Step 4: Confirmation -->
          <div class="col-lg-4 form-container form-step" id="step4">
            <fieldset>
              <div class="form-group">
                <p>Confirmation</p>
                En cliquant sur SUIVANT vous confirmez les Informations renseignées précédemment. 
                Vous vous rassurez également de la clarté des pièces scannées (photo claire).
              </div>
              <!-- Add "Previous" and "Next" buttons for navigation between Step 3 and Step 5 -->
              <div class="text-center">
                <button type="button" onclick="prevStep(3)" class="btn btn-primary" style="width: 90px">Précédent</button>
                <button type="submit" onclick="nextStep(5)" class="btn btn-primary" style="width: 85px">Suivant</button>
              </div>
            </fieldset>
          </div>
        </form>
          <!-- Step 5: Payment -->
          <div class="col-lg-4 form-container form-step" id="step5">
            <fieldset>
              <div class="form-group">
                <p>Paiement</p>
                <!-- Add the payment button with the required script -->
                Vous y êtes preque. <br>
                Patientez pendant que la page de paiement se charge
                 
              </div>
                      <!-- Add "Previous" and "Next" buttons for navigation between Step 4 and Step 5 -->
        <div class="text-center">
          <button type="button" onclick="prevStep(4)" class="btn btn-primary" style="margin-right: 250px; width: 90px">Précédent</button>
          <!-- <button type="button" onclick="nextStep(5)" class="btn btn-primary">Suivant</button> -->
        </div>
            </fieldset>
          </div>
       
      </div>
    </section>
  </main>

 <!-- Footer -->
 <footer id="footer" class="footer">
  <!-- Your footer content here -->
</footer>

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
        <div class="col-lg-2 col-md/3 footer-links">
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
            <li><a href="contact.html">À propos</a></li>
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
        <!-- Your credits content here -->
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>






  <script>
    let currentStep = 1;
    const progressBar = document.getElementById('progress-bar');

    function updateProgressBar() {
      const totalSteps = 5; // Total number of steps
      const progress = (currentStep - 1) / (totalSteps - 1) * 100;
      progressBar.style.width = progress + '%';
      progressBar.setAttribute('aria-valuenow', progress);
    }

    function showStep(step) {
      const formSteps = document.querySelectorAll('.form-step');
      formSteps.forEach((stepElement) => {
        stepElement.style.display = 'none';
      });

      document.getElementById(`step${step}`).style.display = 'block';
      currentStep = step;
      updateProgressBar();
    }

    function nextStep(step) {
      if (step <= 5 && step > currentStep) {
        showStep(step);
      }
    }

    function prevStep(step) {
      if (step >= 1 && step < currentStep) {
        showStep(step);
      }
    }

    showStep(1);

    // Add an event listener for the payment button
    const paymentButton = document.getElementById('paymentButton');
    paymentButton.addEventListener('click', () => {
      // Add the Fedapay payment script here
      // Example script you provided:
      const script = document.createElement('script');
      script.src = "https://checkout.fedapay.com/js/checkout.js";
      script.setAttribute("data-public-key", "pk_live_NVw62EiQ_Yu6mvPq13vuUapq");
      script.setAttribute("data-button-text", "Payez 1222Fcfa");
      script.setAttribute("data-button-class", "button-class");
      script.setAttribute("data-transaction-amount", "1200");
      script.setAttribute("data-transaction-description", "Paiement des frais de réclamation");
      script.setAttribute("data-currency-iso", "XOF");
      script.setAttribute("callback_url", "https://honeybee-right-shortly.ngrok-free.app/dissertation_UI/index_redirect.html");
      script.setAttribute("data-widget-description", "Facilement et simplement, réclamez en ligne");
      script.setAttribute("data-widget-image", "E:\P_Projects\dissertation-main\public\dissertation_UI\assets\img\logo.jpeg");
      script.setAttribute("data-widget-title", "eGraC");
      document.body.appendChild(script);
    });
  </script>

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
