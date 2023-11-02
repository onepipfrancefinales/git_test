<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>

<?php //clubA8001
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8001 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8001 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$sigle = $row[1];
		}
$nom8001 = substr($nom,0,20);		
$clubA8001 = ($nom8001.' '.$sigle);

?> 

<?php //clubA8002
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8002 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8002 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom8002 = substr($nom,0,20);		
$clubA8002 = ($nom8002.' '.$sigle);


?> 

<?php //clubA8003
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8003 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8003 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom8003 = substr($nom,0,20);		
$clubA8003 = ($nom8003.' '.$sigle);
?> 


<?php //clubA8004
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8004 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8004 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom8004 = substr($nom,0,20);		
$clubA8004 = ($nom8004.' '.$sigle);
?> 

<?php //clubA8005
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8005 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8005 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom8005 = substr($nom,0,20);		
$clubA8005 = ($nom8005.' '.$sigle);
?> 

<?php //clubA8006
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8006 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8006 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom8006 = substr($nom,0,20);		
$clubA8006 = ($nom8006.' '.$sigle);
?> 

<?php //clubA8007
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8007 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8007 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom8007 = substr($nom,0,20);		
$clubA8007 = ($nom8007.' '.$sigle);
?> 

<?php //clubA8008
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA8008 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA8008 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom8008 = substr($nom,0,20);		
$clubA8008 = ($nom8008.' '.$sigle);
?> 




<?php // ----demi----------------------
$query = "SELECT id,  A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008
					 FROM  $phpcomite_annee WHERE id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A8001 = $row[1];
	$A8002 = $row[2];
	$A8003 = $row[3];
	$A8004 = $row[4];
	$A8005 = $row[5];
	$A8006 = $row[6];
	$A8007 = $row[7];
	$A8008 = $row[8];
	}
 
?>
<?php // ----Quarts----------------------
$query = "SELECT id,  A4001, A4002,  A4003, A4004, A4005, A4006, A4007 ,A4008
					 FROM  $phpcomite_annee WHERE id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A4001 = $row[1];
	$A4002 = $row[2];
	$A4003 = $row[3];
	$A4004 = $row[4];
	$A4005 = $row[5];
	$A4006 = $row[6];
	$A4007 = $row[7];
	$A4008 = $row[8];
	
	
	
	}
 
?>


<?php	//------Quarts--------							  
        if ($A8001+$A8002>0) if ($A8001>$A8002)	$nom4002= $nom8001;	else	$nom4002= $nom8002;  else $nom4002=$nombA;?>
<?php   if ($A8003+$A8004>0) if ($A8003>$A8004)	$nom4004= $nom8003;	else	$nom4004= $nom8004;  else $nom4004=$clubA;?>
<?php   if ($A8005+$A8006>0) if ($A8005>$A8006)	$nom4006= $nom8005;	else	$nom4006= $nom8006;  else $nom4006=$clubA;?>
<?php   if ($A8007+$A8008>0) if ($A8007>$A8008)	$nom4008= $nom8007;	else	$nom4008= $nom8008;  else $nom4008=$clubA;?>





 <?php //clubA4001
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA4001 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA4001 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom4001 = substr($nom,0,20);		
$clubA4001 = ($nom4001.' '.$sigle);
?> 


<?php //clubA4003
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA4003 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA4003 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom4003 = substr($nom,0,20);		
$clubA4003 = ($nom4003.' '.$sigle);
?> 

<?php //clubA4005
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA4005 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA4005 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom4005 = substr($nom,0,20);		
$clubA4005 = ($nom4005.' '.$sigle);
?> 

<?php //clubA4007
$requete = "SELECT $phpcomite_clubs.nom, $phpcomite_annee.clubA4007 FROM $phpcomite_clubs, $phpcomite_annee WHERE $phpcomite_clubs.id=$phpcomite_annee.clubA4007 and $phpcomite_annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[0];
	$sigle = $row[1];
	}
$nom4007 = substr($nom,0,20);		
$clubA4007 = ($nom4007.' '.$sigle);
?> 



<?php // ----Demi----------------------
$query = "SELECT id,  A2001, A2002,  A2003, A2004 ,  A1001, A1002
					 FROM  $phpcomite_annee WHERE id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A2001 = $row[1];
	$A2002 = $row[2];
	$A2003 = $row[3];
	$A2004 = $row[4];
	$A1001 = $row[5];
	$A1002 = $row[6];

	}
 
?>




 <?php	//------DEMi--------
							  
         		        if ($A4001>$A4002)	$nom2001= $nom4001;	else	$nom2001= $nom4002;  ?>
<?php  					if ($A4003>$A4004)	$nom2002= $nom4003;	else	$nom2002= $nom4004;  ?>				  
<?php     				if ($A4005>$A4006)	$nom2003= $nom4005;	else	$nom2003= $nom4006; ?>
<?php       			if ($A4007>$A4008)	$nom2004= $nom4007;	else	$nom2004= $nom4008; ?>




 <?php	//------Finale--------							  
        if ($A2001+$A2002>0)  if ($A2001>$A2002)	$nom1001= $nom2001;	else	$nom1001= $nom2002;  else $nom1001=$clubA;?>
<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004)	$nom1002= $nom2003; else	$nom1002= $nom2004;  else $nom1002=$clubA;?>


<?php	
mysql_close(); // Déconnexion de MySQL
?>




