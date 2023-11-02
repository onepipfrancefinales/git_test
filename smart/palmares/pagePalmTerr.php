<?php 
if (isset($_GET['bddComite'])) $bddComite = $_GET['bddComite'];
if (isset($_GET['champ'])) $champ = $_GET['champ'];
if (isset($_GET['comite'])) $comite = $_GET['comite'];


//echo "bddComite : ".$bddComite;echo "<br>";
//$comite = $bddComite;
$champ = substr($champ,0,5)*10;
//echo "champ : ".$champ;echo "<br>";
// prevoir en fonction de la longueur de la division étudieé

$rang = substr($champ,3,2)*10;
$comitePlus="(".''.$comite.''.")";

require ("../../saison.php") ;
require 'fonctions.php';
require '../../connect/connexion5.php';
infosComite($champ, $bdd);
nomDivision($rang, $bdd);

require '../../connect/connexion1.php';
infosLigue($codeLigue, $bdd);
palmaresLigue($sigleLigue, $annee, $rang, $bdd);
palmaresComite($comitePlus, $rang, $bdd);
?>

<html>
<head>
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Palmar&egrave;s Territorial</title>
<link type="text/css" rel="stylesheet" href="../10.css"> 
<?php if ($bddComite=="au" OR $bddComite=="ca" OR $bddComite=="ab")
{
	?>
	<link type="text/css" rel="stylesheet" href="paramTiroir2.css">
	<?php
}
else
{
	?>
	<link type="text/css" rel="stylesheet" href="paramTiroir.css">
	<?php
}
?>

<link rel="stylesheet" type="text/css" href="../menu_smart2.css"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body bgcolor="#CCCCCC" text="#000000">
<div class="fixed-header">
 <div class="container">

<table width="100%" border="1">
  <tr> 
    <td width= "5%"class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	<td width= "95%"class="h22" height="20"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td colspan="2" class="h12"><?php echo "Palmar&egrave;s R&eacute;gional "."<br />".$nomCompletLigue;?></td>
  </tr>
</table>
 
<?php	
//include("../pub20.php"); 
include 'choixLigueAvecDifferentsComites.php';
include("menuTerrReg.php"); ?>
  </div>
  </div>
	
	<!-- fin entete figée-------->
	
	
<div class="container">
<!-- affichage palmarès ligue -->
<?php
if ($comite=="au" OR $comite=="ly" OR $comite=="da" OR $comite=="ap" 
OR $comite=="ab" OR $comite=="ld" OR $comite=="mpy" OR $comite=="pc"
OR $comite=="be" OR $comite=="cbl" OR $comite=="ca" OR $comite=="lm" 
OR $comite=="pch" OR $comite=="pa" )
{
?>
<br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br />
<?php
}
else
{
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />	
<?php
}
?>
<div class="palm">
  <?php echo "Champions ".'Ligue '.$nomCompletLigue.' '.$division; ?>
</div>
<br />
<?php
for ($i=0; $i<$intervalleAnnee; $i++)
{?>
<table align="center">
  <tr>	
	<td class="palmNoir"><?php echo $tabSaisons[$i];?></td>
	<td class="palmNoir"><?php echo $tabChampions[$i];?></td> 
  </tr>
</table>
<?php
}?>

<!-- affichage palmarès comité -->
<p class="palm">
    <?php 
	if ($comite == "ap") $nomCompletComite ="des Alpes";
	elseif ($comite == "au") $nomCompletComite ="d'Auvergne";
	elseif ($comite == "da") $nomCompletComite ="Dr&ocirc;me Ard&egrave;che";
	elseif ($comite == "ly") $nomCompletComite ="du Lyonnais";
	
	elseif ($comite == "be") $nomCompletComite ="du B&eacute;arn";
	elseif ($comite == "cbl") $nomCompletComite ="C&ocirc;te Basque Landes";
	elseif ($comite == "ca") $nomCompletComite ="C&ocirc;te d'Argent";
	elseif ($comite == "lm") $nomCompletComite ="du Limousin";
	elseif ($comite == "pch") $nomCompletComite ="Poitou Charente";
	elseif ($comite == "pa") $nomCompletComite ="P&eacute;rigord Agenais";
	
	elseif ($comite == "ab") $nomCompletComite ="Armagnac Bigorre";
	elseif ($comite == "ld") $nomCompletComite ="Languedoc";
	elseif ($comite == "mpy") $nomCompletComite ="Midi Pyr&eacute;n&eacute;es";
	elseif ($comite == "pa") $nomCompletComite ="Pays Catalan";
	
	echo "Champions ".'comit&eacute; '.$nomCompletComite.' '.$division; ?>
</p> 
<?php
for ($i=0; $i<$intervalleAnneeComite; $i++)
{?>
<table align="center">
  <tr>	
	<td class="palmNoir"><?php echo $tabSaisonsComite[$i];?></td>
	<td class="palmNoir"><?php echo $tabChampionsComite[$i];?></td> 
  </tr>
</table>
<?php
}?>
    <br>
<?php
  //include("../pub20.php"); 
  require ("../bas2.php");
  include("../../pub/pub_displayCarre.php"); 
?>
   
  </div>
 </body>	
</html>