<?php
$idLigue = $_GET['idLigue'];
require("../../connect/connexion1.php");
require '../../consultation/fonctions.php';
require '../../palmares/fonctionsPalmares.php';
rechercheInfosLigues($idLigue, $bdd);
?>


<html>

<head>
<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmLigue.php?idLigue=<?php echo $idLigue; ?>">
  <meta name="description"
    content="Le site non officiel du Comit� Midi Pyr�n�es de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
  <meta name="keywords"
    content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../lienNoir.css" />
  <link type="text/css" rel="stylesheet" href="palmares.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Présentation de la ligue</title>
</head>

<body>
  <table class="marginAuto width1250">
    <tr>
      <td colspan="3">
      <?php include("../../images/page_image_al.php");?>
      </td>
      </tr> 
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php"); ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
        <?php include("palmParLigue.php"); ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>

<footer>
  <?php include("../../footer.php");  ?>
</footer>
</html>