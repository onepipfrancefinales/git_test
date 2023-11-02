 <?php
 
//*******************************************************	
//********  DonnÃ©es contenu dans la table bdclubs  ******
//*******************************************************
function affichageSaisonEnCours($equipe)
{
 global $saisonEnCours;

 require ("connect1/connection1.php") ;
 
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
	//echo $saisonEnCoursChiffre;
}





function infosclub($chaine)
{

require ("connect1/connection1.php") ;
global $nomLong, $comite, $id, $sigleComite, $nomChampion, $numLigue, $code,$idFfr;	
	
global $chaine2;
if ($chaine >0  )
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
//echo "numLigue : ".$numLigue;echo "<br/>";
//echo "id : ".$id;echo "<br/>";
//echo "code : ".$code;echo "<br/>";
//echo "comite : ".$comite;echo "<br/>";					
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
//**************   Nom du comité  **********************
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
//********  Données contenues dans la table infoclub  ******
//*******************************************************

function bdInfosClub($code)
{
	require ("connect1/connection1.php") ;
	
	global $dateCreation,$president,$tresorier,$secretaire,$contact,$siege,
		   $adresse,$cp,$ville,	$tel,$nomStade,	$adresseStade,$cpStade,$villeStade,
		   $telStade,$capacite,$site,$courriel,$correspondant,	$sigle,$couleurs,$comite1,
		   $nomEntente,$niveau,$info1,	$info2,$info3,$info4,$info5;
    $reponse = $bdd->query("SELECT * 
							FROM infosclub
							WHERE id= '$code' "); 
							While ($donnees = $reponse->fetch())
								{ 
								$dateCreation=$donnees['A1624'];		$president=	$donnees['A1601'];
								$tresorier=	$donnees['A1630'];			$secretaire=$donnees['A1602'];
								$contact=$donnees['A1603'];				$siege=$donnees['A1604'];
								$adresse=$donnees['A1605'];				$cp=$donnees['A1606'];
								$ville=$donnees['A1607'];				$tel=$donnees['A1608'];
								$nomStade=$donnees['A1609'];			$adresseStade=$donnees['A1610'];
								$cpStade=$donnees['A1611'];				$villeStade=$donnees['A1612'];
								$telStade=$donnees['A1613'];			$capacite=$donnees['A1614'];
								
								$site=$donnees['A1620'];				$courriel=$donnees['A1616'];
								$correspondant=$donnees['A1617'];		$sigle=$donnees['A1618'];
								$couleurs=$donnees['A1619'];			$comite1=$donnees['A1615'];
								$nomEntente=$donnees['A1631'];			$niveau=$donnees['A1632'];
								$info1=$donnees['A1621'];				$info2=$donnees['A1622'];
								$info3=$donnees['A1623'];				$info4=$donnees['A1626'];
								$info5=$donnees['A1627'];
								}
}

//**********************************************************

function saisons($code)
{
require ("connect1/connection1.php") ;

global  $terr2020,$terr2019,$terr2018,$terr2017,$terr2016,$terr2015,
		$terr2014,$terr2013,$terr2012,$terr2011,$terr2010,$terr2009,
		$terr2008,$terr2007;
		
global  $france2020,$france2019,$france2018,$france2017,$france2016,$france2015,
		$france2014,$france2013,$france2012,$france2011,$france2010,$france2009,
		$france2008,$france2007;
		
$reponse = $bdd->query("SELECT * 
						FROM bdsaisons 
						WHERE id='$code'");
	while ($donnees = $reponse->fetch())
		{
				 
		$terr2020 = $donnees['terr_2020']; 
		$terr2019 = $donnees['terr_2019']; 
		$terr2018 = $donnees['terr_2018']; 
		$terr2017 = $donnees['terr_2017']; 
		$terr2016 = $donnees['terr_2016']; 
		$terr2015 = $donnees['terr_2015']; 
		$terr2014 = $donnees['terr_2014']; 
		$terr2013 = $donnees['terr_2013'];
		$terr2012 = $donnees['terr_2012']; 
		$terr2011 = $donnees['terr_2011']; 
		$terr2010 = $donnees['terr_2010']; 
		$terr2009 = $donnees['terr_2009'];
		$terr2008 = $donnees['terr_2008']; 
		$terr2007 = $donnees['terr_2007'];
		
		$france2020 = $donnees['france_2020']; 
		$france2019 = $donnees['france_2019']; 
		$france2018 = $donnees['france_2018']; 
		$france2017 = $donnees['france_2017']; 
		$france2016 = $donnees['france_2016']; 
		$france2015 = $donnees['france_2015']; 
		$france2014 = $donnees['france_2014']; 
		$france2013 = $donnees['france_2013'];
		$france2012 = $donnees['france_2012']; 
		$france2011 = $donnees['france_2011']; 
		$france2010 = $donnees['france_2010']; 
		$france2009 = $donnees['france_2009'];
		$france2008 = $donnees['france_2008']; 
		$france2007 = $donnees['france_2007'];
		
		}
}

//*****************************************

function nbreTitre($nomChampion, $table, $categorie)
{
require ("connect1/connection1.php") ;

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

function palmares($nomChampion, $table, $categorie)
{
require ("connect1/connection1.php") ;

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

function nbreTitreEU($nomChampion)
{
require ("connect1/connection1.php") ;

$nbTitreEU = array();
global $nombreTitreEU;
$nbTitreEU=$bdd->query("SELECT COUNT(*)
					  FROM bdeurope  
					  WHERE champion='$nomChampion' 
					  AND categorie='eu' " );
$nbTitreEU = $nbTitreEU->fetch();
$nombreTitreEU = $nbTitreEU[0];
}

//**********************************************

function palmaresEU($nomChampion)
{
require ("connect1/connection1.php") ;

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