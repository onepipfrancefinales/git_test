<?php
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
 if (isset($comite5)) $comite5 = $comite5;
 if (isset($comite6)) $comite6 = $comite6;	
	
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


// indiquer le nombre de clubs par divisions avec un id d'une ligue passé en paramétre 
function structureLigue($idLigue, $bdd)
{	
 global $d110,$d120,$d130,$d135,$d140,$d150,$d160,$d171,$d181,$d191;	
	
 $tabDivision = array('110','120','130','135','140','150','160','171','181','191');
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
	$d171 = $tabNbre[7];
	$d181 = $tabNbre[8];
	$d191 = $tabNbre[9];
	
}
?>
