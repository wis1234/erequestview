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
  <link href="{{ asset('assets/css/register.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/my_style1.css')}}" rel="stylesheet">
 


  <style>
    body{
      font-family: 'Chakra Petch', sans-serif;

    }

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

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


    /*handle section error stling*/
.popup-content {
  position: relative;
      height: auto;
      width: 100%;
      display: none;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    .popup-icon {
      font-size: 50px;
      color: #dc3545; 
      position: absolute;
      top: 5px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      z-index: 1;
      transform: translate(-50%, -50%)
    }

.icon-text{
  position: relative;
  color: #555;
  font-size: 20px;
  margin-top: 30px
}
/*handle form styling*/

h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    /* Form container and step styling */.form-container {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .form-group {
    margin-bottom: 15px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  select, input[type="text"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .hidden {
    display: none;
  }

    .form-step p {
      font-size: larger;
      text-decoration: none;
    }

    /* Button styling */
    .btn-primary {
      min-width: 100px !important;
      width: 100px;
      background-color: #05138fde;
      border-radius: 20px;
    }
    .verify {
      width: 80px;
      border-radius: 50%;
    }
    /* Progress bar styling */
    .progress-container {
      margin-bottom: 20px;
    }

    #progress-bar-container {
      background-color: #f0f0f0;
      border-radius: 10px;
    }

    #progress-bar {
      background-color: #05138fde;
      border-radius: 10px;
    }

    /* Spinner styling */
    .spinner {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      width: 2cm;
      height: 2cm;
      border: 8px solid #ccc;
      border-top: 8px solid #05138fde;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin-bottom: 20px;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    /* Responsive adjustments */
    @media screen and (min-width: 768px) {
      .form-container {
        max-width: 100%;
      }

      .form-step {
        width: 100%;
      }
    }
    .step_title{
      font-weight: bolder;
      text-align: center;
      color: #05138fde;
      font-size: 15px
    }
    .form-step .step_title p{
      font-weight: bold;
      font-size: 20px
    }



     /*  first div  */

     .service-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 10px;
    }
      .service-title {
        /* flex: 0 0 calc(50% - 20px); */
      /* background-color: #19adc7de; */
      background-color: #05138fde;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 300px;
      color: white;
    }

    .small-title{
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 270px;
      font-size: 20px;
      font-weight: bold;
      color:black
      /* margin-top: 5px */
    }
    .user{
      /* margin-top: 5px;
      width: 100%; */
    }

  </style>


</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('index')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpeg" alt="FASEG">
        <span class="faseg" style="color: black">FASEG UAC</span>
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

    <section>
      <div class="service-container">
        <div class="service-title">
          <div class="user"  > 
     
          <div style="font-size:35px; font-weight:bold; align-item:center">INSCRIPTION</div>
          <div id="popup-text" style="font-size: 20px; font-weight:bold; text-transform:uppercase"></div>  
       
            <div class="small-title">
                Création de compte <br>e-Request<br><br>
                <p style="font-weight: 100; color:black">Veuillez remplir le formulaire ci-dessous<br>

                </p>
                
            {{-- @session alert--}}
  
          @if(session('error'))
          <div class="popup-content" id="popup">
            <i class="bi bi-x-circle text-danger popup-icon"></i>
           
            <div class="icon-text">
              {{ session('error') }}
            </div>
          
          </div>
          
          </div>
          @endif 
  
            </div>
    
        </div>
         
        </div>
      
    </section>

  
    </div>
   
<section id="registration-form" class="registration-form">
  <div class="container">
    <div class="progress-container">
      <div class="progress" id="progress-bar-container">
        <div class="progress-bar" role="progressbar" id="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <form class="registration-form" action="{{ route('register')}}" method="post">
      @csrf
      <!-- Step 1: Information personnelle -->
      <div class="col-lg-4 form-container form-step" id="step1">
        <fieldset>
          <div class="form-group">
            <p class="step_title">IDENTITE</p>
            <label for="ac_year">Nom:</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" id="lastname" name="lastname" class="form-control" value="{{old('lastname')}}" >
              </div>
          </div>
          <div class="form-group">
            <label for="ac_year">Prénom(s):</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" id="firstname" name="firstname" class="form-control" value="{{old('lastname')}}">
              </div>
          </div>
          <div class="form-group">
            <label for="date">Date de naissance:</label>
              <div class="input-group">
                {{-- <span class="input-group-text"><i class="fas fa-user"></i></span> --}}
                <input type="date" id="date" name="date" class="form-control" value="{{old('lastname')}}">
              </div>
          </div>

          <div class="form-group">
            <label for="place_birth">Lieu de naissance: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              <input type="text" id="place_birth" name="place_birth" class="form-control" value="{{old('place_birth')}}">
            </div><br>
            
            <p style="color: black;">Déjà inscrit ? <a href="{{ route('login')}}">Connectez-vous</a></p>

          </div>

          <!-- Add a "Next" button to move to the next step (Step 2) -->
          <div class="text-center">
            <button type="button" onclick="nextStep(2)" class="btn btn-primary" style="width: 85px">Suivant</button>
          </div>
        </fieldset>
      </div>

      <!-- Step 2: Information de réclamation 1 -->
      <div class="col-lg-4 form-container form-step" id="step2">
        <fieldset>
          <div class="form-group">
            <p class="step_title">ADRESSE</p>

            <div class="form-group">
              <label for="matricule">Numéro matricule: </label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                <input type="text" id="matricule" name="mat_number" class="form-control" maxlength="8" value="{{old('mat_number')}}">
              </div>
            </div>

            <div class="form-group">
              <label for="email">Email: </label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Ex:ronaldoagbohou@gmail.com">
              </div>
            </div>

            <div class="form-group">
              <label for="phone">Téléphone: </label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                <input type="tel" id="phone" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Ex:+22967419414">
              </div>
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
            <p class="step_title">SECURITE</p>
          
          </div>
          <div class="form-group">
            <label for="password">Mot de passe: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" id="password" name="password" class="form-control">
              <button id="togglePassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirmez le mot de passe: </label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">
              <button id="toggleConfirmPassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button>
            </div>
          <!-- Add "Previous" and "Next" buttons for navigation between Step 2 and Step 4 -->
          <div class="text-center">
            <button type="button" onclick="prevStep(2)" class="btn btn-primary" style="width: 95px">Précédent</button>
            <button type="button" onclick="nextStep(4)" class="btn btn-primary" style="width: 85px">Suivant</button>
          </div>
        </fieldset>
      </div>

      <!-- Step 4: Confirmation -->
      <div class="col-lg-4 form-container form-step" id="step4">
        <fieldset>
          <div class="form-group">
            <p class="step_title">PREVISUALISATION</p>
            <p style="color:black"> Veuillez verifier les informations renseignées avant de continuer.</p>
             
            <button type="button" onclick="generateSummary()" class="btn btn-primary verify"  style="width: 120px; border-radius: 5%;">
              <i class="fas fa-check" style="align-content: center; ">verifier</i> 
          </button>          
          </p>
            <!-- Display populated information here -->
            <div id="user-info"></div>
          </div>
      
          <!-- Add a check button -->
          <div class="form-group form-check text-center mb-3">
            <div class="row align-items-center">
              <div class="col-auto">
                <input type="checkbox" class="form-check-input" id="confirmationCheck" onclick="toggleSuivantButton()">
              </div>
              <div class="col-auto">
                <label class="form-check-label" for="confirmationCheck">je confirme</label>
              </div>
            </div>
          </div>
      
          <!-- Add "Previous" and "Next" buttons for navigation between Step 3 and Step 5 -->
          <div class="text-center">
            <button type="button" onclick="prevStep(3)" class="btn btn-primary" style="width: 90px">Précédent</button>
            <button type="submit" id="suivantButton" onclick="nextStep(5)" class="btn btn-primary" style="width: 80px" disabled>Suivant</button>
          </div>
        </fieldset>
      </div>

      </div>

    </form>
      <!-- Step 5: Payment -->
      <div class="col-lg-4 form-container form-step" id="step5">
        <fieldset>
          <div class="form-group">
            <p>Validation en cours</p>
            <!-- Add the payment button with the required script -->
            Veuillez patienter votre inscription est en cours de traitement. <br>
            
          </div>
          <!-- Add "Previous" and "Next" buttons for navigation between Step 4 and Step 5 -->
          <div class="text-center">
            <div class="spinner"></div>
            <button type="button" onclick="prevStep(4)" class="btn btn-primary" style="margin-right: 100px; width: 90px">
              Précédent
            </button>
            <!-- <button type="button" onclick="nextStep(5)" class="btn btn-primary">Suivant</button> -->
          </div>


        </fieldset>
      </div>
   
  </div>
</section>
  </main>

  <!-- Modal -->
<div id="infoModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Information d'inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Contenu du modal : affichez les informations saisies ici -->
        <div id="saisie-info"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: red">Fermer</button>
      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <footer id="footer" class="footer" >
    <div class="footer-content position-relative">
      <div class="container">
   <hr>
      </div>
    </div>
    <div class="footer-legal text-center position-relative footer-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>FASEG-UAC</h4>
            <ul>
              <li><a style="color: black " href=""><strong>Phone:</strong> 97247851</a></li>
              <li><a style="color: black " href="#"><strong>Email:</strong>faseg.uac.fr</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 footer-links ">
            <h4>Services et prestations</h4>
            <ul style="color: black ">
              <li><a style="color: black " href="route('complaint_form')">Réclamation</a></li>
              <li><a style="color: black " href="route('transcript_form')">Actes académiques</a></li>
              <li><a style="color: black " href="">Inscription pédagogique</a></li>
  
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
              <li><a style="color: black " href="contact.html">À propos</a></li>
              <li><a style="color: black " href="#">Termes et confidentialités</a></li>
            </ul>
          </div>
        </div>
  
        <hr>
  
  
        <div class="credits">
          <!-- Your credits content here -->
        </div>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>e-Request</span></strong>. All Rights Reserved
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
        alert("Les mots de passe ne sont pas identique");
        event.preventDefault(); // Prevents the form from being submitted if passwords don't match
      }
    });
  </script>









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

