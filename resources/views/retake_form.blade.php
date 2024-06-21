<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Reprise</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">

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
  
/* CSS for the spinner */
/* General styling */
body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

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
    font-weight: bold;
    
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

    /*handle error in the section*/
    
.popup-content {
  position: relative;
      height: auto;
      width: auto;
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


     /*  first div  */

     .service-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 10px;
    }
      .service-title {
        /* flex: 0 0 calc(50% - 20px); */
      background-color: #05138fde;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 300px;
      color: #fff
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
      color: black
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


  <section>
    <div class="service-container">
      <div class="service-title">
        <div class="user"  > 
   
        <div style="font-size:35px; font-weight:bold; align-item:center">Reprise</div>
        <div id="popup-text" style="font-size: 20px; font-weight:bold; text-transform:uppercase"></div>  
     
          <div class="small-title">
              Validation des frais de reprise<br><br>
              <p style="font-weight: 100; color:black">Veuillez remplir soyeusement le formulaire ci-dessous <br>
              
              </p>

          </div>
  
      </div>
       
      </div>
     
  </section>

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
  <!-- Registration Form Section -->
  <section id="registration-form" class="registration-form">
    <div class="container">
      <div class="progress-container">
        <div class="progress" id="progress-bar-container">
          <div class="progress-bar" role="progressbar" id="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

      <form action="{{ route('Retake_send')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Step 1: Information personnelle -->
        <div class="form-container form-step" id="step1">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bolder">INFORMATIONS PERSONNELLES</p>
            </div>

            <div class="form-group">
              <label for="ac_level">Niveau d'étude:</label>
              <select id="ac_level" class="form-control" name="ac_level">
                  {{-- <option value="">Veuillez sélectionner votre niveau d'étude actuel</option> --}}
                  <option value="Licence 1">Licence 1</option>
                  {{-- <option value="Licence 1 (Tronc Commun)">Licence1(Tronc Commun)</option> --}}
                  <option value="Licence 2">Licence 2</option>
                  <option value="Licence 3">Licence 3</option>
                  <option value="Master 1">Master 1</option>
                  <option value="Master 2">Master 2</option>
                  <option value="phD 1">phD 1</option>
                  <option value="phD 2">phD 2</option>

              </select>
            </div>


            <div class="form-group">
              <label for="ac_level_old">Année d'étude de reprise:</label>
              <select id="ac_level_old" class="form-control" name="ac_level_old">
                  <option value="">En quelle année avez-vous de reprise?  </option> 
                  <option value="Licence 1">Licence 1</option>
                  {{-- <option value="Licence 1 (Tronc Commun)">Licence1(Tronc Commun)</option> --}}
                  <option value="Licence 2">Licence 2</option>
                  <option value="Licence 3">Licence 3</option>
                  <option value="Master 1">Master 1</option>
                  <option value="Master 2">Master 2</option>
                  <option value="phD 1">phD 1</option>
                  <option value="phD 2">phD 2</option>

              </select>
            </div>

            <!-- <div class="form-group">
              <label for="tc">Tronc Commun:</label>
              <select id="tc" name="tc" onchange="toggleJuryField()">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
              </select>
            </div> -->

            <div class="form-group">
              <label for="field">Filière:</label>
              <select id="field" class="form-control" name="field">
                 <optgroup label="Filières">
                  <option value="Sciences Economiques">Sciences Economiques</option>
                  <option value="Sciences de Gestion">Sciences de Gestion</option>
                </optgroup>
                <optgroup label="Cas particulier">
                  <option value="TC">Tronc Commun</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group">
              <label for="programs">Spécialité:</label>
              <select class="form-control" name="program" id="programs" onchange="updateSemesters()">
                  <option value="">select</option>
                  <optgroup label="Economie">
                    <option value="EGSS">EGSS</option>
                    <option value="EGEA">EGEA</option>
                    <option value="EAPD">EAPD</option>
                    <option value="EFCL">EFCL</option>
                    <option value="APD">APD</option>
                    <option value="APP">APP</option>
                   
            
                    <option value="EMF">EMF</option>
                    <option value="LESA">LESA</option>
                </optgroup>
                <optgroup label="Gestion">
                  <option value="MKTS">MKTS</option>
                  <option value="CACG">CACG</option>
                  <option value="GRH">GRH</option>
                  <option value="FBA">FBA</option>
                  <option value="LSTCF">LSTCF</option>
                  <option value="EGPME">EGPME</option>
                </optgroup>
                <optgroup label="Cas particulier">
                  <option value="TC">Tronc commun</option>
                </optgroup>
              </select>
            </div>

            <div class="text-center">
              <button type="button" onclick="nextStep(2)" class="btn btn-primary">Suivant</button>
            </div>
          </fieldset>
        </div>

        <!-- Step 2: Information de réclamation 1 -->
        <div class="form-container form-step" id="step2">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bolder">INFORMATIONS DE REPRISE</p>
            </div>
            <div class="group-form">
              <label for="ac_year">Année académique:</label>
              <select id="ac_year" class="form-control" name="ac_year">
                 <option value="">Veuillez sélectionner l'année académique en cours...</option>
                  <option value="2023-2024">2023-2024</option>
                  <option value="2024-2025">2024-2025</option>
                  <option value="2025-2026">2025-2026</option>
                  <option value="2026-2027">2026-2027</option>
                  <option value="2026-2027">2027-2028</option>
                  <option value="2026-2027">2028-2029</option>
                  <option value="2026-2027">2029-2030</option>
              </select>
            </div>

            <!-- <div class="form-group" id="juryGroup">
              <label for="jury">Jury N°:</label>
             <select id="jury" class="form-control" name="jury">
                  <option value="NEANT">Néant</option>
                  <option value="jury 1">Jury 1</option>
                  <option value="jury 2">Jury 2</option>
                  <option value="jury 3">jury 3</option>
                  <option value="jury 4">jury 4</option>
                  <option value="jury 5">jury 5</option>
                  <option value="jury 6">jury 6</option>
                  <option value="jury 7">jury 7</option>
                  <option value="jury 8">jury 8</option>
                  <option value="jury 9">jury 9</option>
                  <option value="jury 10">jury 10</option>
              </select>
        </div> -->

            <!-- <div class="group-form">
              <label for="exam_type">Session:</label>
              <select name="exam_type" id="exam_type">
                {{-- <option value=""> Veuillez choisir une session</option> --}}
                <option value="session normale">session normale</option>
                <option value="session de rattrapage">session de rattrapage</option>

              </select>
            </div> -->

            <div class="form-group">
              <label for="semesters">Semestre d'appartenance:</label>
              <select id="semesters" disabled name="semester">
                <option value="" class="form-control">Quel est le semestre correspondant à l'ue reprise?</option>
            </select>
            </div>

            <!-- <div class="form-group">
              <label for="complain_type">Motif:</label>
              <select name="complain_type" id="complain_type">
                {{-- <option value="">Veuillez choisir le motif de réclamation</option> --}}
                <option value="Contestation de note">Contestation de notes</option>
                <option value="Défaillance de notes">Défaillance de notes</option>
                <option value="Affichage de notes">Affichage de notes</option>
                <option value="Omission de nom">Omission de nom</option>
                <option value="Reprise">Reprise</option>
                
              </select>
            </div> -->


             <div class="form-group">
              <label for="ues">UE REPRISE:</label>
              <fieldset>
                <select id="ues" disabled name="ue">
                  <option value="" class="form-control">Veuillez sélectionnerl'UE que vous reprenez</option>
              </select>
              </fieldset>

            </div> 

            <!-- <div class="form-group">
              <label for="ecues">ECUE:</label>
              <select id="ecues" disabled name="ecue">
                <option value="" class="form-control">Veuillez selectionner une ECUE</option>
            </select>
            </div> -->
            <div class="text-center">
              <button type="button" onclick="prevStep(1)" class="btn btn-primary">Précédent</button>
              <button type="button" onclick="nextStep(3)" class="btn btn-primary">Suivant</button>
            </div>
          </fieldset>
        </div>

        <!-- Step 3: Information de réclamation 2 -->
        <div class="form-container form-step" id="step3">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bold;">INFORMATIONS COMPLEMENTAIRES</p>
          </div>
          

            <!-- <div class="form-group">
              <label for="seq_number">Numéro sequentiel sur le PV:</label>
              <input type="text" class="form-control" id="seq_number" name="seq_number"  rows="1" placeholder="Ex: 15435" maxlength="8"></input>
            </div>

              <div class="form-group">
              <label for="grade_over_20">Note sur 20:</label>
              <input type="text" class="form-control" id="grade_over_20" name="grade_over_20"  rows="1" placeholder="Ex: 15" maxlength="2"></input>

            </div>

              <div class="form-group">
              <label for="coef_grade">Note Coefficié:</label>
              <input type="text" class="form-control" id="coef_grade" name="coef_grade"  rows="1" placeholder="Ex: 60" maxlength="3"></input>
            </div> -->
            
              <!-- <div class="form-group">
              <label for="validation">validation:</label>
                <select id="validation" name="validation">
                  {{-- <option value="" class="form-control">Veuillez selectionner un status</option> --}}
                  <option value="VALIDE" class="form-control">Validé</option>
                  <option value="NON VALIDE" class="form-control">Non validé</option>
              </select>
              </div> -->

              <div class="form-group">
                 <label for="fiche_inscription">Fiche de préinscription validée:</label>
              <input type="file" class="form-control-file"  id="fiche_inscription" name="fiche_inscription" multiple>
              </div>  
              
            <div class="form-group">
              <label for="bio">Description:</label>
              <textarea class="form-control" id="bio" name="description"  rows="3" placeholder="Description en quelques mots..."></textarea>
            </div>
            <div class="text-center">
              <button type="button" onclick="prevStep(2)" class="btn btn-primary">Précédent</button>
              <button type="button" onclick="nextStep(4)" class="btn btn-primary">Suivant</button>
            </div>
          </fieldset>
        </div>



        <!-- Step 4: Confirmation -->
        <div class="form-container form-step" id="step4">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight:bolder">CONFIRMATION</p>
            </div>
            <div class="form-group">

              <p style="color:black"> Veuillez verifier les informations renseignées avant de continuer.</p>
              <div id="user-info"></div>

              <button type="button" onclick="generateSummary()" class="btn btn-primary verify"  style="width: 120px; border-radius: 5%;">
                <i class="fas fa-check" style="align-content: center; ">verifier</i> 
            </button>
            
            </div>
            <div class="form-group form-check text-center mb-3">
              <div class="row align-items-center">
                <div class="col-auto">
                  <input type="checkbox" class="form-check-input" id="confirmationCheck" onclick="toggleSuivantButton()">
                </div>
                <div class="col-auto">
                  <label class="form-check-label" for="confirmationCheck">Je confirme</label>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="button" onclick="prevStep(3)" class="btn btn-primary">Précédent</button>
              <button type="submit" id="suivantButton" onclick="nextStep(5)" class="btn btn-primary" disabled>Suivant</button>
            </div>
          </fieldset>
        </div>

        <!-- Step 5: Payment -->
        <div class="form-container form-step" id="step5">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bolder">Paiement</p>
              Vous y êtes presque. <br>
              Patientez pendant que la page de paiement se charge
            </div>
            <div class="text-center">
              <div class="spinner"></div>
              <button type="button" onclick="prevStep(4)" class="btn btn-primary" style="margin-right: 100px;">Précédent</button>
            </div>
          </fieldset>
        </div>
      </form>
    </div>
  </section>
</main>


<!-- Add a Bootstrap modal component -->
<div class="modal fade" id="summaryModal" tabindex="-1" aria-labelledby="summaryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="summaryModalLabel">Détails de l'inscription pédagogique</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="summaryBody">
        <!-- User's information will be displayed here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: red">Fermer</button>
      </div>
    </div>
  </div>
</div>

  

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
            <li><a style="color: black " href="#"><strong>Email:</strong>ronaldoagbohou@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links ">
          <h4>Services et prestations</h4>
          <ul style="color: black ">
            <li><a style="color: black " href="route('complaint_form')">Réclamation</a></li>
            <li><a style="color: black " href="route('transcript_form')">Actes académiques</a></li>
            <li><a style="color: black " href="route('ped_registration_form')">Inscription pédagogique</a></li>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
  function toggleJuryField() {
    var troncCommunSelect = document.getElementById("tc");
    var juryGroup = document.getElementById("juryGroup");

    if (troncCommunSelect.value === "Non") {
      juryGroup.classList.add("hidden");
    } else {
      juryGroup.classList.remove("hidden");
    }
  }
      // Initially hide the jury field
      document.addEventListener("DOMContentLoaded", function() {
      var juryGroup = document.getElementById("juryGroup");
      juryGroup.classList.add("hidden");
    });
</script>


  <script>

    // Add an event listener for the payment button
    const paymentButton = document.getElementById('paymentButton');
    paymentButton.addEventListener('click', () => {

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


</script>



{{-- populate user's information --}}

<script>
  function generateSummary() {
  // Retrieve form inputs
  var ac_year = document.getElementById('ac_year').value;
  var ac_level = document.getElementById('ac_level').value;
  var ac_level_old = document.getElementById('ac_level_old').value;

  var field = document.getElementById('field').value;
  var program = document.getElementById('programs').value; 
  var semesters = document.getElementById('semesters').value;
  var ue = document.getElementById('ues').value;


  var description = document.getElementById('bio').value;

  // Generate summary
  var summary = `
    <p style="color:black"><strong>Année académique:</strong> ${ac_year}</p>
    <p style="color:black"><strong>Niveau d'étude:</strong> ${ac_level}</p>
    <p style="color:black"><strong>Année de reprise:</strong> ${ac_level_old}</p>
    <p style="color:black"><strong>Filière:</strong> ${field}</p>
    <p style="color:black"><strong>Spécialité:</strong> ${program}</p>
    <p style="color:black"><strong>Semestre:</strong> ${semesters}</p>
    <p style="color:black"><strong>UE:</strong> ${ue}</p>
    <p style="color:black"><strong>Description:</strong> ${description}</p>
  `;

  // Display summary in the modal
  document.getElementById('summaryBody').innerHTML = summary;

  // Show the modal
  var myModal = new bootstrap.Modal(document.getElementById('summaryModal'));
  myModal.show();
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
    const programs = {
        EGSS: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Equilibres Macroéconomiques",
      "Statistiques descriptives",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Fondements Microéconomiques",
      "Equilibres Microéconomiques",
      "Introduction à la comptabilité",
      "Comptabilité",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Théories Economiques 1",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Economie de la santé",
      "Gestion hospitalière",
      "Economie des ressources humaines",

    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": [
      "Analyse",
      "Algèbre Matricielle"
    ],
    "Fondements Macroéconomiques": [
      "Fondements Macroéconomiques"
    ],
    "Equilibres Macroéconomiques": [
      "Equilibres Macroéconomiques"
    ],
    "Statistiques descriptives": [
      "Statistiques descriptives"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Public et Privé"
    ],
    "Fondements Microéconomiques": [
      "Fondements Microéconomiques"
    ],
    "Equilibres Microéconomiques": [
      "Equilibres Microéconomiques"
    ],
    "Introduction à la comptabilité": [
      "Introduction à la comptabilité"
    ],
    "Comptabilité": [
      "Comptabilité générale",
      "Fondements du management général"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Théorie Macroéconomique 1": [
      "Macroéconomie de court terme",
      "Economie monétaire et bancaire"
    ],
    "Théorie Microéconomique": [
      "Equilibre général",
      "Les marchés imparfaits"
    ],
    "Mathématiques 2": [
      "Mathématiques 2"
    ],
    "Théories Economiques 1": [
      "Histoire de la pensée économique",
      "Economie des Finances Publiques"
    ],
    "Théories Economiques 2": [
      "Economie du Développement",
      "Economie Internationale"
    ],
    "Théorie Macroéconomique 2": [
      "Théorie de la Croissance",
      "Comptabilité Nationale"
    ],
    "Nouvelle Microéconomie": [
      "Théorie des jeux",
      "Economie Industrielle"
    ],
    "Outils d'aide à la décision 1": [
      "Statistiques et Probabilité",
      "Recherche Opérationnelle"
    ],
    "Outils d'aide à la décision 2": [
      "Statistiques Mathématiques"
    ],
    "Techniques Econométriques 1": [
      "Modèles linéaires et Violation d'hypothèses",
      "Introduction à l'économétrie des Séries Temporelles"
    ],
    "Techniques Econométriques 2": [
      "Optimisation statique",
      "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"
    ],
    "Economie de la santé": [
      "Economie de la santé"
    ],
    "Gestion hospitalière": [
      "Gestion des Structures de santé",
      "Gestion des ressources humaines"
    ],
    "Economie des ressources humaines": [
      "Economie du travail et de l’éducation",
      "Epidémiologie et biostatistique"
    ],

    "Stage": [
      "Stage"
    ],
    "Rédaction et soutenance": [
      "Rédaction de mémoire",
      "Soutenance de mémoire"
    ]
  }
},

    APP: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Equilibres Macroéconomiques",
      "Statistiques descriptives",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Fondements Microéconomiques",
      "Equilibres Microéconomiques",
      "Introduction à la comptabilité",
      "Comptabilité",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Théories Economiques 1",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Economie et Environnement de projets",
      "Outils d’analyse de Projet",
      "Conception et Evaluation de Projet",
      "Gestion des Projets",
      "Outils de performance de projet",
      "Entrepreneuriat et Financement"
    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": [
      "Analyse",
      "Algèbre Matricielle"
    ],
    "Fondements Macroéconomiques": [
      "Fondements Macroéconomiques"
    ],
    "Equilibres Macroéconomiques": [
      "Equilibres Macroéconomiques"
    ],
    "Statistiques descriptives": [
      "Statistiques descriptives"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Public et Privé"
    ],
    "Fondements Microéconomiques": [
      "Fondements Microéconomiques"
    ],
    "Equilibres Microéconomiques": [
      "Equilibres Microéconomiques"
    ],
    "Introduction à la comptabilité": [
      "Introduction à la comptabilité"
    ],
    "Comptabilité": [
      "Comptabilité générale",
      "Fondements du management général"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Théorie Macroéconomique 1": [
      "Macroéconomie de court terme",
      "Economie monétaire et bancaire"
    ],
    "Théorie Microéconomique": [
      "Equilibre général",
      "Les marchés imparfaits"
    ],
    "Mathématiques 2": [
      "Mathématiques 2"
    ],
    "Théories Economiques 1": [
      "Histoire de la pensée économique",
      "Economie des Finances Publiques"
    ],
    "Théories Economiques 2": [
      "Economie du Développement",
      "Economie Internationale"
    ],
    "Théorie Macroéconomique 2": [
      "Théorie de la Croissance",
      "Comptabilité Nationale"
    ],
    "Nouvelle Microéconomie": [
      "Théorie des jeux",
      "Economie Industrielle"
    ],
    "Outils d'aide à la décision 1": [
      "Statistiques et Probabilité",
      "Recherche Opérationnelle"
    ],
    "Outils d'aide à la décision 2": [
      "Statistiques Mathématiques"
    ],
    "Techniques Econométriques 1": [
      "Modèles linéaires et Violation d'hypothèses",
      "Introduction à l'économétrie des Séries Temporelles"
    ],
    "Techniques Econométriques 2": [
      "Optimisation statique",
      "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"
    ],
    "Economie et Environnement de projets": [
      "Elaboration de plan et programme",
      "Gouvernance Projet"
    ],
    "Outils d’analyse de Projet": [
      "Mathématiques financières",
      "Analyse Economique et Financière de Projet"
    ],
    "Conception et Evaluation de Projet": [
      "Montage de projet",
      "Introduction à l'évaluation d'impact"
    ],
    "Gestion des Projets": [
      "Planification et Gestion de cycle de projets",
      "Suivi-évaluation de Projets"
    ],
    "Outils de performance de projet": [
      "Initiation à la Planification stratégique",
      "Gestion Axée sur les Résultats"
    ],
    "Entrepreneuriat et Financement": [
      "Entrepreneuriat de projet",
      "Plan d'Affaire et Financement de Projet"
    ],
    "Méthodologie": [
      "Pratiques de l’économétrie",
      "Méthodologie de recherche"
    ],
    "Stage": [
      "Stage"
    ],
    "Rédaction et soutenance": [
      "Rédaction de mémoire",
      "Soutenance de mémoire"
    ]
  }
},


        
    LSTCF: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Technique quantitative",
      "Introduction à la science de Gestion",
      "Introduction à la comptabilité",
      "Initiation à l'audit et à la fiscalité",
      "Comptabilité",
      "Bureau comptable",
      "Droit"
    ],
    "Semestre 2": [
      "Economie d'entreprise",
      "Microéconomie",
      "Finance",
      "Comptabilité",
      "Marketing Management",
      "Droit",
      "Méthodologie",
      "Anglais Economique et Comptable"
    ],
    "Semestre 3": [
      "Technique quantitative II",
      "Outils de gestion",
      "Comptabilité de décision",
      "Gestion Prévisionnelle et budgétaire",
      "Finance",
      "Anglais",
      "Logiciel de comptabilité"
    ],
    "Semestre 4": [
      "Outils de gestion",
      "Comptabilité",
      "Fiscalité",
      "Gestion Publique",
      "Communication comptable",
      "Stage"
    ],
    "Semestre 5": [
      "Stratégie et gouvernance d'entreprise",
      "Contrôle de gestion",
      "Audit",
      "Normes d'audit",
      "Comptabilité",
      "Difficultés comptables",
      "Normes comptables internationales"
    ],
    "Semestre 6": [
      "Système d’information de gestion",
      "Stage et mémoire"
    ]
  },
  "ecues": {
    "Technique quantitative": [
      "Statistiques de gestion",
      "Mathématique"
    ],
    "Introduction à la science de Gestion": [
      "Introduction à la science de gestion"
    ],
    "Introduction à la comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Initiation à l'audit et à la fiscalité": [
      "Initiation à l'audit",
      "Initiation à la fiscalité"
    ],
    "Comptabilité": [
      "Comptabilité générale 1",
      "Comptabilité générale 2"
    ],
    "Bureau comptable": [
      "Bureau comptable"
    ],
    "Droit": [
      "Introduction au droit",
      "Droit commercial",
      "Droit du travail"
    ],
    "Economie d'entreprise": [
      "Economie d'entreprise"
    ],
    "Microéconomie": [
      "Microéconomie"
    ],
    "Finance": [
      "Introduction à l'analyse financière",
      "Analyse et diagnostic financier",
      "Gestion financière"
    ],
    "Marketing Management": [
      "Marketing",
      "Gestion des Ressources Humaines"
    ],
    "Méthodologie": [
      "Développement personnel"
    ],
    "Anglais Economique et Comptable": [
      "Anglais Economique et Comptable"
    ],
    "Technique quantitative II": [
      "Statistique et Probabilité",
      "Mathématique financière"
    ],
    "Outils de gestion": [
      "Recherche opérationnelle",
      "Gestion budgétaire et prévisionnelle"
    ],
    "Comptabilité de décision": [
      "Comptabilité analytique"
    ],
    "Gestion Prévisionnelle et budgétaire": [
      "Gestion budgétaire et prévisionnelle"
    ],
    "Anglais": [
      "Anglais financier"
    ],
    "Logiciel de comptabilité": [
      "Initiation aux Logiciels de comptabilité"
    ],
    "Fiscalité": [
      "Fiscalité des entreprises"
    ],
    "Gestion Publique": [
      "Comptabilité publique",
      "Finance publique"
    ],
    "Communication comptable": [
      "Techniques de communication appliquées à la profession comptable"
    ],
    "Stage": [
      "Stage Professionnel",
      "Projet tutoré"
    ],
    "Stratégie et gouvernance d'entreprise": [
      "Gouvernance d'entreprise",
      "Stratégie et politique de l’entreprise"
    ],
    "Contrôle de gestion": [
      "Contrôle de gestion"
    ],
    "Audit": [
      "Commissariat aux comptes"
    ],
    "Normes d'audit": [
      "Normes internationales d’audit"
    ],
    "Difficultés comptables": [
      "Difficultés comptables"
    ],
    "Normes comptables internationales": [
      "Normes comptables internationales"
    ],
    "Système d’information de gestion": [
      "Informatique de gestion",
      "Logiciel de gestion comptable"
    ],
    "Stage et mémoire": [
      "Méthodologie de rédaction",
      "Stage et mémoire"
    ]
  }
},

    GRH: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Environnement social et GRH",
      "Outils et pratiques de GRH",
      "Management social",
      "Acquisition, développement et conservation des RH",
      "GPEC",
      "Logiciel Spécialisé",
      "Droit du travail"
    ],
    "Semestre 6": [
      "Méthode rédactionnelle et application GRH",
      "Présentation de travaux"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de comptabilité"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Environnement social et GRH": [
      "Sociologie et organisation du travail"
    ],
    "Outils et pratiques de GRH": [
      "Administration du personnel, Rémunération, gestion du temps"
    ],
    "Management social": [
      "Management social et appliqué",
      "Outils de pilotage RH"
    ],
    "Acquisition, développement et conservation des RH": [
      "Dotation et développement des RH et conservation"
    ],
    "GPEC": [
      "Gestion prévisionnelle des emplois et des compétences"
    ],
    "Logiciel Spécialisé": [
      "Logiciel GRH"
    ],
    "Droit du travail": [
      "Droit du travail"
    ],
    "Méthode rédactionnelle et application GRH": [
      "Politique de reconversion et de plan social",
      "Méthodologie de rédaction"
    ],
    "Présentation de travaux": [
      "Stage et mémoire"
    ]
  }
},


    EGPME: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Analyse de la faisabilité d'un projet entrepreneurial",
      "Management d'entreprise familiale et transmission d'entreprise",
      "Développement des habiletés de gestion",
      "Créativité et Marketing",
      "Marketing",
      "Politique générale et stratégie d'entreprise",
      "Système d'information et de gestion"
    ],
    "Semestre 6": [
      "Finance",
      "Stage et mémoire"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Analyse de la faisabilité d'un projet entrepreneurial": [
      "Analyse de la faisabilité d'un projet entrepreneurial"
    ],
    "Management d'entreprise familiale et transmission d'entreprise": [
      "Management d'entreprise familiale et transmission d'entreprise"
    ],
    "Développement des habiletés de gestion": [
      "Développement des habiletés de gestion"
    ],
    "Créativité et Marketing": [
      "Créativité et innovation"
    ],
    "Politique générale et stratégie d'entreprise": [
      "Politique générale et stratégie d'entreprise"
    ],
    "Système d'information et de gestion": [
      "Système d'information et de gestion"
    ],
    "Finance": [
      "Gestion des risques d'entreprise",
      "Entrepreneuriat"
    ],
    "Stage et mémoire": [
      "Méthodologie de rédaction",
      "Stage et mémoire"
    ]
  }
},

    FBA: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Analyse de la faisabilité d'un projet entrepreneurial",
      "Management d'entreprise familiale et transmission d'entreprise",
      "Développement des habiletés de gestion",
      "Créativité et Marketing",
      "Marketing",
      "Politique générale et stratégie d'entreprise",
      "Système d'information et de gestion"
    ],
    "Semestre 6": [
      "Finance",
      "Stage et mémoire"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Analyse de la faisabilité d'un projet entrepreneurial": [
      "Analyse de la faisabilité d'un projet entrepreneurial"
    ],
    "Management d'entreprise familiale et transmission d'entreprise": [
      "Management d'entreprise familiale et transmission d'entreprise"
    ],
    "Développement des habiletés de gestion": [
      "Développement des habiletés de gestion"
    ],
    "Créativité et Marketing": [
      "Créativité et innovation"
    ],
    "Politique générale et stratégie d'entreprise": [
      "Politique générale et stratégie d'entreprise"
    ],
    "Système d'information et de gestion": [
      "Système d'information et de gestion"
    ],
    "Finance": [
      "Gestion des risques d'entreprise",
      "Entrepreneuriat"
    ],
    "Stage et mémoire": [
      "Méthodologie de rédaction",
      "Stage et mémoire"
    ]
  }
},



         CACG: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Outils de gestion",
      "Gestion Prévisionnelle",
      "Audit et Comptabilité des sociétés",
      "Comptabilité des sociétés",
      "Outils de gestion financière et comptable",
      "Méthodologie de l'audit",
      "Gestion de la trésorerie"
    ],
    "Semestre 6": [
      "Finance",
      "Méthodologie de rédaction",
      "Présentation de travaux"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière",
      "Finance d'entreprise",
      "Finance de marché"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Outils de gestion": [
      "Contrôle de gestion"
    ],
    "Gestion Prévisionnelle": [
      "Gestion Prévisionnelle"
    ],
    "Audit et Comptabilité des sociétés": [
      "Audit et Comptabilité des sociétés"
    ],
    "Comptabilité des sociétés": [
      "Comptabilité des sociétés"
    ],
    "Outils de gestion financière et comptable": [
      "Analyse financière approfondie",
      "Gestion financière internationale"
    ],
    "Méthodologie de l'audit": [
      "Méthodologie de l'audit financier"
    ],
    "Gestion de la trésorerie": [
      "Gestion de la trésorerie"
    ],
    "Méthodologie de rédaction": [
      "Méthodologie de rédaction"
    ],
    "Présentation de travaux": [
      "Stage et mémoire"
    ]
  }
},


 MKTS: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Marketing approfondi I",
      "Marketing stratégique",
      "Communication marketing",
      "Opération avec le reste du monde",
      "Culture et spécificités marketing",
      "Mesure des attitudes des consommateurs",
      "Développement durable"
    ],
    "Semestre 6": [
      "Application marketing",
      "Méthodologie de rédaction",
      "Présentation de travaux"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 :  Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Marketing approfondi I": [
      "Distribution et force de vente"
    ],
    "Marketing stratégique": [
      "Marketing stratégique"
    ],
    "Communication marketing": [
      "Communication marketing"
    ],
    "Opération avec le reste du monde": [
      "Pratiques marketing",
      "Marketing électronique"
    ],
    "Culture et spécificités marketing": [
      "Marketing des services et marketing international"
    ],
    "Mesure des attitudes des consommateurs": [
      "Mesure des attitudes des consommateurs"
    ],
    "Développement durable": [
      "Développement durable"
    ],
    "Application marketing": [
      "Etude de marché et élaboration du plan marketing et gestion de la relation client",
      "Commerce international et négociation"
    ],
    "Méthodologie de rédaction": [
      "Méthodologie de rédaction"
    ],
    "Présentation de travaux": [
      "Stage et mémoire"
    ]
  }
},

        EMF: {
    "semesters": [
      "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
    ],
    "ues": {
        "Semestre 1": [
            "Mathématiques 1",
            "Fondements Macroéconomiques",
            "Equilibres Macroéconomiques",
            "Statistiques descriptives",
            "Introduction à l'Economie et à la Gestion",
            "Introduction au Droit"
        ],
        "Semestre 2": [
            "Fondements Microéconomiques",
            "Equilibres Microéconomiques",
            "Introduction à la comptabilité",
            "Comptabilité",
            "Environnement Economique"
        ],
        "Semestre 3": [
            "Théorie Macroéconomique 1",
            "Théorie Microéconomique",
            "Mathématiques 2",
            "Théories Economiques 1",
            "Théories Economiques 2"
        ],
        "Semestre 4": [
            "Théorie Macroéconomique 2",
            "Nouvelle Microéconomie",
            "Outils d'aide à la décision 1",
            "Techniques Econométriques 1",
            "Techniques Econométriques 2",
            "Règlementation et Management des IMF"
        ],
        "Semestre 5": [
            "Conception de produits et outils de gestion opérationnelle",
            "Technique d'Analyse des Dossiers de prêt",
            "Contrôle des IMF",
            "Performance des IMF",
            "Gestion des IMF",
            "Microfinance et Inclusion Financière",
            "Comptabilité en MF"
        ],
        "Semestre 6": [
            "Méthodologie",
            "Stage",
            "Rédaction et soutenance"
        ]
    },
    "ecues": {
        "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
        "Fondements Macroéconomiques": ["Macroéconomie"],
        "Equilibres Macroéconomiques": ["Equilibre Macroéconomique"],
        "Statistiques descriptives": ["Statistiques descriptives"],
        "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
        "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
        "Fondements Microéconomiques": ["Fondements Microéconomiques"],
        "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
        "Introduction à la comptabilité": ["Introduction à la comptabilité"],
        "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
        "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
        "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
        "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
        "Mathématiques 2": ["Mathématiques 2"],
        "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
        "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
        "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
        "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
        "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
        "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
        "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"],
        "Règlementation et Management des IMF": ["Règlementation des IMF", "Gouvernance des IMF"],
        "Conception de produits et outils de gestion opérationnelle": ["Conception de produits innovants de microcrédit", "Logiciels de microfinance"],
        "Technique d'Analyse des Dossiers de prêt": ["Analyse de la qualité du projet et du profil de l'emprunteur", "Gestion des Risques des IMF"],
        "Contrôle des IMF": ["Audit et contrôle (interne ; externe et viabilité des IMF : 3 aspects)", "Contrôle de gestion dans les IMF"],
        "Performance des IMF": ["Analyse des Performance des IMF (Suivi et Evaluation des agences)", "Education financière"],
        "Gestion des IMF": ["Gestion des Opérations courantes de microfinance", "Evaluation d’impact des IMF"],
        "Microfinance et Inclusion Financière": ["Finance Digitale", "Financement des Chaînes de Valeurs Agricoles par les IMF"],
        "Comptabilité en MF": ["Comptabilité des opérations en MF", "Technique d’élaboration des états financiers"],
        "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
        "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
    }
},



        APD: {
    semesters: [   
      "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"],
    ues: {
        "Semestre 1": ["Analyse mathématique", "Algorithme et programmation", "Électronique analogique", "Électricité et magnétisme", "Sciences de l'ingénieur", "Introduction aux sciences de l'informatique"],
        "Semestre 2": ["Analyse numérique", "Algorithmique et structures de données", "Électronique numérique", "Thermodynamique", "Automatique et systèmes", "Communication"],
        "Semestre 3": ["Probabilités et statistiques", "Réseaux informatiques", "Architecture des ordinateurs", "Électronique de puissance", "Systèmes embarqués", "Outils de développement logiciel"],
        "Semestre 4": ["Systèmes d'exploitation", "Base de données", "Électrotechnique", "Systèmes temps réel", "Génie logiciel", "Projet"],
        "Semestre 5": ["Intelligence artificielle", "Sécurité informatique", "Réseaux avancés", "Systèmes distribués", "Robotique", "Stage"],
        "Semestre 6": ["Projet de fin d'études", "Management de projet", "Ingénierie financière", "Entrepreneuriat", "Éthique professionnelle", "Anglais technique"]
    },
    ecues: {
        "Analyse mathématique": ["Analyse réelle", "Analyse complexe"],
        "Algorithme et programmation": ["Algorithmique", "Programmation orientée objet"],
        "Électronique analogique": ["Circuits analogiques", "Électronique de puissance"],
        "Électricité et magnétisme": ["Électrocinétique", "Magnétostatique"],
        "Sciences de l'ingénieur": ["Mécanique des fluides", "Résistance des matériaux"],
        "Introduction aux sciences de l'informatique": ["Architecture des ordinateurs", "Systèmes d'exploitation"],
        "Analyse numérique": ["Méthodes numériques", "Calcul scientifique"],
        "Algorithmique et structures de données": ["Structures de données avancées", "Algorithmes avancés"],
        "Électronique numérique": ["Circuits logiques", "Microcontrôleurs"],
        "Thermodynamique": ["Thermodynamique appliquée", "Transferts thermiques"],
        "Automatique et systèmes": ["Automatique linéaire", "Systèmes asservis"],
        "Communication": ["Réseaux de communication", "Télécommunications"],
        "Probabilités et statistiques": ["Probabilités avancées", "Statistiques multidimensionnelles"],
        "Réseaux informatiques": ["Architecture des réseaux", "Protocoles de communication"],
        "Architecture des ordinateurs": ["Microprocesseurs", "Architecture avancée"],
        "Électronique de puissance": ["Commande des convertisseurs", "Applications industrielles"],
        "Systèmes embarqués": ["Microcontrôleurs embarqués", "Systèmes temps réel"],
        "Outils de développement logiciel": ["Gestion de versions", "Méthodes agiles"],
        "Systèmes d'exploitation": ["Unix/Linux", "Windows"],
        "Base de données": ["Modélisation des données", "SQL avancé"],
        "Électrotechnique": ["Machines électriques", "Électrotechnique industrielle"],
        "Systèmes temps réel": ["Analyse temps réel", "Contrôle temps réel"],
        "Génie logiciel": ["Cycle de vie logiciel", "Tests et validation"],
        "Intelligence artificielle": ["Apprentissage automatique", "Traitement du langage naturel"],
        "Sécurité informatique": ["Cryptographie", "Sécurité des systèmes"],
        "Réseaux avancés": ["Réseaux sans fil", "Protocoles avancés"],
        "Systèmes distribués": ["Middleware", "Architectures distribuées"],
        "Robotique": ["Robotique mobile", "Manipulateurs et bras robotiques"],
        "Projet": ["Analyse de besoins", "Conception et réalisation"],
        "Projet de fin d'études": ["Rapport de projet", "Soutenance de projet"],
        "Management de projet": ["Planification de projet", "Gestion des risques"],
        "Ingénierie financière": ["Analyse financière", "Évaluation d'entreprise"],
        "Entrepreneuriat": ["Création d'entreprise", "Business plan"],
        "Éthique professionnelle": ["Déontologie", "Responsabilité professionnelle"],
        "Anglais technique": ["Communication professionnelle", "Vocabulaire technique"]
    }
},

