<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
  <meta name="description" content="Pr�sentation de la comp�tititon Juniors Danet(-19ans) et de tous les champions de France Danet; Palmar�s complet Juniors Danet.">
  <meta name="keywords" content="Juniors Danat,Juniors Danet,Danet,Championnat de France Juniors, Juniors, -de 19 ans,Champions de France de -19 ans">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Challenge Européen</title>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="palmares.css" />

<body>

  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php");  ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
        <p class="bold size7"> Compétitions Européennes </p>
        <h1 class="bold"> Challenge Européen</h1>
        <h1 class="bold"> Challenge Cup </h1>

        <p><img src="../images/challenge_cup.jpg" width="178" height="228"></p>

        <?php
        require("../../connect/connexion1.php");
        require '../fonctionsPalmares.php';
        championsEurope(21, $bdd);

        ?>

        <h1 class="bold"> Amlin Cup <BR /></h1>
        <p> <img src="../images/amlincup.jpg" width="179" height="248"><br />
          <?php  championsEurope(20, $bdd); ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php"); ?>
      </td>
  </table>
</body>

<footer>
  <table class="marginAuto backgroundBlanc">
    <tr>
      <td>
        <?php include("../../comitebas.php");  ?>
      </td>
    </tr>
    <tr>
      <td>
        <?php include("../../bas.php");  ?>
      </td>
    </tr>
  </table>
</footer>

</html>