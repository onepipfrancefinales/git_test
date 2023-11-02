<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php $connect=$_GET['connect']; ?><?php echo $connect; ?>
  <?php $bdfeuilleA=$_GET['bdfeuilleA']; ?><?php echo $bdfeuilleA; ?>
  <?php $bdfeuilleB=$_GET['bdfeuilleB']; ?><?php echo $bdfeuilleB; ?>
  <?php $equipeA=$_GET['equipeA']; ?>
 <?php $equipeB=$_GET['equipeB']; ?>
 <?php $equipe=$_GET['equipe']; ?><?php echo $equipe; ?>
 <?php $id_equipe=$_GET['id_equipe']; ?><?php echo $id_equipe; ?>
 <?php $php=$_GET['php']; ?>
 <?php $comite=$_GET['comite']; ?>
 <?php $comite=$_GET['comite']; ?>
 <?php $code_match=$_GET['code_match']; ?>
<body bgcolor="#FFFFFF" text="#000000">

<p> 
  
  <?php $essaiA=$_POST['essaiA']; ?>
  <?php $transfA=$_POST['transfA']; ?>
  <?php $penaliteA=$_POST['penaliteA']; ?>
  <?php $drop1A=$_POST['drop1A']; ?>
  <?php $essaiB=$_POST['essaiB']; ?>
  <?php $transfB=$_POST['transfB']; ?>
  <?php $penaliteB=$_POST['penaliteB']; ?>
  <?php $drop1B=$_POST['drop1B']; ?>
  <font size="6">V&eacute;rification du score</font></p>
<p>&nbsp;</p>
<table width="300" border="0">
  <tr>
    <td><b> 
      <?php
  
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
      <?php

$query = "SELECT code, nom_1, sigle FROM bdclubs where id='$equipeA'";
$result = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($result) )
{

$sigleA= $row[2];        
}


echo $sigleA;
?>
      </b></td>
    <td><b>
      <?php $totalA=($essaiA*5+$transfA*2+$penaliteA*3+$drop1A*3); 

echo $totalA;

?>
      </b></td>
  </tr>
  <tr>
    <td><b>
      <?php

$query = "SELECT code, nom_1, sigle FROM bdclubs where id='$equipeB'";
$result = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($result) )
{

$sigleB= $row[2];        
}
echo $sigleB;
?>
      </b></td>
    <td><b>
      <?php $totalB=($essaiB*5+$transfB*2+$penaliteB*3+$drop1B*3); 

echo $totalB;

?>
      </b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p> 
 <?php
  require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db2"); 
?>
<?php $sql = "UPDATE $bdfeuilleA
            SET essai='$essaiA', transf='$transfA',penalite='$penaliteA', drop1='$drop1A'
           WHERE id = $code_match " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query( $sql )   ;
  ?>
  <?php $sql2 = "UPDATE $bdfeuilleB
            SET essai='$essaiB', transf='$transfB',penalite='$penaliteB', drop1='$drop1B'
           WHERE id = $code_match " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query( $sql2 )   ;
  ?>
 </p>
<p><a href="page_liste_compet1.php?comite=<?php echo $comite; ?>&equipe=<?php echo $equipe;?>&id_equipe=<?php echo $id_equipe; ?>&comite=<?php echo $comite; ?>&php=<?php echo $php; ?>&connect=<?php echo $connect; ?>">CRetour</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
