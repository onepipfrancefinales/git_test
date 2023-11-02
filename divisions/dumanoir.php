  <br/>
 <div align="center"> 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p>
<?php
require ("../connection.php") ;
 ?>

  <?php

 $annee = $_POST['saison'];


echo "<h1><p> <strong> Challenge Yves du Manoir <BR/></strong></p></h1>";
$reponse = mysql_query("SELECT saison, champion, comite1  FROM bdchallenges WHERE rang='380'and rang2='1'and titre='Vainqueur'ORDER BY saison"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
  </font></font>  <br/><br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>
<p>&nbsp;</p>
<p>&nbsp; </p>


<?php
require ("../connection.php") ;
 ?>


 <?php
 
 
 $annee = $_POST['saison'];



$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='380'and rang2='2'and titre='Vainqueur'ORDER BY saison"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>


