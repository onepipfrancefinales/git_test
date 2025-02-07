<?php
include("../../saison.php");
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
if (isset($_GET['chanson'])) $chanson = $_GET['chanson']; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/dossiers/lexique/page_chansons.php/">
  <meta charset="utf-8">
  <meta name="description"
    content="Tout sur le comité territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); 
    les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords"
    content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Chansons paillardes </title>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../dossiers.css">
  <link type="text/css" rel="stylesheet" href="../../smart/10.css">
</head>

<body class="backgroundWhite">";
  <table class="width100PC">";
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>";
      <td colspan="3">
        <?php include("../../01ligne.php"); ?>
      </td>
    </tr>
    <tr>
      <td class="colonneDroiteGauche backgroundBlue" valign="top">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="colonneCentrale backgroundWhite">
        <?php require 'chansons.php' ?>
      </td>
      <td class="colonneDroiteGauche backgroundBlue" valign="top">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>
<?php require "../footer.php"; ?>

</html>