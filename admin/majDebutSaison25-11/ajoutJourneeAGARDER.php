<?php
//récuperation des variables
if (isset ($_GET['bddComitePlusId'])) $bddComitePlusId = $_GET['bddComitePlusId']; else $bddComitePlusId = "";
echo $bddComitePlusId;

$ligue000000 = substr($bddComitePlusId,-2);
$ligue =substr($bddComitePlusId,0,5);

if ($ligue == "phppr")
	$ligue = "phppro";
elseif ($ligue == "phpid")
	$ligue = "phpidf";
else
	$ligue = $ligue;

if (isset ($_GET['base'])) $base = $_GET['base']; else $base = "";
if (isset ($_POST['fichier'])) $test = $_POST['fichier']; else $test = "erreur";

$base = "matchs";

echo "Ligue : ".$ligue;echo "<br />";
echo "Base : ".$base;echo "<br />";
$dest = '/admin/majDebutSaison/fichiers/';
echo "chemin de stockage : ".$dest;
echo "<br/>";

$cheminn=dirname(__FILE__)."/fichiers/";
echo "chemin dirname : ".$cheminn;
echo "<br/>";

echo "chemin absolu du fichier : ".$cheminn;
echo "<br/>";
//echo "nom du fichier : ".['fichier']['name'];echo "<br/>";
//echo "taille du fichier : ".$_FILES['fichier']['size'];echo "<br/>";
//echo "nom du fichier(basemane) :".basename($_FILES['fichier']['name']);
echo "<br/>";
$fichier=$_FILES['fichier']['name'];
$fichierChemin = $_FILES['fichier']['tmp_name'];


//**********   Recherche du  caractère de séparation  **********************
 
//$fichierA = fopen("$cheminn", 'r+');
//Recuperation de la 1re ligne du fichier
//$fichierLigne = fgets($fichierA, 4096); 


//recherche des caractere de séparation

$caratereSeparation =",";
$chemin_fichier = $_SERVER["DOCUMENT_ROOT"].$dest;
echo "<br/>";

//************************************
//echo $_FILES['fichier'];


echo "????? : ".$cheminn.$fichier;
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
	echo "<br/>";
	var_dump($_FILES['fichier']['tmp_name']) ;echo "<br/>";
	var_dump($fichier) ;echo "<br/>";
	var_dump($dest) ;echo "<br/>";
	
	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
			echo 'Upload effectu&eacute; avec succ&egrave;s !';
			echo "<br/>";
			echo "----------------------------";
			echo "<br/>";
	 }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';echo "<br/>";
     }
}
else
{
     echo $erreur;
}
echo "fichier à exploité : ".$fichier;
echo "<br/>";
echo"---------------------------------------------";
echo "<br/>";
echo"---------------------------------------------";
echo "<br/>";
// ****** Connexion à la base ******

echo "bdd utilisée : ".$ligue;echo "<br/>";
require '../../connect/connexion6.php';

$tableMatch = $ligue."_matchs";
$tableEquipe = $ligue."_equipes";
$tableEquipesresultat = $ligue."_equipesresultat";

echo "<br />";
echo $tableMatch."<br />";  				
//----------------------------------------------

echo "lecture de la Premiere ligne du fichier : ";echo "<br />";
//echo $id1.' - '.$id_equipe_dom1.' -  '.$id_equipe_ext1.'  - '.$dateDuJour1.'  - '.$id_journee1.' -  '.$buts_dom1.' -  '.$buts_ext1."<br />";


 
//**************************************************
//               Traitement des résultats
//**************************************************
//--------------------------------------------

echo "<hr />";				
echo "<hr />";
//****************************************

//**********************************************//
//**********************************************// 
//           Etude de la première ligne
//**********************************************//
//**********************************************//
// lecture de la première ligne
$fp = fopen("$cheminn$fichier", "r");
$ligne1 = fgets($fp);

$liste = explode( $caratereSeparation,$ligne1);
$id = $liste[0]; 
$id_equipe_dom = $liste[1]; 
$id_equipe_ext = $liste[2];
$dateDuJour = $liste[3]; 
$id_journee = $liste[4]; 
$buts_dom = $liste[5]; 
$buts_ext = $liste[6];


$journee =  substr($id_journee,-2);
$competition = substr($id,3,3);
echo "compétition : ".$competition;echo "<br />";
echo "journée : ".$journee;echo "<br />";
$journeeDebut = $id_journee;
$journeeFin = $journeeDebut + 21;
echo "journeeDebut : ".$journeeDebut;echo "<br />";
echo "journeeFin : ".$journeeFin;echo "<br />";


//******* traitements des scores    ******	
		
//enregistrement de la première ligne dans la table
		
echo "-insertion de la première ligne : ";echo "<br>";
	

