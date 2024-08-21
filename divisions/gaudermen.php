
<p><br>
  <br>
  <?php

echo "<h1><p> <strong> Champions de France Cadets Gaudermen </strong></p></h1>"; 
 ?>
</p>
<p>&nbsp; </p>
<div align="center"> </div>
<p><font size="3" face="Arial, Helvetica, sans-serif">Cette compétition 
  a débuté en 2010-2011, elle est ouverte aux licenciés de 
  moins de 16 ans (Cadets 1re année). Cette compétition est obligatoire 
  pour les associations qui ont en leur sein un groupement sportif disputant les 
  Compétitions Professionnelles et ouverte aux associations de Divisions 
  Fédérales (32 équipes ou regroupements) après agrément 
  de la Commission Nationale <br>
  A partir de la saison 2014-2015 cette compétition est réservée 
  aux licenciés de 14 ans.<br>
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
<p align="center">Pierre Gaudermen est né le 20 octobre 1882 &agrave; Paris. 
  A l&#146;image d&#146;autres grands sportifs de cette époque, il pratique 
  et excelle dans plusieurs disciplines. Au rugby, il évolue au poste de 
  troisième ligne centre d&#146;abord au Stade Fran&ccedil;ais puis au 
  Racing Club de France. Il fut avec le premier, Champion de France en 1903 et 
  finaliste en 1904. Il connut une sélection en équipe de France 
  en 1906. Ses performances en aviron lui ont aussi valu de participer aux Jeux 
  Olympiques de 1912. Il combattit durant la Première Guerre Mondiale en 
  tant qu&#146;aviateur.<br>
  Après le conflit, il devient un important dirigeant de la Fédération 
  Fran&ccedil;aise de Rugby. Il meurt &agrave; Paris le 18 décembre 1948.</p>
