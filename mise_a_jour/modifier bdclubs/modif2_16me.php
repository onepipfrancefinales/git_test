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
   $code  = $_GET["code"] ;
  
 echo $id;
  //requête SQL:
  
 
  //exécution de la requête:
  $requete = mysql_query( "SELECT * FROM bdclubs WHERE id = ".$id ) ;
 
  //affichage des données:
 if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
</font></b> 
<div align="center"><font size="4"><b>BD CLUBS</b></font></div>


  <table border="0" align="center" cellspacing="2" cellpadding="2" width="267">
    <tr align="center"> 
      <td width="145"><b>Id</b></td>
      <td width="40"> 
        <input type="text" name="id" value="<?php echo($result->id) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="nom_1" value="<?php echo($result->nom_1) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>nom_1</b></td>
      <td width="40"> 
        <input type="text" name="A1603" value="<?php echo($result->nom_2) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1604" value="<?php echo($result->nom_3) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>nom_2</b></td>
      <td width="40"> 
        <input type="text" name="A1605" value="<?php echo($result->nom_4) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1606" value="<?php echo($result->fusion) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>nom_3</b></td>
      <td width="40"> 
        <input type="text" name="A1607" value="<?php echo($result->sigle) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1608" value="<?php echo($result->siglecomite) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>nom_4</b></td>
      <td width="40"> 
        <input type="text" name="A1609" value="<?php echo($result->comite) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>fusion</b></td>
      <td width="40"> 
        <input type="text" name="A1611" value="<?php echo($result->A1611) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>sigle</b></td>
      <td width="40"> 
        <input type="text" name="A1613" value="<?php echo($result->A1613) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>siglecomite</b></td>
      <td width="40"> 
        <input type="text" name="A1615" value="<?php echo($result->A1615) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>comite</b></td>
      <td width="40"> 
        <input type="text" name="A1617" value="<?php echo($result->A1617) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1618" value="<?php echo($result->A1618) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>code</b></td>
      <td width="40"> 
        <input type="text" name="A1619" value="<?php echo($result->A1619) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1620" value="<?php echo($result->A1620) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>logo</b></td>
      <td width="40"> 
        <input type="text" name="A1621" value="<?php echo($result->A1621) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1622" value="<?php echo($result->A1622) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>url</b></td>
      <td width="40"> 
        <input type="text" name="A1623" value="<?php echo($result->A1623) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1624" value="<?php echo($result->A1624) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>url100_100</b></td>
      <td width="40"> 
        <input type="text" name="A1625" value="<?php echo($result->A1625) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1626" value="<?php echo($result->A1626) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>url200_200</b></td>
      <td width="40"> 
        <input type="text" name="A1627" value="<?php echo($result->A1627) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1628" value="<?php echo($result->A1628) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>15</b>-A1013-A1014</td>
      <td width="40"> 
        <input type="text" name="A1629" value="<?php echo($result->A1629) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1630" value="<?php echo($result->A1630) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="145"><b>16</b>-A1015-A1016</td>
      <td width="40"> 
        <input type="text" name="A1631" value="<?php echo($result->A1631) ;?>" size="6">
      </td>
      <td width="44"> 
        <input type="text" name="A1632" value="<?php echo($result->A1632) ;?>" size="6">
      </td>
      <td width="12">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td colspan="4"> 
        <p> 
          <input type="submit" value="modifier">
        </p>
      </td>
    </tr>
  </table>
</form>
  <?php
  }//fin if 
 ?>
