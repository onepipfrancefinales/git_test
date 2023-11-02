 
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


echo "<h1><p> <strong> Challenge de l'Essor </strong></p></h1>";
?>


<p><font size="3" face="Arial, Helvetica, sans-serif">Le challenge de l'Essor 
  est une compétition réservée aux clubs de 2ème division (aujourd'hui fédérale 
  2), dans le but de resserrer les liens d'amitié entre les clubs et les joueurs. 
  </font>
<p align="center"><img src="../images/bouclier%20de%20l%27essor2reduit.jpg" width="450" height="291"></p>
<p> 
  <?php
$reponse = mysql_query("SELECT saison, champion, comite1  FROM bdchallenges WHERE rang='420'and titre='vainqueur'ORDER BY saison DESC"); // Requête SQL


echo "<h2><p> <strong> Palmarès Equipe I </strong></p></h2>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?>
  - 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
  </font></font> <br/>
  <br/>
  <?php
 }
 
 

 echo "<h2><p> <strong> Palmarès Equipe II </strong></p></h2>";
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='430'and titre='vainqueur'ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?>
  - 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
  </font></font> <br/>
  <br/>
  <?php
 }
 
mysql_close(); // Déconnexion de MySQL
?>
  <br>
  <a href="http://challenge-essor.fr/" target="_blank"><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Site 
  officiel du Challenge de l'Essor</font></a> </p>
</body>
</html>