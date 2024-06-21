<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Etat de traitement des demandes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ojuju:wght@200..800&family=Open+Sans:wght@500&family=Rock+3D&family=Rubik+Gemstones&display=swap" rel="stylesheet">
  {{-- <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet"> --}}


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
      /* font-family: Chakra Petcha ; */
    }
    .signature-container{
      display: none !important;
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
    .dual-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .report {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      border-radius: 8px;
      padding: 20px;
      background-color: #fff;
      width: 280px;
    }

    @media only screen and (min-width: 600px) {
      .report {
        width: auto;
      }
    }

    /* Styles for the table */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
      /* Titres en gras */
    }

    .bold {
      font-weight: bold;
    }
 

    /* Styles for search input */
    .search-container {
      margin-bottom: 20px;
    }

    .search-input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }

    /* Styles for no data message */
    .no-data {
      display: none;
      font-size: 20px;
      margin-top: 20px;
    }

    .no-data.show {
      display: block;
    }

    .header {
      display: none !important;
    }

    @media print {
      
      .pdf_hidden, hr{
        display: none !important;
      }
      /* page header on printed sheet */

      .header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      text-align: center;
      background-color: #fff;
      /* border-bottom: 1px solid #000; */
      padding: 10px;
      font-size: 18px;
      font-weight: bold;
      display: block !important;
    }
          .report::after {
        content: "FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIFACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIFACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIFACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIFACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIv FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI  FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIv FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI  FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIv FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI  FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVIv FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI FACULTE DES SCIENCES ECONOMIQUES ET DE GESTIONS DE L'UNIVERSITE D'ABOMEY-CALAVI";
        font-size: 10px; /* Taille du texte du filigrane */
        color: rgba(228, 92, 92, 0.1); /* Couleur du filigrane */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%; /* Largeur du filigrane pour couvrir toute la largeur de la page */
        text-align: center; /* Centrer le texte horizontalement */
        opacity: 0.9; /* Opacité du filigrane */
        z-index: 9999;
        pointer-events: none;

        
    }

    .dual-container {
    display: grid;
    justify-content: center;
    align-items: center;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }

  .report {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    padding: 20px;
    background-color: #fff;
    width: auto; /* Réglage de la largeur automatique pour s'adapter au contenu */
    max-width: 100%; /* Largeur maximale pour éviter le débordement */
  }

  .report-item {
    margin-bottom: 20px; /* Espacement entre les rapports dans le conteneur */
  }

  .popup-content {
    display: block !important; /* Affichage forcé du contenu de la fenêtre contextuelle */
    height: auto !important; /* Hauteur automatique pour le contenu */
    width: 100% !important; /* Largeur maximale pour couvrir la page */
    padding: 20px !important; /* Espacement interne pour le contenu de la fenêtre contextuelle */
  }

  .popup-button {
    display: none !important; /* Cacher le bouton "Imprimer" dans la fenêtre contextuelle */
  }
    

  .strong-items {
    display: none !important;
  }

  /* Hide the search input */
  #searchDupTranscript {
    display: none !important;
  }

  /* Hide the footers */
  footer {
    display: none !important;
  }

  /* Hide the headers */
  header {
    display: none !important;
  }

  /* Hide the head section completely */
  head {
    display: none !important;
  }

  /* Hide any other elements you don't want to print */
  #searchTranscript {
    display: none !important;
  }

  .pBtn{
  display: none !important;
}

.signature-container {
        position: fixed;
        bottom: 50px; /* Adjust the position as needed */
        left: 50%;
        transform: translateX(-50%);
        display: block !important;
        font-weight: bold;
        font-size: 20px;
        
      }

      .signature {
        width: 200px; /* Adjust the width of the signature image */
        height: auto; /* Maintain aspect ratio */
      }
      
 
}


 </style>
</head>
<body>

<div class="popup-content " id="popup">
  <div class="header">
    RECEPISSE DE DEMANDE D'ACTE ACADEMIQUE
    <br><br><br><br>
    @if(count($userTranscripts) > 0)
    {{auth()->user()->firstname ." ". auth()->user()->lastname  }}
@endif
     
</div>


