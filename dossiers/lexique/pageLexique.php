<?php
if (isset($_GET['sommaire'])) $sommaire = $_GET['sommaire'];
if (isset($_GET['lettre'])) $lettre = $_GET['lettre'];
?>
<html>

<head>
  <meta name="description" content="Tout sur le comit� territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords" content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Dictionnaire du rugby </title>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../dossiers.css">
  <link type="text/css" rel="stylesheet" href="../menu_smart2.css.css">
</head>

<body>
  <table width="1250" height="639" class="marginAuto">
    <tr >
      <td colspan="3">
          <?php include("../../images/page_image_al.php");  ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php"); ?>
      </td>
    </tr>
    <tr >
      <td class="colonneDroiteGauche">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="colonneCentrale">
        <p class="size7 bold styleArial"> Mots et beaux mots </p> <br>
        <?php require 'sommaire.php';
        if ($sommaire == 1) {
          echo "<br/>";
          include "tabDesLettres.php";
          include "appelLettre.php";
        } elseif ($sommaire == 2)
          include("phrases_celebres.htm");
        elseif ($sommaire == 3)
          include "citation.htm";
        elseif ($sommaire == 4)
          include "expr_mediatiques.htm";
        ?>
      </td>
      <td class="colonneDroiteGauche">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>
<footer>
  <?php
  include("../../comitebas.php");
  include("../../bas.php"); ?>
</footer>

</html>