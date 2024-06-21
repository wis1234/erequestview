<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services et prestations</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.jpeg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.jpeg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">

    <!-- pop -up links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
{{-- finger bootstrap library link --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ojuju:wght@200..800&family=Open+Sans:wght@500&family=Rock+3D&family=Rubik+Gemstones&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Madimi+One&family=Ojuju:wght@200..800&family=Open+Sans:wght@500&family=Rock+3D&family=Rubik+Gemstones&display=swap" rel="stylesheet">

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

    @media (max-width: 580px) {
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
    width: auto;
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




    /* the pop-up styling for ins and mem */
    .popup-content {
  display: none;
}

.popup-content .text-wrapper {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Shadow for the text wrapper */
  padding: 10px; /* Padding for the text wrapper */
}

.popup-content p {
  font-size: 16px;
  line-height: 1.5;
  text-align: center;
  margin: 20px 0;
}
.popup-button {
      background: #007bff; /* Blue color for the button */
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 50%;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .popup-button:hover {
      background: #0056b3; /* Darker blue color on hover */
    }

    /* CSS for blinking animation */
@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.icon-blink {
  animation: blink 1s infinite; 
}

.circle-icon {
  width: 80px;
  height: 80px;
  border-radius: 1px;
  background-color: #05138fde;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  margin-bottom: 2px;
}


/*user profile parameter*/

.settings-icon {
        position: relative;
        top: 1px;
        left: 80px;
        margin-right: 10px;
        cursor: pointer;
    }
    .options-menu {
        position: relative;
        top: 20px;
        right: 10px;
        display: none;
        background-color: white;
        /* border: 1px solid #ccc; */
        padding: 3px;
        z-index: 100;
    }
    .options-menu ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .options-menu li {
        margin-bottom: 5px;
    }


    /*User area*/
    .user-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 10px;
    }
      .user-title {
        /* flex: 0 0 calc(50% - 20px); */
      background-color: #05138fde;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 300px;
    }

    .small-title{
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 270px;
      /* margin-top: 5px */
    }
    .user{
      margin-top: 5px;
      width: 100%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      height: 200px;


    }

    /* disable link after claim is closed */
    .disabled-link{
      color:black;
      font-weight:bold
    }
    /* status indicator */
#status-indicator{
  width: 20px;
  height:20px;
  border-radius :50%;
  display: inline-block;
  background-color:gray
}
#ped-status-indicator{
  width: 20px;
  height:20px;
  border-radius :50%;
  display: inline-block;
  background-color:gray
}
.ped{
  font-size:20px
}

#retake-status-indicator{
  width: 20px;
  height:20px;
  border-radius :50%;
  display: inline-block;
  background-color:gray
}
.retake{
  font-size:20px
}

#timer{
  font-size: 2em;
}

.expired{
  color: #b30d0dde;
  font-weight:bold;
  animation: blink 1s infinite;

}
@keyframes blink{
  0%, 50%{
    opacitiy:1;
  }
  25%, 75%{
    opacity:0;
  }
}

/* ped timer style */

#ped_timer{
  font-size: 2em;
}

.ped_expired{
  color: #b30d0dde;
  font-weight:bold;
  animation: blink 1s infinite;


}
@keyframes blink{
  0%, 50%{
    opacitiy:1;
  }
  25%, 75%{
    opacity:0;
  }
}

#retake_timer{
  font-size: 2em;
}
.retake_expired{
  color: #b30d0dde;
  font-weight:bold;
  animation: blink 1s infinite;

}
@keyframes blink{
  0%, 50%{
    opacitiy:1;
  }
  25%, 75%{
    opacity:0;
  }
}

