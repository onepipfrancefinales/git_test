<html>
<head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php // ******************   Récupération des variables   ***************** 
 
$type=$_GET['type']; 
$annee=$_GET['annee']; 
$comite=$_GET['comite'];
$division=$_GET['division'];
  
// ***************** Test des variables récupérées ****************
   echo "Comite : ".$comite; echo "<br />";
   echo "Type : ".$type;echo "<br />";
   echo "Annee : ".$annee;echo "<br />";
   echo "Division : ".$division; echo "<br />";
   



require ("../../fonctionspfterrESDL2019.php");  
require ("../../../connect1/connection2.php");
$phpbd_pfterr=$comite.''."_pfterr_r";
 
 
$phpbd_pfterr="php".''.$phpbd_pfterr;
 
 echo $phpbd_pfterr."<br />";


 
 // -------Finale -------------------- 
 //récupération des valeurs des champs:
 if ($type == 1)
 	{
  	$A1001 = $_POST['A1001'];  
	$A1002 = $_POST['A1002'];
	echo $A1001."<br />";
	echo $A1002."<br />";
	}
// ------- Demi Finale -------------------- 	
	
elseif ($type == 2)
	{
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	echo $A2001;
	echo $A2002;
	echo $A2003;
	echo $A2004;
	}
	
// ------- Demi (AR) Finale -------------------- 		
elseif ($type == 3)		
	{
	//**Phase ALLER (Pts )**
	$A2001 = $_POST['A2001'];  $A4001 = $_POST['A4001'];  
	$A2002 = $_POST['A2002'];  $A4002 = $_POST['A4002'];
	$A2003 = $_POST['A2003'];  $A4003 = $_POST['A4003'];
	$A2004 = $_POST['A2004'];  $A4004 = $_POST['A4004'];
	
	//**Phase RETOUR ( GA)**

	$A8001 = $_POST['A8001']; $A1601 = $_POST['A1601'];
	$A8002 = $_POST['A8002']; $A1602 = $_POST['A1602'];
	$A8003 = $_POST['A8003']; $A1603 = $_POST['A1603'];
	$A8004 = $_POST['A8004']; $A1604 = $_POST['A1604'];
	  
	
	//** Finale **
	
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	
	}

// -------  Quart Demi Finale -------------------- 			
elseif ($type == 14)		
	{
	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	}


// -------  hiutieme de Finale -------------------- 			
elseif ($type == 18)		
	{
	$A8001 = $_POST['A8001'];  
	$A8002 = $_POST['A8002'];
	$A8003 = $_POST['A8003'];
	$A8004 = $_POST['A8004'];
	$A8005 = $_POST['A8005'];  
	$A8006 = $_POST['A8006'];
	$A8007 = $_POST['A8007'];
	$A8008 = $_POST['A8008'];
	
	$A8009 = $_POST['A8009'];  
	$A8010 = $_POST['A8010'];
	$A8011 = $_POST['A8011'];
	$A8012 = $_POST['A8012'];
	$A8013 = $_POST['A8013'];  
	$A8014 = $_POST['A8014'];
	$A8015 = $_POST['A8015'];
	$A8016 = $_POST['A8016'];

	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	}
	
	
