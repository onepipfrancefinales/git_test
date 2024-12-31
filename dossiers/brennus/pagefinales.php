

<?php
require "../../connect/connexion1.php";
require "fonctionsBrennus.php";
champFrance($bdd);
nbreEdition($bdd);
//villes($bdd);
//stades($bdd);
//champFrance($bdd);
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
 // echo "nombre d'édition : ". $nbreEdition;echo "<br>";
 // echo "nombre de villes :".$countVilles;echo "<br>";
 // echo "nombre de stades :".$countStades;echo "<br>";
//  echo "liste des villes : ";echo "<br>";
foreach ($tabVilles as $ville) {
 // echo $ville;echo "<br>";
}


//echo "liste des stades : ";echo "<br>";
foreach ($tabStades as $stade) {
 // echo $stade;echo "<br>";
}
/*
echo "**************************";echo "<br>";
echo $ville0.$countVille0;echo "<br>";
echo $ville1.$countVille1;echo "<br>";
echo $ville2.$countVille2;echo "<br>";
echo $ville3.$countVille3;echo "<br>";
echo $ville4.$countVille4;echo "<br>";
echo $ville5.$countVille5;echo "<br>";
echo $ville6.$countVille6;echo "<br>";
echo $ville7.$countVille7;echo "<br>";
echo $ville8.$countVille8;echo "<br>";
echo $ville9.$countVille9;echo "<br>";
echo $ville10.$countVille10;echo "<br>";
echo $ville11.$countVille11;echo "<br>";
echo $ville12.$countVille12;echo "<br>";
echo $ville13.$countVille13;echo "<br>";
echo $ville14.$countVille14;echo "<br>";
echo "**************************";
*/
//  include("lesfinales.php");
  include("lesfinales_copy.php");
  ?>

  

</body>
<br>
<footer>
  <?php include("piedDePage.php"); ?>
</footer>
</footer>

</html>