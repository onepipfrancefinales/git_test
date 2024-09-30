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


	//$table = "bdjeunes";	
	//$minRang = 360;	
	//$maxRang = 380;
	palmaresParAnnee($annee, "bdjeunes" , 360, 380, $bdd);
	
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