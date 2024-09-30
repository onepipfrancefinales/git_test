<?php $annee = $_POST['saison']; ?>
<?php require("../../connect/connexion1.php"); ?>
<p class="annee">Equipes séniors</p>
<p class="equipe"><br>
	<?php $reponse = $bdd->query("	SELECT division, champion, comite1
									FROM bdequipe1 
									WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<225 order by rang");
	while ($donnees =  $reponse->fetch()) {
		echo $donnees['division'] . " : " .  $donnees['champion'] . "  " . $donnees['comite1'];
		echo "<br>";
	}
	?>
</p>

<br>
<p class="annee">Equipes Réserves<br>
</p>
<p class="equipe"><br>
	<?php $reponse = $bdd->query("	SELECT division, champion, comite1 
									FROM bdequipe2 
									WHERE saison='$annee' and titre='champion' and championnat='de France' and rang<280 and rang>220 
									ORDER BY rang");
	while ($donnees = $reponse->fetch()) {
		echo $donnees['division'] . " : " .  $donnees['champion'] . "  " . $donnees['comite1'];
		echo "<br>";
	}
	?>
</p>
<br>
<br>
<p class="annee">Equipes Féminines</p>
<p class="equipe">
	<br>
	<?php $reponse = $bdd->query("SELECT division, champion, comite1 
						FROM bdfem 
						WHERE saison='$annee'and titre='champion' and categorie='F' order by rang");
	while ($donnees =  $reponse->fetch()) {
		echo $donnees['division'] . " : " .  $donnees['champion'] . "  " . $donnees['comite1'];
		echo "<br>";
	}
	?>
</p>
<br><br>
<p class="annee">Reichels & Juniors</p>
<br>
<p class="equipe">
	<?php $reponse = $bdd->query("	SELECT division, champion, comite1 
									FROM bdjeunes 
									WHERE saison='$annee' and titre='champion' and rang<360 and rang>300 order by rang"); // Requ�te SQL
	while ($donnees =  $reponse->fetch()) {
		echo $donnees['division'] . " : " .  $donnees['champion'] . "  " . $donnees['comite1'];
		echo "<br>";
	}

	?>
</p>
<br><br>
<p class="annee">Cadets</p>
<br>
<p class="equipe">

	<?php


	$table = "bdjeunes";
	$minRang = 360;
	$maxRang = 380;
	palmaresParAnnee($annee, $table , $minRang, $maxRang, $bdd);
	/*
	function palmaresParAnnee($annee, $table, $minRang, $maxRang, $bdd) {

	$tabDivision = array();
	$tabChampion = array();
	$tabComite = array();

	$reponse = $bdd->query("SELECT division, champion, comite1 
						FROM $table
						WHERE saison='$annee' and titre = 'champion' 
						AND rang < $maxRang and rang >= $minRang 
						AND rang2 < $maxRang and rang2 >= $minRang 
						ORDER BY rang");

	while ($donnees =  $reponse->fetch()) {
		$tabDivision[] = $donnees['division'];
		$tabChampion[] = $donnees['champion'];
		$tabComite[] = $donnees['comite1'];
	}

	$pattern = "/[0-9]{7}/i";
	$tabNom = array();

	for ($i = 0; $i < count($tabDivision); $i++) {

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
		echo  $tabDivision[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i];
		echo "<br>";
	}
	}

*/


	/*
	$reponse = $bdd->query("SELECT division, champion, comite1 
									FROM bdjeunes 
									WHERE saison='$annee' and titre='champion' 
									and rang<380 and rang>=360 
									and rang2<380 and rang2>=360 
									order by rang");
	while ($donnees =  $reponse->fetch() )
			{ 
			echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
			echo "<br>";																									
			}
*/
	?>
</p>
<br><br>
<p class="annee"> Challenges</p>
<br>
<p class="equipe">
	<?php $reponse = $bdd->query("	SELECT division, champion, comite1
									FROM bdchallenges 
									WHERE saison='$annee'and titre='vainqueur' and rang>370 order by rang");
	while ($donnees =  $reponse->fetch()) {
		echo $donnees['division'] . " : " .  $donnees['champion'] . "  " . $donnees['comite1'];
		echo "<br>";
	}
	?>
</p>