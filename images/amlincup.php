 
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
<body bgcolor="#FFFFFF" text="#000000">
<p> 
  <?php
require ("../connection.php") ;
 ?>
  <?php

 $annee = $_POST['saison'];


echo "<BR/><h2><p> <strong> Compétitions Européennes  <BR/></strong></p></h2>";
echo "<h1><p> <strong> Challenge Européen<BR/><BR/></strong></p></h1>";


echo "<h1><p> <strong> Challenge Cup  <BR/></strong></p></h1>";
 ?>
</p>
<p><img src="images/challenge_cup.jpg" width="178" height="228"></p>
<p>
  <?php

 $annee = $_POST['saison'];




echo "<h1><p> <strong> Amlin Cup  <BR/></strong></p></h1>";
 ?>
</p>
<p> <img src="images/amlincup.jpg" width="179" height="248"><br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdeurope WHERE division='Amlin Cup' and rang='2'and titre='vainqueur' ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['saison']; ?>
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>
<p>&nbsp;</p>
<p>
  <?php
    // On inclut le haut de la page
    include("../pub_carre.php");
    ?>
</p>
