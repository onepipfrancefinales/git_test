<html>
 <head>
  <meta name="description" content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
  <meta name="keywords" content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Palmares</title>
  <link type="text/css" rel="stylesheet" href="../10.css"> 
  <link rel="stylesheet" type="text/css" href="../menu_smart2.css"> 
  <link type="text/css" rel="stylesheet" href="paramTiroir.css"> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
 </head>

<body bgcolor="#CCCCCC" >
<?php $rang = $_GET['rang']; 
require '../../saison.php';
require '../../connect/connexion5.php';
require 'fonctions.php';
nomDivision($rang, $bdd);
/*
if ($rang > 100 && $rang < 225)
	$table="bdequipe1";
elseif ($rang > 225 && $rang < 275)
	$table="bdequipe2";	
elseif ($rang > 275 && $rang < 305)
	$table="bdfem";
elseif ($rang > 305 && $rang < 375)
	$table="bdjeunes";
elseif ($rang > 375 && $rang < 455)
	$table="bdchallenges";
*/
?>
<div class="fixed-header">
 <div class="container">
<table width="100%" border="1">
  <tr> 
     <td width= "5%" class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	<td width= "95%" class="h22" height="20"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td colspan="2" class="h12"><?php echo "Champions de France " ."<br />".$division;?></td>
  </tr>
</table>

    <?php include("menuPalmares.php"); ?>
    <br>
  
 </div> 
 </div> 
<div class="container">

  <br /><br /><br /><br /><br /><br /><br />
    <?php
	require '../../connect/connexion1.php';
	palmaresFrance($rang, $saison, $bdd);
	?>
	 
	 
	 <p class="palmNoir"><?php
		for($i=0; $i< $intervalleAnneeChampion-1; $i++)
		{
		echo $tabSaison[$i].' '.$tabChampion[$i].' '.$tabComite[$i]."<br />";
		}?>
   </p>
  
	<?php include("../../pub/pub20.php"); ?>
  	<?php require ("../bas.php");?>
  	<?php include("../../pub/pub_displayCarre.php");  ?>
 </div>
 </body>
</html>
