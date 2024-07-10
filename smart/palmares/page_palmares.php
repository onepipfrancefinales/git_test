<?php $rang = $_GET['rang']; 
require '../../saison.php';
require '../../connect/connexion1.php';
require 'fonctions.php';
nomDivision($rang, $bdd);

?><!DOCTYPE html>
<html lang="fr">
 <head>
  <meta name="description" content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
  <meta name="keywords" content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Palmarès</title>
  <link type="text/css" rel="stylesheet" href="../10.css"> 
  <link rel="stylesheet" type="text/css" href="../menu_smart2.css"> 
  <link type="text/css" rel="stylesheet" href="paramTiroir.css"> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../ligne1.css"> 
  
  <meta name=viewport content="width=device-width, initial-scale=1">
 </head>

<body class="backgroundCCCCCC" >

<table class="borderWidth1 ">
  <tr> 
  <td width= "5%" class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	<td width= "95%" class="h22" height="20"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td colspan="2" class="h12"><?php echo "Champions de France " ."<br />".$division;?></td>
  </tr>
</table>
 <div class="container">
<div class="fixed-header">
    <?php include("menuPalmares.php"); ?>
    <br>
  
 </div> 
 </div> 
<div class="container">

  <br /><br /><br /><br /><br /><br /><br />
    <?php
	require '../../connect/connexion1.php';

	palmaresFrance($rang, $finSaison, $bdd);
	?>
	 
	 
	 <p class="palmNoir"><?php
		for($i=0; $i< $intervalleAnneeChampion-1; $i++)
		{
		echo $tabSaison[$i].' '.$tabChampion[$i].' '.$tabComite[$i]."<br />";
		}?>
   </p>
  
	<?php //include("../../pub/pub20.php"); ?>
  	<?php require ("../bas.php");?>
  	<?php //include("../../pub/pub_displayCarre.php");  ?>
 </div>
 </body>
</html>
