<?php
function bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd)
{
	$tableMatch = $ligue."_matchs";
	$tableEquipe = $ligue."_equipes";
	$tableEquipesresultat = $ligue."_equipesresultat";
	$id = $equipeTraitee;
	$journee = "J".substr($id_journee,-2);
	$bonusDefensifDeLaJournee = 1;
	//echo "id :".$id; echo "<br>";
	//echo "journee :".$journee	; echo "<br>";
	
	//récupération  des bonus déjà acquis dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id'");
	 
	 while ($row = $requete->fetch())
			{ 
			$BonusDejaAcquis = $row[0];
			}
	//echo "BonusDejaAcquis :".$BonusDejaAcquis;echo "<br>";
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $totalBonus = $BonusDejaAcquis + $bonusDefensifDeLaJournee; 
	// echo "totalBonus :".$totalBonus;echo "<br>";
	 // Mise à jour des tables ( equipes, equipesresultats)
	 $bdd->exec("UPDATE $tableEquipe
				 SET	penalite ='$totalBonus'
				 WHERE  id = '$id'");
	 
	 $bdd->exec("UPDATE $tableEquipesresultat
				SET $journee ='$bonusDefensifDeLaJournee'
				WHERE id = $id ");
	 
	 // ajouter la somme des bonus defensifs
	 
	// echo "<br>";echo "testfin";echo "<br>";
}

function bonusOffensif($equipeTraitee, $id_journee, $ligue, $bdd)
{
	
//echo "testdebut";echo "<br>";
	
	$tableMatch = $ligue."_matchs";
	$tableEquipe = $ligue."_equipes";
	$tableEquipesresultat = $ligue."_equipesresultat";
	$id = $equipeTraitee;
	$journee = "J".substr($id_journee,-2);
	$bonusOffensifDeLaJournee = 1;
	//echo "id :".$id; echo "<br>";
//	echo "journee :".$journee	; echo "<br>";
	
	//récupération  des bonus déjà acquis dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id'");
	 
	 while ($row = $requete->fetch()){ 
			$BonusDejaAcquis = $row[0];	}
			
	// echo "BonusDejaAcquis :".$BonusDejaAcquis;echo "<br>";
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $totalBonus = $BonusDejaAcquis + $bonusOffensifDeLaJournee; 
	// echo "totalBonus :".$totalBonus;echo "<br>";
	 // Mise à jour des tables equipes
	 $bdd->exec("UPDATE $tableEquipe
				 SET	penalite ='$totalBonus'
				 WHERE  id = '$id'");
				 
	 // Mise à jour des tables equipesresultats)
	 $bdd->exec("UPDATE $tableEquipesresultat
				SET $journee ='$bonusOffensifDeLaJournee'
				WHERE id =$id ");
	 
	 // ajouter la somme des bonus defensifs
	//echo "<br>"; echo "testfin";echo "<br>";	
}

function bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd)
{
global $bonusDeLaJournee;

$tableEquipesresultat = $ligue."_equipesresultat";
$journee = "J".substr($id_journee,-2);

$requete=$bdd->query("
			SELECT $journee
			FROM $tableEquipesresultat
			WHERE 	id = $equipeTraitee");
	 
	 while ($row = $requete->fetch()){ 
			$bonusDeLaJournee = $row[0];}						
//echo "bonusDeLaJournee : ".$journee.'-'.$equipeTraitee.'-'.$bonusDeLaJournee;echo "<br>";
}


?>