// -------  huitieme de Finale + Barrages (8 équipes)-------------------- 			
elseif ($type == 17)		
	{
	$A1601 = $_POST['A1601'];  
	$A1602 = $_POST['A1602'];
	$A1603 = $_POST['A1603'];
	$A1604 = $_POST['A1604'];
	$A1605 = $_POST['A1605'];  
	$A1606 = $_POST['A1606'];
	$A1607 = $_POST['A1607'];
	$A1608 = $_POST['A1608'];
	
	$A8001 = $_POST['A8001'];  
	$A8002 = $_POST['A8002'];
	$A8003 = $_POST['A8003'];
	$A8004 = $_POST['A8004'];
	$A8005 = $_POST['A8005'];  
	$A8006 = $_POST['A8006'];
	$A8007 = $_POST['A8007'];
	$A8008 = $_POST['A8008'];
	
	$A8009 = $_POST['A8009'];  
	$A8010 = $_POST['A8010'];
	$A8011 = $_POST['A8011'];
	$A8012 = $_POST['A8012'];
	$A8013 = $_POST['A8013'];  
	$A8014 = $_POST['A8014'];
	$A8015 = $_POST['A8015'];
	$A8016 = $_POST['A8016'];

	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	echo $A4001; echo "aa".$A4002;
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	}
	
	
// -------  huitieme Aller Retour-------------------- 			
elseif ($type == 19)		
	{
		
//Récup des résultats des rencontres 8me ALLER (Goal average)
	$A1601 = $_POST['A1601'];  
	$A1602 = $_POST['A1602'];
	$A1603 = $_POST['A1603'];
	$A1604 = $_POST['A1604'];
	$A1605 = $_POST['A1605'];  
	$A1606 = $_POST['A1606'];
	$A1607 = $_POST['A1607'];
	$A1608 = $_POST['A1608'];
	
	$A1609 = $_POST['A1609'];  
	$A1610 = $_POST['A1610'];
	$A1611 = $_POST['A1611'];
	$A1612 = $_POST['A1612'];
	$A1613 = $_POST['A1613'];  
	$A1614 = $_POST['A1614'];
	$A1615 = $_POST['A1615'];
	$A1616 = $_POST['A1616'];
	
	
	
	
//Récup des résultats des rencontres 8me ALLER (Points terrain)		

	$A8001 = $_POST['A8001'];  
	$A8002 = $_POST['A8002'];
	$A8003 = $_POST['A8003'];
	$A8004 = $_POST['A8004'];
	$A8005 = $_POST['A8005'];  
	$A8006 = $_POST['A8006'];
	$A8007 = $_POST['A8007'];
	$A8008 = $_POST['A8008'];
	
	$A8009 = $_POST['A8009'];  
	$A8010 = $_POST['A8010'];
	$A8011 = $_POST['A8011'];
	$A8012 = $_POST['A8012'];
	$A8013 = $_POST['A8013'];  
	$A8014 = $_POST['A8014'];
	$A8015 = $_POST['A8015'];
	$A8016 = $_POST['A8016'];
	
	
	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];


//Récup des résultats des rencontres 8me RETOUR (Goal average)
	 
	$R1601 = $_POST['R1601'];  
	$R1602 = $_POST['R1602'];
	$R1603 = $_POST['R1603'];
	$R1604 = $_POST['R1604'];
	$R1605 = $_POST['R1605'];  
	$R1606 = $_POST['R1606'];
	$R1607 = $_POST['R1607'];
	$R1608 = $_POST['R1608'];
		
	$R1609 = $_POST['R1609'];  
	$R1610 = $_POST['R1610'];
	$R1611 = $_POST['R1611'];
	$R1612 = $_POST['R1612'];
	$R1613 = $_POST['R1613'];  
	$R1614 = $_POST['R1614'];
	$R1615 = $_POST['R1615'];
	$R1616 = $_POST['R1616'];


//Récup des résultats des rencontres 8me RETOUR (Points terrain)	

	$R8001 = $_POST['R8001'];  
	$R8002 = $_POST['R8002'];
	$R8003 = $_POST['R8003'];
	$R8004 = $_POST['R8004'];
	$R8005 = $_POST['R8005'];  
	$R8006 = $_POST['R8006'];
	$R8007 = $_POST['R8007'];
	$R8008 = $_POST['R8008'];
	
	$R8009 = $_POST['R8009'];  
	$R8010 = $_POST['R8010'];
	$R8011 = $_POST['R8011'];
	$R8012 = $_POST['R8012'];
	$R8013 = $_POST['R8013'];  
	$R8014 = $_POST['R8014'];
	$R8015 = $_POST['R8015'];
	$R8016 = $_POST['R8016'];
	}	

