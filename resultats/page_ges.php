<?php
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
require '../Phpleague/phpidf/consult/fonctions_matchs.php';
require '../Phpleague/phpidf/lang/lang_fr.php';
include("fonctions.php");
require 'constantes.php';
$champLigue=15;
$sigleLigue="(GES)";

$comite="phpidf";
$CMT="AL";
$cmt="al"; 
$comiteNom="Alsace Lorraine";?> 

<!DOCTYPE html PUBLIC>       
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_ges.php/" />
<meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpidf/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
<title><?php echo $champReg;?> Grand Est</title>
<meta name="description" content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
<meta name="classification" content="Sport,Rugby">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
  <script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>
<!--
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
-->
</head>
<body >
  <table class="table">
    <tr  > 
      <td colspan="3" >
        <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" width="1250" height="150"></td>
    </tr>
    <tr >
      <td colspan="3" >
        <?php include("../01ligne.php"); ?></td>
    </tr>
    <td colspan="3">
        <?php include("../pub/pub_displayHorizontal.php"); ?>
      </td>
    <tr> 
	  <!-- Colonne de gauche --> 
      <td class="colonneDroiteGauche">
        <?php  include("../01gauche.php");?>
      </td>
     
	 <!-- Colonne centrale --> 
	 <td class="colonneCentrale center" > 
         
          <h1> Compétitions Régionales</h1>
          <h2 class="titre">Ligue du Grand Est </h2>
          <h2 class="commentaire">La ligue Grand Est est née de la fusion des<br>
            comit&eacute;s territoriaux Lorraine et Alsace.<br></h2>
<?php 
	include("liensDivers.php");  
    include("sommaires.php");
         
	echo "<hr />"." <hr />";
          
	// require("comPerso.php"); 
	/*
	         
     echo "<h5> <a name=\"H\"></a> $FED3 <br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">($PHASE_REGIONALE)</font></h5>";
	$champ = 150171; $champ2 = 150271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);    
    perequation($comite, $champ, $bdd);
	
	*/
	
            
  echo "<h5> <a name=\"R1\"></a>".$REG1."<br>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font></h5>";
	$champ = 150171; $champ2 = 150271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);    
  perequation($comite, $champ, $bdd);
	      
   // include("../pub/pub4.php");
         
	echo " <h5><a name=\"R2\"></a></a>".$REG2." - ".$P1." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2."</font> <br><br></h5>";	
	$champ = 150181; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
  perequation($comite, $champ, $bdd);
	
	
	
 	
	//require '../pub/pub_displayH_550.php';


	echo " <h5><a name=\"R3\"></a>".$REG3." - ".$P1." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4." </font> <br><br></h5>";	
	$champ = 150191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 	
  perequation($comite, $champ, $bdd);

  echo " <h5><a name=\"R3\"></a>".$REG3." - ".$P2." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4." </font> <br><br></h5>";	
	$champ = 150192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 	
  perequation($comite, $champ, $bdd);
	
  include "liensDiversBas.php";

	?>
        </div>
      </td>
	  
      <td class="colonneDroiteGauche"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
  </table>
<?php include("piedDePage.php"); ?>
		<footer>
			
		</footer>
	</body>
</html>
