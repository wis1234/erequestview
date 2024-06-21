<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Etat de traitement des inscriptions pédagogiques</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ojuju:wght@200..800&family=Open+Sans:wght@500&family=Rock+3D&family=Rubik+Gemstones&display=swap" rel="stylesheet">

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
            font-family: 'Chakra Petch', sans-serif;
        }

        .popup-content {
            position: relative;
            top:50px;
            height: 80%;
            width: 100%;
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
            background: #007bff;
            /* Blue color for the button */
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
            /* Darker blue color on hover */
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

        /* New styles for the report format */
        .dual-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;

            /* Media Queries for additional responsiveness */
@media (max-width: 768px) {
  .item {
    padding: 15px;
  }
}

@media (max-width: 480px) {
  .item {
    padding: 10px;
  }

}
        }
        /* New styles for the report format */
        .dual-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;

            /* Media Queries for additional responsiveness */
@media (max-width: 768px) {
  .item {
    padding: 15px;
  }
}

@media (max-width: 480px) {
  .item {
    padding: 10px;
  }

}


        }
        .dual_container .table {
            margin:10px
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

        /* Styles for the print modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
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

        @media print {
              /* Masquer le titre */
    .strong-items {
        display: none;
    }

    /* Masquer la barre de recherche */
    .search-container {
        display: none;
    }

    /* Masquer l'icône d'impression */
    .no-print {
        display: none;
    }
            .no-print {
                display: none;
            }

            .modal {
                display: none !important;
            }

            .report {
                width: 100%;
                margin-bottom: 10px;
            }

            .bold {
                font-weight: bold;
            }
        }

        /* Styles for watermark */
