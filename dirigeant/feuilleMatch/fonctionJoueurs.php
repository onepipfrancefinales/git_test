<?php
$equipe = $_GET['equipe'];
$comite = $_GET['comite'];
$bdcomite= "php".''.$comite.''."_joueurs";

if ($connect == "connection2")
require   "../../../connect1/connection2.php";
else
require   "../../../connect1/connection3.php";


$tabJoueurs = array();
$tabIdPerso = array();
$tabLicence = array();
for ($i=1 ; $i< 100; $i++)
{
		
	
$reponse = $bdd->query("SELECT nom, prenom, licence, type_licence, id_perso 
		FROM $bdcomite 
		WHERE id_perso=$i and club='$equipe' and fonction='1'"); 
				
				while ($row = $reponse->fetch())	
								{ 
								$tabJoueur[]= $row[0]; 
								$tabIdPerso[]= $row[4];
								$tabLicence[]= substr($row[2],0,4).' '.substr($row[2],4,2).' '.substr($row[2],6,1).' '.substr($row[2],-6); 
								//$nom1 = strtoupper($nom1);
								//$type_licence1= $donnees['type_licence']; 
								}	
}
?>










