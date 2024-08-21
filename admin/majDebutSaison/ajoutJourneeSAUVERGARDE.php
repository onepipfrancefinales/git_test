<?php
//récuperation des variables
if (isset ($_GET['ligue'])) $ligue = $_GET['ligue']; else $ligue = "";
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
			echo 'Upload effectu&eacute; avec succès !';
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


// ouverture et lecture de la première ligne
$fp = fopen("$cheminn$fichier", "r");
$ligne1 = fgets($fp);

//Etude de la première ligne
$liste = explode( $caratereSeparation,$ligne1);
$id1 = $liste[0]; 
$id_equipe_dom1 = $liste[1]; 
$id_equipe_ext1 = $liste[2];
$dateDuJour1 = $liste[3]; 
$id_journee1 = $liste[4]; 
$buts_dom1 = $liste[5]; 
$buts_ext1 = $liste[6];

$journeeDebut = $id_journee1;
$journeeFin = $journeeDebut + 22;

$bonusDef = '8';

echo "journeeDebut : ".$journeeDebut;
echo "<br />";
echo "journeeFin : ".$journeeFin;
echo "<br />";
echo $tableMatch."<br />";  				
//----------------------------------------------

echo "lecture de la Premiere ligne du fichier : ";echo "<br />";
echo $id1.' - '.$id_equipe_dom1.' -  '.$id_equipe_dom1.'  - '.$dateDuJour1.'  - '.$id_journee1.' -  '.$buts_dom1.' -  '.$buts_ext1."<br />";
$journee =  substr($id1,-4,2);
$competition = substr($id1,3,2);
echo "compétition : ".$competition;echo "<br />";
echo "journée : ".$journee;echo "<br />";

 


