<?php
//*****************************************************************
//**                  Carte d'identité d'un club                 **
//*****************************************************************
function identiteClub($id_equipe, $bdd)
{

global $equipe, $numeroLigue, $id_ffr, $sigle, $nom1, $nom2, $nom3 , $nom4 ,$ligue, $nomComiteEntier, $sigleComite, $nomLigue, $comite; 

$reponse = $bdd->query("SELECT id, ligue, idffr, sigle,  nom_1, nom_2, nom_3, nom_4, ligue, comite, siglecomite
							FROM bdclubs 
							WHERE idffr='$id_equipe'"); 
								while ($donnees = $reponse->fetch() )
									{ 
									$equipe = $donnees['id'];
									$numeroLigue = $donnees['ligue'];
									$id_ffr = $donnees['idffr'];
									$sigle = $donnees['sigle'];
									$nom1 =  $donnees['nom_1'];
									$nom2 =  $donnees['nom_2'];
									$nom3 =  $donnees['nom_3'];
									$nom4 =  $donnees['nom_4'];
									$numeroLigue =  $donnees['ligue'];
									$NomComiteEntier = $donnees['comite'];
									$sigleComite = $donnees['siglecomite'];
									}
									
						
	require ("../../connect1/connection5.php");
	$reponse = $bdd->query("SELECT nomLigue, comite
							FROM comite 
							WHERE codeLigue='$numeroLigue'"); 
								while ($donnees = $reponse->fetch() )
									{ 
									$nomLigue = $donnees['nomLigue'];
									$comite = $donnees['comite'];
									}										
}


//***********************************************************************
//**               Recherche la présence d'une équipe                  **
//**			dans un championnatet (donc dans une table)            **
//***********************************************************************
Function recherchePresenceEquipe ( $equipe, $bdd)
{

global $comite, $connect;

$tabDivision =['phpf1_equipes', 'phpfed2_equipes', 'phpfed3NE_equipes', 'phpfed3GS_equipes']; 
$tabNomDivision = ['fed1', 'fed2', 'fed3NE', 'fed3GS'];

	for ($i= 0; $i<4; $i++)
	{
	
	require '../../connect1/connection3.php';
	$reponse = $bdd->query("select 	COUNT(id)
									FROM $tabDivision[$i]
									WHERE id='$equipe'"); 
										while ($row = $reponse->fetch() )
												{
													$valeur[$i]=$row[0]; 
												}
//	echo $tabNomDivision[$i]."=".$valeur[$i]."<br />";											
	}
		   
		    if ($valeur[0]==1)
					{
					$comite="f1";
					$connect = "connection3";
					}
			elseif ($valeur[1]==1)
					{
					$comite="fed2";
					$connect = "connection3";
					}
			elseif($valeur[2]==1)
					{
					$comite="fed3NE";
					$connect = "connection3";
					}
			elseif($valeur[3]==1)
					{
					$comite="fed3GS";
					$connect = "connection3";
					}
			else
					{
				$comite = $comite;
				$connect="connection2";
					}

}





//*****************************************************************************
//**               Recherche de la division et de la poule de l'equipe       **
//*****************************************************************************

function divisionEtPoule($comite, $equipe, $bdd)
{

global $divisionChiffre, $divisionNom;


$bdcomite_equipes="php".''.$comite.''."_equipes";
$bdcomite_divisions="php".''.$comite.''."_divisions";
 
$reponse = $bdd->query("SELECT $bdcomite_equipes.id_champ, $bdcomite_divisions.nom
						FROM $bdcomite_equipes
						INNER JOIN $bdcomite_divisions ON $bdcomite_divisions.id = $bdcomite_equipes.id_champ
						WHERE $bdcomite_equipes.id='$equipe'"); 
							while ($row = $reponse->fetch() )
									{ 
									$divisionChiffre = $row[0];
									$divisionNom = $row[1];
									}			
}


//*************************************************************
//**             Nbre de journée de championnat              **
//*************************************************************
Function NbreDeJournee ($comite, $equipe, $bdd)
{

global $nbreJourneeMax;

$comite_matchs= "php".$comite."_matchs";

$reponse = $bdd->query("SELECT count(id_journee)
			FROM $comite_matchs
			WHERE id_equipe_dom='$equipe' or id_equipe_ext='$equipe'");
				
				while ($row = $reponse->fetch() )
					{
					  $nbreJourneeMax=$row[0]; 
					}
					
				
}

//*************************************************************
//**                       Calendrier                        **
//** 				 Dates et oppositions                    **
//*************************************************************
function calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd)
{
$comite_matchs = "php".$comite."_matchs";
$journeeUn = ($divisionChiffre*100) + 1;
$journeeMax = ($divisionChiffre*100) + $nbreJourneeMax;

//$journeeUn = 17401;
//$journeeMax = 17418;

$tabNumEquipe = array();
$tabDates = array();
	for ($i= 1; $i<= $nbreJourneeMax; $i++)
	{
	global ${"numEquipe".$i}, ${"dates".$i};
	
	
	$reponse = $bdd->query("SELECT id_equipe_dom, date_reelle
						FROM $comite_matchs
						WHERE id_journee BETWEEN $journeeUn AND $journeeMax and (id_equipe_dom=$equipe OR id_equipe_ext=$equipe)
						ORDER BY id_journee  ASC ");
							while ($row = $reponse->fetch() )
								{
								$tabNumEquipe[] = $row[0];
								$tabDates[] = $row[1];
								}
	if(isset($tabNumEquipe[$i-1] )) ${"numEquipe".$i}=$tabNumEquipe[$i-1];else ${"numEquipe".$i} ="";
	if(isset($tabDates[$i-1] )) ${"dates".$i}=$tabDates[$i-1]; else ${"dates".$i} ="--";
	}


$tabNomEquipe = array();

$tab =['phpf1_equipes', 'phpfed2_equipes', 'phpfed3NE_equipes', 'phpfed3GS_equipes']; 

	$comite_clubs = "php".$comite."_clubs";
	
	
	for ($i= 1; $i<= $nbreJourneeMax; $i++)
	{
	global ${"nomEquipe".$i};

	$reponse = $bdd->query("SELECT nom
							FROM $comite_clubs
							WHERE  id =  ${"numEquipe".$i} ");
							
							while ($row = $reponse-> fetch())
								{
								$tabNomEquipe[] = $row[0];
								}
	if(isset($tabNomEquipe[$i-1] )) ${"nomEquipe".$i} =  $tabNomEquipe[$i-1]; else ${"nomEquipe".$i} ="**";
	
	}
}





//********************************************************************************
//**                      Palmarès d'une équipe      	    					**
//********************************************************************************

function palmaresEquipes($id_equipe, $bdd)
{

identiteClub($id_equipe, $bdd);

if (isset($nom1)) $nom1 = $nom1 ; else $nom1 = "";
if (isset($nom2)) $nom2 = $nom2 ; else $nom2 = "";
if (isset($nom3)) $nom3 = $nom3 ; else $nom3 = "";
if (isset($nom4)) $nom4 = $nom4 ; else $nom4 = "";


//*****       Recherche du nombre de titre ************************

Global $nbreTitre, $nom1, $id_equipe;
//$categorie = array(A, B);


$reponse = $bdd->query("SELECT count(saison)
						FROM bdequipe1 
						WHERE entente='$nom1' or entente='$nom2' or entente='$nom3' or entente='$nom4' 
						ORDER BY saison "); 
								while ($row = $reponse->fetch() )
									{ 
										$nbreTitre=$row[0];
										
									
									}
							
//	echo "nbre titre : ".$nbreTitre;
								
//************    Affichage       ********								
$tabSaison = array();
$tabTitre = array();
$tabChampionnat = array ();
$tabDivision = array();									
									
	
	
	
	
	for ($i=0; $i<	$nbreTitre; $i++)
	{	
	global ${"saison".$i},${"titre".$i},${"championnat".$i},${"division".$i} ;
							
	$reponse = $bdd->query("SELECT saison, titre, championnat, division
						FROM bdequipe1 
						WHERE entente='$nom1' or entente='$nom2' or entente='$nom3' or entente='$nom4' 
						ORDER BY saison DESC"); 
								while ($row = $reponse->fetch() )
									{ 
										$tabSaison[]=$row[0];
										$tabTitre[]=$row[1];
										$tabChampionnat[]=$row[2];
										$tabDivision[]=$row[3];								
									}

			if (isset($tabSaison[$i]))	${"saison".$i}	=	$tabSaison[$i]; else 	${"saison".$i}="";		
			if (isset($tabTitre[$i]))	${"titre".$i}	=	$tabTitre[$i]; else 	${"titre".$i}="";	
			if (isset($tabChampionnat[$i]))	${"championnat".$i}	=	$tabChampionnat[$i]; else 	${"championnat".$i}="";	
			if (isset($tabDivision[$i]))	${"division".$i}	=	$tabDivision[$i]; else 	${"division".$i}="";
								
	}									
									
}




//********** Connexion ************

function connection($connect) 
{
	if ($connect == connect1)
	$connection = "/connect1/connection1.php";
	elseif ($connect == connect2)
	$connection = "/connect1/connection2.php";
	elseif ($connect == connect3)
	$connection = "/connect1/connection3.php";
}

?>