<?php
$champ = $_GET['champ']; 

 
$annee=$_GET['annee'];
$annee2=$annee.''."_2";    
$id = $champ;


//require ("../../phases_finales/fonctionListeEquipes.php");
//require ("../../phases_finales/fonctionScores.php");
require ("../../phases_finales/fonctions_phases_finales.php");


//require ("fonctions_phases_finales.php");  

?>



<head>
<link rel="stylesheet" type="text/css" href="AA2.css">  
<link type="text/css" rel="stylesheet" href="../10.css">


<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Championnat de France</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body bgcolor="#CCCCCC">
<div align="center"> 
  
   <?php
	include("entete.php"); ?>
 
</div>
  
  
<?php
	include("liensdiv.php"); ?>
<div align="right"></div>
<p align="center"> 
  <?php	include ("../../pub/pub20.php"); ?>
  <br>
</p>
<p align="center">traitement des tableau en fonction du type de phase finales 
  et de la division 
  <?php include ("../../pub/pub20.php"); ?>
</p>
<br>
<?php	require ("../../pub/pub20.php"); ?>
<br>
  <?php	require "../bas2.php"; ?>
 
<p>&nbsp;</p>
</body>
</html>