/*Modal for profile image styling */
.modal {
  display: none;
  position: absolute;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.profile {
  font-size:20px;
  width: 150px;
  height:40px;
  background-color: #05138fde;
  color: white;
  cursor: pointer;
  border-radius:20px


        }
        .profile:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        @media (max-width: 576px) {
            .profile {
                box-sizing: border-box;
                font-size:20px;
  width: 150px;
  height:40px;
  background-color: #05138fde;
  color: white;
  cursor: pointer;
  border-radius:20px
                
            }
        }
.profile-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
.logout_btn{
  
  width: 250px;
  height:40px;
  background-color:transparent;
  color:#b30d0dde;
  font-weight:bold;
  font-size:20px;
  border:none;
  border-radius:20px

}
.update_btn{
  font-weight:bold;
  font-size:20px;
   width: 250px;
   border-radius:20px
}
  </style>

</head>

<body data-authenticated="{{ Auth::check() }}">
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

</header>


  <main id="main">
    <!-- Breadcrumbs -->
        <section>
          <div class="user-container">
            <div class="user-title">
              <div class="user"  > 
         
              <div style="font-size:40px; font-weight:bold; align-item:center">
                <h4 class="title" style=" font-weight:bolder; font-size:35px; color: white;   font-family: Rubik Gemstones, system-ui;
                font-weight: 400px;
                font-style: normal;">BIENVENUE</h4>
              </div>
              <div id="popup-text" style="font-size: 20px; font-weight:bold; text-transform:uppercase"></div>  
                <div class="small-title">
                  {{-- <div class="service-title"> --}}
                    <i class="fas fa-cog settings-icon" onclick="toggleOptionsMenu(event)"></i>
                    <div class="user">

                              <!-- Display user's profile picture -->
@if(auth()->user()->image)
    <img src="{{ Storage::url(auth()->user()->image) }}" alt="Profile Image" class="profile-image">
@else
<div class="circle-icon" style="border-radius: 50%">
                            <i class="fas fa-user fa-4x" style="color: #fff;"></i>
                        </div>
@endif

<h3 class="user_name">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h3>
<div class="options-menu" id="optionsMenu">

                            <ul>
                                <li><a href="#" id ="updateProfileBtn" class = "update_btn"><i class="fas fa-camera-retro"></i>&nbspPhoto de profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="logout_btn"><i class="fas fa-sign-out-alt"></i>&nbspSe déconnecter</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                {{-- </div> --}}
                </div>
        
            </div>
             
            </div>
            
        </section>

    <!-- End Breadcrumbs -->

<!-- Button to open the modal -->

<!-- Modal -->
<div id="updateProfileModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Modification de Photo</h2>
    <form id="updateProfileForm" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="profileImage">Choisir une photo de profile</label>
        <input type="file" id="profileImage" name="image" class="form-control" required>
      </div>
      <button type="submit" class="profile">Modifier</button>
    </form>
  </div>
</div>









    {{-- <div class="service-title">
      <div class="user" > 
 
      <h2 style="color: blue; font-weight:bold">SERVICES ET PRESTATIONS</h2>
      </div>
      </div> --}}
  <div class="service-container">

    <div class="service-title">
      <i class="fas fa-edit fa-3x"><span id="status-indicator"></span></i>
  
      <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
      font-weight: 400;
      font-style: normal;">Réclamation</h4>
       <div id="timer">00:00:00</div>

      <a href="#" class="toggle-items" style="  font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
  
      <!-- Additional items initially hidden -->
      <div class="additional-items" style="display: none;">
        <ol>
          <li><a href="{{ route('complaint_form')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;" id="claimButton" disabled >Réclamation</a></li>
          {{-- <li><a href="{{ route('complaint_status') }}" style="cursor: pointer; font-weight: ; font-size: 20px; color:  black;">Vérifier le statut</a></li> --}}

          <li><a href="{{ route('complaint_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
        </ol>
      </div>
    </div>

    {{-- academic enrollment service title --}}

<div class="service-title">
  <i class="fas fa-file-signature fa-3x"></i>
  <span id="ped-status-indicator"></span></i>

  <h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
  font-weight: 400;
  font-style: normal;">Inscription pédagogique</h4>
        <div id="ped_timer">00:00:00</div>

  <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement">Options</a> <i class="fas fa-caret-down" ></i><br><br>

  <!-- Additional items initially hidden -->
  <div class="additional-items ped" style="display: none;">
    <ol>

      <!-- <div class="popup-content" id="popup">
        <div class="text-wrapper">
          <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
          <p style="font-size: 20px; color: black;" id="display"></p>
          <button class="popup-button" onclick="closePopup()">OK</button>
        </div>
      </div> -->
      
      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('ped_registration_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Inscription</span>
            <!-- <i class="fas fa-caret-down"></i> -->
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li><a href="{{ route('ped_registration_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
    </ol>
  </div>
</div>



{{-- Retake services title --}}

<div class="service-title">
  <i class="fas fa-recycle"></i>
  <span id="retake-status-indicator"></span></i>

<h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
font-weight: 400;
font-style: normal;">Reprise</h4>
      <div id="retake_timer">00:00:00</div>
  <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement_memo">Options</a> <i class="fas fa-caret-down" ></i><br><br>

  <!-- Additional items initially hidden -->
  <div class="additional-items retake" style="display: none;">
    <ol>
      <!-- <li><a href="{{ route('retake_form')}}" style="cursor: pointer; font-weight: ;font-size: 20px; color:  black;">Paiement des frais</a></li> --}}
      <div class="popup-content" id="popup_memo">
        <div class="text-wrapper">
          <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
          <p style="font-size: 20px; color: black;" id="display_memo"></p>
          <button class="popup-button" onclick="closePopupSecond()">OK</button>
        </div>
      </div>
    -->

      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('retake_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Inscription</span>
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li><a href="{{ route('retake_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
    </ol>
  </div>
</div>



<!--asking for cue-->
    <div class="service-title">
      <i class="fas fa-file-alt fa-3x"></i>
      <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
      font-weight: 400;
      font-style: normal;">CUE</h4>
      <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
  
      <!-- Additional items initially hidden -->
      <div class="additional-items" style="display: none;">
        <ol>
          {{-- <li><a href="{{ route('transcript_form')}}" style="cursor: pointer; font-weight: ;font-size: 20px; color:  black;">Demande de bulletin</a></li> --}}

          <li>
            <div class="dropdown" id="bulletin-dropdown">
              <a href="{{route('transcript_form')}}">
                <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de cue</span>
              </a>
              <ul class="additional-items" style="display: none;">
                <!-- Initially empty, to be populated with JS -->
              </ul>
            </div>
          </li>

          <!-- <li>
            <div class="dropdown" id="bulletin-dropdown">
              <a href="{{route('dup_transcript_form')}}">
                <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Duplicata de cue</span>
              </a>
              <ul class="additional-items" style="display: none;">


              </ul>
            </div>
          </li> -->


          <li><a href="{{ route('transcript_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
          {{-- <li><a href="{{ route('dup_transcript_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Statut Duplicata</a></li> --}}

        </ol>
      </div>
    </div>

 
      <div class="service-title">
        <i class="fas fa-award fa-3x"></i>
        <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
        font-weight: 400;
        font-style: normal;">Attestation</h4>
        <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
    
        <!-- Additional items initially hidden -->
        <div class="additional-items" style="display: none;">
          <ol>

      <!-- Demande d'Attestation dropdown -->
      <li>
      <div class="dropdown" id="attestation-dropdown">
        <a href="#">
          <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande d'Attestation</span>
        </a>
        <ul class="additional-items" style="display: none;">
          <!-- Initially empty, to be populated with JS -->
        </ul>
      </div>
    </li>


    <li>
              <div class="dropdown" id="duplicata-dropdown">
                <a href="#">
                  <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de duplicata</span>
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
          <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
          font-weight: 400;
          font-style: normal;">Diplôme</h4>
          <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
      
          <!-- Additional items initially hidden -->
          <div class="additional-items" style="display: none;">
            <ol>
              {{-- <li><a href="{{ route('diploma_form')}}" style="cursor: pointer; font-weight: ; font-size: 20px; color: black;">Demande de diplôme</a></li> --}}

              <li>
                <div class="dropdown" id="diplome-dropdown">
                  <a href="#">
                    <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de Diplôme</span>
                  </a>
                  <ul class="additional-items" style="display: none;">
                    <!-- Initially empty, to be populated with JS -->
                  </ul>
                </div>
              </li>

              {{-- <li><a href="{{ route('diploma_form')}}" style="cursor: pointer; font-weight: ; font-size: 20px; color: black;">Demande de duplicata</a></li> --}}
            <!-- <li>
              <div class="dropdown" id="diplome-dup-dropdown">
                <a href="#">
                  <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de duplicata</span>
                </a>
                <ul class="additional-items" style="display: none;">


              </ul>
              </div>
            </li> -->

              {{-- <li><a href="{{ route('diploma_form')}}" style="cursor: pointer; font-weight: ; font-size: 20px;color: black;">Demande de d'Authenticité</a></li> --}}
            <li>
              <div class="dropdown" id="diplome-aut-dropdown">
                <a href="#">
                  <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande d'Authenticité</span>
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



      

        {{-- Dissertation fees services title --}}

        <div class="service-title">
          <i class="fas fa-book fa-3x"></i>
             <h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
             font-weight: 400;
             font-style: normal;">Mémoire & Soutenance</h4>
          <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement_memo">Options</a> <i class="fas fa-caret-down" ></i><br><br>
      
          <!-- Additional items initially hidden -->
          <div class="additional-items" style="display: none;">
            <ol>
              {{-- <li><a href="{{ route('transcript_form')}}" style="cursor: pointer; font-weight: ;font-size: 20px; color:  black;">Demande de bulletin</a></li> --}}
              <div class="popup-content" id="popup_memo">
                <div class="text-wrapper">
                  <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
                  <p style="font-size: 20px; color: black;" id="display_memo"></p>
                  <button class="popup-button" onclick="closePopupSecond()">OK</button>
                </div>
              </div>

              <li>
                <div class="dropdown" id="bulletin-dropdown">
                  <a href="{{route('transcript_form')}}">
                    <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Dépôt de mémoire</span>
                  </a>
                  <ul class="additional-items" style="display: none;">
                    <!-- Initially empty, to be populated with JS -->
                  </ul>
                </div>
              </li>

              <li>
                <div class="dropdown" id="bulletin-dropdown">
                  <a href="{{route('transcript_form')}}">
                    <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Frais de soutenance</span>
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


  


{{-- pass system services title --}}

<div class="service-title">
  <i class="fas fa-shekel-sign"></i>
     <h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
     font-weight: 400;
     font-style: normal;">Ancien Régime</h4>
  <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement_memo">Options</a> <i class="fas fa-caret-down" ></i><br><br>

  <!-- Additional items initially hidden -->
  <div class="additional-items" style="display: none;">
    <ol>
      <div class="popup-content" id="popup_memo">
        <div class="text-wrapper">
          <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
          <p style="font-size: 20px; color: black;" id="display_memo"></p>
          <button class="popup-button" onclick="closePopupSecond()">OK</button>
        </div>
      </div>
      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('transcript_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Relevé de notes</span>
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('transcript_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Attestation de succès</span>
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('transcript_status')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</span>
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>
    </ol>
  </div>
</div>


</div>

</main>

  <!-- Footer -->
  <footer id="footer" class="footer">
    <!-- Your footer content here -->
  </footer>

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

//   $(document).ready(function() {
//   // Function to toggle the visibility of additional items
//   $('.toggle-items').on('click', function(e) {
//     e.preventDefault();
//     $(this).closest('.service-title').find('.additional-items').slideToggle();
//   });
// });

// $(document).ready(function() {
//   // Function to toggle the visibility of additional items
//   $('.toggle-items').on('click', function(e) {
//     e.preventDefault();
//     $(this).closest('.service-title').find('.additional-items').slideToggle();
//   });
// });



// $(document).ready(function() {
//   // Function to toggle the visibility of additional items
//   $('.toggle-items').on('click', function(e) {
//     e.preventDefault(); // Prevent the default behavior of the anchor tag
//     var parentService = $(this).closest('.service-title');
//     parentService.find('.additional-items').slideToggle();
//   });
// });


$(document).ready(function() {
  // Attach click event to a parent element (assuming .service-container is a parent)
  $('.service-container').on('click', '.toggle-items', function(e) {
    e.preventDefault();
    var parentService = $(this).closest('.service-title');
    parentService.find('.additional-items').slideToggle();
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

  // Create the three links inside the pop-up with finger icons
  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];



  links.forEach(function (linkHTML) {
    var link = document.createElement('a');
    link.href = '#' + linkHTML.toLowerCase().replace(/<\/?[^>]+(>|$)/g, ''); // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (linkHTML.includes('Licence')) {
        window.location.href = '{{route('certificate_form')}}'; // Redirect to Licence page
      } else if (linkHTML.includes('Master')) {
        window.location.href = '{{route('certificate_form')}}'; // Redirect to Master page
      } else if (linkHTML.includes('Doctorat')) {
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

  // Create the three links inside the pop-up with finger icons
  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];

  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#' + String.fromCharCode(97 + index) + '- ' + linkHTML.toLowerCase().replace(/<\/?[^>]+(>|$)/g, ''); // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('certificate_form')}}'; // Redirect to Licence1 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('certificate_form_master')}}'; // Redirect to Master1 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('certificate_form_doctorat')}}'; // Redirect to Doctorate1 page
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

  var title = document.createElement('div');
  title.classList.add('title');
  title.textContent = "AUTHENTICITÉ DE DIPLOME";
  popup.appendChild(title);

  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];

  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#'; // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence1 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Master1 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate1 page
      }
    });

    // Append the links to the pop-up
    popup.appendChild(link);
  });

  var okButton = document.createElement('div');
  okButton.classList.add('ok-button');
  okButton.textContent = 'OK';
  okButton.addEventListener('click', function () {
    popup.remove(); // Remove the pop-up when OK is clicked
  });
  popup.appendChild(okButton);

  document.body.appendChild(popup);
}

var authenticiteDropdown = document.querySelector('#diplome-aut-dropdown span');
authenticiteDropdown.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default link behavior
  createAuthenticitePopup(); // Call the function to create the pop-up
});


 // Function to create the pop-up for Demande de duplicata
 function createDuplicataPopup() {
  var popup = document.createElement('div');
  popup.classList.add('popup');

  var title = document.createElement('div');
  title.classList.add('title');
  title.textContent = "DUPLICATA DE DIPLÔME";
  popup.appendChild(title);

  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];

  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#'; // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence2 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Master2 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate2 page
      }
    });

    // Append the links to the pop-up
    popup.appendChild(link);
  });

  var okButton = document.createElement('div');
  okButton.classList.add('ok-button');
  okButton.textContent = 'OK';
  okButton.addEventListener('click', function () {
    popup.remove(); // Remove the pop-up when OK is clicked
  });
  popup.appendChild(okButton);

  document.body.appendChild(popup);
}

