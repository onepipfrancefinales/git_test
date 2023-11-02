 

 <div align="center"> </div>
<p>&nbsp; </p>
<?php
require ("../connection.php") ;
 ?>

<?php

 $annee = $_POST['saison'];


echo "<h1><p> <strong> Coupe de France  </strong></p></h1>";
?>
<p><font face="Times New Roman, Times, serif"><i> <font size="4">La Coupe de France 
  de Rugby à XV a connu plusieurs périodes d'applications toutes différentes. 
  Elle fut créée en fait en 1943 (zone occupée), en même temps que la nouvelle 
  formule du championnat de France durant la guerre. 200 clubs sont inscrits alors, 
  et se rencontrent par élimination directe, les meilleures équipes de 1re division 
  faisant leur entrée lors des derniers tours… à l'image du déroulement de la 
  Coupe de France de football, à la popularité d'emblée considérable en France 
  ! Les finales se succèderont de façon irrégulière entre les deux capitales du 
  Sud-ouest Bordeaux et Toulouse. </font></i></font> <font size="4"><br/>
  </font><br/>
  <?php


$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='1' and titre='vainqueur'ORDER BY saison "); // Requête SQL
 
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
  <i>
  
  <?php
require ("../connection.php") ;
 ?>
  <?php

 $annee = $_POST['saison'];
?>
<br/>
<br/>
  <font face="Times New Roman, Times, serif" size="4">Le climat de la finale de 
  1951 (un derby!) est si d&eacute;testable que les Anglais, qui ne voient pas 
  cette &eacute;preuve d'un tr&egrave;s bon &#156;il, en demandent &agrave; mots 
  couverts l'interdiction. Le Pr&eacute;sident de la FFR de l'&eacute;poque s'ex&eacute;cutera 
  sans coup f&eacute;rir (la France vient tout juste de r&eacute;int&eacute;grer 
  avec difficult&eacute;s le tournoi des cinq nations quatre ans auparavant), 
  au pr&eacute;texte d'un calendrier annuel trop charg&eacute; pour les clubs 
  (le championnat est d'ailleurs d&eacute;sormais jou&eacute; par matches simples 
  la m&ecirc;me ann&eacute;e). Moins &acirc;pre &agrave; la victoire, le Challenge 
  Yves du Manoir prit le relais d&egrave;s la saison suivante, apr&egrave;s 13 
  ann&eacute;es d'absence.</font></i></p>
<p>&nbsp;</p>
<p><font face="Times New Roman, Times, serif"><i><font size="4">Sous l'impulsion 
  d'Albert Ferrasse, l'épreuve renaît de ses cendres pour la saison 1983-84, pour 
  trois années, alors que le challenge du Manoir est maintenu. Le principe des 
  éliminations directes est conservé. Un taux de fréquentation trop bas des stades 
  et une surcharge du calendrier auront de nouveau raison de l'épreuve "maudite"</font></i></font> 
  <br/>
  <br/>
  <?php




$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='2' and titre='vainqueur'ORDER BY saison "); // Requête SQL
 
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
 <?php
require ("../connection.php") ;
 ?>
 
 
 
  <?php

 $annee = $_POST['saison'];?>
  <br/>
  <br/>
  <font face="Times New Roman, Times, serif"><i><font size="4">En 1996, l'épreuve 
  " ressuscite " une deuxième fois, succédant à un Challenge Yves du Manoir en 
  perte de vitesse. Le vainqueur brandit néanmoins encore le Trophée Du-Manoir 
  en guise de " Coupe de France ". Le franc-succès n'est pas au rendez-vous durant 
  les 2 premiers tours (un 3e est introduit en 2000). La " Coupe de la Ligue " 
  lui succède en 2000, suite à la naissance de la LNR de Serge Blanco. A peine 
  trois éditions plus tard, la compétition est transformée en Challenge Sud-Radio 
  pour une seule et unique édition. L'importance grandissante des épreuves européennes 
  ne laisse désormais plus de place à une seconde compétition nationale</font></i></font><font size="4">. 
  <br/>
  </font><br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='3' and titre='vainqueur'ORDER BY saison "); // Requête SQL
 
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
 
 <?php
require ("../connection.php") ;
 ?>
 
 
  <?php

 $annee = $_POST['saison'];
?>
  <br/>
  <i><font size="4">la Coupe de France est remplacée par la Coupe de la Ligue</font></i> 
</p>
<p><br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='4' and titre='vainqueur'ORDER BY saison "); // Requête SQL
 
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
<p><i><font face="Times New Roman, Times, serif" size="4">La Coupe de la Ligue 
  est remplac&eacute;e par le Challenge Sud-Radio</font></i> </p>
<p><br/>
  
  <?php
require ("../connection.php") ;
 ?>
  
  
  
  <?php

 $annee = $_POST['saison'];
?>
  <?php
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='5' and titre='vainqueur'ORDER BY saison "); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> -  <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>
