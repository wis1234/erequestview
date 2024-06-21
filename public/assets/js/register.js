<<<<<<< HEAD

const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirmPassword");
const togglePassword = document.querySelector("#togglePassword");
const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
const registerButton = document.getElementById("register");

function togglePasswordVisibility(inputElement, toggleButton) {
  const type = inputElement.getAttribute("type") === "password" ? "text" : "password";
  inputElement.setAttribute("type", type);

  // Toggle the eye icon
  if (type === "text") {
    toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
  }
}

togglePassword.addEventListener("click", () => {
  togglePasswordVisibility(passwordInput, togglePassword);
});

toggleConfirmPassword.addEventListener("click", () => {
  togglePasswordVisibility(confirmPasswordInput, toggleConfirmPassword);
});

registerButton.addEventListener("click", (event) => {
  const passwordValue = passwordInput.value;
  const confirmPasswordValue = confirmPasswordInput.value;

  if (passwordValue !== confirmPasswordValue) {
    alert("Les mots de passe ne sont pas identique");
    event.preventDefault(); // Prevents the form from being submitted if passwords don't match
  }
});



let currentStep = 1;
const progressBar = document.getElementById('progress-bar');

function updateProgressBar() {
const totalSteps = 5; // Total number of steps
const progress = (currentStep - 1) / (totalSteps - 1) * 100;
progressBar.style.width = progress + '%';
progressBar.setAttribute('aria-valuenow', progress);
}

function showStep(step) {
const formSteps = document.querySelectorAll('.form-step');
formSteps.forEach((stepElement) => {
  stepElement.style.display = 'none';
});

document.getElementById(`step${step}`).style.display = 'block';
currentStep = step;
updateProgressBar();
}

function nextStep(step) {
if (step <= 5 && step > currentStep) {
  showStep(step);
}
}

function prevStep(step) {
if (step >= 1 && step < currentStep) {
  showStep(step);
}
}

showStep(1);

// Add an event listener for the payment button
const paymentButton = document.getElementById('paymentButton');
paymentButton.addEventListener('click', () => {
// Add the Fedapay payment script here
// Example script you provided:
const script = document.createElement('script');
script.src = "https://checkout.fedapay.com/js/checkout.js";
script.setAttribute("data-public-key", "pk_live_NVw62EiQ_Yu6mvPq13vuUapq");
script.setAttribute("data-button-text", "Payez 1222Fcfa");
script.setAttribute("data-button-class", "button-class");
script.setAttribute("data-transaction-amount", "1200");
script.setAttribute("data-transaction-description", "Paiement des frais de réclamation");
script.setAttribute("data-currency-iso", "XOF");
script.setAttribute("callback_url", "https://honeybee-right-shortly.ngrok-free.app/dissertation_UI/index_redirect.html");
script.setAttribute("data-widget-description", "Facilement et simplement, réclamez en ligne");
script.setAttribute("data-widget-image", "E:\P_Projects\dissertation-main\public\dissertation_UI\assets\img\logo.jpeg");
script.setAttribute("data-widget-title", "eGraC");
document.body.appendChild(script);
});


// Ajoutez cette fonction pour générer un résumé des informations saisies 


function generateSummary() {
// Récupérez les informations saisies
const firstname = document.getElementById('firstname').value;
const lastname = document.getElementById('lastname').value;
const date = document.getElementById('date').value;
const place_birth = document.getElementById('place_birth').value;
const matricule = document.getElementById('matricule').value;
const email = document.getElementById('email').value;
const phone = document.getElementById('phone').value;
const password = document.getElementById('password').value;

// Générez le résumé
const summary = `
<p style="color:black"><strong>Nom:</strong> ${firstname}</p>
<p style="color:black"><strong>Prénom(s):</strong> ${lastname}</p>
<p style="color:black"><strong>Date de naissance:</strong> ${date}</p>
<p style="color:black"><strong>Lieu de naissance:</strong> ${place_birth}</p>
<p style="color:black"><strong>Matricule:</strong> ${matricule}</p>
<p style="color:black"><strong>Email:</strong> ${email}</p>
<p style="color:black"><strong>Téléphone:</strong> ${phone}</p>
<p style="color:black"><strong>Mot de passe:</strong> ${password}</p>

`;

// Affichez le résumé dans le modal
document.getElementById('saisie-info').innerHTML = summary;

// Ouvrez le modal
const infoModal = new bootstrap.Modal(document.getElementById('infoModal'));
infoModal.show();
}





 //check button with status 


function toggleSuivantButton() {
var confirmationCheck = document.getElementById('confirmationCheck');
var suivantButton = document.getElementById('suivantButton');

// Enable/disable the "Suivant" button based on the state of the check button
suivantButton.disabled = !confirmationCheck.checked;
}



window.onload = function () {
document.getElementById("popup").style.display = "block";
};
=======

