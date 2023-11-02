 <?php include("../../variables_ffr.php");?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<title></title>
<p align="center"><font size="7"><b><font color="#FF0000">- - B</font><font size="7"><b><font color="#FF0000">ase 
  de Donn&eacute;es n&deg;</font></b></font><font color="#FF0000">2 - - <br>
  <br>
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35

?>
  </font></b></font></p>
<p align="center">&nbsp;</p>
<p align="center"><b><font color="#000000" size="7">AB AB AB AB AB AB AB AB AB 
  AB AB</font></b></p>
<div align="center">
<table width="924" border="0" cellspacing="0">
  <tr>
    <td colspan="2" height="25" valign="top"><font size="4" face="Arial, Helvetica, sans-serif"></font>
</table>
  
<table width="924" border="0" cellspacing="0">
  <tr> 
    <td colspan="4" height="17" bgcolor="#FF0000"> 
      <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
    </td>
    <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="23"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
      </font><font size="3"><font face="Arial, Helvetica, sans-serif"> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip

?>
      </font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_H and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php echo "$row[7]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip

?>
      </font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_H and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="167" height="23"> 
      <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_H and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php echo "-";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></div>
    </td>
    <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ=$AB_H and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
 phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </font><font face="Arial, Helvetica, sans-serif"> 
      <?php echo "$row[8]";?>
      </font><font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></b></font><font face="Arial, Helvetica, sans-serif"> </font></b></font></td>
    <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <font size="3"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_H and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </font> 
      <?php echo "$row[3]"; ?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </b></font></td>
  </tr>
  <tr> 
    <td colspan="4" height="18" bgcolor="#FF0000"> 
      <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
        Honneur</b></font></div>
    </td>
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ=$AB_PHand phpab_journees.id_champ=$AB_PH and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php echo "$row[7]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ=$AB_PH and phpab_journees.id_champ>'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ=$AB_PH and phpab_journees.id_champ>'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php echo "-";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></div>
    </td>
    <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
      </font><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ=$AB_PH and phpab_journees.id_champ>'180'and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
 phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </font><font face="Arial, Helvetica, sans-serif"> 
      <?php echo "$row[8]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></b></font></td>
    <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ=$AB_PH and phpab_journees.id_champ>'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php echo "$row[3]"; ?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font> </b></font></td>
  </tr>
  <tr> 
    <td colspan="4" height="18" bgcolor="#FF0000"> 
      <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
        S&eacute;rie- </b></font></div>
    </td>
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" height="18" bgcolor="#FF0000"> 
      <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
        S&eacute;rie</b></font></div>
    </td>
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_2 and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php echo "$row[7]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_2 and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_2 and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and  phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500' and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php echo "-";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></div>
    </td>
    <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ=$AB_2 and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
 phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php echo "$row[8]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </b></font></td>
    <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ=$AB_2 and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php echo "$row[3]"; ?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font> </b></font></td>
  </tr>
  <tr> 
    <td colspan="4" height="32" bgcolor="#FF0000"> 
      <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
        S&eacute;rie</b></font></div>
    </td>
    <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_journees.id_champ, phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_clubs.nom, phpab_clubs.id 
FROM  phpab_matchs, phpab_journees, phpab_clubs 
WHERE phpab_journees.id_champ=211 and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and 
phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL 
and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
  {   
	//Affichage du numero de id division 
		  print( $row[0]."\n");     
		?>
      </font></td>
    <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php   
   	//Affichage de la journée
        $journee="$row[3]"-("$row[0]"*100); 
		print ($journee."me journ&eacute;e \n");     

?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
    //affichage equipe domicile
		  print ($row[8]." \n");

}
?>
        </b></font></div>
    </td>
    <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      </b></font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font></td>
    <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      </b></font></td>
  </tr>
  <tr> 
    <td colspan="4" height="9" bgcolor="#FF0000"> 
      <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
    </td>
    <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr bgcolor="#00FFFF"> 
      <td width="106" height="24"><font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpab_journees.id_champ, phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_clubs.nom, phpab_clubs.id 
FROM  phpab_matchs, phpab_journees, phpab_clubs 
WHERE phpab_journees.id_champ>270 and (phpab_clubs.id+900000)=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and 
(phpab_clubs.id+900000)=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL 
and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
  {   
	//Affichage du numero de id division 
		  print( $row[0]."\n");     
		?>
        </font></td>
    <td width="106" height="24"><font size="4" face="Arial, Helvetica, sans-serif"> 
      <?php   
   	//Affichage de la journée
        $journee="$row[3]"-("$row[0]"*100); 
		print ($journee."me journ&eacute;e \n");     

?>
      </font></td>
    <td width="167" height="24"><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <?php
    //affichage equipe domicile
		  print ($row[8]." \n");

}
?>
      </b></font></td>
    <td width="155" height="24"><font size="4" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id 
FROM  phpab_matchs, phpab_journees, phpab_clubs 
WHERE  phpab_journees.id_champ>270 and (phpab_clubs.id+900000)=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and (phpab_clubs.id+900000)=phpab_matchs.id_equipe_ext and
 phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <?php 
		  print ($row[8]."\n");
?>
      </b></font></td>
    <td width="152" height="24"><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <?php
 
	 // affichage de la date
        print ($row[3]."\n"); 
      		
		}
?>
      </b></font></td>
  </tr>
  <tr> 
      <td colspan="3" height="22" valign="top"> 
        <div align="left"><font size="4" face="Arial, Helvetica, sans-serif"></font> 
          <pre><font size="4" face="Arial, Helvetica, sans-serif"><?php
$query = "SELECT  phpab_journees.id_champ, phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_clubs.nom, phpab_clubs.id 
FROM  phpab_matchs, phpab_journees, phpab_clubs 
WHERE phpab_journees.id_champ>270 and (phpab_clubs.id+900000)=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and 
(phpab_clubs.id+900000)=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL 
and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
{   
	//Affichage du numero de id division     
		  print( $row[0]."\t\t\t"); 
   	
	//Affichage de la journée 
		$journee="$row[3]"-("$row[0]"*100); 
		print ($journee ."me journ&eacute;e \t\t\t");     
 
    //affichage equipe domicile
		print ("<b>".$row[8]."\n"."</b>");
 	
}
?></font></pre>
        </div>
    </td>
      <td colspan="2" height="22" valign="top"> 
        <pre><font size="4" face="Arial, Helvetica, sans-serif"><?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id 
FROM  phpab_matchs, phpab_journees, phpab_clubs 
WHERE  phpab_journees.id_champ>270 and (phpab_clubs.id+900000)=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and (phpab_clubs.id+900000)=phpab_matchs.id_equipe_ext and
 phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
	// affichage de l'equipe exterieure	
		  print ("<b>".$row[8]."</b>"."\t\t\t\t\t\t");
 
	 // affichage de la date
        print ($row[3]."\n"); 
      		
		}
