<?php 


session_start ();
require '../connect/connexion6.php';
include("../saison.php");
include("fonctions.php");
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$division = 140;
$comite="phppro";
$CMT="fed1";
$cmt="f1";
$comiteNom="F&eacute;d&eacute;rale 1 - Espoirs F&eacute;d&eacute;rale 1";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7CSSC3EPH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G7CSSC3EPH');
</script>
 <link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <div align="center">
 <title>Championnat de France <?php echo $comiteNom;?></title>
 <meta name="description"
 content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
 <meta name="classification" content="Sport,Rugby">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="resource-type" content="document">
 <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
 <meta name="author" content="Equipe Onepip"><meta name="robots" content="All">
</head>

<body>


 <table class="table"> 
  <tr>
  <!--  <td colspan="3"><img src="../images/stade3.jpg" height="150" width="1250"> </td> -->
  </tr> 
  <tr>
    <td colspan="3"><?php// include("../01ligne.php"); ?></td> 
  </tr> 
  <tr bgcolor="#ffffff">
    <td colspan="3" height="26"><?php// include("../pub/pub_displayHorizontal.php");?></td>
  </tr>
  <tr> 
	<!-- Colonne de gauche -->
  
  <td bgcolor="#006699" valign="top" width="225"> <p><?php //include("../01gauche.php");?> </p> </td> 
   
	<!-- Colonne centrale --> 
   <td  bgcolor="#ffffff" width="650" valign="top">
	  <div align="center"> <br>
	

  <script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>
<br />

 <?php 
	/* variables à saisir (ligue date) */
	$page = "presentation";
	echo "<h2>"."Présentation de la journée"."</h2>";

	include "facebookChoixLigue.php";
	
	if (isset($_POST['ligue'])) $ligue = $_POST['ligue'];else $ligue ="1000000";	
	if (isset($_POST['date'])) $date = $_POST['date'];else $date ="2022-09-18 15:00:00";
	
	
	echo "date : ".$date;echo "<br />";
	echo "ligue :".$ligue;echo "<br />";
	//$ligue = 1100000;
	//$date = "2022-09-18	15:00:00";
	
	
	echo "<hr />";
	echo "<br />";
	
	
	$dateMax =  date('Y-m-d', strtotime($date. ' + 2 days')); // On ajoute 2 jours
	$dateMin = date('Y-m-d', strtotime($date. ' - 4 days')); // On ajoute 2 jours 

	$ligueMax = $ligue + 100000;
		

/*----------------- Feminines Elite 1-----------------------*/
$champ = 880281;
	
	//echo "date : ".$date; echo "<br />";
	//echo "date : ".$dateMin; echo "<br />";
	//echo "date : ".$dateMax; echo "<br />";

	//echo "champ : ".$champ; echo "<br />";
	//echo "ligue : ".$ligue; echo "<br />";
	//echo "comite : ".$comite; echo "<br />";
	//echo "<br />";

		
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes
	INNER JOIN phppro_journees ON phppro_equipes.id_champ = phppro_journees.id_champ						
	WHERE phppro_equipes.id between '$ligue' and '$ligueMax'
	AND phppro_equipes.id_champ between '880000' and '890000' 
	AND phppro_journees.date_prevue between '$dateMin' and '$dateMax'"); 
							
	$nb_equipeCompetFem=$requete->fetch();
	//echo "fem".$nb_equipeCompetFem[0];echo "<br/>";
	if ($nb_equipeCompetFem[0] > 0 )
		{
		affichageTitreCompet($date, $champ, $ligue, $comite, $bdd);	
		}
	
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ between '880280' and '880284'"); 
							
	$nb_equipeE1=$requete->fetch();	
	//echo $nb_equipeE1[0];echo "<br/>";
	if ($nb_equipeE1[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);
		}
		
		/*----------------- Feminines Elite 2-----------------------*/
	$champ = 880285;
		
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ = '880285'"); 
							
	$nb_equipeE2=$requete->fetch();	
	//echo $nb_equipeE2[0];
	if ($nb_equipeE2[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);
		}
		
