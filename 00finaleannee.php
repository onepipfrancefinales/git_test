<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>

  
<p>&nbsp;</p>
<div align="center"></div>
<p> 
 <input type="hidden" name="saison" value="2000" /> 
 

 <?php
$annee = $_POST['saison'];

echo "$annee";?>    
        
<?php $annee=$_GET['variable_1'];?>

<?php
require ("connection.php") ;
 ?>


 <?php

 		
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE saison='$annee' and titre='champion'and championnat='de France'and rang<230 order by rang"); // Requête SQL
echo "<h2><p> <strong> Finales du Championnat de France $annee</strong></p></h2>";



 ?>
<?php 

 echo "<p> <strong> Equipes Séniors<BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>

<div align="left"><strong>
   <?php echo $donnees['division']; ?>
</strong>
  : 
  <?php echo $donnees['champion'] ; ?>
  <?php echo $donnees['comite1']; ?> -
  <?php echo $donnees['vice_champion']; ?>  <?php echo $donnees['comite2']; ?>  <?php echo $donnees['score1']; ?> - <?php echo $donnees['score2']; ?>
  
  <br/>
  </div>
  
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>

<?php
require ("connection.php") ;
 ?>



<?php

$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<280 and rang>230 order by rang"); // Requête SQL

 echo "<p> <strong> Equipes Réserve <BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<div align="left"><strong>
<?php echo $donnees['division']; ?>
</strong>
: 
<?php echo $donnees['champion']; ?> <?php echo $donnees['comite1']; ?> - <?php echo $donnees['vice_champion']; ?> <?php echo $donnees['comite2']; ?> <?php echo $donnees['score1']; ?> - <?php echo $donnees['score2']; ?>
<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>

<?php
require ("connection.php") ;
 ?>




<?php

 


$reponse = mysql_query("SELECT * FROM bdfem WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<310 and rang>270 order by rang"); // Requête SQL

 echo "<p><center> <strong> Equipes Féminines <BR/></center></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<div align="left"><strong>
<?php echo $donnees['division']; ?>
</strong>
: 
<?php echo $donnees['champion']; ?> <?php echo $donnees['comite1']; ?> - <?php echo $donnees['vice_champion']; ?> <?php echo $donnees['comite2']; ?> <?php echo $donnees['score1']; ?> - <?php echo $donnees['score2']; ?>
<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>

<?php
require ("connection.php") ;
 ?>


<?php

 


$reponse = mysql_query("SELECT * FROM bdjeunes WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<360 and rang>300 order by rang"); // Requête SQL

 echo "<p> <strong><center> Reichels & Juniors </center><BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<div align="left"><strong>
<?php echo $donnees['division']; ?>
</strong>
: 
<?php echo $donnees['champion']; ?> <?php echo $donnees['comite1']; ?> - <?php echo $donnees['vice_champion']; ?> <?php echo $donnees['comite2']; ?> <?php echo $donnees['score1']; ?> - <?php echo $donnees['score2']; ?>
<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>

<?php
require ("connection.php") ;
 ?>


<?php

$reponse = mysql_query("SELECT * FROM bdjeunes WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<380 and rang>=360 order by rang"); // Requête SQL

 echo "<p> <strong><center> Cadets </center><BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<div align="left"><strong>
<?php echo $donnees['division']; ?>
</strong>
: 
<?php echo $donnees['champion']; ?> <?php echo $donnees['comite1']; ?> - <?php echo $donnees['vice_champion']; ?> <?php echo $donnees['comite2']; ?> <?php echo $donnees['score1']; ?> - <?php echo $donnees['score2']; ?>
<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>



<?php
require ("connection.php") ;
 ?>
<?php
 $reponse = mysql_query("SELECT * FROM bdchallenges WHERE saison='$annee' and titre='vainqueur' and rang>370 order by rang"); // Requête SQL
 
 echo "<p> <strong><center> Challenges </center><BR/></strong></p>"; 

 // On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<div align="left"><strong>
<?php echo $donnees['division']; ?>
</strong>
: 
<?php echo $donnees['champion']; ?> <?php echo $donnees['comite1']; ?> - <?php echo $donnees['vice_champion']; ?> <?php echo $donnees['comite2']; ?> <?php echo $donnees['score1']; ?> - <?php echo $donnees['score2']; ?>
<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>
