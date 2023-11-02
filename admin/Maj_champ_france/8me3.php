<head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  <?php $id=$_POST['id']; 
 
  ?>
<?php 
$annee=$_GET['annee'];

$niv=$_GET['niv'];
 ?>


<?php echo $annee; ?>
<?php echo $niv; ?>
 
  <?php echo $id; ?>
  

<?php $annee2=($annee.''."_2"); ?>    

  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //récupération des valeurs des champs:
  
$A8001 = $_POST['A8001'];
$A8002 = $_POST['A8002'];
$A8003 = $_POST['A8003'];
$A8004 = $_POST['A8004'];

$A8005 = $_POST['A8005'];  
$A8006 = $_POST['A8006'];
$A8007 = $_POST['A8007'];
$A8008 = $_POST['A8008'];

$A8009 = $_POST['A8009'];  
$A8010 = $_POST['A8010'];
$A8011 = $_POST['A8011'];
$A8012 = $_POST['A8012'];

$A8013 = $_POST['A8013'];  
$A8014 = $_POST['A8014'];
$A8015 = $_POST['A8015'];
$A8016 = $_POST['A8016'];




?>
  <?php
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE bdpf$annee2
            SET  A8001='$A8001',A8002='$A8002',A8003='$A8003',A8004='$A8004',A8005='$A8005',A8006='$A8006',A8007='$A8007',A8008='$A8008',
				 A8009='$A8009',A8010='$A8010',A8011='$A8011',A8012='$A8012',A8013='$A8013',A8014='$A8014',A8015='$A8015',A8016='$A8016'
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
  <a href=http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/accueil2.php?annee=<?php echo $annee; ?>&niv=<?php echo $niv; ?>>Retour </a>
<p>&nbsp;