<div class="service-container no-print">
      <div class="service-title">
        <div class="user"  > 
   
        <div style="font-size:35px; font-weight:bold; align-item:center">HISTORIQUE</div>
        <div id="popup-text" style="font-size: 20px; font-weight:bold; text-transform:uppercase"></div>  
     
          <div class="small-title">
              Etat de traitement des demandes de cue<br><br>
              <p style="font-weight: 100; color:black">
             Veuillez consulter ci-dessous l'état de traitement des demande de cue.
              </p>

          </div>
  
      </div>
       
      </div>


  <!-- Pour la recherche des demandes de bulletin -->
  {{-- <input type="text" id="searchTranscript" placeholder="Rechercher dans les demandes de bulletin..."> --}}
  <div class="search-container"><br><br><br>

    <div class="input-group">
        
        <input class="form-control border-end-0 border rounded-pill search-input" type="search" value="ADR" id="searchTranscript" >
 
    </input> 
        <span class="input-group-append">
        </span>
    </div>

    </div>
  <br><br>
  <div>
    <button class="btn btn-primary pdf_hidden" id="pdf-btn">Mes demandes</button><br>
  </div><br>
  <hr>
  <!-- Display the elements in two side-by-side divs with shadow effect -->
  <div class="dual-container" id="transcriptContainer">
    @if ($userTranscripts->isEmpty())
    <p> <strong>Aucune demande de bulletin n'a été enregistrée</strong></p>
    @else
    @foreach($userTranscripts as $transcript)
    @if ($transcript->user_id === auth()->user()->id && $transcript->exam_type === 'current_semester')
    <p>You have already requested your transcript for this semester.</p>
    @else
    <div class="report">
      <div class="report-item">
        {{-- Display transcript details --}}
        <table>
          <tr>
              <th> DEMANDE DE CUE N°</th>
              <th>ADR{{ $transcript->id }}</th>
          </tr>
          <tr>
              <td class="bold">Matricule:</td>
              <td>{{ $transcript->mat }}</td>
          </tr>
          <tr>
            <td class="bold">Nom:</td>
            <td>{{ $transcript->lastname }}</td>
        </tr>
        <tr>
          <td class="bold">Prénom:</td>
          <td>{{ $transcript->firstname }}</td>
      </tr>


          <tr>
              <td class="bold">Filière:</td>
              <td>{{ $transcript->field }}</td>
          </tr>
          <tr>
              <td class="bold">Spécialité:</td>
              <td>{{ $transcript->speciality }}</td>
          </tr>
          <tr>
              <td class="bold">Année académique:</td>
              <td>{{ $transcript->ac_year }}</td>
          </tr>
          <tr>
              <td class="bold">Niveau d'étude:</td>
              <td>{{ $transcript->ac_level }}</td>
          </tr>
          <tr>
              <td class="bold">Semestre:</td>
              <td>{{ $transcript->exam_type }}</td>
          </tr>
          <tr>
              <td class="bold">Date de demande:</td>
              <td>{{ $transcript->created_at }}</td>
          </tr>
          <tr>
              <td class="bold">Date de retrait:</td>
              <td>
                  {{ $transcript->status !== 'RETIRE' ? 'indisponible' : $transcript->updated_at }}
              </td>
          </tr>
          <tr>
              <td class="bold">Observation:</td>
              <td>
                  @if ($transcript->feedback == "")
                  Aucune observation pour le moment
                  @else
                  {{ $transcript->feedback }}
                  @endif
              </td>
          </tr>
          <tr>
              <td class="bold">Status:</td>
              <td>
                  <span style="font-weight: bold; color:
                    @switch($transcript->status)
                    @case('REJETE')
                    red;
                    @break
                    @case('ACCEPTE')
                    green;
                    @break
                    @case('RETIRE')
                    blue; /* or any other color you want for RETIRE */
                    @break
                    @default
                    black; /* or any default color */
                    @endswitch
                    ">
                    @switch($transcript->status)
                    @case('REJETE')
                    REJETE <i class="fas fa-times-circle"></i>
                    @break
                    @case('ACCEPTE')
                    ACCEPTE <i class="fas fa-check-circle"></i>
                    @break
                    @case('RETIRE')
                    RETIRE <i class="fas fa-check-circle"></i>
                    @break
                    @default
                    {{ $transcript->status }}
                    @endswitch
                  </span>
              </td>
          </tr>

          <tr class="pBtn">
            <td></td>
            <td colspan="2" >
                <button class="popup-button imprimer-btn">Imprimer</button>
                
            </td>
        </tr>
      </table>
      
      </div>
    </div>

    @endif
    @endforeach
    @endif
  </div><br><br>
  <hr>


  <form id="pdf-form" action="{{ route('generate.pdf') }}" method="POST" style="display: none;">
    @csrf
    <textarea name="content" id="content">
        <div class="dual-container" id="transcriptContainer">
            @if ($userTranscripts->isEmpty())
                <p><strong>Aucune demande de bulletin n'a été enregistrée</strong></p>
            @else
            <div class="page-title"> &nbsp&nbsp&nbsp&nbsp&nbspRECAPITULATIF DES DEMANDES DE CERTIFICAT D'UNITE D'ENSEIGNEMENT
              <hr>
              <br>

               <div style="
                  font-weight:bold;
                  display:flex;
                  justify-content:center;
                  align-items:center;" > {{ $transcript->lastname }} {{ $transcript->firstname }} 
                <br>
               
              </div> 
             
            </div> 
            
            
                @foreach($userTranscripts as $transcript)
                    @if ($transcript->user_id === auth()->user()->id && $transcript->exam_type === 'current_semester')
                        <p>You have already requested your transcript for this semester.</p>
                    @else

                            <div class="report">
                                <div class="report-item">
                                    {{-- Display transcript details --}}
                                    <page>
                                    <table style="border-collapse: collapse; border-spacing: 10px; width: 100%;">
                                      <tr>
                                          <th colspan="2" style="border: 1px solid black; text-align: center; font-weight: bold;">DEMANDE DE CUE N°</th>
                                          <td colspan="2" style="border: 1px solid black; text-align: center;">ADR{{ $transcript->id }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Matricule:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->mat }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Nom:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->lastname }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Prénom:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->firstname }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Filière:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->field }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Spécialité:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->speciality }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Année académique:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->ac_year }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Niveau d'étude:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->ac_level }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Semestre:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->exam_type }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Date de demande:</td>
                                          <td style="border: 1px solid black;">{{ $transcript->created_at }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Date de retrait:</td>
                                          <td style="border: 1px solid black;">
                                              {{ $transcript->status !== 'RETIRE' ? 'indisponible' : $transcript->updated_at }}
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Observation:</td>
                                          <td colspan="3" style="border: 1px solid black;">
                                              @if ($transcript->feedback == "")
                                                  Aucune observation pour le moment
                                              @else
                                                  {{ $transcript->feedback }}
                                              @endif
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Status:</td>
                                          <td colspan="3" style="border: 1px solid black;">
                                              <span style="font-weight: bold; color:
                                                  @switch($transcript->status)
                                                      @case('REJETE')
                                                          red;
                                                          @break
                                                      @case('ACCEPTE')
                                                          green;
                                                          @break
                                                      @case('RETIRE')
                                                          blue;
                                                          @break
                                                      @default
                                                          black;
                                                  @endswitch
                                              ">
                                                  @switch($transcript->status)
                                                      @case('REJETE')
                                                          REJETE <i class="fas fa-times-circle"></i>
                                                          @break
                                                      @case('ACCEPTE')
                                                          ACCEPTE <i class="fas fa-check-circle"></i>
                                                          @break
                                                      @case('RETIRE')
                                                          RETIRE <i class="fas fa-check-circle"></i>
                                                          @break
                                                      @default
                                                          {{ $transcript->status }}
                                                  @endswitch
                                              </span>
                                          </td>
                                      </tr>
                                  </table>
                                </page>
                                    <br> <!-- Add a line break for spacing between tables -->
                                </div>
                            </div>
                       
                    @endif
                @endforeach
            @endif
        </div>
    </textarea>
</form>


  

  <!-- No data message -->
  <div class="no-data" id="noDataMessage">
    <i class="fas fa-info-circle"></i> NO DATA FOUND
  </div>
  {{-- <div class="signature-container">
    Chef service informatique
    <br><br><br>
    Mme Inès Nadège DIDAGBE
  </div> --}}

  <!-- Title for the second grid -->
  <!-- <div class="strong-items">
    <i class="bi bi-check-circle popup-icon" style="font-size: 30px; font-family: Rubik Gemstones, system-ui;
    font-weight: 400; font-style: normal; font_style:normal; margin:5px; font-weight:bold; color: gray">ETAT DE TRAITEMENT DES DEMANDES DE DUPLICATA CUE</i>
  </div> -->
  <br><br>
  <!-- <div>
    <button class="btn btn-primary pdf_hidden" id="dup_pdf-btn">Download PDF</button>
  </div><br>
  <hr> -->

  <div class="search-container">

    <div class="input-group">
        
        <input class="form-control border-end-0 border rounded-pill search-input" type="search" id="searchDupTranscript" >
 
    </input> 
        <span class="input-group-append">
        </span>
    </div>

    </div>
  <!-- Pour la recherche des demandes de duplicata de bulletin -->
  {{-- <input type="text" id="searchDupTranscript" placeholder="Rechercher dans les demandes de duplicata de bulletin..."> --}}
  <br><br>
  <!-- Second grid -->
  <!-- <div class="dual-container" id="dupTranscriptContainer">

       Display the transcripts from DupTranscript model 
      @if ($userDupTranscripts->isEmpty())
      <p> <strong> Aucune demande de duplicata de bulletin n'a été enregistrée </strong></p>
      @else
      @foreach($userDupTranscripts as $dup_transcript)
      @if ($dup_transcript->user_id === auth()->user()->id && $dup_transcript->exam_type === 'current_semester')
      <p>You have already requested your duplicate transcript for this semester.</p>
      @else
      <div class="report">
        <div class="report-item">
          <table>
            <tr>
              <th>DUPLICATA CUE N°</th>
              <th>ADR{{ $dup_transcript->id }}</th>
          </tr>
            <tr>
                <td>Matricule:</td>
                <td>{{ $dup_transcript->mat }}</td>
            </tr>
            <tr>
              <td class="bold">Nom:</td>
              <td>{{ $dup_transcript->lastname }}</td>
          </tr>
          <tr>
            <td class="bold">Prénom:</td>
            <td>{{ $dup_transcript->firstname }}</td>
        </tr>
            <tr>
                <td>Filière:</td>
                <td>{{ $dup_transcript->field }}</td>
            </tr>
            <tr>
                <td>Spécialité:</td>
                <td>{{ $dup_transcript->speciality }}</td>
            </tr>
            <tr>
                <td>Année académique:</td>
                <td>{{ $dup_transcript->ac_year }}</td>
            </tr>
            <tr>
                <td>Niveau d'étude:</td>
                <td>{{ $dup_transcript->ac_level }}</td>
            </tr>
            <tr>
                <td>Semestre:</td>
                <td>{{ $dup_transcript->exam_type }}</td>
            </tr>
            <tr>
                <td>Date de demande:</td>
                <td>{{ $dup_transcript->created_at }}</td>
            </tr>
            <tr>
                <td>Date de retrait:</td>
                <td>
                    {{ $dup_transcript->status !== 'RETIRE' ? 'indisponible' : $dup_transcript->updated_at }}
                </td>
            </tr>
            <tr>
                <td>Observation:</td>
                <td>
                    @if ($dup_transcript->feedback == "")
                    Aucune observation pour le moment
                    @else
                    {{ $dup_transcript->feedback }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>
                    <span style="font-weight: bold; color: 
                    @switch($dup_transcript->status)
                    @case('REJETE')
                    red;
                    @break
                    @case('ACCEPTE')
                    green;
                    @break
                    @case('RETIRE')
                    blue; /* or any other color you want for RETIRE */
                    @break
                    @default
                    black; /* or any default color */
                    @endswitch
                    ">
                    @switch($dup_transcript->status)
                    @case('REJETE')
                    REJETE <i class="fas fa-times-circle"></i>  Replace with appropriate icon class for rejection 
                    @break
                    @case('ACCEPTE')
                    ACCEPTE  <i class="fas fa-check-circle"></i>  Replace with appropriate icon class for acceptance 
                    @break
                    @case('RETIRE')
                    RETIRE <i class="fas fa-check-circle"></i>  Replace with appropriate icon class for retirement 
                    @break
                    @default
                    {{ $dup_transcript->status }}
                    @endswitch
                    </span>
                </td>
            </tr>
            <tr class="pBtn">
              <td></td>
              <td colspan="2">
                  <button class="popup-button imprimer-btn">Imprimer</button>
              </td>
          </tr>
        </table>
        </div>
      </div>
      @endif
      @endforeach
      @endif

  </div> -->


  <!-- No data message -->
  <div class="no-data" id="noDataMessageDup">
    <i class="fas fa-info-circle"></i> NO DATA FOUND
  </div>

  <form id="dup_pdf-form" action="{{ route('dup_generate.pdf') }}" method="POST" style="display: none;">
    @csrf
    <textarea name="dup_content" id="dup_content">
        <div class="dual-container" id="dupTranscriptContainer">
          @if ($userDupTranscripts->isEmpty())
          <p> <strong> Aucune demande de duplicata de bulletin n'a été enregistrée </strong></p>
          @else
          <hr>
          <div > <strong>RECAPITULATIF DES DEMANDES DE DUPLICATA DE CUE</strong> 
            <hr>
           
          </div> 
          @foreach($userDupTranscripts as $dup_transcript)
          @if ($dup_transcript->user_id === auth()->user()->id && $dup_transcript->exam_type === 'current_semester')
          <p>You have already requested your duplicate transcript for this semester.</p>
          @else
                      
                            <div class="report">
                                <div class="report-item">
                                    {{-- Display transcript details --}}
                                    <page>
                                    <table style="border-collapse: collapse; border-spacing: 10px; width: 100%;">
                                      <tr>
                                          <th colspan="2" style="border: 1px solid black; text-align: center; font-weight: bold;">DEMANDE DE DUPICATA DE CUE N°</th>
                                          <td colspan="2" style="border: 1px solid black; text-align: center;">ADR{{ $dup_transcript->id }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Matricule:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->mat }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Nom:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->lastname }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Prénom:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->firstname }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Filière:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->field }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Spécialité:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->speciality }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Année académique:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->ac_year }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Niveau d'étude:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->ac_level }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Semestre:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->exam_type }}</td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Date de demande:</td>
                                          <td style="border: 1px solid black;">{{ $dup_transcript->created_at }}</td>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Date de retrait:</td>
                                          <td style="border: 1px solid black;">
                                              {{ $dup_transcript->status !== 'RETIRE' ? 'indisponible' : $dup_transcript->updated_at }}
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Observation:</td>
                                          <td colspan="3" style="border: 1px solid black;">
                                              @if ($dup_transcript->feedback == "")
                                                  Aucune observation pour le moment
                                              @else
                                                  {{ $dup_transcript->feedback }}
                                              @endif
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="bold" style="border: 1px solid black; font-weight: bold;">Status:</td>
                                          <td colspan="3" style="border: 1px solid black;">
                                              <span style="font-weight: bold; color:
                                                  @switch($dup_transcript->status)
                                                      @case('REJETE')
                                                          red;
                                                          @break
                                                      @case('ACCEPTE')
                                                          green;
                                                          @break
                                                      @case('RETIRE')
                                                          blue;
                                                          @break
                                                      @default
                                                          black;
                                                  @endswitch
                                              ">
                                                  @switch($dup_transcript->status)
                                                      @case('REJETE')
                                                          REJETE <i class="fas fa-times-circle"></i>
                                                          @break
                                                      @case('ACCEPTE')
                                                          ACCEPTE <i class="fas fa-check-circle"></i>
                                                          @break
                                                      @case('RETIRE')
                                                          RETIRE <i class="fas fa-check-circle"></i>
                                                          @break
                                                      @default
                                                          {{ $dup_transcript->status }}
                                                  @endswitch
                                              </span>
                                          </td>
                                      </tr>
                                  </table>
                                </page>
                                    <br> <!-- Add a line break for spacing between tables -->
                                </div>
                            </div>
                       
                    @endif
                @endforeach
            @endif
        </div>
    </textarea>