var duplicataDropdown = document.querySelector('#diplome-dup-dropdown span');
duplicataDropdown.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default link behavior
  createDuplicataPopup(); // Call the function to create the pop-up
});



   // Function to create the pop-up for Demande de Diplôme
   function createDiplomePopup() {
  var popup = document.createElement('div');
  popup.classList.add('popup');

  var title = document.createElement('div');
  title.classList.add('title');
  title.textContent = "DIPLÔME";
  popup.appendChild(title);

  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];


  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#'; // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence3 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Master3 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate3 page
      }
    });

    // Append the links to the pop-up
    popup.appendChild(link);
  });

  var okButton = document.createElement('div');
  okButton.classList.add('ok-button');
  okButton.textContent = 'OK';
  okButton.addEventListener('click', function () {
    popup.remove(); // Remove the pop-up when OK is clicked
  });
  popup.appendChild(okButton);

  document.body.appendChild(popup);
}

var diplomeDropdown = document.querySelector('#diplome-dropdown span');
diplomeDropdown.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default link behavior
  createDiplomePopup(); // Call the function to create the pop-up
});





  // progressive displaying script

  const Paragraph =
  "Le paiement des frais d'inscription pédagogique concernent les étudiants du premier cycle (Licence 1, 2 et 3) des formations non payantes.";

const displayElement = document.getElementById("display");
let isPopupDisplayed = false; // Track if the popup is displayed

function displayProgressively(index) {
  if (index < Paragraph.length) {
    displayElement.textContent += Paragraph.charAt(index);
    setTimeout(() => displayProgressively(index + 1), 60);
  }
}

// Function to toggle the popup display and manage paragraph display
function togglePopup() {
  const popup = document.getElementById("popup");

  if (!isPopupDisplayed) {
    popup.style.display = "block";
    displayProgressively(0); // Start displaying the paragraph
  } else {
    popup.style.display = "none";
    displayElement.textContent = ""; // Clear the displayed text
  }

  isPopupDisplayed = !isPopupDisplayed;
}

// Call togglePopup function when clicking on the options element
document.getElementById("optionsElement").addEventListener("click", togglePopup);

    // close pop up

    function closePopup(){
      window.popup.remove()
    }


   // Code for the second popup (memoire)
const paragraphSecondPopup =
  "Le paiement des frais de soutenance concernent les étudiants en fin de formation de licence des spécialités non payante.";

let isPopupDisplayedSecond = false;
let displayElementSecond = document.getElementById("display_memo");

function displayProgressivelySecond(index) {
  if (index < paragraphSecondPopup.length) {
    displayElementSecond.textContent += paragraphSecondPopup.charAt(index);
    setTimeout(() => displayProgressivelySecond(index + 1), 60);
  }
}

function togglePopupSecond() {
  const popup = document.getElementById("popup_memo");

  if (!isPopupDisplayedSecond) {
    popup.style.display = "block";
    displayProgressivelySecond(0);
  } else {
    popup.style.display = "none";
    displayElementSecond.textContent = "";
  }

  isPopupDisplayedSecond = !isPopupDisplayedSecond;
}

function closePopupSecond() {
  const popup = document.getElementById("popup_memo");
  popup.style.display = "none";
  displayElementSecond.textContent = "";
  isPopupDisplayedSecond = false;
}


document.getElementById("optionsElement_memo").addEventListener("click", togglePopupSecond);


</script>


<!--User parameter script-->
<script>
  document.addEventListener('click', function(event) {
      var optionsMenu = document.getElementById('optionsMenu');
      var settingsIcon = document.querySelector('.settings-icon');
      if (!optionsMenu.contains(event.target) && !settingsIcon.contains(event.target)) {
          optionsMenu.style.display = 'none';
      }
  });

  function toggleOptionsMenu(event) {
      event.stopPropagation();
      var optionsMenu = document.getElementById('optionsMenu');
      optionsMenu.style.display = (optionsMenu.style.display === 'block') ? 'none' : 'block';
  }
</script>

<script>
  $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien de réclamation
    function updateClaimLinkState() {
        $.ajax({
            url: '/get-claim-lunch-value',
            type: 'GET',
            success: function(response) {
                var claimLunchValue = response.claim_lunch;
                var claimLink = document.querySelector(".additional-items ol li:first-child a");

                if (claimLunchValue === "lunched") {
                    claimLink.style.display = "inline"; // Rendre le lien visible
                } else if (claimLunchValue === "stopped") {
                  claimLink.removeAttribute('href')
                  claimLink.style.color = "black";
                  claimLink.style.cursor = "not-allowed";


                    claimLink.innerText = "Réclamation Cloturée"; // Rendre le lien invisible
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de claim_lunch:', error);
            }
        });
    }

    
    updateClaimLinkState();
});

</script>