?></font></pre>
      <font size="4" face="Arial, Helvetica, sans-serif"></font> 
  </tr>
  <tr> 
      <td colspan="5" height="24">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="24">&nbsp;</td>
    <td width="106" height="24">&nbsp;</td>
    <td width="167" height="24">&nbsp;</td>
    <td width="155" height="24">&nbsp;</td>
    <td width="152" height="24">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ>'270' and (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and
 (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php echo "$row[7]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ>'270' and (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and
 (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="167" height="24"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ>'270' and (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and
 (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php echo "-";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></div>
    </td>
    <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ>'270' and phpab_clubs.id+900000=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id+900000=phpab_matchs.id_equipe_ext and
 phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php echo "$row[8]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </b></font></td>
    <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ>'270' and (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and
 (phpab_clubs.id + 900000)=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '912500' and phpab_matchs.id_equipe_ext < '912500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
      <?php echo "$row[3]"; ?>
      </font><font face="Arial, Helvetica, sans-serif"> 
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></b></font></td>
  </tr>
</table>
<div align="left"><font size="3" face="Arial, Helvetica, sans-serif"><br>
    <br>
    </font></div>
</div>
<p align="center">&nbsp; 
<p align="center">&nbsp; 
<p align="center"><b><font size="7">AL AL AL AL AL AL ALA ALA AL AL</font></b> 
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="3" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE phpal_journees.id_champ<'180' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE phpal_journees.id_champ<'180' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'180' and phpal_clubs.id=phpal_matchs.id_equipe_ext and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_ext and
 phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE phpal_journees.id_champ<'180' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="3" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'190'and phpal_journees.id_champ>'180' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ=$AL_PH and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'190' and phpal_journees.id_champ>'180'and phpal_clubs.id=phpal_matchs.id_equipe_ext and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_ext and
 phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'190'and phpal_journees.id_champ>'180' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="3" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'200'and phpal_journees.id_champ>'190' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ=$AL_1 and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'200' and phpal_journees.id_champ>'190'and phpal_clubs.id=phpal_matchs.id_equipe_ext and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_ext and
 phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'200'and phpal_journees.id_champ>'190' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="3" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'210'and phpal_journees.id_champ>'200' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ=$AL_2 and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and  phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500' and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'210' and phpal_journees.id_champ>'200'and phpal_clubs.id=phpal_matchs.id_equipe_ext and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_ext and
 phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'210'and phpal_journees.id_champ>'200' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="3" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'230'and phpal_journees.id_champ>'210' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  (phpal_journees.id_champ=$AL_3 or phpal_journees.id_champ=$AL_4) and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'230' and phpal_journees.id_champ>'210'and phpal_clubs.id=phpal_matchs.id_equipe_ext and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_ext and
 phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'230'and phpal_journees.id_champ>'210' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="3" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE phpal_journees.id_champ>'270' and (phpal_clubs.id + 900000)=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and
 (phpal_clubs.id + 900000)=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '911500' and phpal_matchs.id_equipe_ext < '911500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE (phpal_journees.id_champ=$AL_RH or phpal_journees.id_champ=$AL_RPH or phpal_journees.id_champ=$AL_R1 or phpal_journees.id_champ=$AL_R2) and (phpal_clubs.id + 900000)=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and
 (phpal_clubs.id + 900000)=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '911500' and phpal_matchs.id_equipe_ext < '911500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ>'270' and phpal_clubs.id+900000=phpal_matchs.id_equipe_ext and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id+900000=phpal_matchs.id_equipe_ext and
 phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '911500' and phpal_matchs.id_equipe_ext < '911500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE phpal_journees.id_champ>'270' and (phpal_clubs.id + 900000)=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and
 (phpal_clubs.id + 900000)=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '911500' and phpal_matchs.id_equipe_ext < '911500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>AU AUA AU AUA AUA AUA AU AUA AU</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
          </b></font><font face="Arial, Helvetica, sans-serif"> 
		  <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{    
			echo "$row[7]";	
			}
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_ext and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_ext and
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'190'and phpau_journees.id_champ>'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'190'and phpau_journees.id_champ>'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'190'and phpau_journees.id_champ>'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'190' and phpau_journees.id_champ>'180'and phpau_clubs.id=phpau_matchs.id_equipe_ext and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_ext and
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'190'and phpau_journees.id_champ>'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'200'and phpau_journees.id_champ>'190' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		
         echo "$row[7]";
       
		}


?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'200'and phpau_journees.id_champ>'190' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'200'and phpau_journees.id_champ>'190' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'200' and phpau_journees.id_champ>'190'and phpau_clubs.id=phpau_matchs.id_equipe_ext and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_ext and
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'200'and phpau_journees.id_champ>'190' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">13066</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500' and phpau_matchs.id_equipe_dom!='13066' and phpau_matchs.id_equipe_ext!='13066'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		
        echo "$row[7]";
       
		}


?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500' and phpau_matchs.id_equipe_dom!='13066' and phpau_matchs.id_equipe_ext!='13066'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and  phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500' and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom!='13066' and phpau_matchs.id_equipe_ext!='13066'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210' and phpau_journees.id_champ>'200'and phpau_clubs.id=phpau_matchs.id_equipe_ext and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_ext and
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500' and phpau_matchs.id_equipe_dom!='13066' and phpau_matchs.id_equipe_ext!='13066'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500' and phpau_matchs.id_equipe_dom!='13066' and phpau_matchs.id_equipe_ext!='13066'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'230'and phpau_journees.id_champ>'210' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
	       echo "$row[7]";
     		}
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'230'and phpau_journees.id_champ>'210' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'230'and phpau_journees.id_champ>'210' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'230' and phpau_journees.id_champ>'210'and phpau_clubs.id=phpau_matchs.id_equipe_ext and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_ext and
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'230'and phpau_journees.id_champ>'210' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24" valign="top"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'AND phpau_matchs.id_equipe_ext!='913028' and phpau_matchs.id_equipe_dom!='913028'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
       	{    
		echo "$row[7]";
      	}


?>
        </font> </font> </td>
      <td width="106" height="24"> <font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'AND phpau_matchs.id_equipe_ext!='913028' and phpau_matchs.id_equipe_dom!='913028'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'AND phpau_matchs.id_equipe_ext!='913028' and phpau_matchs.id_equipe_dom!='913028'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ>'270' and phpau_clubs.id+900000=phpau_matchs.id_equipe_ext and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id+900000=phpau_matchs.id_equipe_ext and
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'AND phpau_matchs.id_equipe_ext!='913028' and phpau_matchs.id_equipe_dom!='913028'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'AND phpau_matchs.id_equipe_ext!='913028' and phpau_matchs.id_equipe_dom!='913028'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>BE BE BE BE BE BEB EB BE BE BE BE </b></font> 
</p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif">
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ<'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{    
		 	echo "$row[7]"."<br>";
			}
		echo "<br><br>";
?>
        </font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ<'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ<'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and
 phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ<'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'190'and phpbe_journees.id_champ>'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{    
		 	echo "$row[7]"."<br>";
			}
		echo "<br><br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'190'and phpbe_journees.id_champ>'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'190'and phpbe_journees.id_champ>'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'190' and phpbe_journees.id_champ>'180'and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and
 phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'190'and phpbe_journees.id_champ>'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'200'and phpbe_journees.id_champ>'190' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
      
			{    
		 	echo "$row[7]"."<br>";
			}
		echo "<br><br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'200'and phpbe_journees.id_champ>'190' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'200'and phpbe_journees.id_champ>'190' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'200' and phpbe_journees.id_champ>'190'and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and
 phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'200'and phpbe_journees.id_champ>'190' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'210'and phpbe_journees.id_champ>'200' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL 
and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{    
		 	echo "$row[7]"."<br>";
			}
		echo "<br><br>";


?>
        <b> </b></font></font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'210'and phpbe_journees.id_champ>'200' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'210'and phpbe_journees.id_champ>'200' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and  phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500' and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'210' and phpbe_journees.id_champ>'200'and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and
 phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'210'and phpbe_journees.id_champ>'200' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'230'and phpbe_journees.id_champ>'210' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{    
		 	echo "$row[7]"."<br>";
			}
		echo "<br><br>";


?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'230'and phpbe_journees.id_champ>'210' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'230'and phpbe_journees.id_champ>'210' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'230' and phpbe_journees.id_champ>'210'and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_ext and
 phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'230'and phpbe_journees.id_champ>'210' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24" valign="top"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font face="Arial, Helvetica, sans-serif">
       </font></font><font size="3" face="Arial, Helvetica, sans-serif">
	    <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ>'270' and (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'and phpbe_matchs.id_equipe_ext != '914020' and phpbe_matchs.id_equipe_dom != '914020'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{    
		 	echo "$row[7]"."<br>";
			}
		echo "<br><br>";
?>
        </font></font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ>'270' and (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'and phpbe_matchs.id_equipe_ext != '914020' and phpbe_matchs.id_equipe_dom != '914020'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ>'270' and (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'and phpbe_matchs.id_equipe_ext != '914020' and phpbe_matchs.id_equipe_dom != '914020'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ>'270' and phpbe_clubs.id+900000=phpbe_matchs.id_equipe_ext and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id+900000=phpbe_matchs.id_equipe_ext and
 phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'and phpbe_matchs.id_equipe_ext != '914020' and phpbe_matchs.id_equipe_dom != '914020'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ>'270' and (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'and phpbe_matchs.id_equipe_ext != '914020' and phpbe_matchs.id_equipe_dom != '914020'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp; 
<p align="center"><font size="7"><b>BG BG BG BGB BG BG BG BG BG BG BG</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">15054</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500' and phpbg_matchs.id_equipe_dom!='15054' and phpbg_matchs.id_equipe_ext!='15054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'and phpbg_matchs.id_equipe_dom!='15054' and phpbg_matchs.id_equipe_ext!='15054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'and phpbg_matchs.id_equipe_dom!='15054' and phpbg_matchs.id_equipe_ext!='15054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and
 phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'and phpbg_matchs.id_equipe_dom!='15054' and phpbg_matchs.id_equipe_ext!='15054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'and phpbg_matchs.id_equipe_dom!='15054' and phpbg_matchs.id_equipe_ext!='15054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'190'and phpbg_journees.id_champ>'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'190'and phpbg_journees.id_champ>'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'190'and phpbg_journees.id_champ>'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'190' and phpbg_journees.id_champ>'180'and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and
 phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'190'and phpbg_journees.id_champ>'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'200'and phpbg_journees.id_champ>'190' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'200'and phpbg_journees.id_champ>'190' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'200'and phpbg_journees.id_champ>'190' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'200' and phpbg_journees.id_champ>'190'and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and
 phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'200'and phpbg_journees.id_champ>'190' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'210'and phpbg_journees.id_champ>'200' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'210'and phpbg_journees.id_champ>'200' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'210'and phpbg_journees.id_champ>'200' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and  phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500' and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'210' and phpbg_journees.id_champ>'200'and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and
 phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'210'and phpbg_journees.id_champ>'200' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">15013</font></b></td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500' and phpbg_matchs.id_equipe_dom!='15013' and phpbg_matchs.id_equipe_ext!='15013'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500' and phpbg_matchs.id_equipe_dom!='15013' and phpbg_matchs.id_equipe_ext!='15013'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500' and phpbg_matchs.id_equipe_dom!='15013' and phpbg_matchs.id_equipe_ext!='15013'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230' and phpbg_journees.id_champ>'210'and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_ext and
 phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500' and phpbg_matchs.id_equipe_dom!='15013' and phpbg_matchs.id_equipe_ext!='15013'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500' and phpbg_matchs.id_equipe_dom!='15013' and phpbg_matchs.id_equipe_ext!='15013'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">915054</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ>'270' and (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'and phpbg_matchs.id_equipe_dom!='915054' and phpbg_matchs.id_equipe_ext!='915054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ>'270' and (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_dom!='915054' and phpbg_matchs.id_equipe_ext!='915054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ>'270' and (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'and phpbg_matchs.id_equipe_dom!='915054' and phpbg_matchs.id_equipe_ext!='915054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ>'270' and phpbg_clubs.id+900000=phpbg_matchs.id_equipe_ext and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id+900000=phpbg_matchs.id_equipe_ext and
 phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'and phpbg_matchs.id_equipe_dom!='915054' and phpbg_matchs.id_equipe_ext!='915054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ>'270' and (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_dom!='915054' and phpbg_matchs.id_equipe_ext!='915054'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>CA CA CA CA CA CA CA CA CA AC CA</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ<'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ<'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ<'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'180' and phpca_clubs.id=phpca_matchs.id_equipe_ext and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_ext and
 phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ<'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'190'and phpca_journees.id_champ>'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'190'and phpca_journees.id_champ>'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'190'and phpca_journees.id_champ>'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'190' and phpca_journees.id_champ>'180'and phpca_clubs.id=phpca_matchs.id_equipe_ext and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_ext and
 phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'190'and phpca_journees.id_champ>'180' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'200'and phpca_journees.id_champ>'190' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'200'and phpca_journees.id_champ>'190' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'200'and phpca_journees.id_champ>'190' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'200' and phpca_journees.id_champ>'190'and phpca_clubs.id=phpca_matchs.id_equipe_ext and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_ext and
 phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'200'and phpca_journees.id_champ>'190' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'210'and phpca_journees.id_champ>'200' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'210'and phpca_journees.id_champ>'200' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'210'and phpca_journees.id_champ>'200' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and  phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500' and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'210' and phpca_journees.id_champ>'200'and phpca_clubs.id=phpca_matchs.id_equipe_ext and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_ext and
 phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'210'and phpca_journees.id_champ>'200' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'230'and phpca_journees.id_champ>'210' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'230'and phpca_journees.id_champ>'210' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'230'and phpca_journees.id_champ>'210' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'230' and phpca_journees.id_champ>'210'and phpca_clubs.id=phpca_matchs.id_equipe_ext and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_ext and
 phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ<'230'and phpca_journees.id_champ>'210' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '20500' and phpca_matchs.id_equipe_ext < '20500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ>'270' and (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and
 (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '920500' and phpca_matchs.id_equipe_ext < '920500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ>'270' and (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and
 (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '920500' and phpca_matchs.id_equipe_ext < '920500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ>'270' and (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and
 (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '920500' and phpca_matchs.id_equipe_ext < '920500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE  phpca_journees.id_champ>'270' and phpca_clubs.id+900000=phpca_matchs.id_equipe_ext and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and phpca_clubs.id+900000=phpca_matchs.id_equipe_ext and
 phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '920500' and phpca_matchs.id_equipe_ext < '920500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpca_matchs.id_equipe_dom, phpca_matchs.id_equipe_ext, phpca_matchs.id_journee, phpca_matchs.date_reelle, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_journees.date_prevue, phpca_journees.id_champ, phpca_clubs.nom, phpca_clubs.id FROM  phpca_matchs, phpca_journees, phpca_clubs WHERE phpca_journees.id_champ>'270' and (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.id_journee= phpca_journees.id and phpca_matchs.date_reelle < '$ma_date' and
 (phpca_clubs.id + 900000)=phpca_matchs.id_equipe_dom and phpca_matchs.buts_dom is NULL and phpca_matchs.buts_ext is NULL and phpca_matchs.id_equipe_dom < '920500' and phpca_matchs.id_equipe_ext < '920500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>CBL CBL CBL CBL CB L CBL CBL CBL </b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190' and phpcbl_journees.id_champ>'180'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200' and phpcbl_journees.id_champ>'190'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and  phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500' and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210' and phpcbl_journees.id_champ>'200'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230' and phpcbl_journees.id_champ>'210'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '19500' and phpcbl_matchs.id_equipe_ext < '19500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '919500' and phpcbl_matchs.id_equipe_ext < '919500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '919500' and phpcbl_matchs.id_equipe_ext < '919500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '919500' and phpcbl_matchs.id_equipe_ext < '919500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ>'270' and phpcbl_clubs.id+900000=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and phpcbl_clubs.id+900000=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '919500' and phpcbl_matchs.id_equipe_ext < '919500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle < '$ma_date' and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL and phpcbl_matchs.id_equipe_dom < '919500' and phpcbl_matchs.id_equipe_ext < '919500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>CE CE CE CE CE CEC CE CE CE CE CE</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ<'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ<'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ<'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'180' and phpce_clubs.id=phpce_matchs.id_equipe_ext and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_ext and
 phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ<'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'190'and phpce_journees.id_champ>'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'190'and phpce_journees.id_champ>'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'190'and phpce_journees.id_champ>'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'190' and phpce_journees.id_champ>'180'and phpce_clubs.id=phpce_matchs.id_equipe_ext and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_ext and
 phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'190'and phpce_journees.id_champ>'180' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'200'and phpce_journees.id_champ>'190' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'200'and phpce_journees.id_champ>'190' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'200'and phpce_journees.id_champ>'190' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'200' and phpce_journees.id_champ>'190'and phpce_clubs.id=phpce_matchs.id_equipe_ext and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_ext and
 phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'200'and phpce_journees.id_champ>'190' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'210'and phpce_journees.id_champ>'200' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'210'and phpce_journees.id_champ>'200' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'210'and phpce_journees.id_champ>'200' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and  phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500' and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'210' and phpce_journees.id_champ>'200'and phpce_clubs.id=phpce_matchs.id_equipe_ext and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_ext and
 phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'210'and phpce_journees.id_champ>'200' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'230'and phpce_journees.id_champ>'210' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'230'and phpce_journees.id_champ>'210' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'230'and phpce_journees.id_champ>'210' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'230' and phpce_journees.id_champ>'210'and phpce_clubs.id=phpce_matchs.id_equipe_ext and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_ext and
 phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ<'230'and phpce_journees.id_champ>'210' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '17500' and phpce_matchs.id_equipe_ext < '17500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ>'270' and (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and
 (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '917500' and phpce_matchs.id_equipe_ext < '917500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ>'270' and (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and
 (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '917500' and phpce_matchs.id_equipe_ext < '917500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ>'270' and (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and
 (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '917500' and phpce_matchs.id_equipe_ext < '917500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE  phpce_journees.id_champ>'270' and phpce_clubs.id+900000=phpce_matchs.id_equipe_ext and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and phpce_clubs.id+900000=phpce_matchs.id_equipe_ext and
 phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '917500' and phpce_matchs.id_equipe_ext < '917500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpce_matchs.id_equipe_dom, phpce_matchs.id_equipe_ext, phpce_matchs.id_journee, phpce_matchs.date_reelle, phpce_matchs.buts_dom, phpce_matchs.buts_ext, phpce_journees.date_prevue, phpce_journees.id_champ, phpce_clubs.nom, phpce_clubs.id FROM  phpce_matchs, phpce_journees, phpce_clubs WHERE phpce_journees.id_champ>'270' and (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.id_journee= phpce_journees.id and phpce_matchs.date_reelle < '$ma_date' and
 (phpce_clubs.id + 900000)=phpce_matchs.id_equipe_dom and phpce_matchs.buts_dom is NULL and phpce_matchs.buts_ext is NULL and phpce_matchs.id_equipe_dom < '917500' and phpce_matchs.id_equipe_ext < '917500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>FL FL FL FL FL FL FL FLF LF FL FL FL</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ<'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ<'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ<'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and
 phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ<'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000"><b></b></td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'190'and phpfl_journees.id_champ>'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'190'and phpfl_journees.id_champ>'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'190'and phpfl_journees.id_champ>'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'190' and phpfl_journees.id_champ>'180'and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and
 phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'190'and phpfl_journees.id_champ>'180' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">23016</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500' and phpfl_matchs.id_equipe_dom!='23016' and phpfl_matchs.id_equipe_ext!='23016'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500' and phpfl_matchs.id_equipe_dom!='23016' and phpfl_matchs.id_equipe_ext!='23016'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500' and phpfl_matchs.id_equipe_dom!='23016' and phpfl_matchs.id_equipe_ext!='23016'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200' and phpfl_journees.id_champ>'190'and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and
 phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500' and phpfl_matchs.id_equipe_dom!='23016' and phpfl_matchs.id_equipe_ext!='23016'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500' and phpfl_matchs.id_equipe_dom!='23016' and phpfl_matchs.id_equipe_ext!='23016'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'210'and phpfl_journees.id_champ>'200' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'210'and phpfl_journees.id_champ>'200' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'210'and phpfl_journees.id_champ>'200' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and  phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500' and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'210' and phpfl_journees.id_champ>'200'and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and
 phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'210'and phpfl_journees.id_champ>'200' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'230'and phpfl_journees.id_champ>'210' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'230'and phpfl_journees.id_champ>'210' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'230'and phpfl_journees.id_champ>'210' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'230' and phpfl_journees.id_champ>'210'and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_ext and
 phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'230'and phpfl_journees.id_champ>'210' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000"><b></b></td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ>'270' and (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and
 (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '923500' and phpfl_matchs.id_equipe_ext < '923500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ>'270' and (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and
 (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '923500' and phpfl_matchs.id_equipe_ext < '923500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ>'270' and (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and
 (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '923500' and phpfl_matchs.id_equipe_ext < '923500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ>'270' and phpfl_clubs.id+900000=phpfl_matchs.id_equipe_ext and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id+900000=phpfl_matchs.id_equipe_ext and
 phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '923500' and phpfl_matchs.id_equipe_ext < '923500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE phpfl_journees.id_champ>'270' and (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and
 (phpfl_clubs.id + 900000)=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '923500' and phpfl_matchs.id_equipe_ext < '923500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>IDF IDF IDF IDF IDF IDF IDF IDF IDF</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom !='25184' and phpidf_matchs.id_equipe_ext !='25184'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom !='25184' and phpidf_matchs.id_equipe_ext !='25184'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom !='25184' and phpidf_matchs.id_equipe_ext !='25184'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and
 phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom !='25184' and phpidf_matchs.id_equipe_ext!='25184'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom !='25184' and phpidf_matchs.id_equipe_ext !='25184'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">25067 
        - 25039</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'and phpidf_matchs.id_equipe_dom!='25067' and phpidf_matchs.id_equipe_ext!='25067' 
and phpidf_matchs.id_equipe_dom!='25039' and phpidf_matchs.id_equipe_ext!='25039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25067' and phpidf_matchs.id_equipe_ext!='25067'
and phpidf_matchs.id_equipe_dom!='25039' and phpidf_matchs.id_equipe_ext!='25039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25067' and phpidf_matchs.id_equipe_ext!='25067'
and phpidf_matchs.id_equipe_dom!='25039' and phpidf_matchs.id_equipe_ext!='25039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> </font><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif">
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190' and phpidf_journees.id_champ>'180'and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and
 phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25067' and phpidf_matchs.id_equipe_ext!='25067'
 and phpidf_matchs.id_equipe_dom!='25039' and phpidf_matchs.id_equipe_ext!='25039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25067' and phpidf_matchs.id_equipe_ext!='25067'
and phpidf_matchs.id_equipe_dom!='25039' and phpidf_matchs.id_equipe_ext!='25039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">25002</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25002' and phpidf_matchs.id_equipe_ext!='25002'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25002' and phpidf_matchs.id_equipe_ext!='25002'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25002' and phpidf_matchs.id_equipe_ext!='25002'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200' and phpidf_journees.id_champ>'190'and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and
 phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25002' and phpidf_matchs.id_equipe_ext!='25002'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.id_equipe_dom!='25002' and phpidf_matchs.id_equipe_ext!='25002'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'210'and phpidf_journees.id_champ>'200' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'210'and phpidf_journees.id_champ>'200' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'210'and phpidf_journees.id_champ>'200' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and  phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500' and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'210' and phpidf_journees.id_champ>'200'and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and
 phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'210'and phpidf_journees.id_champ>'200' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'230'and phpidf_journees.id_champ>'210' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'230'and phpidf_journees.id_champ>'210' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'230'and phpidf_journees.id_champ>'210' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'230' and phpidf_journees.id_champ>'210'and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and
 phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'230'and phpidf_journees.id_champ>'210' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">925067 
        - 925039 </font></b></td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ>'270' and (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom != '925067' and phpidf_matchs.id_equipe_ext != '925067'
 and phpidf_matchs.id_equipe_dom != '925039' and phpidf_matchs.id_equipe_ext != '925039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ>'270' and (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom != '925067' and phpidf_matchs.id_equipe_ext != '925067'
 and phpidf_matchs.id_equipe_dom != '925039' and phpidf_matchs.id_equipe_ext != '925039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ>'270' and (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom != '925067' and phpidf_matchs.id_equipe_ext != '925067'
 and phpidf_matchs.id_equipe_dom != '925039' and phpidf_matchs.id_equipe_ext != '925039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ>'270' and (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_ext and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_ext and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom != '925067' and phpidf_matchs.id_equipe_ext != '925067'
 and phpidf_matchs.id_equipe_dom != '925039' and phpidf_matchs.id_equipe_ext != '925039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php echo "-";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif">
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ>'270' and (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom != '925067' and phpidf_matchs.id_equipe_ext != '925067'
 and phpidf_matchs.id_equipe_dom != '925039' and phpidf_matchs.id_equipe_ext != '925039'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></b></font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>LD LD LD LDL LD LD LD LD LD LD LD </b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ<'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ<'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ<'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'180' and phpld_clubs.id=phpld_matchs.id_equipe_ext and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_ext and
 phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ<'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">26020</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500' and phpld_matchs.id_equipe_ext!='26020 and phpld_matchs.id_equipe_dom!='26020"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500' and phpld_matchs.id_equipe_ext!='26020 and phpld_matchs.id_equipe_dom!='26020"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500' and phpld_matchs.id_equipe_ext!='26020 and phpld_matchs.id_equipe_dom!='26020"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190' and phpld_journees.id_champ>'180'and phpld_clubs.id=phpld_matchs.id_equipe_ext and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_ext and
 phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500' and phpld_matchs.id_equipe_ext!='26020 and phpld_matchs.id_equipe_dom!='26020"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500' and phpld_matchs.id_equipe_ext!='26020 and phpld_matchs.id_equipe_dom!='26020"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'200'and phpld_journees.id_champ>'190' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'200'and phpld_journees.id_champ>'190' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'200'and phpld_journees.id_champ>'190' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'200' and phpld_journees.id_champ>'190'and phpld_clubs.id=phpld_matchs.id_equipe_ext and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_ext and
 phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'200'and phpld_journees.id_champ>'190' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'210'and phpld_journees.id_champ>'200' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'210'and phpld_journees.id_champ>'200' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'210'and phpld_journees.id_champ>'200' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and  phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500' and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'210' and phpld_journees.id_champ>'200'and phpld_clubs.id=phpld_matchs.id_equipe_ext and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_ext and
 phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'210'and phpld_journees.id_champ>'200' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'230'and phpld_journees.id_champ>'210' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'230'and phpld_journees.id_champ>'210' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'230'and phpld_journees.id_champ>'210' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'230' and phpld_journees.id_champ>'210'and phpld_clubs.id=phpld_matchs.id_equipe_ext and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_ext and
 phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'230'and phpld_journees.id_champ>'210' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ>'270' and (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and
 (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '926500' and phpld_matchs.id_equipe_ext < '926500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ>'270' and (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and
 (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '926500' and phpld_matchs.id_equipe_ext < '926500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ>'270' and (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and
 (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '926500' and phpld_matchs.id_equipe_ext < '926500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ>'270' and phpld_clubs.id+900000=phpld_matchs.id_equipe_ext and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id+900000=phpld_matchs.id_equipe_ext and
 phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '926500' and phpld_matchs.id_equipe_ext < '926500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE phpld_journees.id_champ>'270' and (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and
 (phpld_clubs.id + 900000)=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '926500' and phpld_matchs.id_equipe_ext < '926500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>LM LM LM LM LM LM LM LM LM LM</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ<'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ<'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ<'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'180' and phplm_clubs.id=phplm_matchs.id_equipe_ext and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_ext and
 phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ<'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'190'and phplm_journees.id_champ>'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'190'and phplm_journees.id_champ>'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'190'and phplm_journees.id_champ>'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'190' and phplm_journees.id_champ>'180'and phplm_clubs.id=phplm_matchs.id_equipe_ext and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_ext and
 phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'190'and phplm_journees.id_champ>'180' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'200'and phplm_journees.id_champ>'190' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'200'and phplm_journees.id_champ>'190' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'200'and phplm_journees.id_champ>'190' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'200' and phplm_journees.id_champ>'190'and phplm_clubs.id=phplm_matchs.id_equipe_ext and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_ext and
 phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'200'and phplm_journees.id_champ>'190' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'210'and phplm_journees.id_champ>'200' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'210'and phplm_journees.id_champ>'200' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'210'and phplm_journees.id_champ>'200' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and  phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500' and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'210' and phplm_journees.id_champ>'200'and phplm_clubs.id=phplm_matchs.id_equipe_ext and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_ext and
 phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'210'and phplm_journees.id_champ>'200' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'230'and phplm_journees.id_champ>'210' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'230'and phplm_journees.id_champ>'210' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'230'and phplm_journees.id_champ>'210' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'230' and phplm_journees.id_champ>'210'and phplm_clubs.id=phplm_matchs.id_equipe_ext and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_ext and
 phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ<'230'and phplm_journees.id_champ>'210' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '27500' and phplm_matchs.id_equipe_ext < '27500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ>'270' and (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and
 (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '927500' and phplm_matchs.id_equipe_ext < '927500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ>'270' and (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and
 (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '927500' and phplm_matchs.id_equipe_ext < '927500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ>'270' and (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and
 (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '927500' and phplm_matchs.id_equipe_ext < '927500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE  phplm_journees.id_champ>'270' and phplm_clubs.id+900000=phplm_matchs.id_equipe_ext and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and phplm_clubs.id+900000=phplm_matchs.id_equipe_ext and
 phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '927500' and phplm_matchs.id_equipe_ext < '927500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phplm_matchs.id_equipe_dom, phplm_matchs.id_equipe_ext, phplm_matchs.id_journee, phplm_matchs.date_reelle, phplm_matchs.buts_dom, phplm_matchs.buts_ext, phplm_journees.date_prevue, phplm_journees.id_champ, phplm_clubs.nom, phplm_clubs.id FROM  phplm_matchs, phplm_journees, phplm_clubs WHERE phplm_journees.id_champ>'270' and (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.id_journee= phplm_journees.id and phplm_matchs.date_reelle < '$ma_date' and
 (phplm_clubs.id + 900000)=phplm_matchs.id_equipe_dom and phplm_matchs.buts_dom is NULL and phplm_matchs.buts_ext is NULL and phplm_matchs.id_equipe_dom < '927500' and phplm_matchs.id_equipe_ext < '927500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>LY AP DA LY AP DALY AP DA</b></font></p>
<div align="center">

  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif" size="3">22503</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500' and phply_matchs.id_equipe_ext!=22503 and phply_matchs.id_equipe_dom!=22503"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500' and phply_matchs.id_equipe_ext!='22503 and phply_matchs.id_equipe_dom!='22503"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500' and phply_matchs.id_equipe_ext!='22503 and phply_matchs.id_equipe_dom!='22503"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_ext and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_ext and
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500' and phply_matchs.id_equipe_ext!='22503 and phply_matchs.id_equipe_dom!='22503"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500' and phply_matchs.id_equipe_ext!='22503 and phply_matchs.id_equipe_dom!='22503"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190' and phply_journees.id_champ>'180'and phply_clubs.id=phply_matchs.id_equipe_ext and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_ext and
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200' and phply_journees.id_champ>'190'and phply_clubs.id=phply_matchs.id_equipe_ext and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_ext and
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
		//$lyExempt=28503;
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '28051' and phply_matchs.id_equipe_ext != '28051'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '28051' and phply_matchs.id_equipe_ext != '28051'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and  phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500' and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '28051' and phply_matchs.id_equipe_ext != '28051'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210' and phply_journees.id_champ>'200'and phply_clubs.id=phply_matchs.id_equipe_ext and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_ext and
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '28051' and phply_matchs.id_equipe_ext != '28051'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'and phply_matchs.id_equipe_dom != '28051' and phply_matchs.id_equipe_ext != '28051'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">10502-10043</font></b></td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
		$lyExempt1=28503;
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' 
and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL 
and phply_matchs.id_equipe_ext!=10502 and phply_matchs.id_equipe_dom!=10502
and phply_matchs.id_equipe_ext!=10043 and phply_matchs.id_equipe_dom!=10043
and phply_matchs.id_equipe_ext!=$lyExempt1 and phply_matchs.id_equipe_dom!=$lyExempt1
"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_ext!=10502 and phply_matchs.id_equipe_dom!=10502
and phply_matchs.id_equipe_ext!=10043 and phply_matchs.id_equipe_dom!=10043
and phply_matchs.id_equipe_ext!=$lyExempt1 and phply_matchs.id_equipe_dom!=$lyExempt1
"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_ext!=10502 and phply_matchs.id_equipe_dom!=10502
and phply_matchs.id_equipe_ext!=10043 and phply_matchs.id_equipe_dom!=10043
and phply_matchs.id_equipe_ext!=$lyExempt1 and phply_matchs.id_equipe_dom!=$lyExempt1"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230' and phply_journees.id_champ>'210'and phply_clubs.id=phply_matchs.id_equipe_ext and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_ext and
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL 
 and phply_matchs.id_equipe_ext!=10502 and phply_matchs.id_equipe_dom!=10502
 and phply_matchs.id_equipe_ext!=10043 and phply_matchs.id_equipe_dom!=10043
 and phply_matchs.id_equipe_ext!=$lyExempt1 and phply_matchs.id_equipe_dom!=$lyExempt1"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_ext!=10502 and phply_matchs.id_equipe_dom!=10502
and phply_matchs.id_equipe_ext!=10043 and phply_matchs.id_equipe_dom!=10043
and phply_matchs.id_equipe_ext!=$lyExempt1 and phply_matchs.id_equipe_dom!=$lyExempt1"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000"><b><font size="3" face="Arial, Helvetica, sans-serif">922503</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_ext!=922503 and phply_matchs.id_equipe_dom!=922503 ORDER BY phply_matchs.id_journee"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3"><font face="Arial, Helvetica, sans-serif">
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_ext!=922503 and phply_matchs.id_equipe_dom!=922503 ORDER BY phply_matchs.id_journee"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font><font face="Arial, Helvetica, sans-serif">
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.id_equipe_ext!=922503 and phply_matchs.id_equipe_dom!=922503 ORDER BY phply_matchs.id_journee"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ>'270' and phply_clubs.id+900000=phply_matchs.id_equipe_ext and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id+900000=phply_matchs.id_equipe_ext and
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_ext!=922503 and phply_matchs.id_equipe_dom!=922503 ORDER BY phply_matchs.id_journee"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_ext!=922503 and phply_matchs.id_equipe_dom!=922503 ORDER BY phply_matchs.id_journee"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">LY LY <font size="7"></font>LY LY LYL YL</p>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>N N N N N N N N N N N N N N N N N N N</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ<'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ<'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ<'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'180' and phpn_clubs.id=phpn_matchs.id_equipe_ext and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_ext and
 phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ<'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'190'and phpn_journees.id_champ>'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'190'and phpn_journees.id_champ>'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'190'and phpn_journees.id_champ>'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'190' and phpn_journees.id_champ>'180'and phpn_clubs.id=phpn_matchs.id_equipe_ext and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_ext and
 phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'190'and phpn_journees.id_champ>'180' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'200'and phpn_journees.id_champ>'190' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'200'and phpn_journees.id_champ>'190' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'200'and phpn_journees.id_champ>'190' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'200' and phpn_journees.id_champ>'190'and phpn_clubs.id=phpn_matchs.id_equipe_ext and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_ext and
 phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'200'and phpn_journees.id_champ>'190' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'210'and phpn_journees.id_champ>'200' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'210'and phpn_journees.id_champ>'200' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'210'and phpn_journees.id_champ>'200' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and  phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500' and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'210' and phpn_journees.id_champ>'200'and phpn_clubs.id=phpn_matchs.id_equipe_ext and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_ext and
 phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'210'and phpn_journees.id_champ>'200' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'230'and phpn_journees.id_champ>'210' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'230'and phpn_journees.id_champ>'210' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'230'and phpn_journees.id_champ>'210' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'230' and phpn_journees.id_champ>'210'and phpn_clubs.id=phpn_matchs.id_equipe_ext and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_ext and
 phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ<'230'and phpn_journees.id_champ>'210' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '30500' and phpn_matchs.id_equipe_ext < '30500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ>'270' and (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and
 (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '930500' and phpn_matchs.id_equipe_ext < '930500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ>'270' and (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and
 (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '930500' and phpn_matchs.id_equipe_ext < '930500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ>'270' and (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and
 (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '930500' and phpn_matchs.id_equipe_ext < '930500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE  phpn_journees.id_champ>'270' and phpn_clubs.id+900000=phpn_matchs.id_equipe_ext and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and phpn_clubs.id+900000=phpn_matchs.id_equipe_ext and
 phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '930500' and phpn_matchs.id_equipe_ext < '930500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpn_matchs.id_equipe_dom, phpn_matchs.id_equipe_ext, phpn_matchs.id_journee, phpn_matchs.date_reelle, phpn_matchs.buts_dom, phpn_matchs.buts_ext, phpn_journees.date_prevue, phpn_journees.id_champ, phpn_clubs.nom, phpn_clubs.id FROM  phpn_matchs, phpn_journees, phpn_clubs WHERE phpn_journees.id_champ>'270' and (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.id_journee= phpn_journees.id and phpn_matchs.date_reelle < '$ma_date' and
 (phpn_clubs.id + 900000)=phpn_matchs.id_equipe_dom and phpn_matchs.buts_dom is NULL and phpn_matchs.buts_ext is NULL and phpn_matchs.id_equipe_dom < '930500' and phpn_matchs.id_equipe_ext < '930500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>PA PA PA PA PA PA PA PA PA PA PA </b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ<'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ<'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ<'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'180' and phppa_clubs.id=phppa_matchs.id_equipe_ext and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_ext and
 phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ<'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'190'and phppa_journees.id_champ>'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'190'and phppa_journees.id_champ>'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'190'and phppa_journees.id_champ>'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'190' and phppa_journees.id_champ>'180'and phppa_clubs.id=phppa_matchs.id_equipe_ext and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_ext and
 phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'190'and phppa_journees.id_champ>'180' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'200'and phppa_journees.id_champ>'190' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'200'and phppa_journees.id_champ>'190' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'200'and phppa_journees.id_champ>'190' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'200' and phppa_journees.id_champ>'190'and phppa_clubs.id=phppa_matchs.id_equipe_ext and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_ext and
 phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'200'and phppa_journees.id_champ>'190' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'210'and phppa_journees.id_champ>'200' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'210'and phppa_journees.id_champ>'200' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'210'and phppa_journees.id_champ>'200' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and  phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500' and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'210' and phppa_journees.id_champ>'200'and phppa_clubs.id=phppa_matchs.id_equipe_ext and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_ext and
 phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'210'and phppa_journees.id_champ>'200' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'230'and phppa_journees.id_champ>'210' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'230'and phppa_journees.id_champ>'210' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'230'and phppa_journees.id_champ>'210' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'230' and phppa_journees.id_champ>'210'and phppa_clubs.id=phppa_matchs.id_equipe_ext and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_ext and
 phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ<'230'and phppa_journees.id_champ>'210' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '32500' and phppa_matchs.id_equipe_ext < '32500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ>'270' and (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and
 (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '932500' and phppa_matchs.id_equipe_ext < '932500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ>'270' and (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and
 (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '932500' and phppa_matchs.id_equipe_ext < '932500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ>'270' and (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and
 (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '932500' and phppa_matchs.id_equipe_ext < '932500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE  phppa_journees.id_champ>'270' and phppa_clubs.id+900000=phppa_matchs.id_equipe_ext and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and phppa_clubs.id+900000=phppa_matchs.id_equipe_ext and
 phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '932500' and phppa_matchs.id_equipe_ext < '932500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppa_matchs.id_equipe_dom, phppa_matchs.id_equipe_ext, phppa_matchs.id_journee, phppa_matchs.date_reelle, phppa_matchs.buts_dom, phppa_matchs.buts_ext, phppa_journees.date_prevue, phppa_journees.id_champ, phppa_clubs.nom, phppa_clubs.id FROM  phppa_matchs, phppa_journees, phppa_clubs WHERE phppa_journees.id_champ>'270' and (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.id_journee= phppa_journees.id and phppa_matchs.date_reelle < '$ma_date' and
 (phppa_clubs.id + 900000)=phppa_matchs.id_equipe_dom and phppa_matchs.buts_dom is NULL and phppa_matchs.buts_ext is NULL and phppa_matchs.id_equipe_dom < '932500' and phppa_matchs.id_equipe_ext < '932500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>PC PC PC PC PC PC PC PC PC PC PC</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ<'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ<'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ<'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'180' and phpr_clubs.id=phpr_matchs.id_equipe_ext and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_ext and
 phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ<'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'190'and phpr_journees.id_champ>'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'190'and phpr_journees.id_champ>'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'190'and phpr_journees.id_champ>'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'190' and phpr_journees.id_champ>'180'and phpr_clubs.id=phpr_matchs.id_equipe_ext and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_ext and
 phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'190'and phpr_journees.id_champ>'180' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'200'and phpr_journees.id_champ>'190' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'200'and phpr_journees.id_champ>'190' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'200'and phpr_journees.id_champ>'190' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'200' and phpr_journees.id_champ>'190'and phpr_clubs.id=phpr_matchs.id_equipe_ext and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_ext and
 phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'200'and phpr_journees.id_champ>'190' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'210'and phpr_journees.id_champ>'200' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'210'and phpr_journees.id_champ>'200' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'210'and phpr_journees.id_champ>'200' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and  phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500' and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'210' and phpr_journees.id_champ>'200'and phpr_clubs.id=phpr_matchs.id_equipe_ext and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_ext and
 phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'210'and phpr_journees.id_champ>'200' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'230'and phpr_journees.id_champ>'210' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'230'and phpr_journees.id_champ>'210' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'230'and phpr_journees.id_champ>'210' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'230' and phpr_journees.id_champ>'210'and phpr_clubs.id=phpr_matchs.id_equipe_ext and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_ext and
 phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ<'230'and phpr_journees.id_champ>'210' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '35500' and phpr_matchs.id_equipe_ext < '35500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ>'270' and (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and
 (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '935500' and phpr_matchs.id_equipe_ext < '935500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ>'270' and (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and
 (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '935500' and phpr_matchs.id_equipe_ext < '935500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ>'270' and (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and
 (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '935500' and phpr_matchs.id_equipe_ext < '935500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE  phpr_journees.id_champ>'270' and phpr_clubs.id+900000=phpr_matchs.id_equipe_ext and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and phpr_clubs.id+900000=phpr_matchs.id_equipe_ext and
 phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '935500' and phpr_matchs.id_equipe_ext < '935500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpr_matchs.id_equipe_dom, phpr_matchs.id_equipe_ext, phpr_matchs.id_journee, phpr_matchs.date_reelle, phpr_matchs.buts_dom, phpr_matchs.buts_ext, phpr_journees.date_prevue, phpr_journees.id_champ, phpr_clubs.nom, phpr_clubs.id FROM  phpr_matchs, phpr_journees, phpr_clubs WHERE phpr_journees.id_champ>'270' and (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.id_journee= phpr_journees.id and phpr_matchs.date_reelle < '$ma_date' and
 (phpr_clubs.id + 900000)=phpr_matchs.id_equipe_dom and phpr_matchs.buts_dom is NULL and phpr_matchs.buts_ext is NULL and phpr_matchs.id_equipe_dom < '935500' and phpr_matchs.id_equipe_ext < '935500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>PCH PCH PCH PCH PHCP PHPCH PCH</b></font></p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_H and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_H and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_H and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_H and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_H and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_PH and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_PH and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_PH and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_PH and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_PH and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_1 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_1 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_1 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_1 and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_1 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_2 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_2 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_2 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and  phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500' and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_2 and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_2 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie P1 <font color="#FF0000">-----<font color="#000000">/<font color="#FF0000">-</font></font><font color="#FF0000">-</font>-------</font> 
          3me S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_3 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_3 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_3 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_3 and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_3 and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie P2<font color="#FF0000">------</font><font size="5" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000"><font color="#000000">/</font></font></b></font><font color="#FF0000">---------</font> 
          4me S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'230'and phppch_journees.id_champ>'210' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'230'and phppch_journees.id_champ>'210' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'230'and phppch_journees.id_champ>'210' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'230' and phppch_journees.id_champ>'210'and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'230'and phppch_journees.id_champ>'210' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_RH and phppch_clubs.id+ $PCH_equipe2_H=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id+$PCH_equipe2_H=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_H)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_RH and phppch_clubs.id+ $PCH_equipe2_PH=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id+$PCH_equipe2_PH=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_PH)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_RH and phppch_clubs.id+ $PCH_equipe2_1=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id+$PCH_equipe2_1=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_1)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3"><font face="Arial, Helvetica, sans-serif">
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        </font></font></td>
      <td width="106" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ=$PCH_RH and phppch_clubs.id+ $PCH_equipe2_2=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id+$PCH_equipe2_2=phppch_matchs.id_equipe_ext and
 phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ=$PCH_RH and (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + $PCH_equipe2_2)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
    <tr> 
      <td width="106" height="24">&nbsp;</td>
      <td width="106" height="24">&nbsp;</td>
      <td width="167" height="24">&nbsp;</td>
      <td width="155" height="24">&nbsp;</td>
      <td width="152" height="24">&nbsp;</td>
    </tr>
  </table>
  <br>
  <br>
</div>
<p align="center"><font size="7"><b><font color="#FF0000">- - Base de Donn&eacute;es 
  n&deg;3 - - <br>
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
//echo date('d F Y');        // 11 October 2012
//echo date('d/m/Y');        // 11/10/12
?>
  </font></b></font></p>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>FED1 FED1 FED1 FED1 FED1 FED1 FED1</b></font></p>
<p align="center">&nbsp; </p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>F&eacute;d&eacute;rale 
          1 </b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">10501</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        </b></font><font size="3"><font face="Arial, Helvetica, sans-serif"> </font><font size="3"><font size="3"><font face="Arial, Helvetica, sans-serif">
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&eacute;lection de la base onepip

?>
        </font></font></font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '50000' and phpf1_matchs.id_equipe_ext < '50000'and phpf1_matchs.id_equipe_dom!='10501' and phpf1_matchs.id_equipe_ext!='10501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE  phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '34500' and phpf1_matchs.id_equipe_ext < '34500'and phpf1_matchs.id_equipe_dom!='10501' and phpf1_matchs.id_equipe_ext!='10501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE  phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '34500' and phpf1_matchs.id_equipe_ext < '34500'and phpf1_matchs.id_equipe_dom!='10501' and phpf1_matchs.id_equipe_ext!='10501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE   phpf1_clubs.id=phpf1_matchs.id_equipe_ext and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_clubs.id=phpf1_matchs.id_equipe_ext and
 phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '34500' and phpf1_matchs.id_equipe_ext < '34500'and phpf1_matchs.id_equipe_dom!='10501' and phpf1_matchs.id_equipe_ext!='10501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE  phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_clubs.id=phpf1_matchs.id_equipe_dom and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '34500' and phpf1_matchs.id_equipe_ext < '34500'and phpf1_matchs.id_equipe_dom!='10501' and phpf1_matchs.id_equipe_ext!='10501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Nationale 
          B </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE  (phpf1_clubs.id+900000)=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '999500' and phpf1_matchs.id_equipe_ext < '999500'and phpf1_matchs.id_equipe_dom!='910501' and phpf1_matchs.id_equipe_ext!='910501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE  (phpf1_clubs.id+900000)=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '999500' and phpf1_matchs.id_equipe_ext < '999500'and phpf1_matchs.id_equipe_dom!='910501' and phpf1_matchs.id_equipe_ext!='910501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          </b> </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
          </b></font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE  (phpf1_clubs.id+900000)=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '999500' and phpf1_matchs.id_equipe_ext < '999500'and phpf1_matchs.id_equipe_dom!='910501' and phpf1_matchs.id_equipe_ext!='910501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </b></font></font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE   (phpf1_clubs.id+900000)=phpf1_matchs.id_equipe_ext and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and
 phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '999500' and phpf1_matchs.id_equipe_ext < '999500'and phpf1_matchs.id_equipe_dom!='910501' and phpf1_matchs.id_equipe_ext!='910501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        </b></font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpf1_matchs.id_equipe_dom, phpf1_matchs.id_equipe_ext, phpf1_matchs.id_journee, phpf1_matchs.date_reelle, phpf1_matchs.buts_dom, phpf1_matchs.buts_ext, phpf1_journees.date_prevue, phpf1_journees.id_champ, phpf1_clubs.nom, phpf1_clubs.id FROM  phpf1_matchs, phpf1_journees, phpf1_clubs WHERE  (phpf1_clubs.id+900000)=phpf1_matchs.id_equipe_dom and phpf1_matchs.id_journee= phpf1_journees.id and phpf1_matchs.date_reelle < '$ma_date' and phpf1_matchs.buts_dom is NULL and phpf1_matchs.buts_ext is NULL and phpf1_matchs.id_equipe_dom < '999500' and phpf1_matchs.id_equipe_ext < '999500'and phpf1_matchs.id_equipe_dom!='910501' and phpf1_matchs.id_equipe_ext!='910501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font></font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>FED2 FED2 FED2 FED2 FED2 FED2 FED2</b></font></p>
<p align="center">&nbsp; </p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>F&eacute;d&eacute;rale 
          2 </b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">28050 
        -13041 </font></b></td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE phpfed2_journees.id_champ<'180' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '34500' and phpfed2_matchs.id_equipe_ext < '34500'and phpfed2_matchs.id_equipe_dom!='28050' and phpfed2_matchs.id_equipe_dom!='13041'and phpfed2_matchs.id_equipe_ext!='28050' and phpfed2_matchs.id_equipe_ext!='13041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE phpfed2_journees.id_champ<'180' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '34500' and phpfed2_matchs.id_equipe_ext < '34500'and phpfed2_matchs.id_equipe_dom!='28050' and phpfed2_matchs.id_equipe_dom!='13041'and phpfed2_matchs.id_equipe_ext!='28050' and phpfed2_matchs.id_equipe_ext!='13041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE phpfed2_journees.id_champ<'180' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '34500' and phpfed2_matchs.id_equipe_ext < '34500' and phpfed2_matchs.id_equipe_dom!='28050' and phpfed2_matchs.id_equipe_dom!='13041'and phpfed2_matchs.id_equipe_ext!='28050' and phpfed2_matchs.id_equipe_ext!='13041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE  phpfed2_journees.id_champ<'180' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_ext and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_ext and
 phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '34500' and phpfed2_matchs.id_equipe_dom!='28050' and phpfed2_matchs.id_equipe_dom!='13041'and phpfed2_matchs.id_equipe_ext!='28050' and phpfed2_matchs.id_equipe_ext!='13041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE phpfed2_journees.id_champ<'180' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_clubs.id=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '34500' and phpfed2_matchs.id_equipe_ext < '34500'and phpfed2_matchs.id_equipe_dom!='28050' and phpfed2_matchs.id_equipe_dom!='13041'and phpfed2_matchs.id_equipe_ext!='28050' and phpfed2_matchs.id_equipe_ext!='13041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>F&eacute;d&eacute;rale 
          B </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE  (phpfed2_clubs.id+900000)=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '999500' and phpfed2_matchs.id_equipe_ext < '999500'and phpfed2_matchs.id_equipe_dom!='928050' and phpfed2_matchs.id_equipe_dom!='913041'and phpfed2_matchs.id_equipe_ext!='928050' and phpfed2_matchs.id_equipe_ext!='913041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE  (phpfed2_clubs.id+900000)=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '999500' and phpfed2_matchs.id_equipe_ext < '999500'and phpfed2_matchs.id_equipe_dom!='928050' and phpfed2_matchs.id_equipe_dom!='913041'and phpfed2_matchs.id_equipe_ext!='928050' and phpfed2_matchs.id_equipe_ext!='913041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          </b> 
          <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE  (phpfed2_clubs.id+900000)=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '999500' and phpfed2_matchs.id_equipe_ext < '999500'and phpfed2_matchs.id_equipe_dom!='928050' and phpfed2_matchs.id_equipe_dom!='913041'and phpfed2_matchs.id_equipe_ext!='928050' and phpfed2_matchs.id_equipe_ext!='913041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <b> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE  (phpfed2_clubs.id+900000)=phpfed2_matchs.id_equipe_ext and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and
 phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '999500' and phpfed2_matchs.id_equipe_ext < '999500'and phpfed2_matchs.id_equipe_dom!='928050' and phpfed2_matchs.id_equipe_dom!='913041'and phpfed2_matchs.id_equipe_ext!='928050' and phpfed2_matchs.id_equipe_ext!='913041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed2_matchs.id_equipe_dom, phpfed2_matchs.id_equipe_ext, phpfed2_matchs.id_journee, phpfed2_matchs.date_reelle, phpfed2_matchs.buts_dom, phpfed2_matchs.buts_ext, phpfed2_journees.date_prevue, phpfed2_journees.id_champ, phpfed2_clubs.nom, phpfed2_clubs.id FROM  phpfed2_matchs, phpfed2_journees, phpfed2_clubs WHERE  (phpfed2_clubs.id+900000)=phpfed2_matchs.id_equipe_dom and phpfed2_matchs.id_journee= phpfed2_journees.id and phpfed2_matchs.date_reelle < '$ma_date' and phpfed2_matchs.buts_dom is NULL and phpfed2_matchs.buts_ext is NULL and phpfed2_matchs.id_equipe_dom < '999500' and phpfed2_matchs.id_equipe_ext < '999500' and phpfed2_matchs.id_equipe_dom != '28050'and phpfed2_matchs.id_equipe_dom!='928050' and phpfed2_matchs.id_equipe_dom!='913041'and phpfed2_matchs.id_equipe_ext!='928050' and phpfed2_matchs.id_equipe_ext!='913041'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>FED3 FED3 FED3 FED3 FED3 FED3 FED3</b></font></p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>F&eacute;d&eacute;rale 
          3 - Poule 1 &agrave; 8</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE phpfed3NE_journees.id_champ<'180' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '34500' and phpfed3NE_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE phpfed3NE_journees.id_champ<'180' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '34500' and phpfed3NE_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE phpfed3NE_journees.id_champ<'180' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '34500' and phpfed3NE_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE  phpfed3NE_journees.id_champ<'180' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_ext and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_ext and
 phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '34500' and phpfed3NE_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE phpfed3NE_journees.id_champ<'180' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_clubs.id=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '34500' and phpfed3NE_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Excellence 
          B - Poule 1 &agrave; 8</b></font><font size="5" face="Arial, Helvetica, sans-serif"></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE  (phpfed3NE_clubs.id+900000)=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '999500' and phpfed3NE_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE  (phpfed3NE_clubs.id+900000)=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '999500' and phpfed3NE_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          </b> 
          <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE  (phpfed3NE_clubs.id+900000)=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '999500' and phpfed3NE_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <b> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE  (phpfed3NE_clubs.id+900000)=phpfed3NE_matchs.id_equipe_ext and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date'  and
 phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '999500' and phpfed3NE_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3NE_matchs.id_equipe_dom, phpfed3NE_matchs.id_equipe_ext, phpfed3NE_matchs.id_journee, phpfed3NE_matchs.date_reelle, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, phpfed3NE_journees.id_champ, phpfed3NE_clubs.nom, phpfed3NE_clubs.id FROM  phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs WHERE  (phpfed3NE_clubs.id+900000)=phpfed3NE_matchs.id_equipe_dom and phpfed3NE_matchs.id_journee= phpfed3NE_journees.id and phpfed3NE_matchs.date_reelle < '$ma_date' and phpfed3NE_matchs.buts_dom is NULL and phpfed3NE_matchs.buts_ext is NULL and phpfed3NE_matchs.id_equipe_dom < '999500' and phpfed3NE_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>FED3 FED3 FED3 FED3 FED3 FED3</b></font></p>
<p align="center">&nbsp; </p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>F&eacute;d&eacute;rale 
          3 - Poule 9 &agrave; 16</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE phpfed3GS_journees.id_champ<'180' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '34500' and phpfed3GS_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE phpfed3GS_journees.id_champ<'180' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '34500' and phpfed3GS_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE phpfed3GS_journees.id_champ<'180' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '34500' and phpfed3GS_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE  phpfed3GS_journees.id_champ<'180' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_ext and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_ext and
 phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '34500' and phpfed3GS_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE phpfed3GS_journees.id_champ<'180' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_clubs.id=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '34500' and phpfed3GS_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Excellence 
          B - Poule 9 &agrave; 16</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE   (phpfed3GS_clubs.id+900000)=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '999500' and phpfed3GS_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE   (phpfed3GS_clubs.id+900000)=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '999500' and phpfed3GS_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          </b> 
          <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE   (phpfed3GS_clubs.id+900000)=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '999500' and phpfed3GS_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <b> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE   (phpfed3GS_clubs.id+900000)=phpfed3GS_matchs.id_equipe_ext and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and
 phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '999500' and phpfed3GS_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfed3GS_matchs.id_equipe_dom, phpfed3GS_matchs.id_equipe_ext, phpfed3GS_matchs.id_journee, phpfed3GS_matchs.date_reelle, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, phpfed3GS_journees.id_champ, phpfed3GS_clubs.nom, phpfed3GS_clubs.id FROM  phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs WHERE   (phpfed3GS_clubs.id+900000)=phpfed3GS_matchs.id_equipe_dom and phpfed3GS_matchs.id_journee= phpfed3GS_journees.id and phpfed3GS_matchs.date_reelle < '$ma_date' and phpfed3GS_matchs.buts_dom is NULL and phpfed3GS_matchs.buts_ext is NULL and phpfed3GS_matchs.id_equipe_dom < '999500' and phpfed3GS_matchs.id_equipe_ext < '999500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>BR PL BR PL BR PL BR PL BR PL</b></font></p>
<p align="center">&nbsp; </p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ<'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ<'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ<'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and
 phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ<'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'190'and phpbr_journees.id_champ>'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'190'and phpbr_journees.id_champ>'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'190'and phpbr_journees.id_champ>'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'190' and phpbr_journees.id_champ>'180'and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and
 phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'190'and phpbr_journees.id_champ>'180' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'200'and phpbr_journees.id_champ>'190' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'200'and phpbr_journees.id_champ>'190' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'200'and phpbr_journees.id_champ>'190' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'200' and phpbr_journees.id_champ>'190'and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and
 phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'200'and phpbr_journees.id_champ>'190' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'210'and phpbr_journees.id_champ>'200' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'210'and phpbr_journees.id_champ>'200' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'210'and phpbr_journees.id_champ>'200' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and  phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500' and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'210' and phpbr_journees.id_champ>'200'and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and
 phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'210'and phpbr_journees.id_champ>'200' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'230'and phpbr_journees.id_champ>'210' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'230'and phpbr_journees.id_champ>'210' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'230'and phpbr_journees.id_champ>'210' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'230' and phpbr_journees.id_champ>'210'and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_ext and
 phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ<'230'and phpbr_journees.id_champ>'210' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '16500' and phpbr_matchs.id_equipe_ext < '16500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ>'270' and (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and
 (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '916500' and phpbr_matchs.id_equipe_ext < '916500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ>'270' and (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and
 (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '916500' and phpbr_matchs.id_equipe_ext < '916500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ>'270' and (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and
 (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '916500' and phpbr_matchs.id_equipe_ext < '916500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE  phpbr_journees.id_champ>'270' and phpbr_clubs.id+900000=phpbr_matchs.id_equipe_ext and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and phpbr_clubs.id+900000=phpbr_matchs.id_equipe_ext and
 phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '916500' and phpbr_matchs.id_equipe_ext < '916500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpbr_matchs.id_equipe_dom, phpbr_matchs.id_equipe_ext, phpbr_matchs.id_journee, phpbr_matchs.date_reelle, phpbr_matchs.buts_dom, phpbr_matchs.buts_ext, phpbr_journees.date_prevue, phpbr_journees.id_champ, phpbr_clubs.nom, phpbr_clubs.id FROM  phpbr_matchs, phpbr_journees, phpbr_clubs WHERE phpbr_journees.id_champ>'270' and (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.id_journee= phpbr_journees.id and phpbr_matchs.date_reelle < '$ma_date' and
 (phpbr_clubs.id + 900000)=phpbr_matchs.id_equipe_dom and phpbr_matchs.buts_dom is NULL and phpbr_matchs.buts_ext is NULL and phpbr_matchs.id_equipe_dom < '916500' and phpbr_matchs.id_equipe_ext < '916500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>PL PL PL PL PL PL PL </b></font></p>
<p align="center">&nbsp; </p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ<'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ<'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ<'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'180' and phppl_clubs.id=phppl_matchs.id_equipe_ext and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_ext and
 phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ<'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'190'and phppl_journees.id_champ>'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom > '31500' and phppl_matchs.id_equipe_ext > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'190'and phppl_journees.id_champ>'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom > '31500' and phppl_matchs.id_equipe_ext > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'190'and phppl_journees.id_champ>'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom > '31500' and phppl_matchs.id_equipe_ext> '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'190' and phppl_journees.id_champ>'180'and phppl_clubs.id=phppl_matchs.id_equipe_ext and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_ext and
 phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom > '31500' and phppl_matchs.id_equipe_ext > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'190'and phppl_journees.id_champ>'180' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom > '31500' and phppl_matchs.id_equipe_ext > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'200'and phppl_journees.id_champ>'190' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'200'and phppl_journees.id_champ>'190' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'200'and phppl_journees.id_champ>'190' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'200' and phppl_journees.id_champ>'190'and phppl_clubs.id=phppl_matchs.id_equipe_ext and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_ext and
 phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ<'200' and phppl_journees.id_champ>'190' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom > '31500' and phppl_matchs.id_equipe_ext  > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom  > '31500' and phppl_matchs.id_equipe_ext > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and  phppl_matchs.id_equipe_dom > '31500' and phppl_matchs.id_equipe_ext  > '31500' and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_journees.id_champ>'200'and phppl_clubs.id=phppl_matchs.id_equipe_ext and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_ext and
 phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom  > '31500' and phppl_matchs.id_equipe_ext  > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom  > '31500' and phppl_matchs.id_equipe_ext  > '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_ext and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_ext and
 phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'200' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '31500' and phppl_matchs.id_equipe_ext < '31500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ>'270' and (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and
 (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '931500' and phppl_matchs.id_equipe_ext < '931500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ>'270' and (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and
 (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '931500' and phppl_matchs.id_equipe_ext < '931500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ>'270' and (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and
 (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '931500' and phppl_matchs.id_equipe_ext < '931500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE  phppl_journees.id_champ>'270' and phppl_clubs.id+900000=phppl_matchs.id_equipe_ext and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and phppl_clubs.id+900000=phppl_matchs.id_equipe_ext and
 phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '931500' and phppl_matchs.id_equipe_ext < '931500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppl_matchs.id_equipe_dom, phppl_matchs.id_equipe_ext, phppl_matchs.id_journee, phppl_matchs.date_reelle, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, phppl_journees.id_champ, phppl_clubs.nom, phppl_clubs.id FROM  phppl_matchs, phppl_journees, phppl_clubs WHERE phppl_journees.id_champ>'270' and (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.id_journee= phppl_journees.id and phppl_matchs.date_reelle < '$ma_date' and
 (phppl_clubs.id + 900000)=phppl_matchs.id_equipe_dom and phppl_matchs.buts_dom is NULL and phppl_matchs.buts_ext is NULL and phppl_matchs.id_equipe_dom < '931500' and phppl_matchs.id_equipe_ext < '931500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b>PPR PR PR PR RP PR RPR PR PR </b></font></p>
<p align="center">&nbsp; </p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ<'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ<'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ<'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'180' and phppr_clubs.id=phppr_matchs.id_equipe_ext and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_ext and
 phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ<'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'190'and phppr_journees.id_champ>'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'190'and phppr_journees.id_champ>'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'190'and phppr_journees.id_champ>'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'190' and phppr_journees.id_champ>'180'and phppr_clubs.id=phppr_matchs.id_equipe_ext and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_ext and
 phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'190'and phppr_journees.id_champ>'180' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'200'and phppr_journees.id_champ>'190' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom != '34501' and phppr_matchs.id_equipe_ext != '34501' and phppr_matchs.id_equipe_dom != '21501' and phppr_matchs.id_equipe_ext != '21501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'200'and phppr_journees.id_champ>'190' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom != '34501' and phppr_matchs.id_equipe_ext != '34501'and phppr_matchs.id_equipe_dom != '21501' and phppr_matchs.id_equipe_ext != '21501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'200'and phppr_journees.id_champ>'190' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom != '34501' and phppr_matchs.id_equipe_ext != '34501'and phppr_matchs.id_equipe_dom != '21501' and phppr_matchs.id_equipe_ext != '21501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'200' and phppr_journees.id_champ>'190'and phppr_clubs.id=phppr_matchs.id_equipe_ext and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_ext and
 phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom != '34501' and phppr_matchs.id_equipe_ext != '34501'and phppr_matchs.id_equipe_dom != '21501' and phppr_matchs.id_equipe_ext != '21501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'200'and phppr_journees.id_champ>'190' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom != '34501' and phppr_matchs.id_equipe_ext != '34501'and phppr_matchs.id_equipe_dom != '21501' and phppr_matchs.id_equipe_ext != '21501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'210'and phppr_journees.id_champ>'200' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'210'and phppr_journees.id_champ>'200' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'210'and phppr_journees.id_champ>'200' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and  phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500' and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'210' and phppr_journees.id_champ>'200'and phppr_clubs.id=phppr_matchs.id_equipe_ext and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_ext and
 phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'210'and phppr_journees.id_champ>'200' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="33" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="33" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'230'and phppr_journees.id_champ>'210' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'230'and phppr_journees.id_champ>'210' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'230'and phppr_journees.id_champ>'210' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'230' and phppr_journees.id_champ>'210'and phppr_clubs.id=phppr_matchs.id_equipe_ext and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_ext and
 phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ<'230'and phppr_journees.id_champ>'210' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '34500' and phppr_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ>'270' and (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and
 (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '934500' and phppr_matchs.id_equipe_ext < '934500'
  and phppr_matchs.id_equipe_dom!='918001' and phppr_matchs.id_equipe_ext!='918009'
  and phppr_matchs.id_equipe_dom!='934006' and phppr_matchs.id_equipe_ext!='934006'
  and phppr_matchs.id_equipe_dom!='934018' and phppr_matchs.id_equipe_ext!='934018'
  and phppr_matchs.id_equipe_dom!='934071' and phppr_matchs.id_equipe_ext!='934071'

  and phppr_matchs.id_equipe_dom!='934009' and phppr_matchs.id_equipe_ext!='934009'
  "; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ>'270' and (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and
 (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '934500' and phppr_matchs.id_equipe_ext < '934500'
 and phppr_matchs.id_equipe_dom!='918001' and phppr_matchs.id_equipe_ext!='918009'
  and phppr_matchs.id_equipe_dom!='934006' and phppr_matchs.id_equipe_ext!='934006'
  and phppr_matchs.id_equipe_dom!='934018' and phppr_matchs.id_equipe_ext!='934018'
  and phppr_matchs.id_equipe_dom!='934009' and phppr_matchs.id_equipe_ext!='934009'
  and phppr_matchs.id_equipe_dom!='934071' and phppr_matchs.id_equipe_ext!='934071'";  // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ>'270' and (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and
 (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '934500' and phppr_matchs.id_equipe_ext < '934500'
 and phppr_matchs.id_equipe_dom!='918001' and phppr_matchs.id_equipe_ext!='918009'
  and phppr_matchs.id_equipe_dom!='934006' and phppr_matchs.id_equipe_ext!='934006'
  and phppr_matchs.id_equipe_dom!='934018' and phppr_matchs.id_equipe_ext!='934018'
  and phppr_matchs.id_equipe_dom!='934009' and phppr_matchs.id_equipe_ext!='934009'
  and phppr_matchs.id_equipe_dom!='934071' and phppr_matchs.id_equipe_ext!='934071'"; // Requête SQL 
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE  phppr_journees.id_champ>'270' and phppr_clubs.id+900000=phppr_matchs.id_equipe_ext and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and phppr_clubs.id+900000=phppr_matchs.id_equipe_ext and
 phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '934500' and phppr_matchs.id_equipe_ext < '934500'
and phppr_matchs.id_equipe_dom!='918001' and phppr_matchs.id_equipe_ext!='918009'
  and phppr_matchs.id_equipe_dom!='934006' and phppr_matchs.id_equipe_ext!='934006'
  and phppr_matchs.id_equipe_dom!='934018' and phppr_matchs.id_equipe_ext!='934018'
  and phppr_matchs.id_equipe_dom!='934009' and phppr_matchs.id_equipe_ext!='934009'
  and phppr_matchs.id_equipe_dom!='934071' and phppr_matchs.id_equipe_ext!='934071'"; // Requête SQL 
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phppr_matchs.id_equipe_dom, phppr_matchs.id_equipe_ext, phppr_matchs.id_journee, phppr_matchs.date_reelle, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, phppr_journees.id_champ, phppr_clubs.nom, phppr_clubs.id FROM  phppr_matchs, phppr_journees, phppr_clubs WHERE phppr_journees.id_champ>'270' and (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.id_journee= phppr_journees.id and phppr_matchs.date_reelle < '$ma_date' and
 (phppr_clubs.id + 900000)=phppr_matchs.id_equipe_dom and phppr_matchs.buts_dom is NULL and phppr_matchs.buts_ext is NULL and phppr_matchs.id_equipe_dom < '934500' and phppr_matchs.id_equipe_ext < '934500'
 and phppr_matchs.id_equipe_dom!='918001' and phppr_matchs.id_equipe_ext!='918009'
  and phppr_matchs.id_equipe_dom!='934006' and phppr_matchs.id_equipe_ext!='934006'
  and phppr_matchs.id_equipe_dom!='934018' and phppr_matchs.id_equipe_ext!='934018'
  and phppr_matchs.id_equipe_dom!='934009' and phppr_matchs.id_equipe_ext!='934009'
  and phppr_matchs.id_equipe_dom!='934071' and phppr_matchs.id_equipe_ext!='934071'"; // Requête SQL Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b><font color="#FF0000">- - B</font><font size="7"><b><font color="#FF0000">ase 
  de Donn&eacute;es n&deg;</font></b></font><font color="#FF0000">1 - - <br>
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35

?>
  </font></b></font></p>
<p align="center">&nbsp;</p>
<p align="center"><font size="7"><b> MPY MPY MPY MPY MPY MPY MPY</b></font></p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        </b></font><font size="3"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&eacute;lection de la base onepip

?>
        </font></font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ<'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ<'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ<'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and
 Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <font size="3"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ<'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'190'and Phpmpy_journees.id_champ>'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'190'and Phpmpy_journees.id_champ>'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'190'and Phpmpy_journees.id_champ>'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'190' and Phpmpy_journees.id_champ>'180'and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and
 Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'190'and Phpmpy_journees.id_champ>'180' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'200'and Phpmpy_journees.id_champ>'190' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'200'and Phpmpy_journees.id_champ>'190' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'200'and Phpmpy_journees.id_champ>'190' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'200' and Phpmpy_journees.id_champ>'190'and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and
 Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'200'and Phpmpy_journees.id_champ>'190' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">29017</font></b></td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'210'and Phpmpy_journees.id_champ>'200' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29017' and Phpmpy_matchs.id_equipe_ext!='29017'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'210'and Phpmpy_journees.id_champ>'200' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29017' and Phpmpy_matchs.id_equipe_ext!='29017'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'210'and Phpmpy_journees.id_champ>'200' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and  Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom!='29017' and Phpmpy_matchs.id_equipe_ext!='29017'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font><font face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'210' and Phpmpy_journees.id_champ>'200'and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and
 Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29017' and Phpmpy_matchs.id_equipe_ext!='29017'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'210'and Phpmpy_journees.id_champ>'200' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29017' and Phpmpy_matchs.id_equipe_ext!='29017'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me/4me 
          S&eacute;rie</b></font></div>
      </td>
      <td width="152" height="32" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif">29125</font></b></td>
    </tr>
    <tr valign="top"> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'230'and Phpmpy_journees.id_champ>'210' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29125' and Phpmpy_matchs.id_equipe_ext!='29125'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'230'and Phpmpy_journees.id_champ>'210' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29125' and Phpmpy_matchs.id_equipe_ext!='29125'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'230'and Phpmpy_journees.id_champ>'210' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29125' and Phpmpy_matchs.id_equipe_ext!='29125'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'230' and Phpmpy_journees.id_champ>'210'and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_ext and
 Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29125' and Phpmpy_matchs.id_equipe_ext!='29125'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        <br>
        </b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ<'230'and Phpmpy_journees.id_champ>'210' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and Phpmpy_clubs.id=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '29500' and Phpmpy_matchs.id_equipe_ext < '29500' and Phpmpy_matchs.id_equipe_dom!='29125' and Phpmpy_matchs.id_equipe_ext!='29125'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="24"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ>'270' and (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and
 (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '929500' and Phpmpy_matchs.id_equipe_ext < '929500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="106" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ>'270' and (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and
 (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '929500' and Phpmpy_matchs.id_equipe_ext < '929500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></td>
      <td width="167" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ>'270' and (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and
 (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '929500' and Phpmpy_matchs.id_equipe_ext < '929500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </b></font></div>
      </td>
      <td width="155" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE  Phpmpy_journees.id_champ>'270' and (Phpmpy_clubs.id+900000)=Phpmpy_matchs.id_equipe_ext and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and
 Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '929500' and Phpmpy_matchs.id_equipe_ext < '929500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </b></font></td>
      <td width="152" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  Phpmpy_matchs.id_equipe_dom, Phpmpy_matchs.id_equipe_ext, Phpmpy_matchs.id_journee, Phpmpy_matchs.date_reelle, Phpmpy_matchs.buts_dom, Phpmpy_matchs.buts_ext, Phpmpy_journees.date_prevue, Phpmpy_journees.id_champ, Phpmpy_clubs.nom, Phpmpy_clubs.id FROM  Phpmpy_matchs, Phpmpy_journees, Phpmpy_clubs WHERE Phpmpy_journees.id_champ>'270' and (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.id_journee= Phpmpy_journees.id and Phpmpy_matchs.date_reelle < '$ma_date' and
 (Phpmpy_clubs.id + 900000)=Phpmpy_matchs.id_equipe_dom and Phpmpy_matchs.buts_dom is NULL and Phpmpy_matchs.buts_ext is NULL and Phpmpy_matchs.id_equipe_dom < '929500' and Phpmpy_matchs.id_equipe_ext < '929500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[3]"; ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<?php

mysql_close(); // D&eacute;connexion de MySQL
?>
<p align="center"><font size="7"><b><font color="#FF0000">- - B</font><font size="7"><b><font color="#FF0000">ase 
  de Donn&eacute;es n&deg;</font></b></font><font color="#FF0000">4 - - <br>
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
//echo date('d F Y');        // 11 October 2012
//echo date('d/m/Y');        // 11/10/12
?>
  </font></b></font></p>
<p align="center"><font size="7"><b>FEDFEM FEDFEM FEDFEM FEDFEM</b></font></p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="5" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>F&eacute;d&eacute;rale 
          F&eacute;minines </b></font></div>
      </td>
    </tr>
    <tr> 
      <td width="106" height="23"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        </b></font><font size="3"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france_db4"); // S&eacute;lection de la base onepip

?>
        </font></font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        </b></font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif">
        <?php
$query = "SELECT  phpfemfed_matchs.id_equipe_dom, phpfemfed_matchs.id_equipe_ext, phpfemfed_matchs.id_journee, phpfemfed_matchs.date_reelle, phpfemfed_matchs.buts_dom, phpfemfed_matchs.buts_ext, phpfemfed_journees.date_prevue, phpfemfed_journees.id_champ, phpfemfed_clubs.nom, phpfemfed_clubs.id FROM  phpfemfed_matchs, phpfemfed_journees, phpfemfed_clubs WHERE phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.id_journee= phpfemfed_journees.id and phpfemfed_matchs.date_reelle < '$ma_date' and phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.buts_dom is NULL and phpfemfed_matchs.buts_ext is NULL and phpfemfed_matchs.id_equipe_dom < '50000' and phpfemfed_matchs.id_equipe_ext < '50000' and
phpfemfed_matchs.id_equipe_dom != '11818' and phpfemfed_matchs.id_equipe_ext != '11818' and 
phpfemfed_matchs.id_equipe_dom != '27858' and phpfemfed_matchs.id_equipe_ext != '27858' and 
phpfemfed_matchs.id_equipe_dom != '28812' and phpfemfed_matchs.id_equipe_ext != '28812'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font><font size="3" face="Arial, Helvetica, sans-serif">
        <?php echo "$row[7]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="106" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        </b></font><font size="3"><b><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpfemfed_matchs.id_equipe_dom, phpfemfed_matchs.id_equipe_ext, phpfemfed_matchs.id_journee, phpfemfed_matchs.date_reelle, phpfemfed_matchs.buts_dom, phpfemfed_matchs.buts_ext, phpfemfed_journees.date_prevue, phpfemfed_journees.id_champ, phpfemfed_clubs.nom, phpfemfed_clubs.id FROM  phpfemfed_matchs, phpfemfed_journees, phpfemfed_clubs WHERE phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.id_journee= phpfemfed_journees.id and phpfemfed_matchs.date_reelle < '$ma_date' and phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.buts_dom is NULL and phpfemfed_matchs.buts_ext is NULL and phpfemfed_matchs.id_equipe_dom < '50000' and phpfemfed_matchs.id_equipe_ext < '50000' and 
phpfemfed_matchs.id_equipe_dom != '11818' and phpfemfed_matchs.id_equipe_ext != '11818' and 
phpfemfed_matchs.id_equipe_dom != '27858' and phpfemfed_matchs.id_equipe_ext != '27858' and
phpfemfed_matchs.id_equipe_dom != '28812' and phpfemfed_matchs.id_equipe_ext != '28812'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </b></font></font></b></font></font><font face="Arial, Helvetica, sans-serif"> 
        <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journ&eacute;e :";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></td>
      <td width="167" height="23"> 
        <div align="right"> <b><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  phpfemfed_matchs.id_equipe_dom, phpfemfed_matchs.id_equipe_ext, phpfemfed_matchs.id_journee, phpfemfed_matchs.date_reelle, phpfemfed_matchs.buts_dom, phpfemfed_matchs.buts_ext, phpfemfed_journees.date_prevue, phpfemfed_journees.id_champ, phpfemfed_clubs.nom, phpfemfed_clubs.id FROM  phpfemfed_matchs, phpfemfed_journees, phpfemfed_clubs WHERE phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.id_journee= phpfemfed_journees.id and phpfemfed_matchs.date_reelle < '$ma_date' and phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.buts_dom is NULL and phpfemfed_matchs.buts_ext is NULL and phpfemfed_matchs.id_equipe_dom < '50000' and phpfemfed_matchs.id_equipe_ext < '50000' and 
phpfemfed_matchs.id_equipe_dom != '11818' and phpfemfed_matchs.id_equipe_ext != '11818' and 
phpfemfed_matchs.id_equipe_dom != '27858' and phpfemfed_matchs.id_equipe_ext != '27858' and
phpfemfed_matchs.id_equipe_dom != '28812' and phpfemfed_matchs.id_equipe_ext != '28812'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
          </font></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          <?php echo "$row[8]";?>
          <?php echo "-";?>
          <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
          </font></font></b></div>
      </td>
      <td width="155" height="23"> <b><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfemfed_matchs.id_equipe_dom, phpfemfed_matchs.id_equipe_ext, phpfemfed_matchs.id_journee, phpfemfed_matchs.date_reelle, phpfemfed_matchs.buts_dom, phpfemfed_matchs.buts_ext, phpfemfed_journees.date_prevue, phpfemfed_journees.id_champ, phpfemfed_clubs.nom, phpfemfed_clubs.id FROM  phpfemfed_matchs, phpfemfed_journees, phpfemfed_clubs WHERE  phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_ext and phpfemfed_matchs.id_journee= phpfemfed_journees.id and phpfemfed_matchs.date_reelle < '$ma_date' and phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_ext and
 phpfemfed_matchs.buts_dom is NULL and phpfemfed_matchs.buts_ext is NULL and phpfemfed_matchs.id_equipe_dom < '50000' and phpfemfed_matchs.id_equipe_ext < '50000' and 
 phpfemfed_matchs.id_equipe_dom != '11818' and phpfemfed_matchs.id_equipe_ext != '11818' and 
 phpfemfed_matchs.id_equipe_dom != '27858' and phpfemfed_matchs.id_equipe_ext != '27858' and
 phpfemfed_matchs.id_equipe_dom != '28812' and phpfemfed_matchs.id_equipe_ext != '28812'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php echo "$row[8]";?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></font></b></td>
      <td width="152" height="23"> <b><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <font size="3"> <font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "SELECT  phpfemfed_matchs.id_equipe_dom, phpfemfed_matchs.id_equipe_ext, phpfemfed_matchs.id_journee, phpfemfed_matchs.date_reelle, phpfemfed_matchs.buts_dom, phpfemfed_matchs.buts_ext, phpfemfed_journees.date_prevue, phpfemfed_journees.id_champ, phpfemfed_clubs.nom, phpfemfed_clubs.id FROM  phpfemfed_matchs, phpfemfed_journees, phpfemfed_clubs WHERE phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.id_journee= phpfemfed_journees.id and phpfemfed_matchs.date_reelle < '$ma_date' and phpfemfed_clubs.id=phpfemfed_matchs.id_equipe_dom and phpfemfed_matchs.buts_dom is NULL and phpfemfed_matchs.buts_ext is NULL  and phpfemfed_matchs.id_equipe_dom < '50000' and phpfemfed_matchs.id_equipe_ext < '50000' and
phpfemfed_matchs.id_equipe_dom != '11818' and phpfemfed_matchs.id_equipe_ext != '11818' and 
phpfemfed_matchs.id_equipe_dom != '27858' and phpfemfed_matchs.id_equipe_ext != '27858' and
phpfemfed_matchs.id_equipe_dom != '28812' and phpfemfed_matchs.id_equipe_ext != '28812'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
        </font></font></font></font> 
        <?php echo "$row[3]"; ?>
        <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
        </font></b></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"></font></div>
      </td>
      <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></td>
      <td width="167" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          </b></font></div>
      </td>
      <td width="155" height="25"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font></b></font></td>
      <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        </font> </b></font></td>
    </tr>
  </table>
</div>
<?php

mysql_close(); // D&eacute;connexion de MySQL
?>
<p align="center">&nbsp;</p>
<p align="center">&nbsp; 
</body>
</html>
