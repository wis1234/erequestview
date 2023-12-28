<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>gestion des réclamations de notes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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


    <!-- Ajouter le style pour la boîte de pop-up -->
    <style>
      /* Style pour la boîte de pop-up */
      .popup {
        display: none;
        position: fixed;
        top: 0;
        right: 100px;
        width: 100px;
        height: 100%;
        /* background-color: rgba(255, 255, 255, 0.9); */
        z-index: 9999;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

      }
  
      .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
  
      .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size:x-large;
        cursor: pointer;
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down" style="margin-top: 30px;">Bienvenue <span></span></h2>
            <p data-aos="fade-up">La FASEG à votre service autrement</p>
            <!-- <p data-aos="fade-up"> </p> -->

            <p data-aos="fade-up">Désormais, vos réclamations de note et demande d'actes academiques en toute simplicité et en toute facilité</p>

            <div id="popup" class="popup">
              <div class="popup-content">
                <span class="close-popup" onclick="closePopup()">&times;</span>
                <div id="popup-text"></div>
              </div>
            </div>

            <a data-aos="fade-up" data-aos-delay="200" href="{{ route('register')}}" class="btn-get-started">Commencer</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->


{{-- additional informations to clarify the user index page --}}

<!-- ======= Additonal content begining ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 posts-list">

      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
            {{-- <span class="post-date">December 12</span> --}}
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Facilitez vos procédures académiques</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                {{-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span> --}}
              </div>
              {{-- <span class="px-3 text-black-50">/</span> --}}
              <div class="d-flex align-items-center">
                {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span> --}}
              </div>
            </div>

            <p>
              Simplifiez vos procédures académiques en gérant facilement vos réclamations, notes et demandes d'actes en ligne. Profitez d'une plateforme intuitive pour une expérience simplifiée.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>En savoir plus</span><i
                class="bi bi-arrow-right"></i></a>

          </div>

        </div>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
            {{-- <span class="post-date">March 19</span> --}}
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Gérez vos notes et réclamations en toute simplicité</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                {{-- <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span> --}}
              </div>
              {{-- <span class="px-3 text-black-50">/</span> --}}
              <div class="d-flex align-items-center">
                {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span> --}}
              </div>
            </div>

            <p>
              Gérez efficacement vos notes et réclamations académiques en ligne. Simplifiez le processus et accédez rapidement à toutes vos informations académiques.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>En savoir plus</span><i
                class="bi bi-arrow-right"></i></a>

          </div>

        </div>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
            {{-- <span class="post-date">June 24</span> --}}
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Recevez rapidement vos documents académiques</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                {{-- <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span> --}}
              </div>
              {{-- <span class="px-3 text-black-50">/</span> --}}
              <div class="d-flex align-items-center">
                {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span> --}}
              </div>
            </div>

            <p>
              Obtenez rapidement vos documents académiques en quelques clics. Simplifiez vos demandes pour une gestion aisée de votre parcours académique.
            </p>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Explorer davantage</span><i
                class="bi bi-arrow-right"></i></a>

          </div>

        </div>
      </div><!-- End post list item -->

      <!-- Repéter le même schéma pour d'autres éléments, si nécessaire -->

    </div><!-- End blog posts list -->

    <!-- <div class="blog-pagination">
      <ul class="justify-content-center">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div> -->
    
    <!-- End blog pagination -->

  </div>
</section><!-- End additional content -->




    {{-- additional content --}}

        <!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
      <div class="col-lg-6 img-bg" style="background-image: url(assets/img/hero-carousel/use2.png);" data-aos="zoom-in"
        data-aos-delay="100"></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Facilitez vos démarches académiques avec notre plateforme</h3>
        <p>Gérez vos études de manière intuitive. Profitez de fonctionnalités simples pour vos réclamations, notes, et demandes académiques en ligne.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-easel flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Gestion simplifiée</a></h4>
            <p>Accédez facilement à vos informations et gérez vos démarches académiques en toute simplicité pour une expérience sans tracas.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-patch-check flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Fiabilité assurée</a></h4>
            <p>Nos services vous offrent une fiabilité totale pour garantir la sécurité et la confidentialité de vos données académiques.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Accessibilité optimale</a></h4>
            <p>Profitez d'une plateforme facile d'accès vous permettant de gérer vos démarches académiques de n'importe où et à tout moment.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Assistance personnalisée</a></h4>
            <p>Notre équipe est disponible pour vous offrir un support personnalisé et répondre à toutes vos questions académiques.</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>
</section><!-- End Alt Services Section -->

       <!-- ======= Alt Services Section 2 ======= -->
