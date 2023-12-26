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

    <!-- pop -up links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
    .service-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
    }

    .service-title {
      flex: 0 0 calc(50% - 20px);
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
    }

    .service-title i {
      font-size: 34px;
      margin-bottom: 10px;
      font-weight: bolder;
    }

    @media (max-width: 395px) {
      .service-container {
        flex-direction: column;
      }

      .service-title {
        flex: 0 0 calc(100% - 20px);
      }
    }


    /* .service-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; 
    } */

    #service-title {
    text-align: center;
    border-radius: 100%;
    background-color: #fff;
    padding: 20px;
    width: 250px;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}



/* services pop-up styles */
.popup {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      border-radius: 8px;
      padding: 20px;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      text-align: center;
    }
    .popup .title {
      font-weight: bold;
      font-size: 24px;
      margin-bottom: 20px;
    }
    .popup .ok-button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      border: 2px solid blue;
      border-radius: 50px; /* To create a circular shape */
      background-color: blue;
      color: white;
      text-align: center;
      cursor: pointer;
    }
    .popup .ok-button:hover {
      background-color: #1144aa;
    }
  </style>

</head>

<body data-authenticated="{{ Auth::check() }}">
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

</header>


  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px;">Services</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Services</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- New div to wrap service titles with shadow -->

    <!-- Authenticated student-->

    <div class="service-title" id="service-title">
      <i class="fas fa-user fa-3x" style="color: blue; "></i> <!-- Person icon -->
      <h4 class="title"> {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h4>
  </div>
  <div class="service-container">
    <div class="service-title">
      <i class="fas fa-edit fa-3x"></i>
      <h4 class="title">Réclamation</h4>
      <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
  
      <!-- Additional items initially hidden -->
      <div class="additional-items" style="display: none;">
        <ol>
          <li><a href="{{ route('complaint_form')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Réclamation</a></li>
          {{-- <li><a href="{{ route('complaint_status') }}" style="cursor: pointer; font-weight: ; font-size: 20px; color:  black;">Vérifier le statut</a></li> --}}

          <li><a href="{{ route('complaint_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
        </ol>
      </div>
    </div>


    <div class="service-title">
      <i class="fas fa-file-alt fa-3x"></i>
      <h4 class="title">Bulletin</h4>
      <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
  
      <!-- Additional items initially hidden -->
      <div class="additional-items" style="display: none;">
        <ol>
          {{-- <li><a href="{{ route('transcript_form')}}" style="cursor: pointer; font-weight: ;font-size: 20px; color:  black;">Demande de bulletin</a></li> --}}

          <li>
            <div class="dropdown" id="bulletin-dropdown">
              <a href="{{route('transcript_form')}}">
                <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de Bulletin</span>
                <i class="fas fa-caret-down"></i>
              </a>
              <ul class="additional-items" style="display: none;">
                <!-- Initially empty, to be populated with JS -->
              </ul>
            </div>
          </li>

          <li><a href="{{ route('transcript_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
        </ol>
      </div>
    </div>

 
      <div class="service-title">
        <i class="fas fa-award fa-3x"></i>
        <h4 class="title">Attestation</h4>
        <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
    
        <!-- Additional items initially hidden -->
        <div class="additional-items" style="display: none;">
          <ol>

      <!-- Demande d'Attestation dropdown -->
      <li>
      <div class="dropdown" id="attestation-dropdown">
        <a href="#">
          <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande d'Attestation</span>
          <i class="fas fa-caret-down" ></i>
        </a>
        <ul class="additional-items" style="display: none;">
          <!-- Initially empty, to be populated with JS -->
        </ul>
      </div>
    </li>
            {{-- <li><a href="{{ route('certificate_form')}}" style="cursor: pointer; font-weight: ; font-size: 20px; color:black;">Demande de duplicata d'attestation</a></li> --}}
            <li>
              <div class="dropdown" id="duplicata-dropdown">
                <a href="#">
                  <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de duplicata</span>
                  <i class="fas fa-caret-down" ></i>
                </a>
                <ul class="additional-items" style="display: none;">
                  <!-- Initially empty, to be populated with JS -->
                </ul>
              </div>
            </li>
            {{-- <li><a href="{{ route('certificate_status')}}" style="cursor: pointer; font-weight: ; font-size: 20px; color: black;">Vérifier le statut</a></li> --}}
            <li><a href="{{ route('certificate_status')}}" style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;"> Historique</a></li>
          </ol>
        </div>
      </div>

  
        <div class="service-title">
          <i class="fas fa-graduation-cap fa-3x"></i>
          <h4 class="title">Diplôme</h4>
          <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
      
          <!-- Additional items initially hidden -->
          <div class="additional-items" style="display: none;">
            <ol>
              {{-- <li><a href="{{ route('diploma_form')}}" style="cursor: pointer; font-weight: ; font-size: 20px; color: black;">Demande de diplôme</a></li> --}}

              <li>
                <div class="dropdown" id="diplome-dropdown">
                  <a href="#">
                    <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de Diplôme</span>
                    <i class="fas fa-caret-down"></i>
                  </a>
                  <ul class="additional-items" style="display: none;">
                    <!-- Initially empty, to be populated with JS -->
                  </ul>
                </div>
              </li>

              {{-- <li><a href="{{ route('diploma_form')}}" style="cursor: pointer; font-weight: ; font-size: 20px; color: black;">Demande de duplicata</a></li> --}}
            <li>
              <div class="dropdown" id="diplome-dup-dropdown">
                <a href="#">
                  <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de duplicata</span>
                  <i class="fas fa-caret-down"></i>
                </a>
                <ul class="additional-items" style="display: none;">
                  <!-- Initially empty, to be populated with JS -->
                </ul>
              </div>
            </li>

              {{-- <li><a href="{{ route('diploma_form')}}" style="cursor: pointer; font-weight: ; font-size: 20px;color: black;">Demande de d'Authenticité</a></li> --}}
            <li>
              <div class="dropdown" id="diplome-aut-dropdown">
                <a href="#">
                  <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande d'Authenticité</span>
                  <i class="fas fa-caret-down"></i>
                </a>
                <ul class="additional-items" style="display: none;">
                  <!-- Initially empty, to be populated with JS -->
                </ul>
              </div>
            </li>

              <li><a href="{{ route('diploma_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
            </ol>
          </div>
        </div>

    </div>

    <div style="text-align: center; position: relative; top: 80px; margin-bottom:10px; left: 50%; transform: translate(-50%, -50%);">
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger" style="border-radius: 5px; font-weight:bold; margin-bottom:50px"><i class="fas fa-sign-out-alt"></i>Deconnexion</button>
      </form>
  </div>
  
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
  // $(document).ready(function() {
  //   // Function to toggle the visibility of additional items
  //   $('.toggle-items').on('click', function(e) {
  //     e.preventDefault();
  //     var parentService = $(this).closest('.service-title');
  //     parentService.find('.additional-items').slideToggle();
  //   });
  // });

  $(document).ready(function() {
  // Function to toggle the visibility of additional items
  $('.toggle-items').on('click', function(e) {
    e.preventDefault();
    $(this).closest('.service-title').find('.additional-items').slideToggle();
  });
});




</script>
  







<script>
  // Function to create the pop-up
  function createPopup() {
    var popup = document.createElement('div');
    popup.classList.add('popup');

    // Add the "ATTESTATION" title
    var title = document.createElement('div');
    title.classList.add('title');
    title.textContent = "DUPLICATA D'ATTESTATION";
    popup.appendChild(title);

    // Create the three links inside the pop-up
    var links = ['a- Licence', 'b- Master', 'c- Doctorat'];
    links.forEach(function (linkText) {
      var link = document.createElement('a');
      link.href = '#' + linkText.toLowerCase(); // Set href based on the link text
      link.textContent = linkText;
      link.style.display = 'block';
      link.style.marginBottom = '10px';

      // Event listener for each link in the pop-up
      link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Redirect based on the clicked link text
        if (linkText === 'a- Licence') {
          window.location.href = '{{route('certificate_form')}}'; // Redirect to Licence page
        } else if (linkText === 'b- Master') {
          window.location.href = '{{route('certificate_form')}}'; // Redirect to Master page
        } else if (linkText === 'c- Doctorat') {
          window.location.href = '{{route('certificate_form')}}'; // Redirect to Doctorate page
        }
      });

      // Append the links to the pop-up
      popup.appendChild(link);
    });

    // Add the "OK" button to close the pop-up
    var okButton = document.createElement('div');
    okButton.classList.add('ok-button');
    okButton.textContent = 'OK';
    okButton.addEventListener('click', function () {
      popup.remove(); // Remove the pop-up when OK is clicked
    });
    popup.appendChild(okButton);

    // Append the pop-up to the body
    document.body.appendChild(popup);
  }

  // Event listener for the "Demande de duplicata d'Attestation" link
  var duplicataLink = document.querySelector('#duplicata-dropdown span');
  duplicataLink.addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default link behavior
    createPopup(); // Call the function to create the pop-up
  });


  // Function to create the pop-up for Demande d'Attestation
  function createAttestationPopup() {
    var popup = document.createElement('div');
    popup.classList.add('popup');

    // Add the "ATTESTATION" title
    var title = document.createElement('div');
    title.classList.add('title');
    title.textContent = 'ATTESTATION';
    popup.appendChild(title);

    // Create the three links inside the pop-up
    var links = ['a- Licence', 'b- Master', 'c- Doctorat']; // Updated links for Demande d'Attestation
    links.forEach(function (linkText) {
      var link = document.createElement('a');
      link.href = '#' + linkText.toLowerCase(); // Set href based on the link text
      link.textContent = linkText;
      link.style.display = 'block';
      link.style.marginBottom = '10px';

      // Event listener for each link in the pop-up
      link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Redirect based on the clicked link text
        if (linkText === 'a- Licence') {
          window.location.href = '{{route('certificate_form')}}'; // Redirect to Licence1 page
        } else if (linkText === 'b- Master') {
          window.location.href = '{{route('certificate_form')}}'; // Redirect to Master1 page
        } else if (linkText === 'c- Doctorat') {
          window.location.href = '{{route('certificate_form')}}'; // Redirect to Doctorate1 page
        }
      });

      // Append the links to the pop-up
      popup.appendChild(link);
    });

    // Add the "OK" button to close the pop-up
    var okButton = document.createElement('div');
    okButton.classList.add('ok-button');
    okButton.textContent = 'OK';
    okButton.addEventListener('click', function () {
      popup.remove(); // Remove the pop-up when OK is clicked
    });
    popup.appendChild(okButton);

    // Append the pop-up to the body
    document.body.appendChild(popup);
  }

  // Event listener for the "Demande d'Attestation" link
  var attestationDropdown = document.querySelector('#attestation-dropdown span');
  attestationDropdown.addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default link behavior
    createAttestationPopup(); // Call the function to create the pop-up
  });
