 
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center">
  <div align="left"> <font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
    </font></font> 
    <div align="center"></div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>
<div align="center"> </div>
<div align="center"></div>
<div align="center">
  <table width="900" border="0" cellspacing="0">
    <tr valign="top"> 
      <td height="30" bgcolor="#FF0000" colspan="3"> 
        <div align="center"><font size="7"><b><font color="#FF0000"> 
          <?php

$phpmatchs="php".$comite."_matchs";
$phpjournees="php".$comite."_journees";
$phpclubs ="php".$comite."_clubs";

?>
          </font></b></font><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Equipe 
          1 </b></font></div>
      </td>
      <td height="30" bgcolor="#FF0000" width="303">&nbsp;</td>
      <td height="30" bgcolor="#FF0000" width="139">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td height="37" width="43"> 
        <div align="left"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"> 
          <?php
$query = "	SELECT $phpmatchs.id_journee
			FROM  $phpmatchs  
			INNER JOIN $phpjournees ON $phpmatchs.id_journee= $phpjournees.id
			INNER JOIN $phpclubs ON $phpclubs.id=$phpmatchs.id_equipe_dom 
			WHERE $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL 
					and $phpmatchs.id_equipe_dom < 55000 and $phpmatchs.id_equipe_ext < 55000
					and $phpmatchs.id_equipe_dom != $F1_1 and $phpmatchs.id_equipe_ext != $F1_1
		 	ORDER BY $phpjournees.id_champ, $phpmatchs.id_journee ASC";
$result = 	mysql_query($query);
         
 // suppression des equipes exemptes et affichages des autres equipes		 
 // afficher si le 3me chiffre de l'équipe est égal à 0 		
		 while($row = mysql_fetch_array($result))
         	{    
		 
					
					$valeur="$row[0]";
					$poule =substr ($valeur,0,3);
			//		$journee =substr ($valeur,3,2);
			//		$equipe_dom = $row[2];	
				
					
				echo $poule ;
				
			//	echo $journee; 
			//	echo "me journ&eacute;e : ";
				
			//	 echo $equipe_dom ;
				//  echo " - " ;
				 echo "<br>";
					  
					
	
				}
	echo "<br><br>";
?>
          </font></div>
      </td>
      <td height="37" width="152"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"> 
        <?php
$query = "	SELECT $phpmatchs.id_journee
			FROM  $phpmatchs  
			INNER JOIN $phpjournees ON $phpmatchs.id_journee= $phpjournees.id
			INNER JOIN $phpclubs ON $phpclubs.id=$phpmatchs.id_equipe_dom 
			WHERE $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL 
				   and $phpmatchs.id_equipe_dom < 55000 and $phpmatchs.id_equipe_ext < 55000
					and $phpmatchs.id_equipe_dom != $F1_1 and $phpmatchs.id_equipe_ext != $F1_1
		 	ORDER BY $phpjournees.id_champ, $phpmatchs.id_journee ASC";
$result = 	mysql_query($query);
         
 // suppression des equipes exemptes et affichages des autres equipes		 
 // afficher si le 3me chiffre de l'équipe est égal à 0 		
		 while($row = mysql_fetch_array($result))
         	{    
		 
					
					$valeur="$row[0]";
					$poule =substr ($valeur,0,3);
					$journee =substr ($valeur,3,2);
					$equipe_dom = $row[2];	
				
					
				//echo $poule ;
				
				echo $journee; 
				echo "me journ&eacute;e : ";
				
				// echo $equipe_dom ;
				
				 echo "<br>";
					  
					
	
				}
	echo "<br><br>";
?>
        </font></td>
      <td height="37" width="253"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"> 
          <?php
$query = "	SELECT $phpclubs.nom
			FROM  $phpmatchs  
			INNER JOIN $phpjournees ON $phpmatchs.id_journee= $phpjournees.id
			INNER JOIN $phpclubs ON $phpclubs.id=$phpmatchs.id_equipe_dom 
			WHERE $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL
					and $phpmatchs.id_equipe_dom < 55000 and $phpmatchs.id_equipe_ext < 55000
				   and $phpmatchs.id_equipe_dom != $F1_1 and $phpmatchs.id_equipe_ext != $F1_1
				   
					
		 	ORDER BY $phpjournees.id_champ, $phpmatchs.id_journee ASC";
$result = 	mysql_query($query);
         
 // suppression des equipes exemptes et affichages des autres equipes		 
 // afficher si le 3me chiffre de l'équipe est égal à 0 		
		 while($row = mysql_fetch_array($result))
         	{    
		 
					
				//	$valeur="$row[0]";
				//	$poule =substr ($valeur,0,3);
				//	$journee =substr ($valeur,3,2);
					$equipe_dom = $row[0];	
				
					
			//	echo $poule ;
				
			//	echo $journee; 
			//	echo "me journ&eacute;e : ";
				
				 echo $equipe_dom ;
				 echo " - " ;
				 echo "<br>";
					  
					
	
				}
	echo "<br><br>";
