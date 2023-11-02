 
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
<div align="center">
<table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" bgcolor="#FF0000"> 
        <div align="center"><font size="7"><b><font color="#FF0000">
          <?php

$phpmatchs="Php".$comite."_matchs";
$phpjournees="Php".$comite."_journees";
$phpclubs ="Php".$comite."_clubs";

?>
          </font></b></font><font size="5" color="#000000" face="Arial, Helvetica, sans-serif"><b>Honneur</b></font></div>
      </td>
      <td width="171" height="17" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="89" height="23"><font size="3"><font size="3" face="Arial, Helvetica, sans-serif"> 
       
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom,
					$phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ<'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
				  $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$H1' and $phpmatchs.id_equipe_ext!='$H1' and
				  $phpmatchs.id_equipe_dom!='$H2' and $phpmatchs.id_equipe_ext!='$H2' and
				  $phpmatchs.id_equipe_dom!='$H3' and $phpmatchs.id_equipe_ext!='$H3'
			ORDER BY $phpmatchs.date_reelle";
$result = 	mysql_query($query);
         
 // suppression des equipes exemptes et affichages des autres equipes		 
 // afficher si le 3me chiffre de l'équipe est égal à 0 		
		 while($row = mysql_fetch_array($result))
         	{    
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{
					echo $row[7]."<br>";
					}		
	  		}
	echo "<br><br>";
?>
        </font></font></td>
      <td width="134" height="23"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom,
					$phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ<'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
				  $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$H1' and $phpmatchs.id_equipe_ext!='$H1' and
				  $phpmatchs.id_equipe_dom!='$H2' and $phpmatchs.id_equipe_ext!='$H2' and
				  $phpmatchs.id_equipe_dom!='$H3' and $phpmatchs.id_equipe_ext!='$H3'
			ORDER BY $phpmatchs.date_reelle"; 
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{    
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{
					$journee="$row[2]"-("$row[7]"*100); echo $journee ."me journ&eacute;e :<br>";
					}
			}
	echo "<br><br>";
?>
        </font></font></td>
      <td width="281" height="23"> 
        <div align="right"> <font size="3"><b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
          </font><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ<'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$H1' and $phpmatchs.id_equipe_ext!='$H1' and
				  $phpmatchs.id_equipe_dom!='$H2' and $phpmatchs.id_equipe_ext!='$H2' and
				  $phpmatchs.id_equipe_dom!='$H3' and $phpmatchs.id_equipe_ext!='$H3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{    
		  		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{
		  		  	echo $row[8] . "- <br>";	
					}
			}
	echo "<br><br>";
?>
          </font></b></font></div>
      </td>
      <td width="239" height="23"> <font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><b><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext,
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM   $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'180' and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.id_journee= $phpjournees.id and
					$phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_ext and
 					$phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$H1' and $phpmatchs.id_equipe_ext!='$H1' and
				  $phpmatchs.id_equipe_dom!='$H2' and $phpmatchs.id_equipe_ext!='$H2' and
				  $phpmatchs.id_equipe_dom!='$H3' and $phpmatchs.id_equipe_ext!='$H3'
 			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
       		{      
        		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{
					echo $row[8]."<br>";
       				}
			}
	echo "<br><br>";	
?>
        </font></b></font></b></font></td>
      <td width="171" height="23"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext,
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ<'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and 
				  $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$H1' and $phpmatchs.id_equipe_ext!='$H1' and
				  $phpmatchs.id_equipe_dom!='$H2' and $phpmatchs.id_equipe_ext!='$H2' and
				  $phpmatchs.id_equipe_dom!='$H3' and $phpmatchs.id_equipe_ext!='$H3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
				if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{	    
		 	 		echo $row[3]."<br>"; 
					}
			}
	echo "<br><br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Promotion 
          Honneur</b></font></div>
      </td>
      <td width="171" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="89" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext,
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM   $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'190'and $phpjournees.id_champ>'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				   $phpmatchs.id_equipe_dom!='$PH1' and $phpmatchs.id_equipe_ext!='$PH1' and
				  $phpmatchs.id_equipe_dom!='$PH2' and $phpmatchs.id_equipe_ext!='$PH2' and
				  $phpmatchs.id_equipe_dom!='$PH3' and $phpmatchs.id_equipe_ext!='$PH3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{    
					echo $row[7]."<br>";
       				}
			}		
	echo "<br><br>";
