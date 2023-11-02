<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
<b> <font size="4"> 

 
  
<?php
require ("connect.php") ;
 ?> 
  <?php
  
  $id  = $_GET["idPersonne"] ;
 echo $id;
  //requête SQL:
  
 
  //exécution de la requête:
  $requete = mysql_query( "SELECT * FROM bdpf WHERE id = ".$id ) ;
 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
</font></b> 
<div align="center"><font size="4"></font></div>
<form name="insertion" action="modif3_16me.php?" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2" width="634">
    <tr align="center"> 
      <td colspan="4"> 
        <?php
   
 echo $id
 ?>
      </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32"> 
        <?php
$reponse = mysql_query("SELECT * FROM bdpf WHERE id='$id'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <h1><strong> 
          <?php echo $donnees['club'];?>
          </strong></h1>
        <?php
 }

mysql_close(); // Déconnexion de MySQL
?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260">&nbsp;</td>
      <td width="120">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">cr&eacute;ation du club :</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1632" value="<?php echo($result->A1632) ;?>" size="6">
        </div>
      </td>
      <td width="120">1632</td>
    </tr>
    <tr align="center" bgcolor="#FF0000" valign="middle"> 
      <td colspan="4"><b></b><b></b><b>BUREAU</b></td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Pr&eacute;sident </td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1601" value="<?php echo($result->A1601) ;?>" size="25">
        </div>
      </td>
      <td width="120">1601 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Secretaire </td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="25">
        </div>
      </td>
      <td width="120">1602</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Contact</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="15">
        </div>
      </td>
      <td width="120">1603 </td>
    </tr>
    <tr align="center" bgcolor="#FF0000" valign="top"> 
      <td colspan="4" height="14"><b><font color="#000000">SIEGE</font></b></td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Siege </td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="25">
        </div>
      </td>
      <td width="120">1604</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Adresse </td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1605" value="<?php echo($result->A1605) ;?>" size="25">
        </div>
      </td>
      <td width="120">1605</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">CP</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="5">
        </div>
      </td>
      <td width="120">1606</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Ville</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1607" value="<?php echo($result->A1607) ;?>" size="25">
        </div>
      </td>
      <td width="120">1607</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">T&eacute;l</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="15">
        </div>
      </td>
      <td width="120">1608</td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="4"><b></b><b></b><b>STADE</b></td>
    </tr>
    <tr align="center"> 
      <td width="98" height="24">&nbsp;</td>
      <td width="130" height="24">Nom du stade</td>
      <td width="260" height="24"> 
        <div align="left"> 
          <input type="text" name="A1609" value="<?php echo($result->A1609) ;?>" size="25">
        </div>
      </td>
      <td width="120" height="24">1609</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Adresse</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="25">
        </div>
      </td>
      <td width="120">1610</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">CP</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1611" value="<?php echo($result->A1611) ;?>" size="5">
        </div>
      </td>
      <td width="120">1611 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Ville</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="25">
        </div>
      </td>
      <td width="120">1612</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">tel</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1613" value="<?php echo($result->A1613) ;?>" size="15">
        </div>
      </td>
      <td width="120">1613</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">capacit&eacute;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="6">
        </div>
      </td>
      <td width="120">1614</td>
    </tr>
    <tr align="center" bgcolor="#FF0000" valign="top"> 
      <td colspan="4" height="18"><b></b><b></b><b>CONTACT</b></td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Site Internet</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1620" value="<?php echo($result->A1620) ;?>" size="50">
        </div>
      </td>
      <td width="120">1620</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Mel</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="20">
        </div>
      </td>
      <td width="120">1616</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Correspondant</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1617" value="<?php echo($result->A1617) ;?>" size="15">
        </div>
      </td>
      <td width="120">1617</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130"><b></b></td>
      <td width="260"> 
        <div align="left"></div>
      </td>
      <td width="120">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Sigle</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1618" value="<?php echo($result->A1618) ;?>" size="8">
        </div>
      </td>
      <td width="120">1618</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">couleurs</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1619" value="<?php echo($result->A1619) ;?>" size="30">
        </div>
      </td>
      <td width="120">1619</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">comite</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1615" value="<?php echo($result->A1615) ;?>" size="50">
        </div>
      </td>
      <td width="120">1615</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"></div>
      </td>
      <td width="120">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">Ecole de rugby</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1621" value="<?php echo($result->A1621) ;?>" size="6">
        </div>
      </td>
      <td width="120">1621</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1622" value="<?php echo($result->A1622) ;?>" size="6">
        </div>
      </td>
      <td width="120">1622</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1623" value="<?php echo($result->A1623) ;?>" size="6">
        </div>
      </td>
      <td width="120">1623 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1624" value="<?php echo($result->A1624) ;?>" size="6">
        </div>
      </td>
      <td width="120">1624</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1625" value="<?php echo($result->A1625) ;?>" size="6">
        </div>
      </td>
      <td width="120">1625 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1626" value="<?php echo($result->A1626) ;?>" size="6">
        </div>
      </td>
      <td width="120">1626</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1627" value="<?php echo($result->A1627) ;?>" size="6">
        </div>
      </td>
      <td width="120">1627 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1628" value="<?php echo($result->A1628) ;?>" size="6">
        </div>
      </td>
      <td width="120">1628 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1629" value="<?php echo($result->A1629) ;?>" size="6">
        </div>
      </td>
      <td width="120">1629 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1630" value="<?php echo($result->A1630) ;?>" size="6">
        </div>
      </td>
      <td width="120">1630 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"> 
          <input type="text" name="A1631" value="<?php echo($result->A1631) ;?>" size="6">
        </div>
      </td>
      <td width="120">1631 </td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="260"> 
        <div align="left"></div>
      </td>
      <td width="120">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="98">&nbsp;</td>
      <td width="130"> 
        <p> 
          <input type="submit" value="modifier">
        </p>
      </td>
      <td width="260"> 
        <div align="left"></div>
      </td>
      <td width="120">&nbsp;</td>
    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
