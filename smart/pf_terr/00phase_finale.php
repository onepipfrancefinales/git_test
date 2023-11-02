<html>
  <head>
 <link rel="stylesheet" type="text/css" href="../pf/AA2.css"> 
 <link rel="stylesheet" type="text/css" href="../10.css">
 <link type="text/css" rel="stylesheet" href="../pf/paramTiroir.css"> 
<meta name="description" content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords" content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Phase finale de la ligue</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
  
<body bgcolor="#CCCCCC" text="#000000">
<?php
//include("/../../saison.php");

if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='Erreur, pas de variable Annee'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite ='Erreur, pas de variable Comite';
if (isset ($_GET['bddComite'])) $bddComite = $_GET['bddComite']; else $bddComite ='Erreur, pas de variable Comite';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division ='Erreur, pas de variable Division';

$anneeplus = $annee + 1;
$anneemoins = $annee - 1; 
$bdcomite="php".''.$bddComite;

$champ=$division;
require '../fonctions.php';
require ("../../connect/connexion1.php");
nomLigue2($bddComite, $champ, $bdd);
//------------------------------------

//$bdcomite=("php".''.$comite);
//$bdcomiteClub=("php".''.$comite.''."_clubs");
//$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);
$bdcomite_pfterr=("php".''.$bddComite.''."_pfterr_e");
//---------------Récuperation du type dans la base--------------

require ("../../connect/connexion6.php") ; 

		$reponse = $bdd->query("SELECT type 
								FROM $bdcomite_pfterr
								WHERE division=$division AND annee=$annee");
		
		while ($row = $reponse->fetch() )
			{                 	
			$type=$row[0];
			}			
//---------------------------------------------------------
//-----------------         Affichage       --------------- 
//---------------------------------------------------------
?>
<div class="fixed-header">
 <div class="container">

 <?php
	require '../entete.php';
	require 'pf_terr_liens.php';
	?>
</div>
</div>
<div class="container">
<br><br><br><br><br><br><br>

<?php

//****************    Finale - Finale ********************
	require ("../../connect/connexion6.php") ; 
	//require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
	//afficheLieux ($division, $annee, $comite, $bdd);
	
	if ($type==1)
	{	
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");		
		finale2019 ($comite, $division, $annee, $bdd);
		require ("test1.php");
	}	
//***************     Demi finale - Finale ******************
    elseif ($type==2)
	{	
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");		
		demi2019 ($comite, $division, $annee, $bdd);
		//$entree='2001'; $sortie='2004';
		//traitementScores ($entree, $sortie);
		require ("test2.php");
	}	
//********** Demi finale Aller Retour - Finale   *************
    elseif($type==3)
	{	
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
		demiAR2019 ($comite, $division, $annee, $bdd);
		require ("test3.php");		
	}			
//*********** Barrages(8 équipes)- Quarts - Demi - Finale   ***
    elseif($type==13)
	{	
		quartsPlusBarrages2019 ($bdcomiteClub, $division, $annee, $bdd);
		require ("test13.php");
	}	
//*************    Quarts - Demi - Finale   ********************
    elseif($type==14)
	{	
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
		quarts2019 ($comite, $division, $annee, $bdd);
		require ("test14.php");		
	}	
//**************  QuartsAR - DemiAR - Finale   ******************
    elseif($type==15)
	{
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
		quartsAR2019 ($comite, $division, $annee, $bdd);
		require ("test15.php");
	}	
//*************Seizieme -  Huitième -Quarts - Demi - Finale   *****
    elseif($type==16)
	{		  
		require '../../phasesfinalesterr2019/fonctionspfterrESDL2019.php';
		seizieme2019 ($comite, $division, $annee, $bdd);
		//traitementScores ($entree, $sortie);
		require ("test16.php");
	}	
// **************Barrages - Huitième -Quarts - Demi - Finale ****
    elseif($type==17)
		{
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
		huitiemeEtBarrages2019 ($comite, $division, $annee, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		require ("test17.php");
		}
//  ***************** Huitième -Quarts - Demi - Finale  **********
	elseif($type==18)
		{
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
		huitieme2019($comite, $division, $annee, $bdd);
		afficheLieux($division, $annee, $comite, $bdd);
		require ("test18.php");		
		}
//  ***************** Huitième AR-Quarts - Demi - Finale  **********
	elseif($type==19)
		{
		require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
		afficheLieux ($division, $annee, $comite, $bdd);
		huitiemeAR2019 ($comite, $division, $annee, $bdd);	
		require ("test19.php");		
		//require ("test0.php");
		}		
				
elseif($type==0)
	{
		require ("test0.php");
	}

require ("../bas2.php");
include("../../pub/pub_displayCarre.php"); 
?>	
	</div>
</body>
</html>