?>
        </font></td>
      <td width="134" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext,
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'190'and $phpjournees.id_champ>'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
			 	   $phpmatchs.id_equipe_dom!='$PH1' and $phpmatchs.id_equipe_ext!='$PH1' and
				  $phpmatchs.id_equipe_dom!='$PH2' and $phpmatchs.id_equipe_ext!='$PH2' and
				  $phpmatchs.id_equipe_dom!='$PH3' and $phpmatchs.id_equipe_ext!='$PH3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {
		 if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
			{    
		 	$journee="$row[2]"-("$row[7]"*100); echo $journee ."me journ&eacute;e :<br>";
			}
		 }	
	echo "<br><br>";	
?>
        </font></td>
      <td width="281" height="25"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext,
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'190'and $phpjournees.id_champ>'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
					$phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
					   $phpmatchs.id_equipe_dom!='$PH1' and $phpmatchs.id_equipe_ext!='$PH1' and
				  $phpmatchs.id_equipe_dom!='$PH2' and $phpmatchs.id_equipe_ext!='$PH2' and
				  $phpmatchs.id_equipe_dom!='$PH3' and $phpmatchs.id_equipe_ext!='$PH3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        {
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
			{    
		  	echo $row[8] . "- <br>";	
			}
		}
	echo "<br><br>";
?>
          </b></font></div>
      </td>
      <td width="239" height="25"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext,
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'190' and $phpjournees.id_champ>'180'and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.id_journee= $phpjournees.id and
			 $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
  				    $phpmatchs.id_equipe_dom!='$PH1' and $phpmatchs.id_equipe_ext!='$PH1' and
				  $phpmatchs.id_equipe_dom!='$PH2' and $phpmatchs.id_equipe_ext!='$PH2' and
				  $phpmatchs.id_equipe_dom!='$PH3' and $phpmatchs.id_equipe_ext!='$PH3'
 			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        {
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
		
			{      
        	echo $row[8]."<br>";
       		}
		}
	echo "<br><br>";
?>
        </font></b></font></td>
      <td width="171" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext,
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'190'and $phpjournees.id_champ>'180' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
			 	   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$PH1' and $phpmatchs.id_equipe_ext!='$PH1' and
				  $phpmatchs.id_equipe_dom!='$PH2' and $phpmatchs.id_equipe_ext!='$PH2' and
				  $phpmatchs.id_equipe_dom!='$PH3' and $phpmatchs.id_equipe_ext!='$PH3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )	
			{    
		 	 echo $row[3]."<br>"; 
			}
		}
	echo "<br><br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>1re 
          S&eacute;rie </b></font></div>
      </td>
      <td width="171" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="89" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'200'and $phpjournees.id_champ>'190' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
			 	  $phpmatchs.id_equipe_dom!='$S1_1' and $phpmatchs.id_equipe_ext!='$S1_1' and
				  $phpmatchs.id_equipe_dom!='$S1_2' and $phpmatchs.id_equipe_ext!='$S1_2' and
				  $phpmatchs.id_equipe_dom!='$S1_3' and $phpmatchs.id_equipe_ext!='$S1_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )	
				{    
		 		echo $row[7]."<br>";
				}
			}
	echo "<br><br>";
?>
        </font></td>
      <td width="134" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, 
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'200'and $phpjournees.id_champ>'190' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				   $phpmatchs.id_equipe_dom!='$S1_1' and $phpmatchs.id_equipe_ext!='$S1_1' and
				  $phpmatchs.id_equipe_dom!='$S1_2' and $phpmatchs.id_equipe_ext!='$S1_2' and
				  $phpmatchs.id_equipe_dom!='$S1_3' and $phpmatchs.id_equipe_ext!='$S1_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
       	{
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )	
				{    
				$journee="$row[2]"-("$row[7]"*100); echo $journee ."me journ&eacute;e :";
				echo "<br>";
				}
		}
	echo "<br><br>";