TC: {
    semesters: ["Semestre 1", "Semestre 2"],
    ues: {
      "Semestre 1": [
            "Mathématiques 1",
            "Fondements Macroéconomiques",
            "Equilibres Macroéconomiques",
            "Statistiques descriptives",
            "Introduction à l'Economie et à la Gestion",
            "Introduction au Droit"
        ],
        "Semestre 2": [
            "Fondements Microéconomiques",
            "Equilibres Microéconomiques",
            "Introduction à la comptabilité",
            "Comptabilité",
            "Environnement Economique"
        ]
    },
    ecues: {
      "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
        "Fondements Macroéconomiques": ["Macroéconomie"],
        "Equilibres Macroéconomiques": ["Microéconomique"],
        "Statistiques descriptives": ["Statistiques descriptives"],
        "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
        "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
        "Fondements Microéconomiques": ["Fondements Microéconomiques"],
        "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
        "Introduction à la comptabilité": ["Introduction à la comptabilité"],
        "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
        "Environnement Economique": ["Anglais Economique", "Droit des Affaires"]
    }
},

EGEA: {
    semesters: [   
      "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"],
  "ues": {
    "Semestre 1": {
      "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
      "Fondements Macroéconomiques": ["Fondements Macroéconomiques"],
      "Equilibres Macroéconomiques": ["Equilibres Macroéconomiques"],
      "Statistiques descriptives": ["Statistiques descriptives"],
      "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
      "Introduction au Droit": ["Droit Public", "Droit Public et Privé"]
    },
    "Semestre 2": {
      "Fondements Microéconomiques": ["Fondements Microéconomiques"],
      "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
      "Introduction à la comptabilité": ["Introduction à la comptabilité"],
      "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
      "Environnement Economique": ["Anglais Economique", "Droit des Affaires"]
    },
    "Semestre 3": {
      "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
      "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
      "Mathématiques 2": ["Mathématiques 2"],
      "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
      "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"]
    },
    "Semestre 4": {
      "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
      "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
      "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
      "Outils d'aide à la décision 2": ["Statistiques Mathématiques"],
      "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
      "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"]
    },
    "Semestre 5": {
      "Développement agricole": ["Economie agricole", "Filières et chaines de valeurs agricoles"],
      "Gestion agricole": ["Comptabilité agricole", "Gestion des exploitations agricoles"],
      "Environnement d’agro-business": ["Investissements et financements en agriculture", "Risques en gestion des exploitations agricoles"],
      "Analyse des marchés agricoles": ["Commercialisation des produits agricoles", "Marketing agricole"],
      "Agro-business": ["Entrepreneurial agricole", "Montage des projets agricoles"]
    },
    "Semestre 6": {
      "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
      "Stage": ["Stage"],
      "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
    }
  },
  "ecues": {
    "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
    "Fondements Macroéconomiques": ["Fondements Macroéconomiques"],
    "Equilibres Macroéconomiques": ["Equilibres Macroéconomiques"],
    "Statistiques descriptives": ["Statistiques descriptives"],
    "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
    "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
    "Fondements Microéconomiques": ["Fondements Microéconomiques"],
    "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
    "Introduction à la comptabilité": ["Introduction à la comptabilité"],
    "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
    "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
    "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
    "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
    "Mathématiques 2": ["Mathématiques 2"],
    "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
    "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
    "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
    "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
    "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
    "Outils d'aide à la décision 2": ["Statistiques Mathématiques"],
    "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
    "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"],
    "Développement agricole": ["Economie agricole", "Filières et chaines de valeurs agricoles"],
    "Gestion agricole": ["Comptabilité agricole", "Gestion des exploitations agricoles"],
    "Environnement d’agro-business": ["Investissements et financements en agriculture", "Risques en gestion des exploitations agricoles"],
    "Analyse des marchés agricoles": ["Commercialisation des produits agricoles", "Marketing agricole"],
    "Agro-business": ["Entrepreneurial agricole", "Montage des projets agricoles"],
    "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
    "Stage": ["Stage"],
    "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
  }
},


    LESA: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Fondements Microéconomiques",
      "Statistiques descriptives",
      "Introduction aux Sciences Economiques",
      "Environnement Economique"
    ],
    "Semestre 2": [
      "Equilibres Macroéconomiques",
      "Equilibres Microéconomiques",
      "Logiciels Informatiques",
      "Environnement Comptable et Financier",
      "Théories Economiques 1"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Techniques de collecte de données",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Outils d'aide à la décision 3",
      "Logiciel et Algorithme",
      "Outils d'analyse des données",
      "Pratiques de l'Econométrie",
      "Techniques Econométriques 3"
    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": [
      "Analyse",
      "Algèbre Matricielle"
    ],
    "Fondements Macroéconomiques": [
      "Macroéconomie"
    ],
    "Fondements Microéconomiques": [
      "Microéconomique"
    ],
    "Statistiques descriptives": [
      "Statistiques descriptives"
    ],
    "Introduction aux Sciences Economiques": [
      "Introduction à la science économique",
      "Introduction à la politique économique"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit Public et Privé"
    ],
    "Equilibres Macroéconomiques": [
      "Equilibres Macroéconomiques"
    ],
    "Equilibres Microéconomiques": [
      "Equilibres Microéconomiques"
    ],
    "Logiciels Informatiques": [
      "Informatique",
      "Numération et Algorithme"
    ],
    "Environnement Comptable et Financier": [
      "Comptabilité générale",
      "Mathématiques financières"
    ],
    "Théories Economiques 1": [
      "Histoire de la pensée économique",
      "Economie des Finances Publiques"
    ],
    "Théorie Macroéconomique 1": [
      "Macroéconomie de court terme",
      "Economie monétaire et bancaire"
    ],
    "Théorie Microéconomique": [
      "Equilibre général",
      "Les marchés imparfaits"
    ],
    "Mathématiques 2": [
      "Mathématiques 2"
    ],
    "Techniques de collecte de données": [
      "Introduction à la théorie des sondages",
      "Logiciel d'enquête (Survey CTO / Kobocollect)"
    ],
    "Théories Economiques 2": [
      "Economie du Développement",
      "Economie Internationale"
    ],
    "Théorie Macroéconomique 2": [
      "Théorie de la Croissance",
      "Comptabilité Nationale"
    ],
    "Nouvelle Microéconomie": [
      "Théorie des jeux",
      "Economie Industrielle"
    ],
    "Outils d'aide à la décision 1": [
      "Statistiques et Probabilité",
      "Recherche Opérationnelle"
    ],
    "Outils d'aide à la décision 2": [
      "Statistiques Mathématiques",
      "Optimisation statique (A revoir)"
    ],
    "Techniques Econométriques 1": [
      "Modèles linéaires et Violation d'hypothèses",
      "Introduction à l’Econométrie des Séries Temporelles"
    ],
    "Techniques Econométriques 2": [
      "Optimisation statique (A revoir)",
      "Introduction à l'Econométrie des Variables Qualitatives (Logit, Probit)"
    ],
    "Outils d'aide à la décision 3": [
      "Econométrie des données de Panel",
      "Techniques de décision dans l'incertain"
    ],
    "Logiciel et Algorithme": [
      "Logiciel SPSS et CSPro (techniques d'enquête et de sondage)",
      "Algorithme & Programmation"
    ],
    "Outils d'analyse des données": [
      "Analyse des données",
      "Extension des modèles linéaires (endogénéité, hétérogénéité, autocorrélation)"
    ],
    "Pratiques de l'Econométrie": [
      "Pratique de l'économétrie sur STATA",
      "Pratique de l'économétrie sur EVIEWS"
    ],
    "Techniques Econométriques 3": [
      "Econométrie des variables qualitatives",
      "Econométrie des séries temporelles (stationnarité, cointégration & MCE)"
    ],
    "Méthodologie": [
      "Pratiques de l’économétrie",
      "Méthodologie de recherche"
    ],
    "Stage": [
      "Stage"
    ],
    "Rédaction et soutenance": [
      "Rédaction de mémoire",
      "Soutenance de mémoire"
    ]
  }
},


        EFCL: {
    "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
    ],
    "ues": {
        "Semestre 1": [
            "Mathématiques 1",
            "Fondements Macroéconomiques",
            "Equilibres Macroéconomiques",
            "Statistiques descriptives",
            "Introduction à l'Economie et à la Gestion",
            "Introduction au Droit"
        ],
        "Semestre 2": [
            "Fondements Microéconomiques",
            "Equilibres Microéconomiques",
            "Introduction à la comptabilité",
            "Comptabilité",
            "Environnement Economique"
        ],
        "Semestre 3": [
            "Théorie Macroéconomique 1",
            "Théorie Microéconomique",
            "Mathématiques 2",
            "Théories Economiques 1",
            "Théories Economiques 2"
        ],
        "Semestre 4": [
            "Théorie Macroéconomique 2",
            "Nouvelle Microéconomie",
            "Outils d'aide à la décision 1",
            "Techniques Econométriques 1",
            "Techniques Econométriques 2",
            "Procédures Administratives et Planification"
        ],
        "Semestre 5": [
            "Economie Publique",
            "Systèmes Productifs et Développement Economique Local",
            "Environnement des Collectivités Locales",
            "Finances Locales",
            "Comptabilité Publique et Fiscalité locale",
            "Planification et Gestion des Services Publics"
        ],
        "Semestre 6": [
            "Partenariat et Marchés Publics",
            "Méthodologie Appliquée",
            "Méthodologie de Recherche et Mémoire"
        ]
    },
    "ecues": {
        "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
        "Fondements Macroéconomiques": ["Macroéconomie"],
        "Equilibres Macroéconomiques": ["Microéconomique"],
        "Statistiques descriptives": ["Statistiques descriptives"],
        "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
        "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
        "Fondements Microéconomiques": ["Fondements Microéconomiques"],
        "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
        "Introduction à la comptabilité": ["Introduction à la comptabilité"],
        "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
        "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
        "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
        "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
        "Mathématiques 2": ["Mathématiques 2"],
        "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
        "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
        "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
        "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
        "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
        "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
        "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives"],
        "Procédures Administratives et Planification": ["Droit et Procédures administratives des Collectivités Locales", "Planification stratégique et suivi-évaluation"],
        "Economie Publique": ["Principes de l'Economie publique", "Economie Publique Locale"],
        "Systèmes Productifs et Développement Economique Local": ["Introduction à l'Analyse des Systèmes Productifs Locaux", "Stratégies et outils de Développement Economique Local"],
        "Environnement des Collectivités Locales": ["Analyse Economique Financière de Projets", "Montage de projets"],
        "Finances Locales": ["Finances publiques Locales (et GAR)", "Gestion Financière des Collectivités Locales"],
        "Comptabilité Publique et Fiscalité locale": ["Comptabilité publique", "Mobilisation des ressources (fiscales et non fiscales)"],
        "Planification et Gestion des Services Publics": ["Planification du Développement Local", "Maîtrise d'ouvrage et Gestion des Services Publics"],
        "Partenariat et Marchés Publics": ["Partenariat et Coopération Décentralisée", "Marchés Publics"],
        "Méthodologie Appliquée": ["Pratique de l'économétrie", "Logiciel de Gestion Budgétaire des Communes (GBCO)"],
        "Méthodologie de Recherche et Mémoire": ["Méthodologie de Recherche", "Stage et Mémoire de fin d'étude"]
    }
},
        EAPD: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Equilibres Macroéconomiques",
      "Statistiques descriptives",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Fondements Microéconomiques",
      "Equilibres Microéconomiques",
      "Introduction à la comptabilité",
      "Comptabilité",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Théories Economiques 1",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Politiques Economiques",
      "Politiques de Développement durable",
      "Stratégies de Développement",
      "Politiques sectorielles",
      "Gouvernance économique"
    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
    "Fondements Macroéconomiques": ["Fondements Macroéconomiques"],
    "Equilibres Macroéconomiques": ["Equilibres Macroéconomiques"],
    "Statistiques descriptives": ["Statistiques descriptives"],
    "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
    "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
    "Fondements Microéconomiques": ["Fondements Microéconomiques"],
    "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
    "Introduction à la comptabilité": ["Introduction à la comptabilité"],
    "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
    "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
    "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
    "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
    "Mathématiques 2": ["Mathématiques 2"],
    "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
    "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
    "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
    "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
    "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
    "Outils d'aide à la décision 2": ["Statistiques Mathématiques"],
    "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
    "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"],
    "Politiques Economiques": ["Analyses des Politiques Economiques (aspect micro & macro)", "Analyse d'impact des politiques publiques"],
    "Politiques de Développement durable": ["Politiques de Développement durable"],
    "Stratégies de Développement": ["Stratégies et politique de développement", "Analyse de la pauvreté"],
    "Politiques sectorielles": ["Agro-industries", "Industries touristiques"],
    "Gouvernance économique": ["Gouvernance publique", "Economie du secteur informel"],
    "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
    "Stage": ["Stage"],
    "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
  }
},

    };

    const programsDropdown = document.getElementById('programs');
    const semestersDropdown = document.getElementById('semesters');
    const uesDropdown = document.getElementById('ues');
    const ecuesDropdown = document.getElementById('ecues');
    const courseDetailsDiv = document.getElementById('courseDetails');

    // Populate Semesters Dropdown based on Program Selection
    programsDropdown.addEventListener('change', () => {
        const selectedProgram = programsDropdown.value;
        const semesters = programs[selectedProgram].semesters;
        populateDropdown(semestersDropdown, semesters);
        semestersDropdown.disabled = false;
        uesDropdown.disabled = true;
        ecuesDropdown.disabled = true;
        courseDetailsDiv.style.display = 'none';
    });

    // Populate UE Dropdown based on Semester Selection
    semestersDropdown.addEventListener('change', () => {
        const selectedProgram = programsDropdown.value;
        const selectedSemester = semestersDropdown.value;
        const ues = programs[selectedProgram].ues[selectedSemester];
        populateDropdown(uesDropdown, ues);
        uesDropdown.disabled = false;
        ecuesDropdown.disabled = true;
        courseDetailsDiv.style.display = 'none';
    });

    // Populate ECUE Dropdown based on UE Selection
    uesDropdown.addEventListener('change', () => {
        const selectedProgram = programsDropdown.value;
        const selectedUE = uesDropdown.value;
        const ecues = programs[selectedProgram].ecues[selectedUE];
        populateDropdown(ecuesDropdown, ecues);
        ecuesDropdown.disabled = false;
        courseDetailsDiv.style.display = 'none';
    });

    // Helper function to populate dropdowns
    function populateDropdown(dropdown, optionsArray) {
        dropdown.innerHTML = '';
        const defaultOption = document.createElement('option');
        defaultOption.text = 'Select';
        dropdown.add(defaultOption);
        optionsArray.forEach(option => {
            const newOption = document.createElement('option');
            newOption.text = option;
            dropdown.add(newOption);
        });
    }

    // Helper function to display course details
    function displayCourseDetails(ecues) {
        courseDetailsDiv.innerHTML = '';
        const heading = document.createElement('h4');
        heading.textContent = 'Related ECUEs:';
        courseDetailsDiv.appendChild(heading);
        const ecueList = document.createElement('ul');
        ecues.forEach(ecue => {
            const listItem = document.createElement('li');
            listItem.textContent = ecue;
            ecueList.appendChild(listItem);
        });
        courseDetailsDiv.appendChild(ecueList);
        courseDetailsDiv.style.display = 'block';
    }
