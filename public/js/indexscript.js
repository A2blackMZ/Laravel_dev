$(document).ready(function() {
  // Affiche le pop-up au clic sur le bouton INSCRIPTION
  $('#inscriptionBtn').click(function() {
    $('#inscriptionModal').css('display', 'block');
  });

  // Ferme le pop-up au clic sur le bouton de fermeture
  $('#closeBtn').click(function() {
    $('#inscriptionModal').css('display', 'none');
  });

  // Redirige en fonction du choix effectué
  $('#creerCompteBtn').click(function() {
    var entrepriseChecked = $('#toggleSwitch').is(':checked');

    if (entrepriseChecked) {
      window.location.href = recruteurCreateRoute; // Vue Entreprise
    } else {
      window.location.href = postulantShowConnexionFormRoute; // Vue Candidat
    }
  })
});
