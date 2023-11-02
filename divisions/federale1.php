 
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


echo "<h1><p> <strong> Champions de France<br>
 Fédérale 1 <BR/></strong></p></h1>";
?>
<br/>
<font size="3" face="Arial, Helvetica, sans-serif">Le championnat de France de 
première division fédérale ou Fédérale 1 regroupe 48 équipes reparties en 6 poules 
de 8 clubs. A l'issue de la phase regulière les 24 clubs finissant entre la 5e 
et 8e places de chaque poule sont répartis en 6 poules de 4 en conservant les 
points marqués et les suspensions obtenues durant la phase préliminaire. </font><br/>
<br/>
<font face="Arial, Helvetica, sans-serif" size="3">les 2 premiers de chaque poule 
(soit 12 équipes) se qualifient pour une phase finale. Depuis 2005 Le vainqueur 
de celle-ci remporte un titre honorifique de champion de France, mais n'est pas 
promu au niveau supérieur. <br/>
Les 2 derniers de chaque poule (soit 12 équipes) sont relégués en Fédérale 2. 
</font><br/>
<br/>
<br/>


<?php



$reponse = mysql_query("SELECT saison, champion, comite1  FROM bdequipe1 WHERE rang='140'and titre='champion'and rang2='140'ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
 </font></font> <br/><br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>


<?php
require ("../connection.php") ;
 ?>


 <?php

 $annee = $_POST['saison'];


echo "<h2><p> <strong> Champion de France Groupe B <BR/></strong></p></h2>";
$reponse = mysql_query("SELECT * FROM bdequipe1 
						WHERE rang='140'and titre='champion'and rang2='25'
						ORDER BY saison DESC"); 
						 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
 </font></font> <br/><br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>
<br>
<br>
<br>
<?php
    // On inclut le haut de la page
    include("../pub_carre.php");
    ?>
