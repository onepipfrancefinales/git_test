<?php if (isset($_GET['chanson'])) $chanson = $_GET['chanson'];?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/dossiers/lexique/page_chansons.php/">
  <meta charset="utf-8">
  <meta name="description"
    content="Tout sur le comit� territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); 
    les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords"
    content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Dictionnaire du rugby </title>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../formulaire.css">
  <link type="text/css" rel="stylesheet" href="menu_smart2.css">
</head>

<body>

  <table class="marginAuto width1250">
    <tr>
      <td colspan="3">
        <?php include "../../images/page_image_al.php"; ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include "../../01ligne.php"; ?>
      </td>
    </tr>
    <tr>
      <td class="colonneDroiteGauche">
        <?php include "../../01gauche.php";  ?>
      </td>
      <td class="colonneCentrale">
        <?php
        echo "<br>";
        include "introChansons.htm";
        echo "<br>";
        echo "<hr>";
        echo "<hr>";
        echo "<br>";

        switch ($chanson) {
          case "51j":
            require 'titres/51JeTaime.htm';
            break;
          case "bal":
            require 'titres/baliBalo.htm';
            break;
          case "cdl":
            require "titres/chevaliersDeLaTableRonde.htm";
            break;
          case "fan":
            require "titres/fanchon.htm";
            break;
          case "ieu":
            require "titres/ilEstUnCoinDeFrance.htm";
            break;
          case "ldd":
             require "titres/laDigueDuCul.htm";
            break;
          case "lar":
            require "titres/larirette.htm";
            break;
          case "lsa":
            require "titres/laSalope.htm";
            break;
            //------------------------------------------------------
          case "fdm":
            require "titres/fetesDeMauleon.htm";
            break;
          case "lco":
            require "titres/copainsDabord.htm";
            break;
          case "lch":
            require "titres/leChasseur.htm";
            break;
          case "iws":
            require "titres/iWillSurvive.htm";
            break;
          case "lld":
            require "titres/lesLacsDuConnemara.htm";
            break;
        }
        ?>
      </td>
      <td class="colonneDroiteGauche">
        <?php include "../../00droite.php"; ?>
      </td>
    </tr>

  </table>

</body>
<footer>
  <?php
  include "../../comitebas.php";
  include "../../bas.php"; ?>
</footer>

</html>