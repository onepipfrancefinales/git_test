

<?//-------Sélection des dates et lieux des rencontres-------------------------

$requete = "	SELECT barrage, Quart4, Quart3, Quart2, Quart1, Demi1, Demi2, Finale 
				FROM $bdcomiteAnnee  
				WHERE id=$id ";
	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
			{ 
		  	$barrage=$row[0];
			$quart4=$row[1];
			$quart3=$row[2];
			$quart2=$row[3];
			$quart1=$row[4];
	    	$demi1=$row[5];
			$demi2=$row[6];
	    	$finale=$row[7]; 
			}

?>
			


<?php // ----Récupération des scores des Quarts----------------------


$query = "	SELECT id,  A4001, A4002, A4003, A4004, A4005, A4006, A4007 ,A4008,
					    A8001, A8002, A8003, A8004, A8005, A8006, A8007 ,A8008,
						B2001, B2002, B2003, B2004, A2001, A2002, A2003, A2004, 
						A1001, A1002
			FROM  $bdcomiteAnnee
			WHERE id=$id "; 
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
	
	$A8001 = $row[9];
	$A8002 = $row[10];
	$A8003 = $row[11];
	$A8004 = $row[12];
	$A8005 = $row[13];
	$A8006 = $row[14];
	$A8007 = $row[15];
	$A8008 = $row[16];
	
	$B2001 = $row[17];
	$B2002 = $row[18];
	$B2003 = $row[19];
	$B2004 = $row[20];
	
	$A2001 = $row[21];
	$A2002 = $row[22];
	$A2003 = $row[23];
	$A2004 = $row[24];
	
	$A1001 = $row[25];
	$A1002 = $row[26];
		
}
	
	

 
?>
<?php	$clubA="-"; ?>



<?//--------Sélection des équipes --------------------------------
//clubA4001

fonction clubA4001 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee)
{
global $logo4001;
global $clubA4001;
$requete = "SELECT phpmpy_clubs.nom, phpmpy_clubs.url_logo, phpmpy_clubs.clubA4001 
			FROM phpmpy_clubs
			INNER JOIN phpmpy_pf2018 ON phpmpy_clubs.id=phpmpy_pf2018.clubA4001
			WHERE phpmpy_pf2018.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4001 = substr($nom,0,20);
$logo4001=$logoA;	
$clubA4001 = ($nom4001.' '.$sigle);
}

?> 


<?//--------Sélection des équipes --------------------------------
//clubA4002


global $logo4002;
global $clubA4002;
$requete = "SELECT $bdcomiteClubs.nom, phpmpy_clubs.url_logo, $bdcomiteAnnee.clubA4002 
			FROM $bdcomiteClubs
			INNER JOIN $bdcomiteAnnee ON $bdcomiteClubs.id=$bdcomiteAnnee.clubA4002
			WHERE $bdcomiteAnnee.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4002 = substr($nom,0,20);
$logo4002=$logoA;	
$clubA4002 = ($nom4002.' '.$sigle);


?> 

<?//--------Sélection des équipes --------------------------------
//clubA4003


global $logo4003;
global $clubA4003;
$requete = "SELECT $bdcomiteClubs.nom, phpmpy_clubs.url_logo, $bdcomiteAnnee.clubA4003 
			FROM $bdcomiteClubs
			INNER JOIN $bdcomiteAnnee ON $bdcomiteClubs.id=$bdcomiteAnnee.clubA4003
			WHERE $bdcomiteAnnee.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4003 = substr($nom,0,20);
$logo4003=$logoA;	
$clubA4003 = ($nom4003.' '.$sigle);


?> 

<?//--------Sélection des équipes --------------------------------
//clubA4004


global $logo4004;
global $clubA4004;
$requete = "SELECT $bdcomiteClubs.nom, phpmpy_clubs.url_logo, $bdcomiteAnnee.clubA4004
			FROM $bdcomiteClubs
			INNER JOIN $bdcomiteAnnee ON $bdcomiteClubs.id=$bdcomiteAnnee.clubA4004
			WHERE $bdcomiteAnnee.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4004 = substr($nom,0,20);
$logo4004=$logoA;	
$clubA4004 = ($nom4004.' '.$sigle);


?> 

<?//--------Sélection des équipes --------------------------------
//clubA4001


global $logo4001;
global $clubA4001;
$requete = "SELECT $bdcomiteClubs.nom, phpmpy_clubs.url_logo, $bdcomiteAnnee.clubA4001 
			FROM $bdcomiteClubs
			INNER JOIN $bdcomiteAnnee ON $bdcomiteClubs.id=$bdcomiteAnnee.clubA4001
			WHERE $bdcomiteAnnee.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4001 = substr($nom,0,20);
$logo4001=$logoA;	
$clubA4001 = ($nom4001.' '.$sigle);


?> 

<?//--------Sélection des équipes --------------------------------
//clubA4001


