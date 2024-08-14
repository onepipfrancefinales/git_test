<?php
function fusionDeClubs2 ($equipe, $nouveauClub, $bdd) {
	global $clubFusion1, $clubFusion2, $clubFusion3, $fusion1, $fusion2, $fusion3, $anneeFusion, $nouveauNomClub;
	$res = $bdd->query("SELECT fusion1, fusion2, fusion3, annee, nom
				   FROM chgmtNomClub 
				   WHERE id = '$equipe' 
					");

	while ($row = $res->fetch()) {
		$fusion1 = $row[0];
		$fusion2 = $row[1];
		$fusion3 = $row[2];
		$anneeFusion = $row[3];
		$nouveauNomClub = $row[4];
	}

	// bdclubs : Récupèration du nom et sigle

	$res1 = $bdd->query("SELECT sigle, nom_1 , fusion
				   FROM bdclubs 
				   WHERE id = '$fusion1'");

	while ($row = $res1->fetch()) {
		$clubFusion1 = $row[0];
		$clubNom1 = $row[1];
		$statut1 = $row[2];
	}

	$res2 = $bdd->query("SELECT sigle, nom_1 , fusion
				   FROM bdclubs 
				   WHERE id = '$fusion2'");

	while ($row = $res2->fetch()) {
		$clubFusion2 = $row[0];
		$clubNom2 = $row[1];
		$statut2 = $row[2];
	}

	$res3 = $bdd->query("SELECT sigle, nom_1 ,fusion
	FROM bdclubs 
	WHERE id = '$fusion3'");

while ($row = $res3->fetch()) {
$clubFusion3 = $row[0];
$clubNom3 = $row[1];
$statut3 = $row[2];

}
}





function fusionDeClubs ($equipe, $nouveauClub, $bdd) {
	global $clubFusion1, $clubFusion2, $clubFusion3, $fusion1, $fusion2, $fusion3, $anneeFusion, $nouveauNomClub;
	$res = $bdd->query("SELECT fusion1, fusion2, fusion3, annee, nom
				   FROM chgmtNomClub 
				   WHERE id = '$equipe' 
					");

	while ($row = $res->fetch()) {
		$fusion1 = $row[0];
		$fusion2 = $row[1];
		$fusion3 = $row[2];
		$anneeFusion = $row[3];
		$nouveauNomClub = $row[4];
	}

	// bdclubs : Récupèration du nom et sigle

	$res1 = $bdd->query("SELECT sigle, nom_1 , fusion
				   FROM bdclubs 
				   WHERE id = '$fusion1' 
					");

	while ($row = $res1->fetch()) {
		$clubFusion1 = $row[0];
		$clubNom1 = $row[1];
		$statut1 = $row[2];
	}

	$res2 = $bdd->query("SELECT sigle, nom_1 , fusion
				   FROM bdclubs 
				   WHERE id = '$fusion2' 
					");

	while ($row = $res2->fetch()) {
		$clubFusion2 = $row[0];
		$clubNom2 = $row[1];
		$statut2 = $row[2];
	}

	$res3 = $bdd->query("SELECT sigle, nom_1 ,fusion
	FROM bdclubs 
	WHERE id = '$fusion3' 
	 ");

while ($row = $res3->fetch()) {
$clubFusion3 = $row[0];
$clubNom3 = $row[1];
$statut3 = $row[2];

}

// bdequipe1 Récupèration d'un tableau comportant les titres des équipes premières
 $tabPalmEquipe1 = array();

 /************ Equipe 1*************************/

 if ($nouveauClub == 0) {
$saisonClub1 = array();
$titreClub1 =array();
$divisionClub1 = array();
$championnatClub1 = array();
$championClub1= array();

	// nombre de titres
	$nbreTitreClub1 = $bdd->query("SELECT COUNT(*)
	FROM bdequipe1 
	WHERE champion ='$clubNom1'  AND (titre = 'Champion' OR titre ='Vice champion')
	");

	$row=$nbreTitreClub1->fetch();
	$nbTitreClub1= $row[0]; 
	/*-------------------------*/
	
	$resClub1 = $bdd->query("SELECT saison, titre, championnat, division, champion
	FROM bdequipe1 
	WHERE  champion ='$clubNom1'  AND (titre = 'Champion' OR titre ='Vice champion')
	 ");

while ($row = $resClub1->fetch()) {
$saisonClub1[] = $row[0];
$titreClub1[] = $row[1];
$championnatClub1[] = $row[2];
$divisionClub1[] = $row[3];
$championClub1[] = $row[4];
}

for ($i=0; $i<=$nbTitreClub1-1; $i++)
{
	echo "<div id=\"palmares\" class=\"center\">";
    echo  $saisonClub1[$i].' '.$titreClub1[$i].' '.$championnatClub1[$i].' '.$divisionClub1[$i].' '."(".$clubNom1.")"."<br>";
	echo "<div>";
}
}
/************ Equipe 2*************************/


if ($nouveauClub == 0) {
$saisonClub2 = array();
$titreClub2 =array();
$divisionClub2 = array();
$championnatClub2 = array();
$championClub2= array();

	// nombre de titres
	$nbreTitreClub2 = $bdd->query("SELECT COUNT(*)
	FROM bdequipe1 
	WHERE champion ='$clubNom2'  AND (titre = 'Champion' OR titre ='Vice champion')
	");

	$row=$nbreTitreClub2->fetch();
	$nbTitreClub2= $row[0]; 





$resClub2 = $bdd->query("SELECT saison, titre, championnat, division, champion
	FROM bdequipe1 
	WHERE  champion ='$clubNom2'  AND (titre = 'Champion' OR titre ='Vice champion')
	 ");

while ($row = $resClub2->fetch()) {
	$saisonClub2[] = $row[0];
	$titreClub2[] = $row[1];
	$championnatClub2[] = $row[2];
	$divisionClub2[] = $row[3];
	$championClub2[] = $row[4];

//echo $saisonClub2.' '.$titreClub2.' '.$divisionClub2.' '.$championnatClub2 .' '."(".$clubNom2.")"."<br>";

}

for ($i=0; $i<=$nbTitreClub2-1; $i++)
{
	echo   $saisonClub2[$i].' '.$titreClub2[$i].' '.$championnatClub2[$i].' '.$divisionClub2[$i].' '."(".$clubNom2.")"."<br>";
}
}
/*********************  Equipe 3 *************************** */
if ($nouveauClub == 0) {
$saisonClub3 = array();
$titreClub3 =array();
$divisionClub3 = array();
$championnatClub3 = array();
$championClub3= array();

	// nombre de titres
	$nbreTitreClub3 = $bdd->query("SELECT COUNT(*)
	FROM bdequipe1 
	WHERE champion ='$clubNom3'  AND (titre = 'Champion' OR titre ='Vice champion')
	");

	$row=$nbreTitreClub3->fetch();
	$nbTitreClub3= $row[0]; 


$resClub3 = $bdd->query("SELECT saison, titre, championnat, division, champion 
	FROM bdequipe1 
	WHERE  champion ='$clubNom3'  AND (titre = 'Champion' OR titre ='Vice champion')
	 ");

while ($row = $resClub3->fetch()) {
	$saisonClub3[] = $row[0];
	$titreClub3[] = $row[1];
	$championnatClub3[] = $row[2];
	$divisionClub3[] = $row[3];
	$championClub3[] = $row[4];
}
for ($i=0; $i<=$nbTitreClub3-1; $i++)
{
echo  $saisonClub3[$i].' '.$titreClub3[$i].' '.$championnatClub3[$i].' '.$divisionClub3[$i].' '."(".$clubNom3.")"."<br>";
}
}	
//print_r($tabPalmEquipe1);
//echo count($tabPalmEquipe1);echo "<br>";
//echo $tabPalmEquipe1[0];echo $tabPalmEquipe1[1];echo $tabPalmEquipe1[2];echo $tabPalmEquipe1[3];echo $tabPalmEquipe1[4];

//bd equipe2 toDo
/*
echo "<br>";
echo "--------------------------------------";
echo "<br>";
$tabPalmEquipeTest = array (
	array (
	"saison" => $saisonClub1,
	"titre"=> $titreClub1,
	"championnat"=> $championnatClub1,
	"division"=> $divisionClub1,
	"champion"=> $championClub1,
	),
	array (
		"saison" => $saisonClub2,
		"titre"=> $titreClub2,
		"championnat"=> $championnatClub2,
		"division"=> $divisionClub2,
		"champion"=> $championClub2,
		),
		array (
			"saison" => $saisonClub3,
			"titre"=> $titreClub3,
			"championnat"=> $championnatClub3,
			"division"=> $divisionClub3,
			"champion"=> $championClub3,
			),

);
*/
//	var_dump($tabPalmEquipeTest);
	//asort($tabPalmEquipeTest("saison"));
	//echo $tabPalmEquipeTest['saison'][0].' '.$tabPalmEquipeTest['titre'][0].' '.$tabPalmEquipeTest['championnnat'][0].' '.$tabPalmEquipeTest['division'][0].' '.$tabPalmEquipeTest['saison'][0].' '.$tabPalmEquipeTest['champion'][0];
//	echo "<br>";
//	echo "--------------------------------------";
//	echo "<br>";
//	echo "test : ".$tabPalmEquipeTest[0]["saison"];

//	echo "<br>";

/*	
$employee = array( 
    array( 
        "name" => "Thomas Judell", 
        "address" => "Paris", 
        "email" => "thomas.judell@gmail.com", 
    ), 
    array( 
        "name" => "Emily sosan", 
        "address" => "Lile", 
        "email" => "emily.sosan@gmail.com", 
    ), 
    array( 
        "name" => "Zineb sofia", 
        "address" => "Nantes", 
        "email" => "zineb.sofia@gmail.com", 
    ) 
); 
  
echo "L'adresse de Thomas Judell est : " . $employee[0]["address"] . "\n"; 
echo "L'adresse email de Emily sosan est : " . $employee[1]["email"]; 
  
*/
}
/*******************************************/

function consultationEvolutionClub ($equipe, $bdd)
{
	global $fusion;
	$reponse = $bdd->query("SELECT COUNT(*)
	FROM chgmtNomClub
	WHERE id = '$equipe' and fusion1 IS NOT NULL
	");

	$row=$reponse->fetch();
	$presence= $row[0]; 

	if ($presence >0) $fusion = true; else	$fusion = false;
}


//Affichage du logo et du nom du club par division, par ligue et par genre 
function clubsParLigue($idLigue, $type, $var1, $bdd)
{
  global $nbreEquipe;
  $reponse = $bdd->query("
			 SELECT COUNT(*)
			 FROM bdsaisons, bdclubs
			 WHERE bdsaisons.id = substr(bdclubs.id,-5) 
			 AND bdsaisons.ligue = '$idLigue' 
			 AND bdclubs.type = '$type'
			 AND bdsaisons.en_cours = '$var1'
			 ");
							
  $row=$reponse->fetch();
  $nbreEquipe= $row[0]; 
 // echo $nbreEquipe;
 
 // afficher le logo et le nom du club présent dans la division
  if ( $nbreEquipe > 0)
  {
   $tabCodeEquipe = array();
   $tabNomClub = array();
	
   $reponse = $bdd->query("	
			  SELECT bdsaisons.id, bdclubs.nom_1
			  FROM bdsaisons, bdclubs
			  WHERE bdsaisons.id = substr(bdclubs.id,-5) 
			  AND bdsaisons.ligue = '$idLigue' 
			  AND bdclubs.type = '$type'
		      AND bdsaisons.en_cours = '$var1'
			  ");
							
   while($row = $reponse->fetch())
   {                        
    $tabCodeEquipe[]=$row[0];
    $tabNomClub[] = $row[1];
   }
	
   for ($i=0 ;$i<$nbreEquipe ;$i++)
    {	
     echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";
	 ?>
	 <font face="Times New Roman, Times, serif">
	 <?php
	 echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]</a>";
	 ?>
	 </font>
	 <br />
	 <?php
    }
  }
  else
  {
	?>  
   <font face="Times New Roman, Times, serif">
   <?php
   echo "-";
   ?>
   </font>
   <?php
  }
  
}

//Affichage du logo et du nom du club par division, par comité et par genre 
function clubsParComite($sigle, $type, $var1, $bdd)
{
  global $nbreEquipe;	
  // $terr_annee =("terr_".''.$saison);	
  //recupèrer le nombre d'équipes par division passée en paramètres
  $reponse = $bdd->query("	
						SELECT COUNT(*)
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=substr(bdclubs.id,-5)  
						and bdsaisons.siglecomite='$sigle' 
						AND bdclubs.type = '$type'
						and bdsaisons.en_cours = '$var1' 
						
						 ");
							
 $row=$reponse->fetch();
  $nbreEquipe= $row[0]; 
//echo $nbreEquipe;
	
 //echo $nbreEquipe;
 
  // afficher le logo et le nom du club présent dans la division
  if ( $nbreEquipe > 0)
  {
   $tabCodeEquipe = array();
   $tabNomClub = array();
	
   $reponse = $bdd->query("	
						SELECT bdsaisons.id, bdclubs.nom_1
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=substr(bdclubs.id,-5)  
						and bdsaisons.siglecomite='$sigle' 
						AND bdclubs.type = '$type'
						and bdsaisons.en_cours = '$var1' 
						 ");
							
   while($row = $reponse->fetch())
    {                        
      $tabCodeEquipe[]=$row[0];
      $tabNomClub[] = $row[1];
   }
	
	for ($i=0 ;$i<$nbreEquipe ;$i++)
	{	
	echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";
	?>
	<font face="Times New Roman, Times, serif">
	<?php
	echo " "."<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]</a>";
	?>
	</font>
	<?php
	echo "<br />";
	}
  }
  else
  {
	?>
	<font face="Times New Roman, Times, serif">
	<?php
	//echo "-";
	?>
	</font>
	<?php
  }
}




function rechercheInfosDesClubs($chaine)
{
global $code; global $id; global $ligue;

require ("../connect/connexion1.php") ;
if ($chaine>0)
	{
	echo " numerique";
	
	$reponse = $bdd->query("SELECT  id, type, code,sigle
				FROM bdclubs  
				WHERE  id='$chaine' OR code='$chaine'  OR idffr='$chaine'  ");  
							While ($row = $reponse->fetch() )
									{ 
									  	$code=$row[0];
										$id=$row[0];
										$ligue=$row[1];	 
									}	
	echo $code;
	echo "<br />";
	echo $ligue;
	echo "FIN";	
	}
else
	{
	echo "ooooooo".$chaine;
	echo "non numerique";

	echo "1 :".$code;
	echo "2 :".$id;
	echo "3 :".$ligue;
	$reponse = $bdd->query("SELECT  id, type, code
							FROM bdclubs  
							WHERE  nom_1='$chaine' OR nom_2='$chaine' OR sigle='$chaine' OR nom_3='$chaine' OR nom_4='$chaine' OR idffr='$chaine' ");  
							While ($row = $reponse->fetch() )
									{ 
									  	$code=$row[0];
										$id=$row[0];
										$ligue=$row[1];	 
									}	
	echo $code;
	echo "<br />";
	echo $ligue;
	echo "FIN";
	}	
}
// Dénombrer le nombre de clubs par comité
function nbreClubsComite($bdd)
{
 global $nbre;	
	
 $cleComite = array('(al)','(ab)','(au)','(be)','(bg)','(ce)','(c)','(cbl)','(ca)','(caz)','(da)','(fl)','(fc)','(idf)','(ld)','(lm)','(ly)','(mpy)','(n)','(pl)','(pa)','(pch)','(pr)','(pc)');
 $nbre = array();
 require ("../connect/connexion1.php") ;	
 foreach($cleComite as $comite) 
  {
	$reponse = $bdd->query("SELECT COUNT(id)
							FROM bdclubs  
							WHERE  siglecomite ='$comite)'");  

	$nbre = $reponse->fetch();
  }
}

// Récuperer l'ensemble des éléments présents dans la table bdcomite
function rechercheInfosComites($sigle, $bdd)
{

 global $dep1, $dep2, $dep3,	$dep4, $dep5, $dep6, $dep7, $dep8,
	$dep9,	$dep10,	$dep11, $dep12, $nbreSeniors, $nbreFeminines,
	$nbreJeunes, $nbreDirigeants, $sigleLigue;	

 $reponse = $bdd->query("SELECT * 
						FROM bdcomite 
						WHERE sigle='$sigle' "); 
							
  while ($donnees = $reponse->fetch() )
  { 
	$dep1 = $donnees['dep1']; 
	$dep2 = $donnees['dep2'];
	$dep3 = $donnees['dep3'];
	$dep4 = $donnees['dep4'];
	$dep5 = $donnees['dep5']; 
	$dep6 = $donnees['dep6'];
	$dep7 = $donnees['dep7'];
	$dep8 = $donnees['dep8'];
	$dep9 = $donnees['dep9'];
	$dep10 = $donnees['dep10'];
	$dep11 = $donnees['dep11'];
	$dep12 = $donnees['dep12'];	
	$nbreSeniors = $donnees['nbre_senior'];
	$nbreFeminines = $donnees['nbre_feminine'];
	$nbreJeunes = $donnees['nbre_jeune'];
	$nbreDirigeants = $donnees['nbre_dirigeant'];
	$sigleLigue	= $donnees['sigleLigue'];
  }							
}							
							
// Récuperer l'ensemble des éléments présents dans la table bdligue
function rechercheInfosLigues($idLigue, $bdd)
{


	
 global $idLigue, $nomLigue, $sigleLigue, $nbreFeminines, $nbreFemininesJeunes,	$nbreSeniors ,	$nbreJeunes ,$nbreDirigeants ,
	   $nbreClubs,	$president ,$batiment ,	$adresse ,	$cp , $ville , $site ,  $tel , $fax  ,
	   $comite1,	$comite2,	$comite3,	$comite4,	$comite5,	$comite6;

 $reponse = $bdd->query("SELECT *
						FROM bdligue 
						WHERE id='$idLigue' "); 
  while ($donnees = $reponse->fetch())
	{ 
				//$idLigue = $donnees[0];
				$nomLigue = $donnees[1];
				$sigleLigue = $donnees[2];
				$nbreFeminines = $donnees[3];					
				$nbreFemininesJeunes = $donnees[4];
				$nbreSeniors = $donnees[5];
				$nbreJeunes = $donnees[6];
				$nbreDirigeants = $donnees[7];
				$nbreClubs = $donnees[8];
				$president = $donnees[9];
				$batiment = $donnees[10];
				$adresse = $donnees[11];
				$cp = $donnees[12];
				$ville = $donnees[13];
				$site = $donnees[14];
				$tel = $donnees[15];
				$fax = $donnees[16];
				//$courriel = $donnees[16];
				//$clubs = $donnees[17];
				//$licencies = $donnees[18];
				//$site = $donnees[19];
				$comite1 = $donnees[18];
				$comite2 = $donnees[19];
				$comite3 = $donnees[20];
				$comite4 = $donnees[21];
				$comite5 = $donnees[22];
				$comite6 = $donnees[23];			
	}
}
// Récupèrer le nom de la ligue à partir du sigle de la ligue(ex : occ)
function nomLigueParSigleLigue($sigleLigue ,$bdd)
{
 global $NomLigueParSigle;
 $sigleLigue = substr($sigleLigue,1,3);

 $reponse = $bdd->query("
			SELECT nom
			FROM bdligue 
			WHERE  sigle= '$sigleLigue'");  
							
  While ($row = $reponse->fetch() )
  { 
   $NomLigueParSigle=$row[0]; 
  }	
}
// *********  Récupération des équipes pas ligues et/ou par divisions  ************

// indiquer le nombre de clubs par divisions avec un id d'une ligue passé en paramétre 
function structureLigue($idLigue, $bdd)
{	
 global $d110,$d120,$d130,$d135,$d140,$d150,$d160,$d170,$d180,$d190;	
	
 $tabDivision = array('110','120','130','135','140','150','160','170','180','190');
 $nbre = array();
 $tabNbre = array();
 foreach($tabDivision as $division) 
   {
	$reponse = $bdd->query("SELECT COUNT(*)
							FROM bdsaisons 
							WHERE en_cours = '$division'
							AND ligue='$idLigue' ");  
	$nbre = $reponse->fetch();
	$tabNbre[]= $nbre[0];
	}
	$d110 = $tabNbre[0];
	$d120 = $tabNbre[1];
	$d130 = $tabNbre[2];
	$d135 = $tabNbre[3];
	$d140 = $tabNbre[4];
	$d150 = $tabNbre[5];
	$d160 = $tabNbre[6];
	$d170 = $tabNbre[7];
	$d180 = $tabNbre[8];
	$d190 = $tabNbre[9];	
}

function cssColonne ($trigrammeLigue) {
	if ( $trigrammeLigue == "ARA" OR $trigrammeLigue == "BRE" OR  $trigrammeLigue == "COR" OR   $trigrammeLigue == "HDF" OR
	  $trigrammeLigue == "NOR" OR   $trigrammeLigue == "OCC" OR   $trigrammeLigue == "PCA" ) 
	  return true;
	  else 
	  return false;
}


function  tabNbreClubs () {

	$tabTrigrammeLigue =   array("ARA" , "BFC", "BRE", "CVL", "COR", "GES", "HDF", "IDF", "NOR", "NAQ", "OCC", "PCA", "PDL" );
	$tabLigue =   array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 22, 21);
	$tabDivision = array(110, 120, 130, 135, 140, 150, 160, 170, 180, 190);
	$tabNomDivision = array ("TOP14", "PROD2", "NAT1", "NAT2", "FED1", "FED2", "FED3",  "REG1", "REG2", "REG3");
	
	foreach ($tabLigue as $idLigue) {
	global $sigleLigue;
	  if ($idLigue == 10)
		$sigleLigue = "ARA";
	  elseif ($idLigue == 11)
		$sigleLigue = "BRE";
	  elseif ($idLigue == 12)
		$sigleLigue = "BFC";
	  elseif ($idLigue == 13)
		$sigleLigue = "CVL";
	  elseif ($idLigue == 14)
		$sigleLigue = "COR";
	  elseif ($idLigue == 15)
		$sigleLigue = "GES";
	  elseif ($idLigue == 16)
		$sigleLigue = "HDF";
	  elseif ($idLigue == 17)
		$sigleLigue = "IDF";
	  elseif ($idLigue == 18)
		$sigleLigue = "NOR";
	  elseif ($idLigue == 19)
		$sigleLigue = "NAQ";
	  elseif ($idLigue == 20)
		$sigleLigue = "OCC";
	  elseif ($idLigue == 21)
		$sigleLigue = "PDL";
	  elseif ($idLigue == 22)
		$sigleLigue = "PCA";
	/*
	structureLigue($idLigue, $bdd); ${$sigleLigue."110"} = $d110;
									${$sigleLigue."120"} = $d120; 
									${$sigleLigue."130"} = $d130;
									${$sigleLigue."135"} = $d135;
									${$sigleLigue."140"} = $d140; 
									${$sigleLigue."150"} = $d150;
									${$sigleLigue."160"} = $d160;
									${$sigleLigue."170"} = $d170;
									${$sigleLigue."180"} = $d180; 
									${$sigleLigue."190"} = $d190;

	*/								
	}


}



?>
