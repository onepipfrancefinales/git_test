

<?php
//***********************************************************************/
//SOMMAIRE																*/
//				Champion (premier de poule )        					 */
//				Finale 													*/
//				Demi finale												*/
//				Demi finale aller-retour								*/
//				Quarts	(ligne 822)                                     */
//***********************************************************************/

function championDirect ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
{


global $championDirect;
global $logoDirect;

//-------------initialisation des variables----------------



$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1001
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1001=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$championDirect = $row[0];
						$logoDirect = $row[1];
						
						}

}
?>






<?php //*****************************************************************/
//																		*/
//----------------Finale : equipes et logos------------------			*/
//																		*/
//***********************************************************************/

function finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 {


global $clubA;
global $logoA;
global $clubB1001;
//-------------initialisation des variables----------------
$clubA="-";


$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1001
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1001=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$clubA = $row[0];
		$logoA = $row[1];
		$sigle = $row[2];
		}
$nom1001 = substr($clubA,0,20);
$logo1001=$logoA;
$clubB1001 = ($nom1001.' '.$sigle);
}
?>

<?php
function finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 {
 

 
global $clubB;
global $logoB;

//-------------initialisation des variables----------------
 $clubB="-";

$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1002
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1002=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee" ; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$clubB = $row[0];
		$logoB = $row[1];
		}
}
?>
 
 
 
<?php
//----------------Finale : les r�sultats------------------ 

function score ( $division, $annee, $bdcomiteAnnee)
 {
global $scoreA;
global $scoreB;
global $champion;
global $logo;
global $clubB;
global $logoB;
global $clubA;
global $logoA;

$requete = "SELECT  A1001,A1002
			FROM $bdcomiteAnnee
			WHERE  division=$division and annee=$annee"; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$score1 = $row[0];
		$score2 = $row[1];
		}

$scoreA=$score1;
$scoreB=$score2;

$tiret="-";

	if ($scoreA + $scoreB > 0)
			{
			$scoreA=$scoreA;
		  // $clubA=$clubA; 
		   $scoreB=$scoreB;
		  // $clubB=$clubB; 
		   
			   if ($scoreA>$scoreB)
					{
					$logo=$logoA;
					$champion=$clubA;
					}
			   else
				   {
				   $logo=$logoB;
				   $champion=$clubB;
				   }
			
			
			}
	else
		   { 
		   $scoreA=$tiret;
			$scoreB=$tiret;
			$champion="";
			$logo="";
		   
		   }
	   
	


}

?> 


<?php
//***********************************************************************/
//																		*/
//---------------Demi  Finale : equipes et logos------------------		*/
//																		*/
//***********************************************************************/

function demiFinaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubA;
		global $logoA;
		
//-------------initialisation des variables----------------
$finaliste1="";  $finaliste2="";  $clubA="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2001
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2001=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
							$result = mysql_query($requete) ;
								while ($row = mysql_fetch_array($result) )
									{ 
									$clubA = $row[0];
									$logoA = $row[1];
									}
									
									
	}
?>

<?php
function demiFinaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubB;
		global $logoB;
		
//-------------initialisation des variables----------------
$clubB="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2002
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2002=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
						$result = mysql_query($requete) ;
						while ($row = mysql_fetch_array($result) )
							{ 
							$clubB = $row[0];
							$logoB = $row[1];
							}
	}
?>

<?php
function demiFinaleC ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubC;
		global $logoC;
		
//-------------initialisation des variables----------------
$clubC="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2003
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2003=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubC = $row[0];
					$logoC = $row[1];
					}

	}
?>

<?php
function demiFinaleD ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubD;
		global $logoD;

//-------------initialisation des variables----------------
$clubD="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2004
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2004=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubD = $row[0];
					$logoD = $row[1];
					}

	}
?>

<?php
//----------------Demi finale : les r�sultats------------------ 