global $logo4001;
global $clubA4001;
$requete = "SELECT $bdcomiteClubs.nom, phpmpy_clubs.url_logo, $bdcomiteAnnee.clubA4001 
			FROM $bdcomiteClubs
			INNER JOIN $bdcomiteAnnee ON $bdcomiteClubs.id=$bdcomiteAnnee.clubA4001
			WHERE $bdcomiteAnnee.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4001 = substr($nom,0,20);
$logo4001=$logoA;	
$clubA4001 = ($nom4001.' '.$sigle);


?> 

<?//--------Sélection des équipes --------------------------------
//clubA4001


global $logo4001;
global $clubA4001;
$requete = "SELECT $bdcomiteClubs.nom, phpmpy_clubs.url_logo, $bdcomiteAnnee.clubA4001 
			FROM $bdcomiteClubs
			INNER JOIN $bdcomiteAnnee ON $bdcomiteClubs.id=$bdcomiteAnnee.clubA4001
			WHERE $bdcomiteAnnee.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4001 = substr($nom,0,20);
$logo4001=$logoA;	
$clubA4001 = ($nom4001.' '.$sigle);


?> 

<?//--------Sélection des équipes --------------------------------
//clubA4001


global $logo4001;
global $clubA4001;
$requete = "SELECT $bdcomiteClubs.nom, phpmpy_clubs.url_logo, $bdcomiteAnnee.clubA4001 
			FROM $bdcomiteClubs
			INNER JOIN $bdcomiteAnnee ON $bdcomiteClubs.id=$bdcomiteAnnee.clubA4001
			WHERE $bdcomiteAnnee.id=$id"; 
 	$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$nom = $row[0];
		$logoA=$row[1];
		$sigle = $row[2];
		}
$nom4001 = substr($nom,0,20);
$logo4001=$logoA;	
$clubA4001 = ($nom4001.' '.$sigle);


?> 



  
<?php  
		
$tiret="-";
		
		
		if (($A8001==NULL) OR ($A8001 + $A8002 == 0)) {$A8001=$tiret; $A4001=$tiret;} else { $A8001=$A8001; $A4001=$A4001;}
		if (($A8002==NULL) OR ($A8001 + $A8002 == 0)) {$A8002=$tiret; $A4002=$tiret;} else { $A8002=$A8002; $A4002=$A4002;}
		if (($A8003==NULL) OR ($A8003 + $A8004 == 0)) {$A8003=$tiret; $A4003=$tiret;} else { $A8003=$A8003; $A4003=$A4003;}
		if (($A8004==NULL) OR ($A8003 + $A8004 == 0)) {$A8004=$tiret; $A4004=$tiret;} else { $A8004=$A8004; $A4004=$A4004;}
		if (($A8005==NULL) OR ($A8005 + $A8006 == 0)) {$A8005=$tiret; $A4005=$tiret;} else { $A8005=$A8005; $A4005=$A4005;}
		if (($A8006==NULL) OR ($A8005 + $A8006 == 0)) {$A8006=$tiret; $A4006=$tiret;} else { $A8006=$A8006; $A4006=$A4006;}
		if (($A8007==NULL) OR ($A8007 + $A8008 == 0)) {$A8007=$tiret; $A4007=$tiret;} else { $A8007=$A8007; $A4007=$A4007;}
		if (($A8008==NULL) OR ($A8007 + $A8008 == 0)) {$A8008=$tiret; $A4008=$tiret;} else { $A8008=$A8008; $A4008=$A4008;}
				
		if (($A2001==NULL) OR ($A2001 + $A2002 == 0)) {$A2001=$tiret; $B2001=$tiret;} else { $A2001=$A2001; $B2001=$B2001;}
		if (($A2002==NULL) OR ($A2001 + $A2002 == 0)) {$A2002=$tiret; $B2002=$tiret;} else { $A2002=$A2002; $B2002=$B2002;}
		if (($A2003==NULL) OR ($A2003 + $A2004 == 0)) {$A2003=$tiret; $B2003=$tiret;} else { $A2003=$A2003; $B2003=$B2003;}
		if (($A2004==NULL) OR ($A2003 + $A2004 == 0)) {$A2004=$tiret; $B2004=$tiret;} else { $A2004=$A2004; $B2004=$B2004;}
 
 		if (($A1001==NULL) OR ($A1001 + $A1002 == 0)) $A1001=$tiret; else { $A1001=$A1001; }
		if (($A1002==NULL) OR ($A1001 + $A1002 == 0)) $A1002=$tiret; else { $A1002=$A1002; }

?>





<?php	//------Finale--------							  
        if ($A2001+$A2002>0)  if ($A2001>$A2002){	$nom1001= $nom2001; $logo1001= $logo2001; }	else{	$nom1001= $nom2002; 	$logo1001= $logo2002;} else $nom1001=$clubA;?>
<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004){	$nom1002= $nom2003; $logo1002= $logo2003; } else{	$nom1002= $nom2004; 	$logo1002= $logo2004;} else $nom1002=$clubA;?>

