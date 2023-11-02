<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<?php $var=$_GET['var']; ?>
<?php $annee=$_GET['annee']; ?>
<?php $type=$_GET['type'];
echo $type ?>
<?php $id=$_POST['id']; ?>


<body bgcolor="#FFFFFF" text="#000000">
<?//----------Choix de la base de données---------------

if ( $var=="phpbr" OR $var=="phppl" OR $var=="phppr" )
	{
	$connect = "connect3";
	//require ("connect3.php");
	}
else
	{
	$connect = "connect2";
	//require ("connect2.php");
	}


?> 



<table width="65%" border="0" height="66">
  <tr> 
    <td width="17%" valign="top" height="6"> 
      <?php
include ("menuDeroulant.php");
?>
    </td>
    <td width="18%" valign="top" height="6">&nbsp; </td>
    <td width="65%" height="6" valign="top"> 
      <?php
include ("reponse2.php");
?>
    </td>
  </tr>
  <tr bgcolor="#006699"> 
    <td colspan="3" valign="top" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="29"> 
      <div align="center">Connect</div>
    </td>
    <td width="65%" valign="top" height="-2" bgcolor="#0099FF"> 
      <?php
echo $connect;

?>
    </td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="25"> 
      <div align="center">Annee</div>
    </td>
    <td width="65%" valign="top" height="25" bgcolor="#000000"> 
      <div align="center"><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
        <?php
echo $annee;

?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="21"> 
      <div align="center">phpcomite</div>
    </td>
    <td width="65%" valign="top" height="21" bgcolor="#0099FF"> 
      <?php
echo $var;

?>
    </td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="13"> 
      <div align="center">Division</div>
    </td>
    <td width="65%" valign="top" height="13" bgcolor="#0099FF"> 
      <?php
echo $id;

?>
    </td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="13"> 
      <div align="center">phpcomite_pfannee</div>
    </td>
    <td width="65%" valign="top" height="13" bgcolor="#0099FF"> 
      <?php
$phpcomite_annee = ($var.''._pf.''.$annee);
echo $phpcomite_annee;



?>
    </td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="13"> 
      <div align="center">phpcomite_clubs </div>
    </td>
    <td width="65%" valign="top" height="13" bgcolor="#0099FF"> 
      <?php

$phpcomite_clubs = ($var.''._clubs);
echo $phpcomite_clubs;

?>
    </td>
  </tr>
</table>
<p>
  <?php require ("fonctions_phases_finales.php");  ?>
  
  
<form name="insertion" action="demis3.php?phpcomite_annee=<?php echo $phpcomite_annee ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&var=<?php echo $var ;?>" method="POST">
  <b><font size="4"> 
  <?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db2"); 
if ( $var=="phpbr" OR $var=="phppl" OR $var=="phppr" )
	{
	
	require ("connect3.php");
	}
else
	{
	
	require ("connect2.php");
	}





?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id , A2001, A2002, A2003, A2004
    					   			  FROM $phpcomite_annee
									  WHERE  id = ".$id ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="447">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="25" bgcolor="#FF0000"><font face="Arial, Helvetica, sans-serif"><b>DEMI 
        FINALE<font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></font></td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="25"><b><font color="#FF0000" face="Arial, Helvetica, sans-serif">En 
        cas de demi &agrave; 3 &eacute;quipes : ClubB = 99 999<br>
        et scoreA = 99 et scoreB = 0<br>
       <hr /></font></b></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="9"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="161"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2001" value="<?php echo($result->A2001) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="161"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2002" value="<?php echo($result->A2002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="9"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="161"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2003" value="<?php echo($result->A2003) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="161"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A2004" value="<?php echo($result->A2004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" height="13" bgcolor="#FF0000"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FFFFFF"><a href="accueilMAJPFTERR.php"><b>Retour 
        accueil</b></a></td>
    </tr>
  </table>
		</form>
	
<p>&nbsp;</p>
</body>
</html>
