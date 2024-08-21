
<p><br>
  <br>
  <?php

echo "<h1><p> <strong> Champions de France Cadets Gaudermen </strong></p></h1>"; 
 ?>
</p>
<p>&nbsp; </p>
<div align="center"> </div>
<p><font size="3" face="Arial, Helvetica, sans-serif">Cette comp&eacute;tition 
  a d&eacute;but&eacute; en 2010-2011, elle est ouverte aux licenci&eacute;s de 
  moins de 16 ans (Cadets 1re ann&eacute;e). Cette comp&eacute;tition est obligatoire 
  pour les associations qui ont en leur sein un groupement sportif disputant les 
  Comp&eacute;titions Professionnelles et ouverte aux associations de Divisions 
  F&eacute;d&eacute;rales (32 &eacute;quipes ou regroupements) après agr&eacute;ment 
  de la Commission Nationale <br>
  A partir de la saison 2014-2015 cette comp&eacute;tition est r&eacute;serv&eacute;e 
  aux licenci&eacute;s de 14 ans.<br>
  </font><font size="3"> </font> </p>
<br>
<br>
<?php
require ("../connection.php") ;
 ?>



<?php

 $annee = $_POST['saison'];



$reponse = mysql_query("SELECT * FROM bdjeunes WHERE rang='365'and titre='champion'ORDER BY saison DESC"); // Requ�te SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
   </font></font>  <br/><br/>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
<br>
<br>
<p align="center"><font size="5"><b><font size="4">-Pierre Gaudermen-</font></b></font></p>
<p align="center">Pierre Gaudermen est n&eacute; le 20 octobre 1882 &agrave; Paris. 
  A l&#146;image d&#146;autres grands sportifs de cette &eacute;poque, il pratique 
  et excelle dans plusieurs disciplines. Au rugby, il &eacute;volue au poste de 
  troisième ligne centre d&#146;abord au Stade Fran&ccedil;ais puis au 
  Racing Club de France. Il fut avec le premier, Champion de France en 1903 et 
  finaliste en 1904. Il connut une s&eacute;lection en &eacute;quipe de France 
  en 1906. Ses performances en aviron lui ont aussi valu de participer aux Jeux 
  Olympiques de 1912. Il combattit durant la Première Guerre Mondiale en 
  tant qu&#146;aviateur.<br>
  Après le conflit, il devient un important dirigeant de la F&eacute;d&eacute;ration 
  Fran&ccedil;aise de Rugby. Il meurt &agrave; Paris le 18 d&eacute;cembre 1948.</p>
