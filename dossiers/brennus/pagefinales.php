<?php
require "../../connect/connexion1.php";
require "fonctionsBrennus.php";
champFrance($bdd);
nbreEdition($bdd);
//nomStade(5, $bdd);

//echo "ee".$nomStade;
//villes($bdd);
//stades($bdd);
?>


<html>
<head>
  <title>Bouclier de Brennus : Les finales</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link href="https://fonts.cdnfonts.com/css/lucida-handwriting-std" rel="stylesheet">
                
                
</head>

<body text="#000000" class="backgroundBlack">

  <?php include("haut.php"); ?>

  <br>
  <?php

//  include("lesfinales.php");
    include("lesfinales_copy.php");
  ?>

  

</body>
<br>
<footer>
  <?php include("piedDePage.php"); ?>
</footer>
</html>