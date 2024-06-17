<?php
session_start();
//$message = "Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 6me journ&eacute;e du 01 Novembre";
//require '../connect/connexion2.php';

include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
include("fonctions.php");
require 'constantes.php';
require '../Phpleague/phpca/consult/fonctions_matchs.php';
require '../Phpleague/phpca/lang/lang_fr.php';
$champLigue = 19;
$sigleLigue = "(NAQ)";
$bddComite = "ca";
$comite = "phpca";
$CMT = "CA";
$cmt = "ca";
$comiteNom = "Cote d'Argentaaaaa"; ?>

<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/page_naq_reg1.php/" />
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpca/league.css" />
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg; ?> Nouvelle Aquitaine</title>
  <meta name="description" content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <script>
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>

</head>

<body>

  <table class="table">

    <tr>
      <td colspan="3">
        <img src="../images/banniere_haut/(<?php echo $CMT; ?>).jpg" height="150" width="1250">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">

      </td>
    </tr>
    <tr valign="middle">
      <td class="colonneDroiteGauche">
        <p><?php include("../01gauche.php"); ?> </p>
      </td>
      <td class="colonneCentrale center">
        <br>
        <h1> Compétitions Régionales</h1>
        <h2 class="titre"><?php echo $ligueNAQ; ?></h2>
        <h2 class="commentaire">La ligue Nouvelle Aquitaine est née de la fusion des comité;s territoriaux<br>
          du Béarn, de Basque Landes, de Côte d'Argent, du Limousin, <br>
          du périgord Agénais et du comité; Poitou Charente en 2018.</h2>
        <br>
        <?php
        include 'liensDivers.php';
        include 'sommaires.php';

        echo " <hr>" . "<hr>";

      
        foreach ($tableauNAQ1 as $champ) {
          echo "  <br>" . "<br>";
          echo "<h5>" .  $REG1 . " - " . "Poule " . substr($champ, -1);
          echo "<br>"; ?>

          <span class="size2">(Ex honneur/ promotion honneur) </span>
        <?php
          echo "</h5>";
          echo  "<br>" . "<br>" . "<br>";

          $champ2 = $champ + 100;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);
          echo "<br>" . "<br>";
        };
    
   
        echo "<hr>" . "<hr>";

        include 'sommaires.php';
        include 'liensDivers.php';
        //	require '../pub/pub_displayH_550.php';
        ?>
        <br>
        </p>

      </td>
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>

  </table>

  <footer>
    <footer>
      <?php include("../footer.php"); ?>
    </footer>
</body>

</html>