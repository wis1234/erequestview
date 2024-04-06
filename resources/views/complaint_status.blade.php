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
}

    
    </style>


</head>

<body>
  
    <div class="popup-content" id="popup">
        <!-- Title for the first grid -->
        <div class="strong-items">
            <i class="bi bi-check-circle popup-icon"
                style="font-size: 30px; font-family: Rubik Gemstones, system-ui; font-weight: 400; font-style: normal; font_style:normal; margin:5px; font-weight:bold; color: blue">ETAT DE TRAITEMENT DES DEMANDES</i>
        </div>
        <br><br>

                          <!-- Print icon -->
            <div class="no-print" style="font-size: 20px; cursor: pointer; top:50px; margin-left: 10px">
             <i class="fas fa-print" style="font-size: 20px; cursor: pointer; top:50px; margin-left: 10px" onclick="openPrintModal()">Imprimer</i>
            </div> <br><br><br>
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
            @if ($userComplaints->isEmpty())
            <p> <strong> Aucune  réclamation de note n'a été enregistrée </strong></p>
            @else
            @foreach($userComplaints as $complaint)
            <div class="report" data-search="{{ strtolower('ADR' . $complaint->id) }} {{ strtolower($complaint->mat) }} {{ strtolower($complaint->field) }} {{ strtolower($complaint->speciality) }} {{ strtolower($complaint->ac_year) }} {{ strtolower($complaint->ac_level) }} {{ strtolower($complaint->exam_type) }} {{ strtolower($complaint->complain_type) }} {{ strtolower($complaint->ecue_sub) }} {{ strtolower($complaint->ecue) }} {{ strtolower($complaint->created_at) }} {{ strtolower($complaint->updated_at) }} {{ strtolower($complaint->feedback) }} {{ strtolower($complaint->status) }}">
                <table>
                    <tr>
                        <th>RECLAMATION N°</th>
                        <th>ADR{{ $complaint->id }} </th>
                    </tr>
                    <tr>
                        <td class="bold">Matricule:</td>
                        <td>{{ $complaint->mat }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Nom:</td>
                        <td>{{$complaint-> claimant_lastname}}</td>
                    </tr>
                    <tr>
                        <td class="bold">Prénom:</td>
                        <td>{{$complaint-> claimant_firstname}}</td>
                    </tr>
                    <tr>
                        <td class="bold">Filière:</td>
                        <td>{{ $complaint->field }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Spécialité:</td>
                        <td>{{ $complaint->speciality }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Année académique:</td>
                        <td>{{ $complaint->ac_year }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Niveau d'étude:</td>
                        <td>{{ $complaint->ac_level }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Session:</td>
                        <td>{{ $complaint->exam_type }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Motif:</td>
                        <td>{{ $complaint->complain_type }}</td>
                    </tr>
                    <tr>
                        <td class="bold">UE:</td>
                        <td>{{ $complaint->ecue_sub }}</td>
                    </tr>
                    <tr>
                        <td class="bold">ECUE:</td>
                        <td>{{ $complaint->ecue }}</td>
                    </tr>
                    <tr>
                        <td class="bold">DESCRIPTION:</td>
                        <td>{{ $complaint->description }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Date et Heure de demande:</td>
                        <td>{{ $complaint->created_at }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Date et Heure de traitement:</td>
                        <td>
                            @if($complaint->created_at == $complaint->updated_at)
                                Indisponible
                            @else
                                {{ $complaint->updated_at }}
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td class="bold">Observation:</td>
                        <td>{{ $complaint->feedback }}</td>
                    </tr>
                    <tr>
                        <td class="bold">Status:</td>
                        <td>
                            <span style="font-weight: bold; color:
                              @switch($complaint->status)
                              @case('REJETE')
                              red;
                              @break
                              @case('ACCEPTE')
                              green;
                              @break
                              @default
                              black; /* or any default color */
                              @endswitch
                              ">
                                @if($complaint->status === 'ACCEPTE')
                                    ACCEPTE <i class="bi bi-check-circle" style="color: green;"></i>
                                @elseif($complaint->status === 'REJETE')
                                    REJETE <i class="bi bi-x-circle" style="color: red;"></i>
                                @else
                                    {{ $complaint->status }}
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


    {{-- pdf download form --}}

    <form id="com_pdf-form" action="{{ route('com_generate.pdf') }}" method="POST" style="display: none;">
        @csrf
        <textarea name="com_content" id="com_content">
            <div class="dual-container" id="complaintContainer">
              @if ($userComplaints->isEmpty())
              <p> <strong> Aucune réclamation de note n'a été enregistrée </strong></p>
              @else
                          
                                <div class="report">
                                    <div class="report-item">
                                        {{-- Display transcript details --}}
                                        <page>
                                        <table style="border-collapse: collapse; border-spacing: 10px; width: 100%;">
                                          <tr>
                                              <th colspan="2" style="border: 1px solid black; text-align: center; font-weight: bold;">RECLAMATION N°</th>
                                              <td colspan="2" style="border: 1px solid black; text-align: center;">ADR{{ $complaint->id }}</td>
                                          </tr>
                                          <tr>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Matricule:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->mat }}</td>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Nom:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->lastname }}</td>
                                          </tr>
                                          <tr>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Prénom:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->firstname }}</td>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Filière:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->field }}</td>
                                          </tr>
                                          <tr>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Spécialité:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->speciality }}</td>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Année académique:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->ac_year }}</td>
                                          </tr>
                                          <tr>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Niveau d'étude:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->ac_level }}</td>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Semestre:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->exam_type }}</td>
                                          </tr>
                                          
                                          <tr>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Date et Heure de demande:</td>
                                              <td style="border: 1px solid black;">{{ $complaint->created_at }}</td>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Date de traitement:</td>
                                              <td style="border: 1px solid black;">
                                                    @if($complaint->created_at == $complaint->updated_at)
                                                        Indisponible
                                                    @else
                                                        {{ $complaint->updated_at }}
                                                    @endif
                                                </td>
                                          </tr>
                                          <tr>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Observation:</td>
                                              <td colspan="3" style="border: 1px solid black;">
                                                  @if ($complaint->feedback == "")
                                                      Aucune observation pour le moment
                                                  @else
                                                      {{ $complaint->feedback }}
                                                  @endif
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="bold" style="border: 1px solid black; font-weight: bold;">Status:</td>
                                              <td colspan="3" style="border: 1px solid black;">
                                                
                                                    <span style="font-weight: bold; color:
                                                      @switch($complaint->status)
                                                      @case('REJETE')
                                                      red;
                                                      @break
                                                      @case('ACCEPTE')
                                                      green;
                                                      @break
                                                      @default
                                                      black; /* or any default color */
                                                      @endswitch
                                                      ">
                                                        @if($complaint->status === 'ACCEPTE')
                                                            ACCEPTE <i class="bi bi-check-circle" style="color: green;"></i>
                                                        @elseif($complaint->status === 'REJETE')
                                                            REJETE <i class="bi bi-x-circle" style="color: red;"></i>
                                                        @else
                                                            {{ $complaint->status }}
                                                        @endif
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
                } else {
                    noDataMessage.classList.add("show");
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
        // Close print modal
function closePrintModal() {
    document.getElementById("printModal").style.display = "none";
}

    </script>




<script>
    document.addEventListener('DOMContentLoaded', function () {
        const com_pdfForm = document.getElementById('com_pdf-form');
        const com_content = document.getElementById('com_content').value;
        const com_pdfBtn = document.getElementById('com_pdf-btn');
  
        pdfBtn.addEventListener('click', function () {
            const form = new FormData(com_pdfForm);
            fetch(com_pdfForm.action, {
                method: 'POST',
                body: form,
            })
            .then(response => response.blob())
            .then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'com_report.pdf';
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
