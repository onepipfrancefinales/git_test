<?php
function nomComite($sigle, $id, $bdd)
{

	global $idComite, $nomComite, $sigleComite,  $appartenanceLigue;

	$reponse = $bdd->query("SELECT id, nom, sigle, sigleLigue 
						FROM bdcomite 
						WHERE sigle='$sigle' OR id = '$id'");

	while ($row = $reponse->fetch()) {
		$idComite = $row[0];
		$nomComite = $row[1];
		$sigleComite = $row[2];
		$appartenanceLigue = $row[3];
	}
}
?>

<?php
function nomLigue($idLigue, $sigleLigue, $bdd)
{
	global $idLigue, $nomLigue, $sigleLigue;
	$reponse = $bdd->query("SELECT id, nom, sigle
						FROM bdligue 
						WHERE sigle='$sigleLigue' OR id='$idLigue'");
	while ($row = $reponse->fetch()) {
		$idLigue = $row[0];
		$nomLigue = $row[1];
		$sigleLigue = $row[2];
	}
}


//***********************************************************************/
//   Palmares Ligues (après la saison 2017-2018 et la saison 2021-2022) 
//	 Palmarès ligues (après la saison 2022 -- réformes des divisions)                                   */
//***********************************************************************/

function palmaresLigues($comite, $rang, $bdd, $anneeReforme)
{
	$nbre = 0;
	if ($anneeReforme == true) {

		$anneeRef = 2022;
		// Recherche de la derniere année enregistrée
		$reponse = $bdd->query("SELECT MAX(saison)
							FROM bdequipe1
							WHERE rang='$rang' 
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre ='Champion'
							AND saison > '2022'");
	} else {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
							FROM bdequipe1
							WHERE rang='$rang' 
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre ='Champion'
							AND saison BETWEEN '2018' AND '2022'");
	}


	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	//echo $maxAnnee;
	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();
	for ($i = $maxAnnee; $i > $anneeRef; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de r�cup�rer les champions du comit� demand�
		$reponse = $bdd->query("SELECT  champion
							FROM bdequipe1
							WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
							ORDER BY saison");

		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo substr(${"honneur" . ($i)}, 0, 20);
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}

//****************************************************************************
function saisonLigues($rang, $comite, $bdd, $reforme)
{

	global $maxAnnee;
	$nbre = 0;
	// Recherche de la derniere ann�e enregistr�e

	$tabSaison = array();
	//echo $reforme;
	if ($reforme == true) {

		$anneeRef = 2022;

		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe1
				WHERE rang='$rang' 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison > '2022'");
	} else {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe1
				WHERE rang='$rang' 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison BETWEEN '2018' AND '2022'");
	}

	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}
	//echo $maxAnnee;
	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)



	for ($i = $maxAnnee; $i > $anneeRef; $i--) {
		global ${"saison" . ($i)};
		// requete permettant de récupèrer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe1
				 WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabSaison[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabSaison[$nbre])) ${"saison" . ($i)} = $tabSaison[$nbre];
		else ${"saison" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";

		$nbre = $nbre + 1;
	}
}

function palmaresLigues2($comite, $rang, $bdd, $reforme)
{


	$nbre = 0;
	// Recherche de la derniere année enregistrée

	if ($reforme == true) {
		$anneeRef = 2022;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE rang='$rang'  
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison > '2022'");
	} else {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE rang='$rang'  
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison BETWEEN '2018' AND '2022'");
	}



	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i = $maxAnnee; $i > $anneeRef; $i--) {
		global ${"honneur" . ($i)};
		// requete permettant de récupèrer les champions de la ligue demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i and (rang='$rang' or rang='$rang + 9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";	
		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo ${"honneur" . ($i)};
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


function saisonLigues2($rang, $comite, $bdd, $reforme)
{
	$nbre = 0;
	// Recherche de la derniere année enregistrée
	if ($reforme == false) {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE (rang='$rang' or rang='$rang+9000') 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison BETWEEN '2018' AND '2022'");
	}


	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i = $maxAnnee; $i > $anneeRef; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de récupèrer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i and (rang='$rang' or rang='$rang+9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}

function palmaresParFinales($annee, $table, $minRang, $maxRang, $bdd)
{

	$tabDivision = array();
	$tabChampion = array();
	$tabComite1 = array();
	$tabViceChampion = array();
	$tabComite2 = array();
	$tabScore1 = array();
	$tabScore2 = array();

	$reponse2 = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2 
						FROM $table
						WHERE saison='$annee' and titre = 'Champion' 
						AND rang < $maxRang and rang >= $minRang 
						AND rang2 < $maxRang and rang2 >= $minRang 
						ORDER BY rang");

	while ($donnees =  $reponse2->fetch()) {
		$tabDivision[] = $donnees['division'];
		$tabChampion[] = $donnees['champion'];
		$tabComite1[] = $donnees['comite1'];
		$tabViceChampion[] = $donnees['vice_champion'];
		$tabComite2[] = $donnees['comite2'];
		$tabScore1[] = $donnees['score1'];
		$tabScore2[] = $donnees['score2'];
	}

	$pattern = "/[0-9]{7}/i";
	$tabNomChamp = array();
	$tabNomVice = array();



	for ($i = 0; $i < count($tabDivision); $i++) {

		// traitement du champion
		if (preg_match($pattern, $tabChampion[$i]) == 1) {

			$reponseCode = $bdd->query("SELECT nom_1
										FROM bdclubs 
										WHERE id=' $tabChampion[$i]' ");

			while ($donnees =  $reponseCode->fetch()) {
				$champion = $donnees['nom_1'];
			}
			array_push($tabNomChamp, $champion);
		} else {
			array_push($tabNomChamp, $tabChampion[$i]);
		}

		// traitement du vice champion
		if (preg_match($pattern, $tabViceChampion[$i]) == 1) {

			$reponseCode = $bdd->query("SELECT nom_1
										FROM bdclubs 
										WHERE id=' $tabViceChampion[$i]' ");

			while ($donnees =  $reponseCode->fetch()) {
				$viceChampion = $donnees['nom_1'];
			}
			array_push($tabNomVice, $viceChampion);
		} else {
			array_push($tabNomVice, $tabViceChampion[$i]);
		}

		echo  '<strong>' . $tabDivision[$i] . ' : ' . '</strong>' . $tabNomChamp[$i] . ' ' . $tabComite1[$i] . ' - ' . $tabNomVice[$i] . ' ' . $tabComite2[$i] . ' ' . $tabScore1[$i] . ' - ' . $tabScore2[$i];
		echo "<br>";
	}
}





function palmaresParAnnee($annee, $table, $minRang, $maxRang, $bdd)
{

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


function palmaresParDivision($division, $table, $bdd)
{
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
		echo  $tabSaison[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i];
		echo "</h4>";
	}
}

?>
<?php
//***********************************************************************/
//                  Palmares Comités (Avant la saison 2018-2019)                                    */
//***********************************************************************/

function palmares($comite, $rang, $bdd, $debut, $fin)
{
	$nbre = 0;
	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();
	for ($i = $debut; $i > $fin; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de récupèrer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
							FROM bdequipe1
							WHERE  saison=$i 
							AND rang='$rang' 
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre='Champion'
							ORDER BY saison");

		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  		
		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo substr(${"honneur" . ($i)}, 0, 20);
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


//****************************************************************************
function saison($rang, $comite, $bdd, $debut, $fin)
{
	$nbre = 0;
	// Recherche de la derniere année enregistrée

	$tabSaison = array();

	//echo $maxAnnee;
	// d�claration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	for ($i = $debut; $i > $fin; $i--) {
		global ${"saison" . ($i)};
		// requete permettant de r�cup�rer les champions du comit� demand�
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe1
				 WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabSaison[] = $row[0];
		}

		if (isset($tabSaison[$nbre])) ${"saison" . ($i)} = $tabSaison[$nbre];
		else ${"saison" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";

		$nbre = $nbre + 1;
	}
}



function palmares2($comite, $rang, $bdd)
{
	$nbre = 0;
	// Recherche de la derniere ann�e enregistr�e
	$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE rang='$rang' 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison < '2021'");
	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	//echo $maxAnnee;
	// d�claration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();
	for ($i = $maxAnnee; $i > 1990; $i--) {
		global ${"honneur" . ($i)};

		// requete permettant de r�cup�rer les champions du comit� demand�
		$reponse = $bdd->query("SELECT  champion
							FROM bdequipe2
							WHERE  saison=$i 
							AND rang='$rang' AND rang2='2'
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre='Champion'
							ORDER BY saison");

		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";
		//echo $tabPalmaresHonneur[20];		
		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo substr(${"honneur" . ($i)}, 0, 30);
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


function saison2($rang, $comite, $bdd)
{
	$nbre = 0;

	// Recherche de la derniere année enregistr�e
	$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE (rang='$rang' or rang='$rang + 9000') 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison < '2021'");
	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	// Déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();

	for ($i = $maxAnnee; $i > 1990; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de récupérer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i 
				 and (rang='$rang' or rang='$rang + 9000') 
				 and comite1 ='$comite' 
				 and championnat != 'de France' 
				 and titre='Champion'
				 order by saison");
		while ($donnees = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


function championsEurope($rang, $bdd)
{

	$pattern = "/[0-9]{7}/i";

	$reponse = $bdd->query("SELECT * 
FROM bdeurope 
WHERE rang='$rang'and titre='Vainqueur' 
ORDER BY saison DESC");



	while ($donnees =  $reponse->fetch()) {

		$saison = $donnees['saison'];
		$champion = $donnees['champion'];
		$comite = $donnees['comite1'];

		if (preg_match($pattern, $champion) == 1) {
			//echo preg_match($pattern, $champion);

			$reponseCode = $bdd->query("SELECT nom_1
	FROM bdclubs 
	WHERE id='$champion' ");

			while ($donnees =  $reponseCode->fetch()) {

				$champion = $donnees['nom_1'];
			}
		}
?>


		<div class="size4 styleArial">
			<?php echo $saison . ' ' . $champion . ' ' . $comite; ?>
		</div> <br>
<?php
	}
}
?>