<?php
//récuperation des variables
require 'testmethodebonus.php';	
if (isset ($_GET['bddComitePlusId'])) $bddComitePlusId = $_GET['bddComitePlusId']; else $bddComitePlusId = "";
echo "bddComitePlusId : ".$bddComitePlusId;echo "<br />";

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

echo "id : ".$id;echo "<br />";
$journee =  substr($id_journee,-2);
$competition = substr($id,3,3);
//echo "compétition : ".$competition;echo "<br />";
//echo "journée : ".$journee;echo "<br />";


$buts_dom = intval($buts_dom);
$buts_ext = intval($buts_ext);
//******* traitements des scores    ******	
	
echo 'test = '.$id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
	echo "<br>";echo "<br>";
//*******************************************************************
//*******************************************************************
//*******************************************************************
//*******************************************************************
//*******************************************************************


//confection des variables pour la requête
echo "***************   variables de la requete   ******************";echo "<br>";

$codeLigue = substr($id,0,2);
$debutPoule = substr ($id,2,3);
echo "<br>";
echo "debut de poule : ".$debutPoule;
echo "<br>";

if (isset($debutPouleTraite)) $debutPouleTraite = $debutPouleTraite; else $debutPouleTraite=0;
if (isset($finPouleTraite)) $finPouleTraite = $finPouleTraite; else $finPouleTraite=0;


if ($ligue== "phppro" or $ligue == "phpfed3NE"  or $ligue == "phpfed3ne"){
	echo "traitement1";

	//FED1
	if (substr($id,0,6) == 990141){
		  $debutPouleTraite = 99014101;
	      $finPouleTraite =   99014922;
	}
	elseif (substr($id,0,6) == 990241){
		  $debutPouleTraite = 99024101;
	      $finPouleTraite =   99024922;
	}
	//FED2
	elseif (substr($id,0,6) == 990151){
		  $debutPouleTraite = 99015101;
	      $finPouleTraite =   99015922;
	}
	elseif (substr($id,0,6) == 990251){
		  $debutPouleTraite = 99025101;
	      $finPouleTraite =   99025922;
	}
	
	//FED3NE - Poule 1 à 9
	elseif (substr($id,0,6) == 991161){
		  $debutPouleTraite = 99116101;
	      $finPouleTraite =   99116922;
	}	
	//FED3NE - Poule 10 à 18	
	elseif (substr($id,0,6) == 992161){	  
		  $debutPouleTraite = 99216101;
	      $finPouleTraite =   99216922;	  
	}	  
	//Excellence B - Poule 1 à 9
	elseif (substr($id,0,6) == 991261){
		  $debutPouleTraite = 99126101;
	      $finPouleTraite =   99126922;
	}
	//Excellence B - Poule 10 à 18
	elseif (substr($id,0,6) == 992261){
		  $debutPouleTraite = 99226101;
	      $finPouleTraite =   99226922;
	}
	
	
	//FEMININES
	elseif (substr($id,0,6) == 816281){
		  $debutPouleTraite = 81628101;
	      $finPouleTraite =   81628301;
	}
	elseif (substr($id,0,6) == 816291){
		  $debutPouleTraite = 81629101;
	      $finPouleTraite =   81629522;
	}
}