?>
          </font></div>
      </td>
      <td height="37" width="303"><font face="Arial, Helvetica, sans-serif" color="#000000" size="3"> 
        <?php
$query = "	SELECT $phpclubs.nom
		 	FROM  $phpmatchs 
			INNER JOIN $phpjournees ON  $phpjournees.id=$phpmatchs.id_journee
			INNER JOIN $phpclubs ON $phpclubs.id=$phpmatchs.id_equipe_ext 
			WHERE   $phpmatchs.date_reelle < '$ma_date' and  $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL
					and $phpmatchs.id_equipe_dom < 55000 and $phpmatchs.id_equipe_ext < 55000
					and $phpmatchs.id_equipe_dom != $F1_1 and $phpmatchs.id_equipe_ext != $F1_1
			ORDER BY $phpjournees.id_champ ASC, $phpmatchs.id_journee ASC";
					$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{    
		  
					
		  		  	$equipe_ext = $row[0] ;	
					$date =SUBSTR ($row[1],0,10); 
				
					echo $equipe_ext ;
					echo $date ."<br>" ;
					
			}
	echo "<br><br>";
?>
        </font></td>
      <td height="37" width="139"> <font face="Arial, Helvetica, sans-serif" color="#000000" size="3"> 
        <?php
$query = "	SELECT $phpmatchs.date_reelle 
		 	FROM  $phpmatchs 
			INNER JOIN $phpjournees ON  $phpjournees.id=$phpmatchs.id_journee
			INNER JOIN $phpclubs ON $phpclubs.id=$phpmatchs.id_equipe_ext 
			WHERE   $phpmatchs.date_reelle < '$ma_date' and  $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL
					and $phpmatchs.id_equipe_dom < 55000 and $phpmatchs.id_equipe_ext < 55000
					and $phpmatchs.id_equipe_dom != $F1_1 and $phpmatchs.id_equipe_ext != $F1_1
			ORDER BY $phpjournees.id_champ ASC, $phpmatchs.id_journee ASC";
					$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{    
		  
					
		  		 // 	$equipe_ext = $row[0] ;	
					$date =SUBSTR ($row[0],0,10); 
				
				//	echo $equipe_ext ;
					echo $date ."<br>" ;
					
			}
	echo "<br><br>";
?>
        </font></td>
    </tr>
	
	<!-- ************* Equipe II (1)  *****************--> 
	
 
   <!-- ************* Equipe II (2)  *****************-->
  <table width="900" border="0" cellspacing="0">
    <tr valign="top"> 
      <td height="30" bgcolor="#FF0000" colspan="3"> 
        <div align="center"><font size="7"><b><font color="#FF0000"> 
          <?php

$phpmatchs="php".$comite."_matchs";
$phpjournees="php".$comite."_journees";
$phpclubs ="php".$comite."_clubs";

?>
    
	 
	      </font></b></font><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Equipe 
          2 </b></font></div>
      </td>
      <td height="30" bgcolor="#FF0000" width="303">&nbsp;</td>
      <td height="30" bgcolor="#FF0000" width="139">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td height="37" width="43"> 
        <div align="left"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"> 
          <?php
$query = "	SELECT $phpmatchs.id_journee
			FROM  $phpmatchs  
			INNER JOIN $phpjournees ON $phpmatchs.id_journee= $phpjournees.id
			INNER JOIN $phpclubs ON ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom 
			WHERE $phpmatchs.date_reelle < '$ma_date' and ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL 
					and $phpmatchs.id_equipe_dom  < 955000 and $phpmatchs.id_equipe_ext < 955000
					and $phpmatchs.id_equipe_dom  != ($F1_1 + 900000) and $phpmatchs.id_equipe_ext != ($F1_1 + 900000)
		 	ORDER BY $phpjournees.id_champ, $phpmatchs.id_journee ASC";
$result = 	mysql_query($query);
         
 // suppression des equipes exemptes et affichages des autres equipes		 
 // afficher si le 3me chiffre de l'équipe est égal à 0 		
		 while($row = mysql_fetch_array($result))
         	{    
		 
					
					$valeur="$row[0]";
					$poule =substr ($valeur,0,3);
			//		$journee =substr ($valeur,3,2);
			//		$equipe_dom = $row[2];	
				
					
				echo $poule ;
				
			//	echo $journee; 
			//	echo "me journ&eacute;e : ";
				
			//	 echo $equipe_dom ;
				//  echo " - " ;
				 echo "<br>";
					  
					
	
				}
	echo "<br><br>";
?>
          </font></div>
      </td>
      <td height="37" width="152"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"> 
        <?php