function scoreDemi ( $division, $annee, $bdcomiteAnnee)
 {


 // Selection de l'�quipe clubA 

	global $clubA;
	global $logoA;

		
 
 
// Selection de l'�quipe clubB 

 global $clubB;
global $logoB;
		
	
 
 // Selection de l'�quipe clubC
 
 global $clubC;
		global $logoC;
		

 
 // Selection de l'�quipe clubD
 
 global $clubD;
		global $logoD;


 
global $scoreA;
global $scoreB;
global $scoreC;
global $scoreD;

global $A1001;
global $A1002;

global $finaliste1;
global $finaliste2;

global $champion;
global $logo;

global $logof1;
global $logof2;

global $demiChampLogo;

$demiChampLogo= "";
$champion="";

$requete = "SELECT  A2001,A2002,A2003,A2004, A1001, A1002
			FROM $bdcomiteAnnee
			WHERE  division=$division and $bdcomiteAnnee.annee=$annee"; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$score1 = $row[0];
		$score2 = $row[1];
		$score3 = $row[2];
		$score4 = $row[3];
		$score5 = $row[4];
		$score6 = $row[5];
		}

$scoreA=$score1;
$scoreB=$score2;
$scoreC=$score3;
$scoreD=$score4;

$A1001=$score5;
$A1002=$score6;


$tiret="-";	
//recuperation des scores A et B
if (($scoreA==NULL) OR ($scoreA + $scoreB == 0)) 
	{
	$scoreA=$tiret; 
	$scoreB=$tiret; 
	$A1001=$tiret;
	} 
//Affichage de la qualification d'office de l'�quipe A
elseif($scoreA==99 AND $scoreB==0)
	{
	$scoreA="Q";
	$scoreB="-";
	}
//Affichage de la qualification d'office de l'�quipe B	
elseif($scoreA==0 AND $scoreB==99)
	{
	$scoreA="-";
	$scoreB="Q";
	}	
else 
	{ 
	$scoreA=$scoreA; 
	$scoreB=$scoreB; 
	$A1001=$A1001;
	}	

//recuperation des scores D et C

if (($scoreC==NULL) OR ($scoreC + $scoreD == 0)) 
	{
	$scoreC=$tiret; 
	$scoreD=$tiret; 
	$A1002=$tiret;
	} 
//Affichage de la qualification d'office de l'�quipe C
elseif($scoreC==99 AND $scoreD==0)
	{
	$scoreC="Q";
	$scoreD="-";
	}
//Affichage de la qualification d'office de l'�quipe D
elseif($scoreC==0 AND $scoreD==99)
	{
	$scoreC="-";
	$scoreD="Q";
	}
else 
	{
	 $scoreC=$scoreC; 
	 $scoreD=$scoreD; 
	 $A1002=$A1002;
	}
		
// Qualification du 1er finaliste

if ($score1+$score2>0)
	{
	if ($score1>$score2)
		{
		$finaliste1=$clubA;
		$logof1=$logoA;
		}
	else
		{
		$finaliste1=$clubB;
		$logof1=$logoB;
		}
	}
else
	{
	$finaliste1=$tiret;
	}
		
// Qualification du 2me finaliste



if ($score3+$score4>0 )
	{
	if( $score3>$score4)
		{
		$finaliste2=$clubC;
		$logof2=$logoC;
		}
	else
		{
		$finaliste2=$clubD;
		$logof2=$logoD;
		}
	}
else
	{
	$finaliste2=$tiret;
	}
	
// D�termination du champion

if (($A1001+$A1002)>0)

		if ($A1001>$A1002)
			{
			$champion=$finaliste1;
			$demiChampLogo=$logof1;
			}
		else
			{
			$champion=$finaliste2;
			$demiChampLogo=$logof2;
			}
else				
	{
	$A1001="-";
	$A1002="-";
	}
		
					 
}	
  ?>




<?php
//***********************************************************************/
//																		*/
//---------------Demi  Finale AR : equipes et logos------------------	*/
//																		*/
//***********************************************************************/

function demiFinaleAAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		
		
		
		global $clubA;
		global $logoA;
		global $clubB2001;
		
//-------------initialisation des variables----------------
$clubA="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2001
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2001=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubA = $row[0];
					$logoA = $row[1];
					$sigle = $row[2];
					}
$nom2001 = substr($nom,0,20);					
$clubB2001 = ($nom2001.' '.$sigle);
	}
	


?>

<?php
function demiFinaleBAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{



		global $clubB;
		global $logoB;
		
//-------------initialisation des variables----------------
$clubB="-";

		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2002
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2002=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubB = $row[0];
					$logoB = $row[1];
					}

	}
	
