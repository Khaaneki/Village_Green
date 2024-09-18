document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    const nom_error = document.getElementById('nom-error');
    const prenom_error = document.getElementById('prenom-error');
    const mail_error = document.getElementById('mail-error');
    const password_error = document.getElementById('password-error');
    const confirmPassword_error = document.getElementById('confirm-password-error');
    const telephone_error = document.getElementById('telephone-error');
    
    form.addEventListener('submit', function(e) {
        let valid = true;

        // Efface les messages d'erreur
        nom_error.innerHTML = "";
        prenom_error.innerHTML = "";
        mail_error.innerHTML = "";
        password_error.innerHTML = "";
        confirmPassword_error.innerHTML = "";
        telephone_error.innerHTML = "";

        // Récupère les valeurs des champs
        const nom = form.elements['registrationForm[nom]'].value.trim();
        const prenom = form.elements['registrationForm[prenom]'].value.trim();
        const email = form.elements['registrationForm[email]'].value.trim();
        const password = form.elements['registrationForm[plainPassword]'].value.trim();
        const confirmPassword = form.elements['confirmPassword'].value.trim();
        const telephone = form.elements['registrationForm[telephone]'].value.trim();

        // Expressions régulières pour la validation
        const nomRegex = /^[a-zA-Z]+$/;
        const telephoneRegex = /^[0-9]{10}$/;
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Validation du nom
        if (nom === '') {
            nomError.innerHTML = "Ce champ est obligatoire";
            valid = false;
        } else if (!nomRegex.test(nom)) {
            nomError.innerHTML = "Le champ doit contenir uniquement des lettres";
            valid = false;
        }

        // Validation du prénom
        if (prenom === '') {
            prenomError.innerHTML = "Ce champ est obligatoire";
            valid = false;
        } else if (!nomRegex.test(prenom)) {
            prenomError.innerHTML = "Le champ doit contenir uniquement des lettres";
            valid = false;
        }

        // Validation de l'email
        if (email === '') {
            mailError.innerHTML = "Ce champ est obligatoire";
            valid = false;
        } else if (!emailRegex.test(email)) {
            mailError.innerHTML = "L'email n'est pas valide";
            valid = false;
        }

        // Validation du mot de passe
        if (password === '') {
            passwordError.innerHTML = "Ce champ est obligatoire";
            valid = false;
        } else if (password.length < 8) {
            passwordError.innerHTML = "Le mot de passe doit contenir au moins 8 caractères";
            valid = false;
        }

        // Validation de la confirmation du mot de passe
        if (confirmPassword === '') {
            confirmPasswordError.innerHTML = "Ce champ est obligatoire";
            valid = false;
        } else if (confirmPassword !== password) {
            confirmPasswordError.innerHTML = "Les mots de passe ne correspondent pas";
            valid = false;
        }

        // Validation du téléphone
        if (telephone === '') {
            telephoneError.innerHTML = "Ce champ est obligatoire";
            valid = false;
        } else if (!telephoneRegex.test(telephone)) {
            telephoneError.innerHTML = "Le numéro de téléphone doit contenir 10 chiffres";
            valid = false;
        }

        // Empêche l'envoi du formulaire si des erreurs sont présentes
        if (!valid) {
            e.preventDefault();
        }
    });
});
