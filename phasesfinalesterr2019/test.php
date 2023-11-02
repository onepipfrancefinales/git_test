<?php
//$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db2;charset=utf8', 'onepip-france', 'lavelan09');


  require ("../connect1/connection2.php");
/*
$requete = $bdd->query("select nom
						from phpab_clubs
						where id='12001'");
		while ($row = $requete->fetch())
							{
							$tabEquipe = $row[0];
					 		
							}
echo $tabEquipe;
*/
$poule = 171;

$tabEquipe = array();
$tabPoints =array();
$comite_clmnt_cache= "phpca_clmnt_cache";						
$requete = $bdd->query("select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=171
						ORDER BY POINTS desc limit 0,7");			
						
						

					while ($row = $requete->fetch())
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];	
							}
							
	$clubA1P1 = $tabEquipe1[0].' ('.$tabPoints1[0].")";				
	$clubA2P1 = $tabEquipe1[1].' ('.$tabPoints1[1].")";	
	$clubA3P1 = $tabEquipe1[2].' ('.$tabPoints1[2].")"; 
	$clubA4P1 = $tabEquipe1[3].' ('.$tabPoints1[3].")";
	$clubA5P1 = $tabEquipe1[4].' ('.$tabPoints1[4].")"; 
	$clubA6P1 = $tabEquipe1[5].' ('.$tabPoints1[5].")";	
	$clubA7P1 = $tabEquipe1[6].' ('.$tabPoints1[6].")";
	
	echo $clubA1P1;				
	echo $clubA2P1;	
	echo $clubA3P1; 
	echo $clubA4P1;
	echo $clubA5P1; 
	echo $clubA6P1;	
	echo $clubA7P1;
	
							
							?>