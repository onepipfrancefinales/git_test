<?php
if (isset($_GET['page'])) $page = $_GET['page'];else $page= "accueil";
echo "page : ".$page;
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
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Bouclier de Brennus : Les finales</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="brennus.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link href="https://fonts.cdnfonts.com/css/lucida-handwriting-std" rel="stylesheet">


</head>

<body text="#000000" class="backgroundBlack" width="1000">
  <table width="1000" class="borderWidth1 marginAuto borderColorBlack">
    <tr>
      <td bgcolor="#FFFFFF">
        <?php include "haut.php"; ?>

        <br>
        <?php
        if ($page == "accueil")
          include 'accueil.php';
          elseif ($page == "brennus")
          include 'lebouclier.php';
        elseif ($page == "finales")
          include 'lesfinales.php';
          elseif ($page == "premieres")
          include '1fois.php';
        elseif ($page == "records")
          include 'pagerecords.php';
        elseif ($page == "stades")
          include 'stades_copy.php';
        elseif ($page == "villes")
          include 'villes_copy.php';
        ?>
      </td>

    </tr>
  </table>
</body>
<br>
<footer>
  <?php include "piedDePage.php"; ?>
</footer>

</html>