elseif ($ligue== "phpab" or $ligue == "phpca"  or $ligue == "phpau"){
	
	//ARA
	if (substr($id,0,6) == 100171){
		$debutPouleTraite = 10017101;
	    $finPouleTraite = 10017922;
	   }
	 elseif (substr($id,0,6) == 100181){
		  $debutPouleTraite = 10018101;
	      $finPouleTraite = 10018922;
	  }  
	    
	 elseif (substr($id,0,6) == 100191){
		  $debutPouleTraite = 10019101;
	      $finPouleTraite = 10020022;
	  }
	 
	  elseif (substr($id,0,6) == 100271){
		  $debutPouleTraite = 10027101;
	      $finPouleTraite =   10027922;
	  }
	  
	 elseif (substr($id,0,6) == 109181){
		  $debutPouleTraite = 10918101;
	      $finPouleTraite =   10918922;
	  } 
	  	  
	// NAQ
	  elseif (substr($id,0,6) == 190171){
		$debutPouleTraite = 19017101;
	    $finPouleTraite = 19017922;
	   }
	 elseif (substr($id,0,6) == 190181){
		  $debutPouleTraite = 19018101;
	      $finPouleTraite = 19018922;
	  }

	 elseif (substr($id,0,6) == 190191){
		  $debutPouleTraite = 19019101;
	      $finPouleTraite = 19019922;
	  }
	  	  
	 elseif (substr($id,0,6) == 190271){
		  $debutPouleTraite = 19027101;
	      $finPouleTraite =   19027922;
	  }
	 elseif (substr($id,0,6) == 199181){
		  $debutPouleTraite = 19918101;
	      $finPouleTraite =   19918922;
	  } 
	   
	 // OCC
	  elseif (substr($id,0,6) == 200171){
		$debutPouleTraite = 20017101;
	    $finPouleTraite = 20017922;
	   }
	  elseif (substr($id,0,6) == 200181){
		  $debutPouleTraite = 20018101;
	      $finPouleTraite = 20018922;
	  }
	  elseif (substr($id,0,6) == 200191){
		  $debutPouleTraite = 20019101;
	      $finPouleTraite = 20019922;
	  }
	 
	   elseif (substr($id,0,6) == 200271){
		  $debutPouleTraite = 20027101;
	      $finPouleTraite =   20027922;
	  }
	   elseif (substr($id,0,6) == 209181){
		  $debutPouleTraite = 20918101;
	      $finPouleTraite =   20918922;
	  }	  
	  
	}
	
elseif ($ligue== "phpidf" or $ligue == "phppl")
{
	
	//******   TABLE PL   *****************
	
	//BFC
	if (substr($id,0,6) == 110171){
		  $debutPouleTraite = 11017101;
	      $finPouleTraite = 11019501;
	}
	elseif (substr($id,0,6) == 110271){
		  $debutPouleTraite = 11027101;
	      $finPouleTraite = 11919122;
	}
	//BRE
	elseif (substr($id,0,6) == 120171){
		  $debutPouleTraite = 12017101;
	      $finPouleTraite = 12019522;
	}
	elseif (substr($id,0,6) == 120191){
		  $debutPouleTraite = 12019101;
	      $finPouleTraite = 12022122;
	}
	
	elseif (substr($id,0,6) == 120271){
		  $debutPouleTraite = 12027101;
	      $finPouleTraite = 12919122;
	}
	//CVL
	elseif (substr($id,0,6) == 130171){
		  $debutPouleTraite = 13017101;
	      $finPouleTraite = 130195;
	}
	elseif (substr($id,0,6) == 130271){
		  $debutPouleTraite = 13027101;
	      $finPouleTraite = 13919122;
	}
	//HDF
	elseif (substr($id,0,6) == 160171){
		  $debutPouleTraite = 16017101;
	      $finPouleTraite = 16022122;
	}
	elseif (substr($id,0,6) == 160271){
		  $debutPouleTraite = 16027101;
	      $finPouleTraite = 16919122;
	}
	//PDL
	elseif (substr($id,0,6) == 210171){
		  $debutPouleTraite = 21017101;
	      $finPouleTraite = 21022122;
	}
	elseif (substr($id,0,6) == 210271){
		  $debutPouleTraite = 12027101;
	      $finPouleTraite = 21919122;
	}
	
	//******   TABLE IDF    *****************
	
	//GES
	elseif (substr($id,0,6) == 150171){
		  $debutPouleTraite = 15017101;
	      $finPouleTraite = 15022122;
	}
	elseif (substr($id,0,6) == 150271){
		  $debutPouleTraite = 15027101;
	      $finPouleTraite = 15919122;
	}
	//IDF
	elseif (substr($id,0,6) == 170171){
		  $debutPouleTraite = 17017101;
	      $finPouleTraite = 17018522;
	}
	elseif (substr($id,0,6) == 170271){
		  $debutPouleTraite = 17027101;
	      $finPouleTraite = 17919122;
	}
	//NOR
	elseif (substr($id,0,6) == 116171){
		  $debutPouleTraite = 11617101;
	      $finPouleTraite = 11622122;
	}
	elseif (substr($id,0,6) == 116271){
		  $debutPouleTraite = 11627101;
	      $finPouleTraite = 18919122;
	}
	//PCA
	elseif (substr($id,0,6) == 220171){
		  $debutPouleTraite = 22017101;
	      $finPouleTraite = 220195122;
	}
	elseif (substr($id,0,6) == 220271){
		  $debutPouleTraite = 22027101;
	      $finPouleTraite = 22919122;
	}
}
	
	
	
	/*
	if (substr($id,3,2) == '27'){
	echo "traitement2";
	$finPoule = $debutPoule + 900;}
	else{
	echo "traitement3";
    $finPoule = $debutPoule + 1;}
	
	
	}
else{
	echo "traitement5";
	$finPoule = $debutPoule + 5;}
*/

