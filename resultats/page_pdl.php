<?php 
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';

include("fonctions.php");
require "constantes.php";
$champLigue=21;
$sigleLigue="(PDL)";
$cmt="pl";
$comite="phppl";
$CMT="PL";

$comiteNom="Pays de Loire";?>
 
<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_pdl.php/" />
<meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg;?> Pays de la Loire</title>
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
      <td colspan="3"><img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?></td>
    </tr>
    <tr class="backgroundColorWhite" >
      <td colspan="3">
        <?php include("../pub/pub_displayHorizontal.php");?>
      </td>
    </tr>
    <tr>
	  <!-- Colonne de gauche --> 
      <td class="colonneDroiteGauche">
        <?php include("../01gauche.php");?> 
    </td>
      
	  <!-- Colonne centrale --> 
	  <td class="colonneCentrale center"> 
          <h1> Compétitions Régionales</h1>
          <h2 class="titre">Ligue Pays de la Loire</h2>
          <h2 class="commentaire">Le comité territorial Pays de la Loire est devenu<br>
            la ligue Pays de la Loire en 2018.</h2>
			<br>
          		 
<?php 
	include("liensDivers.php");  
    include("sommaires.php");  
         
    echo "<hr>"."<hr>";
    echo "<br>"."<br>";
	//require("comPerso.php");
     
 	/*
	echo " <h5><a name=\"H\"></a><a name=\"P\"></a>$FED3</h5>"; 
    $champ = 210171; $champ2 = 210271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	*/	
	
	echo " <h5><a name=\"R1\"></a></a>".$REG1."<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font></h5>";
    $champ = 210171; $champ2 = 210271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	     
    echo "<h5><a name=\"R2\"></a>".$REG2." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2." </font> <br><br></h5>";	
	$champ = 210181; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
				
	//require '../pub/pub_displayHorizontal.php';
			
  //require '../pub/pub_displayH_550.php';

    echo "<h5><a name=\"R3\"></a>".$REG3." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4."</font> <br><br></h5>";	
    $champ = 210191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	      
  include "liensDiversBas.php";
  
  ?>
    
  </td>
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?> 
      </td>
    </tr>
    
</table>

 <footer> 
  <?php include("piedDePage.php"); ?>
 </footer>
</body>
</html>