$bdd->exec("UPDATE $tableMatch
				SET date_reelle ='$dateDuJour', buts_dom ='$buts_dom', buts_ext ='$buts_ext' 
				WHERE id ='$id'");	


if ( is_numeric($buts_dom) + is_numeric($buts_ext) == 0)
		$bdd->exec("UPDATE $tableMatch
				SET  buts_dom = NULL, buts_ext = NULL 
				WHERE id ='$id'");

echo "<br>";
echo $id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$dateDuJour.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
echo "<br>";


//***************************************
//******* traitements des bonus    ******
//***************************************
 


	//récupération des données dans la table equipesresultats
	 
	$journee= 'J'.$journee;
	echo "journee : ".$journee; 
	if (isset($bonusDeLaJournee)) $bonusDeLaJournee=$bonusDeLaJournee; else $bonusDeLaJournee = 0;
	
	$requete=$bdd->query("
			SELECT $journee
			FROM $tableEquipesresultat
			WHERE 	id = $id_equipe_ext");
	 
	 while ($row = $requete->fetch())
			{ 
			$bonusDeLaJournee = $row[0];
			}
echo "<br>";
echo "bonusDeLaJournee : ".$bonusDeLaJournee;
echo "<br>";	
require 'testmethodebonus.php';	
	
	$bonusDef = 8;
	//cas 1.1 : bonus défensif pour l'équipe qui se déplace	
	if (($buts_dom > $buts_ext) and ($buts_dom - $buts_ext < $bonusDef) and $bonusDeLaJournee == 0 )
	{
	$equipeTraitee = $id_equipe_ext;
	bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd)	;
/*		
echo "test";
	 $id = $id_equipe_ext;
	 $journee = "J".substr($id_journee,-2);
	 //$id_club = substr($id_equipe_ext,-7);
	 $bonusDefensifDeLaJournee = 1;
echo "id :".$id; echo "<br>";
echo "journee :".$id_champ;echo "<br>";echo "<br>";
echo "id :".$id;echo "<br>";		 
	 //récupération  des bonus déjà acquis dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id'");
	 
	 while ($row = $requete->fetch())
			{ 
			$BonusDejaAcquis = $row[0];
			}
	
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $totalBonus = $BonusDejaAcquis + $bonusDefensifDeLaJournee; echo "<br>";
	 
	 // Mise à jour des tables ( equipes, equipesresultats)
	 
	 $bdd->exec("UPDATE $tableEquipe
				 SET	penalite ='$totalBonus'
				 WHERE  id = '$id'");
	 
	 $bdd->exec("UPDATE $tableEquipesresultat
				SET $journee ='$bonusDefensifDeLaJournee'
				WHERE id =$id ");
	 
	 // ajouter la somme des bonus defensifs
	
*/	
	}
	//cas 1.2 :Bonus défensif pour l'équipe qui reçoit
	if ($buts_dom < $buts_ext and (($buts_ext - $buts_dom) < $bonusDef) and $bonusDeLaJournee == 0 )
	{	
	 
	$equipeTraitee = $id_equipe_dom;
	bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd)	; 
	 
	/* 
	 
	 $id = $id_equipe_dom;
	 $id_champ = substr($id_journee,0,-2);
	 $id_club = substr($id_equipe_dom,-7);
	 $bonusDeLaJournee = 1;
		 
	 //récupération  des données dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id' AND id_champ = '$id_champ'");
	 
	 while ($row = $requete->fetch())
			{ 
			$penalite = $row[0];
			}	 
	 
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $penalite = $penalite + $bonusDeLaJournee;
		 
	 // suppression de la ligne dans la table equipes
	// $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
	// $bdd->exec("INSERT INTO $tableEquipe
	//			 	 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')"); 
	
	*/
	
	}
	
//cas 1.3 : Bonus offensif pour l'équipe qui se déplace
	$bonusOff = 24 ;
	if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) > $bonusOff))
	{
	 $id = $id_equipe_ext;
	 $id_champ = substr($id_journee,0,-2);
	 $id_club = substr($id_equipe_ext,-7);
	 $penaliteDeLaJournee = 1;
		 
	 //récupération  des données dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id' AND id_champ = '$id_champ'");
	 
	 while ($row = $requete->fetch())
			{ 
			$penalite = $row[0];
			}	 
	 
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $penalite = $penalite + $penaliteDeLaJournee;
		 
	 //echo $id.' '.$id_champ.' '.$id_club.' '.$penalite; echo "<br />";
	 // suppression de la ligne dans la table equipes
	 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
	 $bdd->exec("INSERT INTO $tableEquipe
				 	 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')");
	
	}
	
//cas 1.4 : Bonus offensif pour l'équipe qui reçoit
	
	if (($buts_dom > $buts_ext) and (($buts_dom - $buts_ext) > $bonusOff))
	{
	 $id = $id_equipe_dom;
	 $id_champ = substr($id_journee,0,-2);
	 $id_club = substr($id_equipe_dom,-7);
	 $penaliteDeLaJournee = 1;
		 
	 //récupération  des données dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id' AND id_champ = '$id_champ'");
	 
	 while ($row = $requete->fetch())
			{ 
			$penalite = $row[0];
			}	 
	 
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $penalite = $penalite + $penaliteDeLaJournee;
		 
	 // suppression de la ligne dans la table equipes
	 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
	 $bdd->exec("INSERT INTO $tableEquipe
				 	 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')"); 
	}
	
//}
/*
else
{
	 $bdd->exec("DELETE FROM $tableMatch WHERE id=$id "); 
	 $bdd->exec("INSERT INTO $tableMatch
				 VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , 'NULL', 'NULL')"); 	
}	
*/	 
//************************************************************	
//***********************************************************				
// Enregistrement des autres lignes dans la table
//************************************************************
//***************************************************************


$compteur_int = 1;
while (!feof($fp))
{	
	$ligne = fgets($fp,4096); 
	$liste = explode( $caratereSeparation,$ligne);  
		    
	if (isset($liste[0])) $id = $liste[0]; 
	if (isset($liste[1]))$id_equipe_dom = $liste[1]; 
	if (isset($liste[2]))$id_equipe_ext = $liste[2];
	if (isset($liste[3]))$date_reelle = $liste[3]; 
	if (isset($liste[4]))$id_journee = $liste[4];
	if (isset($liste[5]))$buts_dom = $liste[5]; 
	if (isset($liste[6]))$buts_ext = $liste[6];
   
  

$journee = "J".substr($id_journee,-2);
$competition = substr($id,3,3);
echo "compétition : ".$competition;echo "<br />";
echo "journée : ".$journee;echo "<br />";
//$journeeDebut = $id_journee;
//$journeeFin = $journeeDebut + 21;
//echo "journeeDebut : ".$journeeDebut;echo "<br />";
//echo "journeeFin : ".$journeeFin;echo "<br />";





  if ($id > 0)
   {	   
	
			
//****************************************
//******* traitements des scores    ******	
//****************************************
/*
 $requete=$bdd->query("
				SELECT date_reelle ,buts_dom, buts_ext
				FROM $tableMatch 
				WHERE 	id= '$id' ");
		 
		 while ($row = $requete->fetch() )
				{ 
				$date_reelle = $row[0];
				$score1 = $row[1];
				$score2 = $row[2];
				}
				
*/
//echo "id : ".$id;
//var_dump($score1);var_dump($score2);
//var_dump($buts_dom);var_dump($buts_ext);
$buts_dom = intval($buts_dom);
$buts_ext = intval($buts_ext);
//var_dump($buts_dom);
//var_dump($buts_ext);
//echo "<br />";

// Effacement et ré-écriture de la ligne dans la table matchs	
//if ($score1 == NULL and $score2 == NULL and ($buts_dom > 0 OR $buts_ext > 0))
//aaaaif ($score1 == NULL and $score2 == NULL)	
//aaaa	{
	// $bdd->exec("DELETE FROM $tableMatch WHERE id=$id "); 
	// $bdd->exec("INSERT INTO $tableMatch
	//			VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , '$buts_dom', '$buts_ext')"); 
									



	$bdd->exec("UPDATE $tableMatch
				SET id ='$id', id_equipe_dom ='$id_equipe_dom', id_equipe_ext ='$id_equipe_ext', date_reelle ='$date_reelle',
				id_journee = '$id_journee' , buts_dom ='$buts_dom', buts_ext ='$buts_ext' 
				WHERE id ='$id'");
	 
	 
	if ( $buts_dom + $buts_ext == 0)
		$bdd->exec("UPDATE $tableMatch
				SET id ='$id', id_equipe_dom ='$id_equipe_dom', id_equipe_ext ='$id_equipe_ext', date_reelle ='$date_reelle',
				id_journee = '$id_journee' , buts_dom =NULL, buts_ext = NULL 
				WHERE id ='$id'");
	 
	 
if (isset($bonusDeLaJournee)) $bonusDeLaJournee=$bonusDeLaJournee; else $bonusDeLaJournee = 0;
	echo " id_equipe_ext : ".$id_equipe_ext;echo "<br />";
	echo "journee ::".$journee;echo "<br />";
	$requete=$bdd->query("
			SELECT $journee
			FROM $tableEquipesresultat
			WHERE 	id = $id_equipe_ext");
	 
	 while ($row = $requete->fetch())
			{ 
			$bonusDeLaJournee = $row[0];
			}
echo "<br>";
echo "bonusDeLaJournee : ".$bonusDeLaJournee;
echo "<br>";	

echo "<br>";	
//echo "aaaaaa-insertion des lignes : ";echo "<br>";
echo $id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$dateDuJour.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;



	 //cas 2.1 : Bonus défensif pour l'équipe qui se déplace
		$bonusDef = '8';
		if ($buts_dom > $buts_ext and (($buts_dom - $buts_ext) < $bonusDef) and $bonusDeLaJournee == 0)

		{
			$equipeTraitee = $id_equipe_ext;
			bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd)	; 
		/*	
		 $id = $id_equipe_ext;
		 $id_champ = substr($id_journee,0,-2);
		 $id_club = substr($id_equipe_ext,-7);
		 
		 $penaliteDeLaJournee = 1;
			 
		 //récupération  des données dans la table equipes
		 $requete=$bdd->query("
				SELECT penalite
				FROM $tableEquipe 
				WHERE 	id= '$id' AND id_champ = '$id_champ'");
		 while ($row = $requete->fetch() )
			{ 
			$penalite = $row[0];
			}
			 
		 //somme des bonus déjà acquis plus le bonus de la journée
		 $penalite = $penalite + $penaliteDeLaJournee;
			 
		 // suppression de la ligne dans la table equipes
			 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
			 $bdd->exec("INSERT INTO $tableEquipe
						 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')"); 
		*/
		
		}


	
	 //cas 2.2 : Bonus défensif pour l'équipe qui  recoit
		if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) < $bonusDef) and $bonusDeLaJournee == 0)
		{	
		
		$equipeTraitee = $id_equipe_dom;
		bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd)	; 
/*
		$id = $id_equipe_dom;
		 $id_champ = substr($id_journee,0,-2);
		 $id_club = substr($id_equipe_dom,-7);
		 $penaliteDeLaJournee = 1;
			 
		 //récupération  des données dans la table equipes
		 $requete=$bdd->query("
				SELECT penalite
				FROM $tableEquipe 
				WHERE 	id= '$id' AND id_champ = '$id_champ'");
		 while ($row = $requete->fetch() )
			{ 
			$penalite = $row[0];
			}
			 
		 //somme des bonus déjà acquis plus le bonus de la journée
		 $penalite = $penalite + $penaliteDeLaJournee;
		
		 // suppression de la ligne dans la table equipes
		 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
		 $bdd->exec("INSERT INTO $tableEquipe
						 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')"); 
		*/
		}
		
	//cas 2.3 : Bonus offensif pour l'équipe qui se déplace
		$bonusOff=24 ;
		if (($buts_dom < $buts_ext) and ($buts_ext - $buts_dom) > $bonusOff )
		{
		 $id = $id_equipe_ext;
		 $id_champ = substr($id_journee,0,-2);
		 $id_club = substr($id_equipe_ext,-7);
		 $penaliteDeLaJournee = 1;
			 
		 //récupération  des données dans la table equipes
		 $requete=$bdd->query("
				SELECT penalite
				FROM $tableEquipe 
				WHERE 	id= '$id' AND id_champ = '$id_champ'");
		 
		 while ($row = $requete->fetch())
				{ 
				$penalite = $row[0];
				}	 
		 
		 //somme des bonus déjà acquis plus le bonus de la journée
		 $penalite = $penalite + $penaliteDeLaJournee;
			 
		 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
		 $bdd->exec("INSERT INTO $tableEquipe
						 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')");
		}
		
	//cas 2.4 : Bonus offensif pour l'équipe qui reçoit
		$bonusOff=24 ;
		if (($buts_dom > $buts_ext) and ($buts_dom - $buts_ext) > $bonusOff)
		{
		 $id = $id_equipe_dom;
		 $id_champ = substr($id_journee,0,-2);
		 $id_club = substr($id_equipe_dom,-7);
		 $penaliteDeLaJournee = 1;
			 
		 //récupération  des données dans la table equipes
		 $requete=$bdd->query("
				SELECT penalite
				FROM $tableEquipe 
				WHERE 	id= '$id' AND id_champ = '$id_champ'");
		 
		 while ($row = $requete->fetch())
				{ 
				$penalite = $row[0];
				}	 
		 
		 //somme des bonus déjà acquis plus le bonus de la journée
		 $penalite = $penalite + $penaliteDeLaJournee;
			 
		 // suppression de la ligne dans la table equipes
		 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
		 $bdd->exec("INSERT INTO $tableEquipe
						 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')"); 
		}
	//aaaaa}
    $compteur_int = $compteur_int ;
   }  
 }
 echo "<br />";
echo "nombre de ligne traitées : ".$compteur_int;			
echo "<br />"; 
 
echo $journeeDebut;
global $champRecup;
$champRecup=substr($journeeDebut,0,6);
echo $champRecup;echo "<br />";

require "../../Phpleague/$ligue/admin/genererSansIhm.php";
require '../majScores/bas.php';



?>
