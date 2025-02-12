<?php
if (isset($_GET['bddComite'])) $bddComite = $_GET['bddComite'];
if (isset($_GET['champ'])) $champ = $_GET['champ'];
if (isset($_GET['comite'])) $comite = $_GET['comite'];


//echo "bddComite : ".$bddComite;echo "<br>";
//$comite = $bddComite;
$champ = substr($champ, 0, 5) * 10;
//echo "champ : ".$champ;echo "<br>";
// prevoir en fonction de la longueur de la division �tudie�
/*
if (substr($champ,3,3) == 170)
$division = "Honneur";
else if (substr($champ,3,3) == 180)
$division = "Promotion honneur";
else if (substr($champ,3,3)==190)
$division = "1re série";
else if (substr($champ,3,3)==200)
$division = "2me série";
else if (substr($champ,3,3)==210)
$division = "3me série";
else if (substr($champ,3,3)==220)
$division = "4me série";
*/




$rang = substr($champ, 3, 2) * 10;
//echo "rang".$rang;
$comitePlus = "(" . '' . $comite . '' . ")";

require("../../saison.php");
require 'fonctions.php';
//require '../../connect/connexion5.php';



require '../../connect/connexion1.php';
infosComite($champ, $bdd);
nomDivision($rang, $bdd);
infosLigue($codeLigue, $bdd);
palmaresLigue($sigleLigue, $annee, $rang, $bdd);
palmaresLigue2018_2022($sigleLigue, $annee, $rang, $bdd);
palmaresComite($comitePlus, $rang, $bdd);
?>

<html>

