<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">




<? 
function finaleA ($bdcomite, $id, $annee)
 {
global $clubA;
global $logoA;
global $scoreA; 


   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A1001 
			FROM $bdcomiteAnnee 
			INNER JOIN $bdcomiteclubs ON $bdcomiteAnnee.clubA1001=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = 	mysql_query($query) or die (mysql_error());
         	while($row = mysql_fetch_array($result))
         		{                             
				$clubA=$row[0];
				$logoA=$row[1];
				$scoreA=$row[2];
				}	
		  
 }
 ?>  
 
 <?php 
 function finaleB ($bdcomite, $id, $annee)
 {
global $clubB;
global $logoB;
global $scoreB;

	
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A1002 
			FROM $bdcomiteAnnee 
			INNER JOIN $bdcomiteclubs ON bdcomiteAnnee.clubA1002=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubB=$row[0];
			$logoB=$row[1];
			$scoreB=$row[2];
			}	
		
 }
 ?> 
 
<? 
function demiFinaleA ($bdcomite, $id, $annee)
 {
global $clubA;
global $logoA;
global $scoreA; 
 
 

   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A2001 
			FROM $bdcomiteAnnee 
			INNER JOIN $bdcomiteclubs ON $bdcomiteAnnee.clubA2001=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubA=$row[0];
			$logoA=$row[1];
			$scoreA=$row[2];
			}		   
 }
 ?> 
  
<? function demiFinaleB ($bdcomite, $id, $annee)
 {
global $clubB;
global $logoB;
global $scoreB; 
 
 
 

   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A2002 
			FROM $bdcomiteAnnee 
			INNER JOIN $bdcomiteclubs ON $bdcomiteAnnee.clubA2002=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubB=$row[0];
			$logoB=$row[1];
			$scoreB=$row[2];
			}		   
 }
 ?>  
 
 <? function demiFinaleC ($bdcomite, $id, $annee)
 {
global $clubC;
global $logoC;
global $scoreC; 
 
 

   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A2003 
			FROM $bdcomiteAnnee 
			INNER JOIN $bdcomiteclubs ON $bdcomiteAnnee.clubA2003=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubC=$row[0];
			$logoC=$row[1];
			$scoreC=$row[2];
			}		   
 }
 ?>  
 
 <? function demiFinaleD ($bdcomite, $id, $annee)
 {
 
global $clubD;
global $logoD;
global $scoreD; 


   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A2004 
			FROM $bdcomiteAnnee 
			INNER JOIN $bdcomiteclubs ON $bdcomiteAnnee.clubA2004=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubD=$row[0];
			$logoD=$row[1];
			$scoreD=$row[2];
			}		   
 }
 ?>  
 
 <? //*********************** GA Demi finale Aller / Retour  ****************

function demiFinaleARA ($bdcomite, $id, $annee)
 {
global $clubARA;
global $logoARA;
global $scoreARA; 
 
 
   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A4001 
			FROM $bdcomiteAnnee, $bdcomiteclubs 
			WHERE $bdcomiteAnnee.clubA2001=$bdcomiteclubs.id and $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubARA=$row[0];
			$logoARA=$row[1];
			$scoreARA=$row[2];
			}		   
 }
 ?> 
  
<? function demiFinaleARB ($bdcomite, $id, $annee)
 {
global $clubARB;
global $logoARB;
global $scoreARB; 
 
 
 

   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A4002 
			FROM $bdcomiteAnnee 
			INNER JOIN $bdcomiteclubs ON  $bdcomiteAnnee.clubA2002=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubARB=$row[0];
			$logoARB=$row[1];
			$scoreARB=$row[2];
			}		   
 }
 ?>  
 
 <? function demiFinaleARC ($bdcomite, $id, $annee)
 {
global $clubARC;
global $logoARC;
global $scoreARC; 
 
 

   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A4003 
			FROM $bdcomiteAnnee
			INNR JOIN $bdcomiteclubs ON $bdcomiteAnnee.clubA2003=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubARC=$row[0];
			$logoARC=$row[1];
			$scoreARC=$row[2];
			}		   
 }
 ?>  
 
 <? function demiFinaleARD ($bdcomite, $id, $annee)
 {
 
global $clubARD;
global $logoARD;
global $scoreARD; 


   
$query = "	SELECT $bdcomiteclubs.nom,  $bdcomiteclubs.url_logo, $bdcomiteAnnee.A4004 
			FROM $bdcomiteAnnee
			INNER JOIN $bdcomiteclubs ON $bdcomiteAnnee.clubA2004=$bdcomiteclubs.id
			WHERE $bdcomiteAnnee.id='$id'";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubARD=$row[0];
			$logoARD=$row[1];
			$scoreARD=$row[2];
			}		   
 }
 ?>  
 
</body>
</html>