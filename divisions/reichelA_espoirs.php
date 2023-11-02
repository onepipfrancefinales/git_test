
 <div align="center"> </div>
<p>&nbsp; </p>
<?php
require ("../connection.php") ;
 ?>
<?php

 $annee = $_POST['saison'];


echo "<h2><p> <strong> Champions de France Reichel / Espoirs </strong></p></h2>";
?>
<br/>
<br/>
<br/>

<?php


$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE rang='236'and titre='champion'ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<?php echo $donnees['saison']; ?> <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
  <br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>
