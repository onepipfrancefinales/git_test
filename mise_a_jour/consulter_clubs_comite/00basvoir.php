<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base coursphp
 
$code = $_POST['code'];

  
?>  


<?php


$reponse = mysql_query("SELECT * FROM bdclubs WHERE siglecomite='$code'  "); // Requête SQL
 
 
// Avec cette boucle, on liste uniquement le nom des jeux :
 
while ($donnees = mysql_fetch_array($reponse) )
{
 ?>    

 <br/>
<?php echo $donnees['code']; ?>  <?php echo $donnees['nom_1']; ?>  


<br/>
<?php
}
 
mysql_close(); // Déconnexion de MySQL
?>





