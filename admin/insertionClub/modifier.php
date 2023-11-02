<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>


<?php
if (isset($_GET['value'])) $valueId = $_GET['value']; else $valueId ="1010001";


require ("../../connect/connexion1.php");

$reponse = $bdd->query("SELECT *
						FROM bdclubs 
						WHERE id ='$valueId'"); 

while ($row = $reponse->fetch())
		{ 
			$id = $row[0]; $nom_1 = $row[1];  $nom_2 = $row[2]; $nom_3 = $row[3];
            $nom_4 = $row[4]; $fusion = $row[5]; $idffr = $row[6]; 
            $type = $row[7]; $sigle = $row[8];  $ligue =  $row[9]; 
            $sigleComite =  $row[10]; $comite =  $row[11];
        }
?>

<body bgcolor="#FFFFFF" text="#000000">
<p><font size="5"><b>Modifier un enregistrement à partir d'un Id</b></font></p>
<p><font size="4" face="Arial, Helvetica, sans-serif">bdclubs (Identifiants du club)<br>
  infosClub (infos sur le clubs)<br>
  bdsaisons (historique des saisons pr&eacute;c&eacute;dentes)</font></p>
 <br/>
 
 <form action="modifier.php" method="GET">
        <p align="center">
         <br />
          <input type="text" name="value" />
         <br />
          <input  type="submit" value="recherche par Id" />
      </form>
       <hr />
<h2>  bdclubs (Identifiants du club)</h2>
<form name="form1" method="POST" action="retourbdclubs.php">

 <div align="left">    
   <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Id : </font>
    <input type="text" name="id" value="<?php echo $id ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Nom_1 : </font>
    <input type="text" name="nom_1" value="<?php echo $nom_1 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Nom_2 : </font>
    <input type="text" name="nom_2" value="<?php echo $nom_2 ;?>">
    <br>  <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Nom_3 : </font>
    <input type="text" name="nom_2" value="<?php echo $nom_3 ;?>">
    <br>
     <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Nom_3 : </font>
    <input type="text" name="nom_3" value="<?php echo $nom_3 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Nom_4</font>
    <input type="text" name="nom_4" value="<?php echo $nom_4 ;?>">
    <br> 
   <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Fusion : </font>
    <input type="text" name="fusion" value="<?php echo $fusion ;?>">
     <br> 
   <br>
    <font size="4" face="Arial, Helvetica, sans-serif">IdFFR : </font>
    <input type="text" name="idffr" value="<?php echo $idffr ;?>">
    <br> 
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Type : </font>
    <input type="text" name="type" value="<?php echo $type ;?>">
    <br> 
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Sigle : </font>
    <input type="text" name="sigle" value="<?php echo $sigle ;?>">
    <br> 
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Ligue</font>
    <input type="text" name="ligue" value="<?php echo $ligue ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">SigleComite : </font>
    <input type="text" name="siglecomite" value="<?php echo $sigleComite ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Comité : </font>
    <input type="text" name="comite" value="<?php echo $comite ;?>">
    <br><br><br>
  </div>
   <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

<hr />

<?php
$reponse = $bdd->query("SELECT *
						FROM infosclub
						WHERE id ='$valueId'"); 

while ($row = $reponse->fetch())
		{ 
			$id = $row[0]; $club1 = $row[1];  $ligue1 = $row[2]; $equipe_fem = $row[3];   
            $A1601=  $row[4]; $A1602=  $row[5]; $A1603=  $row[6]; $A1604=  $row[7]; $A1605=  $row[8];
            $A1606=  $row[9]; $A1607=  $row[10]; $A1608= $row[11]; $A1609= $row[12]; $A1610= $row[13];
            $A1611=  $row[14]; $A1612=  $row[15]; $A1613= $row[16]; $A1614= $row[17]; $A1615= $row[18];
            $A1616=  $row[19]; $A1617=  $row[20]; $A1618= $row[21]; $A1619= $row[22]; $A1620= $row[23];
            $A1621=  $row[24]; $A1622=  $row[25]; $A1623= $row[26]; $A1624= $row[27]; $A1625= $row[28];
            $A1626=  $row[29]; $A1627=  $row[30]; $A1628= $row[31]; $A1629= $row[32]; $A1630= $row[33];
            $A1631=  $row[34];
        }

?>

<h2>infosClub (infos sur le clubs)</h2>


 
<form name="form1" method="POST" action="retour.php">
  <p></p>
  <div align="left">    
   <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Id : </font>
    <input type="text" name="id" value="<?php echo $id ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Club : </font>
    <input type="text" name="club1" value="<?php echo $club1 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Ligue : </font>
    <input type="text" name="ligue1" value="<?php echo $ligue1 ;?>">
    <br>  <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Equipe féminine : </font>
    <input type="text" name="equipe_fem" value="<?php echo $equipe_fem ;?>">
    <br>
     <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Président : </font>
    <input type="text" A1601="nom_3" value="<?php echo $A1601 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Secrètaire : </font>
    <input type="text" A1602="nom_3" value="<?php echo $A1602 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Contact : </font>
    <input type="text" A1603="nom_3" value="<?php echo $A1603 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Siège : </font>
    <input type="text" A1604="nom_3" value="<?php echo $A1604 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Adresse : </font>
    <input type="text" A1605="nom_3" value="<?php echo $A1605 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Code Postal : </font>
    <input type="text" A1606="nom_3" value="<?php echo $A1606 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Ville : </font>
    <input type="text" A1607="nom_3" value="<?php echo $A1607 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Tél : </font>
    <input type="text" A168="nom_3" value="<?php echo $A1608 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1609 : </font>
    <input type="text" A1609="nom_3" value="<?php echo $A1609 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1610 : </font>
    <input type="text" A1610="nom_3" value="<?php echo $A1610 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1611 : </font>
    <input type="text" A1611="nom_3" value="<?php echo $A1611 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1612 : </font>
    <input type="text" A1612="nom_3" value="<?php echo $A1612 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1613 : </font>
    <input type="text" A1613="nom_3" value="<?php echo $A1613 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1614 : </font>
    <input type="text" A1614="nom_3" value="<?php echo $A1614 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1615 : </font>
    <input type="text" A1615="nom_3" value="<?php echo $A1615 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1616 : </font>
    <input type="text" A1616="nom_3" value="<?php echo $A1616 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1617 : </font>
    <input type="text" A1617="nom_3" value="<?php echo $A1617 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">Sigle : </font>
    <input type="text" A1618="nom_3" value="<?php echo $A1618 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">Couleur : </font>
    <input type="text" A1619="nom_3" value="<?php echo $A1619 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Site Internet : </font>
    <input type="text" A1620="nom_3" value="<?php echo $A1620 ;?>">
    <br><br>
    <font size="4" face="Arial, Helvetica, sans-serif">Commentaire 1 : </font>
    <input type="text" A1621="nom_3" value="<?php echo $A1621 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Commentaire 2 : </font>
    <input type="text" A1622="nom_3" value="<?php echo $A1622 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Commentaire 3 : </font>
    <input type="text" A1623="nom_3" value="<?php echo $A1623 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Création du club : </font>
    <input type="text" A1624="nom_3" value="<?php echo $A1624 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1625 : </font>
    <input type="text" A1625="nom_3" value="<?php echo $A1625 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1626 : </font>
    <input type="text" A1626="nom_3" value="<?php echo $A1626 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1627 : </font>
    <input type="text" A1627="nom_3" value="<?php echo $A1627 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1628 : </font>
    <input type="text" A1628="nom_3" value="<?php echo $A1628 ;?>">
    <br> <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1629 : </font>
    <input type="text" A1629="nom_3" value="<?php echo $A1629 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1602 : </font>
    <input type="text" A1602="nom_3" value="<?php echo $A1602 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">Trésorier : </font>
    <input type="text" A1630="nom_3" value="<?php echo $A1630 ;?>">
    <br>
    <br>
    <font size="4" face="Arial, Helvetica, sans-serif">A1631 : </font>
    <input type="text" A1631="nom_3" value="<?php echo $A1631 ;?>">
    <br>
    <br>
    
    
  </div>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

<hr/>
<h2>bdsaisons (historique des saisons pr&eacute;c&eacute;dentes)</h2>
<form name="form1" method="POST" action="retour.php">
  <p></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Nom Usuel : 
    <input type="text" name="nom">
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Nom complet : 
    <input type="text" name="nomComplet">
    </font></p>
	 <p><font size="4" face="Arial, Helvetica, sans-serif">Saison : 
    <input type="text" name="saison">
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Pour saisir l'id consulter 
    la liste des clubs par Id (<a href="../consultation/listeClubsParNom.php" target="_blank">liste 
    par ID</a>)</font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Id (2029076): 
    <input type="text" name="id">
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">IdFFR (1234M): 
    <input type="text" name="idffr">
    </font></p>
  
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

</body>
</html>
