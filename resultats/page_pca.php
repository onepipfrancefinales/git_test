<?php 
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
require '../Phpleague/phpidf/consult/fonctions_matchs.php';
require '../Phpleague/phpidf/lang/lang_fr.php';
include("fonctions.php");
require "constantes.php";

$sigleLigue="(PCA)";
$champLigue=22;
$comite="phpidf";
$CMT="PR";
$cmt="pr";
$comiteNom="Provence";
?>
  
  <!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_pca.php/" />
<meta charset="utf-8" />
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpidf/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats Territoriaux comité <?php echo $comiteNom;?></title>
  <meta name="description"
 content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
    <script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>


</head>
<body>
<table class="table">
    <tr>
      <td colspan="3"> <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td colspan="3" height="26"><?php include("../pub/pub_displayHorizontal.php");?></td>
    </tr>
    <tr>
	  <!-- Colonne de gauche --> 
      <td class = "colonneDroiteGauche"><p><?php include("../01gauche.php");?> </p></td>
      
	  <!-- Colonne centrale --> 
	  <td class = "colonneCentrale"> 
          <h1> Compétitions Régionales</h1>
          <h2 class="titre">Ligue Provence Alpes <br>Côte d'Azur</h2>
          <h2 class="commentaire">La ligue Provence Alpes Côte d'Azur est née de la fusion des<br>
            comités territoriaux de Provence et de Côte d'Azur en 2018.</h2>
          <br>
       
<?php
	include("liensDivers.php"); 
	include("sommaires.php");       
	echo "<hr>"."<hr>";
	
	// require("comPerso.php");

	/*
	echo   "<br>"."<h5><a name=\"H\"></a>$FED3 - $P1<br><br></h5>";
	$champ = 220161; $champ2 = 220261;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
	
	echo   "<br>"."<h5><a name=\"H\"></a>$FED3 - $P2<br><br></h5>";
	$champ = 220162; $champ2 = 220262;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
	
	echo   "<br>"."<h5><a name=\"H\"></a>$FED3 - $P3<br><br></h5>";
	$champ = 220163; $champ2 = 220263;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
	
	*/
	
	
	
	echo   "<br>"."<h5><a name=\"R1\"></a>".$REG1."<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
	$champ = 220171; $champ2 = 220271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
	
    // include("comPerso2.php");  
         
	echo   "<br>"."<h5><a name=\"R2\"></a>".$REG2." - ".$P1."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2."  
            </font> <br><br></h5>";	
	$champ = 220181; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
 
	echo   "<br>"."<h5></a>".$REG2." - ".$P2."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2." 
            </font> <br><br></h5>";	
	$champ = 220182; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);


  echo   "<br>"."<h5></a>"."Réserve ".$REG2." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2." 
            </font> <br><br></h5>";	
	$champ = 229181; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	
    //require '../pub/pub_displayH_550.php';
    //include("comPerso2.php");

	echo   "<br>"."<h5><a name=\"R3\"></a>".$REG3." - ".$P1."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4." 
            </font> <br><br></h5>";	
	$champ = 220191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
	
	echo   "<br>"."<h5>".$REG3." - ".$P2."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4." 
            </font> <br><br></h5>";	
	$champ = 220192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	
 
	include "liensDiversBas.php";
  ?>
       
 </td>
      <td class = "colonneDroiteGauche"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
   
</table>

  <footer> 
   <?php include("piedDePage.php"); ?>
  </footer>
 </body>
</html>
