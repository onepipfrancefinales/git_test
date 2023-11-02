
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");

// On ajoute une entrée avec mysql_query 6 champs  '2001', '2002', '2003', '2004', '1001', '1002',
$code = $_POST['code'];
$nom_1 = $_POST['nom_1'];
$nom_2 = $_POST['nom_2'];
$nom_3 = $_POST['nom_3'];
$nom_4 = $_POST['nom_4'];

$reponse = mysql_query ("UPDATE bdclubs SET nom_1='$nom_1', nom_2='$nom_2', nom_3='$nom_3', nom_4='$nom_4' where code='$code'");


?>
<hr />
<p align="center"> 
  code : <?php echo $_POST['code']; ?><br/>
  1 : <?php echo $_POST['nom_1']; ?><br/>
  2 : <?php echo $_POST['nom_2']; ?><br/>
  3 : <?php echo $_POST['nom_3']; ?><br/>
  4 : <?php echo $_POST['nom_4']; ?><br/>
</p>

