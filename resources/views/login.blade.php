<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>

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

  <link href="{{ asset('assets/css/login.css')}}" rel="stylesheet">

</head>
<body>



  <div class="popup-content" id="popup">

    <div class="login-container">
        <div class="error"> 
          @if(session('error'))        
            {{ session('error') }}
            @endif
        </div>
        <div class="eRequest">
       <strong class="erequest_self"> e-Request</strong> <br>
        <strong class=erequest_connexion>Connexion</strong>
       
      </div>
      <div class="login-form">

          <div class="avatar">
              <i class="fas fa-user fa-4x" ></i>
          </div>        
          <form  method="post" action="{{ route('login_post')}}">
            @csrf
              <div class="input-container">
                  <input type="email" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="input-container">
                  <input type="password" id="password" name="password" placeholder="Mot de passe" required>
              </div>
              <div class="register_items">
                <button type="submit" class="login_button">Se connecter</button>
                
              </div>
             <div class="register_items">
              <div class="forgot_password">
              <p>Mot de passe<a href="{{ route('forgot_password')}}"> oublié ?</a></p>  
              </div>

              <div>
                <button type="button" class="register_button" onclick="window.location.href='{{ route('register')}}'">Inscription</button>
              </div>
             </div>
          </form>
      </div>
      <div class="copyright">
        &copy; Copyright <strong>e-Request</strong>. All Rights Reserved
      </div>
  </div>
    
  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>
</body>
</html>

=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>

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

  <link href="{{ asset('assets/css/login.css')}}" rel="stylesheet">

</head>
<body>



  <div class="popup-content" id="popup">

    <div class="login-container">
        <div class="error"> 
          @if(session('error'))        
            {{ session('error') }}
            @endif
        </div>
        <div class="eRequest">

        CONNEXION <br>
        e-Request
      </div>
      <div class="login-form">

          <div class="avatar">
              <i class="fas fa-user fa-4x" ></i>
          </div>        
          <form  method="post" action="{{ route('login_post')}}">
            @csrf
              <div class="input-container">
                  <input type="email" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="input-container">
                  <input type="password" id="password" name="password" placeholder="Mot de passe" required>
              </div>
              <div class="register_items">
                <button type="submit" class="login_button">Se connecter</button>
                
              </div>
             <div class="register_items">
              <div class="forgot_password">
              <p>Mot de passe<a href="{{ route('forgot_password')}}"> oublié ?</a></p>  
              </div>

              <div>
                <button type="button" class="register_button" onclick="window.location.href='{{ route('register')}}'">Inscription</button>
              </div>
             </div>
          </form>
      </div>
      <div class="copyright">
        &copy; Copyright <strong>e-Request</strong>. All Rights Reserved
      </div>
  </div>
    
  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>
</body>
</html>

>>>>>>> 0f197e5e6821d6a3ae420e25197a08a25e64ae1c