?>
        </font></td>
      <td width="281" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, 
					$phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'200'and $phpjournees.id_champ>'190' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and 
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$S1_1' and $phpmatchs.id_equipe_ext!='$S1_1' and
				  $phpmatchs.id_equipe_dom!='$S1_2' and $phpmatchs.id_equipe_ext!='$S1_2' and
				  $phpmatchs.id_equipe_dom!='$S1_3' and $phpmatchs.id_equipe_ext!='$S1_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{    
		  			echo $row[8] . "- <br>";	
					}
			}		
	echo "<br><br>";
?>
          </font></b></font></div>
      </td>
      <td width="239" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM    $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'200' and $phpjournees.id_champ>'190'and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.id_journee= $phpjournees.id and
			       $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL  and
 				 $phpmatchs.id_equipe_dom!='$S1_1' and $phpmatchs.id_equipe_ext!='$S1_1' and
				  $phpmatchs.id_equipe_dom!='$S1_2' and $phpmatchs.id_equipe_ext!='$S1_2' and
				  $phpmatchs.id_equipe_dom!='$S1_3' and $phpmatchs.id_equipe_ext!='$S1_3'
 			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        		{
		 			if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{      
					echo $row[8]."<br>";
					}
				}
	echo "<br><br>";
?>
        </b></font></td>
      <td width="171" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, 
					$phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'200'and $phpjournees.id_champ>'190' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				 $phpmatchs.id_equipe_dom!='$S1_1' and $phpmatchs.id_equipe_ext!='$S1_1' and
				  $phpmatchs.id_equipe_dom!='$S1_2' and $phpmatchs.id_equipe_ext!='$S1_2' and
				  $phpmatchs.id_equipe_dom!='$S1_3' and $phpmatchs.id_equipe_ext!='$S1_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )	
				{    
		 		 echo $row[3]."<br>"; 
				}
			}	
	echo "<br><br>";	
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="18" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>2me 
          S&eacute;rie </b></font></div>
      </td>
      <td width="171" height="18" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="89" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, 
					$phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'210'and $phpjournees.id_champ>'200' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and
				   $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
			      $phpmatchs.id_equipe_dom!='$S2_1' and $phpmatchs.id_equipe_ext!='$S2_1' and
				  $phpmatchs.id_equipe_dom!='$S2_2' and $phpmatchs.id_equipe_ext!='$S2_2' and
				  $phpmatchs.id_equipe_dom!='$S2_3' and $phpmatchs.id_equipe_ext!='$S2_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{    
					echo $row[7]."<br>";
					}
			}
	echo "<br><br>";
?>
        </font></td>
      <td width="134" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue,
					$phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'210'and $phpjournees.id_champ>'200' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and
			      $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
			      $phpmatchs.id_equipe_dom!='$S2_1' and $phpmatchs.id_equipe_ext!='$S2_1' and
				  $phpmatchs.id_equipe_dom!='$S2_2' and $phpmatchs.id_equipe_ext!='$S2_2' and
				  $phpmatchs.id_equipe_dom!='$S2_3' and $phpmatchs.id_equipe_ext!='$S2_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
				{    
		 		$journee="$row[2]"-("$row[7]"*100); echo $journee ."me journ&eacute;e :<br>";
				}
			}
	echo "<br><br>";
?>
        </font></td>
      <td width="281" height="25"> 
        <div align="right"> <font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
          </font><font size="3" face="Arial, Helvetica, sans-serif"> 
          <?php
