<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mauvais remplissage du formulaire</title>
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
      Veuillez bien renseigner les champs du formulaire et réessayer.
    </p>
    <button class="popup-button" onclick="window.location.href='{{ route('dup_transcript_form')}}'">OK</button>
  </div>

  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>
</body>
</html>
