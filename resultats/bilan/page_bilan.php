<?php
$equipe =  $_GET['id_equipe'];
$id_equipe = $equipe;
$phpComite =  $_GET['comite'];
$comite =  $_GET['comite'];
$champ =  $_GET['champ'];
$id_champ =  $_GET['champ'];
//$fonctions_matchs = "../../Phpleague/".$comite."/consult/fonctions_matchs.php";
$lang_fr = "../../Phpleague/" . $comite . "/lang/lang_fr.php";
//require $fonctions_matchs;
//require $lang_fr;
require "../../Phpleague/" . $comite . "/consult/fonctions_matchs.php";
require "../../Phpleague/" . $comite . "/lang/lang_fr.php";
require("../../saison.php");
require("../fonctions.php");
require("../../connect/connexion1.php");


nomClub($equipe, $bdd);
nomLigue($equipe, $bdd);
affichage5Saisons($finSaison, $equipe, $champ, $phpComite, $bdd);

//connection à la base de données
require("../../connect/connexion6.php");

nomDivision($phpComite, $champ, $bdd);
//meilleureAttaque($phpComite, $champ, $bdd);
//meilleureDefense($phpComite, $champ, $bdd);
//nombreEquipe($phpComite, $champ, $bdd);
//traitementDesScores($equipe, $phpComite, $bdd);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/bilan/page_bilan.php/" />
  <meta charset="utf-8">

  <link type="text/css" rel="stylesheet" href="../../Phpleague/<?php echo $comite; ?>/league.css">
  <link type="text/css" rel="stylesheet" href="../../Phpleague/<?php echo $comite; ?>/leaguePerso.css">
  <link type="text/css" rel="stylesheet" href="bilan.css">
  <!-- <link type="text/css" rel="stylesheet" href="../resultats.css">-->
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <title>Statistiques de <?php echo $nom; ?></title>
  <meta name="description" content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>

<body>
  <table class="width1250 marginAuto">
    <tr>
      <td colspan="3"> <?php include("../../images/page_image_al.php");  ?></td>
    </tr>
    <tr>
      <td colspan="3">
        <div><?php include("../../01ligne.php"); ?> </div>
      </td>
    </tr>
    <tr>
      <td colspan="3" height="74">
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
        <?php include("bilan.php"); ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
    <tr>
      <th colspan="3" class="colorWhite" height="77" valign="top">
        <table class="width100PC borderWidth1">
          <tr>
            <td><?php include("../../comitebas.php"); ?> </td>
          </tr>
          <tr>
            <td><?php include("../../pub/pub1.php"); ?> </td>
          </tr>
          <tr>
            <td> <?php include("../../bas.php"); ?> </td>
          </tr>
        </table>
      </th>
    </tr>
  </table>
</body>
<!--   
	<footer> 
    <div id="9129-5">
	 <script src="//ads.themoneytizer.com/s/gen.js?type=5"></script>
	 <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5">	</script>
    </div>
   </footer>
   -->
</html>