 
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


echo "<h1><p> <strong> Champions de France <br>
Belascain</strong></p></h1>";
?>
<?php
echo "<h3><p> <strong>( ex Reichel B )</strong></p></h3>";
?>
<p><font face="Arial, Helvetica, sans-serif" size="3">Comp&eacute;tition ouverte 
  aux moins de 21 ans. Le Troph&eacute;e Christian Belascain (ex Reichel B) est 
  ouvert &agrave; toutes les associations &eacute;voluant en en Divisions F&eacute;d&eacute;rales 
  et S&eacute;ries Territoriales.<br>
  Cette comp&eacute;tition est g&eacute;r&eacute;e par les Comit&eacute;s Territoriaux<br>
  A partir de la saison 2014-2015 cette comp&eacute;tition est r&eacute;serv&eacute;e 
  aux majeurs de moins de 21 ans. (18, 19 et 20 ans)<br>
  </font> </p>
<p>&nbsp;</p>
<p> 
  <?php


$reponse = mysql_query("SELECT * FROM bdjeunes WHERE rang='320'and titre='champion'ORDER BY saison DESC"); // Requête SQL
 
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
<p>&nbsp;
<p align="center"><b><font size="4">-Christian BELASCAIN</font></b>- 
<p align="center">&nbsp;
<p align="left"><font size="3">Christian BELASCAIN</font> est n&eacute; le 1er 
  novembre 1953 &agrave; Biarritz. <br>
  Trois-quarts centre international de 1977 &agrave; 1983 il disputa le premier 
  de ses 18 matchs en bleu face &agrave; la Roumanie le 10 d&eacute;cembre 1977 
  et participa &agrave; la victoire dans le Tournoi 1983. Il fut form&eacute; 
  au Boucau Stade avant de rejoindre l&#146;Aviron Bayonnais avec qui il remporta 
  le Challenge Yves du Manoir en 1980 et disputa la finale du Championnat de France 
  en 1982.<br>
  Il termina sa carri&egrave;re &agrave; l&#146;US Bardos avant de devenir l&#146;entra&icirc;neur 
  puis le manager de l&#146;Aviron Bayonnais. Il d&eacute;c&eacute;da brutalement 
  d&#146;une rupture d&#146;an&eacute;vrisme le 8 janvier 2004 &agrave; l&#146;&acirc;ge 
  de 50 ans.<br>
  Il a disput&eacute; son premier test match le 10 d&eacute;cembre 1977 contre 
  l&#146;&eacute;quipe de Roumanie, et son dernier test match contre l&#146;&eacute;quipe 
  du Pays de Galles, le 19 mars 1983. 
