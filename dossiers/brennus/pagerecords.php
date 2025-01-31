<?php $page = $_GET['page']; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Bouclier de Brennus : Les records</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link rel="stylesheet" type="text/css" href="brennus.css">
</head>

<body class="backgroundBlack" text="#000000">

  <table width="1000" class="borderWidth1 marginAuto borderColorBlack">
    <tr bgcolor="#FFFFFF">
      <td colspan="2"><?php include "haut.php"; ?> </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="2" valign="top" height="24">

        <?php include("hautRecords.php");            ?>

      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="200" valign="top" height="81">
       
            <?php include("gauche.php"); ?>
         
     
      </td>
      <td width="800" height="81" valign="top">

        <?php
        //echo "nombre de finales :";
        //echo "nombre de champions :";
        //echo "nombre d'édition :";

        require '../../connect/connexion1.php';
        require 'fonctions.php';

        if ($page == "nbreEditions")
          require 'nbre_editions.php';
        elseif ($page == "champions")
          require 'champions.php';
        elseif ($page == "participations")
          require 'participations.php';
        elseif ($page == "queFinaliste")
          require 'queFinaliste.php';
        elseif ($page == "series")
          require 'series.php';
        elseif ($page == "joueurs_titres")
          require 'joueurs_titres.php';
        elseif ($page == "nbre_titres")
          require 'nbre_titres.php';
        elseif ($page == "jamaisGagne")
          require 'jamaisGagne.php';

        elseif ($page == "entraineurs")
          require 'entraineurs.php';
        elseif ($page == "capitaines")
          require 'capitaines.php';

        ?>
       
        
      </td>
    </tr>
  </table>
</body>
<footer>
  <?php include "piedDePage.php"; ?>
</footer>
</html>