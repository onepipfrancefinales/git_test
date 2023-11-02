 
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

 


echo "<h1><p> <strong> Challenge de l'Esperance <BR/></strong></p></h1>";
?>
<br/>
<br/>
<font face="Arial, Helvetica, sans-serif" size="3">Le Challenge de l'Espérance 
est une compétition créée en 1953 par les clubs de Tulle et du TOEC. Accueillant 
à l'origine des clubs de 1re et 2e division (ou leurs équivalents), il est aujourd'hui 
réservé aux clubs de Fédérale 1 (3e division). La phase préliminaire a lieu en 
août et septembre, les phases finales en fin de saison. </font><br/>
<br/>
<br/>

<?php

$reponse = mysql_query("SELECT saison, champion, comite1  FROM bdchallenges WHERE rang='400'and titre='vainqueur'ORDER BY saison DESC"); // Requête SQL
 
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