<script>
  $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien d'inscription
    function updatePedLinkState() {
        $.ajax({
            url: '/get-ped-lunch-value',
            type: 'GET',
            success: function(response) {
                var pedLunchValue = response.ped_lunch;
                var pedLink = document.querySelector(".ped ol li:first-child a");

                if (pedLunchValue === "lunched") {
                  pedLink.style.display = "inline"; // Rendre le lien visible
                } else if (pedLunchValue === "stopped") {
                  pedLink.removeAttribute('href')
                  pedLink.style.color = "black";
                  pedLink.style.cursor = "not-allowed";


                  pedLink.innerText = "Inscription Cloturée"; // Rendre le lien invisible
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    updatePedLinkState();
});

</script>


<script>
  $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien d'inscription
    function updateRetakeLinkState() {
        $.ajax({
            url: '/get-retake-lunch-value',
            type: 'GET',
            success: function(response) {
                var retakeLunchValue = response.retake_lunch;
                var retakeLink = document.querySelector(".retake ol li:first-child a");

                if (retakeLunchValue === "lunched") {
                  retakeLink.style.display = "inline"; // Rendre le lien visible
                } else if (retakeLunchValue === "stopped") {
                  retakeLink.removeAttribute('href')
                  retakeLink.style.color = "black";
                  retakeLink.style.cursor = "not-allowed";


                  retakeLink.innerText = "Inscription cloturée"; // Rendre le lien invisible
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    updateRetakeLinkState();
});

</script>





<script>
    $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien de réclamation
    function checkStatus() {
        $.ajax({
            url: '/get-claim-lunch-value',
            type: 'GET',
            success: function(data) {
                var claim_status = data.claim_lunch;

                if (claim_status === "lunched") {
                  $('#status-indicator').css('background-color', 'green')
                } else if (claim_status === "stopped") {
                  $('#status-indicator').css('background-color', 'gray')
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de claim_lunch:', error);
            }
        });
    }

    
    checkStatus();
});
</script>


<script>
    $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien d'inscription pédagogique
    function PedcheckStatus() {
        $.ajax({
            url: '/get-ped-lunch-value',
            type: 'GET',
            success: function(data) {
                var ped_status = data.ped_lunch;

                if (ped_status === "lunched") {
                  $('#ped-status-indicator').css('background-color', 'green')
                } else if (ped_status === "stopped") {
                  $('#ped-status-indicator').css('background-color', 'gray')
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    PedcheckStatus();
});
</script>


<script>
    $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien de reprise
    function RetakecheckStatus() {
        $.ajax({
            url: '/get-retake-lunch-value',
            type: 'GET',
            success: function(data) {
                var retake_status = data.retake_lunch;

                if (retake_status === "lunched") {
                  $('#retake-status-indicator').css('background-color', 'green')
                } else if (retake_status === "stopped") {
                  $('#retake-status-indicator').css('background-color', 'gray')
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    RetakecheckStatus();
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  //timer script for complaint
 $(document).ready(function(){
  function checkStatus() {
    $.ajax({
      url: '/complaint/hour/check',
      method: 'GET',
      success: function(response) {
        if (response.claim_lunch === "lunched") {
          var remainingSeconds = calculateRemainingSeconds(response.start_time, response.server_time, response.hour);
          startTimer(remainingSeconds);
        } else if (response.claim_lunch === "stopped") {
          resetTimer();
        } else {
          // Continue checking every second if claim_lunch is neither "lunched" nor "stopped"
          setTimeout(checkStatus, 1000);
        }
      },
      error: function() {
        $('#timer').text('Failed to load timer.');
      }
    });
  }

  // Function to calculate remaining seconds
  function calculateRemainingSeconds(startTime, serverTime, totalHours) {
    var serverStartTime = new Date(startTime).getTime();
    var serverCurrentTime = new Date(serverTime).getTime();
    var elapsedTimeInSeconds = Math.floor((serverCurrentTime - serverStartTime) / 1000);
    var totalSeconds = totalHours * 3600;
    var remainingSeconds = totalSeconds - elapsedTimeInSeconds;
    return remainingSeconds > 0 ? remainingSeconds : 0;
  }

  // Function to start the timer
  function startTimer(remainingSeconds) {
    var timer = document.getElementById('timer');
    var timerInterval = setInterval(updateTimer, 1000); // Update every second

    function updateTimer() {
      var hours = Math.floor(remainingSeconds / 3600);
      var minutes = Math.floor((remainingSeconds % 3600) / 60);
      var seconds = remainingSeconds % 60;

      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      timer.innerHTML = hours + ':' + minutes + ':' + seconds;

      if (remainingSeconds <= 0) {
        timer.classList.add('expired');
        clearInterval(timerInterval);
      }

      remainingSeconds--;
    }

    updateTimer();
  }

  // Function to reset the timer
  function resetTimer() {
    clearInterval(timerInterval);
    document.getElementById('timer').innerHTML = "00:00:00"; // Reset timer display
  }

  // Check status every second when the page loads
  checkStatus();
});

</script>


<script>
  //timer script for ped enrollment
 $(document).ready(function(){
  function checkStatusPed() {
    $.ajax({
      url: '/ped/hour/check',
      method: 'GET',
      success: function(response) {
        if (response.ped_lunch === "lunched") {
          var remainingSeconds = calculateRemainingSeconds(response.start_time, response.server_time, response.hour);
          startTimer(remainingSeconds);
        } else if (response.ped_lunch === "stopped") {
          resetTimer();
        } else {
          // Continue checking every second if claim_lunch is neither "lunched" nor "stopped"
          setTimeout(checkStatus, 1000);
        }
      },
      error: function() {
        $('#ped_timer').text('Failed to load ped_timer.');
      }
    });
  }

  // Function to calculate remaining seconds
  function calculateRemainingSeconds(startTime, serverTime, totalHours) {
    var serverStartTime = new Date(startTime).getTime();
    var serverCurrentTime = new Date(serverTime).getTime();
    var elapsedTimeInSeconds = Math.floor((serverCurrentTime - serverStartTime) / 1000);
    var totalSeconds = totalHours * 3600;
    var remainingSeconds = totalSeconds - elapsedTimeInSeconds;
    return remainingSeconds > 0 ? remainingSeconds : 0;
  }

  // Function to start the timer
  function startTimer(remainingSeconds) {
    var ped_timer = document.getElementById('ped_timer');
    var timerInterval = setInterval(updateTimer, 1000); // Update every second

    function updateTimer() {
      var hours = Math.floor(remainingSeconds / 3600);
      var minutes = Math.floor((remainingSeconds % 3600) / 60);
      var seconds = remainingSeconds % 60;

      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      ped_timer.innerHTML = hours + ':' + minutes + ':' + seconds;

      if (remainingSeconds <= 0) {
        ped_timer.classList.add('ped_expired');
        clearInterval(timerInterval);
      }

      remainingSeconds--;
    }

    updateTimer();
  }

  // Function to reset the timer
  function resetTimer() {
    clearInterval(timerInterval);
    document.getElementById('ped_timer').innerHTML = "00:00:00"; // Reset timer display
  }

  // Check status every second when the page loads
  checkStatusPed();
});

</script>


<script>
  //timer script for retake
 $(document).ready(function(){
  function checkStatusRetake() {
    $.ajax({
      url: '/retake/hour/check',
      method: 'GET',
      success: function(response) {
        if (response.retake_lunch === "lunched") {
          var remainingSeconds = calculateRemainingSeconds(response.start_time, response.server_time, response.hour);
          startTimer(remainingSeconds);
        } else if (response.retake_lunch === "stopped") {
          resetTimer();
        } else {
          // Continue checking every second if claim_lunch is neither "lunched" nor "stopped"
          setTimeout(checkStatus, 1000);
        }
      },
      error: function() {
        $('#retake_timer').text('Failed to load retake_timer.');
      }
    });
  }

  // Function to calculate remaining seconds
  function calculateRemainingSeconds(startTime, serverTime, totalHours) {
    var serverStartTime = new Date(startTime).getTime();
    var serverCurrentTime = new Date(serverTime).getTime();
    var elapsedTimeInSeconds = Math.floor((serverCurrentTime - serverStartTime) / 1000);
    var totalSeconds = totalHours * 3600;
    var remainingSeconds = totalSeconds - elapsedTimeInSeconds;
    return remainingSeconds > 0 ? remainingSeconds : 0;
  }

  // Function to start the timer
  function startTimer(remainingSeconds) {
    var retake_timer = document.getElementById('retake_timer');
    var timerInterval = setInterval(updateTimer, 1000); // Update every second

    function updateTimer() {
      var hours = Math.floor(remainingSeconds / 3600);
      var minutes = Math.floor((remainingSeconds % 3600) / 60);
      var seconds = remainingSeconds % 60;

      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      retake_timer.innerHTML = hours + ':' + minutes + ':' + seconds;

      if (remainingSeconds <= 0) {
        retake_timer.classList.add('retake_expired');
        clearInterval(timerInterval);
      }

      remainingSeconds--;
    }

    updateTimer();
  }

  // Function to reset the timer
  function resetTimer() {
    clearInterval(timerInterval);
    document.getElementById('retake_timer').innerHTML = "00:00:00"; // Reset timer display
  }

  // Check status every second when the page loads
  checkStatusRetake();
});

</script>

<!-- update profile image modal -->
<script>
document.getElementById('updateProfileBtn').onclick = function() {
  document.getElementById('updateProfileModal').style.display = 'block';
  document.getElementById('optionsMenu').style.display = 'none';

}

document.getElementsByClassName('close')[0].onclick = function() {
  document.getElementById('updateProfileModal').style.display = 'none';
}

window.onclick = function(event) {
  if (event.target == document.getElementById('updateProfileModal')) {
    document.getElementById('updateProfileModal').style.display = 'none';
  }
}
</script>


</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services et prestations</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.jpeg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.jpeg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">

    <!-- pop -up links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
{{-- finger bootstrap library link --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ojuju:wght@200..800&family=Open+Sans:wght@500&family=Rock+3D&family=Rubik+Gemstones&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Madimi+One&family=Ojuju:wght@200..800&family=Open+Sans:wght@500&family=Rock+3D&family=Rubik+Gemstones&display=swap" rel="stylesheet">

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




    /* the pop-up styling for ins and mem */
    .popup-content {
  display: none;
}

.popup-content .text-wrapper {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Shadow for the text wrapper */
  padding: 10px; /* Padding for the text wrapper */
}

.popup-content p {
  font-size: 16px;
  line-height: 1.5;
  text-align: center;
  margin: 20px 0;
}
.popup-button {
      background: #007bff; /* Blue color for the button */
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 50%;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .popup-button:hover {
      background: #0056b3; /* Darker blue color on hover */
    }

    /* CSS for blinking animation */
@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.icon-blink {
  animation: blink 1s infinite; 
}

.circle-icon {
  width: 80px;
  height: 80px;
  border-radius: 1px;
  background-color: #05138fde;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  margin-bottom: 2px;
}


/*user profile parameter*/

.settings-icon {
        position: relative;
        top: 1px;
        left: 80px;
        margin-right: 10px;
        cursor: pointer;
    }
    .options-menu {
        position: relative;
        top: 20px;
        right: 10px;
        display: none;
        background-color: transparent;
        /* border: 1px solid #ccc; */
        padding: 3px;
        z-index: 100;
    }
    .options-menu ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .options-menu li {
        margin-bottom: 5px;
    }


    /*User area*/
    .user-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 10px;
    }
      .user-title {
        /* flex: 0 0 calc(50% - 20px); */
      background-color: #05138fde;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 300px;
    }

    .small-title{
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 270px;
      /* margin-top: 5px */
    }
    .user{
      margin-top: 5px;
      width: 100%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      height: 200px;


    }

    /* disable link after claim is closed */
    .disabled-link{
      color:black;
      font-weight:bold
    }
    /* status indicator */
#status-indicator{
  width: 20px;
  height:20px;
  border-radius :50%;
  display: inline-block;
  background-color:gray
}
#ped-status-indicator{
  width: 20px;
  height:20px;
  border-radius :50%;
  display: inline-block;
  background-color:gray
}
.ped{
  font-size:20px
}

#retake-status-indicator{
  width: 20px;
  height:20px;
  border-radius :50%;
  display: inline-block;
  background-color:gray
}
.retake{
  font-size:20px
}

#timer{
  font-size: 2em;
  color : black;
}
.expired{
  color :red;
  animation: blink 1s infinite;

}
@keyframes blink{
  0%, 50%{
    opacitiy:1;
  }
  25%, 75%{
    opacity:0;
  }
}

/* ped timer style */

#ped_timer{
  font-size: 2em;
  color : black;
}

#retake_timer{
  font-size: 2em;
  color : black;
}

.expired{
  color :red;
  animation: blink 1s infinite;

}
@keyframes blink{
  0%, 50%{
    opacitiy:1;
  }
  25%, 75%{
    opacity:0;
  }
}

/*Modal for profile image styling */
.modal {
  display: none;
  position: absolute;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.profile {
  font-size:20px;
  width: 150px;
  height:40px;
  background-color: #05138fde;
  color: white;
  cursor: pointer;
  border-radius:20px


        }
        .profile:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        @media (max-width: 576px) {
            .profile {
                box-sizing: border-box;
                font-size:20px;
  width: 150px;
  height:40px;
  background-color: #05138fde;
  color: white;
  cursor: pointer;
  border-radius:20px
                
            }
        }
.profile-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
.logout_btn{
  
  width: 250px;
  height:40px;
  background-color:transparent;
  color:#b30d0dde;
  font-weight:bold;
  font-size:20px;
  border:none;
  border-radius:20px

}
.update_btn{
  font-weight:bold;
  font-size:20px;
   width: 250px;
   border-radius:20px
}
  </style>

</head>

<body data-authenticated="{{ Auth::check() }}">
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

</header>


  <main id="main">
    <!-- Breadcrumbs -->
        <section>
          <div class="user-container">
            <div class="user-title">
              <div class="user"  > 
         
              <div style="font-size:40px; font-weight:bold; align-item:center">
                <h4 class="title" style=" font-weight:bolder; font-size:35px; color: white;   font-family: Rubik Gemstones, system-ui;
                font-weight: 400px;
                font-style: normal;">BIENVENUE</h4>
              </div>
              <div id="popup-text" style="font-size: 20px; font-weight:bold; text-transform:uppercase"></div>  
                <div class="small-title">
                  {{-- <div class="service-title"> --}}
                    <i class="fas fa-ellipsis-h settings-icon" onclick="toggleOptionsMenu(event)"></i>
                    <div class="user">

                              <!-- Display user's profile picture -->
@if(auth()->user()->image)
    <img src="{{ Storage::url(auth()->user()->image) }}" alt="Profile Image" class="profile-image">
@else
<div class="circle-icon" style="border-radius: 50%">
                            <i class="fas fa-user fa-4x" style="color: #fff;"></i>
                        </div>
@endif

<h3 class="user_name">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h3>
<div class="options-menu" id="optionsMenu">

                            <ul>
                                <li><a href="#" id ="updateProfileBtn" class = "update_btn">Modifier la photo</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="logout_btn"><i class="fas fa-sign-out-alt"></i>Se déconnecter</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                {{-- </div> --}}
                </div>
        
            </div>
             
            </div>
            
        </section>

    <!-- End Breadcrumbs -->

<!-- Button to open the modal -->

<!-- Modal -->
<div id="updateProfileModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Modification de la photo</h2>
    <form id="updateProfileForm" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="profileImage">Choisir une photo de profile</label>
        <input type="file" id="profileImage" name="image" class="form-control" required>
      </div>
      <button type="submit" class="profile">Modifier</button>
    </form>
  </div>
</div>









    {{-- <div class="service-title">
      <div class="user" > 
 
      <h2 style="color: blue; font-weight:bold">SERVICES ET PRESTATIONS</h2>
      </div>
      </div> --}}
  <div class="service-container">

    <div class="service-title">
      <i class="fas fa-edit fa-3x"><span id="status-indicator"></span></i>
  
      <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
      font-weight: 400;
      font-style: normal;">Réclamation</h4>
      <div id="timer">00:00:00</div>

      <a href="#" class="toggle-items" style="  font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
  
      <!-- Additional items initially hidden -->
      <div class="additional-items" style="display: none;">
        <ol>
          <li><a href="{{ route('complaint_form')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;" id="claimButton" disabled >Réclamation</a></li>
          {{-- <li><a href="{{ route('complaint_status') }}" style="cursor: pointer; font-weight: ; font-size: 20px; color:  black;">Vérifier le statut</a></li> --}}

          <li><a href="{{ route('complaint_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
        </ol>
      </div>
    </div>

    {{-- academic enrollment service title --}}

<div class="service-title">
  <i class="fas fa-file-signature fa-3x"></i>
  <span id="ped-status-indicator"></span></i>

  <h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
  font-weight: 400;
  font-style: normal;">Inscription pédagogique</h4>
        <div id="ped_timer">00:00:00</div>

  <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement">Options</a> <i class="fas fa-caret-down" ></i><br><br>

  <!-- Additional items initially hidden -->
  <div class="additional-items ped" style="display: none;">
    <ol>

      <!-- <div class="popup-content" id="popup">
        <div class="text-wrapper">
          <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
          <p style="font-size: 20px; color: black;" id="display"></p>
          <button class="popup-button" onclick="closePopup()">OK</button>
        </div>
      </div> -->
      
      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('ped_registration_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Inscription</span>
            <!-- <i class="fas fa-caret-down"></i> -->
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li><a href="{{ route('ped_registration_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
    </ol>
  </div>
</div>



{{-- Retake services title --}}

<div class="service-title">
  <i class="fas fa-book fa-3x"></i>
  <span id="retake-status-indicator"></span></i>

<h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
font-weight: 400;
font-style: normal;">Reprise</h4>
      <div id="retake_timer">00:00:00</div>
  <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement_memo">Options</a> <i class="fas fa-caret-down" ></i><br><br>

  <!-- Additional items initially hidden -->
  <div class="additional-items retake" style="display: none;">
    <ol>
      <!-- <li><a href="{{ route('retake_form')}}" style="cursor: pointer; font-weight: ;font-size: 20px; color:  black;">Paiement des frais</a></li> --}}
      <div class="popup-content" id="popup_memo">
        <div class="text-wrapper">
          <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
          <p style="font-size: 20px; color: black;" id="display_memo"></p>
          <button class="popup-button" onclick="closePopupSecond()">OK</button>
        </div>
      </div>
    -->

      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('retake_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Paiement des Frais</span>
            <i class="fas fa-caret-down"></i>
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li><a href="{{ route('retake_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
    </ol>
  </div>
</div>



<!--asking for cue-->
    <div class="service-title">
      <i class="fas fa-file-alt fa-3x"></i>
      <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
      font-weight: 400;
      font-style: normal;">CUE</h4>
      <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;">Options</a> <i class="fas fa-caret-down" ></i><br><br>
  
      <!-- Additional items initially hidden -->
      <div class="additional-items" style="display: none;">
        <ol>
          {{-- <li><a href="{{ route('transcript_form')}}" style="cursor: pointer; font-weight: ;font-size: 20px; color:  black;">Demande de bulletin</a></li> --}}

          <li>
            <div class="dropdown" id="bulletin-dropdown">
              <a href="{{route('transcript_form')}}">
                <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Demande de cue</span>
                <i class="fas fa-caret-down"></i>
              </a>
              <ul class="additional-items" style="display: none;">
                <!-- Initially empty, to be populated with JS -->
              </ul>
            </div>
          </li>

          <li>
            <div class="dropdown" id="bulletin-dropdown">
              <a href="{{route('dup_transcript_form')}}">
                <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Duplicata de cue</span>
                <i class="fas fa-caret-down"></i>
              </a>
              <ul class="additional-items" style="display: none;">
                <!-- Initially empty, to be populated with JS -->
              </ul>
            </div>
          </li>


          <li><a href="{{ route('transcript_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</a></li>
          {{-- <li><a href="{{ route('dup_transcript_status')}}"  style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Statut Duplicata</a></li> --}}

        </ol>
      </div>
    </div>

 
      <div class="service-title">
        <i class="fas fa-award fa-3x"></i>
        <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
        font-weight: 400;
        font-style: normal;">Attestation</h4>
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
          <h4 class="title" style="font-size:35px;   font-family: Rubik Gemstones, system-ui;
          font-weight: 400;
          font-style: normal;">Diplôme</h4>
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



      

        {{-- Dissertation fees services title --}}

        <div class="service-title">
          <i class="fas fa-book fa-3x"></i>
             <h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
             font-weight: 400;
             font-style: normal;">Mémoire & Soutenance</h4>
          <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement_memo">Options</a> <i class="fas fa-caret-down" ></i><br><br>
      
          <!-- Additional items initially hidden -->
          <div class="additional-items" style="display: none;">
            <ol>
              {{-- <li><a href="{{ route('transcript_form')}}" style="cursor: pointer; font-weight: ;font-size: 20px; color:  black;">Demande de bulletin</a></li> --}}
              <div class="popup-content" id="popup_memo">
                <div class="text-wrapper">
                  <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
                  <p style="font-size: 20px; color: black;" id="display_memo"></p>
                  <button class="popup-button" onclick="closePopupSecond()">OK</button>
                </div>
              </div>

              <li>
                <div class="dropdown" id="bulletin-dropdown">
                  <a href="{{route('transcript_form')}}">
                    <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Dépôt de mémoire</span>
                    <i class="fas fa-caret-down"></i>
                  </a>
                  <ul class="additional-items" style="display: none;">
                    <!-- Initially empty, to be populated with JS -->
                  </ul>
                </div>
              </li>

              <li>
                <div class="dropdown" id="bulletin-dropdown">
                  <a href="{{route('transcript_form')}}">
                    <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Frais de soutenance</span>
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


  


{{-- pass system services title --}}

<div class="service-title">
  <i class="fas fa-book fa-3x"></i>
     <h4 class="title"style=" font-size:35px;  font-family: Rubik Gemstones, system-ui;
     font-weight: 400;
     font-style: normal;">Ancien Régime</h4>
  <a href="#" class="toggle-items" style=" font-weight: bold; font-size: 20px;" id="optionsElement_memo">Options</a> <i class="fas fa-caret-down" ></i><br><br>

  <!-- Additional items initially hidden -->
  <div class="additional-items" style="display: none;">
    <ol>
      <div class="popup-content" id="popup_memo">
        <div class="text-wrapper">
          <i class="fas fa-exclamation-triangle icon-blink" style="color: rgba(226, 25, 25, 0.842)"></i>
          <p style="font-size: 20px; color: black;" id="display_memo"></p>
          <button class="popup-button" onclick="closePopupSecond()">OK</button>
        </div>
      </div>
      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('transcript_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Relevé de notes</span>
            <i class="fas fa-caret-down"></i>
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('transcript_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Attestation de succès</span>
            <i class="fas fa-caret-down"></i>
          </a>
          <ul class="additional-items" style="display: none;">
            <!-- Initially empty, to be populated with JS -->
          </ul>
        </div>
      </li>

      <li>
        <div class="dropdown" id="bulletin-dropdown">
          <a href="{{route('transcript_form')}}">
            <span style="cursor: pointer; font-weight: ; font-size: 20px; color: blue;">Historique</span>
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


</div>

</main>

  <!-- Footer -->
  <footer id="footer" class="footer">
    <!-- Your footer content here -->
  </footer>

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

//   $(document).ready(function() {
//   // Function to toggle the visibility of additional items
//   $('.toggle-items').on('click', function(e) {
//     e.preventDefault();
//     $(this).closest('.service-title').find('.additional-items').slideToggle();
//   });
// });

// $(document).ready(function() {
//   // Function to toggle the visibility of additional items
//   $('.toggle-items').on('click', function(e) {
//     e.preventDefault();
//     $(this).closest('.service-title').find('.additional-items').slideToggle();
//   });
// });



// $(document).ready(function() {
//   // Function to toggle the visibility of additional items
//   $('.toggle-items').on('click', function(e) {
//     e.preventDefault(); // Prevent the default behavior of the anchor tag
//     var parentService = $(this).closest('.service-title');
//     parentService.find('.additional-items').slideToggle();
//   });
// });


$(document).ready(function() {
  // Attach click event to a parent element (assuming .service-container is a parent)
  $('.service-container').on('click', '.toggle-items', function(e) {
    e.preventDefault();
    var parentService = $(this).closest('.service-title');
    parentService.find('.additional-items').slideToggle();
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

  // Create the three links inside the pop-up with finger icons
  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];



  links.forEach(function (linkHTML) {
    var link = document.createElement('a');
    link.href = '#' + linkHTML.toLowerCase().replace(/<\/?[^>]+(>|$)/g, ''); // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (linkHTML.includes('Licence')) {
        window.location.href = '{{route('certificate_form')}}'; // Redirect to Licence page
      } else if (linkHTML.includes('Master')) {
        window.location.href = '{{route('certificate_form')}}'; // Redirect to Master page
      } else if (linkHTML.includes('Doctorat')) {
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

  // Create the three links inside the pop-up with finger icons
  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];

  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#' + String.fromCharCode(97 + index) + '- ' + linkHTML.toLowerCase().replace(/<\/?[^>]+(>|$)/g, ''); // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('certificate_form')}}'; // Redirect to Licence1 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('certificate_form_master')}}'; // Redirect to Master1 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('certificate_form_doctorat')}}'; // Redirect to Doctorate1 page
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

  var title = document.createElement('div');
  title.classList.add('title');
  title.textContent = "AUTHENTICITÉ DE DIPLOME";
  popup.appendChild(title);

  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];

  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#'; // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence1 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Master1 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate1 page
      }
    });

    // Append the links to the pop-up
    popup.appendChild(link);
  });

  var okButton = document.createElement('div');
  okButton.classList.add('ok-button');
  okButton.textContent = 'OK';
  okButton.addEventListener('click', function () {
    popup.remove(); // Remove the pop-up when OK is clicked
  });
  popup.appendChild(okButton);

  document.body.appendChild(popup);
}

var authenticiteDropdown = document.querySelector('#diplome-aut-dropdown span');
authenticiteDropdown.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default link behavior
  createAuthenticitePopup(); // Call the function to create the pop-up
});


 // Function to create the pop-up for Demande de duplicata
 function createDuplicataPopup() {
  var popup = document.createElement('div');
  popup.classList.add('popup');

  var title = document.createElement('div');
  title.classList.add('title');
  title.textContent = "DUPLICATA DE DIPLÔME";
  popup.appendChild(title);

  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];

  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#'; // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence2 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Master2 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate2 page
      }
    });

    // Append the links to the pop-up
    popup.appendChild(link);
  });

  var okButton = document.createElement('div');
  okButton.classList.add('ok-button');
  okButton.textContent = 'OK';
  okButton.addEventListener('click', function () {
    popup.remove(); // Remove the pop-up when OK is clicked
  });
  popup.appendChild(okButton);

  document.body.appendChild(popup);
}

var duplicataDropdown = document.querySelector('#diplome-dup-dropdown span');
duplicataDropdown.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default link behavior
  createDuplicataPopup(); // Call the function to create the pop-up
});



   // Function to create the pop-up for Demande de Diplôme
   function createDiplomePopup() {
  var popup = document.createElement('div');
  popup.classList.add('popup');

  var title = document.createElement('div');
  title.classList.add('title');
  title.textContent = "DIPLÔME";
  popup.appendChild(title);

  var links = [
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Licence',
    '<i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i> Master',
    '&nbsp&nbsp&nbsp <i class="fas fa-arrow-alt-circle-right fa-lg" style="color:#0056b3"></i>&nbsp Doctorat'
  ];


  links.forEach(function (linkHTML, index) {
    var link = document.createElement('a');
    link.href = '#'; // Set href based on the link HTML
    link.innerHTML = linkHTML; // Use HTML content instead of textContent
    link.style.display = 'block';
    link.style.marginBottom = '10px';

    // Event listener for each link in the pop-up
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Prevent default link behavior

      // Redirect based on the clicked link text
      if (link.textContent.includes('Licence')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Licence3 page
      } else if (link.textContent.includes('Master')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Master3 page
      } else if (link.textContent.includes('Doctorat')) {
        window.location.href = '{{route('diploma_form')}}'; // Redirect to Doctorate3 page
      }
    });

    // Append the links to the pop-up
    popup.appendChild(link);
  });

  var okButton = document.createElement('div');
  okButton.classList.add('ok-button');
  okButton.textContent = 'OK';
  okButton.addEventListener('click', function () {
    popup.remove(); // Remove the pop-up when OK is clicked
  });
  popup.appendChild(okButton);

  document.body.appendChild(popup);
}

