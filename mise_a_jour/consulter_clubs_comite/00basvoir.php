<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
mysql_select_db("onepip-france-db1"); // S�lection de la base coursphp
 
$code = $_POST['code'];

  
?>  


<?php


$reponse = mysql_query("SELECT * FROM bdclubs WHERE siglecomite='$code'  "); // Requ�te SQL
 
 
// Avec cette boucle, on liste uniquement le nom des jeux :
 
while ($donnees = mysql_fetch_array($reponse) )
{
 ?>    

 <br/>
<?php echo $donnees['code']; ?>  <?php echo $donnees['nom_1']; ?>  


<br/>
<?php
}
 
mysql_close(); // D�connexion de MySQL
?>