{{-- Ajoutez cette fonction pour générer un résumé des informations saisies --}}

<script>
function generateSummary() {
// Récupérez les informations saisies
const firstname = document.getElementById('firstname').value;
const lastname = document.getElementById('lastname').value;
const date = document.getElementById('date').value;
const place_birth = document.getElementById('place_birth').value;
const matricule = document.getElementById('matricule').value;
const email = document.getElementById('email').value;
const phone = document.getElementById('phone').value;
const password = document.getElementById('password').value;

// Générez le résumé
const summary = `
<p style="color:black"><strong>Nom:</strong> ${firstname}</p>
  <p style="color:black"><strong>Prénom(s):</strong> ${lastname}</p>
  <p style="color:black"><strong>Date de naissance:</strong> ${date}</p>
  <p style="color:black"><strong>Lieu de naissance:</strong> ${place_birth}</p>
  <p style="color:black"><strong>Matricule:</strong> ${matricule}</p>
  <p style="color:black"><strong>Email:</strong> ${email}</p>
  <p style="color:black"><strong>Téléphone:</strong> ${phone}</p>
  <p style="color:black"><strong>Mot de passe:</strong> ${password}</p>

`;

// Affichez le résumé dans le modal
document.getElementById('saisie-info').innerHTML = summary;

// Ouvrez le modal
const infoModal = new bootstrap.Modal(document.getElementById('infoModal'));
infoModal.show();
}

</script>



{{-- check button with status  --}}

<script>
function toggleSuivantButton() {
  var confirmationCheck = document.getElementById('confirmationCheck');
  var suivantButton = document.getElementById('suivantButton');

  // Enable/disable the "Suivant" button based on the state of the check button
  suivantButton.disabled = !confirmationCheck.checked;
}
</script>

<script>
  window.onload = function () {
    document.getElementById("popup").style.display = "block";
  };
</script>

</body>
</html>
