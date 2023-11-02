
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center">
  <div align="left"></div>
</div>
<div align="center"></div>
<div align="center"> </div>
<p align="center"> <font color="#000000" face="Arial, Helvetica, sans-serif" size="4"> 
  <?php 
 
////  if ($equipe > 900000)
////  {
////  $champ = $champ - 100;
////   }
 //  echo $champ;
  $ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
//echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
?>
  <b><b><b> 
  <?php
//$comite="mpy";
$phpComiteMatchs="php".$comite."_matchs";
$phpComiteJournees="php".$comite."_journees";
$phpComiteClubs ="php".$comite."_clubs";

$ma_date=date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
//echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35

echo "<br>";
//// if ($equipe > 900000)
 //// {
////  $champ = $champ + 100;
////   }
if ($comite=="mpy" 	OR $comite=="pl" OR $comite=="br" OR $comite=="pr" OR $comite=="pro"
					OR $comite=="f1" OR $comite=="fed2" OR $comite=="fed3NE" OR $comite=="fed3GS")

	{
		mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
		mysql_select_db("onepip-france-db3");
	}
else
	{
	mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
	mysql_select_db("onepip-france-db2"); 
	}

?>
  <?php
	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							$test=$row[2];			
						}
		if ($test > 0)
			{
	  echo "Rencontres   de la poule report&eacute;es"; 
	  echo "<br>";
	  		}
?>
  </b></b></b> </font></p>
<table width="650" border="0" cellspacing="0" align="center">
  <tr> 
    <td width="80" height="23"> 
      <div align="center"><font size="2" color="#000000" face="Arial, Helvetica, sans-serif"> 
        <?php
	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							echo "Journ&eacute;e ".''.substr($row[2],3,2)."<br>";			
						}
	echo "<br>";
?>
        </font></div>
    </td>
    <td width="195" height="23"> 
      <div align="right"><font size="2" color="#000000" face="Arial, Helvetica, sans-serif"><b><b><b> 
        <?php
	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							echo $row[0].''."<br>";			
						}
	echo "<br>";
?>
        </b></b></b></font></div>
    </td>
    <td width="201" height="23"> 
      <div align="left"><font size="2" color="#000000" face="Arial, Helvetica, sans-serif"><b><b><b><b><b><b><b><b> 
        <?php
	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_ext=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_ext < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
							echo " - ".$row[0].''."<br>";			
						}
	echo "<br>";
?>
        </b></b></b></b></b></b></b></b></font></div>
    </td>
    <td width="166" height="23"> <font size="2" color="#000000" face="Arial, Helvetica, sans-serif"><b><b> 
      <font color="#FF0000">
      <?php
	//	echo "matchs a jouer Equipe Une";
		echo "<br>";
$query = "	SELECT c.nom ,  m.id_equipe_ext,  m.id_journee,  m.date_reelle
			FROM  $phpComiteMatchs m 
			INNER JOIN $phpComiteClubs c ON m.id_equipe_dom=c.id
			INNER JOIN $phpComiteJournees j ON j.date_prevue != m.date_reelle AND j.id = m.id_journee
			WHERE   m.id_equipe_dom < 900000 and  m.buts_dom is NULL and  m.buts_ext is NULL 
			and '$ma_date' <   m.date_reelle
			AND j.id_champ = $champ
			ORDER BY id_journee";
			
					$result = 	mysql_query($query);		
					while($row = mysql_fetch_array($result))
						{    	
						$dateUS = $row[3];			
						echo "Report&eacute;e au ".''.date('d-m-Y',strtotime($dateUS)).''."<br>";;
						}
	echo "<br>";
?>
      </font></b></b></font></td>
  </tr>
</table>

</body>
</html>