echo "<br/>";

$journeeTraitee = $journee;

$journeeDebut = $debutPouleTraite;
$journeeFin = $journeeDebut + 21;
//echo "journeeDebut : ".$journeeDebut;echo "<br />";
//echo "journeeFin : ".$journeeFin;echo "<br />";
//$debutPouleTraite = ($codeLigue * "1000000") + ("$debutPoule"*"1000") + "101" ;
//$finPouleTraite = ($codeLigue * "1000000") + ("$finPoule"*"1000") + "922";
echo "id réduit :".substr($id,0,6);echo "<br>";
echo "journeeTraitee : ".$journeeTraitee;echo "<br>";
echo "debutPouleTraite : ".$debutPouleTraite;echo "<br>";
echo "finPouleTraite : ".$finPouleTraite;echo "<br>";

//****************************************
//*******lecture de la table Matchs ******	
//****************************************
echo "<br>";echo "<br>";
echo "***********************  Lecture des données en table    **********************";echo "<br>";
require '../../connect/connexion6.php';

if (isset($id_equipe_domBdd)) $id_equipe_domBdd=$id_equipe_domBdd;else $id_equipe_domBdd =NULL;
if (isset($id_equipe_ExtBdd)) $id_equipe_ExtBdd=$id_equipe_ExtBdd;else $id_equipe_ExtBdd =NULL;
if (isset($id_journeeBdd)) $id_journeeBdd=$id_journeeBdd;else $id_journeeBdd =0;
if (isset($buts_domBdd)) $buts_domBdd=$buts_domBdd;else $buts_domBdd =0;
if (isset($buts_extBdd)) $buts_extBdd=$buts_extBdd;else $buts_extBdd =0;


$idBdd = array ();
$id_equipe_domBdd = array ();
$id_equipe_extBdd  = array ();
$id_journeeBdd = array ();
$buts_domBdd = array ();
$buts_extBdd = array ();

//Nbre de lignes

