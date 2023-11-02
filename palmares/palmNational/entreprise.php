 
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
require ("../../connect1/connection1.php") ;
 ?>

<?php



echo "<h1><p> <strong> Champions de France<br>
des Entreprises <BR/></strong></p></h1>";
$reponse = $bdd->query("	SELECT saison, champion, comite1 
							FROM bdequipe1 
							WHERE championnat='de France' and rang='225'and titre='champion' 
							ORDER BY saison DESC"); 
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = $reponse->fetch() )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
<?php echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1']; ?>
</font></font>  <br/><br/>
<?php
 }
//mysql_close(); // Déconnexion de MySQL
?>
<br>
<br>
<br>
<?php
    // On inclut le haut de la page
    include("../../pub/pub_carre.php");
    ?>