</script>

{{-- Diplome --}}

<script>
  // Function to create the pop-up for Demande d'Authenticité
  function createAuthenticitePopup() {
    var popup = document.createElement('div');
    popup.classList.add('popup');

    // Add the "DEMANDE D'AUTHENTICITÉ" title
    var title = document.createElement('div');
    title.classList.add('title');
    title.textContent = "DEMANDE D'AUTHENTICITÉ";
    popup.appendChild(title);

    // Create the three links inside the pop-up for Demande d'Authenticité
    var links = ['Licence', 'Master', 'Doctorat']; // Redirections for Demande d'Authenticité
    links.forEach(function (text) {
      var link = document.createElement('a');
      link.href = '#' + text.toLowerCase(); // Set href based on the link text
      link.textContent = '- ' + text; // Display text for the link
      link.style.display = 'block';
      link.style.marginBottom = '10px';

      // Event listener for each link in the pop-up for Demande d'Authenticité
      link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Redirect based on the clicked link text
        if (text === 'Licence') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence1 page
        } else if (text === 'Master') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Master1 page
        } else if (text === 'Doctorat') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate1 page
        }
      });

      // Append the links to the pop-up
      popup.appendChild(link);
    });

    // Add the "OK" button to close the pop-up for Demande d'Authenticité
    var okButton = document.createElement('div');
    okButton.classList.add('ok-button');
    okButton.textContent = 'OK';
    okButton.addEventListener('click', function () {
      popup.remove(); // Remove the pop-up when OK is clicked
    });
    popup.appendChild(okButton);

    // Append the pop-up to the body for Demande d'Authenticité
    document.body.appendChild(popup);
  }

  // Event listener for the "Demande d'Authenticité" link
  var authenticiteDropdown = document.querySelector('#diplome-aut-dropdown span');
  authenticiteDropdown.addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default link behavior
    createAuthenticitePopup(); // Call the function to create the pop-up for Demande d'Authenticité
  });

 // Function to create the pop-up for Demande de duplicata
 function createDuplicataPopup() {
    var popup = document.createElement('div');
    popup.classList.add('popup');

    // Add the "DEMANDE DE DUPLICATA" title
    var title = document.createElement('div');
    title.classList.add('title');
    title.textContent = "DEMANDE DE DUPLICATA";
    popup.appendChild(title);

    // Create the three links inside the pop-up for Demande de duplicata
    var links = ['Licence', 'Master', 'Doctorat']; // Redirections for Demande de duplicata
    links.forEach(function (text) {
      var link = document.createElement('a');
      link.href = '#' + text.toLowerCase(); // Set href based on the link text
      link.textContent = '- ' + text; // Display text for the link
      link.style.display = 'block';
      link.style.marginBottom = '10px';

      // Event listener for each link in the pop-up for Demande de duplicata
      link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Redirect based on the clicked link text
        if (text === 'Licence') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence2 page
        } else if (text === 'Master') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Master2 page
        } else if (text === 'Doctorat') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate2 page
        }
      });

      // Append the links to the pop-up
      popup.appendChild(link);
    });

    // Add the "OK" button to close the pop-up for Demande de duplicata
    var okButton = document.createElement('div');
    okButton.classList.add('ok-button');
    okButton.textContent = 'OK';
    okButton.addEventListener('click', function () {
      popup.remove(); // Remove the pop-up when OK is clicked
    });
    popup.appendChild(okButton);

    // Append the pop-up to the body for Demande de duplicata
    document.body.appendChild(popup);
  }

  // Event listener for the "Demande de duplicata" link
  var duplicataDropdown = document.querySelector('#diplome-dup-dropdown span');
  duplicataDropdown.addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default link behavior
    createDuplicataPopup(); // Call the function to create the pop-up for Demande de duplicata
  });

   // Function to create the pop-up for Demande de Diplôme
   function createDiplomePopup() {
    var popup = document.createElement('div');
    popup.classList.add('popup');

    // Add the "DEMANDE DE DIPLÔME" title
    var title = document.createElement('div');
    title.classList.add('title');
    title.textContent = "DEMANDE DE DIPLÔME";
    popup.appendChild(title);

    // Create the three links inside the pop-up for Demande de Diplôme
    var links = ['Licence', 'Master', 'Doctorat']; // Redirections for Demande de Diplôme
    links.forEach(function (text) {
      var link = document.createElement('a');
      link.href = '#' + text.toLowerCase(); // Set href based on the link text
      link.textContent = '- ' + text; // Display text for the link
      link.style.display = 'block';
      link.style.marginBottom = '10px';

      // Event listener for each link in the pop-up for Demande de Diplôme
      link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Redirect based on the clicked link text
        if (text === 'Licence') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence3 page
        } else if (text === 'Master') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Master3 page
        } else if (text === 'Doctorat') {
          window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate3 page
        }
      });

      // Append the links to the pop-up
      popup.appendChild(link);
    });

    // Add the "OK" button to close the pop-up for Demande de Diplôme
    var okButton = document.createElement('div');
    okButton.classList.add('ok-button');
    okButton.textContent = 'OK';
    okButton.addEventListener('click', function () {
      popup.remove(); // Remove the pop-up when OK is clicked
    });
    popup.appendChild(okButton);

    // Append the pop-up to the body for Demande de Diplôme
    document.body.appendChild(popup);
  }

  // Event listener for the "Demande de Diplôme" link
  var diplomeDropdown = document.querySelector('#diplome-dropdown span');
  diplomeDropdown.addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default link behavior
    createDiplomePopup(); // Call the function to create the pop-up for Demande de Diplôme
  });


</script>

</body>
</html>
