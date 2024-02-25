<?php
session_start();
include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");
require 'constantes.php';
require '../Phpleague/phpau/consult/fonctions_matchs.php';
require '../Phpleague/phpau/lang/lang_fr.php';
$comite = "phpau";
$CMT = "AU";
$cmt = "au";
$cmt2 = "ara";
$comiteNom = "du lyonnais";
$champLigue = 10;
$sigleLigue = "(ARA)";
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_ara_reg1.php/" />
<meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpau/league.css" />
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg; ?> Auvergne Rh&ocirc;ne ALpes  </title>
  <meta name="description"
    content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <script language="JavaScript">
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>
  
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
  
</head>

<body>
  <table class="table">
    <tr>
      <td colspan="3"> <img src="../images/banniere_haut/(<?php echo $CMT; ?>).jpg" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3">
        <div>
          <?php include("../01ligne.php"); ?>
        </div>
      </td>
    </tr>
    <tr bgcolor="#ffffff">
      <td colspan="3">
      <td>
        <?php include("../pub/pub_displayHorizontal.php"); ?>
      </td>
    </tr>
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <p>
          <?php include("../01gauche.php"); ?>
        </p>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale">
        <div align="center"> <br>
          <h1>Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class="titre">Ligue Auvergne Rh&ocirc;ne Alpes</h2>
          <h2 class="commentaire">La ligue Auvergne Rh&ocirc;ne Alpes est n&eacute;e de la fusion des comit&eacute;s
            territoriaux<br>
            de l'Auvergne, du Lyonnais, des Alpes et du comit&eacute;<br>
            Dr&ocirc;me Ard&egrave;che en janvier 2018.</h2>
          <?php
          include("liensDivers.php");
          include("sommaires.php");

          echo "<hr />" . " <hr />";
          //require("comPerso.php"); 
          
          echo "<h5><a name=\"P\"></a>" . $REG1 . " - " . $P1 . "<br></h5>";
          $champ = 100171;
          $champ2 = 100271;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          require '../pub/pub_displayH_550.php';

          echo "<h5>" . $REG1 . ' -' . $P2 . "<br></h5>";
          $champ = 100172;
          $champ2 = 100272;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          echo "<h5>" . $REG1 . ' -' . $P3 . "<br></h5>";
          $champ = 100173;
          $champ2 = 100273;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          require '../pub/pub_displayH_550.php';

          echo "<h5>" . $REG1 . ' -' . $P4 . "<br></h5>";
          $champ = 100174;
          $champ2 = 100274;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);


          echo "<hr />" . " <hr />";

          include("sommaires.php");
          include("liensDivers.php");


          // require '../pub/pub_displayH_550.php';
          ?>

        </div>
      </td>

      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
        <p>
          <?php include("../00droite.php"); ?>
        </p>
      </td>
    </tr>
  </table>

  <?php include("piedDePage.php"); ?>

  <footer>

  </footer>
</body>

</html>