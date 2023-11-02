<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base coursphp
 
$code = $_POST['code'];

 echo $code; 
  
?>  


<?php
$reponse = mysql_query("SELECT * FROM bdclubs WHERE code='$code'  order by code "); // Requête SQL
 
 
// Avec cette boucle, on liste uniquement le nom des jeux :
 
while ($donnees = mysql_fetch_array($reponse) )
{
 ?>    

<?php echo $donnees['id']; ?> <br/>
nom 1 : <?php echo $donnees['nom_1']; ?> <br/>
nom 2 : <?php echo $donnees['nom_2']; ?> <br/>
nom 3 : <?php echo $donnees['nom_3']; ?><br/>
nom 4 : <?php echo $donnees['nom_4']; ?><br/>
- ------------------<br/>
<?php echo $donnees['sigle']; ?><br/>
<?php echo $donnees['comite']; ?>  <?php echo $donnees['siglecomite']; ?> <br/> 
<?php echo $donnees['code']; ?><br/>
<?php echo $donnees['logo']; ?><br/>
<?php echo $donnees['url']; ?><br/>
<?php echo $donnees['url100_100']; ?><br/>
<?php echo $donnees['url200_200']; ?><br/>
<br/>
<?php
}
 
mysql_close(); // Déconnexion de MySQL
?>





