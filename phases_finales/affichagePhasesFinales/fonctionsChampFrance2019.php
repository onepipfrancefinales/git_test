<?php



//***** Récupération des variables *******************************



if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';
//if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-';
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-';


?>


<?php
function nomDivision($division)
{
global $nomDivision;	
	
require '../../connect/connection5.php';

						
						
	$reponse = mysql_query( "SELECT division
							FROM divisionS
							WHERE id=$division "); 
								while ($row = mysql_fetch_array($reponse) )
									{ 
									$nomDivision = $row[0];
									}					
						
	
}


?>



 <?php
//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------    TRENTE DEUXIEME DE FINALE         ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 



 
function trenteDeuxieme2019 ($division, $annee)

{
		
if (isset ($type)) $type=$type; else $type = "non type defini";
if (isset ($type2)) $type=$type2; else $type2 = "non type2 defini";
if (isset ($prefixe)) $prefixe = $prefixe; else $prefixe = "variable prefixe non defini";

global $type;
global $prefixe;

$bdpfAnnee = "bdpf".$annee;
$bdpfAnnee_2 = "bdpf".$annee."_2";
echo $bdpfAnnee;


require '../../connect/connection1.php';
$requete = "SELECT type
			FROM $bdpfAnnee
			WHERE 	id=$division 		";
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$type = $row[0];
						}
						
					
						
																	
echo $type;
//echo substr($type,3,2);
//$type = substr($type,0,3);


//$type = substr($type,3,2);
//echo "test"." ".$type;
	$prefTexte = "clubA";
	
//********    trente-deuxième    ************

 if (substr($type,0,3)==932 or substr($type,0,3) ==964)
	{
	$prefTexte = "clubA";
	$prefChiffre = 320;
	
	$debutEquipes1 = 1;
	$finEquipes1 = 10;
	
	$debutEquipes2 =10;
	$finEquipes2 = 65;
	
	$debutScores ="1";
	$finScores= "65";
	
	
	}
//**********    seizième  ************************
elseif(substr($type,3,2)== 16 or substr($type,3,2)== 32)
	{
	$prefTexte = "clubA";
	$prefChiffre = 160;
	
	$debutEquipes1 = 1;
	$finEquipes1 = 10;
	
	$debutEquipes2 =10;
	$finEquipes2 = 33;
	
	$debutScores ="";
	$finScores= "";
	}
//*******       huitième   ************************

elseif (substr($type,5,2)== 8 or substr($type,5,2)== 16)
	{
	$prefTexte = "clubA";
	$prefChiffre = 800;
	
	$debutEquipes1 = 1;
	$finEquipes1 = 10;
	
	$debutEquipes2 =10;
	$finEquipes2 = 17;
	
	$debutScores ="";
	$finScores= "";
	}
//*****       quarts	      *******

elseif (substr($type,7,2)== 04 or substr($type,7,2)== 08)
	{
	$prefTexte = "clubA";
	$prefChiffre = 400;
	
	$debutEquipes1 = 1;
	$finEquipes1 = 9;
	
	//$debutEquipes2 =10;
	//$finEquipes2 = 33;
	
	$debutScores ="";
	$finScores= "";
	
	}
	
	/*
elseif ($type==2me)

	{
	$prefTexte = "clubA";
	$prefChiffre = 400;
	}

elseif ($type==me)

	$prefixe = "clubA100";

*/
echo "<br>";
//echo 
echo "<br>";
echo $prefTexte;
echo "<br>";
echo $prefChiffre;	

$prefixeEquipes = $prefTexte.$prefChiffre;
echo "<br>";
echo $prefixeEquipes;


//************************         Equipes de E01 à E10  **********************
	
//	$debut =1;
//	$fin=10;

	$tabNomEquipes = array();
	$tabNomLigue = array();	
   

	
	global $equipes;
	for ($i=$debutEquipes1 ; $i< $finEquipes1; $i++)
	{	 
		global ${$prefixeEquipes.($i)};
		
		$nom=${"$prefixeEquipes".($i)};
		$equipes = "E0".$i;
		// echo  $equipes; 
		$reponse = mysql_query( "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $bdpfAnnee.$equipes 
					FROM bdclubs, $bdpfAnnee 
					WHERE bdclubs.code=$bdpfAnnee.$equipes and $bdpfAnnee.id=$division "); 
								while ($row = mysql_fetch_array($reponse) )
									{ 
									$tabNomEquipes[] = $row[1];
									$tabNomLigue[] = $row[2];
									}
	
	}
		
		for ($i=$debutEquipes1 ; $i< $finEquipes1; $i++)
			{
			$tabNomEquipes[$i-$debutEquipes1] = $tabNomEquipes[$i-$debutEquipes1].' '.$tabNomLigue[$i-$debutEquipes1];
			${$prefixeEquipes.($i)} = $tabNomEquipes[$i-$debutEquipes1];
			//echo ${"clubA320".($i)};
			}	
		
	

	//*******************    Equipes de E10 à E65   **************************************
	
	
	$prefixeEquipes = substr($prefixeEquipes,0,7);
	
	//$debut =10;
	//$fin=65;

	$tabNomEquipes = array();	
    
	global $equipes;
	for ($i=$debutEquipes2 ; $i< $finEquipes2; $i++)
	{	 
		global ${$prefixeEquipes.($i)};
		$equipes = "E".$i;
		
		
	$reponse = mysql_query( "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $bdpfAnnee.$equipes 
								FROM bdclubs, $bdpfAnnee 
								WHERE bdclubs.code=$bdpfAnnee.$equipes and $bdpfAnnee.id=$division "); 
										while ($row = mysql_fetch_array($reponse) )
											{ 
											$tabNomEquipes[] = $row[1];
											$tabNomLigue[] = $row[2];
											}
	}
		for ($i=$debutEquipes2 ; $i< $finEquipes2; $i++)
				{
				$tabNomEquipes[$i-$debutEquipes2] = $tabNomEquipes[$i-$debutEquipes2].' '.$tabNomLigue[$i-$debutEquipes2];	
				${$prefixeEquipes.($i)} = $tabNomEquipes[$i-$debutEquipes2];
				
				//echo ${"clubA32".($i)};
				
				}
	
	
	
	

//********************* Trente deuxième de finale***************************************

///trente-deuxième de finale
	$debut =3201;
	$fin=3265;

	
	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
   
	 global ${"A".($i)};
	// echo ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee
								WHERE  id='$division'"); 
									while ($row = mysql_fetch_array($reponse))
										{ 
										 $tabScores[] = $row[0];
										}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	
	
	}
	
	
	
	
//***********************         seizième de finale **********************
	$debut =1601;
	$fin=1633;

	
	
	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
 //equipes des 16me
	global ${"clubA".($i)};
	



//Scores des 16me
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	//echo $scores;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												

	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	

	}


//******************         huitième de finale  **************************
	$debut =8001;
	$fin=8017;


	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
 //equipes des 8me
	global ${"clubA".($i)}; 

//equipes des 8me	
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	

	}
	
