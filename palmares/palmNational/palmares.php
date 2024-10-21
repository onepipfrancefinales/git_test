<?php
 require ("../../connect/connexion1.php") ; 

if ($division<230)
	{
	$table="bdequipe1";
	$titre="Champions de France";
	}
elseif($division<280)
	{
	$table="bdequipe2";
	$titre="Champions de France";
	}	
elseif($division<310)
	{
	$table="bdfem";	
	$titre="Championnes de France";
	}
elseif($division<380)
	{
	$table="bdjeunes";
	$titre="Champions de France";
	}
elseif($division<500)
	{
	$table="bdchallenges";
	$titre="Challenge de ";
	}
elseif($division==500)
	{
	$table="bdequipe1";
	$titre="Champion de France ";
	}

$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id='$division' "); 
 while ($donnees =  $reponse->fetch()  )
	{ 		
	$nomDivision = $donnees['division']; 		
	}

	


palmaresParDivision($division, $table, $bdd);
//palmaresParDivisionLigne($division, $table, $bdd);


if ($division>380)
{
/*	
	$reponse = $bdd->query("SELECT saison, champion, comite1 
							FROM $table
							WHERE championnat='de France'
							AND rang=$division 
							AND rang2=$division  
							AND titre='champion' 
							ORDER BY saison DESC"); 
					 
	while ($donnees =  $reponse->fetch()  )
	{ 						
	echo "<h4>";
	echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1']; 
	echo "</h4>";
	}								 
*/		 
}			 			 
else
{
/*
	$reponse = $bdd->query("
		SELECT saison, champion, comite1  
		FROM bdchallenges 
		WHERE rang=$division AND titre='vainqueur'
		ORDER BY saison DESC"); 
				 
	while ($donnees =  $reponse->fetch()  )
	{ 
	 echo "</h4>";
 	 echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1']; 
	 echo "</h4>"; 									
	}	
	 */		 							 
}

echo "<br>";
echo "<br>";

//}

?>
<style>

.infobulle {
  position: relative;  /* les .infobulle deviennent référents */
  cursor: help;
}

/* on génère un élément :after lors du survol et du focus :*/

.infobulle:hover::after,
.infobulle:focus::after {
  content: attr(aria-label);  /* on affiche aria-label */
  position: absolute;
  /*top: -3.4em;*/
  left: 70%;
  transform: translate(0px, 0px); /* on centre horizontalement  */
  z-index: 0; /* pour s'afficher au dessus des éléments en position relative */
 /* white-space: nowrap;  /* on interdit le retour à la ligne */
 border-color: black;
 border-style: solid;
 border-width: 1px;
 background : #5ec1ff;
 text-align: left;
}



</style>