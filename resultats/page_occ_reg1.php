<?php
session_start();

include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");
require "constantes.php";
require '../Phpleague/phpab/consult/fonctions_matchs.php';
require '../Phpleague/phpab/lang/lang_fr.php';

$idLigue = 20;
$champLigue = $idLigue;
$sigleLigue = "(OCC)";
$comite = "phpab";
$AB = "AB";
$cmt = "ab";
$CMT = "AB";
$comiteNom = "Occitanie"; ?>


<!doctype html>
<html lang="fr">

<head>
<meta name="google-adsense-account" content="ca-pub-9177538664500260">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
     <link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_occ_reg1.php/" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpab/league.css" />
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>
    <?php echo $champReg; ?> Occitanie
  </title>
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
  <!--
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
  -->
</head>

<body>
  <!--
<script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>
-->
  <table class="table">
    <tr>
      <td colspan="3">
        <?php include("../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
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
        <div align="center"><br>
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class="titre">Ligue Occitanie</h2>
          <h2 class="commentaire">La ligue Occitanie est n&eacute;e de la fusion des comit&eacute;s territoriaux<br>
            du Languedoc, de l'Armagnac Bigorre, du pays Catalan et du comit&eacute;<br>
            Midi Pyr&eacute;n&eacute;es en janvier 2018.</h2>
          <br>

          <?php
          include("liensDivers.php");
          include("sommaires.php");

          echo "<hr />" . " <hr />";
          //require("comPerso.php");
          
          echo "<h5>" . $REG1 . " - " . $P1 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXHPH . "</font> <br><br></h5>";
          $champ = 200171;
          $champ2 = 200271;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          require '../pub/pub_displayH_550.php';

          echo "<h5>" . $REG1 . " - " . $P2 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex honneur/ promotion honneur) 
            </font> <br><br></h5>";
          $champ = 200172;
          $champ2 = 200272;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          echo "<h5>" . $REG1 . " - " . $P3 . "<br><font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXHPH . "</font> <br><br></h5>";
          $champ = 200173;
          $champ2 = 200273;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);


          // require 'cadrePubHorizontal600.php';
          // include("comPerso2.php"); 
          

          echo "<h5>" . $REG1 . " - " . $P4 . "<br>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXHPH . "</font> <br><br></h5>";
          $champ = 200174;
          $champ2 = 200274;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          echo "<hr />" . " <hr />";

          include("sommaires.php");
          include("liensDivers.php");

          require '../pub/pub_displayH_550.php';
          echo "<br />" . " <br />";
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