//*********************       Quarts de finale   ************************************
	$debut =4001;
	$fin=4009;
	
	
	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
 //equipes des Quarts
	global ${"clubA".($i)}; 
  
	 
// Scores des quarts	 
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	//echo $Scores;
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}
	
//*************************   Demi finale    ************************
	$debut =2001;
	$fin=2005;

	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
   
//equipes des demi finale
	global ${"clubA".($i)}; 
   
   
//scores des demi finale   
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}
	
//*************************   Finale    ************************
	
	global $clubA1001; global $clubA1002;
	
	global $A1001; global $A1002;
	
	 $reponse = mysql_query( "SELECT A1001,A1002
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $A1001 = $row[0];
								 $A1002 = $row[1];
								}
	
	
//****** traitement résultats 16me de finale  *********	
 //-------16me de finale -------
if ($type >  90000000002)
	{
	 // 32me de finale
	 if ($type > 93200000000)
		{
			 
			 for ( $i=3201, $j=1601 ;$i<64, $j<33 ; $i+=2, $j++)
				{ 	
				 //echo "<br/>";
				 //echo $i+1;
				 //echo "<br/>";
				 //echo "<br/>";//echo $j;
				 if (${"A".($i)}+${"A".($i+1)} > 0) 
					 if (${"A".($i)} > ${"A".($i+1)}) 	
						${"clubA".($j)}= ${"clubA".($i)};	
					 else	
						${"clubA".($j)}= ${"clubA".($i+1)}; 
				 else ${"clubA".($j)}="-";

				}
		}
		*/ //16me de finale
		 if ($type > 90016000000)
			{
				
			  for ($i=1601, $j=8001 ;$i<33, $j<17 ; $i+=2, $j++)
				{ 	
				 //echo "<br/>";//echo $i+1;//echo "<br/>";
				 //echo "<br/>";//echo $j;
				 if (${"A".($i)}+${"A".($i+1)} > 0) 
					 if (${"A".($i)} > ${"A".($i+1)}) 	
						${"clubA".($j)}= ${"clubA".($i)};	
					 else	
						${"clubA".($j)}= ${"clubA".($i+1)}; 
				 else ${"clubA".($j)}="-";
			
			
				}	
			}			
			 // 8me de finale
			if ($type > 90000080000)
				{
					 for ($i=8001, $j=4001 ;$i<17, $j<9 ; $i+=2, $j++)
					{ 	
					//echo "<br/>";//echo $i+1;//echo "<br/>";
					//echo "<br/>";//echo $j;
					 if (${"A".($i)}+${"A".($i+1)} > 0) 
						 if (${"A".($i)} > ${"A".($i+1)}) 	
							${"clubA".($j)}= ${"clubA".($i)};	
						 else	
							${"clubA".($j)}= ${"clubA".($i+1)}; 
					 else ${"clubA".($j)}="-";
					
			
					}	
				}
					// Quarts de finale
					if ($type > 90000000400)
					{
					 if ($A4001+$A4002 > 0)	{if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$quart1="-";}
					 if ($A4003+$A4004 > 0)	{if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$quart1="-";}
					 if ($A4005+$A4006 > 0)	{if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$quart1="-";}
					 if ($A4007+$A4008 > 0)	{if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$quart1="-";}
					}	
						 // Demi finale
						if ($type > 90000000002)
						{
						 if ($A2001+$A2002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
						 if ($A2003+$A2004 > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

						 if ($A1001+$A1002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}	
						}// fin2me
		
	}
				
}

 ?>
 
 