//;
	
?>

<?php
function demiFinaleCAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
	
	
		global $clubC;
		global $logoC;
		
//-------------initialisation des variables----------------
$clubC="-";

		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2003
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2003=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubC = $row[0];
					$logoC = $row[1];
					}

	}
	
	
?>

<?php
function demiFinaleDAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
	
	
		global $clubD;
		global $logoD;
		
//-------------initialisation des variables----------------
$clubD="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2004
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2004=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubD = $row[0];
					$logoD = $row[1];
					}

	}
	
	
	
?>

<?php
//----------------Demi finale AR: les r�sultats------------------ 

function scoreDemiAR ( $division, $annee, $bdcomiteAnnee)
{
	global $clubA;
	global $logoA;
	global $clubB;
	global $logoB;
	global $clubC;
	global $logoC;
	global $clubD;
	global $logoD;
	
	global $ptsA;
	global $ptsB;
	global $ptsC;
	global $ptsD;
	
	global $scoreA;
	global $scoreB;
	global $scoreC;
	global $scoreD;

	global $finaliste1;
	global $finaliste2;
	global $champion;
	global $demiChampLogo;
	
	$finaliste1="-";
	$finaliste2="-";
	
	global $A1001;
	global $A1002;

	$demiChampLogo="";
	$champion="";


	$requete = "SELECT  A2001, A2002, A2003, A2004,
						A4001, A4002, A4003, A4004,
						R2001, R2002, R2003, R2004,
						R4001, R4002, R4003, R4004,
						A1001, A1002
				FROM $bdcomiteAnnee
				WHERE  division=$division and $bdcomiteAnnee.annee=$annee"; 
	$result = mysql_query($requete) ;
		while ($row = mysql_fetch_array($result) )
			{ 
			
// R�sultats matchs ALLER			
			$score1 = $row[0];
			$score2 = $row[1];
			$score3 = $row[2];
			$score4 = $row[3];
			
			$score5 = $row[4];
			$score6 = $row[5];
			$score7 = $row[6];
			$score8 = $row[7];
			
// R�sultats matchs RETOUR			
			
			$score9 = $row[8];
			$score10 = $row[9];
			$score11 = $row[10];
			$score12 = $row[11];
			
			$score13 = $row[12];
			$score14 = $row[13];
			$score15 = $row[14];
			$score16 = $row[15];
			
			
// R�sultats matchs FINALE
			
			
			$score17 = $row[16];
			$score18 = $row[17];
			}
	
	$ptsA=$score1 + $score9;
	$ptsB=$score2 + $score10;
	$ptsC=$score3 + $score11;
	$ptsD=$score4 + $score12;
	
	$scoreA=$score5 + $score13;
	$scoreB=$score6 + $score14;
	$scoreC=$score7 + $score15;
	$scoreD=$score8 + $score16;
	
	$A1001=$score17;
	$A1002=$score18;
	
	$tiret="-";
			
	if(($ptsA+$ptsB)<1)
		{
		$ptsA="-";
		$scoreA="-";
		$ptsB="-";
		$scoreB="-";
		}
// Cas d'un qualifi� d'office	
	elseif ($score5==99 AND $score1==99)
			{
			$ptsA="Q";
			$scoreA="Q";
			$ptsB="-";
			$scoreB="-";
			}
			else
			{
			$ptsA=$ptsA;
			$scoreA=$scoreA;
			$ptsB=$ptsB;
			$scoreB=$scoreB;
			}
	
	if(($scoreC+$scoreD)<1)
		{
		$ptsC="-";
		$scoreC="-";
		$ptsD="-";
		$scoreD="-";
		}
	else
		{
		$ptsC=$ptsC;
		$scoreC=$scoreC;
		$ptsD=$ptsD;
		$scoreD=$scoreD;
		}
	
	
// Finaliste 1	
// Cas d'un qualifi� d'office
	if ($score5==99 AND $score1==99)
		{
		$finaliste1=$clubA;
		$logo_demi1=$logoA;
		}

	elseif ($ptsA+$ptsB>6)
		{
			if ($ptsA > $ptsB or ($ptsA==$ptsB and $scoreA>$scoreB))
				{
				$finaliste1=$clubA;
				$logo_demi1=$logoA;
				}
			else
				{
				$finaliste1=$clubB;
				$logo_demi1=$logoB;
				}
		
		}
	else
		{
		
		$finaliste1= "-";
		$finaliste2= "-";	
		$A1001="-";
		$A1002="-";
		}

	
	
	
	
	
	
	if ($ptsC+$ptsD>6)
			{
			if ($ptsC>$ptsD or ($ptsC==$ptsD and $scoreC>$scoreD))
				{
				$finaliste2=$clubC;
				$logo_demi2=$logoC;
				}
			else
				{
				$finaliste2=$clubD;
				$logo_demi2=$logoD;
				}
		
			}
		else
			{
			$finaliste2= "-";	
			}



	if (($A1001+$A1002)>0 )
		{
		$A1001=$A1001;
		$A1002=$A1002;
			if ($A1001>$A1002)
				{
				$champion=$finaliste1;
				$demiChampLogo=$logo_demi1;
				}
			else
				{
				$champion=$finaliste2;
				$demiChampLogo=$logo_demi2;
				}
		
		}
	else
		{
		$A1001="-";
		$A1002="-";
		}


	
}