var diplomeDropdown = document.querySelector('#diplome-dropdown span');
diplomeDropdown.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default link behavior
  createDiplomePopup(); // Call the function to create the pop-up
});





  // progressive displaying script

  const Paragraph =
  "Le paiement des frais d'inscription pédagogique concernent les étudiants du premier cycle (Licence 1, 2 et 3) des formations non payantes.";

const displayElement = document.getElementById("display");
let isPopupDisplayed = false; // Track if the popup is displayed

function displayProgressively(index) {
  if (index < Paragraph.length) {
    displayElement.textContent += Paragraph.charAt(index);
    setTimeout(() => displayProgressively(index + 1), 60);
  }
}

// Function to toggle the popup display and manage paragraph display
function togglePopup() {
  const popup = document.getElementById("popup");

  if (!isPopupDisplayed) {
    popup.style.display = "block";
    displayProgressively(0); // Start displaying the paragraph
  } else {
    popup.style.display = "none";
    displayElement.textContent = ""; // Clear the displayed text
  }

  isPopupDisplayed = !isPopupDisplayed;
}

// Call togglePopup function when clicking on the options element
document.getElementById("optionsElement").addEventListener("click", togglePopup);

    // close pop up

    function closePopup(){
      window.popup.remove()
    }


   // Code for the second popup (memoire)
