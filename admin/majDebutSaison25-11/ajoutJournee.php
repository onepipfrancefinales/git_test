<?php
//récuperation des variables
require 'testmethodebonus.php';	
if (isset ($_GET['bddComitePlusId'])) $bddComitePlusId = $_GET['bddComitePlusId']; else $bddComitePlusId = "";
echo $bddComitePlusId;

$ligue000000 = substr($bddComitePlusId,-2);
$ligue =substr($bddComitePlusId,0,5);

if ($ligue == "phppr")
	$ligue = "phppro";
elseif ($ligue == "phpfe")
	$ligue = "phpfed3NE";
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

echo "Premiere ligne du fichier : ";echo "<br />";

//echo $id1.' - '.$id_equipe_dom1.' -  '.$id_equipe_ext1.'  - '.$dateDuJour1.'  - '.$id_journee1.' -  '.$buts_dom1.' -  '.$buts_ext1."<br />";


 
//**************************************************
//               Traitement des résultats
//**************************************************
//--------------------------------------------


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
$date_reelle = $liste[3]; 
$id_journee = $liste[4]; 
$buts_dom = $liste[5]; 
$buts_ext = $liste[6];


$journee =  substr($id_journee,-2);
$competition = substr($id,3,3);
//echo "compétition : ".$competition;echo "<br />";
//echo "journée : ".$journee;echo "<br />";
$journeeDebut = $id_journee;
$journeeFin = $journeeDebut + 21;
//echo "journeeDebut : ".$journeeDebut;echo "<br />";
//echo "journeeFin : ".$journeeFin;echo "<br />";

$buts_dom = intval($buts_dom);
$buts_ext = intval($buts_ext);
//******* traitements des scores    ******	
	
//Mise à jour de la première ligne dans la table
$bdd->exec("UPDATE $tableMatch
				SET date_reelle ='$date_reelle', buts_dom = '$buts_dom', buts_ext = '$buts_ext'  
				WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext'");	

//transformation  des scores  0-0 en NULL-NULL
	if ( $buts_dom + $buts_ext == 0)
	{	
		
	$bdd->exec("UPDATE $tableMatch
				SET  date_reelle ='$date_reelle', id_journee='$id_journee', buts_dom = NULL, buts_ext = NULL 
				WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext'");
	}
	 




// affichage de la 1re ligne
echo $id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
echo "<br>";echo "<br>";


	//***************************************
	//******* traitements des bonus    ******
	//***************************************
	
	// traitement du bonus défensif
	$bonusDef = 8;
	
	
	//cas 1.1 : récupération des données dans la table equipesresultats pour l'équipe qui se déplace
	$equipeTraitee = $id_equipe_ext;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);
	 
	// bonus défensif pour l'équipe qui se déplace	
	if (($buts_dom > $buts_ext) and ($buts_dom - $buts_ext < $bonusDef) and $bonusDeLaJournee == 0 ){
	$equipeTraitee = $id_equipe_ext;
	bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd);}
	
	//cas 1.2 : récupération des données dans la table equipesresultats pour l'équipe qui reçoit
	$equipeTraitee = $id_equipe_dom;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);
	
	//Bonus défensif pour l'équipe qui reçoit
	if ($buts_dom < $buts_ext and (($buts_ext - $buts_dom) < $bonusDef) and $bonusDeLaJournee == 0 ){	 
	$equipeTraitee = $id_equipe_dom;
	bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd); }	

	//Traitement des bonus offensifs
	$bonusOff = 24 ;
	
	//cas 1.3 : récupération des données dans la table equipesresultats pour l'équipe qui se déplace
	$equipeTraitee = $id_equipe_ext;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);
	
	//Bonus offensif pour l'équipe qui se déplace
	if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) > $bonusOff) and $bonusDeLaJournee == 0 ){
	$equipeTraitee = $id_equipe_ext;
	bonusOffensif($equipeTraitee, $id_journee, $ligue, $bdd);}
	
	//cas 1.4 : récupération des données dans la table equipesresultats pour l'équipe qui reçoit
	$equipeTraitee = $id_equipe_dom;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);
	
	//Bonus offensif pour l'équipe qui reçoit
	if (($buts_dom > $buts_ext) and (($buts_dom - $buts_ext) > $bonusOff) and $bonusDeLaJournee == 0 ){
	$equipeTraitee = $id_equipe_dom;
	bonusOffensif($equipeTraitee, $id_journee, $ligue, $bdd);}
	
	
	//************************************************************	
	//************************************************************				
	// Enregistrement des autres lignes dans la table
	//************************************************************
	//************************************************************

