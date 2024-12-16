<?php
$type = $_GET['type'];
require '../../consultation/fonctions.php';
require '../../connect/connexion1.php';
include '../../saison.php';
rechercheParNomDeVille($chaine, $bdd);
//echo "donnee1 : " . $nbreDeClub;
//echo "donnee2 : " . $tabClubs[0];
//echo "donnee2 : " . $tabClubs[1];
//echo "donnee2 : " . $tabClubs[2];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<title>Evolution des compétitions FFR </title>
  <meta name="description" content="Tout sur le comité territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">

  <link type="text/css" rel="stylesheet" href="../../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../resultats/resultat.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  

</head>

<body>

  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php");  ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php"); ?>
      </td>
    </tr>
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <?php include("../../01gauche.php"); ?>
      </td>
      <!-- Colonne centrale -->
      <td class="colonneCentrale">

        <?php

        include "sommaireDiv.php";

        if ($type == "seniors1")
          include "evolDivSeniors1.php";
        else if ($type == "feminines")
          include "evolDivFeminines.php";
        else if ($type == "jeunes")
          include "evolDivJeunes.php";
        else if ($type == "espoirs")
          include "evolDivEspoirs.php";
        else if ($type == "seniors2")
          include "evolDivSeniors2.php";
     
          ?>
      </td>

      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>
<footer>
  <?php include("../../footer.php"); ?>
</footer>

</html>

<style>
  .bge3640c {
    background-color: #e3640c;
  }

  .bgCCCCCC {
    background-color: #CCCCCC;
  }

  .bgFF0000 {
    background-color: #FF0000;
  }

  .bgFF6666 {
    background-color: #FF6666;
  }

  .bgFF9999 {
    background-color: #FF9999;
  }

  .bgFF9966 {
    background-color: #FF9966;
  }

  .bgFF9900 {
    background-color: #FF9900;
  }

  .bgFFFF00 {
    background-color: #FFFF66;
  }

  .bg3300FF {
    background-color: #3300FF;
  }

  .bg3399CC {
    background-color: #3399CC;
  }

  .bgCCFF00 {
    background-color: #CCFF00;
  }

  .bg00FF66 {
    background-color: #00FF66;
  }

  .bg33FF99 {
    background-color: #33FF99;
  }

  .bg66CC66 {
    background-color: #66CC66;
  }

  .bg669900 {
    background-color: #669900;
  }

  .mb-10 {
    margin-bottom: 20px
  }
</style>