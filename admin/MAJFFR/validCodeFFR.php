<html>
<head>
<title>modification de donn&eacute; es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  <?php
$ligue = $_GET['ligue']; 
echo $ligue;
 require ("../../connect/connection1.php");

	$H =  $_POST['H'];  
	$PH = $_POST['PH'];  
	$S1 = $_POST['S1'];  
	$S2 = $_POST['S2'];  
	$S3 = $_POST['S3'];  
	$S4 = $_POST['S4'];  
	$ResH = $_POST['ResH'];  
	$ResPH = $_POST['ResPH'];  
	$ResS1 = $_POST['ResS1'];  
	$ResS2 = $_POST['ResS2'];  
	

?>
  <?php

	$sql = "UPDATE accesFFR
			SET  H='$H', PH='$PH', S1='$S1', S2='$S2', S3='$S3', S4='$S4', ResH='$ResH', ResPH='$ResPH', ResS1='$ResS1', ResS2='$ResS2'	
			WHERE sigle = '$ligue'  " ;		
			
			
			 $requete = mysql_query( $sql )   ;

		  if($requete)
				{
				echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
				echo "<br />" ;
				}
		  else
				{
				echo("La modification  a &eacute;chou&eacute;") ;
				echo "<br />";
				}

	
	
	


mysql_close(); 

?>
<p>&nbsp;
<p><a href="raccourcis_ffr/page_raccourcisChampFrance.php">retourPagePr&eacute;c&eacute;dente</a>
<p><a href="../sadmin.php?annee=<?php echo $annee; ?>">Retour accueil</a> 
<p>&nbsp;

</html>