$query = "SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue,
				  $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
				  FROM  $phpmatchs, $phpjournees, $phpclubs 
				  WHERE  $phpjournees.id_champ<'210'and $phpjournees.id_champ>'200' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and 
				  $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				   $phpmatchs.id_equipe_dom!='$S2_1' and $phpmatchs.id_equipe_ext!='$S2_1' and
				  $phpmatchs.id_equipe_dom!='$S2_2' and $phpmatchs.id_equipe_ext!='$S2_2' and
				  $phpmatchs.id_equipe_dom!='$S2_3' and $phpmatchs.id_equipe_ext!='$S2_3'
				  ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
				{    
				echo $row[8] . "- <br>";	
				}
			}
	echo "<br><br>";
?>
          </font></b></font></div>
      </td>
      <td width="239" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue,
 				  $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
 			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'210' and $phpjournees.id_champ>'200'and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.id_journee= $phpjournees.id
				   and $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
  				  $phpmatchs.id_equipe_dom!='$S2_1' and $phpmatchs.id_equipe_ext!='$S2_1' and
				  $phpmatchs.id_equipe_dom!='$S2_2' and $phpmatchs.id_equipe_ext!='$S2_2' and
				  $phpmatchs.id_equipe_dom!='$S2_3' and $phpmatchs.id_equipe_ext!='$S2_3'
 			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 	if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
		 		{      
        		echo $row[8]."<br>";
				}
			}
	echo "<br><br>";
?>
        </b></font></td>
      <td width="171" height="25"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue,
					$phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'210'and $phpjournees.id_champ>'200' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and 
					$phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
			 	  $phpmatchs.id_equipe_dom!='$S2_1' and $phpmatchs.id_equipe_ext!='$S2_1' and
				  $phpmatchs.id_equipe_dom!='$S2_2' and $phpmatchs.id_equipe_ext!='$S2_2' and
				  $phpmatchs.id_equipe_dom!='$S2_3' and $phpmatchs.id_equipe_ext!='$S2_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
				if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
				{    
		 	 	echo $row[3]."<br>"; 
				}
			}	
	echo "<br><br>";
?>
        </font> </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="32" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>3me 
          / 4me S&eacute;rie</b></font></div>
      </td>
      <td width="171" height="32" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr valign="top"> 
      <td width="89" height="25"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue,
 					$phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'230'and $phpjournees.id_champ>'210' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and 
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$S34_1' and $phpmatchs.id_equipe_ext!='$S34_1' and
				  $phpmatchs.id_equipe_dom!='$S34_2' and $phpmatchs.id_equipe_ext!='$S34_2' and
				  $phpmatchs.id_equipe_dom!='$S34_3' and $phpmatchs.id_equipe_ext!='$S34_3'
			
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{    
		 			echo $row[7]."<br>";
					}
			}
	echo "<br><br>";
?>
        </font></td>
      <td width="134" height="25"> <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, 
				    $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'230'and $phpjournees.id_champ>'210' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and 
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
			      $phpmatchs.id_equipe_dom!='$S34_1' and $phpmatchs.id_equipe_ext!='$S34_1' and
				  $phpmatchs.id_equipe_dom!='$S34_2' and $phpmatchs.id_equipe_ext!='$S34_2' and
				  $phpmatchs.id_equipe_dom!='$S34_3' and $phpmatchs.id_equipe_ext!='$S34_3'
			
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )	
					{    
		 			$journee="$row[2]"-("$row[7]"*100); echo $journee ."me journ&eacute;e :<br>";
					}
			}
	echo "<br><br>";
?>
        </font></td>
      <td width="281" height="25"> 
        <div align="right"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue,
					 $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'230'and $phpjournees.id_champ>'210' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and 
					$phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
			      $phpmatchs.id_equipe_dom!='$S34_1' and $phpmatchs.id_equipe_ext!='$S34_1' and
				  $phpmatchs.id_equipe_dom!='$S34_2' and $phpmatchs.id_equipe_ext!='$S34_2' and
				  $phpmatchs.id_equipe_dom!='$S34_3' and $phpmatchs.id_equipe_ext!='$S34_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )	
					{    
		  			echo $row[8] . "- <br>";	
					}
			}
	echo "<br><br>";