/*---------------------- Feminines Fed 1 ------------------------------*/		
		$champ = 880291;
		
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ between '880290' and '880295'
	"); 
								
	
	$nb_equipeF1=$requete->fetch();
	//echo $nb_equipeF1[0];echo "<br/>";
	if ($nb_equipeF1[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);
		}

/*----------------- top 14 -----------------------*/
			
	$champ = 990110;
		
	
	//echo "date : ".$date; echo "<br />";
	//echo "champ : ".$champ; echo "<br />";
	//echo "ligue : ".$ligue; echo "<br />";
	//echo "comite : ".$comite; echo "<br />";
	//echo "<br />";
	
	//recherche du nombre de clubs dans la catégorie pro pré-pro
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes
	INNER JOIN phppro_journees ON phppro_equipes.id_champ = phppro_journees.id_champ						
	WHERE phppro_equipes.id between '$ligue' and '$ligueMax'
	AND phppro_equipes.id_champ between '990110' and '990139' 
	AND phppro_journees.date_prevue between '$dateMin' and '$dateMax'"); 
							
	$nb_equipeCompetPro=$requete->fetch();
		
	//echo $nb_equipeCompetPro[0];echo "<br/>";
	if ($nb_equipeCompetPro[0] > 0 )
		{
			//echo "titre";
		affichageTitreCompet( $date, $champ, $ligue, $comite, $bdd);
		}
	
	
	//recherche du nombre de clubs de la ligue dans la division
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ = '990110'"); 
							
	 $nb_equipe110=$requete->fetch();
		
///echo $nb_equipe110[0];echo "<br/>";
	if ($nb_equipe110[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);		
		}


/*-----------------pro D2 -----------------------*/

$champ = 990120;
		
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ = '990120'"); 
							
	 $nb_equipe120=$requete->fetch();
		
	//echo $nb_equipe120[0];echo "<br/>";
	if ($nb_equipe120[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);		
		}
		
/*-----------------Nationale  -----------------------*/

$champ = 990130;
		
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ = '990130'"); 
							
	 $nb_equipe130=$requete->fetch();
		
//echo $nb_equipe130[0];echo "<br/>";
	if ($nb_equipe130[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);		
		}
		
		
/*-----------------Nationale 2 -----------------------*/

$champ = 990135;
		
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ between '990135' and '990136'"); 
							
	 $nb_equipe=$requete->fetch();
		
//echo $nb_equipe[0];echo "<br/>";
	if ($nb_equipe[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);		
		}


/*----------------- Federale 1 -----------------------*/
			
	$champ = 990141;
	//recherche du nombre de clubs dans la catégorie Fédérale	
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes
	INNER JOIN phppro_journees ON phppro_equipes.id_champ = phppro_journees.id_champ						
	WHERE phppro_equipes.id between '$ligue' and '$ligueMax'
	AND phppro_equipes.id_champ between '990140' and '990160' 
	AND phppro_journees.date_prevue between '$dateMin' and '$dateMax'"); 
							
	$nb_equipeCompetFed1et2=$requete->fetch();
		
	//echo $nb_equipeCompetFed1et2[0];echo "<br/>";
	
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phpfed3NE_equipes
	INNER JOIN phpfed3NE_journees ON phpfed3NE_equipes.id_champ = phpfed3NE_journees.id_champ						
	WHERE phpfed3NE_equipes.id between '$ligue' and '$ligueMax'
	AND phpfed3NE_equipes.id_champ between '991160' and '992170' 
	AND phpfed3NE_journees.date_prevue between '$dateMin' and '$dateMax'"); 
							
	$nb_equipeCompetFed3=$requete->fetch();
		
	//echo $nb_equipeCompetFed3[0];echo "<br/>";
	
	$nb_equipeCompetFed = $nb_equipeCompetFed1et2[0] + $nb_equipeCompetFed3[0];
	
	//echo $nb_equipeCompetFed;echo "<br/>";
	if ($nb_equipeCompetFed > 0 )
		{	
		affichageTitreCompet( $date, $champ, $ligue, $comite, $bdd);
		}
	
	
	
	

