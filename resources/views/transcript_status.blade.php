<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Etat de traitement des demandes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


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
      height: 80%;
      width: 95%;
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
      color: green
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

  


/* New styles for the report format */
/* .dual-container {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .dual-container .report {
      width: calc(50% - 10px); 
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      border-radius: 8px;
      padding: 20px;
      background-color: #fff;
    } */


        /* New styles for the report format */
        .report {
      width: 80%; /* Adjust width as needed */
      margin: 0 auto;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      border-radius: 8px;
      padding: 20px;
      background-color: #fff;
    }
  </style>
</head>
<body>
  <div class="popup-content " id="popup">
    <i class="bi bi-check-circle popup-icon" style="font-size: large; font-weight:bold; color: blue">ETAT DE TRAITEMENT DES DEMANDES DE BULLETIN</i>
    <br><br>

    <!-- Display the elements in two side-by-side divs with shadow effect -->
    <div class="dual-container">

      @if ($userTranscripts->isEmpty())
      <p>Aucune demande de bulletin n'a été enrégistrée</p>
    @else
      @foreach($userTranscripts as $transcript)
        @if ($transcript->user_id === auth()->user()->id && $transcript->exam_type === 'current_semester')
          <p>You have already requested your transcript for this semester.</p>
        @else
          <div class="report">
            <div class="report-item">
              {{-- Display transcript details --}}
              <p><strong>Matricule:</strong> {{ $transcript->mat }}</p>
              <p><strong>Filière:</strong> {{ $transcript->field }}</p>
              <p><strong>spécialité:</strong> {{ $transcript->speciality }}</p>
              <p><strong>Année académique:</strong> {{ $transcript->ac_year }}</p>
              <p><strong>Niveau d'étude:</strong> {{ $transcript->ac_level }}</p>
              <p><strong>Semestre:</strong> {{ $transcript->exam_type }}</p>
              <p><strong>Date de demande:</strong> {{ $transcript->created_at }}</p>
              <p><strong>Observation:</strong> {{ $transcript->feedback }}</p>
              <p><strong>Status:</strong>  {{ $transcript->status }}</p>
            </div>
          </div>
        @endif
      @endforeach
    @endif

      {{-- <div class="report">
        <!-- Second div for more elements or another section -->
      </div> --}}



<br><br>
      <i class="bi bi-check-circle popup-icon" style="font-size: large; font-weight:bold; color: blue">ETAT DE TRAITEMENT DES DEMANDES DE  DUPLICATA BULLETIN</i>
<br><br>
      <!-- Display the transcripts from DupTranscript model -->
    @if ($userDupTranscripts->isEmpty())
    <p>Aucune demande de duplicata de bulletin n'a été enrégistrée</p>
@else
    @foreach($userDupTranscripts as $dup_transcript)
        @if ($dup_transcript->user_id === auth()->user()->id && $dup_transcript->exam_type === 'current_semester')
            <p>You have already requested your duplicate transcript for this semester.</p>
        @else
            <div class="report">
                <div class="report-item">
                    {{-- Display duplicate transcript details --}}
                    <p><strong>Matricule:</strong> {{ $dup_transcript->mat }}</p>
                    <p><strong>Filière:</strong> {{ $dup_transcript->field }}</p>
                    <p><strong>spécialité:</strong> {{ $dup_transcript->speciality }}</p>
                    <p><strong>Année académique:</strong> {{ $dup_transcript->ac_year }}</p>
                    <p><strong>Niveau d'étude:</strong> {{ $dup_transcript->ac_level }}</p>
                    <p><strong>Semestre:</strong> {{ $dup_transcript->exam_type }}</p>
                    <p><strong>Date de demande:</strong> {{ $dup_transcript->created_at }}</p>
                    <p><strong>Observation:</strong> {{ $dup_transcript->feedback }}</p>
                    <p><strong>Status:</strong> {{ $dup_transcript->status }}</p>
                </div>
            </div>
        @endif
    @endforeach
@endif


    </div>
  </div>





  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };


    
          // Show scroll hint on small and medium screens
          if (window.innerWidth <= 768) {
        const scrollHint = document.querySelector('.scroll-hint');
        scrollHint.style.display = 'block';

        // Automatically hide the scroll hint after 5 seconds
        setTimeout(function () {
          scrollHint.style.display = 'none';
        }, 5000);
      }
    

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
