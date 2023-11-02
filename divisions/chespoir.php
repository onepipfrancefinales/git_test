 
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
 <div align="center"> </div>
<p>&nbsp; </p>
<?php
require ("../connection.php") ;
 ?>



<?php

 $annee = $_POST['saison'];


echo "<h1><p> <strong> Challenge de l'Espoir </strong></p></h1>";
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='440'and titre='vainqueur' ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
 <font face="Arial, Helvetica, sans-serif"><font size="3"> 
<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
<?php
 }
 

 echo "<h2><p> <strong> Palmarès Equipe II </strong></p></h2>";
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='450'and titre='vainqueur'ORDER BY saison DESC"); // Requête SQL
 
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
