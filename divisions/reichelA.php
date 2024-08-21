
<body link="#000000" vlink="#000000" alink="#000000" text="#000000">
<div align="center"> </div>
<p>&nbsp; </p>
<?php
require ("../connection.php") ;
 ?>
<?php

 $annee = $_POST['saison'];


echo "<h1><p> <strong> Champions de France <br>
Reichel A </strong></p></h1>";
?>
<p>C<font face="Arial, Helvetica, sans-serif" size="3">r�� en 1931, r�serv� aujourd'hui 
  aux joueurs de moins de 21 ans. Il regroupe les 30 clubs pros, plus au maximum 
  6 autres clubs sur d�cision d�une commission de la FFR. Phase de poules, puis 
  16 clubs qualifi�s pour les huiti�mes de finale. </font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3"> A partir de la saison 2014-2015, 
  cette comp&eacute;tition fusionne avec la competition Espoirs, sous le nom de 
  <b>REICHEL/ESPOIRS</b> r&eacute;serv&eacute;e aux licenci&eacute;s de moins 
  22 ans (18, 19, 20 et 21 ans). <a href="pagereichelA_espoirs.php" target="_top"><font color="#000000">Palmarès 
  de cette nouvelle comp&eacute;tition.</font></a><br/>
  <br/>
  </font> <br/>
  <?php


$reponse = mysql_query("SELECT * FROM bdjeunes WHERE rang='310'and titre='champion'ORDER BY saison DESC"); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php
    // On inclut le haut de la page
    include("../pub_carre.php");
    ?>
</p>
