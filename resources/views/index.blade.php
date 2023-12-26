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

                <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span> --}}
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span> --}}
                  </div>
                </div>

                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                  laboriosam eius aut nostrum quidem aliquid dicta.
                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
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

                <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span> --}}
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span> --}}
                  </div>
                </div>

                <p>
                  Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo
                  libero rerum voluptatem pariatur nam.
                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
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

                <h3 class="post-title">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span> --}}
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span> --}}
                  </div>
                </div>

                <p>
                  Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis
                  et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt="">
                {{-- <span class="post-date">August 05</span> --}}
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius
                  exercitationem.</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span> --}}
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span> --}}
                  </div>
                </div>

                <p>
                  Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum
                  enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-5.jpg" class="img-fluid" alt="">
                {{-- <span class="post-date">September 17</span> --}}
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Accusamus quaerat aliquam qui debitis facilis consequatur</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-person"></i> <span class="ps-2">John Parker</span> --}}
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span> --}}
                  </div>
                </div>

                <p>
                  In itaque assumenda aliquam voluptatem qui temporibus iusto nisi quia. Autem vitae quas aperiam
                  nesciunt mollitia tempora odio omnis. Ipsa odit sit ut amet necessitatibus. Quo ullam ut corrupti
                  autem consequuntur totam dolorem.
                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-6.jpg" class="img-fluid" alt="">
                {{-- <span class="post-date">December 07</span> --}}
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Distinctio provident quibusdam numquam aperiam aut</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-person"></i> <span class="ps-2">Julia White</span> --}}
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span> --}}
                  </div>
                </div>

                <p>
                  Expedita et temporibus eligendi enim molestiae est architecto praesentium dolores. Illo laboriosam
                  officiis quis. Labore officia quia sit voluptatem nisi est dignissimos totam. Et voluptate et
                  consectetur voluptatem id dolor magni impedit. Omnis dolores sit.
                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

        </div><!-- End blog posts list -->

        {{-- <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div> --}}
        
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
                <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus
                  laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-easel flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                      non provident</p>
                  </div>
                </div><!-- End Icon Box -->
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-patch-check flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque</p>
                  </div>
                </div><!-- End Icon Box -->
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                    <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus
                      aut eligendi omnis</p>
                  </div>
                </div><!-- End Icon Box -->
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Tride clov</a></h4>
                    <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                      Et eligendi</p>
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
                <h3>Non quasi officia eum nobis et rerum epudiandae rem voluptatem</h3>
                <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni
                  sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-easel flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                      non provident</p>
                  </div>
                </div><!-- End Icon Box -->
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-patch-check flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque</p>
                  </div>
                </div><!-- End Icon Box -->
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                    <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus
                      aut eligendi omnis</p>
                  </div>
                </div><!-- End Icon Box -->
    
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4><a href="" class="stretched-link">Tride clov</a></h4>
                    <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                      Et eligendi</p>
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
              <a href="#" class="active">Remodeling</a>
              <a href="#">Construction</a>
              <a href="#">Product Management</a>
              <a href="#">Repairs</a>
              <a href="#">Design</a>
            </div>

            <h4>Enim qui eos rerum in delectus</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non
              occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
          </div>

          <div class="col-lg-8">
            <img src="{{ asset('assets/img/use1.png') }}" alt="" class="img-fluid services-img">
            <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
            <p>
              Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque
              consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui
              omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span>
              </li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            </ul>
            <p>
              Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste
              veniam repellat odit. Aut pariatur itaque nesciunt fuga.
            </p>
            <p>
              Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia
              doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet
              velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum.
              Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto
              ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
            </p>
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