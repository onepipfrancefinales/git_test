<html>
<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php 


// ******************   R�cup�ration des variables   ***************** 
 require ("../../fonctionsChampFrance2019.php"); 
 $type=$_GET['type']; 
 //$annee=$_GET['annee']; 
if ( isset ($_GET['phase'])) $phase=$_GET['phase']; else $phase="non d�clar�e";
if ( isset ($_GET['division'])) $division=$_GET['division']; else $division="non d�clar�e";
if ( isset ($_GET['annee'])) $saison=$_GET['annee']; else $saison="non d�clar�e";
if ( isset ($_GET['annee'])) $annee=$_GET['annee']; else $annee="non d�clar�e";
  
 // ***************** Test des variables r�cup�r�es ****************
  
   echo "type : ".$type;echo "<br />";
   echo "annee : ".$annee;echo "<br />";
   echo "division : ".$division; echo "<br />";
   echo "phase : ".$phase; echo "<br />";
   $bdpfAnnee = "bdpf".$annee;   
   $bdpfAnnee_2 = "bdpf".$annee."_2";
 //  echo $bdpfAnnee; echo "<br />";   
 //  echo $bdpfAnnee_2; echo "<br />";
	
	echo "<br />";
	
require '../../../connect/connexion1.php';
 
  
//*******************************************************************
//**************    trente deuxi�me de Finale    ********************
//*******************************************************************

// les scores des 32me sont ins�r�s dans la table bdpffrance (avec les nom des equipes)
// les scores  des  16me, 8me quarts demi et finale sont ins�r�s dans la table bdpffrance_2

