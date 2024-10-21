<?php
if (isset($_GET['division'])) $division = $_GET['division'];
else $division = '+';
if (isset($nomDivision));
else $nomDivision = '*';
if (isset($base));
else $base = '-';
require '../fonctionsPalmares.php';
require("../../connect/connexion1.php");

if ($division < 230) {
	$base = "bdequipe1";
	$titre = "Champions de France";
} elseif ($division < 280) {
	$base = "bdequipe2";
	$titre = "Champions de France";
} elseif ($division < 310) {
	$base = "bdfem";
	$titre = "Championnes de France";
} elseif ($division < 380) {
	$base = "bdjeunes";
	$titre = "Champions de France";
} elseif ($division < 500) {
	$base = "bdchallenges";
	$titre = "Challenge de ";
}


$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id ='$division' and annee != '2023' ");
while ($donnees =  $reponse->fetch()) {
	$nomDivision = $donnees['division'];
}
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmares.php?division=<?php echo $division; ?>">
	<meta name="description" content="Palmarès des champions de france de rugby par divisions et par années">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe France Finales Rugby">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="All">
	<title>Champions de FRANCE <?php echo $nomDivision; ?></title>
	<link type="text/css" rel="stylesheet" href="palmares.css">
	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
	<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<table class="marginAuto">
		<tr>
			<td colspan="3">
				<?php
				if ($division == 110) {	?>
					<img src="../../images/brennusGrand.jpg" alt="bouclier de brennus" width="1250" height="150">
				<?php } else {
					include("../../images/page_image_al.php");
				} ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include("../../01ligne.php");  ?>
			</td>
		</tr>
		<tr>
			<td class="colonne">
				<?php include("../../01gauche.php"); ?>
			</td>
			<td class="centreDePage">
				<?php
				// equipe 1
				if ($division < 230) {
				$tabDivisions = array('110', '120', '130', '135', '140', '150', '160', '170','180','190','200','210','220','222');
				$table ="bdequipe1";
				}
				// equipe 2
				else if ($division > 220 and $division < 280) {
				$tabDivisions = array('230', '240', '250', '260', '270');
				$table ="bdequipe2";
				}
				// féminines
				else if ($division > 270 and $division < 300) {
					$tabDivisions = array( '280', '285', '290', '295');
					$table ="bdfem";
					}
				// equipe jeunes
				else if ($division >300 and $division < 380) {
					$tabDivisions = array( '310', '320', '325', '330','340','350','360','365','370','375');
					$table ="bdjeunes";
					}
				//challenges
				else if ($division > 370) {
					$tabDivisions = array( '380','390','400','405','410','420','430','440','450','500');
					$table ="bdchallenges";
					}

				foreach ($tabDivisions as $div) {
					if ($division == $div) {
						chgmntNomDivision($div, $table, $bdd);
					}
				}
/*
				// equipe 2
				$tabDivisions = array('110', '120', '130', '135', '240', '250', '260', '270');
				foreach ($tabDivisions as $divEquipe2) {
					if ($division == $divEquipe2) {
						chgmntNomDivision($divEquipe2, "bdequipe1", $bdd);
					}
				}

				if ($division == 110) {
					chgmntNomDivision(110, "bdequipe1", $bdd);
				}
				/*	
			else if ($division == 120) {
			chgmntNomDivision (120, "bdequipe1", $bdd); }
				
			else if ($division == 130) {
			chgmntNomDivision (130, "bdequipe1", $bdd); }

			else if ($division == 135) {
			chgmntNomDivision (135, "bdequipe1", $bdd); }

			else if ($division == 140) {
			chgmntNomDivision (140, "bdequipe1", $bdd); }
			
			else if ($division == 150) {
			chgmntNomDivision (150, "bdequipe1", $bdd); }
			
			else if ($division == 160) {
			chgmntNomDivision (160, "bdequipe1", $bdd); }
			
			else if ($division == 170) {
			chgmntNomDivision (170, "bdequipe1", $bdd); }
			
			else if ($division == 180) {
			chgmntNomDivision (180, "bdequipe1", $bdd); }
			
			else if ($division == 190) {
			chgmntNomDivision (190, "bdequipe1", $bdd); }
*/ 
/*
else {
					// A partir de la saison 2023
					require("palmaresLigues2023.php");
					// De la saison 2019 à la saison 2022
					require("palmaresLigues.php");
					echo "<hr />";
					echo "<i>" . "Saison 2018-2019 : Réformes Territoriales";
					echo "<br>";
					echo "Les 27 comités territoriaux métropolitains sont transformés en 13 ligues régionales,
							identiques aux nouvelles régions administratives françaises." . "</i>";
					echo "<br>" . "<hr>";
					// Saison antérieure à la saiaon 2019
					require("palmares.php");
				}
					*/
				?>
			</td>
			<td class="colonne">
				<?php include("../../00droite.php"); ?>
			</td>
		</tr>
	</table>

</body>
<footer>
	<?php include("../../footer.php");  ?>
</footer>

</html>