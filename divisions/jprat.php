 
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


echo "<h1><p> <strong> Champions de France F�d�rale 1 </strong></p></h1>";
echo "<h1><p> <strong>Troph�e Jean Prat <BR/></strong></p></h1>";
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE rang='130'and titre='champion'ORDER BY saison DESC"); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3">
<?php echo $donnees['saison']; ?>
 
<?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
</font></font><br/> <br/> 
<?php
 }
mysql_close(); // D�connexion de MySQL
?>
<br>
<br>
<br>
<?php
    // On inclut le haut de la page
    include("../pub_carre.php");
    ?>
