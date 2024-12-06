<?php
if (isset($_GET['pays'])) $pays  = $_GET['pays'];
echo $pays;
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <head>
    <link rel="canonical" href="https://francefinalesrugby.fr/dossiers/hymnes/pages_hymnes.php/" />
    <meta charset="utf-8" />
    <meta name="description"
      content="Tout sur le comité territorial  : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
    <meta name="keywords"
      content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
    <meta name="classification" content="Sport,Rugby">
    <meta name="resource-type" content="document">
    <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
    <meta name="author" content="Equipe Onepip">
    <meta name="robots" content="All">
    <title>Hymnes du rugby </title>
    <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
    <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
    <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
    <link type="text/css" rel="stylesheet" href="../dossiers.css">
  </head>

<body>
  <table class="marginAuto table">
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
      <td class="colonneDroiteGauche backgroundBlue" valign="top">
        <?php include("../../01gauche.php"); ?>
      </td>

      <td class="colonneCentrale backgroundWhite">
        
         <br>
         
        <p class="colorRed bold size7 styleArial">  Lecture et écoute des <br>
        chants et hymnes du rugby</p>
         
          <br>
          <hr />

          <?php include("somHymnes.php");
          echo "<hr/>";

          if ($pays == "ita")
            require 'italie.php';
          elseif ($pays == "fra")
            require 'france.php';
          elseif ($pays == "eco")
            require 'ecosse.php';
          elseif ($pays == "irl")
            require 'irlande.php';
          elseif ($pays == "ang")
            require 'angleterre.php';
          elseif ($pays == "pga")
            require 'paysDeGalles.php';

          elseif ($pays == "nze")
            require 'nouvelleZelande.php';
          elseif ($pays == "asu")
            require 'afriqueDuSud.php';
          elseif ($pays == "aus")
            require 'australie.php';
          elseif ($pays == "arg")
            require 'argentine.php';

          ?>

      </td>
     
      <td class="colonneDroiteGauche backgroundBlue" valign="top">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>
<footer>
  <?php
  include("../../comitebas.php");
  include("../../bas.php");
  ?>
</footer>
</html>