<!DOCTYPE html>
<html lang="fr">
<head>
  <title>France Finales Rugby</title>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../resultats/resultat.css">
  <link type="text/css" rel="stylesheet" href="../dossiers.css">
  <meta name="description" content=" R�sulats des comp�titions territoriales du comit� Armagnac Bigorre. Calendriers, r�sultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>
<body>
    <table class="marginAuto">
        <tr>
          <td colspan="3"><img src="../../images/stade3.jpg" width="1250" height="150"></td>
        </tr>
        <tr>
          <td colspan="3">
            <?php include("../../01ligne.php"); ?> 
          </td>
        </tr>
      
        <tr>
           <!-- Colonne de gauche -->
          <td class="colonneDroiteGauche">
            <?php include '../../01gauche.php'; ?>
          </td>
            <!-- Colonne centrale -->
          <td class="colonneCentrale">
              <?php require 'evolutionScores.php'; ?>
          </td>
           <!-- Colonne de droite -->
          <td class="colonneDroiteGauche">
            <?php include '../../00droite.php'; ?>
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