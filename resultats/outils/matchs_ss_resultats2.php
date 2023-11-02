<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p align="left"><b><font color="#000000" size="7">AB AB AB AB AB AB AB AB AB AB 
  AB</font></b></p>
<p> 
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
echo date('d F Y');        // 11 October 2012
echo date('d/m/Y');        // 11/10/12
?>
  <br>
  ----------------------------- <br>
  <?php
echo $ma_date;  // 2012-10-11 15:35:53
?>
</p>
<table width="924" border="0" cellspacing="0">
  <tr> 
    <td colspan="4" height="17" bgcolor="#FF0000"> 
      <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
    </td>
    <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="23"><font size="3"><font face="Arial, Helvetica, sans-serif">
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db2"); // Sélection de la base onepip

?>
      </font><font size="3" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ<'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
mysql_select_db("onepip-france-db2"); // Sélection de la base onepip

?>
      </font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b>
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ<'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ<'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'180' and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
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
    <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <font size="3"> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE phpab_journees.id_champ<'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'190'and phpab_journees.id_champ>'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'190'and phpab_journees.id_champ>'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'190'and phpab_journees.id_champ>'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'190' and phpab_journees.id_champ>'180'and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'190'and phpab_journees.id_champ>'180' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'200'and phpab_journees.id_champ>'190' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'200'and phpab_journees.id_champ>'190' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'200'and phpab_journees.id_champ>'190' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'200' and phpab_journees.id_champ>'190'and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'200'and phpab_journees.id_champ>'190' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'210'and phpab_journees.id_champ>'200' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'210'and phpab_journees.id_champ>'200' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'210'and phpab_journees.id_champ>'200' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and  phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500' and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'210' and phpab_journees.id_champ>'200'and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'210'and phpab_journees.id_champ>'200' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'230'and phpab_journees.id_champ>'210' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'230'and phpab_journees.id_champ>'210' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'230'and phpab_journees.id_champ>'210' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'230' and phpab_journees.id_champ>'210'and phpab_clubs.id=phpab_matchs.id_equipe_ext and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_ext and
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
      <br>
      </b></font></td>
    <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpab_matchs.id_equipe_dom, phpab_matchs.id_equipe_ext, phpab_matchs.id_journee, phpab_matchs.date_reelle, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_journees.date_prevue, phpab_journees.id_champ, phpab_clubs.nom, phpab_clubs.id FROM  phpab_matchs, phpab_journees, phpab_clubs WHERE  phpab_journees.id_champ<'230'and phpab_journees.id_champ>'210' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.id_journee= phpab_journees.id and phpab_matchs.date_reelle < '$ma_date' and phpab_clubs.id=phpab_matchs.id_equipe_dom and phpab_matchs.buts_dom is NULL and phpab_matchs.buts_ext is NULL and phpab_matchs.id_equipe_dom < '12500' and phpab_matchs.id_equipe_ext < '12500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>AB AB AB AB AB BA AB A B ABA AB A
<p>
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
echo date('d F Y');        // 11 October 2012
echo date('d/m/Y');        // 11/10/12
?>
  <br>
  ----------------------------- <br>
  <?php
echo $ma_date;  // 2012-10-11 15:35:53
?>
<p align="left"><b><font size="7">AL AL AL AL AL AL ALA ALA AL ALA AL </font></b>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'190'and phpal_journees.id_champ>'180' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'200'and phpal_journees.id_champ>'190' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'210'and phpal_journees.id_champ>'200' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and  phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500' and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE  phpal_journees.id_champ<'230'and phpal_journees.id_champ>'210' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and phpal_clubs.id=phpal_matchs.id_equipe_dom and phpal_matchs.buts_dom is NULL and phpal_matchs.buts_ext is NULL and phpal_matchs.id_equipe_dom < '11500' and phpal_matchs.id_equipe_ext < '11500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="167" height="24"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpal_matchs.id_equipe_dom, phpal_matchs.id_equipe_ext, phpal_matchs.id_journee, phpal_matchs.date_reelle, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, phpal_journees.id_champ, phpal_clubs.nom, phpal_clubs.id FROM  phpal_matchs, phpal_journees, phpal_clubs WHERE phpal_journees.id_champ>'270' and (phpal_clubs.id + 900000)=phpal_matchs.id_equipe_dom and phpal_matchs.id_journee= phpal_journees.id and phpal_matchs.date_reelle < '$ma_date' and
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
<p>ALA AL AL AL ALA AL AL AL</p>
<p>
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
echo date('d F Y');        // 11 October 2012
echo date('d/m/Y');        // 11/10/12
?>
  <br>
  ----------------------------- <br>
  <?php
