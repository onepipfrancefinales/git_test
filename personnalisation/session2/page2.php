<?php
// On d�marre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On r�cup�re nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien �t� enregistr�es
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="./logout.php">D�connexion</a>';
}
else {
	echo 'Les variables ne sont pas d�clar�es.';
}
?>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

</body>
</html>