?>
          </b></font></div>
      </td>
      <td width="239" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, 
         		    $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'230' and $phpjournees.id_champ>'210'and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.id_journee= $phpjournees.id and 
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_ext and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
   				$phpmatchs.id_equipe_dom!='$S34_1' and $phpmatchs.id_equipe_ext!='$S34_1' and
				  $phpmatchs.id_equipe_dom!='$S34_2' and $phpmatchs.id_equipe_ext!='$S34_2' and
				  $phpmatchs.id_equipe_dom!='$S34_3' and $phpmatchs.id_equipe_ext!='$S34_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
       		{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{      
					echo $row[8]."<br>";
					}
			}
	echo "<br><br>";
?>
        <br>
        </b></font></td>
      <td width="171" height="25"> <font size="3" color="#000000" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, 
                    $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ<'230'and $phpjournees.id_champ>'210' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and 
				   $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$S34_1' and $phpmatchs.id_equipe_ext!='$S34_1' and
				  $phpmatchs.id_equipe_dom!='$S34_2' and $phpmatchs.id_equipe_ext!='$S34_2' and
				  $phpmatchs.id_equipe_dom!='$S34_3' and $phpmatchs.id_equipe_ext!='$S34_3'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],2,1)== '0' and substr($row[1],2,1)== '0' )
					{    
		 	 		echo $row[3]."<br>"; 
					}
			}		
	echo "<br><br>";
?>
        </b></font></td>
    </tr>
    <tr> 
      <td colspan="4" height="9" bgcolor="#FF0000"> 
        <div align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>R&eacute;serve</b></font></div>
      </td>
      <td width="171" height="9" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr> 
      <td width="89" height="24"><font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font size="3"><font face="Arial, Helvetica, sans-serif">
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, 
					$phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ>'270' and ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and
				 ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$R_1' and $phpmatchs.id_equipe_ext!='$R_1' and
				  $phpmatchs.id_equipe_dom!='$R_2' and $phpmatchs.id_equipe_ext!='$R_2' and
				  $phpmatchs.id_equipe_dom!='$R_3' and $phpmatchs.id_equipe_ext!='$R_3' and
				  $phpmatchs.id_equipe_dom!='$R_4' and $phpmatchs.id_equipe_ext!='$R_4' and
				  $phpmatchs.id_equipe_dom!='$R_5' and $phpmatchs.id_equipe_ext!='$R_5' and
				  $phpmatchs.id_equipe_dom!='$R_6' and $phpmatchs.id_equipe_ext!='$R_6'
				  
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],3,1)== '0' and substr($row[1],3,1)== '0' )
					{    
		 			echo $row[7]."<br>";
					}
			}
	echo "<br><br>";
?>
        </font></font></font></td>
      <td width="134" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ>'270' and ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and
				 ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
 			      $phpmatchs.id_equipe_dom!='$R_1' and $phpmatchs.id_equipe_ext!='$R_1' and
				  $phpmatchs.id_equipe_dom!='$R_2' and $phpmatchs.id_equipe_ext!='$R_2' and
				  $phpmatchs.id_equipe_dom!='$R_3' and $phpmatchs.id_equipe_ext!='$R_3' and
				  $phpmatchs.id_equipe_dom!='$R_4' and $phpmatchs.id_equipe_ext!='$R_4' and
				  $phpmatchs.id_equipe_dom!='$R_5' and $phpmatchs.id_equipe_ext!='$R_5' and
				  $phpmatchs.id_equipe_dom!='$R_6' and $phpmatchs.id_equipe_ext!='$R_6'
			
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{
		 		if (substr($row[0],3,1)== '0' and substr($row[1],3,1)== '0' )
					{     
		 			$journee="$row[2]"-("$row[7]"*100); echo $journee ."me journ&eacute;e :<br>";
					}
			}		
	echo "<br><br>";
