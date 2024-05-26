 <?php 
$annee=$_GET['annee'];
$division=$_GET['division'];
//if (isset ($_GET['type2'])) $type2=$_GET['type2'];else $type2="";
//echo "type = ".$type2;?>
<html>
  <head>
   <title>Championnat de France <?php echo $annee;?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!--<link rel="stylesheet" type="text/css" href="../2.css">-->
   <link rel="stylesheet" type="text/css" href="AA2.css">  
   <link type="text/css" rel="stylesheet" href="../10.css">
   <meta name=viewport content="width=device-width, initial-scale=1">
  </head>

<body bgcolor="#EAECEB" text="#000000">
 <?php
require ("../../phases_finales2019/fonctionsChampFrance2019.php");  
require '../../connect/connexion5.php';
nomDivision($division);

require '../../connect/connexion1.php';
trenteDeuxieme2019 ($division, $annee, $bdd);
championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd);

	include("entete.php");
	require 'liensdiv.php';
	echo "<br/>";
	
/*	32me / 32meAR / Pas de 32me */

if (substr($type,0,3) == '964')
			require '32meAR.php';
elseif (substr($type,0,3) == '932')
			require '32me.php';

/*	16me / 16meAR / Pas de 16me*/
if (substr($type,3,2)== '32')
			require '16meAR.php';
elseif (substr($type,3,2)== '16')
			require '16me.php';

/*	8me / 8meAR / Pas de 8me */
if (substr($type,5,2)== '16')
			require '8meAR.php';
elseif (substr($type,5,2)== '08')
			require '8me.php';
		
/* quarts /quarts AR /Pas de Quarts*/
if (substr($type,7,2)== '08')
			require 'quartsAR.php';
elseif (substr($type,7,2)== '04')
			require 'quarts.php';

/* demi / demi AR / pas de demi*/
if (substr($type,9,2)== '04')
			require 'demiAR.php';
elseif (substr($type,9,2)== '02')			
			require 'demi.php';

/* finale / finale AR */
if (substr($type,9,2)== '11')
			{	
			require 'finaleAR.php';
			}
		else
			{
			require 'finale.php';
			}



/*

//*****  Navigation entres les differents pages  ********	

if ($type2 > 0)
{
		
		if ($type2==32)
			{
			require '32me.php';
			}
		elseif ($type2==322)
			{
			require '32meAR.php';
			}
			
		elseif ($type2==16)
			{
			require '16me.php';
			}
		elseif ($type2==162)
			{
			require '16meAR.php';
			}
		elseif ($type2==8)
			{
			require '8me.php';
			require 'quarts.php';
			require 'demi.php';
			require 'finale.php';
			}
		elseif ($type2==82)
			{
			require '8meAR.php';
			require 'quarts.php';
			require 'demi.php';
			require 'finale.php';
			}

}
else
{	
	
//**************  Exceptions *************************		
	
	if ($division == '110')
		require 'top14.php';
		
	elseif ($division == '120')
		require 'prod2.php';
	
//**************  Trente-deuxi�me *************************	

	elseif (substr($type,0,3)==932 or substr($type,0,3) ==964)
		{
		if (substr($type,0,3) == 964)
			require '32meAR.php';
		else
			require '32me.php';
		}
//**************  seizi�me  *************************

	elseif(  substr($type,3,2)== 16 or substr($type,3,2)== 32 or $type2==16)
		{
		if (substr($type,3,2)== 32)
			require '16meAR.php';
		else
			require '16me.php';
		}
		
//**************  Huiti�me  *************************		

	elseif(substr($type,5,2)== 8 or substr($type,5,2)== 16)
		{
		if (substr($type,5,2)== 16)
			require '8meAR.php';
		else
			require '8me.php';
		}
		
//**************  Quarts  *************************		

	elseif(substr($type,7,2)== 4 or substr($type,7,2)== 8)
		{
		if (substr($type,7,2)== 8)
			{
			require 'quartsAR.php';
			}
		else
			{
			require 'quarts.php';
			require 'demi.php';
			require 'finale.php';
			//require 'champion.php';
			}
		}
		
//**************  Demi  *************************

	elseif(substr($type,9,2)== '02' or substr($type,9,2)== '04')
		{
		if (substr($type,9,2)== '04')
			{
			require 'demiAR.php';
			}
		else
			{
			require 'demi.php';
			require 'finale.php';
			//require 'champion.php';
			}
		}
		
//**************  Finale *************************		

	elseif(substr($type,9,2)== '01' or substr($type,9,2)== '11')
		{
		if (substr($type,9,2)== '11')
			{	
			require 'finaleAR.php';
			}
		else
			{
			require 'finale.php';
			}
		}
}
*/
?>	
<!--	<br>
<table width="90%" border="1" align="center">
  <tr> 
    <td bgcolor="#FF0000" height="32" class="champion">Champion de France <?php echo $annee ;?></td>
  </tr>
</table>
<center>	
<?php	
//	$idEquipeCourt = substr($idEquipe,2,7);echo "<br />";
//	echo "<img src=\"../../images/blasons200_200/$idEquipeCourt.gif\" height=\"100\" width=\"100\">";
	?>
	<p class="equipeChamp"><?php// echo $champion;?></p>
</center>
-->
<?php	
	require '../bas.php';
	?>
</body>
</html>