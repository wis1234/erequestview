<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Etat de traitement des réclamation de note</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
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


 /* New styles for the finger hint */
 .scroll-hint {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
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

    /* Animation for moving the finger */
@keyframes moveFinger {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(20px); /* Adjust the distance the finger moves */
  }
  100% {
    transform: translateX(0);
  }
}

.animated-finger {
  animation: moveFinger 1s linear infinite;
}

 /* Additional styles for accepted and rejected rows */
 .accepted {
        font-weight: bold;
        color: green;
    }

    .rejected {
        font-weight: bold;
        color: red;
    }


  </style>
</head>
<body>
  <div class="popup-content " id="popup">
    <i class="bi bi-check-circle popup-icon"  style="font-size: large; font-weight:bold; color: blue">HISTORIQUE DES RECLAMATIONS</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
<!-- Display the table of complaints -->
<div class="table-responsive">
<table >
  <thead>
      <tr>
        <th>N°</th>
          <th>Matricule</th>
          <th>Filière</th>
          <th>Option</th>
          <th>Année académique</th>
          <th>Niveau d'étude</th>
          <th>Session</th>
          <th>Motif</th>
          <th>UE</th>
          <th>ECUE</th>
          <th>Date et Heure de demande</th>
          <th>Date et Heure de traitement</th>
          <th>Observation</th>
          <th>Status</th>
       
          <th>N°</th>



      </tr>
  </thead>
  <tbody>
      @foreach($userComplaints as $complaint)
      <tr class="{{ $complaint->status === 'ACCEPTE' ? 'accepted' : ($complaint->status === 'REJETE' ? 'rejected' : '') }}">

        <td>{{ $complaint->id }}</td>
          <td>{{ $complaint->mat }}</td>
          <td>{{ $complaint->field }}</td>
          <td>{{ $complaint->speciality }}</td>
          <td>{{ $complaint->ac_year }}</td>
          <td>{{ $complaint->ac_level }}</td>
          <td>{{ $complaint->exam_type }}</td>
          <td>{{ $complaint->complain_type }}</td>
          <td>{{ $complaint->ecue_sub }}</td>
          <td>{{ $complaint->ecue }}</td>
          <td>{{ $complaint->created_at }}</td>
          <td>
            @if($complaint->updated_at == $complaint->created_at)
               indisponible
            @else
              {{ $complaint->updated_at }}
            @endif
          </td>
          <td>{{ $complaint->feedback }}</td>
 <!-- ... (other cells) ... -->
 <td style="font-weight:10px; color: {{ $complaint->status === 'ACCEPTE' ? 'green' : ($complaint->status === 'REJETE' ? 'red' : '') }}">
  @if($complaint->status === 'ACCEPTE')
      <i class="bi bi-check-circle" style="color: green;"></i> {{ $complaint->status }}
  @elseif($complaint->status === 'REJETE')
      <i class="bi bi-x-circle" style="color: red;"></i> {{ $complaint->status }}
  @else
      {{ $complaint->status }}
  @endif
</td>
          <td>{{ $complaint->id }}</td>

      </tr>
      @endforeach
  </tbody>
</table>
</div>
<!-- Display pagination links -->
<div class="d-flex justify-content-center">
  {{ $userComplaints->links('pagination::bootstrap-4') }}
</div>

    </p> 

    <div class="header-buttons" id="auth_button">
      {{-- <a href="#" onclick="redirectFunction()" class="register-button">Retour</a> --}}
    </div>
   </div>


<!-- Finger scroll hint -->
<div class="scroll-hint">
  <i class="fas fa-hand-point-right fa-3x animated-finger" style="color:#0056b3"></i>
</div>




  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };

    //the script of the redirection  function

    function redirectFunction(){
      var index_route_redirection = "{{route('login_post')}}";
       window.location.href = index_route_redirection;
    }



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
