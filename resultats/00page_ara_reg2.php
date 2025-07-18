<?php
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");
require 'constantes.php';
require '../Phpleague/phpau/consult/fonctions_matchs.php';
require '../Phpleague/phpau/lang/lang_fr.php';
$comite="phpau";
$CMT="AU";
$cmt="au";
$cmt2="ara";
$comiteNom="du lyonnais";
$champLigue=10;
$sigleLigue="(ARA)";
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
<meta name="google-adsense-account" content="ca-pub-9177538664500260">
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_ara_reg2.php/" /> 
<meta charset="utf-8" />
<link type="text/css" rel="stylesheet" href="../Phpleague/phpau/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg;?> Auvergne Rh&ocirc;ne ALpes</title>
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


</head>

<body>
  <table class="table">
    <tr>
      <td colspan="3"> <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3"><div><?php include("../01ligne.php"); ?> </div></td>
    </tr>
    <tr bgcolor="#ffffff" >
	  <td colspan="3" height="26"><?php include("../pub/pub_displayHorizontal.php");?></td> 
    </tr>
    <tr >
	  <!-- Colonne de gauche --> 
      <td class = "colonneDroiteGauche"><p><?php include("../01gauche.php");?> </p></td>
     
	 <!-- Colonne centrale --> 
	 <td class="colonneCentrale"> 
        <div align="center"> <br>
        <h1>Compétitions Régionales</h1>
          <h2 class="titre">Ligue Auvergne Rhône Alpes</h2>
          <h2 class="commentaire">La ligue Auvergne Rhône Alpes est née de la fusion des comités
            territoriaux<br>
            de l'Auvergne, du Lyonnais, des Alpes et du comité<br>
            Drôme Ardèche en janvier 2018.</h2>
 <?php 
	include("liensDivers.php"); 
    include("sommaires.php");  
          
    echo "<hr />"." <hr />";
    //require("comPerso.php"); 
         
    echo "<h5><a name=\"P\"></a>".$REG2."- ".$P1."<br></h5>";
	$champ = 100181; $champ2 = 109181;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php';   
	 
    echo "<h5>".$REG2." - ".$P2."<br></h5>";
    $champ = 100182; $champ2 = 109182;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);   
    perequation($comite, $champ, $bdd);
	
    echo "<h5>".$REG2." - ".$P3."<br></h5>";
	$champ = 100183; $champ2 = 109183;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);	
	
	require '../pub/pub_displayH_550.php';   
         
  echo "<h5>".$REG2." - ".$P4."<br></h5>";
	$champ = 100184; $champ2 = 109184;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
  perequation($comite, $champ, $bdd);
	
    echo "<h5>".$REG2." - ".$P5."<br></h5>";
	$champ = 100185; $champ2 = 109185;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
  perequation($comite, $champ, $bdd);
	
	
  echo "<h5>".$REG2." - ".$P6."<br></h5>";
	$champ = 100186; $champ2 = 109186;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
  perequation($comite, $champ, $bdd);
	
    echo "<hr />"." <hr />";
          
    include("sommaires.php"); 
	include("liensDivers.php");
           	 
    
   require '../pub/pub_displayH_550.php';
   ?>
         
   </div>
  </td>
  
  <!-- Colonne de droite --> 
    <td class = "colonneDroiteGauche"><p><?php include("../00droite.php"); ?> </p></td>
  </tr>  
</table>

<?php include("piedDePage.php"); ?>

	<footer>
    
	</footer>
</body>
</html>
