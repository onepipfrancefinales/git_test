 <?php
function appartientA($bddComite, $idEquipe,  $bdd){
	
Global $resultat;
$php_equipes = "php".$bddComite."_equipes";

$reponse = $bdd->query("SELECT COUNT(id) 
						FROM $php_equipes
						WHERE id='$idEquipe'"); 
		
		while ($row = $reponse->fetch())
		{ 
		$resultat = $row[0];
		}

echo $resultat;		
}





 
//*******************************************************	
//********  Donn�es contenu dans la table bdclubs  ******
//*******************************************************
function affichageSaisonEnCours($equipe, $bdd)
{
 global $saisonEnCours, $saisonEnCoursChiffre;
 
 $requete =$bdd->query( "
		   SELECT bddivisions.division, bdsaisons.en_cours 
		   FROM bdsaisons 
		   INNER JOIN bddivisions
		   WHERE bdsaisons.id = $equipe
		   AND bdsaisons.en_cours = bddivisions.id ");
		  
 While ($row = $requete->fetch())
	{ 
	 $saisonEnCours=$row[0];
	 $saisonEnCoursChiffre=$row[1];
	}
	
}



function infosclub($chaine, $bdd)
{
global $nomLong, $comite, $id, $sigleComite, $nomChampion, $numLigue, $code,$idFfr;	
	
global $chaine2;
if (is_numeric($chaine))
{
	if (strlen($chaine)==7)
		{
		$chaine2 = substr($chaine,-5);
		//echo "type numerique7";echo "<br />";
		}
	else
		{
		$chaine2 = $chaine;
		//echo "type numerique5";echo "<br />";	
		}
			
		$requete =$bdd->query( "SELECT sigle, siglecomite, id, nom_1 , ligue, comite, idffr
						FROM bdclubs  
						WHERE substr(id,-5) = $chaine2 and  type ='M' ");			
}
else
{
	$chaine2=$chaine	;
	//echo "type lettre";echo "<br />";
	$requete =$bdd->query( "SELECT sigle, siglecomite, id, nom_1 , ligue, comite, idffr
							FROM bdclubs  
							WHERE nom_1 ='$chaine2'
							OR nom_2 ='$chaine2'
							OR nom_3 ='$chaine2'
							OR nom_4 ='$chaine2'
							OR sigle ='$chaine2'
							OR idffr ='$chaine2'");
}	

if (isset ($id)) $id=$id; else $id=0;
if (isset ($code)) $code=$code; else $code=0;
if (isset ($numLigue)) $numLigue=$numLigue; else $numLigue=0; 

	
	While ($row = $requete->fetch())
						{ 
						$nomLong=$row[0];
						$sigleComite=$row[1];
						$id=$row[2];
						$nomChampion=$row[3];
						$numLigue=$row[4];
						$idFfr = $row[6];
						$code=substr($id,-5);
						
						}					
}

//*******************************************************	
//**************   Nom de la Ligue **********************
//*******************************************************

function nomLigue ($numLigue, $bdd)
{
   if ($numLigue>0)
   {
	global $nomLigue;
	$requete =$bdd->query( "SELECT nom
							FROM bdligue
							WHERE id=$numLigue");
				While ($row = $requete->fetch())
						{ 
						$nomLigue=$row[0];
						}
	}
}
//*******************************************************	
//**************   Nom du comit�  **********************
//*******************************************************

function nomComite ($sigle, $id, $bdd)
{
global $idComite , $nomComite, $sigleComite, $appartenanceLigue, $nbreClubs;

$reponse = $bdd->query("SELECT id, nom, sigle, sigleLigue, nbre_club
						FROM bdcomite 
						WHERE sigle='$sigle' OR id = '$id'");  
								while ($row = $reponse->fetch() )
									{ 
									$idComite = $row[0];
									$nomComite = $row[1];
									$sigleComite = $row[2];
									$appartenanceLigue = $row[3];
									$nbreClubs = $row[4];
									}
}

//*******************************************************	
//********  Donn�es contenues dans la table infoclub  ******
//*******************************************************

function bdInfosClub($code, $bdd)
{	
  global $dateCreation,$president,$tresorier,$secretaire,$contact,$siege,$idFFR,
		 $adresse,$cp,$ville,	$tel,$nomStade,	$adresseStade,$cpStade,$villeStade,
		 $telStade,$capacite,$site,$courriel,$correspondant,	$sigle,$couleurs,$comite1,
		 $nomEntente,$niveau,$info1,	$info2,$info3,$info4,$info5;
  
  $reponse = $bdd->query("
			 SELECT * 
			 FROM infosclub
			 WHERE id= '$code' "); 
							 
  While ($donnees = $reponse->fetch())
	{ 
	 $president=$donnees['A1601'];		$secretaire=$donnees['A1602'];
	 $contact=$donnees['A1603'];			$siege=$donnees['A1604'];
	 $adresse=$donnees['A1605'];			$cp=$donnees['A1606'];
	 $ville=$donnees['A1607'];				$tel=$donnees['A1608'];
	 $nomStade=$donnees['A1609'];			$adresseStade=$donnees['A1610'];
	 $cpStade=$donnees['A1611'];			$villeStade=$donnees['A1612'];
	 $telStade=$donnees['A1613'];			$capacite=$donnees['A1614'];
									
	 $comite1=$donnees['A1615'];				$courriel=$donnees['A1616'];
	 $correspondant=$donnees['A1617'];		$sigle=$donnees['A1618'];
	 $couleurs=$donnees['A1619'];			$site=$donnees['A1620'];	
	 $info1=$donnees['A1621'];				$info2=$donnees['A1622'];
	 $info3=$donnees['A1623'];				$dateCreation=$donnees['A1624'];
	 $idFFR=$donnees['A1625'];	 			$info4=$donnees['A1626'];	
	 $info5=$donnees['A1627'];
	 $tresorier=	$donnees['A1630'];
	 $nomEntente=$donnees['A1631'];			$niveau=$donnees['A1632'];
	//echo "test".$idFFR;
	}
}

//**********************************************************

function saisons($code, $annee, $bdd)
{
 
 for ($i=2007; $i<=$annee; $i++)
	{
	 global ${"terr".$i};
	 global ${"france".$i};
	 
	
	 $reponse = $bdd->query("
			SELECT * 
			FROM bdsaisons 
			WHERE id='$code'");

	 while ($donnees = $reponse->fetch())
		{
		${"terr".$i} = $donnees['terr_'.$i];
		${"france".$i} = $donnees['france_'.$i];
		}
	}	
}

//*****************************************
function nbreTitre($nomChampion, $table, $categorie, $bdd)
{
 $nbTitre = array();
 global $nombreTitre;
 $nbTitre=$bdd->query("SELECT COUNT(*)
					  FROM $table  
					  WHERE entente='$nomChampion' 
					  AND categorie='$categorie' " );

 $nbTitre = $nbTitre->fetch();
 $nombreTitre = $nbTitre[0];
 
}

//************************************************

function palmares($nomChampion, $table, $categorie, $bdd)
{
 $reponse = $bdd->query("SELECT *
						FROM $table
						WHERE entente='$nomChampion' and categorie='$categorie'  
						ORDER BY saison desc");
		
					while ($donnees =$reponse->fetch())
						{ 
echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'] 
		.' '.$donnees['champion_entente'].' '."<br />";
						}					
}

//**************************************************

function nbreTitreEU($nomChampion, $bdd)
{
//require ("connect1/connection1.php") ;

$nbTitreEU = array();
global $nombreTitreEU;
$nbTitreEU=$bdd->query("
		   SELECT COUNT(*)
		   FROM bdeurope  
		   WHERE champion='$nomChampion' 
		   AND categorie='EU' " );
$nbTitreEU = $nbTitreEU->fetch();
$nombreTitreEU = $nbTitreEU[0];
}

//**********************************************

function palmaresEU($nomChampion, $bdd)
{
//require ("connect1/connection1.php") ;

$reponse = $bdd->query("SELECT *
						FROM bdeurope
						WHERE champion='$nomChampion' and categorie='eu'  
						ORDER BY saison desc");
		
					while ($donnees =$reponse->fetch())
						{ 
					echo $donnees['saison'].' '.
						 $donnees['titre'].' '.
						 $donnees['division'].''.
						 "<br />";
						}						
}
?>