echo $ma_date;  // 2012-10-11 15:35:53
?>
</p>
<p align="left"><font size="7"><b>AU AUA AU AUA AUA AUA AU AUA AU</b></font></p>
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'200'and phpau_journees.id_champ>'190' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif">
      <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and  phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500' and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'230'and phpau_journees.id_champ>'210' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif">
      <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="167" height="24"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
<p>AU AU AU AU AUA UA AUAUA</p>
<p>
  <?php
$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
echo date('d F Y');        // 11 October 2012
echo date('d/m/Y');        // 11/10/12
?>
  <br>
  ----------------------------- <br>
  <?php
echo $ma_date;  // 2012-10-11 15:35:53
?>
</p>
<p>&nbsp;</p>
<p align="left"><font size="7"><b>BE BE BE BE BE BEB EB BE BE BE BE </b></font>
<table width="924" border="0" cellspacing="0">
  <tr> 
    <td colspan="4" height="17" bgcolor="#FF0000"> 
      <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
    </td>
    <td width="152" height="17" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="23"><font size="3"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b>
      <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ<'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'190'and phpbe_journees.id_champ>'180' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'200'and phpbe_journees.id_champ>'190' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'210'and phpbe_journees.id_champ>'200' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
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
      <b> </b></font></font></td>
    <td width="106" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'210'and phpbe_journees.id_champ>'200' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE  phpbe_journees.id_champ<'230'and phpbe_journees.id_champ>'210' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and phpbe_clubs.id=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '14500' and phpbe_matchs.id_equipe_ext < '14500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif">
      <?php
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ>'270' and (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'"; // Requête SQL
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
$query = "SELECT  phpbe_matchs.id_equipe_dom, phpbe_matchs.id_equipe_ext, phpbe_matchs.id_journee, phpbe_matchs.date_reelle, phpbe_matchs.buts_dom, phpbe_matchs.buts_ext, phpbe_journees.date_prevue, phpbe_journees.id_champ, phpbe_clubs.nom, phpbe_clubs.id FROM  phpbe_matchs, phpbe_journees, phpbe_clubs WHERE phpbe_journees.id_champ>'270' and (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.id_journee= phpbe_journees.id and phpbe_matchs.date_reelle < '$ma_date' and
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'"; // Requête SQL
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
 phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'"; // Requête SQL
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
 (phpbe_clubs.id + 900000)=phpbe_matchs.id_equipe_dom and phpbe_matchs.buts_dom is NULL and phpbe_matchs.buts_ext is NULL and phpbe_matchs.id_equipe_dom < '914500' and phpbe_matchs.id_equipe_ext < '914500'"; // Requête SQL
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
<p>BE BE BEB BE EBE BEB E 
<p>&nbsp;
<p align="left"><font size="7"><b>BG BG BG BGB BG BG BG BG BG BG BG</b></font></p>
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
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
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
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
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
    <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <font size="3"> 
      <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ<'180' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="32" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
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
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
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
      <br>
      </b></font></td>
    <td width="152" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <?php
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE  phpbg_journees.id_champ<'230'and phpbg_journees.id_champ>'210' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and phpbg_clubs.id=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '15500' and phpbg_matchs.id_equipe_ext < '15500'"; // Requête SQL
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
$query = "SELECT  phpbg_matchs.id_equipe_dom, phpbg_matchs.id_equipe_ext, phpbg_matchs.id_journee, phpbg_matchs.date_reelle, phpbg_matchs.buts_dom, phpbg_matchs.buts_ext, phpbg_journees.date_prevue, phpbg_journees.id_champ, phpbg_clubs.nom, phpbg_clubs.id FROM  phpbg_matchs, phpbg_journees, phpbg_clubs WHERE phpbg_journees.id_champ>'270' and (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.id_journee= phpbg_journees.id and phpbg_matchs.date_reelle < '$ma_date' and
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'"; // Requête SQL
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
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'"; // Requête SQL
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
 phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'"; // Requête SQL
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
 (phpbg_clubs.id + 900000)=phpbg_matchs.id_equipe_dom and phpbg_matchs.buts_dom is NULL and phpbg_matchs.buts_ext is NULL and phpbg_matchs.id_equipe_dom < '915500' and phpbg_matchs.id_equipe_ext < '915500'"; // Requête SQL
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
<p>BG BG BG BG BG BG BG BGB BG BGB</p>
<p align="left"><font size="7"><b>CA CA CA CA CA CA CA CA CA AC CA</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>CA CA CA CA CA CA CA CA CA CA AC AC</p>
<p align="left"><font size="7"><b>CBL CBL CBL CBL CB L CBL CBL CBL </b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>CBL CB CBL CBL CBL CBL CBL CBL</p>
<p align="left"><font size="7"><b>CE CE CE CE CE CEC CE CE CE CE CE E</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>CE CE CE CE CE CE ECE CE CE</p>
<p align="left"><font size="7"><b>FL FL FL FL FL FL FL FLF LF FL FL FL</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
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
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
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
$query = "SELECT  phpfl_matchs.id_equipe_dom, phpfl_matchs.id_equipe_ext, phpfl_matchs.id_journee, phpfl_matchs.date_reelle, phpfl_matchs.buts_dom, phpfl_matchs.buts_ext, phpfl_journees.date_prevue, phpfl_journees.id_champ, phpfl_clubs.nom, phpfl_clubs.id FROM  phpfl_matchs, phpfl_journees, phpfl_clubs WHERE  phpfl_journees.id_champ<'200'and phpfl_journees.id_champ>'190' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.id_journee= phpfl_journees.id and phpfl_matchs.date_reelle < '$ma_date' and phpfl_clubs.id=phpfl_matchs.id_equipe_dom and phpfl_matchs.buts_dom is NULL and phpfl_matchs.buts_ext is NULL and phpfl_matchs.id_equipe_dom < '23500' and phpfl_matchs.id_equipe_ext < '23500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>FL FL FL FL FLF FL </p>
<p align="left"><font size="7"><b>IDF IDF IDF IDF IDF IDF IDF IDFI DF IDF</b></font></p>
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
 phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ<'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190' and phpidf_journees.id_champ>'180'and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_ext and
 phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'190'and phpidf_journees.id_champ>'180' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE  phpidf_journees.id_champ<'200'and phpidf_journees.id_champ>'190' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and phpidf_clubs.id=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '25500' and phpidf_matchs.id_equipe_ext < '25500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="9" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
      </font><font size="3"><font face="Arial, Helvetica, sans-serif">
      <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ>'270' and (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '925500' and phpidf_matchs.id_equipe_ext < '925500'"; // Requête SQL
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
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '925500' and phpidf_matchs.id_equipe_ext < '925500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '925500' and phpidf_matchs.id_equipe_ext < '925500'"; // Requête SQL
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
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_ext and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '925500' and phpidf_matchs.id_equipe_ext < '925500'"; // Requête SQL
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
      <?php
$query = "SELECT  phpidf_matchs.id_equipe_dom, phpidf_matchs.id_equipe_ext, phpidf_matchs.id_journee, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, phpidf_journees.id_champ, phpidf_clubs.nom, phpidf_clubs.id FROM  phpidf_matchs, phpidf_journees, phpidf_clubs WHERE phpidf_journees.id_champ>'270' and (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.id_journee= phpidf_journees.id and phpidf_matchs.date_reelle < '$ma_date' and
 (phpidf_clubs.id + 900000)=phpidf_matchs.id_equipe_dom and phpidf_matchs.buts_dom is NULL and phpidf_matchs.buts_ext is NULL and phpidf_matchs.id_equipe_dom < '925500' and phpidf_matchs.id_equipe_ext < '925500'"; // Requête SQL
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
<p>IDF IDF IDF IDF IDF IDF IDF IDF</p>
<p align="left"><font size="7"><b>LD LD LD LDL LD LD LD LD LD LD LD</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
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
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
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
    <td width="152" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpld_matchs.id_equipe_dom, phpld_matchs.id_equipe_ext, phpld_matchs.id_journee, phpld_matchs.date_reelle, phpld_matchs.buts_dom, phpld_matchs.buts_ext, phpld_journees.date_prevue, phpld_journees.id_champ, phpld_clubs.nom, phpld_clubs.id FROM  phpld_matchs, phpld_journees, phpld_clubs WHERE  phpld_journees.id_champ<'190'and phpld_journees.id_champ>'180' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.id_journee= phpld_journees.id and phpld_matchs.date_reelle < '$ma_date' and phpld_clubs.id=phpld_matchs.id_equipe_dom and phpld_matchs.buts_dom is NULL and phpld_matchs.buts_ext is NULL and phpld_matchs.id_equipe_dom < '26500' and phpld_matchs.id_equipe_ext < '26500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>LD LD LD LD LD LD DL LD </p>
<p align="left"><font size="7"><b>LM LM LM LM LM LM LM LM LM LM</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>LM LM LM LM LM LM LM</p>
<p align="left"><font size="7"><b>LY LY LY LY LY LYL LY LY LY LY YL</b></font></p>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
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
    <td width="152" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      <font size="3"> 
      <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '22501' and phply_matchs.id_equipe_ext != '22501'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '28501' and phply_matchs.id_equipe_ext != '28501'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '28501' and phply_matchs.id_equipe_ext != '28501'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and  phply_matchs.id_equipe_dom != '28501' and phply_matchs.id_equipe_ext != '28501' and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '28501' and phply_matchs.id_equipe_ext != '28501'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom != '28501' and phply_matchs.id_equipe_ext != '28501'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '28500' and phply_matchs.id_equipe_ext < '28500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '928500' and phply_matchs.id_equipe_ext < '928500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '928500' and phply_matchs.id_equipe_ext < '928500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '928500' and phply_matchs.id_equipe_ext < '928500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '928500' and phply_matchs.id_equipe_ext < '928500'"; // Requête SQL
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
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '928500' and phply_matchs.id_equipe_ext < '928500'"; // Requête SQL
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
<p>LY LY LY LY LYL YL</p>
<p>&nbsp;</p>
<p align="left"><font size="7"><b>AP AP AP AP AP AP AP ---------P</b></font></p>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and  phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500' and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
<p>LY LY LY LY LYL YL</p>
<p>&nbsp;</p>
<p align="left"><font size="7"><b>DA DA DA DAD AD DA ---------</b></font></p>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ<'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'190'and phply_journees.id_champ>'180' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'200'and phply_journees.id_champ>'190' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and  phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500' and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'210'and phply_journees.id_champ>'200' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE  phply_journees.id_champ<'230'and phply_journees.id_champ>'210' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and phply_clubs.id=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '34500' and phply_matchs.id_equipe_ext < '34500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
$query = "SELECT  phply_matchs.id_equipe_dom, phply_matchs.id_equipe_ext, phply_matchs.id_journee, phply_matchs.date_reelle, phply_matchs.buts_dom, phply_matchs.buts_ext, phply_journees.date_prevue, phply_journees.id_champ, phply_clubs.nom, phply_clubs.id FROM  phply_matchs, phply_journees, phply_clubs WHERE phply_journees.id_champ>'270' and (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.id_journee= phply_journees.id and phply_matchs.date_reelle < '$ma_date' and
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
 phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
 (phply_clubs.id + 900000)=phply_matchs.id_equipe_dom and phply_matchs.buts_dom is NULL and phply_matchs.buts_ext is NULL and phply_matchs.id_equipe_dom < '934500' and phply_matchs.id_equipe_ext < '934500'"; // Requête SQL
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
<p>LY LY LY LY LYL YL</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="left"><font size="7"><b>N N N N N N N N N N N N N N N N N N N</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>N N N N N N N N N N N N</p>
<p align="left"><font size="7"><b>PA PA PA PA PA PA PA PA PAP PA PA PA</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>PA PA PA PA AP PA PA PA</p>
<p align="left"><font size="7"><b>PC PC PC PC PC PC PCP PC PCP PCP CP</b></font></p>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
<p>PC PC PC PC PC PC PC </p>
<p align="left"><font size="7"><b>PCH PCH PCH PCH PHCP PHPCH PCH</b></font></p>
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ<'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ<'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ<'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'180' and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ<'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'190'and phppch_journees.id_champ>'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'190'and phppch_journees.id_champ>'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></td>
    <td width="167" height="25"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'190'and phppch_journees.id_champ>'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'190' and phppch_journees.id_champ>'180'and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'190'and phppch_journees.id_champ>'180' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'200'and phppch_journees.id_champ>'190' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'200'and phppch_journees.id_champ>'190' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'200'and phppch_journees.id_champ>'190' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'200' and phppch_journees.id_champ>'190'and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'200'and phppch_journees.id_champ>'190' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'210'and phppch_journees.id_champ>'200' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'210'and phppch_journees.id_champ>'200' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'210'and phppch_journees.id_champ>'200' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and  phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500' and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'210' and phppch_journees.id_champ>'200'and phppch_clubs.id=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_ext and
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ<'210'and phppch_journees.id_champ>'200' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '33500' and phppch_matchs.id_equipe_ext < '33500'"; // Requête SQL
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ>'270' and (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ>'270' and (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="167" height="24"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ>'270' and (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE  phppch_journees.id_champ>'270' and phppch_clubs.id+900000=phppch_matchs.id_equipe_ext and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and phppch_clubs.id+900000=phppch_matchs.id_equipe_ext and
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
$query = "SELECT  phppch_matchs.id_equipe_dom, phppch_matchs.id_equipe_ext, phppch_matchs.id_journee, phppch_matchs.date_reelle, phppch_matchs.buts_dom, phppch_matchs.buts_ext, phppch_journees.date_prevue, phppch_journees.id_champ, phppch_clubs.nom, phppch_clubs.id FROM  phppch_matchs, phppch_journees, phppch_clubs WHERE phppch_journees.id_champ>'270' and (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.id_journee= phppch_journees.id and phppch_matchs.date_reelle < '$ma_date' and
 (phppch_clubs.id + 900000)=phppch_matchs.id_equipe_dom and phppch_matchs.buts_dom is NULL and phppch_matchs.buts_ext is NULL and phppch_matchs.id_equipe_dom < '933500' and phppch_matchs.id_equipe_ext < '933500'"; // Requête SQL
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
<p>PCH PCH PHC PCH PCH PCH PCH</p>
<p align="left"><font size="7"><b>AU ----------------------- AU</b></font></p>
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ<'180' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      </b></font><font face="Arial, Helvetica, sans-serif"> 
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'200'and phpau_journees.id_champ>'190' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="152" height="18" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr> 
    <td width="106" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and  phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500' and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'210'and phpau_journees.id_champ>'200' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE  phpau_journees.id_champ<'230'and phpau_journees.id_champ>'210' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and phpau_clubs.id=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '13500' and phpau_matchs.id_equipe_ext < '13500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
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
    <td width="106" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
      <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journée :";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      </font></font></td>
    <td width="167" height="24"> 
      <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "SELECT  phpau_matchs.id_equipe_dom, phpau_matchs.id_equipe_ext, phpau_matchs.id_journee, phpau_matchs.date_reelle, phpau_matchs.buts_dom, phpau_matchs.buts_ext, phpau_journees.date_prevue, phpau_journees.id_champ, phpau_clubs.nom, phpau_clubs.id FROM  phpau_matchs, phpau_journees, phpau_clubs WHERE phpau_journees.id_champ>'270' and (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.id_journee= phpau_journees.id and phpau_matchs.date_reelle < '$ma_date' and
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
 phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
 (phpau_clubs.id + 900000)=phpau_matchs.id_equipe_dom and phpau_matchs.buts_dom is NULL and phpau_matchs.buts_ext is NULL and phpau_matchs.id_equipe_dom < '913500' and phpau_matchs.id_equipe_ext < '913500'"; // Requête SQL
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
<p>AU AU AU AU AUA UA AUAUA</p>
<p>&nbsp;</p>
<p>&nbsp;
</body>
</html>
