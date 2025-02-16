<?php
$smart = true;
//remplacemant de la variable $rang par $division
//$rang = $_GET['division'];
if (isset($_GET['division'])) $division = $_GET['division'];
else $division = "170";
require '../../saison.php';
require '../../connect/connexion1.php';
require '../../palmares/fonctionsPalmares.php';
//require 'fonctions.php';
//nomDivision($rang, $bdd);
//nomDivisionMax($rang, $bdd);



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
						WHERE id ='$division' and cle >'100000' ");
while ($donnees =  $reponse->fetch()) {
	$nomDivision = $donnees['division'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
	<meta name="keywords" content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<title> <?php echo "Champions de France " . $nomDivision; ?></title>
	<link type="text/css" rel="stylesheet" href="../10.css">
	<link rel="stylesheet" type="text/css" href="../menu_smart2.css">

	<link type="text/css" rel="stylesheet" href="paramTiroir.css">
	<link rel="stylesheet" type="text/css" href="../../palmares/palmares.css">
	<link rel="stylesheet" type="text/css" href="../../ligne1.css">
	<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body class="backgroundWhite">

	<div class="fixed-header backgroundWhite">
		<div class="container">

			<table class="width98PC borderColorBlack borderWidth1">
				<tr class="borderColorBlack borderWidth1">
					<td width="5%" class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
					<td width="95%" class="h22" height="20"> France Finales Rugby </td>
				</tr>
				<tr>
					<td colspan="2" class="h12"><?php echo "Champions de France " . "<br />" . $nomDivision; ?></td>
				</tr>
			</table>
			<?php include("menuPalmares.php"); ?>
			<br>

		</div>
	</div>

	<div class="container ">

		<div style="margin-top : 225px">
			<p>.</p>
		</div>
		<?php
		// equipe 1
		if ($division < 230) {
			$tabDivisions = array('110', '120', '130', '135', '140', '150', '160', '170', '180', '190', '200', '210', '220', '222');
			$table = "bdequipe1";
		}
		// equipe 2
		else if ($division > 220 and $division < 280) {
			//230 -> Espoirs Elite
			//232 -> Espoirs Nationaux
			//235 -> Espoirs Fédéraux
			$tabDivisions = array('230', '235', '232', '240', '245', '250', '260', '270');
			$table = "bdequipe2";
		}
		// féminines
		else if ($division > 270 and $division < 310) {
			$tabDivisions = array('280', '285', '290', '295', '300');
			$table = "bdfem";
		}
		// equipe jeunes
		else if ($division > 300 and $division < 380) {
			$tabDivisions = array('310', '320', '325', '330', '340', '350', '360', '365', '370', '375');
			$table = "bdjeunes";
		}
		//challenges
		else if ($division > 370) {
			$tabDivisions = array('380', '390', '400', '405', '410', '420', '430', '440', '450', '500');
			$table = "bdchallenges";
		}

		foreach ($tabDivisions as $div) {
			if ($division == $div) {
				chgmntNomDivision($div, $table, $bdd, $smart);
			}
		}
		?>
	</div>
	<?php require("../bas.php"); ?>
</body>

</html>



<style>
	.infobulle {
		position: relative;
		/* les .infobulle deviennent référents */
		cursor: help;
	}

	/* on génère un élément :after lors du survol et du focus :*/

	.infobulle:hover::after,
	.infobulle:focus::after {
		content: attr(aria-label);
		/* on affiche aria-label */
		position: absolute;
		/*top: -3.4em;*/
		left: 70%;
		transform: translate(0px, 0px);
		/* on centre horizontalement  */
		z-index: 0;
		/* pour s'afficher au dessus des éléments en position relative */
		/* white-space: nowrap;  /* on interdit le retour à la ligne */
		border-color: black;
		border-style: solid;
		border-width: 1px;
		background: #5ec1ff;
		text-align: left;
	}
</style>