</script>
<!-- Pop up script-->
<script>
  window.onload = function () {
    document.getElementById("popup").style.display = "block";
  };
</script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
 
 
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Reprise</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">

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
  
/* CSS for the spinner */
/* General styling */
body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

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
    font-weight: bold;
    
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

    /*handle error in the section*/
    
.popup-content {
  position: relative;
      height: auto;
      width: auto;
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


     /*  first div  */

     .service-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 10px;
    }
      .service-title {
        /* flex: 0 0 calc(50% - 20px); */
      background-color: #05138fde;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 300px;
      color: #fff
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
      color: black
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


  <section>
    <div class="service-container">
      <div class="service-title">
        <div class="user"  > 
   
        <div style="font-size:35px; font-weight:bold; align-item:center">Reprise</div>
        <div id="popup-text" style="font-size: 20px; font-weight:bold; text-transform:uppercase"></div>  
     
          <div class="small-title">
              Validation des frais de reprise<br><br>
              <p style="font-weight: 100; color:black">Veuillez remplir soyeusement le formulaire ci-dessous <br>
              
              </p>

          </div>
  
      </div>
       
      </div>
     
  </section>

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
  <!-- Registration Form Section -->
  <section id="registration-form" class="registration-form">
    <div class="container">
      <div class="progress-container">
        <div class="progress" id="progress-bar-container">
          <div class="progress-bar" role="progressbar" id="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

      <form action="{{ route('Retake_send')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Step 1: Information personnelle -->
        <div class="form-container form-step" id="step1">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bolder">INFORMATIONS PERSONNELLES</p>
            </div>

            <div class="form-group">
              <label for="ac_level">Niveau d'étude:</label>
              <select id="ac_level" class="form-control" name="ac_level">
                  {{-- <option value="">Veuillez sélectionner votre niveau d'étude actuel</option> --}}
                  <option value="Licence 1">Licence 1</option>
                  {{-- <option value="Licence 1 (Tronc Commun)">Licence1(Tronc Commun)</option> --}}
                  <option value="Licence 2">Licence 2</option>
                  <option value="Licence 3">Licence 3</option>
                  <option value="Master 1">Master 1</option>
                  <option value="Master 2">Master 2</option>
                  <option value="phD 1">phD 1</option>
                  <option value="phD 2">phD 2</option>

              </select>
            </div>


            <div class="form-group">
              <label for="ac_level_old">Année d'étude de reprise:</label>
              <select id="ac_level_old" class="form-control" name="ac_level_old">
                  <option value="">En quelle année avez-vous de reprise?  </option> 
                  <option value="Licence 1">Licence 1</option>
                  {{-- <option value="Licence 1 (Tronc Commun)">Licence1(Tronc Commun)</option> --}}
                  <option value="Licence 2">Licence 2</option>
                  <option value="Licence 3">Licence 3</option>
                  <option value="Master 1">Master 1</option>
                  <option value="Master 2">Master 2</option>
                  <option value="phD 1">phD 1</option>
                  <option value="phD 2">phD 2</option>

              </select>
            </div>

            <!-- <div class="form-group">
              <label for="tc">Tronc Commun:</label>
              <select id="tc" name="tc" onchange="toggleJuryField()">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
              </select>
            </div> -->

            <div class="form-group">
              <label for="field">Filière:</label>
              <select id="field" class="form-control" name="field">
                 <optgroup label="Filières">
                  <option value="Sciences Economiques">Sciences Economiques</option>
                  <option value="Sciences de Gestion">Sciences de Gestion</option>
                </optgroup>
                <optgroup label="Cas particulier">
                  <option value="TC">Tronc Commun</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group">
              <label for="programs">Spécialité:</label>
              <select class="form-control" name="program" id="programs" onchange="updateSemesters()">
                  <option value="">select</option>
                  <optgroup label="Economie">
                    <option value="EGSS">EGSS</option>
                    <option value="EGEA">EGEA</option>
                    <option value="EAPD">EAPD</option>
                    <option value="EFCL">EFCL</option>
                    <option value="APD">APD</option>
                    <option value="APP">APP</option>
                   
            
                    <option value="EMF">EMF</option>
                    <option value="LESA">LESA</option>
                </optgroup>
                <optgroup label="Gestion">
                  <option value="MKTS">MKTS</option>
                  <option value="CACG">CACG</option>
                  <option value="GRH">GRH</option>
                  <option value="FBA">FBA</option>
                  <option value="LSTCF">LSTCF</option>
                  <option value="EGPME">EGPME</option>
                </optgroup>
                <optgroup label="Cas particulier">
                  <option value="TC">Tronc commun</option>
                </optgroup>
              </select>
            </div>

            <div class="text-center">
              <button type="button" onclick="nextStep(2)" class="btn btn-primary">Suivant</button>
            </div>
          </fieldset>
        </div>

        <!-- Step 2: Information de réclamation 1 -->
        <div class="form-container form-step" id="step2">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bolder">INFORMATIONS DE REPRISE</p>
            </div>
            <div class="group-form">
              <label for="ac_year">Année académique:</label>
              <select id="ac_year" class="form-control" name="ac_year">
                 <option value="">Veuillez sélectionner l'année académique en cours...</option>
                  <option value="2023-2024">2023-2024</option>
                  <option value="2024-2025">2024-2025</option>
                  <option value="2025-2026">2025-2026</option>
                  <option value="2026-2027">2026-2027</option>
                  <option value="2026-2027">2027-2028</option>
                  <option value="2026-2027">2028-2029</option>
                  <option value="2026-2027">2029-2030</option>
              </select>
            </div>

            <!-- <div class="form-group" id="juryGroup">
              <label for="jury">Jury N°:</label>
             <select id="jury" class="form-control" name="jury">
                  <option value="NEANT">Néant</option>
                  <option value="jury 1">Jury 1</option>
                  <option value="jury 2">Jury 2</option>
                  <option value="jury 3">jury 3</option>
                  <option value="jury 4">jury 4</option>
                  <option value="jury 5">jury 5</option>
                  <option value="jury 6">jury 6</option>
                  <option value="jury 7">jury 7</option>
                  <option value="jury 8">jury 8</option>
                  <option value="jury 9">jury 9</option>
                  <option value="jury 10">jury 10</option>
              </select>
        </div> -->

            <!-- <div class="group-form">
              <label for="exam_type">Session:</label>
              <select name="exam_type" id="exam_type">
                {{-- <option value=""> Veuillez choisir une session</option> --}}
                <option value="session normale">session normale</option>
                <option value="session de rattrapage">session de rattrapage</option>

              </select>
            </div> -->

            <div class="form-group">
              <label for="semesters">Semestre d'appartenance:</label>
              <select id="semesters" disabled name="semester">
                <option value="" class="form-control">Quel est le semestre correspondant à l'ue reprise?</option>
            </select>
            </div>

            <!-- <div class="form-group">
              <label for="complain_type">Motif:</label>
              <select name="complain_type" id="complain_type">
                {{-- <option value="">Veuillez choisir le motif de réclamation</option> --}}
                <option value="Contestation de note">Contestation de notes</option>
                <option value="Défaillance de notes">Défaillance de notes</option>
                <option value="Affichage de notes">Affichage de notes</option>
                <option value="Omission de nom">Omission de nom</option>
                <option value="Reprise">Reprise</option>
                
              </select>
            </div> -->


             <div class="form-group">
              <label for="ues">UE REPRISE:</label>
              <fieldset>
                <select id="ues" disabled name="ue">
                  <option value="" class="form-control">Veuillez sélectionnerl'UE que vous reprenez</option>
              </select>
              </fieldset>

            </div> 

            <!-- <div class="form-group">
              <label for="ecues">ECUE:</label>
              <select id="ecues" disabled name="ecue">
                <option value="" class="form-control">Veuillez selectionner une ECUE</option>
            </select>
            </div> -->
            <div class="text-center">
              <button type="button" onclick="prevStep(1)" class="btn btn-primary">Précédent</button>
              <button type="button" onclick="nextStep(3)" class="btn btn-primary">Suivant</button>
            </div>
          </fieldset>
        </div>

        <!-- Step 3: Information de réclamation 2 -->
        <div class="form-container form-step" id="step3">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bold;">INFORMATIONS COMPLEMENTAIRES</p>
          </div>
          

            <!-- <div class="form-group">
              <label for="seq_number">Numéro sequentiel sur le PV:</label>
              <input type="text" class="form-control" id="seq_number" name="seq_number"  rows="1" placeholder="Ex: 15435" maxlength="8"></input>
            </div>

              <div class="form-group">
              <label for="grade_over_20">Note sur 20:</label>
              <input type="text" class="form-control" id="grade_over_20" name="grade_over_20"  rows="1" placeholder="Ex: 15" maxlength="2"></input>

            </div>

              <div class="form-group">
              <label for="coef_grade">Note Coefficié:</label>
              <input type="text" class="form-control" id="coef_grade" name="coef_grade"  rows="1" placeholder="Ex: 60" maxlength="3"></input>
            </div> -->
            
              <!-- <div class="form-group">
              <label for="validation">validation:</label>
                <select id="validation" name="validation">
                  {{-- <option value="" class="form-control">Veuillez selectionner un status</option> --}}
                  <option value="VALIDE" class="form-control">Validé</option>
                  <option value="NON VALIDE" class="form-control">Non validé</option>
              </select>
              </div> -->

              <div class="form-group">
                 <label for="fiche_inscription">Fiche de préinscription validée:</label>
              <input type="file" class="form-control-file"  id="fiche_inscription" name="fiche_inscription" multiple>
              </div>  
              
            <div class="form-group">
              <label for="bio">Description:</label>
              <textarea class="form-control" id="bio" name="description"  rows="3" placeholder="Brève description du problème"></textarea>
            </div>
            <div class="text-center">
              <button type="button" onclick="prevStep(2)" class="btn btn-primary">Précédent</button>
              <button type="button" onclick="nextStep(4)" class="btn btn-primary">Suivant</button>
            </div>
          </fieldset>
        </div>



        <!-- Step 4: Confirmation -->
        <div class="form-container form-step" id="step4">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight:bolder">CONFIRMATION</p>
            </div>
            <div class="form-group">

              <p style="color:black"> Veuillez verifier les informations renseignées avant de continuer.</p>
              <div id="user-info"></div>

              <button type="button" onclick="generateSummary()" class="btn btn-primary verify"  style="width: 120px; border-radius: 5%;">
                <i class="fas fa-check" style="align-content: center; ">verifier</i> 
            </button>
            
            </div>
            <div class="form-group form-check text-center mb-3">
              <div class="row align-items-center">
                <div class="col-auto">
                  <input type="checkbox" class="form-check-input" id="confirmationCheck" onclick="toggleSuivantButton()">
                </div>
                <div class="col-auto">
                  <label class="form-check-label" for="confirmationCheck">Je confirme</label>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="button" onclick="prevStep(3)" class="btn btn-primary">Précédent</button>
              <button type="submit" id="suivantButton" onclick="nextStep(5)" class="btn btn-primary" disabled>Suivant</button>
            </div>
          </fieldset>
        </div>

        <!-- Step 5: Payment -->
        <div class="form-container form-step" id="step5">
          <fieldset>
            <div class="form-group text-center">
              <p style="font-weight: bolder">Paiement</p>
              Vous y êtes presque. <br>
              Patientez pendant que la page de paiement se charge
            </div>
            <div class="text-center">
              <div class="spinner"></div>
              <button type="button" onclick="prevStep(4)" class="btn btn-primary" style="margin-right: 100px;">Précédent</button>
            </div>
          </fieldset>
        </div>
      </form>
    </div>
  </section>
</main>


<!-- Add a Bootstrap modal component -->
<div class="modal fade" id="summaryModal" tabindex="-1" aria-labelledby="summaryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="summaryModalLabel">Détails de l'inscription pédagogique</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="summaryBody">
        <!-- User's information will be displayed here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: red">Fermer</button>
      </div>
    </div>
  </div>
</div>

  

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
            <li><a style="color: black " href="#"><strong>Email:</strong>ronaldoagbohou@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links ">
          <h4>Services et prestations</h4>
          <ul style="color: black ">
            <li><a style="color: black " href="route('complaint_form')">Réclamation</a></li>
            <li><a style="color: black " href="route('transcript_form')">Actes académiques</a></li>
            <li><a style="color: black " href="route('ped_registration_form')">Inscription pédagogique</a></li>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
  function toggleJuryField() {
    var troncCommunSelect = document.getElementById("tc");
    var juryGroup = document.getElementById("juryGroup");

    if (troncCommunSelect.value === "Non") {
      juryGroup.classList.add("hidden");
    } else {
      juryGroup.classList.remove("hidden");
    }
  }
      // Initially hide the jury field
      document.addEventListener("DOMContentLoaded", function() {
      var juryGroup = document.getElementById("juryGroup");
      juryGroup.classList.add("hidden");
    });
</script>


  <script>

    // Add an event listener for the payment button
    const paymentButton = document.getElementById('paymentButton');
    paymentButton.addEventListener('click', () => {

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


</script>



{{-- populate user's information --}}

<script>
  function generateSummary() {
  // Retrieve form inputs
  var ac_year = document.getElementById('ac_year').value;
  var ac_level = document.getElementById('ac_level').value;
  var ac_level_old = document.getElementById('ac_level_old').value;

  var field = document.getElementById('field').value;
  var program = document.getElementById('programs').value; 
  var semesters = document.getElementById('semesters').value;
  var ue = document.getElementById('ues').value;


  var description = document.getElementById('bio').value;

  // Generate summary
  var summary = `
    <p style="color:black"><strong>Année académique:</strong> ${ac_year}</p>
    <p style="color:black"><strong>Niveau d'étude:</strong> ${ac_level}</p>
    <p style="color:black"><strong>Année de reprise:</strong> ${ac_level_old}</p>
    <p style="color:black"><strong>Filière:</strong> ${field}</p>
    <p style="color:black"><strong>Spécialité:</strong> ${program}</p>
    <p style="color:black"><strong>Semestre:</strong> ${semesters}</p>
    <p style="color:black"><strong>UE:</strong> ${ue}</p>
    <p style="color:black"><strong>Description:</strong> ${description}</p>
  `;

  // Display summary in the modal
  document.getElementById('summaryBody').innerHTML = summary;

  // Show the modal
  var myModal = new bootstrap.Modal(document.getElementById('summaryModal'));
  myModal.show();
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
    const programs = {
        EGSS: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Equilibres Macroéconomiques",
      "Statistiques descriptives",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Fondements Microéconomiques",
      "Equilibres Microéconomiques",
      "Introduction à la comptabilité",
      "Comptabilité",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Théories Economiques 1",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Economie de la santé",
      "Gestion hospitalière",
      "Economie des ressources humaines",

    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": [
      "Analyse",
      "Algèbre Matricielle"
    ],
    "Fondements Macroéconomiques": [
      "Fondements Macroéconomiques"
    ],
    "Equilibres Macroéconomiques": [
      "Equilibres Macroéconomiques"
    ],
    "Statistiques descriptives": [
      "Statistiques descriptives"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Public et Privé"
    ],
    "Fondements Microéconomiques": [
      "Fondements Microéconomiques"
    ],
    "Equilibres Microéconomiques": [
      "Equilibres Microéconomiques"
    ],
    "Introduction à la comptabilité": [
      "Introduction à la comptabilité"
    ],
    "Comptabilité": [
      "Comptabilité générale",
      "Fondements du management général"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Théorie Macroéconomique 1": [
      "Macroéconomie de court terme",
      "Economie monétaire et bancaire"
    ],
    "Théorie Microéconomique": [
      "Equilibre général",
      "Les marchés imparfaits"
    ],
    "Mathématiques 2": [
      "Mathématiques 2"
    ],
    "Théories Economiques 1": [
      "Histoire de la pensée économique",
      "Economie des Finances Publiques"
    ],
    "Théories Economiques 2": [
      "Economie du Développement",
      "Economie Internationale"
    ],
    "Théorie Macroéconomique 2": [
      "Théorie de la Croissance",
      "Comptabilité Nationale"
    ],
    "Nouvelle Microéconomie": [
      "Théorie des jeux",
      "Economie Industrielle"
    ],
    "Outils d'aide à la décision 1": [
      "Statistiques et Probabilité",
      "Recherche Opérationnelle"
    ],
    "Outils d'aide à la décision 2": [
      "Statistiques Mathématiques"
    ],
    "Techniques Econométriques 1": [
      "Modèles linéaires et Violation d'hypothèses",
      "Introduction à l'économétrie des Séries Temporelles"
    ],
    "Techniques Econométriques 2": [
      "Optimisation statique",
      "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"
    ],
    "Economie de la santé": [
      "Economie de la santé"
    ],
    "Gestion hospitalière": [
      "Gestion des Structures de santé",
      "Gestion des ressources humaines"
    ],
    "Economie des ressources humaines": [
      "Economie du travail et de l’éducation",
      "Epidémiologie et biostatistique"
    ],

    "Stage": [
      "Stage"
    ],
    "Rédaction et soutenance": [
      "Rédaction de mémoire",
      "Soutenance de mémoire"
    ]
  }
},

    APP: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Equilibres Macroéconomiques",
      "Statistiques descriptives",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Fondements Microéconomiques",
      "Equilibres Microéconomiques",
      "Introduction à la comptabilité",
      "Comptabilité",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Théories Economiques 1",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Economie et Environnement de projets",
      "Outils d’analyse de Projet",
      "Conception et Evaluation de Projet",
      "Gestion des Projets",
      "Outils de performance de projet",
      "Entrepreneuriat et Financement"
    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": [
      "Analyse",
      "Algèbre Matricielle"
    ],
    "Fondements Macroéconomiques": [
      "Fondements Macroéconomiques"
    ],
    "Equilibres Macroéconomiques": [
      "Equilibres Macroéconomiques"
    ],
    "Statistiques descriptives": [
      "Statistiques descriptives"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Public et Privé"
    ],
    "Fondements Microéconomiques": [
      "Fondements Microéconomiques"
    ],
    "Equilibres Microéconomiques": [
      "Equilibres Microéconomiques"
    ],
    "Introduction à la comptabilité": [
      "Introduction à la comptabilité"
    ],
    "Comptabilité": [
      "Comptabilité générale",
      "Fondements du management général"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Théorie Macroéconomique 1": [
      "Macroéconomie de court terme",
      "Economie monétaire et bancaire"
    ],
    "Théorie Microéconomique": [
      "Equilibre général",
      "Les marchés imparfaits"
    ],
    "Mathématiques 2": [
      "Mathématiques 2"
    ],
    "Théories Economiques 1": [
      "Histoire de la pensée économique",
      "Economie des Finances Publiques"
    ],
    "Théories Economiques 2": [
      "Economie du Développement",
      "Economie Internationale"
    ],
    "Théorie Macroéconomique 2": [
      "Théorie de la Croissance",
      "Comptabilité Nationale"
    ],
    "Nouvelle Microéconomie": [
      "Théorie des jeux",
      "Economie Industrielle"
    ],
    "Outils d'aide à la décision 1": [
      "Statistiques et Probabilité",
      "Recherche Opérationnelle"
    ],
    "Outils d'aide à la décision 2": [
      "Statistiques Mathématiques"
    ],
    "Techniques Econométriques 1": [
      "Modèles linéaires et Violation d'hypothèses",
      "Introduction à l'économétrie des Séries Temporelles"
    ],
    "Techniques Econométriques 2": [
      "Optimisation statique",
      "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"
    ],
    "Economie et Environnement de projets": [
      "Elaboration de plan et programme",
      "Gouvernance Projet"
    ],
    "Outils d’analyse de Projet": [
      "Mathématiques financières",
      "Analyse Economique et Financière de Projet"
    ],
    "Conception et Evaluation de Projet": [
      "Montage de projet",
      "Introduction à l'évaluation d'impact"
    ],
    "Gestion des Projets": [
      "Planification et Gestion de cycle de projets",
      "Suivi-évaluation de Projets"
    ],
    "Outils de performance de projet": [
      "Initiation à la Planification stratégique",
      "Gestion Axée sur les Résultats"
    ],
    "Entrepreneuriat et Financement": [
      "Entrepreneuriat de projet",
      "Plan d'Affaire et Financement de Projet"
    ],
    "Méthodologie": [
      "Pratiques de l’économétrie",
      "Méthodologie de recherche"
    ],
    "Stage": [
      "Stage"
    ],
    "Rédaction et soutenance": [
      "Rédaction de mémoire",
      "Soutenance de mémoire"
    ]
  }
},


        
    LSTCF: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Technique quantitative",
      "Introduction à la science de Gestion",
      "Introduction à la comptabilité",
      "Initiation à l'audit et à la fiscalité",
      "Comptabilité",
      "Bureau comptable",
      "Droit"
    ],
    "Semestre 2": [
      "Economie d'entreprise",
      "Microéconomie",
      "Finance",
      "Comptabilité",
      "Marketing Management",
      "Droit",
      "Méthodologie",
      "Anglais Economique et Comptable"
    ],
    "Semestre 3": [
      "Technique quantitative II",
      "Outils de gestion",
      "Comptabilité de décision",
      "Gestion Prévisionnelle et budgétaire",
      "Finance",
      "Anglais",
      "Logiciel de comptabilité"
    ],
    "Semestre 4": [
      "Outils de gestion",
      "Comptabilité",
      "Fiscalité",
      "Gestion Publique",
      "Communication comptable",
      "Stage"
    ],
    "Semestre 5": [
      "Stratégie et gouvernance d'entreprise",
      "Contrôle de gestion",
      "Audit",
      "Normes d'audit",
      "Comptabilité",
      "Difficultés comptables",
      "Normes comptables internationales"
    ],
    "Semestre 6": [
      "Système d’information de gestion",
      "Stage et mémoire"
    ]
  },
  "ecues": {
    "Technique quantitative": [
      "Statistiques de gestion",
      "Mathématique"
    ],
    "Introduction à la science de Gestion": [
      "Introduction à la science de gestion"
    ],
    "Introduction à la comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Initiation à l'audit et à la fiscalité": [
      "Initiation à l'audit",
      "Initiation à la fiscalité"
    ],
    "Comptabilité": [
      "Comptabilité générale 1",
      "Comptabilité générale 2"
    ],
    "Bureau comptable": [
      "Bureau comptable"
    ],
    "Droit": [
      "Introduction au droit",
      "Droit commercial",
      "Droit du travail"
    ],
    "Economie d'entreprise": [
      "Economie d'entreprise"
    ],
    "Microéconomie": [
      "Microéconomie"
    ],
    "Finance": [
      "Introduction à l'analyse financière",
      "Analyse et diagnostic financier",
      "Gestion financière"
    ],
    "Marketing Management": [
      "Marketing",
      "Gestion des Ressources Humaines"
    ],
    "Méthodologie": [
      "Développement personnel"
    ],
    "Anglais Economique et Comptable": [
      "Anglais Economique et Comptable"
    ],
    "Technique quantitative II": [
      "Statistique et Probabilité",
      "Mathématique financière"
    ],
    "Outils de gestion": [
      "Recherche opérationnelle",
      "Gestion budgétaire et prévisionnelle"
    ],
    "Comptabilité de décision": [
      "Comptabilité analytique"
    ],
    "Gestion Prévisionnelle et budgétaire": [
      "Gestion budgétaire et prévisionnelle"
    ],
    "Anglais": [
      "Anglais financier"
    ],
    "Logiciel de comptabilité": [
      "Initiation aux Logiciels de comptabilité"
    ],
    "Fiscalité": [
      "Fiscalité des entreprises"
    ],
    "Gestion Publique": [
      "Comptabilité publique",
      "Finance publique"
    ],
    "Communication comptable": [
      "Techniques de communication appliquées à la profession comptable"
    ],
    "Stage": [
      "Stage Professionnel",
      "Projet tutoré"
    ],
    "Stratégie et gouvernance d'entreprise": [
      "Gouvernance d'entreprise",
      "Stratégie et politique de l’entreprise"
    ],
    "Contrôle de gestion": [
      "Contrôle de gestion"
    ],
    "Audit": [
      "Commissariat aux comptes"
    ],
    "Normes d'audit": [
      "Normes internationales d’audit"
    ],
    "Difficultés comptables": [
      "Difficultés comptables"
    ],
    "Normes comptables internationales": [
      "Normes comptables internationales"
    ],
    "Système d’information de gestion": [
      "Informatique de gestion",
      "Logiciel de gestion comptable"
    ],
    "Stage et mémoire": [
      "Méthodologie de rédaction",
      "Stage et mémoire"
    ]
  }
},

    GRH: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Environnement social et GRH",
      "Outils et pratiques de GRH",
      "Management social",
      "Acquisition, développement et conservation des RH",
      "GPEC",
      "Logiciel Spécialisé",
      "Droit du travail"
    ],
    "Semestre 6": [
      "Méthode rédactionnelle et application GRH",
      "Présentation de travaux"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de comptabilité"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Environnement social et GRH": [
      "Sociologie et organisation du travail"
    ],
    "Outils et pratiques de GRH": [
      "Administration du personnel, Rémunération, gestion du temps"
    ],
    "Management social": [
      "Management social et appliqué",
      "Outils de pilotage RH"
    ],
    "Acquisition, développement et conservation des RH": [
      "Dotation et développement des RH et conservation"
    ],
    "GPEC": [
      "Gestion prévisionnelle des emplois et des compétences"
    ],
    "Logiciel Spécialisé": [
      "Logiciel GRH"
    ],
    "Droit du travail": [
      "Droit du travail"
    ],
    "Méthode rédactionnelle et application GRH": [
      "Politique de reconversion et de plan social",
      "Méthodologie de rédaction"
    ],
    "Présentation de travaux": [
      "Stage et mémoire"
    ]
  }
},


    EGPME: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Analyse de la faisabilité d'un projet entrepreneurial",
      "Management d'entreprise familiale et transmission d'entreprise",
      "Développement des habiletés de gestion",
      "Créativité et Marketing",
      "Marketing",
      "Politique générale et stratégie d'entreprise",
      "Système d'information et de gestion"
    ],
    "Semestre 6": [
      "Finance",
      "Stage et mémoire"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Analyse de la faisabilité d'un projet entrepreneurial": [
      "Analyse de la faisabilité d'un projet entrepreneurial"
    ],
    "Management d'entreprise familiale et transmission d'entreprise": [
      "Management d'entreprise familiale et transmission d'entreprise"
    ],
    "Développement des habiletés de gestion": [
      "Développement des habiletés de gestion"
    ],
    "Créativité et Marketing": [
      "Créativité et innovation"
    ],
    "Politique générale et stratégie d'entreprise": [
      "Politique générale et stratégie d'entreprise"
    ],
    "Système d'information et de gestion": [
      "Système d'information et de gestion"
    ],
    "Finance": [
      "Gestion des risques d'entreprise",
      "Entrepreneuriat"
    ],
    "Stage et mémoire": [
      "Méthodologie de rédaction",
      "Stage et mémoire"
    ]
  }
},

    FBA: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Analyse de la faisabilité d'un projet entrepreneurial",
      "Management d'entreprise familiale et transmission d'entreprise",
      "Développement des habiletés de gestion",
      "Créativité et Marketing",
      "Marketing",
      "Politique générale et stratégie d'entreprise",
      "Système d'information et de gestion"
    ],
    "Semestre 6": [
      "Finance",
      "Stage et mémoire"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Analyse de la faisabilité d'un projet entrepreneurial": [
      "Analyse de la faisabilité d'un projet entrepreneurial"
    ],
    "Management d'entreprise familiale et transmission d'entreprise": [
      "Management d'entreprise familiale et transmission d'entreprise"
    ],
    "Développement des habiletés de gestion": [
      "Développement des habiletés de gestion"
    ],
    "Créativité et Marketing": [
      "Créativité et innovation"
    ],
    "Politique générale et stratégie d'entreprise": [
      "Politique générale et stratégie d'entreprise"
    ],
    "Système d'information et de gestion": [
      "Système d'information et de gestion"
    ],
    "Finance": [
      "Gestion des risques d'entreprise",
      "Entrepreneuriat"
    ],
    "Stage et mémoire": [
      "Méthodologie de rédaction",
      "Stage et mémoire"
    ]
  }
},



         CACG: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Outils de gestion",
      "Gestion Prévisionnelle",
      "Audit et Comptabilité des sociétés",
      "Comptabilité des sociétés",
      "Outils de gestion financière et comptable",
      "Méthodologie de l'audit",
      "Gestion de la trésorerie"
    ],
    "Semestre 6": [
      "Finance",
      "Méthodologie de rédaction",
      "Présentation de travaux"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 : Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière",
      "Finance d'entreprise",
      "Finance de marché"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Outils de gestion": [
      "Contrôle de gestion"
    ],
    "Gestion Prévisionnelle": [
      "Gestion Prévisionnelle"
    ],
    "Audit et Comptabilité des sociétés": [
      "Audit et Comptabilité des sociétés"
    ],
    "Comptabilité des sociétés": [
      "Comptabilité des sociétés"
    ],
    "Outils de gestion financière et comptable": [
      "Analyse financière approfondie",
      "Gestion financière internationale"
    ],
    "Méthodologie de l'audit": [
      "Méthodologie de l'audit financier"
    ],
    "Gestion de la trésorerie": [
      "Gestion de la trésorerie"
    ],
    "Méthodologie de rédaction": [
      "Méthodologie de rédaction"
    ],
    "Présentation de travaux": [
      "Stage et mémoire"
    ]
  }
},


 MKTS: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique 1",
      "Comptabilité",
      "Techniques quantitative 1",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Théorie Macroéconomique 2",
      "Théorie Microéconomique 2",
      "Comptabilité",
      "Techniques quantitative 2",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Technique quantitative",
      "Technique quantitative de gestion",
      "Finance",
      "Finance Publique",
      "Informatique",
      "Discipline d'appui/Culture générale",
      "Logiciel de gestion"
    ],
    "Semestre 4": [
      "Comptabilité",
      "Comptabilité et décision",
      "Marketing",
      "Management",
      "Ethique et comportement en organisation",
      "Fiscalité"
    ],
    "Semestre 5": [
      "Marketing approfondi I",
      "Marketing stratégique",
      "Communication marketing",
      "Opération avec le reste du monde",
      "Culture et spécificités marketing",
      "Mesure des attitudes des consommateurs",
      "Développement durable"
    ],
    "Semestre 6": [
      "Application marketing",
      "Méthodologie de rédaction",
      "Présentation de travaux"
    ]
  },
  "ecues": {
    "Théorie Macroéconomique 1": [
      "Macroéconomie 1 : Introduction à la Macroéconomie (circuits économiques, agrégats)",
      "Macroéconomie 2 : Fonction de demande (Consommation, Investissements, et liquidité)"
    ],
    "Théorie Microéconomique 1": [
      "Microéconomie 1 : Théorie de comportements du consommateur",
      "Microéconomie 2 : Théorie de comportements du producteur"
    ],
    "Comptabilité": [
      "Histoire de la comptabilité",
      "Environnement de la comptabilité"
    ],
    "Techniques quantitative 1": [
      "Statistiques descriptives 1",
      "Mathématiques 1 : Analyse"
    ],
    "Introduction à l'Economie et à la Gestion": [
      "Introduction à la science économique",
      "Introduction à la science de gestion"
    ],
    "Introduction au Droit": [
      "Droit Public",
      "Droit Privé"
    ],
    "Théorie Macroéconomique 2": [
      "Macroéconomie 3 :  Equilibres en économie fermée",
      "Macroéconomie 4 : Le modèle IS-LM (IS-LM et politiques économiques)"
    ],
    "Théorie Microéconomique 2": [
      "Microéconomie 3 : Analyse des marchés",
      "Méthodes et Enjeux de l'Economie"
    ],
    "Techniques quantitative 2": [
      "Statistiques descriptives 2",
      "Mathématiques 2 : Algèbre Matricielle"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit des Affaires"
    ],
    "Technique quantitative": [
      "Statistiques de gestion"
    ],
    "Technique quantitative de gestion": [
      "Recherche opérationnelle"
    ],
    "Finance": [
      "Analyse financière"
    ],
    "Finance Publique": [
      "Finances Publiques",
      "Droit des affaires"
    ],
    "Informatique": [
      "Informatique de gestion"
    ],
    "Discipline d'appui/Culture générale": [
      "Anglais II (Anglais commercial)"
    ],
    "Logiciel de gestion": [
      "Logiciel de gestion"
    ],
    "Comptabilité et décision": [
      "Comptabilité analytique"
    ],
    "Marketing": [
      "Marketing (Marketing-management et négociation commerciale)"
    ],
    "Management": [
      "Technique actuarielle",
      "Management Général"
    ],
    "Ethique et comportement en organisation": [
      "Ethique et comportement en organisation"
    ],
    "Fiscalité": [
      "Fiscalité d'entreprise"
    ],
    "Marketing approfondi I": [
      "Distribution et force de vente"
    ],
    "Marketing stratégique": [
      "Marketing stratégique"
    ],
    "Communication marketing": [
      "Communication marketing"
    ],
    "Opération avec le reste du monde": [
      "Pratiques marketing",
      "Marketing électronique"
    ],
    "Culture et spécificités marketing": [
      "Marketing des services et marketing international"
    ],
    "Mesure des attitudes des consommateurs": [
      "Mesure des attitudes des consommateurs"
    ],
    "Développement durable": [
      "Développement durable"
    ],
    "Application marketing": [
      "Etude de marché et élaboration du plan marketing et gestion de la relation client",
      "Commerce international et négociation"
    ],
    "Méthodologie de rédaction": [
      "Méthodologie de rédaction"
    ],
    "Présentation de travaux": [
      "Stage et mémoire"
    ]
  }
},

        EMF: {
    "semesters": [
      "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
    ],
    "ues": {
        "Semestre 1": [
            "Mathématiques 1",
            "Fondements Macroéconomiques",
            "Equilibres Macroéconomiques",
            "Statistiques descriptives",
            "Introduction à l'Economie et à la Gestion",
            "Introduction au Droit"
        ],
        "Semestre 2": [
            "Fondements Microéconomiques",
            "Equilibres Microéconomiques",
            "Introduction à la comptabilité",
            "Comptabilité",
            "Environnement Economique"
        ],
        "Semestre 3": [
            "Théorie Macroéconomique 1",
            "Théorie Microéconomique",
            "Mathématiques 2",
            "Théories Economiques 1",
            "Théories Economiques 2"
        ],
        "Semestre 4": [
            "Théorie Macroéconomique 2",
            "Nouvelle Microéconomie",
            "Outils d'aide à la décision 1",
            "Techniques Econométriques 1",
            "Techniques Econométriques 2",
            "Règlementation et Management des IMF"
        ],
        "Semestre 5": [
            "Conception de produits et outils de gestion opérationnelle",
            "Technique d'Analyse des Dossiers de prêt",
            "Contrôle des IMF",
            "Performance des IMF",
            "Gestion des IMF",
            "Microfinance et Inclusion Financière",
            "Comptabilité en MF"
        ],
        "Semestre 6": [
            "Méthodologie",
            "Stage",
            "Rédaction et soutenance"
        ]
    },
    "ecues": {
        "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
        "Fondements Macroéconomiques": ["Macroéconomie"],
        "Equilibres Macroéconomiques": ["Equilibre Macroéconomique"],
        "Statistiques descriptives": ["Statistiques descriptives"],
        "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
        "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
        "Fondements Microéconomiques": ["Fondements Microéconomiques"],
        "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
        "Introduction à la comptabilité": ["Introduction à la comptabilité"],
        "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
        "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
        "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
        "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
        "Mathématiques 2": ["Mathématiques 2"],
        "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
        "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
        "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
        "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
        "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
        "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
        "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"],
        "Règlementation et Management des IMF": ["Règlementation des IMF", "Gouvernance des IMF"],
        "Conception de produits et outils de gestion opérationnelle": ["Conception de produits innovants de microcrédit", "Logiciels de microfinance"],
        "Technique d'Analyse des Dossiers de prêt": ["Analyse de la qualité du projet et du profil de l'emprunteur", "Gestion des Risques des IMF"],
        "Contrôle des IMF": ["Audit et contrôle (interne ; externe et viabilité des IMF : 3 aspects)", "Contrôle de gestion dans les IMF"],
        "Performance des IMF": ["Analyse des Performance des IMF (Suivi et Evaluation des agences)", "Education financière"],
        "Gestion des IMF": ["Gestion des Opérations courantes de microfinance", "Evaluation d’impact des IMF"],
        "Microfinance et Inclusion Financière": ["Finance Digitale", "Financement des Chaînes de Valeurs Agricoles par les IMF"],
        "Comptabilité en MF": ["Comptabilité des opérations en MF", "Technique d’élaboration des états financiers"],
        "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
        "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
    }
},



        APD: {
    semesters: [   
      "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"],
    ues: {
        "Semestre 1": ["Analyse mathématique", "Algorithme et programmation", "Électronique analogique", "Électricité et magnétisme", "Sciences de l'ingénieur", "Introduction aux sciences de l'informatique"],
        "Semestre 2": ["Analyse numérique", "Algorithmique et structures de données", "Électronique numérique", "Thermodynamique", "Automatique et systèmes", "Communication"],
        "Semestre 3": ["Probabilités et statistiques", "Réseaux informatiques", "Architecture des ordinateurs", "Électronique de puissance", "Systèmes embarqués", "Outils de développement logiciel"],
        "Semestre 4": ["Systèmes d'exploitation", "Base de données", "Électrotechnique", "Systèmes temps réel", "Génie logiciel", "Projet"],
        "Semestre 5": ["Intelligence artificielle", "Sécurité informatique", "Réseaux avancés", "Systèmes distribués", "Robotique", "Stage"],
        "Semestre 6": ["Projet de fin d'études", "Management de projet", "Ingénierie financière", "Entrepreneuriat", "Éthique professionnelle", "Anglais technique"]
    },
    ecues: {
        "Analyse mathématique": ["Analyse réelle", "Analyse complexe"],
        "Algorithme et programmation": ["Algorithmique", "Programmation orientée objet"],
        "Électronique analogique": ["Circuits analogiques", "Électronique de puissance"],
        "Électricité et magnétisme": ["Électrocinétique", "Magnétostatique"],
        "Sciences de l'ingénieur": ["Mécanique des fluides", "Résistance des matériaux"],
        "Introduction aux sciences de l'informatique": ["Architecture des ordinateurs", "Systèmes d'exploitation"],
        "Analyse numérique": ["Méthodes numériques", "Calcul scientifique"],
        "Algorithmique et structures de données": ["Structures de données avancées", "Algorithmes avancés"],
        "Électronique numérique": ["Circuits logiques", "Microcontrôleurs"],
        "Thermodynamique": ["Thermodynamique appliquée", "Transferts thermiques"],
        "Automatique et systèmes": ["Automatique linéaire", "Systèmes asservis"],
        "Communication": ["Réseaux de communication", "Télécommunications"],
        "Probabilités et statistiques": ["Probabilités avancées", "Statistiques multidimensionnelles"],
        "Réseaux informatiques": ["Architecture des réseaux", "Protocoles de communication"],
        "Architecture des ordinateurs": ["Microprocesseurs", "Architecture avancée"],
        "Électronique de puissance": ["Commande des convertisseurs", "Applications industrielles"],
        "Systèmes embarqués": ["Microcontrôleurs embarqués", "Systèmes temps réel"],
        "Outils de développement logiciel": ["Gestion de versions", "Méthodes agiles"],
        "Systèmes d'exploitation": ["Unix/Linux", "Windows"],
        "Base de données": ["Modélisation des données", "SQL avancé"],
        "Électrotechnique": ["Machines électriques", "Électrotechnique industrielle"],
        "Systèmes temps réel": ["Analyse temps réel", "Contrôle temps réel"],
        "Génie logiciel": ["Cycle de vie logiciel", "Tests et validation"],
        "Intelligence artificielle": ["Apprentissage automatique", "Traitement du langage naturel"],
        "Sécurité informatique": ["Cryptographie", "Sécurité des systèmes"],
        "Réseaux avancés": ["Réseaux sans fil", "Protocoles avancés"],
        "Systèmes distribués": ["Middleware", "Architectures distribuées"],
        "Robotique": ["Robotique mobile", "Manipulateurs et bras robotiques"],
        "Projet": ["Analyse de besoins", "Conception et réalisation"],
        "Projet de fin d'études": ["Rapport de projet", "Soutenance de projet"],
        "Management de projet": ["Planification de projet", "Gestion des risques"],
        "Ingénierie financière": ["Analyse financière", "Évaluation d'entreprise"],
        "Entrepreneuriat": ["Création d'entreprise", "Business plan"],
        "Éthique professionnelle": ["Déontologie", "Responsabilité professionnelle"],
        "Anglais technique": ["Communication professionnelle", "Vocabulaire technique"]
    }
},