@media print {
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


    .signature-container {
        position: fixed;
        top: 40px; /* Adjust the position as needed */
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
<section>
    <div class="service-container no-print">
      <div class="service-title">
        <div class="user"  > 
   
        <div style="font-size:35px; font-weight:bold; align-item:center">HISTORIQUE</div>
        <div id="popup-text" style="font-size: 20px; font-weight:bold; text-transform:uppercase"></div>  
     
          <div class="small-title">
              Etat de traitement des inscriptions pédagogiques.<br><br>
              <p style="font-weight: 100; color:black">
             Veuillez consulter ci-dessous l'état de traitement des inscriptions pédagogiques.
              </p>

          </div>
  
      </div>
       
      </div>

  
    <div class="popup-content" id="popup">
        <!-- Title for the first grid -->
                          <!-- Print icon -->
            <div class="no-print" style="font-size: 20px; cursor: pointer; top:50px; margin-left: 10px">
                <i id="printIcon" class="fas fa-print" style="font-size: 20px; cursor: pointer; top:50px; margin-left: 10px; display: none;" onclick="openPrintModal()">Imprimer</i>
            </div>
        <!-- Search bar -->
        <div class="search-container">

        <div class="input-group">
            
            <input class="form-control border-end-0 border rounded-pill search-input" type="search" value="ADR" id="searchInput" >
     
        </input> 
            <span class="input-group-append">
            </span>
        </div>

        </div>
        <!-- Display the elements in a grid -->
        <div class="dual-container">
            @foreach($userPedRegistration as $ped)
            <div class="report" data-search="{{ strtolower('ADR' . $ped->id) }}  {{ strtolower($ped->mat_number) }} {{ strtolower($ped->field) }} {{ strtolower($ped->program) }} {{ strtolower($ped->ac_year) }} {{ strtolower($ped->ac_level) }}  {{ strtolower($ped->created_at) }} {{ strtolower($ped->updated_at) }} {{ strtolower($ped->feedback) }} {{ strtolower($ped->semester) }} {{ strtolower($ped->field) }} {{ strtolower($ped->program) }} {{ strtolower($ped->ac_year) }} {{ strtolower($ped->ac_level) }} {{ strtolower($ped->created_at) }} {{ strtolower($ped->updated_at) }} {{ strtolower($ped->feedback) }} {{ strtolower($ped->status) }}">
                <table class="table">
                 <div class="signature-container" style="display: none ">
                        RECEPICEE D'INSCRIPTION PEDAGOGIQUE
                         <br><br>
                         {{$ped-> user_lastname}} {{$ped-> user_firstname}} 
                </div>
                    <tr>
                        <th>INSCRIPTION N°</th>
                        <th>ADR{{ $ped->id }} </th>
                    </tr>
                    <tr>
                        <td class="bold">Année académique:</td>
                        <td>{{ $ped->ac_year }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Semestre:</td>
                        <td>{{ $ped->semester }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Matricule:</td>
                        <td>{{ $ped->mat_number }}</td>
                    </tr>
                    {{-- <tr>
                        <td class="bold">Nom:</td>
                        <td>{{$ped-> user_lastname}}</td>
                    </tr>
                    <tr>
                        <td class="bold">Prénom:</td>
                        <td>{{$ped-> user_firstname}}</td>
                    </tr> --}}
                    <tr>
                        <td class="bold">Filière:</td>
                        <td>{{ $ped->field }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Spécialité:</td>
                        <td>{{ $ped->program }}</td>
                    </tr>

                    <tr>
                        <td class="bold">Niveau d'étude:</td>
                        <td>{{ $ped->ac_level }}</td>
                    </tr>


                   
                    <tr>
                        <td class="bold">DESCRIPTION:</td>
                        <td>{{ $ped->description }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Date et Heure de demande:</td>
                        <td>{{ $ped->created_at }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Date et Heure de traitement:</td>
                        <td>
                        @if($ped->created_at == $ped->updated_at || $ped->status == 'En cours de traitement...')
                         Indisponible
                         @endif
                        @if($ped->status == 'VALIDE' || $ped->status == 'REJETE' )
                        {{ $ped->treat_time }}
                    
                        @endif

                        </td>
                    </tr>

                    <tr>
                        <td class="bold">Observation:</td>
                        <td>{{ $ped->feedback }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Status:</td>
                        <td>
                            <span style="font-weight: bold; color:
                              @switch($ped->status)
                              @case('REJETE')
                              red;
                              @break
                              @case('VALIDE')
                              green;
                              @break
                              @default
                              black; /* or any default color */
                              @endswitch
                              ">
                                @if($ped->status === 'VALIDE')
                                    VALIDE <i class="bi bi-check-circle" style="color: green;"></i>
                                @elseif($ped->status === 'REJETE')
                                    REJETE <i class="bi bi-x-circle" style="color: red;"></i>
                                @else
                                    {{ $ped->status }}
                                @endif
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>

        <!-- No data message -->
        <div class="no-data" id="noDataMessage">
            <i class="fas fa-info-circle"></i> NO DATA FOUND
        </div>
    </div>
    </section>

<!-- Print modal -->
<div id="printModal" class="modal">
  <div class="modal-content">
      <span class="close" onclick="closePrintModal()">&times;</span>
      <p>Entrez le numéro du document que vous souhaitez imprimer :</p>
      <input type="text" id="printDocumentNumber">
      <button onclick="printSelectedDocument()">Imprimer</button>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="closePrintModal()" style="background-color: red">Fermer</button>
      </div>
  </div>
</div>

<script>
  // Close print modal
  function closePrintModal() {
      document.getElementById("printModal").style.display = "none";
  }

  // Your other JavaScript code here
</script>

    <script>
        window.onload = function () {
            document.getElementById("popup").style.display = "block";

            // Search functionality
            const searchInput = document.getElementById("searchInput");
            const reports = document.querySelectorAll(".report");
            const noDataMessage = document.getElementById("noDataMessage");

            searchInput.addEventListener("keyup", function () {
            const searchTerm = searchInput.value.toLowerCase();
            let found = false;

            reports.forEach(report => {
                const searchData = report.getAttribute("data-search").toLowerCase();
                if (searchData.includes(searchTerm)) {
                    report.style.display = "block";
                    found = true;
                } else {
                    report.style.display = "none";
                }
            });

            if (found) {
                noDataMessage.classList.remove("show");
                // Show the print icon if a matching report is found
                document.getElementById("printIcon").style.display = "block";
            } else {
                noDataMessage.classList.add("show");
                // Hide the print icon if no matching report is found
                document.getElementById("printIcon").style.display = "none";
            }
        });
        
        };

        // Open print modal
        function openPrintModal() {
            document.getElementById("printModal").style.display = "block";
        }

        // Close print modal
        function closePrintModal() {
            document.getElementById("printModal").style.display = "none";
        }

        // Print selected document
        function printSelectedDocument() {
            const documentNumber = document.getElementById("printDocumentNumber").value;
            const selectedReport = document.querySelector(`[data-search*="${documentNumber.toLowerCase()}"]`);
            if (selectedReport) {
                window.print();
            } else {
                alert("Document not found!");
            }
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <footer>
        @yield('footer')
    </footer>

</body>


</html>
