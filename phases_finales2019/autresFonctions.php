
<?php
function suiviDuTraitement($division, $requete){

if($requete)	
	{
	echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
	echo "<br />";
	}
else{
	echo("La modification (".$division.") a &eacute;chou&eacute;") ;
	echo "<br />";
	}	
}



function traitementScores ($debut, $fin)
{
	for ($i= $debut; $i <= $fin ; $i++)
	{
	global ${"A".($i)};
	global ${"clubA".($i)};
	//if (isset (${"A".($i)})) ${"A".($i)}=${"A".($i)};${"A".($i)}='-';
	
	//Qualifi� d'office
	
	
	if (${"A".($i)} == '999')	{${"A".($i)}="Q"; }
	if (${"A".($i)} == '222')   {${"A".($i)}="-"; }	
	//if (${"A".($i)} == '222')   {${"clubA".($i)}="-"; }	
	//if (${"A".($i)} == '-')     {${"clubA".($i+1)}="-"; }
	
	
	// non affichage d'un �quipe
	/*
	if ($clubA2001 == '99999'  or $clubA2001 == '-')   
		$clubA2002 = "-";
	if ($clubA2003 == '99999'  or $clubA2003 == '-')   
		$clubA2004 = "-";
	
	if ($clubA1001 == '99999'  or $clubA1001 == '-')   
		$clubA1002 = "-";
	
	*/
	
	
		
	//forfait , disqualification, qualif au Tab
	
	if (${"A".($i)} == '555' )  {${"A".($i)}="Tab"; }
	if (${"A".($i)} == '666' )  {${"A".($i)}="DQ"; }
	if (${"A".($i)} == '777' )  {${"A".($i)}="F"; }
	if (${"A".($i)} == '888')	{${"A".($i)}="25"; }
	}
}

//Affichage des dates des phases finales
function date2019($division, $annee, $bdd)
{
global $D64ME; global $D32ME; global $D16ME; global $D8ME; global $D4ME;  global $D2ME; global $D1ME; global $D0ME;

$reponse = $bdd->query("SELECT *
						FROM bdpffrance_date
						WHERE id = $division AND saison ='$annee'");
								while ($row = $reponse->fetch() )
									{ 
									$D64ME = $row[2];
									$D32ME = $row[3];
									$D16ME = $row[4];
									$D8ME = $row[5];
									$D4ME = $row[6];
									$D2ME = $row[7];
									$D1ME = $row[8];
									$D0ME = $row[9];
									}									
}

// R�cup�ration du nom de la division
function nomDivision($division)
{
global $nomDivision;	

require '../../connect/connection5.php';
				
	$reponse = $bdd->query("SELECT division
							FROM divisions
							WHERE id = $division "); 
								while ($row = $reponse->fetch() )
									{ 
									$nomDivision = $row[0];
									}								
}


//*********    Affichage du champion et du logo     **************
function championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd)
{
if (isset ($chamLogo)) $chamLogo = $chamLogo; else $chamLogo='clubs inconnu'; 
if (isset ($idEquipe)) $idEquipe = $idEquipe; else $idEquipe=''; 
if (isset ($championPLusLigue)) $championPLusLigue = $championPLusLigue; else $championPLusLigue=''; 

if (isset($clubA1001)) $clubA1001=$clubA1001; else $clubA1001="";

global $champion, $idEquipe, $nomChampion, $idEquipeCourt ;

if (is_numeric($A1001)+ is_numeric($A1002) > 0)
		{ if ($A1001>$A1002)
			{
				$champion=$clubA1001;
				//$idChampion=$A1001;
			}				
			else	
			{
				$champion=$clubA1002;
				//$idChampion=$A1002;	
			}
		}
$nomChampion= substr($champion,0, -6);

// affichage logo
 $reponse = $bdd->query("SELECT id
						 FROM bdclubs
						 WHERE  nom_1 = '$nomChampion' and type='M'"); 
  
  while ($row = $reponse->fetch())
  { 
   $idEquipe = $row[0];
  }
  $idEquipeCourt=substr($idEquipe ,2,5);
}

//bdd - division - place
function traitement($comite, $division, $place)
{
require '../connect/connexion6.php';	

$phpComite_clmnt_cache="php".$comite."_clmnt_cache";


$reponse = $bdd->query("SELECT NOM, ID_EQUIPE, POINTS, DIFF
							FROM $phpComite_clmnt_cache
							WHERE id_champ ='$division'
							ORDER BY POINTS DESC"); 
								
	
	while ($row = $reponse->fetch() )
		{ 
		$nomEquipe[]= $row[0];
		$idEquipe[]= $row[1];
		$points[]= $row[2];
		$GA[]= $row[3];
		}
	$i = $place- 1;
	echo $place.' ;'.$idEquipe[$i].'; '.$nomEquipe[$i].'; '.$points[$i].'; '.$GA[$i].'; '.$division;echo "<br>";	
}





function recupListeEquipes($bdd)
{


$nomEquipe= array();
$idEquipe= array();


		

	
 
traitement(990151);
traitement(990152);
traitement(990153);
 
}