?> 
	  
 <?php
//***********************************************************************/
//																		*/
//---------------Quarts de Finale : equipes et logos------------------	*/
//																		*/
//***********************************************************************/

function quartFinaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
		{
		global $clubA;
		global $logoA;
		
//-------------initialisation des variables----------------
$finaliste1="";  $finaliste2="";  $clubA="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4001
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4001=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
							$result = mysql_query($requete) ;
								while ($row = mysql_fetch_array($result) )
									{ 
									$clubA = $row[0];
									$logoA = $row[1];
									}
									
									
		}
?>

<?php
function quartFinaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubB;
		global $logoB;
		
//-------------initialisation des variables----------------
$clubB="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4002
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4002=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
						$result = mysql_query($requete) ;
						while ($row = mysql_fetch_array($result) )
							{ 
							$clubB = $row[0];
							$logoB = $row[1];
							}
	}
?>

<?php
function quartFinaleC ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubC;
		global $logoC;
		
//-------------initialisation des variables----------------
$clubC="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4003
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4003=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubC = $row[0];
					$logoC = $row[1];
					}

	}
?>

<?php
function quartFinaleD ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubD;
		global $logoD;

//-------------initialisation des variables----------------
$clubD="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4004
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4004=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubD = $row[0];
					$logoD = $row[1];
					}

	}
	
function quartFinaleE ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubE;
		global $logoE;
		
//-------------initialisation des variables----------------
$finaliste1="";  $finaliste2="";  $clubE="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4005
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4005=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
							$result = mysql_query($requete) ;
								while ($row = mysql_fetch_array($result) )
									{ 
									$clubE = $row[0];
									$logoE = $row[1];
									}
	}
?>

<?php
function quartFinaleF ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubF;
		global $logoF;
		
//-------------initialisation des variables----------------
$clubB="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4006
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4006=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
						$result = mysql_query($requete) ;
						while ($row = mysql_fetch_array($result) )
							{ 
							$clubF = $row[0];
							$logoF = $row[1];
							}
	}
?>

<?php
function quartFinaleG ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubG;
		global $logoG;
		
//-------------initialisation des variables----------------
$clubG="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4007
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4007=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubG = $row[0];
					$logoG = $row[1];
					}

	}
?>

<?php
function quartFinaleH ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubH;
		global $logoH;

//-------------initialisation des variables----------------
$clubH="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4008
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4008=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubH = $row[0];
					$logoH = $row[1];
					}

	}	





?>

<?php

//----------------Quarts Demi finale : les r�sultats------------------ 

