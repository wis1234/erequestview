<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Etat de traitement des demande d'attestation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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

    /* table styles */
    /* Style the table header */
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}

/* Style table rows */
tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Pagination styles */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.pagination li {
    list-style: none;
    margin: 0 5px;
    display: inline-block;
}

.pagination li a {
    padding: 5px 10px;
    text-decoration: none;
    border: 1px solid #ddd;
    background-color: #fff;
    color: #333;
}

.pagination li.active a {
    background-color: #007bff;
    color: #fff;
    border: 1px solid #007bff;
}


  </style>
</head>
<body>
  
  <div class="popup-content " id="popup">
    <i class="bi bi-check-circle popup-icon" style="font-size: xx-large;">HISTORIQUE DES DEMANDES</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
<!-- Display the table of complaints -->
<div class="table-responsive">
<table >
  <thead>
      <tr>
        <th>N°</th>
          {{-- <th>Matricule</th> --}}
          <th>Filière</th>
          <th>Option</th>
          <th>Année académique</th>
          <th>Niveau d'étude</th>
          <th>Session</th>

          <th>Date de demande</th>
          <th>Observation</th>
          <th>Status</th>
          <th>N°</th>



      </tr>
  </thead>
  <tbody>
      @foreach($userCertificates as $certificate)
      <tr>
        <td>{{ $certificate->id }}</td>
          {{-- <td>{{ $certificate->mat }}</td> --}}
          <td>{{ $certificate->field }}</td>
          <td>{{ $certificate->speciality }}</td>
          <td>{{ $certificate->ac_year }}</td>
          <td>{{ $certificate->ac_level }}</td>
          <td>{{ $certificate->exam_type }}</td>

          <td>{{ $certificate->created_at }}</td>
          <td>{{ $certificate->feedback }}</td>
          <td>{{ $certificate->status }}</td>
          <td>{{ $certificate->id }}</td>

      </tr>
      @endforeach
  </tbody>
</table>
</div>
<!-- Display pagination links -->
<div class="d-flex justify-content-center">
  {{ $userCertificates->links('pagination::bootstrap-4') }}
</div>

    </p> 
   </div>

  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>


{{-- <div class="table-responsive">
  <table class="table">
    <tbody>
      @foreach($userCertificates as $certificate)
      <tr>
        <td>N°</td>
        <td>{{ $certificate->id }}</td>
      </tr>
      <tr>
        <td>Matricule</td>
        <td>{{ $certificate->mat }}</td>
      </tr>
      <tr>
        <td>Filière</td>
        <td>{{ $certificate->field }}</td>
      </tr>
      <tr>
        <td>Option</td>
        <td>{{ $certificate->speciality }}</td>
      </tr>
      <tr>
        <td>Année académique</td>
        <td>{{ $certificate->ac_year }}</td>
      </tr>
      <tr>
        <td>Niveau d'étude</td>
        <td>{{ $certificate->ac_level }}</td>
      </tr>
      <tr>
        <td>Session</td>
        <td>{{ $certificate->exam_type }}</td>
      </tr>
      <tr>
        <td>Date de demande</td>
        <td>{{ $certificate->created_at }}</td>
      </tr>
      <tr>
        <td>Observation</td>
        <td>{{ $certificate->feedback }}</td>
      </tr>
      <tr>
        <td>Status</td>
        <td>{{ $certificate->status }}</td>
      </tr>
      <tr>
        <td>N°</td>
        <td>{{ $certificate->id }}</td>
      </tr>
      <!-- Répétez ce schéma pour chaque colonne que vous avez dans votre en-tête -->
      <!-- Assurez-vous que l'ordre correspond à celui de votre en-tête -->
      @endforeach
    </tbody>
  </table>
</div>
<!-- Display pagination links -->
<div class="d-flex justify-content-center">
  {{ $userCertificates->links('pagination::bootstrap-4') }}
</div>
</p> 
</div>

<script>
window.onload = function () {
document.getElementById("popup").style.display = "block";
};
</script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