const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirmPassword");
const togglePassword = document.querySelector("#togglePassword");
const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
const registerButton = document.getElementById("register");

function togglePasswordVisibility(inputElement, toggleButton) {
  const type = inputElement.getAttribute("type") === "password" ? "text" : "password";
  inputElement.setAttribute("type", type);

  // Toggle the eye icon
  if (type === "text") {
    toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
  }
}

togglePassword.addEventListener("click", () => {
  togglePasswordVisibility(passwordInput, togglePassword);
});

toggleConfirmPassword.addEventListener("click", () => {
  togglePasswordVisibility(confirmPasswordInput, toggleConfirmPassword);
});

registerButton.addEventListener("click", (event) => {
  const passwordValue = passwordInput.value;
  const confirmPasswordValue = confirmPasswordInput.value;

  if (passwordValue !== confirmPasswordValue) {
    alert("Les mots de passe ne sont pas identique");
    event.preventDefault(); // Prevents the form from being submitted if passwords don't match
  }
});



let currentStep = 1;
const progressBar = document.getElementById('progress-bar');

function updateProgressBar() {
const totalSteps = 5; // Total number of steps
const progress = (currentStep - 1) / (totalSteps - 1) * 100;
progressBar.style.width = progress + '%';
progressBar.setAttribute('aria-valuenow', progress);
}

function showStep(step) {
const formSteps = document.querySelectorAll('.form-step');
formSteps.forEach((stepElement) => {
  stepElement.style.display = 'none';
});

document.getElementById(`step${step}`).style.display = 'block';
currentStep = step;
updateProgressBar();
}

function nextStep(step) {
if (step <= 5 && step > currentStep) {
  showStep(step);
}
}

function prevStep(step) {
if (step >= 1 && step < currentStep) {
  showStep(step);
}
}

showStep(1);

// Add an event listener for the payment button
const paymentButton = document.getElementById('paymentButton');
paymentButton.addEventListener('click', () => {
// Add the Fedapay payment script here
// Example script you provided:
const script = document.createElement('script');
script.src = "https://checkout.fedapay.com/js/checkout.js";
script.setAttribute("data-public-key", "pk_live_NVw62EiQ_Yu6mvPq13vuUapq");
script.setAttribute("data-button-text", "Payez 1222Fcfa");
script.setAttribute("data-button-class", "button-class");
script.setAttribute("data-transaction-amount", "1200");
script.setAttribute("data-transaction-description", "Paiement des frais de réclamation");
script.setAttribute("data-currency-iso", "XOF");
script.setAttribute("callback_url", "https://honeybee-right-shortly.ngrok-free.app/dissertation_UI/index_redirect.html");
script.setAttribute("data-widget-description", "Facilement et simplement, réclamez en ligne");
script.setAttribute("data-widget-image", "E:\P_Projects\dissertation-main\public\dissertation_UI\assets\img\logo.jpeg");
script.setAttribute("data-widget-title", "eGraC");
document.body.appendChild(script);
});


// Ajoutez cette fonction pour générer un résumé des informations saisies 


function generateSummary() {
// Récupérez les informations saisies
const firstname = document.getElementById('firstname').value;
const lastname = document.getElementById('lastname').value;
const date = document.getElementById('date').value;
const place_birth = document.getElementById('place_birth').value;
const matricule = document.getElementById('matricule').value;
const email = document.getElementById('email').value;
const phone = document.getElementById('phone').value;
const password = document.getElementById('password').value;

// Générez le résumé
const summary = `
<p style="color:black"><strong>Nom:</strong> ${firstname}</p>
<p style="color:black"><strong>Prénom(s):</strong> ${lastname}</p>
<p style="color:black"><strong>Date de naissance:</strong> ${date}</p>
<p style="color:black"><strong>Lieu de naissance:</strong> ${place_birth}</p>
<p style="color:black"><strong>Matricule:</strong> ${matricule}</p>
<p style="color:black"><strong>Email:</strong> ${email}</p>
<p style="color:black"><strong>Téléphone:</strong> ${phone}</p>
<p style="color:black"><strong>Mot de passe:</strong> ${password}</p>

`;

// Affichez le résumé dans le modal
document.getElementById('saisie-info').innerHTML = summary;

// Ouvrez le modal
const infoModal = new bootstrap.Modal(document.getElementById('infoModal'));
infoModal.show();
}





 //check button with status 


function toggleSuivantButton() {
var confirmationCheck = document.getElementById('confirmationCheck');
var suivantButton = document.getElementById('suivantButton');

// Enable/disable the "Suivant" button based on the state of the check button
suivantButton.disabled = !confirmationCheck.checked;
}



window.onload = function () {
document.getElementById("popup").style.display = "block";
};
>>>>>>> 0f197e5e6821d6a3ae420e25197a08a25e64ae1c
