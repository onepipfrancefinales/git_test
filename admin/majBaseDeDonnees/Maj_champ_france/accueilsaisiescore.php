<?php $anneeverif=2018; ?>

<head>
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>1re S�rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<?php $annee=$_POST['annee']; ?> 
<?php
	include("saisieSaisonResultat.php"); ?>
<br>
<?php
	if ($annee==$anneeverif)
	include("saisieScoreCorrect.php"); 
	else
	include("saisieScoreIncorrect.php"); 
	?>
</body>
</html>