const paragraphSecondPopup =
  "Le paiement des frais de soutenance concernent les étudiants en fin de formation de licence des spécialités non payante.";

let isPopupDisplayedSecond = false;
let displayElementSecond = document.getElementById("display_memo");

function displayProgressivelySecond(index) {
  if (index < paragraphSecondPopup.length) {
    displayElementSecond.textContent += paragraphSecondPopup.charAt(index);
    setTimeout(() => displayProgressivelySecond(index + 1), 60);
  }
}

function togglePopupSecond() {
  const popup = document.getElementById("popup_memo");

  if (!isPopupDisplayedSecond) {
    popup.style.display = "block";
    displayProgressivelySecond(0);
  } else {
    popup.style.display = "none";
    displayElementSecond.textContent = "";
  }

  isPopupDisplayedSecond = !isPopupDisplayedSecond;
}

function closePopupSecond() {
  const popup = document.getElementById("popup_memo");
  popup.style.display = "none";
  displayElementSecond.textContent = "";
  isPopupDisplayedSecond = false;
}


document.getElementById("optionsElement_memo").addEventListener("click", togglePopupSecond);


</script>


<!--User parameter script-->
<script>
  document.addEventListener('click', function(event) {
      var optionsMenu = document.getElementById('optionsMenu');
      var settingsIcon = document.querySelector('.settings-icon');
      if (!optionsMenu.contains(event.target) && !settingsIcon.contains(event.target)) {
          optionsMenu.style.display = 'none';
      }
  });

  function toggleOptionsMenu(event) {
      event.stopPropagation();
      var optionsMenu = document.getElementById('optionsMenu');
      optionsMenu.style.display = (optionsMenu.style.display === 'block') ? 'none' : 'block';
  }
