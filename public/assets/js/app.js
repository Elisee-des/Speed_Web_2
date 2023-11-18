let mybutton = document.getElementById("myBtn");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
}

// Gestion de la modal
var modal = document.getElementById("id01");

//Fermer la modal apres le clik de l'utilisateur
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

/* Pour ouvrir le bouton hamburger quand l'ecran est reduit */
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})


var exampleModalEdition = document.getElementById('exampleModalEdition')
exampleModalEdition.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var buttonEdition = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = buttonEdition.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})


var exampleModalEditionImage = document.getElementById('exampleModalEditionImage')
exampleModalEditionImage.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var buttonEditionImage = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = buttonEditionImage.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})


var exampleModalEditionDelete = document.getElementById('exampleModalEditionDelete')
exampleModalEditionDelete.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var buttonEditionDelete = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = buttonEditionDelete.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})

var exampleModalEditionAllImages = document.getElementById('exampleModalEditionAllImages')
exampleModalEditionAllImages.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var buttonEditionAllImages = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = buttonEditionAllImages.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})


/*Gestion de l'ouverture et la fermeture du header*/
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
} 


/*Gestion de l'ouverture et la fermeture du header*/
function openNav2() {
  document.getElementById("mySidenavprivate").style.width = "100%";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav2() {
  document.getElementById("mySidenavprivate").style.width = "0";
} 