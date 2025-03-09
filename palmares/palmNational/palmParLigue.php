<br ><br>
<?php
echo "<h1><p> <strong> Titres nationaux de la ligue <br />".$nomLigue."</strong></p></h1>";
{print("<img src=\"../../images/ligues/$sigleLigue.jpg\" border=\"0\">");}
$sigle = "(".$sigleLigue.")"; 



if ($mode == "smart") {
	
function palmaresParLigue($sigle, $table, $categorie, $bdd)
{
	$tabSaison = array();
	$tabDivision = array();
	$tabChampion = array();

	$reponse = $bdd->query("SELECT saison, division, champion  
						FROM $table 
						WHERE comite1='$sigle' 
						AND titre='champion' 
						AND rang2 > 100 
						AND categorie='$categorie' 
						ORDER by saison DESC, rang ASC");
	while ($donnees = $reponse->fetch()) {
		$tabSaison[] = $donnees['saison'];
		$tabDivision[] = $donnees['division'];
		$tabChampion[] = $donnees['champion'];
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
		echo  $tabSaison[$i] . " Champion de France " .  $tabDivision[$i] . ' : ' . "<strong>" . $tabNom[$i] . "</strong>";
		echo "</h4>";
	}
}
}
?>

<br><br><br>
 <!-- palmares de la categorie A-->
<h1 class="bold"> Equipes Séniors</h1>
<?php palmaresParLigue($sigle,  "bdequipe1", "A", $bdd);?>
<br><br>

<!-- palmares de la categorie B -->
<h1 class="bold"> Equipes II </h1>
<?php palmaresParLigue($sigle, "bdequipe2", "B", $bdd); ?>
<br><br>

<!-- palmares de la categorie F -->
<h1 class="bold"> Equipes Féminines </h1>
<?php palmaresParLigue($sigle, "bdfem", "F", $bdd); ?>
<br><br>

<!-- palmares de la categorie D -->
<h1 class="bold" > Reichels & Juniors </h1>
<?php palmaresParLigue($sigle, "bdjeunes", "D", $bdd);?>										
<br><br>

<!-- palmares de la categorie E -->
<h1 class="bold"> Cadets</h1>
<?php palmaresParLigue($sigle, "bdjeunes", "E", $bdd);?>
<br><br>										 
