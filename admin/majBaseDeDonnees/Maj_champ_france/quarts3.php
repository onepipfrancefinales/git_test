<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php $annee=$_GET['annee']; ?>
<?php $id=$_POST['id']; ?>

<?php echo  $annee ?>
<?php $annee2=($annee.''."_2"); ?> 

 

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
  //r�cup�ration des valeurs des champs:
  
$A4001 = $_POST['A4001'];
$A4002 = $_POST['A4002'];
$A4003 = $_POST['A4003'];
$A4004 = $_POST['A4004'];

$A4005 = $_POST['A4005'];  
$A4006 = $_POST['A4006'];
$A4007 = $_POST['A4007'];
$A4008 = $_POST['A4008'];





?>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf$annee2
            SET  A4001='$A4001',A4002='$A4002',A4003='$A4003',A4004='$A4004',A4005='$A4005',A4006='$A4006',A4007='$A4007',A4008='$A4008'
		  WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
  {
 
    echo("La modification a �t� correctement effectu�e");
 
  }
  else
  {
    echo("La modification � �chou�e") ;
  }
?>
  <?php

mysql_close(); // D�connexion de MySQL
?>
</p>
<p> <a href=http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/accueil2.php?annee=<?php echo $annee; ?>>Retour 
  </a>
<p>&nbsp;

