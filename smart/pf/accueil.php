<?php
if (isset ($_GET['annee'])) $saison = $_GET['annee']; else $saison=0;
if ($saison == 0)
{
require '../../saison.php';
}
?>
<html>
<head>
<meta name="description"
content="tous les divisionions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, divisionions des differents comit�s territoriaux, Tous les divisionionnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,divisionionnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Phases finales nationales</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="AA2.css">
<link type="text/css" rel="stylesheet" href="../10.css">
</head>

 
<body bgcolor="#CCCCCC">
 <table width="100%" border="1">
  <tr> 
    <td class ="h22">France Finales Rugby</td>
  </tr>
  <tr> 
    <td class ="h12">Championnats<br> de France<br><font size="4">(Phases finales)</font></td>
  </tr>
</table>
<br>
<table width="90%" border="0"  align="center">
  <tr> 
    <td colspan="2" class ="titre2">Comp&eacute;titions  Pro</td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=110&annee=<?php echo $saison;?> ">Top 14</a></td>
  </tr>
  <tr> 
   <td class="coin45"><a href="pagePhaseFinale.php?division=120&annee=<?php echo $saison;?>">Pro D2</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=130&annee=<?php echo $saison;?> ">Nationale 1</a></td>
  </tr>
   <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=135&annee=<?php echo $saison;?> ">Nationale 2</a></td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td class ="titre2">Comp&eacute;titions F&eacute;d&eacute;rales</td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=140&annee=<?php echo $saison;?>">F&eacute;d&eacute;rale 1 J Prat</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=150&annee=<?php echo $saison;?>">F&eacute;d&eacute;rale 2</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=160&annee=<?php echo $saison;?>">F&eacute;d&eacute;rale 3</a></td>
  </tr>
  <tr> 
    <td class ="titre2">Comp&eacute;titions territoriales</td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=170&annee=<?php echo $saison;?>">R&eacute;gionale 1</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=180&annee=<?php echo $saison;?>">R&eacute;gionale 2</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=190&annee=<?php echo $saison;?>">R&eacute;gionale 3</a></td>
  </tr>
  <tr> 
    <td class="titre2">Comp&eacute;titions f&eacute;minines</td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=280&annee=<?php echo $saison;?>">Elite 1</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=285&annee=<?php echo $saison;?>">Elite 2</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=290&annee=<?php echo $saison;?>">F&eacute;d&eacute;rale 1</a></td>
 </tr>
  <tr> 
    <td class ="titre2">Comp&eacute;titions &eacute;quipes II</td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=240&annee=<?php echo $saison;?>">Espoir F&eacute;d 1</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=250&annee=<?php echo $saison;?>">F&eacute;d&eacute;rale B</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=260&annee=<?php echo $saison;?>">Excellence B</a></td>
  </tr>
  <tr> 
    <td class="coin45"><a href="pagePhaseFinale.php?division=270&annee=<?php echo $saison;?>">R&eacute;serve</a></td>
  </tr>
  <tr> 
    <td height="2">&nbsp;</td>
  </tr>
</table>

 <?php
  require "../bas2.php";
  include("../../pub/pub_displayCarre.php");
  ?>
  </p>
</body>
</html>