echo "lignes suivantes : ";echo "<br>";
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
   
  

$journee = "J".substr($id_journee,-2);
$competition = substr($id,3,3);
//echo "compétition : ".$competition;echo "<br />";
//echo "journée : ".$journee;echo "<br />";
//$journeeDebut = $id_journee;
//$journeeFin = $journeeDebut + 21;
//echo "journeeDebut : ".$journeeDebut;echo "<br />";
//echo "journeeFin : ".$journeeFin;echo "<br />";

if ($id > 0)
{	   		
//****************************************
//******* traitements des scores    ******	
//****************************************


$buts_dom = intval($buts_dom);
$buts_ext = intval($buts_ext);

//if ($id_equipe_dom == NULL) $id_equipe_dom= 2 ;
//if ($id_equipe_ext == NULL) $id_equipe_ext= 2 ;
	
	
	$bdd->exec("UPDATE $tableMatch
				SET date_reelle ='$date_reelle', id_journee='$id_journee', buts_dom ='$buts_dom', buts_ext ='$buts_ext' 
				WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext'");
	 
	if ( $buts_dom + $buts_ext == 0)
	{
		$bdd->exec("UPDATE $tableMatch
				SET date_reelle ='$date_reelle', id_journee='$id_journee', buts_dom = NULL, buts_ext = NULL 
				WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext'");
	}
	 
// affichage des  la 1re lignes suivantes

echo $id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
echo "<br>";
	
	//2-traitement du bonus offensif
	$bonusDef = 8;
		
	//cas 2.1 : récupération des données dans la table equipesresultats pour l'équipe qui se déplace
	$equipeTraitee = $id_equipe_ext;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);
	
	//Bonus défensif pour l'équipe qui se déplace
	if ($buts_dom > $buts_ext and (($buts_dom - $buts_ext) < $bonusDef) and $bonusDeLaJournee == 0){
	$equipeTraitee = $id_equipe_ext;
	bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd);}

	//cas 2.2 : récupération des données dans la table equipesresultats pour l'équipe qui reçoit
	$equipeTraitee = $id_equipe_dom;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);
	
	//Bonus défensif pour l'équipe qui  recoit
	if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) < $bonusDef) and $bonusDeLaJournee == 0){	
	$equipeTraitee = $id_equipe_dom;
	bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd); }
	
	//2-traitement du bonus offensif
	$bonusOff=24 ;

	//cas 2.3 : récupération des données dans la table equipesresultats pour l'équipe qui se déplace
	$equipeTraitee = $id_equipe_ext;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);
	
	//Bonus offensif pour l'équipe qui se déplace	
	if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) > $bonusOff) and $bonusDeLaJournee == 0){
	$equipeTraitee = $id_equipe_ext;
	bonusOffensif($equipeTraitee, $id_journee, $ligue, $bdd);}

	//cas 2.4 : récupération des données dans la table equipesresultats pour l'équipe qui reçoit	
	$equipeTraitee = $id_equipe_dom;
	bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);	

	//Bonus offensif pour l'équipe qui reçoit
	if (($buts_dom > $buts_ext) and ($buts_dom - $buts_ext) > $bonusOff and $bonusDeLaJournee == 0){
	$equipeTraitee = $id_equipe_dom;
	bonusOffensif($equipeTraitee, $id_journee, $ligue, $bdd);}


   } 
    $compteur_int = $compteur_int + 1 ;
 }
echo "<br />";echo "<br />";
echo "nombre de lignes traitées : ".$compteur_int;			
echo "<br />"; 
 
//echo $journeeDebut;
//global $champRecup;
$champRecup=substr($journeeDebut,0,6);
echo "champRecup : ".$champRecup;echo "<br />";

require "../../Phpleague/$ligue/admin/genererSansIhm.php";
require '../majScores/bas.php';



?>
