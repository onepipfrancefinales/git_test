 
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
Elite 2 Armelle Auclair <BR/></strong></p></h1>";
$reponse = mysql_query("SELECT * FROM bdfem WHERE rang='285'and titre='champion'ORDER BY saison DESC"); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3">
<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
</font></font> <br><br>
<?php
 }
mysql_close(); // D�connexion de MySQL
?>
<p>
  <?php
    // On inclut le haut de la page
    include("../pub_carre.php");
    ?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Armelle Auclair est une 
  joueuse de rugby &agrave; XV disparue tragiquement le 13 juillet 2002 &agrave; 
  Maul&eacute;on-Licharre, &agrave; l'&acirc;ge de 28 ans. Armelle Auclair a &eacute;t&eacute; 
  s&eacute;lectionn&eacute;e &agrave; onze reprises en &eacute;quipe de France. 
  Elle a contribu&eacute; au Grand Chelem de l'&eacute;quipe de France en 2002, 
  &agrave; la troisi&egrave;me place obtenue lors de la Coupe du monde de rugby 
  &agrave; XV f&eacute;minin 2002. Elle rejoint le club de Saint-Orens rugby f&eacute;minin 
  lors de l'&eacute;t&eacute; 2001, elle a jou&eacute; au poste de deuxi&egrave;me 
  ligne.</font><br>
</p>
