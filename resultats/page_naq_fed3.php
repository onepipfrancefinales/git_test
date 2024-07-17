<?php 
session_start ();
//$message = "Arr&ecirc;t des compétitions &agrave; l'occasion de la 6me journée du 01 Novembre";
//require '../connect/connexion2.php';
require '../connect/connexion6.php';
include("../saison.php");
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
$comiteNom="Cote d'Argent";?>

<!DOCTYPE html>
<html lang="fr">
<head>
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpca/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg;?> Nouvelle Aquitaine</title>
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
          <h2 class="titre">Ligue Nouvelle Aquitaine</h2>
          <h2 class="commentaire">La ligue Nouvelle Aquitaine est née de la fusion des comités territoriaux<br>
            du Béarn, de Basque Landes, de C&ocirc;te d'Argent, du Limousin, <br>
            du périgord Agénais et du comité Poitou Charente en 2018.</h2>
          <br>
<?php
	include 'liensDivers.php';  
	include 'sommaires.php';      
 
	echo " <hr>"."<hr>";
  
	require("comPerso.php"); 
  
	echo  "<h5>$FED3- $P1 <br>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font><br></h5>";
	$champ = 190161; $champ2 = 190261;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php';
   
	echo "<h5>$FED3- $P2<br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 190162; $champ2 = 190262;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	echo "<h5>$FED3- $P3<br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";  
    $champ = 190163; $champ2 = 190263;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	//require 'cadrePubHorizontal600.php';
   
	echo "<h5>$FED3- $P4<br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 190164; $champ2 = 190264;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	
	echo  "<h5>$FED3- $P5 <br>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font><br></h5>";
	$champ = 190165; $champ2 = 190265;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php';
   
	echo "<h5>$FED3- $P6<br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 190166; $champ2 = 190266;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	echo "<h5>$FED3- $P7<br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";  
    $champ = 190167; $champ2 = 190267;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	//require 'cadrePubHorizontal600.php';
   
	echo "<h5>$FED3- $P8<br>
    <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 190168; $champ2 = 190268;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
  
	echo "<hr>"."<hr>";
  
	include 'sommaires.php'; 
	include 'liensDivers.php'; 
	require '../pub/pub_displayH_550.php';
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
