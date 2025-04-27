 <?php
	if (isset($_GET['annee'])) $annee = $_GET['annee'];
	else $annee = 2025;
	if (isset($_GET['division'])) $division = $_GET['division'];
	else $division = 170;
	if (isset($_GET['divFem'])) $divFem = $_GET['divFem'];
	else $divFem = "fed1";
	require("../../phases_finales2019/fonctionsChampFrance2019.php");
	require '../../connect/connexion5.php';
	nomDivision($division);

	require '../../connect/connexion1.php';

	$reponse = $bdd->query("	
	SELECT type 
	FROM bdpffrance 
	WHERE id='$division' ");

	while ($row = $reponse->fetch()) {
		$type = $row[0];
	}


	//if (isset ($_GET['type2'])) $type2=$_GET['type2'];else $type2="";
	//echo "type = ".$type2;
	?>
 <!DOCTYPE html>
 <html lang="fr">

 <head>
 	<title>Championnat de France <?php echo $annee . ' ' . $nomDivision; ?></title>
 	<link rel="canonical" href="https://francefinalesrugby.fr/smart/pf/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>">
 	<meta name="description" content="Phase finale <?php echo $annee; ?> du championnat de France <?php echo $nomDivision; ?>">

 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 	<!--<link rel="stylesheet" type="text/css" href="../2.css">-->
 	<link rel="stylesheet" type="text/css" href="AA2.css">
 	<link type="text/css" rel="stylesheet" href="../10.css">
 	<link type="text/css" rel="stylesheet" href="paramTiroir.css">
 	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
 	<meta name=viewport content="width=device-width, initial-scale=1">
 </head>

 <body class="backgroundEAECEB colorBlack">
 	<?php


		require '../../connect/connexion1.php';

		//	trenteDeuxieme2019($division, $annee, $bdd);
		date2019($division, $annee, $bdd);

		traitementScores(3201, 3264);
		traitementScores(1601, 1632);
		traitementScores(8001, 8016);
		traitementScores(4001, 4008);
		traitementScores(2001, 2004);
		//championDeFrance($clubA1001, $clubA1002, $A1001, $A1002, $bdd);


		?>
 	<div class="fixed-header">
 		<div class="container">
 			<?php
				include("entete.php");
				require 'liensdiv.php';
				//require 'liensdiv2022.php';
				echo "<br>";
				?>
 		</div>
 	</div>

 	<!-- fin entete figée -->

 	<div class="container">
 		<br><br><br><br><br><br><br><br>
 		<?php
			//*******************************************************************************************************************//
			//**************  Exceptions : affichage Double championnat sur une même page (Ex : feminines) ************************//
			//*******************************************************************************************************************//
			$tabDivisions = array(170,180,190,270);
			if (in_array($division, $tabDivisions) and $annee== 2025) {
				trenteDeuxieme2019($division, $annee, $bdd);
				require 'equipesEngagees.php';
			
}
		elseif ($division == 280) {

				$champ = "280";
				echo "<h1 class=\"center  styleArial\"> Elite 1 </h1>";

				trenteDeuxieme2019($division, $annee, $bdd);

				/*	8me / 8meAR / Pas de 8me */

				if (substr($type, 5, 2) == '16')
					require '8meAR.php';
				elseif (substr($type, 5, 2) == '08')
					require '8me.php';

				/* quarts /quarts AR /Pas de Quarts*/

				if (substr($type, 7, 2) == '08')
					require 'quartsAR.php';
				elseif (substr($type, 7, 2) == '04')
					require 'quarts.php';

				/* demi / demi AR / pas de demi*/

				if (substr($type, 9, 2) == '04')
					require 'demiAR.php';
				elseif (substr($type, 9, 2) == '02')
					require 'demi.
				php';

				/* finale / finale AR */

				if (substr($type, 9, 2) == '02') {
					require 'finale.php';
				} else {
					//finale AR = 22
					require 'finaleAR.php';
				}

				echo "<hr>";
				echo "<hr>";
				echo "<br>";

				echo "<h1 class=\"center styleArial\"> Elite 2 </h1>";
				trenteDeuxieme2019(285, $annee, $bdd);
				$champ = "285";


				if (substr($type, 9, 2) == '04')
					require 'demiAR.php';
				elseif (substr($type, 9, 2) == '02')
					require 'demi.php';

				/* finale / finale AR */

				if (substr($type, 9, 2) == '02') {
					require 'finale.php';
				} else {
					//finale AR = 22
					require 'finaleAR.php';
				}
			}

			//***************** Feminines Fédérale 1   ***********************
			elseif ($division == 290 || $division == 295) {

				trenteDeuxieme2019($division, $annee, $bdd);
				if ($divFem == "femFed1" || $divFem == "femFed2") {

			?>
 				<br><br>
				<table class="borderNone">
 					<tr>
 						<td  class="coin9"> <a href="pagePhaseFinale.php?divFem=femFed1&division=290&annee=<?php echo $annee; ?>">Fédérale 1</td>
 						<td  class="coin9"> <a href="pagePhaseFinale.php?divFem=femFed2&division=295&annee=<?php echo $annee; ?>">Fédérale 2</td>
 					</tr>
 				</table>
 				

 		<?php
				}
				if ($divFem == "femFed1") {
					echo "<h1 class=\"center  styleArial\" style=\"margin-top: 0px;\">Féminines Fédérale 1 </h1>";
					require "femFed1.php";
				} else if ($divFem == "femFed2") {
					echo "<h1 class=\"center  styleArial\" style=\"margin-top: 0px;\">Féminines Fédérale 2 </h1>";
					require "femFed2.php";
				}
			} else if (substr($type, 0, 1) == '8') {

				//**************  Exceptions type débute par 8 *************************	

				trenteDeuxieme2019($division, $annee, $bdd);
				if ($division == '110')
					require 'top14.php';

				elseif ($division == '120')
					require 'prod2.php';


				elseif ($division == '130') {
					require 'nationale1.php';
					//	require 'matchAccession.php';
				} elseif ($division == '135')
					require 'nationale2.php';

				elseif ($division == '140')
					require 'quartsAR.php';
				echo "<br />";
				//require 'demiAR.php';

			}
			// *************    insertion de barrages   ********************************
			else {
	
				global $division2;
				if (rechercheBarrages($division, $annee, $bdd))
					require "barrages11.php";

				// ***************   phases réguliéres   ********************************

				trenteDeuxieme2019($division, $annee, $bdd);
				if ((substr($type, 0, 1) == '9' or substr($type, 0, 1) == '7') and strlen($division) == '3') {

					/* 32me / 32meAR  Pas de 32me */
					if (substr($type, 0, 3) == '964' or substr($type, 0, 3) == '764')
						require '32meAR.php';
					elseif (substr($type, 0, 3) == '932' or substr($type, 0, 3) == '732')
						require '32me.php';

					/*	16me / 16meAR / Pas de 16me*/
					if (substr($type, 3, 2) == '32')
						require '16meAR.php';
					elseif (substr($type, 3, 2) == '16')
						require '16me.php';

					/*	8me / 8meAR / Pas de 8me */

					if (substr($type, 5, 2) == '16')
						require '8meAR.php';
					elseif (substr($type, 5, 2) == '08')
						require '8me.php';

					/* quarts /quarts AR /Pas de Quarts*/

					if (substr($type, 7, 2) == '08')
						require 'quartsAR.php';
					elseif (substr($type, 7, 2) == '04')
						require 'quarts.php';

					/* demi / demi AR / pas de demi*/

					if (substr($type, 9, 2) == '04')
						require 'demiAR.php';
					elseif (substr($type, 9, 2) == '02')
						require 'demi.php';

					/* finale / finale AR */

					if (substr($type, 9, 2) == '02') {
						require 'finale.php';
					} else {
						//finale AR = 22
						require 'finaleAR.php';
					}
				}
			}

			/*************************************************************/
			/* affichage  d'un double championnat */

			require '../bas.php';

			?>
 	</div>
 </body>

 </html>