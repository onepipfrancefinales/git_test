<?php
if (isset($_GET['page'])) $page = $_GET['page'];else $page = "accueil";
if (isset($_GET['mode'])) $mode = $_GET['mode'];
echo "page : " . $page;
echo "mode : " . $mode;
require "../../connect/connexion1.php";
require "fonctionsBrennus.php";
champFrance($bdd);
nbreEdition($bdd);
villes($bdd);
stades($bdd);
//nomStade(5, $bdd);

//echo "ee".$nomStade;
//villes($bdd);
//stades($bdd);

if ($page == "accueil") {
  $title = "Accueil";
} elseif ($page == "brennus") {
  $title = "Le bouclier";
} elseif ($page == "finales") {
  $title = "Les finales";
} elseif ($page == "premieres") {
  $title = "Les premières";
} elseif ($page == "records") {
  $title = "Les records";
} elseif ($page == "stades") {
  $title = "Les stades";
} elseif ($page == "villes") {
  $title = "Les villes";
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Bouclier de Brennus : <?php echo $title; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="brennus.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link href="https://fonts.cdnfonts.com/css/lucida-handwriting-std" rel="stylesheet">


</head>

<body text="#000000" class="backgroundBlack" width="1000">
  <table class="borderWidth1 marginAuto borderColorBlack">
    <tr>
      <td class="backgroundWhite">
        <?php include "haut.php"; ?>
        <br>
        <?php
        if ($page == "accueil") {
          include 'accueil.php';
        } elseif ($page == "brennus") {
          include 'lebouclier.php';
        } elseif ($page == "finales") {
          include 'lesfinales_copy.php';
        } elseif ($page == "premieres") {
          include '1fois.php';
        } elseif ($page == "records") {
          include 'records.php';
        } elseif ($page == "stades") {
          include 'stades_copy.php';
        } elseif ($page == "villes") {
          include 'villes_copy.php';
        }
        ?>
      </td>

    </tr>
  </table>
</body>
<br>
      </div>
  <?php include "piedDePage.php"; ?>
</html>