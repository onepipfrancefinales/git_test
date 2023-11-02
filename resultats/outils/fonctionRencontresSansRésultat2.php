 
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center">
<div align="left"></div>
</div>
<div align="center"> </div>
<div align="center"></div>
<div align="center"> </div>
<p align="center">
<font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> <br>
<hr>
</font></font> 
<p><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> </font></font> 
  <?php  
  $ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35




?>
  <br />
</p>
<p>&nbsp;</p>
<table width="924" border="0" cellspacing="0">
  <tr> 
    <td colspan="5" height="17"><font size="7"><b><font size="7"><b><font color="#FF0000"> 
      <?php
$comite="mpy";
$phpmatchs="php".$comite."_matchs";
$phpjournees="php".$comite."_journees";
$phpclubs ="php".$comite."_clubs";

$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35

echo "<br>";







?>
      </font></b></font></b></font><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Rencontres 
      sans r&eacute;sultats</b></font></td>
  </tr>
  <tr> 
    <td colspan="5" height="20" bgcolor="#FF0000"> 
      <div align="center"><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font>
        <?php $division=18000; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="58" height="23"><font size="3"><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo substr($row[2],0,3)."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font></font></td>
    <td width="176" height="23"> 
      <div align="center"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo "Journee ".''.substr($row[2],3,2).''."<br>";				
					}
	echo "<br>";
?>
        </font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font></font></div>
    </td>
    <td width="262" height="23"> 
      <div align="right"><font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[0].''."<br>";				
					}
	echo "<br>";
?>
        </b></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></b></font></div>
    </td>
    <td width="247" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_dom, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_ext=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt"  AND substr($row[1],2,1)!= '5' )
						echo " - ".$row[0].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> </font></b></font></b></font></td>
    <td width="171" height="23"> <font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[3].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      </b></font></td>
  </tr>
  <tr> 
    <td colspan="5" height="23" bgcolor="#FF0000"> 
      <div align="center"><font color="#000000" size="5"><b><font face="Arial, Helvetica, sans-serif">Promotion 
        Honneur
        <?php $division=19000; ?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="58" height="23"><font size="3"><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo substr($row[2],0,3)."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font></font></td>
    <td width="176" height="23"> 
      <div align="center"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo "Journee ".''.substr($row[2],3,2).''."<br>";				
					}
	echo "<br>";
?>
        </font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font></font></div>
    </td>
    <td width="262" height="23"> 
      <div align="right"><font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[0].''."<br>";				
					}
	echo "<br>";
?>
        </b></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></b></font></div>
    </td>
    <td width="247" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_dom, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_ext=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt"  AND substr($row[1],2,1)!= '5' )
						echo " - ".$row[0].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> </font></b></font></b></font></td>
    <td width="171" height="23"> <font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[3].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      </b></font></td>
  </tr>
  <tr> 
    <td colspan="5" height="23" bgcolor="#FF0000"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">1re 
        S&eacute;rie
        <?php $division=20000; ?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="58" height="23"><font size="3"><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo substr($row[2],0,3)."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font></font></td>
    <td width="176" height="23"> 
      <div align="center"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo "Journee ".''.substr($row[2],3,2).''."<br>";				
					}
	echo "<br>";
?>
        </font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font></font></div>
    </td>
    <td width="262" height="23"> 
      <div align="right"><font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[0].''."<br>";				
					}
	echo "<br>";
?>
        </b></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></b></font></div>
    </td>
    <td width="247" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_dom, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_ext=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt"  AND substr($row[1],2,1)!= '5' )
						echo " - ".$row[0].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> </font></b></font></b></font></td>
    <td width="171" height="23"> <font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[3].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      </b></font></td>
  </tr>
  <tr bgcolor="#FF0000"> 
    <td colspan="5" height="23"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">2me 
        S&eacute;rie
        <?php $division=21000; ?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="58" height="23"><font size="3"><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo substr($row[2],0,3)."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font></font></td>
    <td width="176" height="23"> 
      <div align="center"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo "Journee ".''.substr($row[2],3,2).''."<br>";				
					}
	echo "<br>";
?>
        </font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font></font></div>
    </td>
    <td width="262" height="23"> 
      <div align="right"><font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[0].''."<br>";				
					}
	echo "<br>";
?>
        </b></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></b></font></div>
    </td>
    <td width="247" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_dom, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_ext=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt"  AND substr($row[1],2,1)!= '5' )
						echo " - ".$row[0].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> </font></b></font></b></font></td>
    <td width="171" height="23"> <font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[3].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      </b></font></td>
  </tr>
  <tr> 
    <td colspan="5" height="23" bgcolor="#FF0000"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">3me 
        / 4me S&eacute;rie
        <?php $division=25000; ?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="58" height="23"><font size="3"><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo substr($row[2],0,3)."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font></font></td>
    <td width="176" height="23"> 
      <div align="center"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo "Journee ".''.substr($row[2],3,2).''."<br>";				
					}
	echo "<br>";
?>
        </font></font><font size="3" face="Arial, Helvetica, sans-serif"><b> </b></font></font></div>
    </td>
    <td width="262" height="23"> 
      <div align="right"><font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[0].''."<br>";				
					}
	echo "<br>";
?>
        </b></font></font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font></b></font></div>
    </td>
    <td width="247" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
      </font><font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_dom, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_ext=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
						if ($row[0] != "Exempt"  AND substr($row[1],2,1)!= '5' )
						echo " - ".$row[0].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font><font size="3" face="Arial, Helvetica, sans-serif"> </font></b></font></b></font></td>
    <td width="171" height="23"> <font size="3"><b><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
      <?php
	//	echo "matchs en retards Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom, m.id_equipe_ext, m.id_journee, m.date_reelle
			FROM  $phpComiteMatchs m
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			WHERE  m.id_equipe_dom < 900000 and m.buts_dom is NULL and m.buts_ext is NULL and '$ma_date' > m.date_reelle
			AND m.id_journee < $division
			ORDER BY m.id_journee";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					if ($row[0] != "Exempt" AND substr($row[1],2,1)!= '5')
						echo $row[3].''."<br>";				
					}
	echo "<br>";
?>
      </font></b></font></b></font><font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
      </b></font></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
