<?php
session_start();
include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");
require "constantes.php";
require '../Phpleague/phpab/consult/fonctions_matchs.php';
require '../Phpleague/phpab/lang/lang_fr.php';
$idLigue = 20;
$champLigue = $idLigue;
$sigleLigue = "(OCC)";
$comite = "phpab";
$AB = "AB";
$cmt = "ab";
$CMT = "AB";
$comiteNom = "Occitanie"; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<meta name="google-adsense-account" content="ca-pub-9177538664500260">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
	<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_occ_reg3.php/" />
	<link type="text/css" rel="stylesheet" href="../Phpleague/phpab/league.css" />
	<link type="text/css" rel="stylesheet" href="../formulaireDG.css">
	<link type="text/css" rel="stylesheet" href="resultat.css">
	<link type="text/css" rel="stylesheet" href="../ligne1.css">
	<title>
		<?php echo $champReg; ?> Occitanie
	</title>
	<meta name="description" content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
	<meta name="classification" content="Sport,Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<script language="JavaScript">
		function ouvrirPopup(page, nom, options) {
			window.open(page, nom, options);
		}
	</script>
	<!--
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
	-->
</head>

<body>

	<table class="table">
		<tr>
			<td colspan="3">
				<?php include("../images/page_image_al.php"); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include("../01ligne.php"); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include("../pub/pub_displayHorizontal.php"); ?>
			</td>
		</tr>
		<tr>
			<!-- Colonne de gauche -->
			<td class="colonneDroiteGauche">
				<p>
					<?php include("../01gauche.php"); ?>
				</p>
			</td>

			<!-- Colonne centrale -->
			<td class="colonneCentrale">
				<div align="center"><br>
					<h1> Compètitions Régionales</h1>
					<h2 class="titre">Ligue Occitanie</h2>
					<h2 class="commentaire">La ligue Occitanie est née de la fusion des comités territoriaux<br>
						du Languedoc, de l'Armagnac Bigorre, du pays Catalan et du comité<br>
						Midi Pyrénées en janvier 2018.</h2>
					<br>

					<?php
					include("liensDivers.php");
					include("sommaires.php");

					echo "<hr />" . " <hr />";
					//require("comPerso.php");

					echo "<h5>" . $REG3 . " - " . $P1 . "<br>	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
					$champ = 200191;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);

					require '../pub/pub_displayH_550.php';

					echo "<h5>" . $REG3 . " - " . $P2 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . " </font> <br><br></h5>";
					$champ = 200192;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);

					echo "<h5>" . $REG3 . " - " . $P3 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
					$champ = 200193;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);


					// require 'cadrePubHorizontal600.php';
					// include("comPerso2.php"); 


					echo "<h5>" . $REG3 . " - " . $P4 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
					$champ = 200194;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);


					echo "<h5>" . $REG3 . " - " . $P5 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . " 
            </font> <br><br></h5>";
					$champ = 200195;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);

					require '../pub/pub_displayH_550.php';

					echo "<h5>" . $REG3 . " - " . $P6 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
					$champ = 200196;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);

					echo "<h5>" . $REG3 . " - " . $P7 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
					$champ = 200197;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);


					// require 'cadrePubHorizontal600.php';
					// include("comPerso2.php"); 


					echo "<h5>" . $REG3 . " - " . $P8 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
					$champ = 200198;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);

					echo "<h5>" . $REG3 . " - " . $P9 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
					$champ = 200199;
					$champ2 = 0;
					affichage($champ, $champ2, $comite, $bdd);
					journeesReportees($comite, $champ, $bdd);
					perequation($comite, $champ, $bdd);




					echo "<hr />" . " <hr />";

					include("sommaires.php");
					include("liensDivers.php");

					require '../pub/pub_displayH_550.php';
					echo "<br />" . " <br />";
					?>
				</div>
			</td>

			<!-- Colonne de droite -->
			<td class="colonneDroiteGauche">
				<p>
					<?php include("../00droite.php"); ?>
				</p>
			</td>
		</tr>

	</table>
	<?php include("piedDePage.php"); ?>
	<footer>
	</footer>
</body>

</html>