if ((substr ($type,1,2) == "32" or	substr ($type,1,2) == "64")	and $phase == '32')	{	
	if (substr ($type,1,2) == "32"){
		for($i=3201; $i<3265; $i++){
		 $score="A".$i; 
		 
		 if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score];
		// echo  $score.' = '.${"A".($i)};echo "<br />";
		 
		 $requete=$bdd->exec("UPDATE bdpffrance
							  SET  $score= '${"A".($i)}'
							  WHERE id = '$division' and saison='$annee'") ;
		}
		
		if($requete)	
		{
		echo("La modification (".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
		echo "<br />";
		}
		else{
		echo("La modification (".$division.") a &eacute;chou&eacute;") ;
		echo "<br />";
		}		
	}
	else{
		 //*******************************************************************
		 //**************    trente deuxi�me de Finale  (A/R)  ********************
		 //*******************************************************************
		
		 //********   GA aller   *********
		 for($i=3201; $i<3265; $i++){	
			 $scoreA="A".$i; 
			 $score="A".($i);
			 if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score]; else $_POST[$score] =0;
		
			 $requete=$bdd->exec("UPDATE bdpffrance
								 SET  $scoreA= '${"A".($i)}'
								 WHERE id = '$division' AND saison='$annee' ") ;
			}
		 suiviDuTraitement($division, $requete);

		 //************     Pts aller  ****************
		 $division = $division + 1;
		 for($i=3201; $i<3265; $i++){
		 $scoreApts="A".$i; 
		 $score="A".($i)."Pts";
		 if (isset($_POST[$score])) ${"A".($i)."Pts"} = $_POST[$score];else $_POST[$score] =0;
		 
		 $requete=$bdd->exec("UPDATE bdpffrance
							  SET  $scoreApts= '${"A".($i)."Pts"}'
							  WHERE id = '$division' AND saison='$annee' " );
		}
		 suiviDuTraitement($division, $requete);

		 //************       GA RETOUR   *********
		 $division = $division + 1;
		 for($i=3201; $i<3265; $i++){
		 $scoreR="A".$i;
		 $score="R".($i)	;	 
		 if (isset($_POST[$score])) ${"R".($i)} = $_POST[$score];else $_POST[$score] =0;
		 
		 $requete=$bdd->exec("UPDATE bdpffrance
							  SET  $scoreR= '${"R".($i)}'
							  WHERE id = '$division' AND saison='$annee' " );
		}
	 suiviDuTraitement($division, $requete);			


	 // ***********************    PTS RETOUR      ***********************
	 
	 $division = $division + 1;
	 for($i=3201; $i<3265; $i++){
		 $scoreRpts="A".$i; 
		 $score="R".($i)."Pts";
		 if (isset($_POST[$score])) ${"R".($i)."Pts"} = $_POST[$score];	else $_POST[$score] =0;	
	 
		 $requete=$bdd->exec("UPDATE bdpffrance
						  SET  $scoreRpts= '${"R".($i)."Pts"}'
						  WHERE id = '$division' AND saison='$annee' ") ;	
		}
	 suiviDuTraitement($division, $requete); 
	}
}	

//*********************************************************
//**************  SEIZIEME de Finale **********************	 
//*********************************************************
		
elseif ((substr ($type,3,2) == "16" or	substr ($type,3,2) == "32")	 and $phase == '16'){
	if (substr ($type,3,2) == "16"){ 
		for($i=1601; $i<1633; $i++){
		 $score="A".$i; 
		 
		 if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score];	
		
		 $requete=$bdd->exec("UPDATE bdpffrance_2
							  SET  $score= '${"A".($i)}'
							  WHERE id = '$division' AND saison ='$annee' ") ;
		}
	 suiviDuTraitement($division, $requete); 			
	}
	else{
		echo "Rencontres A/R";echo "<br />";
	 //*********************************************************
	 //**************  SEIZIEME de Finale (A/R)*****************	 
	 //*********************************************************
		
	 //************   GA ALLER 16me  *************
	for($i=1601; $i< 1633; $i++){
		$scoreA="A".$i; 
		$score="A".$i;
		if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score];else $_POST[$score]= 0;	
	 
		$requete1=$bdd->exec("UPDATE bdpffrance_2
							 SET  $scoreA= '${"A".($i)}'
							 WHERE id = '$division' AND saison ='$annee' ") ;
			
		 //echo $division.'  '.$score.'  '.${"A".($i)}; echo "<br />";
	}
	 suiviDuTraitement($division, $requete1); 
	
	 //**********   Pts aller 16me  *************
	
	$division = $division + 1;
	for($i=1601; $i<1633; $i++){
		$score="A".$i."Pts";
		$scoreApts ="A".$i;
		if (isset($_POST[$score])) ${"A".($i)."Pts"} = $_POST[$score];else $_POST[$score]= 0;
	 
		$requete2=$bdd->exec("UPDATE bdpffrance_2
							 SET  $scoreApts = '${"A".($i)."Pts"}'
							 WHERE id = '$division' AND saison ='$annee' ") ;
			
		// echo $division.'  '.$score.'  '.${"A".($i)."Pts"}; echo "<br />";
	}
	 suiviDuTraitement($division, $requete2); 				

	 // *************     GA retour 16me  *************

	$division = $division + 1;
	for($i=1601; $i<1633; $i++){		
		$scoreRGA="A".$i; 
		$score = "R".$i;;	 
		if (isset($_POST[$score])) ${"R".($i)} = $_POST[$score];else $_POST[$score]= 0;
	
		$requete3=$bdd->exec("UPDATE bdpffrance_2
						 SET  $scoreRGA = '${"R".($i)}'
						 WHERE id = '$division' AND saison ='$annee' ") ;
		
		//echo $division.'  '.$score.'  '.${"R".($i)}; echo "<br />";
	} 
	 suiviDuTraitement($division, $requete3); 			
		
	 // *************   Pts retour 16me  *************
	$division = $division +1;
	for($i=1601; $i<1633; $i++){
    $scoreRpts="A".$i; 
	$score="R".$i."Pts";
		 
	if (isset($_POST[$score])) ${"R".($i)."Pts"} = $_POST[$score]; else $_POST[$score]=0;	
		 
	$requete4=$bdd->exec("UPDATE bdpffrance_2
						 SET  $scoreRpts= '${"R".($i)."Pts"}'
						 WHERE id = '$division' AND saison ='$annee' ") ;
		
		// echo $division.'  '.$score.'  '.${"R".($i)."Pts"}; echo "<br />";
		}
		
	 suiviDuTraitement($division, $requete4); 	
	}	
}

//*************************************************************	
//********************       huitieme        ******************
//************************************************************* 			

elseif ((substr ($type,5,2) == "08" or	substr ($type,5,2) == "16")	and $phase == '8')			
{	
	if (substr ($type,5,2) == "08")	
	{
		for($i=8001; $i<8017; $i++)	
		{
		 $score="A".$i; 
		 
		 if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score]; else $_POST[$score] = 0;	
		
		
		 $requete=$bdd->exec("UPDATE bdpffrance_2
								SET  $score = '${"A".($i)}'
						 WHERE id = '$division' AND saison ='$annee' ") ;
		}
		 //suiviDuTraitement($division, $requete); 
				
	}
	else {	
		 //*************************************************************	
		 //********************    huitieme   (A/R)   ******************
		 //************************************************************* 
		 
	 //R�cup des r�sultats des rencontres 8me ALLER (Goal average)
	 for($i = 8001; $i < 8017 ; $i++) {
		 $scoreA="A".$i; 
		 $score="A".$i;
		 if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score];else $_POST[$score] = 0;
			 
		 $requete=$bdd->exec("UPDATE bdpffrance_2
							 SET  $scoreA = '${"A".($i)}'
							 WHERE id = '$division' AND saison ='$annee' ") ;
		
		  //echo $score.'  '.${"A".($i)}; echo "<br />";
		}
	 suiviDuTraitement($division, $requete); 
		 
		 
		 
	 //R�cup des r�sultats des rencontres 8me ALLER (Points terrain)
	 $division = $division +1;
	 for($i = 8001; $i < 8017; $i++) {
		 $scoreApts="A".$i;
		 $score="A".$i."Pts";
		 if (isset($_POST[$score])) ${"A".($i)."Pts"} = $_POST[$score];else $_POST[$score] = 0;
		 
		 $requete=$bdd->exec("UPDATE bdpffrance_2
						 SET  $scoreApts= '${"A".($i)."Pts"}'
						 WHERE id = '$division' AND saison ='$annee' ");		
		
		 //echo $score.'  '.${"A".($i)."Pts"}; echo "<br />";
		}
	 suiviDuTraitement($division, $requete);

	 //R�cup des r�sultats des rencontres 8me RETOUR (Goal average)
	 $division = $division +1;
	 for($i = 8001; $i < 8017; $i++) {
		 $scoreR="A".$i;
		 $score="R".$i;
		 if (isset($_POST[$score])) ${"R".($i)} = $_POST[$score]; else $_POST[$score] = 0;
		 
		 $requete=$bdd->exec("UPDATE bdpffrance_2
							 SET  $scoreR= '${"R".($i)}'
							 WHERE id = '$division' AND saison ='$annee'") ;
		
		 //echo $score.'  '.${"R".($i)}; echo "<br />";
		}
	 suiviDuTraitement($division, $requete); 

	 //R�cup des r�sultats des rencontres 8me RETOUR (Points terrain)	
	 $division = $division +1;
	 for($i=8001; $i<8017; $i++) {
		 $scoreRpts="A".$i; 
		 $score="R".$i."Pts";
		 if (isset($_POST[$score])) ${"R".($i)."Pts"} = $_POST[$score];else $_POST[$score] = 0;
		 	
		 $requete=$bdd->exec("UPDATE bdpffrance_2
							 SET  $scoreRpts= '${"R".($i)."Pts"}'
							 WHERE id = '$division' AND saison ='$annee' ") ;	
		
		  //echo $score.'  '.${"R".($i)."Pts"}; echo "<br />";
		}
	 suiviDuTraitement($division, $requete);	  
	}
}	

//***************************************************
//**********      Quart de finale      **************
//***************************************************
 		
//****** Qualification sur une seule rencontre   ***********		
		
elseif ( $phase == '4'){	
	
	
	if (substr ($type,7,2) == "04"){
		echo "Quarts de finale simple"; echo "<br />";echo "<br/>";
	 for($i=4001; $i<4009; $i++){	
		 $score="A".$i; 
		 
		 if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score];else $_POST[$score] = 0;	
		
		 $requete=$bdd->exec("	UPDATE bdpffrance_2
		 SET  $score= '${"A".($i)}'
		 WHERE id = '$division'AND saison ='$annee' " );		
		}

	 suiviDuTraitement($division, $requete);
			
	}
else {
	 //******* qualification sur des rencontres Aller retour	**********

	 //***********    GA Aller Quarts   **************
	  echo "Quart de finale AR";	echo "<br/>";echo "<br/>";
	

		for($i=4001; $i<4009; $i++){
		$scoreA="A".$i; 
		$score="A".$i;	 
		if (isset($_POST[$score])) ${"A".($i)} = $_POST[$score]; else $_POST[$score] = 0;			
		//echo ${"A".($i)};echo "<br/>";
		
		$requete=$bdd->exec("UPDATE bdpffrance_2
							  SET  $scoreA= '${"A".($i)}'
							 WHERE id = '$division' AND saison ='$annee'  " );	
		}
		
	 suiviDuTraitement($division, $requete);
			
	 //***********   Pts Aller Quarts  ***************
	 $division = $division +1;
	 //echo $division;echo "<br/>";
	 
		for($i=4001; $i<4009; $i++){
		 $scoreApts= "A".$i;
		 $score= "A".$i."Pts";
		 if (isset($_POST[$score])) ${"A".($i)."Pts"} = $_POST[$score];else $_POST[$score] = 0;	
			
		 $requete=$bdd->exec("UPDATE bdpffrance_2
							 SET  $scoreApts= '${"A".($i)."Pts"}'
							 WHERE id = '$division' AND saison ='$annee' ") ;	
		}
		 suiviDuTraitement($division, $requete);

	 //**********  GA Retour Quarts	************
	 $division = $division + 1;
 
		 for($i=4001; $i<4009; $i++){
		 $scoreR="A".$i; 
		 $score="R".$i;
		
		 if (isset($_POST[$score])) ${"R".($i)} = $_POST[$score]; else $_POST[$score] = 0;	
		//echo ${"R".($i)};
		 $requete=$bdd->exec("UPDATE bdpffrance_2
						  SET  $scoreR= '${"R".($i)}'
						  WHERE id = '$division' AND saison ='$annee'") ;	 
		}
	 suiviDuTraitement($division, $requete);

	 //**********   Pts Retour Quarts  ***************************	
	 $division = $division +1;

		 for($i=4001; $i<4009; $i++){
		$scoreRpts="A".$i;		
		$score="R".$i."Pts"; 
		
		 if (isset($_POST[$score])) ${"R".($i)."Pts"} = $_POST[$score];	

		 $requete=$bdd->exec("UPDATE bdpffrance_2
						  SET  $scoreRpts= '${"R".($i)."Pts"}'
						  WHERE id = '$division' AND saison='$annee' ") ;	
		
		}			
	 suiviDuTraitement($division, $requete);
	}
}
	
 //***************************************************	
 //**************    Demi Finale        ************** 		
 //***************************************************

elseif ( $phase == '2'){


//elseif ((substr ($type,9,2) == "21" or	substr ($type,9,2) == "22")	and $phase == '2')		
//{
	if (substr ($type,9,2) == "02"  )
	{
	 $A2001 = $_POST['A2001'];   $A2002 = $_POST['A2002']; 	 $A2003 = $_POST['A2003'];	 $A2004 = $_POST['A2004'];  
	
	 $requete=$bdd->exec("UPDATE bdpffrance_2
    	     SET  A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004'	 
		  	 WHERE id = '$division'  AND saison='$annee'");
	
	 suiviDuTraitement($division, $requete);
	}
	else
	{
	 //   *****   Qualification avec rencontre Aller Retour *****
	 //***********   Phase ALLER ( GA)  *******

	 $A2001 = $_POST['A2001']; 	 $A2002 = $_POST['A2002']; 	 $A2003 = $_POST['A2003']; 	 $A2004 = $_POST['A2004'];  
	
	 $requete=$bdd->exec("UPDATE bdpffrance_2
    	    SET  A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004'	 
		  	WHERE id = $division  AND saison='$annee'") ;	

	 suiviDuTraitement($division, $requete);
	 
	//************   Pts ALLER    **************

	 $A2001Pts = $_POST['A2001Pts']; 	 $A2002Pts = $_POST['A2002Pts'];   $A2003Pts = $_POST['A2003Pts']; $A2004Pts = $_POST['A2004Pts'];  
	 
	 $division = $division + 1;
	 $requete=$bdd->exec("UPDATE bdpffrance_2
    	    SET  A2001='$A2001Pts', A2002='$A2002Pts', A2003='$A2003Pts', A2004='$A2004Pts'	
			WHERE id = '$division' AND saison ='$annee' ");	
	 
	  suiviDuTraitement($division, $requete);
	  
	 //************      Phase RETOUR (GA)  ********

	 $R2001 = $_POST['R2001'];  $R2002 = $_POST['R2002'];  $R2003 = $_POST['R2003']; $R2004 = $_POST['R2004']; 

	 $division = $division + 1;
	 $requete=$bdd->exec("UPDATE bdpffrance_2
    	    SET  A2001='$R2001',A2002='$R2002',A2003='$R2003',A2004='$R2004'	
		  	WHERE id = '$division' AND saison ='$annee' ") ;
	
	 suiviDuTraitement($division, $requete);
	 
	//**************          Pts retour

	 $R2001Pts = $_POST['R2001Pts'];  $R2002Pts = $_POST['R2002Pts'];   $R2003Pts = $_POST['R2003Pts'];   $R2004Pts = $_POST['R2004Pts'];  
		
	 $division = $division + 1;
	 $requete=$bdd->exec("UPDATE bdpffrance_2
    	    SET  A2001='$R2001Pts', A2002='$R2002Pts', A2003='$R2003Pts', A2004='$R2004Pts'	
			WHERE id = '$division' AND saison ='$annee' " );
	}
 
	suiviDuTraitement($division, $requete);	
}

// -------Finale -------------------- 
 //r�cup�ration des valeurs des champs:

elseif ( $phase == '1'){

echo "finale simple";echo "<br/>";
//echo $A1001;echo "<br/>"; 
//echo $A1002;echo "<br/>";

if (isset($_POST['A1001'])) $A1001 = $_POST['A1001'];	
if (isset($_POST['A1002'])) $A1002 = $_POST['A1002'];	
//elseif ((substr ($type,9,2) == "01" or substr ($type,9,2) == "21"  or	substr ($type,9,2) == "41" )and $phase == '1')
// {	
   if (substr ($type,9,2) == "02" // demi finale
	or substr ($type,9,2) == "22" // demi finale AR
	or substr ($type,9,2) == "04" // demi AR- finale 
	or substr ($type,9,2) == "24" // demi AR - finale AR
	){
  	
	$A1001 = $_POST['A1001'];  
	$A1002 = $_POST['A1002'];
	
	$requete=$bdd->exec("UPDATE bdpffrance_2
    	  SET  A1001='$A1001', A1002='$A1002'	
		  WHERE id = '$division' AND saison ='$annee'");
	
	 suiviDuTraitement($division, $requete);
}
else{

	//***************  finale Aller Retour *******
	
	//**************          GA aller
	$A1001 = $_POST['A1001'];  
	$A1002 = $_POST['A1002']; 
	
	$requete=$bdd->exec("UPDATE bdpffrance_2
    	  SET  A1001='$A1001', A1002='$A1002'	
		  WHERE id = '$division' AND saison ='$annee'");
	
	suiviDuTraitement($division, $requete);
	
	//**************          Pts retour
	$division = $division + 1;
	$A1001Pts = $_POST['A1001Pts'];  
	$A1002Pts = $_POST['A1002Pts'];
	
	$requete=$bdd->exec("UPDATE bdpffrance_2
    	  SET  A1001='$A1001Pts', A1002='$A1002Pts'	
		  WHERE id = '$division' AND saison ='$annee'");
	
	suiviDuTraitement($division, $requete);
		
	//**************          GA retour
	$division = $division + 1;
	$R1001 = $_POST['R1001'];  
	$R1002 = $_POST['R1002'];
	
	$requete=$bdd->exec("UPDATE bdpffrance_2
    	  SET  A1001='$R1001', A1002='$R1002'	
		  WHERE id = '$division' AND saison ='$annee'");
	
	suiviDuTraitement($division, $requete);
	
	//**************          Pts retour
	$division = $division + 1;
	$R1001Pts = $_POST['R1001Pts'];  
	$R1002Pts = $_POST['R1002Pts'];
	
	$requete=$bdd->exec("UPDATE bdpffrance_2
    	  SET  A1001='$A1001Pts', A1002='$A1002Pts'	
		  WHERE id = '$division' AND saison ='$annee'");
	
	suiviDuTraitement($division, $requete);
	}
}
		
?>

<p></p>
  
<p><a href="accueilsaisiescore.php?type=<?php echo $type; ?>&annee=<?php echo $annee; ?>&division=<?php echo substr($division,0,2)."0"; ?>">Retour 
  Modification meme comite</a>
<p>&nbsp;
<p>&nbsp; 
<p><a href="../accueilMAJ.php?annee=<?php echo $annee; ?>">Retour accueil</a> 
<p>&nbsp;

</html>