$query = "	SELECT $phpmatchs.id_journee
			FROM  $phpmatchs  
			INNER JOIN $phpjournees ON $phpmatchs.id_journee= $phpjournees.id
			INNER JOIN $phpclubs ON ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom 
			WHERE $phpmatchs.date_reelle < '$ma_date' and ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL 
				   and $phpmatchs.id_equipe_dom < 955000 and $phpmatchs.id_equipe_ext < 955000
					and $phpmatchs.id_equipe_dom != ($F1_1 + 900000) and $phpmatchs.id_equipe_ext != ($F1_1 + 900000)
		 	ORDER BY $phpjournees.id_champ, $phpmatchs.id_journee ASC";
$result = 	mysql_query($query);
         
 // suppression des equipes exemptes et affichages des autres equipes		 
 // afficher si le 3me chiffre de l'équipe est égal à 0 		
		 while($row = mysql_fetch_array($result))
         	{    
		 
					
					$valeur="$row[0]";
					$poule =substr ($valeur,0,3);
					$journee =substr ($valeur,3,2);
					$equipe_dom = $row[2];	
				
					
				//echo $poule ;
				
				echo $journee; 
				echo "me journ&eacute;e : ";
				
				// echo $equipe_dom ;
				
				 echo "<br>";
					  
					
	
				}
	echo "<br><br>";
?>
        </font></td>
      <td height="37" width="253"> 
        <div align="right"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"> 
          <?php
$query = "	SELECT $phpclubs.nom
			FROM  $phpmatchs  
			INNER JOIN $phpjournees ON $phpmatchs.id_journee= $phpjournees.id
			INNER JOIN $phpclubs ON ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom 
			WHERE $phpmatchs.date_reelle < '$ma_date' and ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL
					and $phpmatchs.id_equipe_dom < 955000 and $phpmatchs.id_equipe_ext < 955000
				   and $phpmatchs.id_equipe_dom != ($F1_1 +900000) and $phpmatchs.id_equipe_ext != ($F1_1 + 900000)
				   
					
		 	ORDER BY $phpjournees.id_champ, $phpmatchs.id_journee ASC";
$result = 	mysql_query($query);
         
 // suppression des equipes exemptes et affichages des autres equipes		 
 // afficher si le 3me chiffre de l'équipe est égal à 0 		
		 while($row = mysql_fetch_array($result))
         	{    
		 
					
				//	$valeur="$row[0]";
				//	$poule =substr ($valeur,0,3);
				//	$journee =substr ($valeur,3,2);
					$equipe_dom = $row[0];	
				
					
			//	echo $poule ;
				
			//	echo $journee; 
			//	echo "me journ&eacute;e : ";
				
				 echo $equipe_dom ;
				 echo " - " ;
				 echo "<br>";
					  
					
	
				}
	echo "<br><br>";
?>
          </font></div>
      </td>
      <td height="37" width="303"><font face="Arial, Helvetica, sans-serif" color="#000000" size="3"> 
        <?php
$query = "	SELECT $phpclubs.nom
		 	FROM  $phpmatchs 
			INNER JOIN $phpjournees ON  $phpjournees.id=$phpmatchs.id_journee
			INNER JOIN $phpclubs ON ($phpclubs.id + 900000)=$phpmatchs.id_equipe_ext 
			WHERE   $phpmatchs.date_reelle < '$ma_date' and  $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL
					and $phpmatchs.id_equipe_dom < 955000 and $phpmatchs.id_equipe_ext < 955000
					and $phpmatchs.id_equipe_dom !=( $F1_1 + 900000) and $phpmatchs.id_equipe_ext != ($F1_1 + 900000)
			ORDER BY $phpjournees.id_champ ASC, $phpmatchs.id_journee ASC";
					$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{    
		  
					
		  		  	$equipe_ext = $row[0] ;	
					$date =SUBSTR ($row[1],0,10); 
				
					echo $equipe_ext ;
					echo $date ."<br>" ;
					
			}
	echo "<br><br>";
?>
        </font></td>
      <td height="37" width="139"> <font face="Arial, Helvetica, sans-serif" color="#000000" size="3"> 
        <?php
$query = "	SELECT $phpmatchs.date_reelle 
		 	FROM  $phpmatchs 
			INNER JOIN $phpjournees ON  $phpjournees.id=$phpmatchs.id_journee
			INNER JOIN $phpclubs ON ($phpclubs.id + 900000)=$phpmatchs.id_equipe_ext 
			WHERE   $phpmatchs.date_reelle < '$ma_date' and  $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL
					and $phpmatchs.id_equipe_dom < 955000 and $phpmatchs.id_equipe_ext < 955000
					and $phpmatchs.id_equipe_dom != ($F1_1 + 900000) and $phpmatchs.id_equipe_ext != ($F1_1 + 900000)
			ORDER BY $phpjournees.id_champ ASC, $phpmatchs.id_journee ASC";
					$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{    
		  
					
		  		 // 	$equipe_ext = $row[0] ;	
					$date =SUBSTR ($row[0],0,10); 
				
				//	echo $equipe_ext ;
					echo $date ."<br>" ;
					
			}
	echo "<br><br>";
?>
        </font></td>
    </tr>
  </table>

</body>
</html>