// -------  SEIZIEME de Finale -------------------- 			
elseif ($type == 16)		
	{
	$A1601 = $_POST['A1601'];  
	$A1602 = $_POST['A1602'];
	$A1603 = $_POST['A1603'];
	$A1604 = $_POST['A1604'];
	$A1605 = $_POST['A1605'];  
	$A1606 = $_POST['A1606'];
	$A1607 = $_POST['A1607'];
	$A1608 = $_POST['A1608'];
	
	$A1609 = $_POST['A1609'];  
	$A1610 = $_POST['A1610'];
	$A1611 = $_POST['A1611'];
	$A1612 = $_POST['A1612'];
	$A1613 = $_POST['A1613'];  
	$A1614 = $_POST['A1614'];
	$A1615 = $_POST['A1615'];
	$A1616 = $_POST['A1616'];
	
	$A1617 = $_POST['A1617'];  
	$A1618 = $_POST['A1618'];
	$A1619 = $_POST['A1619'];
	$A1620 = $_POST['A1620'];
	$A1621 = $_POST['A1621'];  
	$A1622 = $_POST['A1622'];
	$A1623 = $_POST['A1623'];
	$A1624 = $_POST['A1624'];
	
	$A1625 = $_POST['A1625'];  
	$A1626 = $_POST['A1626'];
	$A1627 = $_POST['A1627'];
	$A1628 = $_POST['A1628'];
	$A1629 = $_POST['A1629'];  
	$A1630 = $_POST['A1630'];
	$A1631 = $_POST['A1631'];
	$A1632 = $_POST['A1632'];
	
	$A8001 = $_POST['A8001'];  
	$A8002 = $_POST['A8002'];
	$A8003 = $_POST['A8003'];
	$A8004 = $_POST['A8004'];
	$A8005 = $_POST['A8005'];  
	$A8006 = $_POST['A8006'];
	$A8007 = $_POST['A8007'];
	$A8008 = $_POST['A8008'];
	
	$A8009 = $_POST['A8009'];  
	$A8010 = $_POST['A8010'];
	$A8011 = $_POST['A8011'];
	$A8012 = $_POST['A8012'];
	$A8013 = $_POST['A8013'];  
	$A8014 = $_POST['A8014'];
	$A8015 = $_POST['A8015'];
	$A8016 = $_POST['A8016'];

	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	}
if (isset($_POST['A1001'])) $A1001=$_POST['A1001'];
if (isset($_POST['A1002'])) $A1002=$_POST['A1002'];


?>
<br /><br />

  <?php

// **********   Finale   ***********
echo $type ;
if ($type == 1)
   { 
	require ("../../../connect1/connection2.php");

	$requete =$bdd->exec("UPDATE $phpbd_pfterr
				SET    A1001=$A1001,
					   A1002=$A1002 
				WHERE division = $division
				AND annee=$annee " );

	 if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}
  }
	
// ************************ Demi Finale **********************************	
elseif ($type == 2)
	{
require ("../../../connect1/connection2.php");		
	$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A1001='$A1001',
				 A1002='$A1002', 
				 A2001='$A2001',
				 A2002='$A2002',
				 A2003='$A2003',
				 A2004='$A2004'			
		  	WHERE division = '$division'
			AND annee='$annee' " );		
			
	
	
	 if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}
	
	
	
			
	}
	
	
// *********  Demi (AR) Finale ***************	
	
 elseif ($type == 3)
	{
require ("../../../connect1/connection2.php");
		
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A2001='$A2001',A2002='$A2002',A2003='$A2003',A2004='$A2004',	
		  		 A4001='$A4001',A4002='$A4002',A4003='$A4003',A4004='$A4004',
				 
				 A8001='$A8001',A8002='$A8002',A8003='$A8003',A8004='$A8004',	
		  		 A1601='$A1601',A1602='$A1602',A1603='$A1603',A1604='$A1604',
				 
				 A1001='$A1001',A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' ") ;		

	 if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}

	}
	
	
	// ********* Quarts Demi Finale ***************	
	
 elseif ($type == 14)
	{ 
	$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A4001='$A4001',A4002='$A4002',A4003='$A4003',A4004='$A4004',
				 A4005='$A4005',A4006='$A4006',A4007='$A4007',A4008='$A4008',
				 A2001='$A2001',A2002='$A2002',A2003='$A2003',A2004='$A2004',
				 A1001='$A1001',A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " );		
			
	 if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}
	}
	
