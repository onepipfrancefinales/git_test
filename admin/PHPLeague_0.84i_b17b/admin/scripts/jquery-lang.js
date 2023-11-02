/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood{at}iinet.com.au) and Stéphane Nahmani (sholby@sholby.net). */
jQuery(function($){
	$.datepicker.regional['fr'] = {
		closeText: 'Fermer',
		prevText: '&#x3c;Pr&eacute;c',
		nextText: 'Suiv&#x3e;',
		currentText: 'Courant',
		monthNames: ['Janvier','F&eacute;vrier','Mars','Avril','Mai','Juin',
		'Juillet','Ao&#251;t','Septembre','Octobre','Novembre','D&eacute;cembre'],
		monthNamesShort: ['Jan','F&eacute;v','Mar','Avr','Mai','Jun',
		'Jul','Ao&ucirc;','Sep','Oct','Nov','D&eacute;c'],
		dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
		dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
		dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['fr']);
});

/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: FR
 */
jQuery.extend(jQuery.validator.messages, {
        required: "Ce champ est requis.",
        remote: "Veuillez remplir ce champ pour continuer.",
        email: "Veuillez entrer une adresse email valide.",
        url: "Veuillez entrer une URL valide.",
        date: "Veuillez entrer une date valide.",
        dateISO: "Veuillez entrer une date valide (ISO).",
        number: "Veuillez entrer un nombre valide.",
        digits: "Veuillez entrer (seulement) une valeur num&eacute;rique.",
        creditcard: "Veuillez entrer un num&eacute;ro de carte de cr&eacute;dit valide.",
        equalTo: "Veuillez entrer une nouvelle fois la m&ecirc;me valeur.",
        accept: "Veuillez entrer une valeur avec une extension valide.",
        maxlength: jQuery.validator.format("Veuillez ne pas entrer plus de {0} caract&egrave;res."),
        minlength: jQuery.validator.format("Veuillez entrer au moins {0} caractères."),
        rangelength: jQuery.validator.format("Veuillez entrer entre {0} et {1} caract&egrave;res."),
        range: jQuery.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
        max: jQuery.validator.format("Veuillez entrer une valeur inf&eacute;rieure ou &eacute;gale à {0}."),
        min: jQuery.validator.format("Veuillez entrer une valeur sup&eacute;rieure ou &eacute;gale à {0}.")
});