<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
// On d�marre la session
	session_start ();

// On d�truit les variables de notre session
	session_unset ();

// On d�truit notre session
	session_destroy ();

// On redirige le visiteur vers la page d'accueil
	header ('location: index.php');
?>
</body>
</html>
