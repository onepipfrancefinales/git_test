 
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
<font face="Arial, Helvetica, sans-serif" size="3">Le Challenge de l'Esp�rance 
est une comp�tition cr��e en 1953 par les clubs de Tulle et du TOEC. Accueillant 
� l'origine des clubs de 1re et 2e division (ou leurs �quivalents), il est aujourd'hui 
r�serv� aux clubs de F�d�rale 1 (3e division). La phase pr�liminaire a lieu en 
ao�t et septembre, les phases finales en fin de saison. </font><br/>
<br/>
<br/>

<?php

$reponse = mysql_query("SELECT saison, champion, comite1  FROM bdchallenges WHERE rang='400'and titre='vainqueur'ORDER BY saison DESC"); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
   </font></font>  <br/><br/>
<?php
 }
mysql_close(); // D�connexion de MySQL
?>
