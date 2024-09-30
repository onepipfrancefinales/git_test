<?php $annee = $_GET['variable_1'];
require '../fonctionsPalmares.php';

?>

<!DOCTYPE html>
<html lang="fr">
<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagefinaleannee.php?variable_1=<?php echo $annee; ?>">
<meta name="description" content="Le site non officiel du Comité Midi Pyrénées de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<link type="text/css" rel="stylesheet" href="palmares.css">
<link type="text/css" rel="stylesheet" href="../../ligne1.css">
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Tous les Champions de FRANCE</title>

<body>

  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php");  ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php");    ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php");    ?>
      </td>
      <td class="centreDePage">
        <?php include("finaleannee.php");   ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php");  ?>
      </td>
    </tr>
  </table>
  <footer>
    <div class="marginAuto">
          <?php include("../../comitebas.php");   ?>
    <br>
          <?php include("../../bas.php");  ?>
    </div>
  </footer>
</body>

</html>