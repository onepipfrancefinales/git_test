
<?php 
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='Erreur, pas de variable Division'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='Erreur, pas de variable Comite'; 
if (isset ($_GET['page'])) $page = $_GET['page']; else $page='-'; 
if (isset ($type)) $type = $type; else $type='Erreur, pas de variable Type'; 
if (isset ($somme)) $somme = $somme; else $somme='Erreur, pas de variable Somme'; 

require '../../connect1/connection1.php' ;
require '../../fonctions.php';
$id = 0;
$sigle = "(".$comite.")";

nomComite ($sigle, $id, $bdd);

if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='Erreur, pas de variable Annee';

?>

<!DOCTYPE html>
<html>
<head>
<title>Finales territoriales <?php echo $annee; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../../phasesFinalesTerr/champTerr.css">
<link rel="stylesheet" type="text/css" href="qualification.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, 
Champions des differents comites territoriaux, Tous les championnats de rugby, federale 2, federale 3, federale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,
Rugby,championnat de france de rugby,Francaise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
</head>

<?php 

//*****************************************************
//**** R�cup�ration des noms des comites et des ligues*
//*****************************************************
	require ("../../connect1/connection5.php") ; 
	// Nom de la ligue
	$reponse  = $bdd->query("SELECT nomLigue
							 FROM comite
							 WHERE comite = '$comite'	");
			while ($donnees = $reponse->fetch())
					{							
					$ligueNom=$donnees['nomLigue'];
					}
	// nom du comit�							
	$reponse  = $bdd->query("SELECT nom as nomComite
						FROM comite
						WHERE comite = '$comite' and id < 30");
			while ($donnees = $reponse->fetch())
					{							
					$comiteNom=$donnees['nomComite'];
					}
	//rechercher saison la plus ancienne				
	require ("../../connect1/connection2.php");				
	$php_pfterr = "php".$comite."_pfterr";
	
	$reponse = $bdd->query("SELECT MIN(annee)
							FROM $php_pfterr");					
	$saisonMin=$reponse->fetch();
echo $saisonMin[0];
/*
if ($annee < $saisonMin[0])
	{
	include("hautindex.php");
	include("bandeauNavigation.php");
	include("bandeauNavigation2.php");
	include '../../phasesFinalesTerr2019/affichageFinalesTerr/infos.php';
	}
*/
if ($annee < 2019 )
	{
	
	 //****************************************************************
	 // traitement des phases finales de Honneur Promotion 1�re s�rie**
	 //****************************************************************
	 $table_pfterr="php".''.$comite.''."_pfterr";
	 // require ("../../connect1/connection2.php") ; 

	 if ($page=="HPHS1")
		{
		 if ($comite=="mpy" )
			{
			 $phpmpy_pfterr = "phpmpy_pf".''.$annee;
				//echo $annee;echo "<br/>";
				//echo $phpmpy_pfterr;echo "<br/>";
				//echo $division;echo "<br/>";
			 include ("hautindexPage.php");
						
			 $reponse  = $bdd->query("SELECT type
									  FROM $phpmpy_pfterr
									  WHERE  division=$division");
			 while ($row = $reponse->fetch())
					{
					$type=$row[0];
					}
			//echo "type : ".''.$type;				
			//$type=15;
								
								//********   Quarts Demi Finale  *******
									if ($type==14)
										{
										include ("quarts.php");
										}
										
								//********   Quarts(AR) Demi(AR) Finale  *******	
									elseif ($type==15)
										{
										include ("quartDemiAR.php");
										}
								
								//********   Barrage(8 barragistes) Quarts demi finale *******		
									elseif ($type==13)
										{
										include ("barrages8Quarts.php");
										}
										
								//********   Barrage(12 barragistes) Quarts demi finale *******		
									elseif ($type==16)
										{
										include ("barrages12Quarts.php");
										}
								
								//********  huitiemes Quarts demi finale *******			
									elseif ($type==17)
										{
										include ("barrages8Quarts.php");
										}
							
			}
		else
			{	
				$reponse  = $bdd->query("SELECT sum(type) AS sommeHPHS1
									FROM $table_pfterr
									WHERE division < 200 and annee=$annee ");
								while ($donnees = $reponse->fetch())
											{
											$somme=$donnees['sommeHPHS1'];
											}

				include("hautindex.php");
				include("bandeauNavigation.php");
	
				if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc" OR $comite == "r")
				require ("menuOccitanie.php");	

				elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
				require ("menuAuvergneRhoneAlpes.php");

				elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
				require ("menuNouvelleAquitaine.php");

				include("bandeauNavigation2.php");

			 if ($somme==3)
				{
				include("finale.php");
				}
			 elseif ($somme==6)
				{
				include ("demi.php");
				}
			 elseif ($somme==9)
				{
				include ("demiAR.php");
				}
			 elseif ($somme==14 OR $somme==28 OR $somme==42)
				{
				include ("quart.php");
				}
			 else
				{
				include ("demiMixte.php");
				}
			}
		}   
	
	 //************************************************************		
	 //**   traitement des phases finales de 2me 3me 4me s�rie   **
	 //************************************************************

	 if ($page=="S2S3S4")

		{
		if ($comite=="mpy" )
				{
				include ("hautindexPage.php");
						
				$reponse  = $bdd->query("SELECT type
										 FROM phpmpy_pfterr
										 WHERE  division='$division'");
							while ($donnees = $reponse->fetch())
								{
								$type=$donnees['type'];
								}
							
								$type=13;
								
								//********   Quarts Demi Finale  *******
									if ($type==14)
										{
										include ("quarts.php");
										}
										
								//********   Quarts(AR) Demi(AR) Finale  *******	
									elseif ($type==15)
										{
										include ("quartDemiAR.php");
										}
								
								//********   Barrage(8 barragistes) Quarts demi finale *******		
									elseif ($type==13)
										{
										include ("barrages8Quarts.php");
										}
										
								//********   Barrage(12 barragistes) Quarts demi finale *******		
									elseif ($type==16)
										{
										include ("barrages12Quarts.php");
										}
								
								//********  huitiemes Quarts demi finale *******			
									elseif ($type==17)
										{
										include ("barrages8Quarts.php");
										}
							
		}
		else
		{
		 $reponse  = $bdd->query("SELECT sum(type) AS sommeS2S3S4
								FROM $table_pfterr
								WHERE division > 190 and division < 230 and annee='$annee'");
		 while ($donnees = $reponse->fetch() )
			{
			 $somme=$donnees['sommeS2S3S4'];
			}
		
			include("hautindex.php");
			include("bandeauNavigation.php");
				
			if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc")
				require ("menuOccitanie.php");	

			elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
				require ("menuAuvergneRhoneAlpes.php");

			elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
				require ("menuNouvelleAquitaine.php");

			include("bandeauNavigation2.php");

			if ($somme==3)
			{
			 include("finale.php");
			}
			elseif ($somme==6)
			{
			 include ("demi.php");
			}
			elseif ($somme==9)
			{
			 include ("demiAR.php");
			}
			elseif ($somme==14 OR $somme==28 OR $somme==42)
			{
			 include ("quart.php");
			}
			else
			{
			 include ("demiMixte.php");
			}	
		}
	 }	
		
	 //************************************************************		
	 //**   traitement des phases finales de R�serve             **
	 //************************************************************
		
	 if ($page=="RRPHR1")
		{
		 if ($comite=="mpy" )
				{
				 include ("hautindexPage.php");
						
				 $reponse  = $bdd->query("SELECT type
										 FROM phpmpy_pfterr
										 WHERE  division='$division'");
					while ($donnees = $reponse->fetch() )
							{
							$type=$donnees['type'];
							}
							
								$type=13;
								
								//********   Quarts Demi Finale  *******
									if ($type==14)
										{
										include ("quarts.php");
										}
										
								//********   Quarts(AR) Demi(AR) Finale  *******	
									elseif ($type==15)
										{
										include ("quartDemiAR.php");
										}
								
								//********   Barrage(8 barragistes) Quarts demi finale *******		
									elseif ($type==13)
										{
										include ("barrages8Quarts.php");
										}
										
								//********   Barrage(12 barragistes) Quarts demi finale *******		
									elseif ($type==16)
										{
										include ("barrages12Quarts.php");
										}
								
								//********  huitiemes Quarts demi finale *******			
									elseif ($type==17)
										{
										include ("barrages8Quarts.php");
										}
							
		}
	 else
		{
			$reponse  = $bdd->query("SELECT sum(type) AS sommeRRPHR1
								FROM $table_pfterr
								WHERE division > 220 and annee='$annee'	");
						while ($donnees =$reponse ->fetch() )
						{
						$somme=$donnees['sommeRRPHR1'];
						}
		
		
						include("hautindex.php");
						include("bandeauNavigation.php");
						
						if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc")
						require ("menuOccitanie.php");	

						elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
						require ("menuAuvergneRhoneAlpes.php");

						elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
						require ("menuNouvelleAquitaine.php");

						include("bandeauNavigation2.php");



							if ($somme==3)
								{
								include("finale.php");
								}
							elseif ($somme==6)
								{
								include ("demi.php");
								}
							elseif ($somme==9)
								{
								include ("demiAR.php");
								}
							elseif ($somme==14 OR $somme==28 OR $somme==42)
								{
								include ("quart.php");
								}
							else
								{
								include ("demiMixte.php");
								}
		
			}
		}
	}
//****************************************	
//                                       *	
//********** apres 2019*******************
//                                       *
//****************************************	
elseif ($annee > 2018)	
	{
	 //****** Prise en compte du changement des nom des comit�s
	
	 if ($comite == "mpy" OR $comite == "ld" OR $comite == "pc")
		$comite = "ab";
	 elseif ($comite== "ap" OR $comite == "da" OR $comite == "ly")
		$comite = "au";
	 elseif ($comite== "be" OR $comite == "cbl" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
		$comite = "ca";
	 else
		$comite=$comite;
		
	 $table_pfterr = "php".''.$comite.''."_pfterr_e";

	 //*****************************************************************
	 //******  R�cup�ration des noms des comites et des ligues *********
	 //*****************************************************************

	 
	 /* 
	 
	 require ("../../connect1/connection5.php") ; 
	
	 if (isset ($ligueNom)) $ligueNom=$ligueNom; else $ligueNom="++";
	 
	 $reponse  = $bdd->query("SELECT nomLigue
							 FROM comite
							 WHERE comite = '$comite'");
							while ($donnees = $reponse->fetch())
								{							
								$ligueNom=$donnees[0];
								}
	*/							
	 //******************************************************
	 //*************  Traitement des phases finales  ********
	 //******************************************************

	 //*************   Honneur Promotion 1�re s�rie  ********
	//require ("../../connect1/connection2.php") ; 
	if ($page=="HPHS1")
   		{
		 $reponse  = $bdd->query("SELECT sum(type) AS sommeHPHS1
							FROM $table_pfterr
							WHERE division < 200 and annee='$annee' ");
			while ($donnees = $reponse->fetch())
			{
			 $somme=$donnees['sommeHPHS1'];
			}
		 //echo $somme;
		}
	
	 //*************      2me 3me 4me s�rie           *******
	 elseif ($page=="S2S3S4")
		{
		 $reponse  = $bdd->query("SELECT sum(type) AS sommeS2S3S4
							FROM $table_pfterr
							WHERE division > 190 and division < 230 and annee='$annee'");
		 while ($donnees = $reponse->fetch())
			{
			 $somme=$donnees['sommeS2S3S4'];
			}
		}

	//*************            R�serves              *******
	elseif ($page=="RRPHR1")
		{
		 $reponse  = $bdd->query("
				SELECT sum(type) AS sommeRRPHR1
				FROM $table_pfterr
				WHERE division > 220 
				AND division < 9200 
				AND annee='$annee'	");
				
		 while ($donnees = $reponse->fetch())
			{
			 $somme=$donnees['sommeRRPHR1'];
			}	
		}
			
//**********************************************	
// affichage du haut de la page
//**********************************************
	
	include("hautindex.php");
	include("bandeauNavigation.php");
	//include("../../phasesfinalesterr2019/affichageFinalesTerr/hautindex.php");
	//include("../../phasesfinalesterr2019/affichageFinalesTerr/bandeauNavigation.php");
	
//	if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc")
	if ($comite == "ab")
		{
		 require ("menuOccitanie.php");
		}
	elseif ($comite == "au" )	
//	elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
	require ("menuAuvergneRhoneAlpes.php");

	elseif ($comite == "ca")
//	elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
	require ("menuNouvelleAquitaine.php");
	
	if ($somme>10)
	include("bandeauNavigation2_2019.php");
	else
	include("bandeauNavigation2.php");
	
	if ($somme<10)
	{
 		if ($somme==3)
		{
		 include("../../phasesfinalesterr2019/affichageFinalesTerr/finale.php");
		}
		elseif ($somme==6)
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/demi.php");
		}
		elseif ($somme==9)
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/demiAR.php");
		}
		else
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/demiMixte.php");
		}	
	}
	else
	{	
	  require ('../../connect1/connection2.php');		

		if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc")
		 {$comite = "ab";}
		elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
		 {$comite = "au";}
		elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")		
		 {$comite = "ca";}
		else
		 {$comite = $comite;}
		
	  $table_pfterr = "php".''.$comite.''."_pfterr_e";

		if (isset ($type)) $type = $type; else $type='-';
				
    	$requete  = $bdd->query("SELECT type
				  FROM $table_pfterr
				  WHERE division = $division and annee='$annee'");
	
		while ($donnees = $requete->fetch())
			{
			 $somme=$donnees['type'];
			}
		
		//$somme=$type;
		//echo $somme;

		if ($somme==14 )
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/quart.php");
		}
		elseif ($somme==15)
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/quartDemiAR.php");
		}
		elseif ($somme==16)
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/16me.php");
		}
		elseif ($somme==17)
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/barrage8me.php");
		}
		elseif ($somme==18)
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/8me.php");
		}
		elseif ($somme==19)
		{
		 include ("../../phasesfinalesterr2019/affichageFinalesTerr/8meAR.php");
		}		
	}
}
?>	
</html> 