// *********huitieme de Finale ***************	
	
 elseif ($type == 18)
	{ 
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' ") ;		
			
    if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}
	}
	
	// *********huitieme de Finale AR***************	
	
 elseif ($type == 19)
	{ 
	echo $phpbd_pfterr;echo "<br />";
	echo $division;echo "<br />";
	echo $annee;echo "<br />";
	
	$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604',
				 A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608',
				 A1609='$A1609', A1610='$A1610', A1611='$A1611', A1612='$A1612',	
				 A1613='$A1613', A1614='$A1614', A1615='$A1615', A1616='$A1616',
				
				 A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004'	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				
  				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				
				 A1001='$A1001', A1002='$A1002'	
			
			WHERE division = '$division' and annee='$annee' " );

    if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}
		
//****Points et résultats des rencontres retour***************
	$division = $division + 200;
	echo $division; echo "<br />";
	
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A1601='$R1601', A1602='$R1602', A1603='$R1603', A1604='$R1604',	
				 A1605='$R1605', A1606='$R1606', A1607='$R1607', A1608='$R1608',
				 A1609='$R1609', A1610='$R1610', A1611='$R1611', A1612='$R1612',	
				 A1613='$R1613', A1614='$R1614', A1615='$R1615', A1616='$R1616',
	
				 A8001='$R8001', A8002='$R8002', A8003='$R8003', A8004='$R8004',	
				 A8005='$R8005', A8006='$R8006', A8007='$R8007', A8008='$R8008',	
				 A8009='$R8009', A8010='$R8010', A8011='$R8011', A8012='$R8012',	
				 A8013='$R8013', A8014='$R8014', A8015='$R8015', A8016='$R8016'
	 
		  	WHERE division = '$division' and annee='$annee' ") ;	
	  if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}
	}
	
	
	// *********huitieme de Finale + Barrages (8 équipes) ***************	
	
 elseif ($type == 17)
	{ 
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604',	
				 A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608',
				 A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' ") ;		

	  if($requete)
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}
	}

	// *********SEIZIEME de Finale ***************	
	
 elseif ($type == 16)
	{ 
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604',	
				 A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608',	
				 A1609='$A1609', A1610='$A1610', A1611='$A1611', A1612='$A1612',	
				 A1613='$A1613', A1614='$A1614', A1615='$A1615', A1616='$A1616',
				 
				 A1617='$A1617', A1618='$A1618', A1619='$A1619', A1620='$A1620',	
				 A1621='$A1621', A1622='$A1622', A1623='$A1623', A1624='$A1624',	
				 A1625='$A1625', A1626='$A1626', A1627='$A1627', A1628='$A1628',	
				 A1629='$A1629', A1630='$A1630', A1631='$A1631', A1632='$A1632',
			
				 A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " );		
			echo $type;

  if($requete)
  	{
    echo("La modification a été correctement effectuée");
  	}
  else
  	{
    echo("La modification à échouée") ;
 	}	
	
}	
?>

 
  
<p><a href="saisieScore.php?comite=<?php echo $comite; ?>&type=<?php echo $type; ?>&annee=<?php echo $annee; ?>&division=<?php echo $division; ?>">Retour 
  Modification meme comite</a>
<p>&nbsp;
<p>&nbsp; 
<p><a href="/phasesfinalesterr2019/accueilMAJ.php?annee=<?php echo $annee; ?>">Retour accueil</a> 
<p>&nbsp;

</html>