
const pageBody = document.querySelector('body');

/********** Disclosure : bouton "Espace privé" **********/
function toggleAccountMenu() {
    const accountBtn = document.getElementById('account-btn');
    const accountMenu = document.getElementById('private-menu');
    accountMenu.style.opacity = '0';
    if (!!accountBtn) {
        accountBtn.addEventListener('click', function() {
            if (accountMenu.style.opacity == '1') {
                accountMenu.style.opacity = '0';
            }
            else {
                accountMenu.style.opacity = '1';
            }

        });
    }
}

toggleAccountMenu();

/********** Dialog : fenêtre modale "Etymologie" ("D'où vient le mot « thé » ?") **********/
const dialogBtn = document.getElementById('btn-dialog');
const dialogWrapper = document.getElementById('dialog-wrapper');
const dialogCloseBtn = document.getElementById('dialog-close-btn');
const outsideDialog = document.getElementById('outside-dialog');

// Fermeture de la fenêtre modale
if(dialogCloseBtn) {
    dialogCloseBtn.addEventListener('click', closeDialog);
}

function closeDialog() {
    if (!!outsideDialog) { outsideDialog.style.display = 'none'; } // Cache l'élément permettant de détecter la sortie de focus de la modale
    dialogWrapper.style.display = 'none'; // Cache la fenêtre modale
    pageBody.classList.remove('dialogOpen'); // Supprime l'overlay
    document.removeEventListener('keyup', keyboardInteractions); // Annule l'utilisation du clavier à l'intérieur de la fenêtre modale
}

// Ouverture de la fenêtre modale
!!dialogBtn && dialogBtn.addEventListener('click', openDialog);

function openDialog() {
    pageBody.classList.add('dialogOpen'); // Ajoute un overlay
    dialogWrapper.style.display = 'block'; // Affiche la fenêtre modale
    if (!!outsideDialog) { outsideDialog.style.display = 'block'; } // Affiche l'élément permettant de détecter la sortie de focus de la modale
    dialogWrapper.querySelector('a').focus(); // Déplace le focus sur le premier lien dans la fenêtre modale
    document.addEventListener('keyup', keyboardInteractions); // Utilisation du clavier à l'intérieur de la fenêtre modale
}

function keyboardInteractions(event) {
    const elementsInDialog = dialogWrapper.querySelectorAll('*');
    const focusableInDialog = Array.from(elementsInDialog).filter(el => el.tabIndex >= 0);
    const firstFocusable = focusableInDialog[0];
    const lastFocusable = focusableInDialog.at(-1);

    // Détection de la touche "Escape" pour la fermeture de la fenêtre modale
    if (event.code === 'Escape') {
        closeDialog();
    }

    // Restriction du parcours de tabulation à l'intérieur de la fenêtre modale...
    if (event.code === 'Tab') {
        if (!dialogWrapper.contains(event.target) && event.shiftKey) { // ...à la tabulation arrière
            lastFocusable.focus();
        }
        else if (!dialogWrapper.contains(event.target)) { // ...à la tabulation avant
            firstFocusable.focus();
        }
    }
}

/********** Disclosure : Menu de nvigation mobile  **********/
const menuBtn = document.getElementById('toggle-menu');
const menuNav = document.getElementById('tm-navbar');
if (!!menuBtn) {
    menuBtn.addEventListener('click', function() {
        if (menuBtn.getAttribute('aria-expanded') == 'true') {
            menuBtn.setAttribute('aria-expanded', 'false');
            menuNav.style.display = 'none';
        }
        else {
            menuBtn.setAttribute('aria-expanded', 'true');
            menuNav.style.display = 'block';
        }

    });
}

/********** Formulaire : Champ contextuel "E-mail" **********/
const formEmail = document.getElementById('email-form-group');
const formNewsletter = document.getElementById('newsletter-form-group').querySelector('input');

toggleEmail(); // Initialise l'affichage du champ "E"-mail"
formNewsletter.addEventListener('change', toggleEmail); // Change l'affiche du champ "E"-mail" au click sur le champ "Newsletter"

function toggleEmail() {
    const emailFld = formEmail.querySelector('.form-control');
    if (formNewsletter.checked) {
        formEmail.style.display = 'block';
        emailFld.setAttribute('aria-required', 'true');
    }
    else {
        emailFld.setAttribute('aria-required', 'false');
        emailFld.value = '';
        clearError(formEmail);
        formEmail.style.display = 'none';
    }
}

/********** Formulaire : Gestion des messages d'erreur  **********/
const formCtn = document.getElementById('form-catalogue');
const btnForm = document.getElementById('form-submit');

btnForm.addEventListener('click', verifyRequiredFields);

function verifyRequiredFields(event) {
    event.preventDefault();

    const requiredFields = Array.from(formCtn.querySelectorAll('.form-control[aria-required="true"]'));
    let canSubmitForm = false;
    
    // Saisie obligatoires
    requiredFields.forEach(field => {
        const parent = field.parentElement;
        const error = parent.querySelector('.form-error');

        if (!field.value) {
            parent.classList.add('has-error');
            error.textContent = 'Veuillez remplir ce champ.';
        }
        else if(field.id === 'email' && !isEmail(field.value)) {
            parent.classList.add('has-error');
            error.textContent = 'Veuillez saisir une adresse e-mail valide. Par exemple : pierre.dupont@lethe.fr';
        }
        else {
            clearError(parent);
        }
    });
    
    const errorFields = formCtn.querySelectorAll('.has-error');
    
    canSubmitForm = errorFields.length === 0;
    
    if (canSubmitForm) {
        sendForm();
    }
    else {
        // Don't send form
    }
}

function clearError(el) {
    const error = el.querySelector('.form-error');
    el.classList.remove('has-error');
    error.textContent = '';
}

function isEmail(val) {
    // Format attendu (e-mail)
    const regMail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$', 'i');
    return regMail.test(val);
}

function sendForm() {
    const formCatalog = document.getElementById('form-catalogue-wrapper');
    formCatalog.style.display = 'none';
    const successCtn = document.createElement('p');
    var successText = document.createTextNode('Votre demande a bien été reçue. Vous recevrez notre catalogue très prochainement.');
    successCtn.appendChild(successText);
    successCtn.classList.add('form-catalogue-success');
    formCatalog.parentElement.insertBefore(successCtn, formCatalog);
    successCtn.focus();
}

/********** Cookies  **********/
const cookies = document.getElementById('cookies');
const cookiesBtnYes = cookies.querySelector('.cookies-yes');
const cookiesBtnNo = cookies.querySelector('.cookies-no');
const cookiesConfirm = document.getElementById('cookiesConfirm');

cookiesBtnYes.addEventListener('click', cookiesConsent);
cookiesBtnNo.addEventListener('click', cookiesConsent);

pageBody.style.marginTop = cookies.offsetHeight + 'px';

function cookiesConsent() { // Il n'y a aucun traitement suite au choix de l'utilisateur dans la mesure où il s'agit d'une page d'exemple sans aucun cookie
    document.getElementById('wrapper').focus();
    pageBody.style.marginTop = '0';
    cookies.remove();
    cookiesConfirm.classList.add('showCookiesConfirm');
    cookiesConfirm.textContent = 'Vos préférences ont bien été enregistrées.';
    hideCookiesConsent();
    clearTimeout(hideCookiesConsent);
}

// Cache la notif après 3 secondes
const hideCookiesConsent = () => {
    setTimeout(() => {
        cookiesConfirm.textContent = '';
        cookiesConfirm.classList.remove('showCookiesConfirm');
    }, 3000);
}
