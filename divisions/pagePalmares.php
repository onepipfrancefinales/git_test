<?php
$division = $_GET['division'];
require '../fonctionsPalmares.php';
?>
<!DOCTYPE html>

<head>
  <meta name="description" content="">
  <meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Champions de FRANCE </title>
  <link type="text/css" rel="stylesheet" href="palmares.css" />
  <link type="text/css" rel="stylesheet" href="../ligne1.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
  <table class="marginAuto">
    <tr bordercolor="#FFFFFF">
      <td colspan="3">
        <?php include("../page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php");  ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
        <?php
        if ($division == 110)
          require("top14.php");
        else   require("palmares.php"); ?>
      </td>
      <td class="colonne">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>

<footer>
  <div class="marginAuto">
    <?php include("../../comitebas.php");   ?>
    <br>
    <?php include("../../bas.php");  ?>
  </div>
</footer>

</html>