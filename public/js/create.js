  // Sélectionnez tous les champs de texte avec des placeholders flottants
  const inputs = document.querySelectorAll('.input');

  // Attachez un gestionnaire d'événements pour chaque champ de texte
  inputs.forEach((input) => {
    input.addEventListener('input', () => {
      if (input.value === '') {
        input.classList.remove('filled');
      } else {
        input.classList.add('filled');
      }
    });

    // Initialisez la classe "filled" pour les champs de texte non vides au chargement de la page
    if (input.value !== '') {
      input.classList.add('filled');
    }
  });
