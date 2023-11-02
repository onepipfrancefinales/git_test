<?php

if ($division == 7160 )
{	
$texteDivision = "Rencontre chez le premier cité";


$clubA3201="Decazeville (OCC) ";				$A3201=16;
$clubA3202="Aix les bains (ARA)";				$A3202=6;

$clubA3203="Cavaillon (PCA) ";					$A3203=32;
$clubA3204="Mourillon (PCA) ";					$A3204=11;

$clubA3205="Auxerre (BFC) ";					$A3205=57;
$clubA3206="Valreas (PCA) ";					$A3206=7;

$clubA3207="Les Sables d Olonne (PDL) ";		$A3207=26;
$clubA3208="Chinon (CVL)";						$A3208=15;

$clubA3209="Houilles (IDF) ";					$A3209=13;
$clubA3210="Leognan (NAQ) ";					$A3210=14;

$clubA3211="Bardos (NAQ) ";						$A3211=17;
$clubA3212=" Caussade (OCC)";					$A3212=7;

$clubA3213="Saint Marcel Isle d Abeau (ARA) ";	$A3213=10;
$clubA3214="Rivesaltes (OCC) ";					$A3214=18;

$clubA3215="Illkirch Graffenstaden (GES)";		$A3215=16;
$clubA3216="Roubaix (HDF)";						$A3216=18;

$clubA3217="Villeneuve de Marsan (NAQ) ";		$A3217=34;
$clubA3218="L Isle en Dodon (OCC)";				$A3218=30;

$clubA3219="Canton Alban (OCC)";				$A3219=28;
$clubA3220="Bellegarde sur Valserine (ARA) ";	$A3220=13;

}
elseif ($division == 7260)
{
$texteDivision = "Rencontre sur terrain neutre";

$clubA3201="Aix Université (PCA) ";				$A3201=38;
$clubA3202="Caen (NOR)";						$A3202=14;

$clubA3203="Auxerre (BFC) ";					$A3203=36;
$clubA3204="Cavaillon (PCA) ";					$A3204=23;

$clubA3205="Saverdun (OCC) ";					$A3205=36;
$clubA3206="Chagny (BFC) ";						$A3206=23;

$clubA3207="Cergy Pontoise (IDF) ";				$A3207=24;
$clubA3208="Villeneuve de Marsan (NAQ)";		$A3208=16;

$clubA3209="Lons le Saunier (BFC)";				$A3209=34;
$clubA3210="Valreas (NAQ) ";					$A3210=17;

$clubA3211="Rion des Landes (NAQ) ";			$A3211=22;
$clubA3212=" Andrezieux Boutheon (ARA)";		$A3212=3;

$clubA3213="L Isle en Dodon (OCC) ";			$A3213=18;
$clubA3214="Bazas (NAQ) ";						$A3214=21;

$clubA3215="Figeac (NAQ)";						$A3215=19;
$clubA3216="Epernay (IDF)";						$A3216=13;

$clubA3217="Gradignan (NAQ) ";					$A3217=13;
$clubA3218="Servian Boujan (OCC)";				$A3218=15;

$clubA3219="Saint Malo (BRE)";					$A3219=18;
$clubA3220="Angers (PDL) ";						$A3220=33;

}
?>

 <table width="90%" border="1" align="center">
    <tr> 
      <td class="titre"> Barrages <br /><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D64ME; ?></strong></i></b></font></div></td>
    </tr>
  </table>
  <table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2"><div align="left"><font size="3" face="Arial, Helvetica, sans-serif"><i><?php echo $texteDivision; ?></i></font></div></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td class="pts"></td>
    <td class="Ga"></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3201;?></td>
    <td class="coin4GA"><?php echo $A3201;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3202;?></td>
    <td class="coin4GA"><?php echo $A3202;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3203;?></td>
    <td class="coin5GA"><?php echo $A3203;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3204;?></td>
    <td class="coin5GA"><?php echo $A3204;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3205;?></td>
    <td class="coin4GA"><?php echo $A3205;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3206;?></td>
    <td class="coin4GA"><?php echo $A3206;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3207;?></td>
    <td class="coin5GA"><?php echo $A3207;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3208;?></td>
    <td class="coin5GA"><?php echo $A3208;?></td>
  </tr>
 
  <tr> 
    <td class="equipe4"><?php echo $clubA3209;?></td>
    <td class="coin4GA"><?php echo $A3209;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3210;?></td>
    <td class="coin4GA"><?php echo $A3210;?></td>
  </tr>
  </table>
  
  <p align="center"><?php	include ("../../pub/pub20.php");?></p>
  
    <table width="90%" border="0" align="center">
   <tr> 
    <td class="equipe5"><?php echo $clubA3211;?></td>
    <td class="coin5GA"><?php echo $A3211;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3212;?> </td>
    <td class="coin5GA"><?php echo $A3212;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3213;?></td>
    <td class="coin4GA"><?php echo $A3213;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3214;?></td>
    <td class="coin4GA"><?php echo $A3214;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3215;?></td>
    <td class="coin5GA"><?php echo $A3215;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3216;?></td>
    <td class="coin5GA"><?php echo $A3216;?></td>
  </tr>

  <tr> 
    <td class="equipe4"><?php echo $clubA3217;?></td>
    <td class="coin4GA"><?php echo $A3217;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA3218;?></td>
    <td class="coin4GA"><?php echo $A3218;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3219;?></td>
    <td class="coin5GA"><?php echo $A3219;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA3220;?></td>
    <td class="coin5GA"><?php echo $A3220;?></td>
  </tr>
  <tr> 
 </table>

<br />