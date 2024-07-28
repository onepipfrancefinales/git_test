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
	// Recherche de la derniere ann�e enregistr�e

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
	for ($i = $maxAnnee; $i > 2000; $i--) {
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
		//echo $tabPalmaresHonneur[0];		
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

	// Recherche de la derniere ann�e enregistr�e
	$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE (rang='$rang' or rang='$rang+9000') 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison < '2021'");
	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	// d�claration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i = $maxAnnee; $i > 2000; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de r�cup�rer les champions du comit� demand�
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i 
				 and (rang='$rang' or rang='$rang+9000') 
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