<head>
  <meta name="description"
    content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
  <meta name="keywords"
    content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title><?php echo "Palmarès Régionaux " . "-" . "Ligue " . $nomCompletLigue; ?> </title>
  <link type="text/css" rel="stylesheet" href="../10.css">
  <?php if ($bddComite == "au" or $bddComite == "ca" or $bddComite == "ab") {
  ?>
    <link type="text/css" rel="stylesheet" href="paramTiroir2.css">
  <?php
  } else {
  ?>
    <link type="text/css" rel="stylesheet" href="paramTiroir.css">
  <?php
  }
  ?>

  <link rel="stylesheet" type="text/css" href="../menu_smart2.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body text="#000000">
  <div class="fixed-header">
    <div class="container">

      <table width="100%" border="1">
        <tr>
          <td width="5%" class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
          <td width="95%" class="h22" height="20"> France Finales Rugby </td>
        </tr>
        <tr>
          <td colspan="2" class="h12"><?php echo "Palmarès Régionaux " . "<br />" . "Ligue " . $nomCompletLigue; ?></td>
        </tr>
      </table>

      <?php
      //include("../pub20.php"); 
      
      include 'choixLigueAvecDifferentsComites.php';
      include 'choixSeniors.php';
      include 'menuTerrReg.php'; ?>
    </div>
  </div>

  <!-- fin entete figée-------->


  <div class="container">


    <!-- affichage palmarès ligue -->
    <?php
    if (
      $comite == "au" or $comite == "ly"  or $comite == "da" or $comite == "ap"
      or $comite == "ab"  or $comite == "ld"  or $comite == "mpy" or $comite == "pc"
      or $comite == "be"  or $comite == "cbl" or $comite == "ca"  or $comite == "lm"
      or $comite == "pch" or $comite == "pa"
    ) {
    ?>
      <br /><br /><br /><br /><br /><br /><br /><br />
      <br /><br /><br /><br /><br /><br /><br /><br />
    <?php
    } else {
    ?>
   <br />    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <?php
    }
    ?>


    <!-- affichage titre palmarès (après-2022) -->
    <?php
    if (substr($champ, 3, 3) < 200) {
    ?>
      <br /><br /><br />
      <div class="palm">
     
        <?php echo "Champions " . 'Ligue ' . $nomCompletLigue . ' ' . $division; ?>
      </div>

    <?php
    }
    ?>
    <br />
    <?php
    for ($i = 0; $i < $intervalleAnnee; $i++) {
    ?>
      <table align="center">
        <tr>
          <td class="palmNoir"><?php echo $tabSaisons[$i]; ?></td>
          <td class="palmNoir"><?php echo $tabChampions[$i]; ?></td>
        </tr>
      </table>
    <?php
    }
    ?>

    <br />

    <!-- affichage titre palmarès ligue (2018-2022) -->
    <div class="palm">



      <?php

      if (substr($champ, 3, 3) == 170)
        $division = "Honneur";
      else if (substr($champ, 3, 3) == 180)
        $division = "Promotion honneur";
      else if (substr($champ, 3, 3) == 190)
        $division = "1re série";
      else if (substr($champ, 3, 3) == 200)
        $division = "2me série";
      else if (substr($champ, 3, 3) == 210)
        $division = "3me série";
      else if (substr($champ, 3, 3) == 220)
        $division = "4me série";
      ?>
      <span class="colorBlack size3">2023 - Refonte des divisions : Passage de 6 à 3 niveaux de compétitions.</span>
    <br><br>
      <?php
      echo "Champions " . 'Ligue ' . $nomCompletLigue . ' ' . $division; ?>
    </div>
    <br />
    <?php
    for ($i = 0; $i < 4; $i++) {
    ?>
      <table align="center">
        <tr>
          <td class="palmNoir"><?php echo $tabSaisons18_22[$i]; ?></td>
          <td class="palmNoir"><?php echo $tabChampions18_22[$i]; ?></td>
        </tr>
      </table>
    <?php
    }
    ?>

    <!-- affichage titre palmarès comités -->
    <p class="palm">
      <?php
      if (substr($champ, 3, 3) == 170)
        $division = "Honneur";
      else if (substr($champ, 3, 3) == 180)
        $division = "Promotion honneur";
      else if (substr($champ, 3, 3) == 190)
        $division = "1re série";
      else if (substr($champ, 3, 3) == 200)
        $division = "2me série";
      else if (substr($champ, 3, 3) == 210)
        $division = "3me série";
      else if (substr($champ, 3, 3) == 220)
        $division = "4me série";

      if ($comite == "ap") $nomCompletComite = "des Alpes";
      elseif ($comite == "au") $nomCompletComite = "d'Auvergne";
      elseif ($comite == "da") $nomCompletComite = "Drôme Ardèche";
      elseif ($comite == "ly") $nomCompletComite = "du Lyonnais";

      elseif ($comite == "be") $nomCompletComite = "du Béarn";
      elseif ($comite == "cbl") $nomCompletComite = "Côte Basque Landes";
      elseif ($comite == "ca") $nomCompletComite = "Côte d'Argent";
      elseif ($comite == "lm") $nomCompletComite = "du Limousin";
      elseif ($comite == "pch") $nomCompletComite = "Poitou Charente";
      elseif ($comite == "pa") $nomCompletComite = "Périgord Agenais";

      elseif ($comite == "ab") $nomCompletComite = "Armagnac Bigorre";
      elseif ($comite == "ld") $nomCompletComite = "Languedoc";
      elseif ($comite == "mpy") $nomCompletComite = "Midi Pyrénées";
      elseif ($comite == "pa") $nomCompletComite = "Pays Catalan";
      ?>
<span class="colorBlack size3">2019 - Reformes Administratives : Suppression des 26 comités territoriaux remplacés par 13 ligues calquées sur les 13 regions administratives françaises.</span>
<br><br>
     <?php 
      echo "Champions " . 'comité ' . $nomCompletComite . ' ' . $division; ?>
         
    </p>
    <?php
    for ($i = 0; $i < $intervalleAnneeComite; $i++) { ?>
      <table align="center">
        <tr>
          <td class="palmNoir"><?php echo $tabSaisonsComite[$i]; ?></td>
          <td class="palmNoir"><?php echo $tabChampionsComite[$i]; ?></td>
        </tr>
      </table>
    <?php
    } ?>
    <br>
    <?php require("../smartFooter.php"); ?>

  </div>
</body>

</html>