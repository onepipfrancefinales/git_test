
<?php
mysql_connect("sql.franceserv.fr", "onepip-france3", "lavelan309"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$champion == $_post['champion'];


echo "<p><h1><strong> Palmarès de $champion</strong></h1>";

// On fait une boucle pour lister tout ce que contient la table :
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE champion='$champion' and categorie='A' order by saison desc"); // Requête SQL
$champion == $_post ['champion'];
?>
<?php

 $donnees['saison']=champion;
 
 echo $donnees['saison'];
if ($donnees['saison']=champion) // SI l'âge est inférieur ou égal à 12
{
    echo "<strong>champion !</strong><br />";
    
}
else // SINON
{
    echo "vice champion !<br />";
    
}
 
?>





<?php
echo "<p><h2><strong> Equipe Une</strong></h2>";



// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?> 
<?php 

   echo $donnees['saison'];?>  <?php echo $donnees['titre'] ;?> <?php echo $donnees['championnat'];?> <?php echo $donnees['division'];?>
 
<br/>

<?php
 }
mysql_close(); // Déconnexion de MySQL
?>



<?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
$champion == $_post ['champion'];


echo "<p><h2><strong> Equipe II</strong></h2>";


$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE champion='$champion' and categorie='B'  order by saison desc"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?> 


  <?php echo $donnees['saison'];?> <?php echo $donnees['titre'];?>  <?php echo $donnees['championnat'];?> <?php echo $donnees['division'];?>

<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>
<?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
$champion == $_post ['champion'];
echo "<p><h2><strong> Challenges Nationaux</strong></h2>";


$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE champion='$champion' and categorie='C' order by saison desc"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?> 

  <?php echo $donnees['saison'];?> <?php echo $donnees['titre'];?> du challenge de l' <?php echo $donnees['division'];?>

<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>
<?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
$champion == $_post ['champion'];
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE champion='$champion' and categorie='d'  order by saison desc"); // Requête SQL


echo "<p><h2><strong> Reichels et Juniors</strong></h2>";


// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
 ?>
 <?php echo $donnees['saison'];?> <?php echo $donnees['titre'];?> <?php echo $donnees['championnat'];?> <?php echo $donnees['division'];?>

<br/>
<?php
 

 }
mysql_close(); // Déconnexion de MySQL
?>

<?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
 



$champion == $_post ['champion'];

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE champion='$champion' and categorie='E'  order by saison desc"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<?php
if ($donnees['ID'] > 0)
{
  
  echo "<p><h2><strong> Cadets</strong></h2>";
  echo $donnees['saison'];  echo $donnees['titre'];echo $donnees['championnat']; echo $donnees['division'];

}
 }
mysql_close(); // Déconnexion de MySQL
?>



