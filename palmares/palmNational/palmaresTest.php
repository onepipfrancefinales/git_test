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

?>
<br><br><br><br>
<p>Lorem Elsass ipsum réchime amet non <span class="infobulle" aria-label="texte de l'infobulle">Choucroute</span> Picon bière Coopé knack tchao bissame hopla</p>


<?php



//palmaresParDivision($division, $table, $bdd);
//palmaresParDivisionLigne($division, $table, $bdd);
$tabSaison = array();
	$tabChampion = array();
	$tabComite = array();

	$reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM $table
						WHERE championnat='de France' 
						AND rang=$division 
						AND rang2=$division  AND saison < 2019
						AND titre='champion' 
						ORDER BY saison DESC");

	while ($donnees =  $reponse->fetch()) {
		$tabSaison[] = $donnees['saison'];
		$tabChampion[] = $donnees['champion'];
		$tabComite[] = $donnees['comite1'];


		if ($donnees['saison'] == '2018' and $division == '330') {
			echo "<h1><font color=\"#000000\">";
			echo "Jules Balandrade";
			echo "<br />";
			echo "</font></h1>";
		} elseif ($donnees['saison'] == '2018' and $division == '370') {
			echo "<h1><font color=\"#000000\">";
			echo "Jean Teulière";
			echo "<br />";
			echo "</font></h1>";
		}
	}

	$pattern = "/[0-9]{7}/i";
	$tabNom = array();

	for ($i = 0; $i < count($tabChampion); $i++) {

		if (preg_match($pattern, $tabChampion[$i]) == 1) {

			$reponseCode = $bdd->query("SELECT nom_1
										FROM bdclubs 
										WHERE id=' $tabChampion[$i]' ");

			while ($donnees =  $reponseCode->fetch()) {
				$champion = $donnees['nom_1'];
			}

			array_push($tabNom, $champion);
		} else {
			array_push($tabNom, $tabChampion[$i]);
		}
		echo "<h4>";
		echo  $tabSaison[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i]; ?>
		<sup><span class="infobulle" aria-label="icon bière Coopé knack tchaohfghghjghjghkjhjkhjkhjkghjkhkhgkghjk bissame hoplatexte de l'infobulle">+</span></sup>

		</h4>
		<?php
	}


?>


<?php

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
  top: -3.4em;
  left: 70%;
  transform: translateX(-70%); /* on centre horizontalement  */
  z-index: 2; /* pour s'afficher au dessus des éléments en position relative */
 /* white-space: nowrap;  /* on interdit le retour à la ligne */
 background : yellow;
 text-align: left;
}



</style>