function scoreQuarts ( $division, $annee, $bdcomiteAnnee)
 {		
		global $A4001; global $logoA;
		global $A4002; global $logoB;
		global $A4003; global $logoC;
		global $A4004; global $logoD;
		global $A4005; global $logoE;
		global $A4006; global $logoF;
		global $A4007; global $logoG;
		global $A4008; global $logoH;
		
		global $A2001; global $logoDemi1;
		global $A2002; global $logoDemi2;
		global $A2003; global $logoDemi3;
		global $A2004; global $logoDemi4;
		
		global $A1001; global $logoFinale1;
		global $A1002; global $logoFinale2;
		


		$requete = "SELECT  A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,
							A2001, A2002, A2003, A2004, A1001, A1002
					FROM $bdcomiteAnnee
					WHERE  division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
			while ($row = mysql_fetch_array($result) )
				{ 
				$A4001 = $row[0];
				$A4002 = $row[1];
				$A4003 = $row[2];
				$A4004 = $row[3];
				$A4005 = $row[4];
				$A4006 = $row[5];
				$A4007 = $row[6];
				$A4008 = $row[7];
				
				$A2001 = $row[8];
				$A2002 = $row[9];
				$A2003 = $row[10];
				$A2004 = $row[11];
				
				$A1001 = $row[12];
				$A1002 = $row[13];
				
				}


//********** Qualification du 1er demi finaliste  **************************

		
		
		global $clubA;
		global $clubB;
		global $clubC;
		global $clubD;
		global $clubE;
		global $clubF;
		global $clubG;
		global $clubH;
		
		global $demi1;
		global $demi2;
		global $demi3;
		global $demi4;
		
		global $finaliste1;
		global $finaliste2;
		
		global $champion;
		
	if ($A4001+$A4002 > 0)
		{	
			if ($A4001>$A4002)
				{
				$demi1=$clubA;
				$logoDemi1=$logoA;
				}
			else
				{
				$demi1=$clubB;
				$logoDemi1=$logoB;
				}
		}
		else
		{
		$A4001="-";
		$A4002="-";
		$demi1="-";
		}	

//********** Qualification du 2me demi finaliste  ************************



if ( $A4003+$A4004>0 )
	{
	if( $A4003>$A4004)
		{
		$demi2=$clubC;
		$logoDemi2=$logoC;
		}
	else
		{
		$demi2=$clubD;
		$logoDemi2=$logoD;
		}
	}
else
	{
		$A4003="-";
		$A4004="-";
		$demi2="-";
	}
	
//********** Qualification du 2me demi finaliste  **************************

if ($A4005+$A4006>0)
	{
	if ($A4005>$A4006)
		{
		$demi3=$clubE;
		$logoDemi3=$logoE;
		}
	else
		{
		$demi3=$clubF;
		$logoDemi3=$logoF;
		}
	}
else
	{
	$A4005="-";
		$A4006="-";
		$demi3="-";
	}
		
//********** Qualification du 4me demi finaliste  ************************



if ($A4007+$A4008>0 )
	{
	if( $A4007>$A4008)
		{
		$demi4=$clubG;
		$logoDemi4=$logoG;
		}
	else
		{
		$demi4=$clubH;
		$logoDemi4=$logoH;
		}
	}
else
	{
	$A4007="-";
		$A4008="-";
		$demi4="-";
	}	

//************** Qualification du 1er finaliste  ********

if ($A2001+$A2002>0)
	{
	if ($A2001>$A2002)
		{
		$finaliste1=$demi1;
		$logoFinale1=$logoDemi1;
		}
	else
		{
		$finaliste1=$demi2;
		$logoFinale1=$logoDemi2;
		}
	}
else
	{
	$A2001="-";
	$A2002="-";
	$finaliste1="-";
	}
		
//********  Qualification du 2me finaliste  *******



if ($A2003+$A2004>0 )
	{
	if( $A2003>$A2004)
		{
		$finaliste2=$demi3;
		$logoFinale2=$logoDemi3;
		}
	else
		{
		$finaliste2=$demi4;
		$logoFinale2=$logoDemi4;
		}
	}
else
	{
	$A2003="-";
	$A2004="-";
	$finaliste2="-";
	}
	
//********* D�termination du champion  ********

if (($A1001+$A1002)>0)

		if ($A1001>$A1002)
			{
			$champion=$finaliste1;
			$champLogo=$logoFinale1;
			}
		else
			{
			$champion=$finaliste2;
			$champLogo=$logoFinale2;
			}
else				
	{
	$A1001="-";
	$A1002="-";
	}

}
?>

 
 

