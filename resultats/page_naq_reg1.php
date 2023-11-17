<?php 
session_start ();
//$message = "Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 6me journ&eacute;e du 01 Novembre";
//require '../connect/connexion2.php';

include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");
require 'constantes.php';
require '../Phpleague/phpca/consult/fonctions_matchs.php';
require '../Phpleague/phpca/lang/lang_fr.php';
$champLigue=19;
$sigleLigue="(NAQ)";
$bddComite="ca";
$comite="phpca";
$CMT="CA";
$cmt="ca";
$comiteNom="Cote d'Argentaaaaa";?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
     <link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_naq_reg1.php/" />
     <link type="text/css" rel="stylesheet" href="../Phpleague/phpca/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg;?> Nouvelle Aquitaine</title>
  <meta name="description"
 content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
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
<div align="center">
<table width="1250">
  <tbody>
    <tr>
      <td colspan="3"> <img
 src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150"
 width="1250"></td>
    </tr>
    <tr>
      <td colspan="3">
      <div><?php include("../01ligne.php"); ?> </div>
      </td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" height="26"> 
      <table width="1200" border="0" align="center">
        <tr> 
          <td> 
            <?php include("../pub/pub_displayHorizontal.php");?>
          </td>
        </tr>
      </table>
    </td>
    </tr>
    <tr valign="middle">
      <td bgcolor="#006699" valign="top" width="225" height="1654"> 
        <p><?php include("../01gauche.php");?> </p>
      </td>
      <td bordercolor="#000000" bgcolor="#ffffff" width="650" height="1654" valign="top"> 
        <div align="center"> <br>
          <h1> Compétitions Régionales</h1>
          <h2 class="titre" ><?php echo $ligueNAQ; ?></h2>
          <h2 class="commentaire">La ligue Nouvelle Aquitaine est née de la fusion des comité;s territoriaux<br>
            du Béarn, de Basque Landes, de Côte d'Argent, du Limousin, <br>
            du périgord Agénais et du comité; Poitou Charente en 2018.</h2>
          <br>
<?php
	include 'liensDivers.php';  
	include 'sommaires.php';      
 
	echo " <hr>"."<hr>";
  
//	require("comPerso.php"); 
  
	echo  "<h5>".$REG1." - ".$P1." <br>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font><br></h5>";
	$champ = 190171; $champ2 = 190271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
//	require '../pub/pub_displayH_550.php';
   
	echo  "<h5>".$REG1." - ".$P2." <br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font></h5>";
  $champ = 190172; $champ2 = 190272;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	echo  "<h5>".$REG1." - ".$P3." <br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font></h5>";  
  $champ = 190173; $champ2 = 190273;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	//require 'cadrePubHorizontal600.php';
	//require '../pub/pub_displayH_550.php';
   
	echo  "<h5>".$REG1." - ".$P4." <br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font></h5>";
  $champ = 190174; $champ2 = 190274;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	
	echo  "<h5>".$REG1." - ".$P5." <br>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font><br></h5>";
	$champ = 190175; $champ2 = 190275;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	  
	echo "<hr>"."<hr>";
  
	include 'sommaires.php'; 
	include 'liensDivers.php'; 
//	require '../pub/pub_displayH_550.php';
?>
            <br>
          </p>
        </div>
      </td>
      <td align="center" bgcolor="#006699"  width="225" valign="top"> 
        <p>          <?php include("../00droite.php"); ?>        </p>
      </td>
    </tr>
       
    </table>
     <td align="center" bgcolor="#006699" height="1361" valign="top" width="225"> 
        <p><?php include("piedDePage.php"); ?> </p>
      </td>
    <footer> 
      
    </footer>
  </body>
</html>
