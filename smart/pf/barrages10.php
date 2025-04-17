<?php

trenteDeuxieme2019(7160, 2024, $bdd);


if ($division == 160 and $annee ==2024 )
{	
$texteDivision = "Rencontre chez le premier cité";


$clubA6401="Decazeville (OCC) ";				$A6401=16;
$clubA6402="Aix les bains (ARA)";				$A6402=6;

$clubA6403="Cavaillon (PCA) ";					$A6403=64;
$clubA6404="Mourillon (PCA) ";					$A6404=11;

$clubA6405="Auxerre (BFC) ";					$A6405=57;
$clubA6406="Valreas (PCA) ";					$A6406=7;

$clubA6407="Les Sables d Olonne (PDL) ";		$A6407=26;
$clubA6408="Chinon (CVL)";						$A6408=15;

$clubA6409="Houilles (IDF) ";					$A6409=13;
$clubA6410="Leognan (NAQ) ";					$A6410=14;

$clubA6411="Bardos (NAQ) ";						$A6411=17;
$clubA6412=" Caussade (OCC)";					$A6412=7;

$clubA6413="Saint Marcel Isle d Abeau (ARA) ";	$A6413=10;
$clubA6414="Rivesaltes (OCC) ";					$A6414=18;

$clubA6415="Illkirch Graffenstaden (GES)";		$A6415=16;
$clubA6416="Roubaix (HDF)";						$A6416=18;

$clubA6417="Villeneuve de Marsan (NAQ) ";		$A6417=34;
$clubA6418="L Isle en Dodon (OCC)";				$A6418=30;

$clubA6419="Canton Alban (OCC)";				$A6419=28;
$clubA6420="Bellegarde sur Valserine (ARA) ";	$A6420=13;

}
elseif ($division == 260 and $annee == 2024)
{
  /*
$texteDivision = "Rencontre sur terrain neutre";

$clubA6401="Aix Université (PCA) ";				$A6401=38;
$clubA6402="Caen (NOR)";						$A6402=14;

$clubA6403="Auxerre (BFC) ";					$A6403=36;
$clubA6404="Cavaillon (PCA) ";					$A6404=23;

$clubA6405="Saverdun (OCC) ";					$A6405=36;
$clubA6406="Chagny (BFC) ";						$A6406=23;

$clubA6407="Cergy Pontoise (IDF) ";				$A6407=24;
$clubA6408="Villeneuve de Marsan (NAQ)";		$A6408=16;

$clubA6409="Lons le Saunier (BFC)";				$A6409=34;
$clubA6410="Valreas (NAQ) ";					$A6410=17;

$clubA6411="Rion des Landes (NAQ) ";			$A6411=22;
$clubA6412=" Andrezieux Boutheon (ARA)";		$A6412=3;

$clubA6413="L Isle en Dodon (OCC) ";			$A6413=18;
$clubA6414="Bazas (NAQ) ";						$A6414=21;

$clubA6415="Figeac (NAQ)";						$A6415=19;
$clubA6416="Epernay (IDF)";						$A6416=13;

$clubA6417="Gradignan (NAQ) ";					$A6417=13;
$clubA6418="Servian Boujan (OCC)";				$A6418=15;

$clubA6419="Saint Malo (BRE)";					$A6419=18;
$clubA6420="Angers (PDL) ";						$A6420=33;
*/
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
    <td class="equipe4"><?php echo $clubA6401;?></td>
    <td class="coin4GA"><?php echo $A6401;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA6402;?></td>
    <td class="coin4GA"><?php echo $A6402;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6403;?></td>
    <td class="coin5GA"><?php echo $A6403;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6404;?></td>
    <td class="coin5GA"><?php echo $A6404;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA6405;?></td>
    <td class="coin4GA"><?php echo $A6405;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA6406;?></td>
    <td class="coin4GA"><?php echo $A6406;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6407;?></td>
    <td class="coin5GA"><?php echo $A6407;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6408;?></td>
    <td class="coin5GA"><?php echo $A6408;?></td>
  </tr>
 
  <tr> 
    <td class="equipe4"><?php echo $clubA6409;?></td>
    <td class="coin4GA"><?php echo $A6409;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA6410;?></td>
    <td class="coin4GA"><?php echo $A6410;?></td>
  </tr>
  </table>
  

  
    <table width="90%" border="0" align="center">
   <tr> 
    <td class="equipe5"><?php echo $clubA6411;?></td>
    <td class="coin5GA"><?php echo $A6411;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6412;?> </td>
    <td class="coin5GA"><?php echo $A6412;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA6413;?></td>
    <td class="coin4GA"><?php echo $A6413;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA6414;?></td>
    <td class="coin4GA"><?php echo $A6414;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6415;?></td>
    <td class="coin5GA"><?php echo $A6415;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6416;?></td>
    <td class="coin5GA"><?php echo $A6416;?></td>
  </tr>

  <tr> 
    <td class="equipe4"><?php echo $clubA6417;?></td>
    <td class="coin4GA"><?php echo $A6417;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA6418;?></td>
    <td class="coin4GA"><?php echo $A6418;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6419;?></td>
    <td class="coin5GA"><?php echo $A6419;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA6420;?></td>
    <td class="coin5GA"><?php echo $A6420;?></td>
  </tr>
  <tr> 
 </table>

<br />