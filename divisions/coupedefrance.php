 

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
  de Rugby � XV a connu plusieurs p�riodes d'applications toutes diff�rentes. 
  Elle fut cr��e en fait en 1943 (zone occup�e), en m�me temps que la nouvelle 
  formule du championnat de France durant la guerre. 200 clubs sont inscrits alors, 
  et se rencontrent par �limination directe, les meilleures �quipes de 1re division 
  faisant leur entr�e lors des derniers tours� � l'image du d�roulement de la 
  Coupe de France de football, � la popularit� d'embl�e consid�rable en France 
  ! Les finales se succ�deront de fa�on irr�guli�re entre les deux capitales du 
  Sud-ouest Bordeaux et Toulouse. </font></i></font> <font size="4"><br/>
  </font><br/>
  <?php


$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='1' and titre='vainqueur'ORDER BY saison "); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> -   <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
</font></font>  <br/><br/>
  <?php
 }
mysql_close(); // D�connexion de MySQL
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
  cette &eacute;preuve d'un très bon &#156;il, en demandent &agrave; mots 
  couverts l'interdiction. Le Pr&eacute;sident de la FFR de l'&eacute;poque s'ex&eacute;cutera 
  sans coup f&eacute;rir (la France vient tout juste de r&eacute;int&eacute;grer 
  avec difficult&eacute;s le tournoi des cinq nations quatre ans auparavant), 
  au pr&eacute;texte d'un calendrier annuel trop charg&eacute; pour les clubs 
  (le championnat est d'ailleurs d&eacute;sormais jou&eacute; par matches simples 
  la m&ecirc;me ann&eacute;e). Moins &acirc;pre &agrave; la victoire, le Challenge 
  Yves du Manoir prit le relais dès la saison suivante, après 13 
  ann&eacute;es d'absence.</font></i></p>
<p>&nbsp;</p>
<p><font face="Times New Roman, Times, serif"><i><font size="4">Sous l'impulsion 
  d'Albert Ferrasse, l'�preuve rena�t de ses cendres pour la saison 1983-84, pour 
  trois ann�es, alors que le challenge du Manoir est maintenu. Le principe des 
  �liminations directes est conserv�. Un taux de fr�quentation trop bas des stades 
  et une surcharge du calendrier auront de nouveau raison de l'�preuve "maudite"</font></i></font> 
  <br/>
  <br/>
  <?php




$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='2' and titre='vainqueur'ORDER BY saison "); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> -   <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
 <?php
require ("../connection.php") ;
 ?>
 
 
 
  <?php

 $annee = $_POST['saison'];?>
  <br/>
  <br/>
  <font face="Times New Roman, Times, serif"><i><font size="4">En 1996, l'�preuve 
  " ressuscite " une deuxi�me fois, succ�dant � un Challenge Yves du Manoir en 
  perte de vitesse. Le vainqueur brandit n�anmoins encore le Troph�e Du-Manoir 
  en guise de " Coupe de France ". Le franc-succ�s n'est pas au rendez-vous durant 
  les 2 premiers tours (un 3e est introduit en 2000). La " Coupe de la Ligue " 
  lui succ�de en 2000, suite � la naissance de la LNR de Serge Blanco. A peine 
  trois �ditions plus tard, la comp�tition est transform�e en Challenge Sud-Radio 
  pour une seule et unique �dition. L'importance grandissante des �preuves europ�ennes 
  ne laisse d�sormais plus de place � une seconde comp�tition nationale</font></i></font><font size="4">. 
  <br/>
  </font><br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='3' and titre='vainqueur'ORDER BY saison "); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> -   <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
 
 <?php
require ("../connection.php") ;
 ?>
 
 
  <?php

 $annee = $_POST['saison'];
?>
  <br/>
  <i><font size="4">la Coupe de France est remplac�e par la Coupe de la Ligue</font></i> 
</p>
<p><br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='4' and titre='vainqueur'ORDER BY saison "); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> -   <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
  <?php
 }
mysql_close(); // D�connexion de MySQL
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
$reponse = mysql_query("SELECT * FROM bdchallenges WHERE rang='390'and rang2='5' and titre='vainqueur'ORDER BY saison "); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?> -  <?php echo $donnees['champion'];  ?>  <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
</p>
