<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base coursphp
 
$saison = $_POST['saison'];
$bd= $_POST['bd'];
 echo $saison; 
 echo $bd; 
?>  

<br/>
<?php
$reponse = mysql_query("SELECT * FROM $bd WHERE saison='$saison' and titre='champion' order by rang "); // Requête SQL
 
 
// Avec cette boucle, on liste uniquement le nom des jeux :
 
while ($donnees = mysql_fetch_array($reponse) )
{
 ?>    

<?php echo $donnees['saison']; ?> Champion <?php echo $donnees['championnat']; ?> <?php echo $donnees['division']; ?> 
: 
<?php echo $donnees['champion']; ?> <?php echo $donnees['comite1']; ?>
- 
<?php echo $donnees['vice_champion']; ?>
<?php echo $donnees['comite2']; ?>
<?php echo $donnees['score1']; ?>
- 
<?php echo $donnees['score2']; ?>
<font color="#FFFFFF">dddddddddddddddddddddddddd</font> 
<?php echo $donnees['rang']; ?>
<font color="#FFFFFF">fff </font> 
<?php echo $donnees['rang2']; ?>
<font color="#FFFFFF">fff</font> 
<?php echo $donnees['categorie']; ?>     <?php echo $donnees['id']; ?>


<br/>
<?php
}
 
mysql_close(); // Déconnexion de MySQL
?>