</form>

<script>
 window.onload = function () {
    document.getElementById("popup").style.display = "block";

    // Search functionality
    const searchTranscript = document.getElementById("searchTranscript");
    const searchDupTranscript = document.getElementById("searchDupTranscript");
    const transcriptReports = document.querySelectorAll("#transcriptContainer .report");
    const dupTranscriptReports = document.querySelectorAll("#dupTranscriptContainer .report");
    const imprimerBtns = document.querySelectorAll(".imprimer-btn"); // Sélectionne tous les boutons Imprimer
    const noDataMessage = document.getElementById("noDataMessage");
    const noDataMessageDup = document.getElementById("noDataMessageDup");

    // Function to filter transcript reports
    function filterTranscriptReports(searchTerm) {
        let found = false;

        transcriptReports.forEach((report, index) => {
            const searchData = report.innerText.toLowerCase();
            if (searchData.includes(searchTerm)) {
                report.style.display = "block";
                found = true;
                // Affiche le bouton Imprimer correspondant au rapport trouvé
                imprimerBtns[index].style.display = "block";
            } else {
                report.style.display = "none";
                // Cache le bouton Imprimer si le rapport est caché
                imprimerBtns[index].style.display = "none";
            }
        });

        return found;
    }

    // Function to filter duplicate transcript reports
    function filterDupTranscriptReports(searchTerm) {
        let found = false;

        dupTranscriptReports.forEach((report, index) => {
            const searchData = report.innerText.toLowerCase();
            if (searchData.includes(searchTerm)) {
                report.style.display = "block";
                found = true;
                // Affiche le bouton Imprimer correspondant au rapport trouvé
                imprimerBtns[index + transcriptReports.length].style.display = "block";
            } else {
                report.style.display = "none";
                // Cache le bouton Imprimer si le rapport est caché
                imprimerBtns[index + transcriptReports.length].style.display = "none";
            }
        });

        return found;
    }

    // Event listener for transcript search input
    searchTranscript.addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase();
        const transcriptFound = filterTranscriptReports(searchTerm);

        if (transcriptFound) {
            noDataMessage.style.display = "none";
        } else {
            noDataMessage.style.display = "block";
        }
    });

    // Event listener for duplicate transcript search input
    searchDupTranscript.addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase();
        const dupTranscriptFound = filterDupTranscriptReports(searchTerm);

        if (dupTranscriptFound) {
            noDataMessageDup.style.display = "none";
        } else {
            noDataMessageDup.style.display = "block";
        }
    });

    // Initially hide the no data messages and Imprimer buttons
    noDataMessage.style.display = "none";
    noDataMessageDup.style.display = "none";
    imprimerBtns.forEach(btn => (btn.style.display = "none"));
};