$sommeButs_dom = 0;
$sommeButs_ext = 0;   
      
 // lecture des autres lignes du fichier    
 echo "<br />"; 
 echo "<br />";
 echo "lecture des autres lignes du fichier : ";echo "<br />";
 while (!feof($fp))
   { 
	$ligne = fgets($fp,4096); 
	$liste = explode( $caratereSeparation,$ligne);  
		    
	if (isset ($liste[0]))$id = $liste[0]; 
	if (isset ($liste[1])) $id_equipe_dom =$liste[1] ; 
	if (isset ($liste[2]))$id_equipe_ext = $liste[2];
	if (isset ($liste[3]))$date_reelle = $liste[3]; 
	if (isset ($liste[4]))$id_journee = $liste[4];
	if (isset ($liste[5]))$buts_dom = $liste[5]; 
	if (isset ($liste[6]))$buts_ext = $liste[6];

//echo $ligne;
echo $id.' - '.$id_equipe_dom.' -  '.$id_equipe_ext.'  - '.$date_reelle.'  - '.$id_journee.' -  '.$buts_dom.' -  '.$buts_ext."<br />";



	$buts_dom = intval($buts_dom);
	$buts_ext = intval($buts_ext);
     
	//$sommeButs_dom = $sommeButs_dom + $buts_dom;
	//$sommeButs_ext = $sommeButs_ext + $buts_ext;

	}
 //$journee =  substr($id1,-4,2);

 $sommeA1=0;
 $sommeA2=0;
 $scoreA1=0;
 $scoreA2=0;
 echo "journeeDebut : ".$journeeDebut;
 for($i=$journeeDebut; $i< $journeeDebut+900; $i=$i +100)
	{
	 echo $i;echo "<br/>";	
	 $requete=$bdd->query("
		SELECT sum(buts_dom), sum(buts_ext)
		FROM $tableMatch 
		WHERE id_journee ='$i'");
		 
	 while ($row = $requete->fetch())
		{ 
		$scoreA1 = $row[0];
		$scoreA2 = $row[1];
				
		$sommeA1 = $sommeA1 + $scoreA1;
		$sommeA2 = $sommeA2 + $scoreA2;
		}
	}

 echo "somme1 : ".$sommeA1;
 echo "somme2 : ".$sommeA2;
 //echo "<br />";
 //echo "dom1 : ".$buts_ext1; echo "<br />";
 //echo "ext1 : ".$buts_dom1;echo "<br />";
 //echo "dom : ".$sommeButs_dom; echo "<br />";
 //echo "ext : ".$sommeButs_ext; echo "<br />";

 $sommeScores = $sommeA1 + $sommeA2;
 $sommeScores = intval($sommeScores);
 echo "somme des scores : ".$sommeScores;
 fclose($fp);

//suppression de la journée

if ($sommeScores == 0)
{
 echo "<br/>";
 echo"---------------------------------------------";
 echo "<br/>";
 echo"-------  Suppression de la journée  ---------";
 echo "<br/>";
 echo"---------------------------------------------";
 echo "<br/>";

 for ($poule = 1; $poule < 9 ; $poule++)
	{
		
	$journeeEnCours= ($competition.$poule)*100 + $journee + 99000000;    
	echo "1- journee en cours suppression: ".$journeeEnCours;echo "<br />";
	//$bdd->exec("DELETE FROM $tableMatch WHERE id_journee=$journeeEnCours ");
	                    
	}
 echo "suppression de la journée : OK"; 
 
echo "<br />";
//echo "testtest".' '.$id1.' '.$id_equipe_dom1.' '.$id_equipe_dom1.' '.$dateDuJour1.' '.$id_journee1.' '.$buts_dom1.' '.$buts_ext1; 
// reconstruction de la journée à NULL NULL

// ouverture et lecture de la première ligne
$fp = fopen("$cheminn$fichier", "r");
$ligne1 = fgets($fp);

//Etude de la première ligne
/*
$liste = explode( $caratereSeparation,$ligne1);
$id1 = $liste[0]; 
$id_equipe_dom1 = $liste[1]; 
$id_equipe_ext1 = $liste[2];
$dateDuJour1 = $liste[3]; 
$id_journee1 = $liste[4]; 
$buts_dom1 = $liste[5]; 
$buts_ext1 = $liste[6];
*/
$bdd->exec("INSERT INTO $tableMatch
           VALUES ('$id1' , '$id_equipe_dom1', '$id_equipe_ext1', '$dateDuJour1','$id_journee1' , NULL, NULL)");         
   

//$bdd->exec("UPDATE $tableMatch
//			SET id = '$id1' , id_equipe_dom ='$id_equipe_dom1',  id_equipe_ext ='$id_equipe_ext1', 
//			date_reelle = '$dateDuJour1', date_journee='$id_journee1' , buts_dom = NULL, buts_ext = NULL");


echo "2-insertion de la 1re ligne : ".$id1.' - '.$id_equipe_dom1.' - '.$id_equipe_ext1.' - '.$dateDuJour1.' - '.$id_journee1.' - '.$buts_dom1.' - '.$buts_ext1;
echo "<br>";
//autres lignes
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

	$bdd->exec("INSERT INTO $tableMatch
				VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , NULL, NULL)");         
	
	echo "test2 : ".$id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
echo "<br>";

	
	}





	
}
echo"------- fin  Suppression de la journée  ---------";
echo "<br>";
//**************************************************
//               Traitement des résultats
//**************************************************
//--------------------------------------------

echo "<hr />";				
echo "<hr />";
//****************************************
// lecture de la première ligne
$fp = fopen("$cheminn$fichier", "r");
$ligne1 = fgets($fp);
 
//Etude de la première ligne
$liste = explode( $caratereSeparation,$ligne1);
$id = $liste[0]; 
$id_equipe_dom = $liste[1]; 
$id_equipe_ext = $liste[2];
$dateDuJour = $liste[3]; 
$id_journee = $liste[4]; 
$buts_dom = $liste[5]; 
$buts_ext = $liste[6];

//récupération  de la date  dans la table matchs

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

echo "<br />";
echo "id : ".$id;echo "<br />";
echo "ligne : ".$date_reelle.' - '.$score1.' - '.$score2;echo "<br />";

//******* traitements des scores    ******	
		
//enregistrement de la première ligne dans la table

if ($score1 == NULL and $score2 == NULL and ($buts_dom > 0  OR $buts_ext > 0))
{
	 // suppression de la ligne dans la table matchs
	 $bdd->exec("DELETE FROM $tableMatch WHERE id=$id ");
	 
	


	// insertion des données dans la table matchs
	 $bdd->exec("INSERT INTO $tableMatch
				 VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$dateDuJour','$id_journee' , '$buts_dom', '$buts_ext')"); 
		
		


//******* traitements des bonus    ******

//cas 1.1 : bonus défensif pour l'équipe qui se déplace
/*
	$bonusDef = '8';
	if (($buts_dom > $buts_ext) and (($buts_dom - $buts_ext) < $bonusDef))
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
		 
	 // suppression de la ligne dans la table equipes
	 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
	 $bdd->exec("INSERT INTO $tableEquipe
				 	 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')"); 
	}
	
//cas 1.2 :Bonus défensif pour l'équipe qui reçoit
	
	if ($buts_dom < $buts_ext and (($buts_ext - $buts_dom) < $bonusDef) and (($buts_ext - $buts_dom) > 0))
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
*/	
}
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


$compteur_int = 0;
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
   
   if ($id > 0)
   {	   
	
			
//****************************************
//******* traitements des scores    ******	
//****************************************

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
echo "id : ".$id;
//var_dump($score1);var_dump($score2);
//var_dump($buts_dom);var_dump($buts_ext);
$buts_dom = intval($buts_dom);
$buts_ext = intval($buts_ext);
//var_dump($buts_dom);
//var_dump($buts_ext);
//echo "<br />";

// Effacement et ré-écriture de la ligne dans la table matchs	
if ($score1 == NULL and $score2 == NULL and ($buts_dom > 0 OR $buts_ext > 0))
	{
	 $bdd->exec("DELETE FROM $tableMatch WHERE id=$id "); 
	 $bdd->exec("INSERT INTO $tableMatch
				VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , '$buts_dom', '$buts_ext')"); 
									
	 //cas 2.1 : Bonus défensif pour l'équipe qui se déplace
		$bonusDef = '8';
		if ($buts_dom > $buts_ext 
			and (($buts_dom - $buts_ext) < $bonusDef) 
			and (($buts_dom - $buts_ext)) > 0)

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
		}


	
	 //cas 2.2 : Bonus défensif pour l'équipe qui  recoit
		if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) < $bonusDef) and ($buts_ext - $buts_dom) > 0)
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
	}
    $compteur_int = $compteur_int +1;
   }  
 }
echo "nombre de ligne traitées : ".$compteur_int;			
echo "<br />"; 
 
echo $journeeDebut;
global $champRecup;
$champRecup=substr($journeeDebut,0,6);
echo $champRecup;echo "<br />";

require "../../Phpleague/$ligue/admin/genererSansIhm.php";
require '../majScores/bas.php';

?>
