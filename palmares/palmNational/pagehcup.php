<!DOCTYPE html>
<html lang="fr">
<head>
  <meta name="description" content="Présentation de la compétititon Juniors Danet(-19ans) et de tous les champions de France Danet; Palmar�s complet Juniors Danet.">
  <meta name="keywords" content="Juniors Danat,Juniors Danet,Danet,Championnat de France Juniors, Juniors, -de 19 ans,Champions de France de -19 ans">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Coupe d Europe</title>
  <link type="text/css" rel="stylesheet" href="palmares.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
</head>

<body>
  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php");   ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php");  ?>
      </td>
    </tr>

    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php");  ?>
      </td>

      <td class="centreDePage">
        <p class="bold size7">  Compétitions Européennes</p>
        <h1 class="bold">  Champions Cup </h1>
    
        <img src="../images/champion_cup.jpg" alt="champion cup" width="178" height="228">

        <br><br>


        <?php
        require '../../connect/connexion1.php';
        require '../fonctionsPalmares.php';
        championsEurope(11,$bdd);
        
         ?>


        <h1 class="bold">  H Cup </h1>";
       
 <br>
        <img src="../images/hcup.jpg" alt="H cup" width="180" height="231">
        <?php championsEurope(10,$bdd);  ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php");  ?>
      </td>
    </tr>
  </table>
  
</body>

<footer>
<table class="marginAuto backgroundBlanc">
    <tr>
      <td>
        <?php include("../../comitebas.php"); ?>
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