</script>

<script>
  // Function to print the specific report grid
function printReport(reportElement) {
    const popupContent = document.getElementById("popup");
    const originalDisplay = popupContent.style.display;
    
    // Show only the selected report grid
    popupContent.style.display = "block";
    const dualContainers = document.querySelectorAll(".dual-container");
    dualContainers.forEach(container => {
        container.style.display = "none";
    });
    reportElement.closest(".dual-container").style.display = "grid";
    
    // Print the content
    window.print();
    
    // Restore the original display settings
    popupContent.style.display = originalDisplay;
    dualContainers.forEach(container => {
        container.style.display = "grid";
    });
}

// Add click event listeners to all "Imprimer" buttons
const imprimerBtns = document.querySelectorAll(".imprimer-btn");
imprimerBtns.forEach(btn => {
    btn.addEventListener("click", function () {
        const reportElement = this.closest(".report");
        printReport(reportElement);
    });
});

</script>


<script>
  document.addEventListener('DOMContentLoaded', function () {
      const dup_pdfForm = document.getElementById('dup_pdf-form');
      const dup_content = document.getElementById('dup_content').value;
      const dup_pdfBtn = document.getElementById('dup_pdf-btn');

      dup_pdfBtn.addEventListener('click', function () {
          const form = new FormData(dup_pdfForm);
          fetch(dup_pdfForm.action, {
              method: 'POST',
              body: form,
          })
          .then(response => response.blob())
          .then(blob => {
              const url = window.URL.createObjectURL(blob);
              const a = document.createElement('a');
              a.href = url;
              a.download = 'dup_report.pdf';
              document.body.appendChild(a);
              a.click();
              window.URL.revokeObjectURL(url);
              document.body.removeChild(a);
          })
          .catch(error => console.error('Error:', error));
      });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      const pdfForm = document.getElementById('pdf-form');
      const content = document.getElementById('content').value;
      const pdfBtn = document.getElementById('pdf-btn');

      pdfBtn.addEventListener('click', function () {
          const form = new FormData(pdfForm);
          fetch(pdfForm.action, {
              method: 'POST',
              body: form,
          })
          .then(response => response.blob())
          .then(blob => {
              const url = window.URL.createObjectURL(blob);
              const a = document.createElement('a');
              a.href = url;
              a.download = 'report.pdf';
              document.body.appendChild(a);
              a.click();
              window.URL.revokeObjectURL(url);
              document.body.removeChild(a);
          })
          .catch(error => console.error('Error:', error));
      });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>