$requete = $bdd->query("SELECT COUNT(id)
						FROM $tableMatch
						WHERE substr(id_journee,-2) like '%$journeeTraitee%'
						and id_journee between '$debutPouleTraite' and '$finPouleTraite' ");


$row = $requete->fetch();
$nbreLignes = $row[0];	



echo "<br />";
echo "nbreLignes : ".$nbreLignes;echo "<br />";
//echo "domicile : ".$id_equipe_dom;echo "<br />";
//echo "exterieure : ".$id_equipe_ext;echo "<br />";
//echo "<br />";
echo "<br />";

//test

echo "1 : ".$tableMatch; echo "<br />";
echo "2 : ".$debutPouleTraite; echo "<br />";
echo "3 : ".$finPouleTraite; echo "<br />";
echo "4 : ".$id; echo "<br />";
echo "5 : ".$journeeTraitee; echo "<br />";
echo "nbreLignes : ".$nbreLignes;echo "<br />";
//test

echo "etape 1"	;	echo "<br />";

$reponse = $bdd->query("	
				SELECT id, id_equipe_dom, id_equipe_ext, id_journee, buts_dom, buts_ext
				FROM $tableMatch
				WHERE substr(id_journee,-2) like '%$journeeTraitee%'
						and id_journee between '$debutPouleTraite' and '$finPouleTraite'
				order by id
				 "); 
										
	 while ($row = $reponse->fetch() )
		{ 
		 $idBdd[] = $row[0];
		 $id_equipe_domBdd[] = $row[1];
		 $id_equipe_extBdd[] = $row[2];
		 $id_journeeBdd[] = $row[3];
		 $buts_domBdd[] = $row[4];
		 $buts_extBdd[] = $row[5];
		}

echo "etape 2"	;	echo "<br />";

echo "étape 1 : ".$idBdd[0] ;echo "<br />";
echo "étape 2 : ".$id_equipe_domBdd[0] ;echo "<br />";
echo "étape 3 : ".$id_equipe_extBdd[0] ;echo "<br />";
echo "étape 4 : ".$id_journeeBdd[0] ;echo "<br />";
echo "étape 5 : ".$buts_domBdd[0] ;echo "<br />";
echo "étape 6 : ".$buts_extBdd[0] ;echo "<br />";

// id renumeroté de 1 à nbre de libre
////echo "Etape 7 :  récuperation des oppostions et des scores : id  -- equipe_dom  -- equipe_ext -- score1 -- score 2  ";echo "<br>";
for ($i=0; $i <= $nbreLignes -1 ; $i++)
{
	//$i=0;
	

	
	$bdd->exec("UPDATE $tableMatch
				SET id = '$i'   
				WHERE id_equipe_dom = '$id_equipe_domBdd[$i]' AND id_equipe_ext = '$id_equipe_extBdd[$i]'");	


// affichage du contenu de la table
//echo$i.' '. $buts_domBdd[$i]; echo "<br>";
echo $i.' '.$id_equipe_domBdd[$i].' '.$id_equipe_extBdd[$i].' '.$buts_domBdd[$i].' '.$buts_extBdd[$i];echo "<br>";
}
echo "etape 3"	;	echo "<br />";
echo "<br>";


// renumérotage du 1er id 170171xx01
$bdd->exec("UPDATE $tableMatch
				SET id = '$id'   
				WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext'");	
	

if (isset($recup_buts_dom)) $recup_buts_dom = $recup_buts_dom; else $recup_buts_dom=0;
if (isset($recup_buts_ext)) $recup_buts_ext = $recup_buts_ext; else $recup_buts_ext=0;
if (isset($scoresBdd)) $scoresBdd = $scoresBdd; else $scoresBdd=0;

//echo "tableMatch : ".$tableMatch;echo "<br>";
echo "etape 4"	;	echo "<br />";
$reponse = $bdd->query("	
				SELECT buts_dom, buts_ext
				FROM $tableMatch 
				WHERE id='$id'
				 "); 
										
	 while ($row = $reponse->fetch() )
		{ 
		 $recup_buts_dom = $row[0];
		 $recup_buts_ext = $row[1];
		}

//echo "<br>";
//echo $recup_buts_dom.' - '.$recup_buts_ext;echo "<br>";
$scoresBdd = $recup_buts_dom + $recup_buts_ext;echo "<br>";
//echo $buts_dom." - ".$buts_ext;echo "<br>";
//echo "scoresBdd : ".$scoresBdd ;
echo "etape 5"	;	echo "<br />";
echo "<br>";
echo "********************    Première ligne du fichier     *************************";echo "<br>";
echo "<br>";
echo $id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
	echo "<br>";echo "<br>";

// traitement des scores de la première ligne
	if ( $scoresBdd  > 0 and $buts_dom + $buts_ext == 0){
	  echo "test1 : ";	
	  $bdd->exec("UPDATE $tableMatch
				  SET id = '$id', date_reelle = '$date_reelle', buts_dom = '$recup_buts_dom', buts_ext = '$recup_buts_ext'  
				  WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");	
	}
	elseif ( $scoresBdd == 0 and  $buts_dom + $buts_ext > 0){	 
	  echo "test2 : ";	
	  echo "222".' - '.$id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
	  $bdd->exec("UPDATE $tableMatch
				  SET  id = '$id', date_reelle ='$date_reelle', buts_dom = '$buts_dom', buts_ext = '$buts_ext'  
				  WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");
	}
	elseif ( $scoresBdd != 0 and  $buts_dom + $buts_ext !=0){	 
	  echo "test3 : "."<br />";
	  $bdd->exec("UPDATE $tableMatch
				  SET id = '$id', date_reelle ='$date_reelle', buts_dom = '$buts_dom', buts_ext = '$buts_ext'  
				  WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");
	}
	//transformation des scores 0-0 en NULL-NULL
	elseif ( $buts_dom + $buts_ext == 0){	
		echo "test4 : ";
		$bdd->exec("UPDATE $tableMatch
				SET id = '$id', date_reelle ='$date_reelle', id_journee='$id_journee', buts_dom = NULL, buts_ext = NULL 
				WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");
		}		
	// affichage de la 1re ligne
echo "id : ".$id.' '.$recup_buts_dom.' - '.$recup_buts_ext.' --> '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
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

    //Traitement d'un forfait ou MEI (-2 de bonus)
	if ($buts_dom == 0 and $buts_ext == 25 and $bonusDeLaJournee > -1){
	echo "forfait dom";echo "<br />";
	echo $buts_dom.' - '.$buts_ext.' - '.$bonusDeLaJournee;echo "<br />";
	$equipeTraitee = $id_equipe_dom;
	//forfait($equipeTraitee, $id_journee, $ligue, $bdd);
	}
	
	
	if ($buts_dom == 25 and $buts_ext == 0 and $bonusDeLaJournee >= 0){
	echo "forfait ext2";	echo "<br />";
	echo $buts_dom.' - '.$buts_ext.' - '.$bonusDeLaJournee;echo "<br />";
	$equipeTraitee = $id_equipe_ext;
	//forfait($equipeTraitee, $id_journee, $ligue, $bdd);
	}
	
	
	//************************************************************	
	//************************************************************				
	// Enregistrement des autres lignes dans la table
	//************************************************************
	//************************************************************
echo "<br>";
echo "***********    lecture des lignes suivantes du fichier     ********* ";echo "<br>";
$i=1;
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
echo $i." -- ";
$buts_dom = intval($buts_dom);
$buts_ext = intval($buts_ext);
//echo $id.' - '.$id_equipe_dom.' - '.$id_equipe_ext.' - '.$date_reelle.' - '.$id_journee.' - '.$buts_dom.' - '.$buts_ext;
//echo "<br>";
//if ($id_equipe_dom == NULL) $id_equipe_dom= 2 ;
//if ($id_equipe_ext == NULL) $id_equipe_ext= 2 ;
	//renumérotage de l'id
	echo "id : ".$id;
	$bdd->exec("UPDATE $tableMatch
		       SET id = '$id'   
			   WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext'");


//****************************************

$reponse = $bdd->query("	
				SELECT id, id_equipe_dom, id_equipe_ext, id_journee, buts_dom, buts_ext
				FROM $tableMatch
				WHERE substr(id_journee,-2) like '%$journeeTraitee%'
				and id_journee between '$debutPouleTraite' and '$finPouleTraite'
				order by id
				 "); 
										
	 while ($row = $reponse->fetch() )
		{ 
		 $idBdd[] = $row[0];
		 $id_equipe_domBdd[] = $row[1];
		 $id_equipe_extBdd[] = $row[2];
		 $id_journeeBdd[] = $row[3];
		 $buts_domBdd[] = $row[4];
		 $buts_extBdd[] = $row[5];
		}
		
//**********************************************
// id renumeroté
//echo "nbreLignes : ".$nbreLignes;echo "<br>";

	//echo "scores : ".$idBdd[$i].' - '.$id_equipe_domBdd[$i].' - '.$id_equipe_extBdd[$i].' - '.$buts_domBdd[$i].' - '.$buts_extBdd[$i];echo "<br>";
    echo " -".' '.$i.' '.$buts_domBdd[$i].' - '.$buts_extBdd[$i]." --> ";
	
	if ( $buts_domBdd[$i] + $buts_extBdd[$i]  > 0 and $buts_dom + $buts_ext == 0){
	  echo "test1  : ";	
	  $bdd->exec("UPDATE $tableMatch
				  SET id = '$id', date_reelle ='$date_reelle', buts_dom = '$buts_domBdd[$i]', buts_ext = '$buts_extBdd[$i]'  
				  WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");	
	}
	elseif ( $buts_domBdd[$i] + $buts_extBdd[$i] == 0 and  $buts_dom + $buts_ext > 0){	 
	  echo "test2 : ";	
	  $bdd->exec("UPDATE $tableMatch
				  SET id = '$id', date_reelle ='$date_reelle', buts_dom = '$buts_dom', buts_ext = '$buts_ext'  
				  WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");
	}
	elseif ( $buts_domBdd[$i] + $buts_extBdd[$i] != 0 and  $buts_dom + $buts_ext !=0){	 
	  echo "test3 : ";	
	  $bdd->exec("UPDATE $tableMatch
				  SET id = '$id', date_reelle ='$date_reelle', buts_dom = '$buts_dom', buts_ext = '$buts_ext'  
				  WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");
	}
	//transformation des scores 0-0 en NULL-NULL
	elseif ( $buts_dom + $buts_ext == 0)		{	
		echo "test4 : ";
		$bdd->exec("UPDATE $tableMatch
				SET  id = '$id', date_reelle ='$date_reelle', id_journee='$id_journee', buts_dom = NULL, buts_ext = NULL 
				WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");
		}
		
	// affichage des lignes suivantes
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

 //Traitement d'un forfait ou MEI (-2 de bonus)
	if ($buts_dom == 0 and $buts_ext == 25 and $bonusDeLaJournee > -1){
	echo "forfait dom";echo "<br />";
	echo $buts_dom.' - '.$buts_ext.' - '.$bonusDeLaJournee;echo "<br />";
	$equipeTraitee = $id_equipe_dom;
	forfait($equipeTraitee, $id_journee, $ligue, $bdd);
	}
	
	if ($buts_dom == 25 and $buts_ext == 0 and $bonusDeLaJournee >= 0){
	echo "forfait ext3";	echo "<br />";
	echo $buts_dom.' - '.$buts_ext.' - '.$bonusDeLaJournee;echo "<br />";
	$equipeTraitee = $id_equipe_ext;
	forfait($equipeTraitee, $id_journee, $ligue, $bdd);
	}
	
	
	
	
	$i =$i+1;
	//echo "**************";echo "<br>";
   } 
    //$compteur_int = $compteur_int + 1 ;
 
 }
 
//echo "<br />";echo "<br />";
//echo "nombre de lignes traitées : ".$compteur_int;			
//echo "<br />"; 
echo "------------------------ fin de programme ----------------";
echo "<br/>";
echo $journeeDebut;
global $champRecup;echo "<br/>";
$champRecup=substr($journeeDebut,0,6);
echo "champRecup : ".$champRecup;echo "<br />";

require "../../Phpleague/$ligue/admin/genererSansIhm.php";
require '../majScores/bas.php';



?>