?>
        </font></font></td>
      <td width="281" height="24"> 
        <div align="right"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
          <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ>'270' and ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and
 				 ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
 				  $phpmatchs.id_equipe_dom!='$R_1' and $phpmatchs.id_equipe_ext!='$R_1' and
				  $phpmatchs.id_equipe_dom!='$R_2' and $phpmatchs.id_equipe_ext!='$R_2' and
				  $phpmatchs.id_equipe_dom!='$R_3' and $phpmatchs.id_equipe_ext!='$R_3' and
				  $phpmatchs.id_equipe_dom!='$R_4' and $phpmatchs.id_equipe_ext!='$R_4' and
				  $phpmatchs.id_equipe_dom!='$R_5' and $phpmatchs.id_equipe_ext!='$R_5' and
				  $phpmatchs.id_equipe_dom!='$R_6' and $phpmatchs.id_equipe_ext!='$R_6'
 			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{
		 		if (substr($row[0],3,1)== '0' and substr($row[1],3,1)== '0' )
					{    
				  	echo $row[8] . "- <br>";	
					}
			}		
	echo "<br><br>";	
?>
          </b></font></div>
      </td>
      <td width="239" height="24"> <font size="3" face="Arial, Helvetica, sans-serif"><b> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE  $phpjournees.id_champ>'270' and $phpclubs.id+900000=$phpmatchs.id_equipe_ext and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and $phpclubs.id+900000=$phpmatchs.id_equipe_ext and
				   $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
				  $phpmatchs.id_equipe_dom!='$R_1' and $phpmatchs.id_equipe_ext!='$R_1' and
				  $phpmatchs.id_equipe_dom!='$R_2' and $phpmatchs.id_equipe_ext!='$R_2' and
				  $phpmatchs.id_equipe_dom!='$R_3' and $phpmatchs.id_equipe_ext!='$R_3' and
				  $phpmatchs.id_equipe_dom!='$R_4' and $phpmatchs.id_equipe_ext!='$R_4' and
				  $phpmatchs.id_equipe_dom!='$R_5' and $phpmatchs.id_equipe_ext!='$R_5' and
				  $phpmatchs.id_equipe_dom!='$R_6' and $phpmatchs.id_equipe_ext!='$R_6'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        		{
		 		if (substr($row[0],3,1)== '0' and substr($row[1],3,1)== '0' )
					{    
		           	echo $row[8]."<br>";
       				}
				}
	echo "<br><br>";
?>
        </b></font></td>
      <td width="171" height="24"> <font size="3" color="#000000"><b><font face="Arial, Helvetica, sans-serif"> 
        <?php
$query = "	SELECT  $phpmatchs.id_equipe_dom, $phpmatchs.id_equipe_ext, $phpmatchs.id_journee, $phpmatchs.date_reelle, $phpmatchs.buts_dom, $phpmatchs.buts_ext, $phpjournees.date_prevue, $phpjournees.id_champ, $phpclubs.nom, $phpclubs.id 
			FROM  $phpmatchs, $phpjournees, $phpclubs 
			WHERE $phpjournees.id_champ>'270' and ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.id_journee= $phpjournees.id and $phpmatchs.date_reelle < '$ma_date' and
				 ($phpclubs.id + 900000)=$phpmatchs.id_equipe_dom and $phpmatchs.buts_dom is NULL and $phpmatchs.buts_ext is NULL and
 				  $phpmatchs.id_equipe_dom!='$R_1' and $phpmatchs.id_equipe_ext!='$R_1' and
				  $phpmatchs.id_equipe_dom!='$R_2' and $phpmatchs.id_equipe_ext!='$R_2' and
				  $phpmatchs.id_equipe_dom!='$R_3' and $phpmatchs.id_equipe_ext!='$R_3' and
				  $phpmatchs.id_equipe_dom!='$R_4' and $phpmatchs.id_equipe_ext!='$R_4' and
				  $phpmatchs.id_equipe_dom!='$R_5' and $phpmatchs.id_equipe_ext!='$R_5' and
				  $phpmatchs.id_equipe_dom!='$R_6' and $phpmatchs.id_equipe_ext!='$R_6'
			ORDER BY $phpmatchs.date_reelle";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{
		 		if (substr($row[0],3,1)== '0' and substr($row[1],3,1)== '0' )
					{     	  
		 	 		echo $row[3]."<br>"; 
					}
			}
	echo "<br><br>";
?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
