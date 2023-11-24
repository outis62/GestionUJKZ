// AJAX POUR LA LISTE DEROULANTE SELECTION TURTEUR A L'INSCRIPTION D'UN ETUDIANT
document.getElementById('tuteur').addEventListener('keyup', function () {
    let inputValue = this.value;

    // Effectuez une requête AJAX pour obtenir les tuteurs correspondants au nom
    fetch('/search-tuteurs?query=' + inputValue)
        .then(response => response.json())
        .then(tuteurs => {
            // Mettez à jour la liste déroulante avec les résultats de la recherche
            let tuteursDropdown = document.getElementById('tuteurs');
            tuteursDropdown.innerHTML = '';

            if (tuteurs.length > 0) {
                tuteursDropdown.style.display = 'block'; // Affiche la liste déroulante

                // Ajoute la classe 'tuteursDropdown' à l'élément <select>
                tuteursDropdown.classList.add('tuteursDropdown');

                tuteurs.forEach(tuteur => {
                    let option = document.createElement('option');
                    option.value = tuteur.id;
                    option.text = tuteur.nom + ' ' + tuteur.prenom + ' - ' + tuteur.telephone;
                    tuteursDropdown.add(option);
                });
            } else {
                tuteursDropdown.style.display =
                    'none'; // Masque la liste déroulante s'il n'y a pas de résultats
            }
        });
});

// Lorsque l'utilisateur sélectionne un tuteur dans la liste déroulante
document.getElementById('tuteurs').addEventListener('change', function () {
    // Mettez à jour le champ tuteur_id avec l'ID du tuteur sélectionné
    document.querySelector('input[name="tuteur_id"]').value = this.value;
});
// FIN AJAX TUTEUR