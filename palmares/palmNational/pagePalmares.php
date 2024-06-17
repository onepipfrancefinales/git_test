<?php
if (isset($_GET['division'])) $division = $_GET['division'];
else $division = '+';
if (isset($nomDivision));
else $nomDivision = '*';
if (isset($base));
else $base = '-';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta name="description" content="Palmarès des champions de france par divisions et pas années">
	<meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="All">
	<title>Champions de FRANCE </title>
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

				if ($division == 110)
					require("top14.php");
				else {

					require("palmaresLigues2023.php");
					require("palmaresLigues.php");
					echo "<hr />";
					echo "<i>" . "Saison 2018-2019 : Réformes Territoriales";
					echo "<br>";
					echo "Les 27 comités territoriaux métropolitains sont transformés en 13 ligues régionales,
							identiques aux nouvelles régions administratives françaises." . "</i>";
					echo "<br>" . "<hr>";
					require("palmares.php");
					/*
					if ($division == '170' or $division == '180' or $division == '190' or $division == '2070') {
						//require("palmaresLigues2023.php");
						//require("palmares2023.php");
					}

					require("palmaresLigues.php");
					echo "<hr>";
					echo "<i>" . "Saison 2018-2019 : Réformes Territoriales";
					echo "<br>";
					echo "Les 27 comités territoriaux métropolitains sont transformés en 13 ligues régionales,
						identiques aux nouvelles régions administratives françaises.			" . "</i>";
					echo "<br>" . "<hr>";
					require("palmares.php");
					*/
				}
				?>
			</td>
			<td class="colonne">
				<?php include("../../00droite.php"); ?>
			</td>
		</tr>
		<tr>
			<?php include("../../footer.php");  ?>
		</tr>
	</table>
	<footer> </footer>
</body>

</html>