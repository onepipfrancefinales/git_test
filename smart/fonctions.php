<?php
function divisionPlusPoule($comite, $champ, $bdd)
{

global $poule, $max;

$phpcomite_divisions="php".$comite."_divisions";
$reponse = $bdd->query(" SELECT nom
			FROM $phpcomite_divisions
			WHERE id = $champ ");
				while ($row = $reponse->fetch() )
							{                             
							$poule=$row[0];
							}	
//echo $poule;
//echo "champ : ".$champ;echo "<br />";
$champ = substr($champ,0,5)*10+10;
//echo "champ(xx9) : ".$champ;
$reponse = $bdd->query(" SELECT max(id)
			FROM $phpcomite_divisions
			WHERE id < '$champ' ");
//echo "<br />";			
$row = $reponse->fetch();
$max = $row[0];

$max=substr($max,-1);
//echo "max : ".$max;

}


function division($champ, $bdd)
{
global $nomDivision;

$reponse = $bdd->query(" SELECT division
			FROM bddivisions
			WHERE id = $champ ");
				while ($row = $reponse->fetch() )
							{                             
							$nomDivision=$row[0];
							}	
}															
							
function nomLigue2($comite, $champ, $bdd)							
{
global $ligne1, $ligne2, $ligueEnLettres;
$ligueCode = substr($champ,0,2);
$comite= strtoupper("(".$comite.")");
$reponse = $bdd->query("SELECT c.sigleLigue
						FROM bdcomite c
						WHERE sigle = '$comite' ");
				
	while ($row = $reponse->fetch() )
		{                             
		$ligueAbr=substr($row[0],1,3);
		}

if (isset($ligueCode)) $ligueCode=$ligueCode; else $ligueCode="";
$reponse = $bdd->query("SELECT nom
						FROM bdligue
						WHERE id = '$ligueCode' ");
				
	while ($row = $reponse->fetch() )
		{                             
		$ligueEnLettres=$row[0];
		}


if (substr($champ,-3) > 279 AND substr($champ,-3) < 300 ) 							   
			{
				$ligne1="Championnat de France";
			}					
	elseif (substr($champ,-3) > 170 and substr($champ,-3)< 230 ) 							   
			{
				$ligne1= "Ligue".' '.$ligueEnLettres;	
			}
	elseif (substr($champ,-3) > 270 and substr($champ,-3) < 9210 ) 							   
			{
				$ligne1="Ligue".' '.$ligueEnLettres;
			}				
	else
			{
			 	$ligne1= "Championnat de France";
			}						



if ($champ == 990110 ){$ligne2="Comp&eacute;titions professionnellles";}
			elseif ($champ == 990140){$ligne2="F&eacute;d&eacute;rale 1";}
			elseif ($champ == 990150){$ligne2="F&eacute;d&eacute;rale 2";}
			elseif ($champ == 991161){$ligne2="F&eacute;d&eacute;rale 3";}
			elseif ($champ == 992161){$ligne2="F&eacute;d&eacute;rale 3";}
			elseif ($champ == 990240){$ligne2="Espoir F&eacute;d&eacute;rale 1";}
			elseif ($champ == 990250){$ligne2="F&eacute;d&eacute;rale B";}
			elseif ($champ == 991261){$ligne2="Excellence B";}
			elseif ($champ == 992261){$ligne2="Excellence B";}
			elseif ($champ == 880280){$ligne2="Comp&eacute;titions f&eacute;minines";}
			
			else{$ligne2 = "Comp&eacute;titions R&eacute;gionales";}


//echo $ligne1."<br />".$ligne2;
}								
?>
							
							
							