TC: {
    semesters: ["Semestre 1", "Semestre 2"],
    ues: {
      "Semestre 1": [
            "Mathématiques 1",
            "Fondements Macroéconomiques",
            "Equilibres Macroéconomiques",
            "Statistiques descriptives",
            "Introduction à l'Economie et à la Gestion",
            "Introduction au Droit"
        ],
        "Semestre 2": [
            "Fondements Microéconomiques",
            "Equilibres Microéconomiques",
            "Introduction à la comptabilité",
            "Comptabilité",
            "Environnement Economique"
        ]
    },
    ecues: {
      "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
        "Fondements Macroéconomiques": ["Macroéconomie"],
        "Equilibres Macroéconomiques": ["Microéconomique"],
        "Statistiques descriptives": ["Statistiques descriptives"],
        "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
        "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
        "Fondements Microéconomiques": ["Fondements Microéconomiques"],
        "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
        "Introduction à la comptabilité": ["Introduction à la comptabilité"],
        "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
        "Environnement Economique": ["Anglais Economique", "Droit des Affaires"]
    }
},

EGEA: {
    semesters: [   
      "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"],
  "ues": {
    "Semestre 1": {
      "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
      "Fondements Macroéconomiques": ["Fondements Macroéconomiques"],
      "Equilibres Macroéconomiques": ["Equilibres Macroéconomiques"],
      "Statistiques descriptives": ["Statistiques descriptives"],
      "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
      "Introduction au Droit": ["Droit Public", "Droit Public et Privé"]
    },
    "Semestre 2": {
      "Fondements Microéconomiques": ["Fondements Microéconomiques"],
      "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
      "Introduction à la comptabilité": ["Introduction à la comptabilité"],
      "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
      "Environnement Economique": ["Anglais Economique", "Droit des Affaires"]
    },
    "Semestre 3": {
      "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
      "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
      "Mathématiques 2": ["Mathématiques 2"],
      "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
      "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"]
    },
    "Semestre 4": {
      "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
      "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
      "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
      "Outils d'aide à la décision 2": ["Statistiques Mathématiques"],
      "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
      "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"]
    },
    "Semestre 5": {
      "Développement agricole": ["Economie agricole", "Filières et chaines de valeurs agricoles"],
      "Gestion agricole": ["Comptabilité agricole", "Gestion des exploitations agricoles"],
      "Environnement d’agro-business": ["Investissements et financements en agriculture", "Risques en gestion des exploitations agricoles"],
      "Analyse des marchés agricoles": ["Commercialisation des produits agricoles", "Marketing agricole"],
      "Agro-business": ["Entrepreneurial agricole", "Montage des projets agricoles"]
    },
    "Semestre 6": {
      "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
      "Stage": ["Stage"],
      "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
    }
  },
  "ecues": {
    "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
    "Fondements Macroéconomiques": ["Fondements Macroéconomiques"],
    "Equilibres Macroéconomiques": ["Equilibres Macroéconomiques"],
    "Statistiques descriptives": ["Statistiques descriptives"],
    "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
    "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
    "Fondements Microéconomiques": ["Fondements Microéconomiques"],
    "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
    "Introduction à la comptabilité": ["Introduction à la comptabilité"],
    "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
    "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
    "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
    "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
    "Mathématiques 2": ["Mathématiques 2"],
    "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
    "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
    "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
    "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
    "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
    "Outils d'aide à la décision 2": ["Statistiques Mathématiques"],
    "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
    "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"],
    "Développement agricole": ["Economie agricole", "Filières et chaines de valeurs agricoles"],
    "Gestion agricole": ["Comptabilité agricole", "Gestion des exploitations agricoles"],
    "Environnement d’agro-business": ["Investissements et financements en agriculture", "Risques en gestion des exploitations agricoles"],
    "Analyse des marchés agricoles": ["Commercialisation des produits agricoles", "Marketing agricole"],
    "Agro-business": ["Entrepreneurial agricole", "Montage des projets agricoles"],
    "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
    "Stage": ["Stage"],
    "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
  }
},


    LESA: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Fondements Microéconomiques",
      "Statistiques descriptives",
      "Introduction aux Sciences Economiques",
      "Environnement Economique"
    ],
    "Semestre 2": [
      "Equilibres Macroéconomiques",
      "Equilibres Microéconomiques",
      "Logiciels Informatiques",
      "Environnement Comptable et Financier",
      "Théories Economiques 1"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Techniques de collecte de données",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Outils d'aide à la décision 3",
      "Logiciel et Algorithme",
      "Outils d'analyse des données",
      "Pratiques de l'Econométrie",
      "Techniques Econométriques 3"
    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": [
      "Analyse",
      "Algèbre Matricielle"
    ],
    "Fondements Macroéconomiques": [
      "Macroéconomie"
    ],
    "Fondements Microéconomiques": [
      "Microéconomique"
    ],
    "Statistiques descriptives": [
      "Statistiques descriptives"
    ],
    "Introduction aux Sciences Economiques": [
      "Introduction à la science économique",
      "Introduction à la politique économique"
    ],
    "Environnement Economique": [
      "Anglais Economique",
      "Droit Public et Privé"
    ],
    "Equilibres Macroéconomiques": [
      "Equilibres Macroéconomiques"
    ],
    "Equilibres Microéconomiques": [
      "Equilibres Microéconomiques"
    ],
    "Logiciels Informatiques": [
      "Informatique",
      "Numération et Algorithme"
    ],
    "Environnement Comptable et Financier": [
      "Comptabilité générale",
      "Mathématiques financières"
    ],
    "Théories Economiques 1": [
      "Histoire de la pensée économique",
      "Economie des Finances Publiques"
    ],
    "Théorie Macroéconomique 1": [
      "Macroéconomie de court terme",
      "Economie monétaire et bancaire"
    ],
    "Théorie Microéconomique": [
      "Equilibre général",
      "Les marchés imparfaits"
    ],
    "Mathématiques 2": [
      "Mathématiques 2"
    ],
    "Techniques de collecte de données": [
      "Introduction à la théorie des sondages",
      "Logiciel d'enquête (Survey CTO / Kobocollect)"
    ],
    "Théories Economiques 2": [
      "Economie du Développement",
      "Economie Internationale"
    ],
    "Théorie Macroéconomique 2": [
      "Théorie de la Croissance",
      "Comptabilité Nationale"
    ],
    "Nouvelle Microéconomie": [
      "Théorie des jeux",
      "Economie Industrielle"
    ],
    "Outils d'aide à la décision 1": [
      "Statistiques et Probabilité",
      "Recherche Opérationnelle"
    ],
    "Outils d'aide à la décision 2": [
      "Statistiques Mathématiques",
      "Optimisation statique (A revoir)"
    ],
    "Techniques Econométriques 1": [
      "Modèles linéaires et Violation d'hypothèses",
      "Introduction à l’Econométrie des Séries Temporelles"
    ],
    "Techniques Econométriques 2": [
      "Optimisation statique (A revoir)",
      "Introduction à l'Econométrie des Variables Qualitatives (Logit, Probit)"
    ],
    "Outils d'aide à la décision 3": [
      "Econométrie des données de Panel",
      "Techniques de décision dans l'incertain"
    ],
    "Logiciel et Algorithme": [
      "Logiciel SPSS et CSPro (techniques d'enquête et de sondage)",
      "Algorithme & Programmation"
    ],
    "Outils d'analyse des données": [
      "Analyse des données",
      "Extension des modèles linéaires (endogénéité, hétérogénéité, autocorrélation)"
    ],
    "Pratiques de l'Econométrie": [
      "Pratique de l'économétrie sur STATA",
      "Pratique de l'économétrie sur EVIEWS"
    ],
    "Techniques Econométriques 3": [
      "Econométrie des variables qualitatives",
      "Econométrie des séries temporelles (stationnarité, cointégration & MCE)"
    ],
    "Méthodologie": [
      "Pratiques de l’économétrie",
      "Méthodologie de recherche"
    ],
    "Stage": [
      "Stage"
    ],
    "Rédaction et soutenance": [
      "Rédaction de mémoire",
      "Soutenance de mémoire"
    ]
  }
},


        EFCL: {
    "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
    ],
    "ues": {
        "Semestre 1": [
            "Mathématiques 1",
            "Fondements Macroéconomiques",
            "Equilibres Macroéconomiques",
            "Statistiques descriptives",
            "Introduction à l'Economie et à la Gestion",
            "Introduction au Droit"
        ],
        "Semestre 2": [
            "Fondements Microéconomiques",
            "Equilibres Microéconomiques",
            "Introduction à la comptabilité",
            "Comptabilité",
            "Environnement Economique"
        ],
        "Semestre 3": [
            "Théorie Macroéconomique 1",
            "Théorie Microéconomique",
            "Mathématiques 2",
            "Théories Economiques 1",
            "Théories Economiques 2"
        ],
        "Semestre 4": [
            "Théorie Macroéconomique 2",
            "Nouvelle Microéconomie",
            "Outils d'aide à la décision 1",
            "Techniques Econométriques 1",
            "Techniques Econométriques 2",
            "Procédures Administratives et Planification"
        ],
        "Semestre 5": [
            "Economie Publique",
            "Systèmes Productifs et Développement Economique Local",
            "Environnement des Collectivités Locales",
            "Finances Locales",
            "Comptabilité Publique et Fiscalité locale",
            "Planification et Gestion des Services Publics"
        ],
        "Semestre 6": [
            "Partenariat et Marchés Publics",
            "Méthodologie Appliquée",
            "Méthodologie de Recherche et Mémoire"
        ]
    },
    "ecues": {
        "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
        "Fondements Macroéconomiques": ["Macroéconomie"],
        "Equilibres Macroéconomiques": ["Microéconomique"],
        "Statistiques descriptives": ["Statistiques descriptives"],
        "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
        "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
        "Fondements Microéconomiques": ["Fondements Microéconomiques"],
        "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
        "Introduction à la comptabilité": ["Introduction à la comptabilité"],
        "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
        "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
        "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
        "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
        "Mathématiques 2": ["Mathématiques 2"],
        "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
        "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
        "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
        "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
        "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
        "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
        "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives"],
        "Procédures Administratives et Planification": ["Droit et Procédures administratives des Collectivités Locales", "Planification stratégique et suivi-évaluation"],
        "Economie Publique": ["Principes de l'Economie publique", "Economie Publique Locale"],
        "Systèmes Productifs et Développement Economique Local": ["Introduction à l'Analyse des Systèmes Productifs Locaux", "Stratégies et outils de Développement Economique Local"],
        "Environnement des Collectivités Locales": ["Analyse Economique Financière de Projets", "Montage de projets"],
        "Finances Locales": ["Finances publiques Locales (et GAR)", "Gestion Financière des Collectivités Locales"],
        "Comptabilité Publique et Fiscalité locale": ["Comptabilité publique", "Mobilisation des ressources (fiscales et non fiscales)"],
        "Planification et Gestion des Services Publics": ["Planification du Développement Local", "Maîtrise d'ouvrage et Gestion des Services Publics"],
        "Partenariat et Marchés Publics": ["Partenariat et Coopération Décentralisée", "Marchés Publics"],
        "Méthodologie Appliquée": ["Pratique de l'économétrie", "Logiciel de Gestion Budgétaire des Communes (GBCO)"],
        "Méthodologie de Recherche et Mémoire": ["Méthodologie de Recherche", "Stage et Mémoire de fin d'étude"]
    }
},
        EAPD: {
  "semesters": [
    "°PREMIERE ANNEE°",
    "Semestre 1",
    "Semestre 2",
    "°DEUXIEME ANNEE°",

    "Semestre 3",
    "Semestre 4",

    "°TROISIEME ANNEE°",

    "Semestre 5",
    "Semestre 6"
  ],
  "ues": {
    "Semestre 1": [
      "Mathématiques 1",
      "Fondements Macroéconomiques",
      "Equilibres Macroéconomiques",
      "Statistiques descriptives",
      "Introduction à l'Economie et à la Gestion",
      "Introduction au Droit"
    ],
    "Semestre 2": [
      "Fondements Microéconomiques",
      "Equilibres Microéconomiques",
      "Introduction à la comptabilité",
      "Comptabilité",
      "Environnement Economique"
    ],
    "Semestre 3": [
      "Théorie Macroéconomique 1",
      "Théorie Microéconomique",
      "Mathématiques 2",
      "Théories Economiques 1",
      "Théories Economiques 2"
    ],
    "Semestre 4": [
      "Théorie Macroéconomique 2",
      "Nouvelle Microéconomie",
      "Outils d'aide à la décision 1",
      "Outils d'aide à la décision 2",
      "Techniques Econométriques 1",
      "Techniques Econométriques 2"
    ],
    "Semestre 5": [
      "Politiques Economiques",
      "Politiques de Développement durable",
      "Stratégies de Développement",
      "Politiques sectorielles",
      "Gouvernance économique"
    ],
    "Semestre 6": [
      "Méthodologie",
      "Stage",
      "Rédaction et soutenance"
    ]
  },
  "ecues": {
    "Mathématiques 1": ["Analyse", "Algèbre Matricielle"],
    "Fondements Macroéconomiques": ["Fondements Macroéconomiques"],
    "Equilibres Macroéconomiques": ["Equilibres Macroéconomiques"],
    "Statistiques descriptives": ["Statistiques descriptives"],
    "Introduction à l'Economie et à la Gestion": ["Introduction à la science économique", "Introduction à la science de gestion"],
    "Introduction au Droit": ["Droit Public", "Droit Public et Privé"],
    "Fondements Microéconomiques": ["Fondements Microéconomiques"],
    "Equilibres Microéconomiques": ["Equilibres Microéconomiques"],
    "Introduction à la comptabilité": ["Introduction à la comptabilité"],
    "Comptabilité": ["Comptabilité générale", "Fondements du management général"],
    "Environnement Economique": ["Anglais Economique", "Droit des Affaires"],
    "Théorie Macroéconomique 1": ["Macroéconomie de court terme", "Economie monétaire et bancaire"],
    "Théorie Microéconomique": ["Equilibre général", "Les marchés imparfaits"],
    "Mathématiques 2": ["Mathématiques 2"],
    "Théories Economiques 1": ["Histoire de la pensée économique", "Economie des Finances Publiques"],
    "Théories Economiques 2": ["Economie du Développement", "Economie Internationale"],
    "Théorie Macroéconomique 2": ["Théorie de la Croissance", "Comptabilité Nationale"],
    "Nouvelle Microéconomie": ["Théorie des jeux", "Economie Industrielle"],
    "Outils d'aide à la décision 1": ["Statistiques et Probabilité", "Recherche Opérationnelle"],
    "Outils d'aide à la décision 2": ["Statistiques Mathématiques"],
    "Techniques Econométriques 1": ["Modèles linéaires et Violation d'hypothèses", "Introduction à l'économétrie des Séries Temporelles"],
    "Techniques Econométriques 2": ["Optimisation statique", "Introduction à l'économétrie des Variables Qualitatives (Logit, Probit)"],
    "Politiques Economiques": ["Analyses des Politiques Economiques (aspect micro & macro)", "Analyse d'impact des politiques publiques"],
    "Politiques de Développement durable": ["Politiques de Développement durable"],
    "Stratégies de Développement": ["Stratégies et politique de développement", "Analyse de la pauvreté"],
    "Politiques sectorielles": ["Agro-industries", "Industries touristiques"],
    "Gouvernance économique": ["Gouvernance publique", "Economie du secteur informel"],
    "Méthodologie": ["Pratiques de l’économétrie", "Méthodologie de recherche"],
    "Stage": ["Stage"],
    "Rédaction et soutenance": ["Rédaction de mémoire", "Soutenance de mémoire"]
  }
},

    };

    const programsDropdown = document.getElementById('programs');
    const semestersDropdown = document.getElementById('semesters');
    const uesDropdown = document.getElementById('ues');
    const ecuesDropdown = document.getElementById('ecues');
    const courseDetailsDiv = document.getElementById('courseDetails');

    // Populate Semesters Dropdown based on Program Selection
    programsDropdown.addEventListener('change', () => {
        const selectedProgram = programsDropdown.value;
        const semesters = programs[selectedProgram].semesters;
        populateDropdown(semestersDropdown, semesters);
        semestersDropdown.disabled = false;
        uesDropdown.disabled = true;
        ecuesDropdown.disabled = true;
        courseDetailsDiv.style.display = 'none';
    });

    // Populate UE Dropdown based on Semester Selection
    semestersDropdown.addEventListener('change', () => {
        const selectedProgram = programsDropdown.value;
        const selectedSemester = semestersDropdown.value;
        const ues = programs[selectedProgram].ues[selectedSemester];
        populateDropdown(uesDropdown, ues);
        uesDropdown.disabled = false;
        ecuesDropdown.disabled = true;
        courseDetailsDiv.style.display = 'none';
    });

    // Populate ECUE Dropdown based on UE Selection
    uesDropdown.addEventListener('change', () => {
        const selectedProgram = programsDropdown.value;
        const selectedUE = uesDropdown.value;
        const ecues = programs[selectedProgram].ecues[selectedUE];
        populateDropdown(ecuesDropdown, ecues);
        ecuesDropdown.disabled = false;
        courseDetailsDiv.style.display = 'none';
    });

    // Helper function to populate dropdowns
    function populateDropdown(dropdown, optionsArray) {
        dropdown.innerHTML = '';
        const defaultOption = document.createElement('option');
        defaultOption.text = 'Select';
        dropdown.add(defaultOption);
        optionsArray.forEach(option => {
            const newOption = document.createElement('option');
            newOption.text = option;
            dropdown.add(newOption);
        });
    }

    // Helper function to display course details
    function displayCourseDetails(ecues) {
        courseDetailsDiv.innerHTML = '';
        const heading = document.createElement('h4');
        heading.textContent = 'Related ECUEs:';
        courseDetailsDiv.appendChild(heading);
        const ecueList = document.createElement('ul');
        ecues.forEach(ecue => {
            const listItem = document.createElement('li');
            listItem.textContent = ecue;
            ecueList.appendChild(listItem);
        });
        courseDetailsDiv.appendChild(ecueList);
        courseDetailsDiv.style.display = 'block';
    }
</script>
<!-- Pop up script-->
<script>
  window.onload = function () {
    document.getElementById("popup").style.display = "block";
  };
</script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
 
 
>>>>>>> 0f197e5e6821d6a3ae420e25197a08a25e64ae1c
