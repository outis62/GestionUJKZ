const open = document.getElementById('open-btnm');
const openniveau = document.getElementById('open-btnniveau');
const opencycle = document.getElementById('open-btncycle');
const openanneeuniv = document.getElementById('open-btnanneeuniv');
const opennational = document.getElementById('open-btnnational');
const opengenre = document.getElementById('open-btngenre');
const opensemestre = document.getElementById('open-btnsemestre');
const openmatiere = document.getElementById('open-btnmatiere');
const openrole = document.getElementById('open-btnrole');


const close = document.getElementById('close-btnm');
const closeniveau = document.getElementById('close-btnniveau');
const closecycle = document.getElementById('close-btncycle');
const closeanneeuniv = document.getElementById('close-btnanneeuniv');
const closenational = document.getElementById('close-btnnational');
const closegenre = document.getElementById('close-btngenre');
const closesemestre = document.getElementById('close-btnsemestre');
const closematiere = document.getElementById('close-btnmatiere');
const closerole = document.getElementById('close-btnrole');


const modal = document.querySelector('.modal-containerm');
const modalniveau = document.querySelector('.modal-containerniveau');
const modalcycle = document.querySelector('.modal-containercycle');
const modalanneeuniv = document.querySelector('.modal-containeranneeuniv');
const modalnational = document.querySelector('.modal-containernational');
const modalgenre = document.querySelector('.modal-containergenre');
const modalsemestre = document.querySelector('.modal-containersemestre');
const modalmatiere = document.querySelector('.modal-containermatiere');
const modalrole = document.querySelector('.modal-containerrole');


open.onclick = () => {
  modal.style.display = 'flex';
}
openniveau.onclick = () => {
  modalniveau.style.display = 'flex';
}
opencycle.onclick = () => {
  modalcycle.style.display = 'flex';
}
openanneeuniv.onclick = () => {
  modalanneeuniv.style.display = 'flex';
}
opennational.onclick = () => {
  modalnational.style.display = 'flex';
}
opengenre.onclick = () => {
  modalgenre.style.display = 'flex';
}
opensemestre.onclick = () => {
  modalsemestre.style.display = 'flex';
}
openmatiere.onclick = () => {
  modalmatiere.style.display = 'flex';
}
openrole.onclick = () => {
  modalrole.style.display = 'flex';
}


close.onclick = () => {
  modal.style.display = 'none';
}
closeniveau.onclick = () => {
  modalniveau.style.display = 'none';
}
closecycle.onclick = () => {
  modalcycle.style.display = 'none';
}
closeanneeuniv.onclick = () => {
  modalanneeuniv.style.display = 'none';
}
closenational.onclick = () => {
  modalnational.style.display = 'none';
}
closegenre.onclick = () => {
  modalgenre.style.display = 'none';
}
closesemestre.onclick = () => {
  modalsemestre.style.display = 'none';
}
closematiere.onclick = () => {
  modalmatiere.style.display = 'none';
}
closerole.onclick = () => {
  modalrole.style.display = 'none';
}


// Enseignant modal script
function modal_open() {
  const dialog = document.getElementById("register-modal");
  dialog.style.left = ((window.innerWidth - 500) / 2) + "px";
  dialog.style.display = "flex";

  const overlay = document.getElementById("modal-overlay");
  overlay.style.display = "block";
}

function modal_close() {
  document.getElementById("register-modal").style.display = "none";
  document.getElementById("modal-overlay").style.display = "none";
}


$(document).ready(function () {
  // Lorsque le lien avec onclick="modal_open()" est cliqué
  $('[onclick="modal_open()"]').on('click', function (e) {
    e.preventDefault(); // Empêche le lien de suivre son lien par défaut

    // Effectuez une requête AJAX pour récupérer les filières
    $.ajax({
      url: '/get-filieres',
      type: 'GET',
      success: function (data) {
        // Remplir la liste déroulante avec les noms de filières récupérés
        var select = $('#filiere'); // Ciblez l'ID "filiere"
        select.empty();
        $.each(data, function (key, value) {
          select.append('<option value="' + value.filiere + '">' + value.filiere + '</option>');
        });

        // Ouvrir la modale après avoir chargé les filières
        $('#register-modal').modal('show');
      }
    });
  });
});

