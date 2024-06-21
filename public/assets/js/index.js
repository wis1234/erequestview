
  // Fonction pour afficher la boîte de pop-up
  function showPopup() {
    var popup = document.getElementById('popup');
    var popupText = document.getElementById('popup-text');
    popup.style.display = 'block';

    // Texte à afficher progressivement
    var textToDisplay = "Sur la plateforme des services et prestations de la Faculté des Sciences Economiques et de Gestion de l'UAC. Plus besoin de vous déplacer pour soumettre vos dossiers de réclamation et de demande d'actes académique";
    var currentIndex = 0;
    var interval = setInterval(function() {
      if (currentIndex <= textToDisplay.length) {
        popupText.textContent = textToDisplay.substring(0, currentIndex);
        currentIndex++;
      } else {
        clearInterval(interval);
        setTimeout(closePopup, 3000); // Ferme la boîte après 3 secondes
      }
    }, 20); // Change le texte toutes les 100 millisecondes
  }

  // Fonction pour fermer la boîte de pop-up
  // function closePopup() {
  //   var popup = document.getElementById('popup');
  //   popup.style.display = 'none';
  // }

  // Afficher la boîte de pop-up après le chargement de la page
  window.addEventListener('load', showPopup);