</script>

<script>
  $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien de réclamation
    function updateClaimLinkState() {
        $.ajax({
            url: '/get-claim-lunch-value',
            type: 'GET',
            success: function(response) {
                var claimLunchValue = response.claim_lunch;
                var claimLink = document.querySelector(".additional-items ol li:first-child a");

                if (claimLunchValue === "lunched") {
                    claimLink.style.display = "inline"; // Rendre le lien visible
                } else if (claimLunchValue === "stopped") {
                  claimLink.removeAttribute('href')
                  claimLink.style.color = "black";
                  claimLink.style.cursor = "not-allowed";


                    claimLink.innerText = "Réclamation Cloturée"; // Rendre le lien invisible
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de claim_lunch:', error);
            }
        });
    }

    
    updateClaimLinkState();
});

</script>


<script>
  $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien d'inscription
    function updatePedLinkState() {
        $.ajax({
            url: '/get-ped-lunch-value',
            type: 'GET',
            success: function(response) {
                var pedLunchValue = response.ped_lunch;
                var pedLink = document.querySelector(".ped ol li:first-child a");

                if (pedLunchValue === "lunched") {
                  pedLink.style.display = "inline"; // Rendre le lien visible
                } else if (pedLunchValue === "stopped") {
                  pedLink.removeAttribute('href')
                  pedLink.style.color = "black";
                  pedLink.style.cursor = "not-allowed";


                  pedLink.innerText = "Inscription Cloturée"; // Rendre le lien invisible
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    updatePedLinkState();
});

</script>


<script>
  $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien d'inscription
    function updateRetakeLinkState() {
        $.ajax({
            url: '/get-retake-lunch-value',
            type: 'GET',
            success: function(response) {
                var retakeLunchValue = response.retake_lunch;
                var retakeLink = document.querySelector(".retake ol li:first-child a");

                if (retakeLunchValue === "lunched") {
                  retakeLink.style.display = "inline"; // Rendre le lien visible
                } else if (retakeLunchValue === "stopped") {
                  retakeLink.removeAttribute('href')
                  retakeLink.style.color = "black";
                  retakeLink.style.cursor = "not-allowed";


                  retakeLink.innerText = "Paiement cloturé"; // Rendre le lien invisible
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    updateRetakeLinkState();
});

</script>





<script>
    $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien de réclamation
    function checkStatus() {
        $.ajax({
            url: '/get-claim-lunch-value',
            type: 'GET',
            success: function(data) {
                var claim_status = data.claim_lunch;

                if (claim_status === "lunched") {
                  $('#status-indicator').css('background-color', 'green')
                } else if (claim_status === "stopped") {
                  $('#status-indicator').css('background-color', 'gray')
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de claim_lunch:', error);
            }
        });
    }

    
    checkStatus();
});
</script>


<script>
    $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien d'inscription pédagogique
    function PedcheckStatus() {
        $.ajax({
            url: '/get-ped-lunch-value',
            type: 'GET',
            success: function(data) {
                var ped_status = data.ped_lunch;

                if (ped_status === "lunched") {
                  $('#ped-status-indicator').css('background-color', 'green')
                } else if (ped_status === "stopped") {
                  $('#ped-status-indicator').css('background-color', 'gray')
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    PedcheckStatus();
});
</script>


<script>
    $(document).ready(function() {
    // Fonction pour mettre à jour l'état du premier lien de reprise
    function RetakecheckStatus() {
        $.ajax({
            url: '/get-retake-lunch-value',
            type: 'GET',
            success: function(data) {
                var retake_status = data.retake_lunch;

                if (retake_status === "lunched") {
                  $('#retake-status-indicator').css('background-color', 'green')
                } else if (retake_status === "stopped") {
                  $('#retake-status-indicator').css('background-color', 'gray')
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la récupération de la valeur de ped_lunch:', error);
            }
        });
    }

    
    RetakecheckStatus();
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  //timer script for complaint
 $(document).ready(function(){
  function checkStatus() {
    $.ajax({
      url: '/complaint/hour/check',
      method: 'GET',
      success: function(response) {
        if (response.claim_lunch === "lunched") {
          var remainingSeconds = calculateRemainingSeconds(response.start_time, response.server_time, response.hour);
          startTimer(remainingSeconds);
        } else if (response.claim_lunch === "stopped") {
          resetTimer();
        } else {
          // Continue checking every second if claim_lunch is neither "lunched" nor "stopped"
          setTimeout(checkStatus, 1000);
        }
      },
      error: function() {
        $('#timer').text('Failed to load timer.');
      }
    });
  }

  // Function to calculate remaining seconds
  function calculateRemainingSeconds(startTime, serverTime, totalHours) {
    var serverStartTime = new Date(startTime).getTime();
    var serverCurrentTime = new Date(serverTime).getTime();
    var elapsedTimeInSeconds = Math.floor((serverCurrentTime - serverStartTime) / 1000);
    var totalSeconds = totalHours * 3600;
    var remainingSeconds = totalSeconds - elapsedTimeInSeconds;
    return remainingSeconds > 0 ? remainingSeconds : 0;
  }

  // Function to start the timer
  function startTimer(remainingSeconds) {
    var timer = document.getElementById('timer');
    var timerInterval = setInterval(updateTimer, 1000); // Update every second

    function updateTimer() {
      var hours = Math.floor(remainingSeconds / 3600);
      var minutes = Math.floor((remainingSeconds % 3600) / 60);
      var seconds = remainingSeconds % 60;

      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      timer.innerHTML = hours + ':' + minutes + ':' + seconds;

      if (remainingSeconds <= 0) {
        timer.classList.add('expired');
        clearInterval(timerInterval);
      }

      remainingSeconds--;
    }

    updateTimer();
  }

  // Function to reset the timer
  function resetTimer() {
    clearInterval(timerInterval);
    document.getElementById('timer').innerHTML = "00:00:00"; // Reset timer display
  }

  // Check status every second when the page loads
  checkStatus();
});

</script>


<script>
  //timer script for ped enrollment
 $(document).ready(function(){
  function checkStatusPed() {
    $.ajax({
      url: '/ped/hour/check',
      method: 'GET',
      success: function(response) {
        if (response.ped_lunch === "lunched") {
          var remainingSeconds = calculateRemainingSeconds(response.start_time, response.server_time, response.hour);
          startTimer(remainingSeconds);
        } else if (response.ped_lunch === "stopped") {
          resetTimer();
        } else {
          // Continue checking every second if claim_lunch is neither "lunched" nor "stopped"
          setTimeout(checkStatus, 1000);
        }
      },
      error: function() {
        $('#ped_timer').text('Failed to load ped_timer.');
      }
    });
  }

  // Function to calculate remaining seconds
  function calculateRemainingSeconds(startTime, serverTime, totalHours) {
    var serverStartTime = new Date(startTime).getTime();
    var serverCurrentTime = new Date(serverTime).getTime();
    var elapsedTimeInSeconds = Math.floor((serverCurrentTime - serverStartTime) / 1000);
    var totalSeconds = totalHours * 3600;
    var remainingSeconds = totalSeconds - elapsedTimeInSeconds;
    return remainingSeconds > 0 ? remainingSeconds : 0;
  }

  // Function to start the timer
  function startTimer(remainingSeconds) {
    var ped_timer = document.getElementById('ped_timer');
    var timerInterval = setInterval(updateTimer, 1000); // Update every second

    function updateTimer() {
      var hours = Math.floor(remainingSeconds / 3600);
      var minutes = Math.floor((remainingSeconds % 3600) / 60);
      var seconds = remainingSeconds % 60;

      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      ped_timer.innerHTML = hours + ':' + minutes + ':' + seconds;

      if (remainingSeconds <= 0) {
        timer.classList.add('expired');
        clearInterval(timerInterval);
      }

      remainingSeconds--;
    }

    updateTimer();
  }

  // Function to reset the timer
  function resetTimer() {
    clearInterval(timerInterval);
    document.getElementById('ped_timer').innerHTML = "00:00:00"; // Reset timer display
  }

  // Check status every second when the page loads
  checkStatusPed();
});

</script>


<script>
  //timer script for retake
 $(document).ready(function(){
  function checkStatusRetake() {
    $.ajax({
      url: '/retake/hour/check',
      method: 'GET',
      success: function(response) {
        if (response.retake_lunch === "lunched") {
          var remainingSeconds = calculateRemainingSeconds(response.start_time, response.server_time, response.hour);
          startTimer(remainingSeconds);
        } else if (response.retake_lunch === "stopped") {
          resetTimer();
        } else {
          // Continue checking every second if claim_lunch is neither "lunched" nor "stopped"
          setTimeout(checkStatus, 1000);
        }
      },
      error: function() {
        $('#retake_timer').text('Failed to load retake_timer.');
      }
    });
  }

  // Function to calculate remaining seconds
  function calculateRemainingSeconds(startTime, serverTime, totalHours) {
    var serverStartTime = new Date(startTime).getTime();
    var serverCurrentTime = new Date(serverTime).getTime();
    var elapsedTimeInSeconds = Math.floor((serverCurrentTime - serverStartTime) / 1000);
    var totalSeconds = totalHours * 3600;
    var remainingSeconds = totalSeconds - elapsedTimeInSeconds;
    return remainingSeconds > 0 ? remainingSeconds : 0;
  }

  // Function to start the timer
  function startTimer(remainingSeconds) {
    var retake_timer = document.getElementById('retake_timer');
    var timerInterval = setInterval(updateTimer, 1000); // Update every second

    function updateTimer() {
      var hours = Math.floor(remainingSeconds / 3600);
      var minutes = Math.floor((remainingSeconds % 3600) / 60);
      var seconds = remainingSeconds % 60;

      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;
      seconds = seconds < 10 ? '0' + seconds : seconds;

      retake_timer.innerHTML = hours + ':' + minutes + ':' + seconds;

      if (remainingSeconds <= 0) {
        timer.classList.add('expired');
        clearInterval(timerInterval);
      }

      remainingSeconds--;
    }

    updateTimer();
  }

  // Function to reset the timer
  function resetTimer() {
    clearInterval(timerInterval);
    document.getElementById('retake_timer').innerHTML = "00:00:00"; // Reset timer display
  }

  // Check status every second when the page loads
  checkStatusRetake();
});

</script>

<!-- update profile image modal -->
<script>
document.getElementById('updateProfileBtn').onclick = function() {
  document.getElementById('updateProfileModal').style.display = 'block';
}

document.getElementsByClassName('close')[0].onclick = function() {
  document.getElementById('updateProfileModal').style.display = 'none';
}

window.onclick = function(event) {
  if (event.target == document.getElementById('updateProfileModal')) {
    document.getElementById('updateProfileModal').style.display = 'none';
  }
}
</script>


</body>
</html>
>>>>>>> 0f197e5e6821d6a3ae420e25197a08a25e64ae1c
