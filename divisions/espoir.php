 
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
<body text="#000000" link="#000000" vlink="#000000" alink="#000000">
<div align="center"> </div>
<p>&nbsp; </p>
<?php
require ("../connection.php") ;
 ?>
<?php

 $annee = $_POST['saison'];


echo "<h1><p> <strong> Champions de France <br>
Espoir <BR/></strong></p></h1>";
?>
<p><font face="Arial, Helvetica, sans-serif" size="3">Cette comp&eacute;tititon, 
  arriv&eacute;e avec le professionnalisme est obligatoire pour les 30 clubs professionnels 
  et a remplac&eacute; le championnat des &eacute;quipes r&eacute;serves de l'&eacute;lite. 
  Ce championnat s'adresse au joueurs de moins de 23 ans. Chaque club a toutefois 
  la possibilit&eacute; d'int&egrave;grer &agrave; l'&eacute;quipe des joueurs 
  de premi&egrave;re ligne de moins de 25 ans, ainsi que quatre autres joueurs 
  de plus de 25 ans. </font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">A partir de la saison 2014-2015, 
  cette comp&eacute;tition fusionne avec la competition Reichel A, sous le nom 
  de <b>REICHEL/ESPOIRS</b> r&eacute;serv&eacute;e aux licenci&eacute;s de moins 
  22 ans (18, 19, 20 et 21 ans). <a href="pagereichelA_espoirs.php"><font color="#000000">Palmar&egrave;s 
  de cette nouvelle comp&eacute;tition</font></a><font color="#000000">.</font></font></p>
<p> 
  <?php
$reponse = mysql_query("SELECT saison, champion, comite1  FROM bdequipe2 WHERE rang='235'and titre='Champion'ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> -   <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
</font></font>  <br/><br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>
<p>&nbsp; </p>
<?php
require ("../connection.php") ;
 ?>


<?php

 $annee = $_POST['saison'];


echo "<h1><p> <strong> Champions de France <br>
Reserve 1re Division <BR/></strong></p></h1>";
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE rang='230'and titre='Champion'ORDER BY saison DESC"); // Requête SQL
 
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