/*	
	echo "date : ".$date; echo "<br />";
	echo "champ : ".$champ; echo "<br />";
	echo "ligue : ".$ligue; echo "<br />";
	echo "comite : ".$comite; echo "<br />";
	echo "<br />";
	*/
	
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ between '990141' and '990144'"); 
							
	 $nb_equipe=$requete->fetch();
		
//echo $nb_equipe[0];echo "<br/>";
	if ($nb_equipe[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);		
		}
		
/*---------------- Federale 2 ----------------------------*/
	 
	$champ = 990151; 
		
	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phppro_equipes							
	WHERE id between '$ligue' and '$ligueMax'
	AND id_champ between '990151' and '990158'"); 
							
	 $nb_equipe=$requete->fetch();
	
	//echo "nbre d'equipe : ".$nb_equipe[0]; 
	//echo "<br/>";
	
	//echo $nb_equipe[0];echo "<br/>";
		if ($nb_equipe[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd);
		}
	
/*---------------- Federale 3 -----------------------*/
$comite="phpfed3NE";	
$champ = 991161; 

	//recherche du nombre de clubs de la ligue dans la poule
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM phpfed3NE_equipes							
	WHERE id between '$ligue' and '$ligueMax'"); 
							
	$nb_equipe=$requete->fetch();
	
	//echo "nbre d'equipe : ".$nb_equipeCompetFed3[0]; 
	//echo "<br/>";	
		if ($nb_equipeCompetFed3[0] > 0 )
		{
		// affichage des clubs de la ligue presents dans la division
		affichageOppositionsLigueNE($page, $date, $champ, $ligue, $comite, $bdd);
		}
			
/*-------- Competitions ligue --------------------*/
if ($ligue == 100000 )
	$comite="phpau";	
elseif ($ligue == 1900000 )
	$comite="phpca";
elseif ($ligue == 2000000 )
	$comite="phpab";
elseif ($ligue == 1100000 or $ligue == 1200000 or $ligue == 1300000 or $ligue == 1600000 or $ligue == 2100000)
$comite="phppl";
elseif ($ligue == 1500000 or $ligue == 1700000 or $ligue == 1800000 or $ligue == 2200000 )
$comite="phpidf";



$champ = substr($ligue,0,6) + 171;
$champMax = substr($ligue,0,6) + 201;
//$ligue = 2200000;


//echo "date : ".$date; echo "<br />";
//	echo "champ : ".$champ; echo "<br />";
//	echo "ligue : ".$ligue; echo "<br />";
//	echo "comite : ".$comite; echo "<br />";
//	echo "<br />";



//echo "********************************";echo "<br />";
//echo "champ0 : ".$champ;echo "<br />";


$comite_equipes = $comite."_equipes";
$comite_journees = $comite."_journees";



//recherche du nombre de clubs dans la catégorie Fédérale	
	$requete = $bdd->query("SELECT COUNT(*) 	
	FROM $comite_equipes
	INNER JOIN $comite_journees ON $comite_equipes.id_champ = $comite_journees.id_champ						
	WHERE $comite_equipes.id between '$ligue' and '$ligueMax'
	AND $comite_equipes.id_champ between '$champ' and '$champMax' 
	AND $comite_journees.date_prevue between '$dateMin' and '$dateMax'"); 
							
	$nb_equipeCompetNat=$requete->fetch();
		
	//echo $nb_equipeCompetNat[0];echo "<br/>";
	
	
	if ($nb_equipeCompetNat[0] > 0 )
		{
		affichageTitreCompet($date, $champ, $ligue, $comite, $bdd);
		

	// affichage des clubs de la ligue presents dans la division
	affichageOppositionsLigueBFC($page, $date, $champ, $ligue, $comite, $bdd);
	affichageOppositionsLigueBFC($page, $date, $champ +10, $ligue, $comite, $bdd);
	affichageOppositionsLigueBFC($page, $date, $champ +20, $ligue, $comite, $bdd);
		}
	?>

<br/>
 

    </div>  
	</td>
	
	<!-- Colonne de droite --> 
		<td  align="center" bgcolor="#006699" height="1819" width="225"><p><?php include("../00droite.php"); ?> </p></td>
</tr>
</table>

<?php //include("piedDePage.php"); ?> 
<footer> 
</footer>
</body>
</html>