<head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>
<?php $annee2=($annee.''."_2"); ?> 


<?php $id=$_POST['id']; ?>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //récupération des valeurs des champs:
  

$A1001 = $_POST['A1001'];  
$A1002 = $_POST['A1002'];



?>
  <?php
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE bdpf$annee2
            SET  A1001='$A1001',A1002='$A1002'
		  WHERE id = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
 
    echo("La modification a été correctement effectuée");
 
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
  <?php

mysql_close(); // Déconnexion de MySQL
?>
</p>
<p> 
  <a href=http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/accueil2.php?annee=<?php echo $annee; ?>>Retour </a>

<p>&nbsp;

