<?php
 $annee  = $_GET["annee"] ;
  echo $annee;
 ?> //connection au serveur 
<?php
require ("connect.php") ;
 ?>

<?php
  //r�cup�ration des valeurs des champs:
$A1601 = $_POST['A1601'];
$A1602 = $_POST['A1602'];
$A1603 = $_POST['A1603'];
$A1604 = $_POST['A1604'];
$A1605 = $_POST['A1605'];
$A1606 = $_POST['A1606'];
$A1607 = $_POST['A1607'];
$A1608 = $_POST['A1608'];
$A1609 = $_POST['A1609'];
$A1610 = $_POST['A1610'];
$A1611 = $_POST['A1611'];
$A1612 = $_POST['A1612'];
$A1613 = $_POST['A1613'];
$A1614 = $_POST['A1614'];
$A1615 = $_POST['A1615'];
$A1616 = $_POST['A1616'];
$A1617 = $_POST['A1617'];
$A1618 = $_POST['A1618'];
$A1619 = $_POST['A1619'];
$A1620 = $_POST['A1620'];
$A1621 = $_POST['A1621'];
$A1622 = $_POST['A1622'];
$A1623 = $_POST['A1623'];
$A1624 = $_POST['A1624'];
$A1625 = $_POST['A1625'];
$A1626 = $_POST['A1626'];
$A1627 = $_POST['A1627'];
$A1628 = $_POST['A1628'];
$A1629 = $_POST['A1629'];
$A1630 = $_POST['A1630'];
$A1631 = $_POST['A1631'];
$A1632 = $_POST['A1632'];

 
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf$annee
            SET A1601='$A1601', A1602='$A1602',A1603='$A1603', A1604='$A1604',A1605='$A1605', A1606='$A1606',A1607='$A1607', A1608='$A1608' ,A1609='$A1609', A1610='$A1610',A1611='$A1611', A1612='$A1612',A1613='$A1613', A1614='$A1614' , A1615='$A1615',A1616='$A1616'
          , A1617='$A1617',A1618='$A1618', A1619='$A1619',A1620='$A1620', A1621='$A1621',A1622='$A1622', A1623='$A1623' ,A1624='$A1624', A1625='$A1625',A1626='$A1626', A1627='$A1627',A1628='$A1628', A1629='$A1629' , A1630='$A1630',A1631='$A1631', A1632='$A1632'
		   WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
  {
    echo("La modification � �t� correctement effectu�e") ;
	

  }
  else
  {
    echo("La modification � �chou�e") ;
  }
  mysql_close();
?>








<a href="miseajour.php">Retour mise � jour</a> 