<section id="alt-services-2" class="alt-services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Facilitez vos démarches académiques</h3>
        <p>Optimisez la gestion de vos demandes académiques et de réclamations. Obtenez rapidement vos bulletins, attestations et diplômes, et demandez facilement des duplicatas en cas de besoin.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-easel flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Demande de réclamation</a></h4>
            <p>Effectuez facilement des demandes de réclamation en ligne pour résoudre tout problème lié à vos résultats académiques.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-patch-check flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Bulletins et attestations</a></h4>
            <p>Recevez vos bulletins et attestations officielles rapidement et en toute simplicité via notre plateforme en ligne sécurisée.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Demande de diplôme</a></h4>
            <p>Initiez votre demande de diplôme officiel en ligne pour obtenir rapidement votre document attestant de votre réussite académique.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Duplicatas et attestations</a></h4>
            <p>Demandez facilement des duplicatas de vos diplômes ou attestations en cas de perte ou de besoin supplémentaire.</p>
          </div>
        </div><!-- End Icon Box -->
      </div>

      <div class="col-lg-6 img-bg" style="background-image: url(assets/img/hero-carousel/use1.png);" data-aos="zoom-in"
        data-aos-delay="100"></div>
    </div>

  </div>
</section><!-- End Alt Services Section 2 -->




   <!-- ======= Service Details Section ======= -->
<section id="service-details" class="service-details">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="services-list">
          <a href="#" class="active">Communication</a>
          <a href="#">Recherche</a>
          <a href="#">Développement académique</a>
          <a href="#">Innovation pédagogique</a>
          <a href="#">Partenariats</a>
        </div>

        <h4>Facilitez les échanges académiques</h4>
        <p>Optimisez les canaux de communication pour favoriser les échanges entre étudiants, professeurs et personnels administratifs. Une communication transparente et efficace contribue à renforcer l'environnement académique.</p>
      </div>

      <div class="col-lg-8">
        <img src="{{ asset('assets/img/use1.png') }}" alt="" class="img-fluid services-img">
        <h3>Améliorer les interactions pour une meilleure expérience académique</h3>
        <p>
          Facilitez l'accès à l'information et favorisez les interactions entre les membres de la communauté académique. Une communication efficace renforce l'apprentissage, la recherche et la collaboration.
        </p>
        <ul>
          <li><i class="bi bi-check-circle"></i> <span>Créer des canaux de communication dédiés à chaque filière ou promotion.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Faciliter les échanges pour des projets de recherche interdisciplinaires.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Promouvoir l'innovation pédagogique à travers des communications ciblées.</span></li>
        </ul>
        <p>
          Une communication fluide et ouverte contribue à l'épanouissement académique, favorise la créativité et renforce le sentiment d'appartenance à une communauté dynamique.
        </p>
        <p>
          Encourager les partenariats et les collaborations entre étudiants, professeurs et institutions externes renforce l'environnement académique et favorise le partage de connaissances ainsi que la croissance collective.
        </p>
        
        <!-- Paragraphe du doyen -->
        <div class="dean-message">
          <h4>Message du Doyen</h4>
          <p>Chers étudiants, En cette nouvelle année académique, je tiens à souligner l'importance cruciale de la communication au sein de notre communauté académique à la FASEG. Nous croyons fermement que la qualité des échanges et des interactions façonne non seulement votre expérience d'apprentissage, mais aussi la dynamique de notre faculté. C'est pourquoi je vous encourage vivement à participer activement aux différents canaux de communication que nous mettons à votre disposition. (...)</p>
          <p>Je vous remercie pour votre attention et je vous encourage à être actifs dans nos échanges académiques. Bien cordialement, [Le Nom du Doyen] Doyen de la FASEG</p>
        </div><!-- End Dean's Message -->
      </div>

    </div>

  </div>
</section><!-- End Service Details Section -->



 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

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


  <!-- Code JavaScript pour la boîte de pop-up -->
  {{-- <script>
    // Fonction pour afficher la boîte de pop-up
    function showPopup() {
      var popup = document.getElementById('popup');
      var popupText = document.getElementById('popup-text');
      popup.style.display = 'block';

      // Texte à afficher progressivement
      var textToDisplay = "Plus besoin de vous déplacer pour soumettre vos dossiers de réclamation et de demande d'actes académique";
      var currentIndex = 0;
      var interval = setInterval(function() {
        if (currentIndex <= textToDisplay.length) {
          popupText.textContent = textToDisplay.substring(0, currentIndex);
          currentIndex++;
        } else {
          clearInterval(interval);
          setTimeout(closePopup, 3000); // Ferme la boîte après 3 secondes
        }
      }, 100); // Change le texte toutes les 100 millisecondes
    }

    // Fonction pour fermer la boîte de pop-up
    function closePopup() {
      var popup = document.getElementById('popup');
      popup.style.display = 'none';
    }

    // Afficher la boîte de pop-up après le chargement de la page
    window.addEventListener('load', showPopup);
  </script> --}}
</body>

</html>