<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Payement des frais de demande de cue / bulletin</title>
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
  {{-- <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/my_style1.css')}}" rel="stylesheet"> --}}
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #fff;
    }

    .popup-content {
      position: absolute;
      bottom: 150px;
      height: 300px;
      width: 350px;
      display: none;
      background: #fff;
      color:black;
      font-size: 20px;
      border-radius: 8px;
      /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); */
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);

      text-align: center;
      align-items:center;
      animation: fadeIn 1s ease-in-out;
      margin: 10px;
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
      position: relative;
      top: -80px;
      font-size: 130px;
      width: 100px;
      color: #28a745; 
      background-color:  white;
      border-radius: 200%

    }
    .content{
      position: absolute;
      top:100px;
      margin:10px;
      display:block
    }

    .popup-button {
      background:  #05138fde;
      border-radius: 20px;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .popup-button:hover {
      background: #0056b3; 
    }

  </style>


</head>

<body>
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon"></i>
    <p style="color:black" class = "content">
      En cliquant sur PAYER vous accepter les termes de paiement des frais de demande de bulletin.  <!-- Vous pouvez désormais vous <a href="login.html" style="color: #333; font-weight: bold;">connecter</a> avec votre Nouveau
      mot de passe -->
    </p>
    <form action="{{('payment_sucess')}}" method="GET" style="margin-left: 30px;">
        <script
          src="https://checkout.fedapay.com/js/checkout.js"
          data-public-key="pk_live_NVw62EiQ_Yu6mvPq13vuUapq"
          data-button-text="PAYER"
          data-button-class="button-class"
          data-transaction-amount="100"
          data-transaction-description="Paiement des frais de demande de cue"
          data-currency-iso="XOF"   
          data-widget-description="Facilement et simplement, réclamez et faites vos demande d'acte academique  en ligne"
          data-widget-image="E:\P_Projects\dissertation-main\public\dissertation_UI\assets\img\logo.jpeg"
          data-widget-title="eGraC">
        </script>
      </form>
  </div>

  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>
</body>

</html>





