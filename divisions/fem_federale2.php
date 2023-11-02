 
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


echo "<h2><p> <strong> Champions de France Fédérale 2 Féminine <BR/></strong></p></h2>";
$reponse = mysql_query("SELECT * FROM bdfem WHERE rang='295'and titre='champion'ORDER BY saison DESC"); // Requête SQL
 
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
