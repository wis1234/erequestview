<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Erreur de connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Add CSS for the popup -->
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
      height: 380px;
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
      top: -75px;
      font-size: 110px;
      width: 100px;
      color: #28a745; 
      background-color:  white;
      border-radius: 200%

    }
    .content{
      position: relative;
      top:-40px;
      margin:10px;
      display:block;
      font-size:20px;
      /* font-weight: bolder; */
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
  <i class="bi bi-x-circle text-danger popup-icon"></i>
    <p style="color:black" class = "content">
      Une erreur inattendue est survenue; veuillez essayer de vous connecter à nouveau.   </p>
    <button class="popup-button" onclick="window.location.href='{{ route('index')}}'">OK</button>
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
  <title>Erreur de connexion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Add CSS for the popup -->
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
      height: 250px;
      width: 200px;
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
      font-size: 80px;
      color: #dc3545; /* Red color for error */
    }

    .popup-button {
      background: #007bff; /* Blue color for the button */
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .popup-button:hover {
      background: #0056b3; /* Darker blue color on hover */
    }
  </style>
</head>
<body>
  <div class="popup-content" id="popup">
    {{-- <i class="bi bi-check-circle popup-icon" style="font-size: xx-large;">😤Error!</i> --}}
    <i class="bi bi-x-circle text-danger popup-icon" style="font-size: xx-larger;"></i>

    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      Une erreur inattendue est survenue; veuillez essayer de vous connecter à nouveau.   </p>
    <button class="popup-button" onclick="window.location.href='{{ route('index')}}'">OK</button>
  </div>

  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>
</body>
</html>
>>>>>>> 0f197e5e6821d6a3ae420e25197a08a25e64ae1c
