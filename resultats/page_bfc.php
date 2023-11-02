<?php
session_start (); 
//$message = "<br /> Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 6me journ&eacute;e du 01 Novembre <br/>";
//require '../connect/connexion2.php';
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';
include("../saison.php");
include("fonctions.php");
require "constantes.php";
$champLigue=11;
//$sigleLigue="(BFC)";
$comite="phppl";
$CMT="BG";
$cmt="bg";
$comiteNom="Bourgogne";?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg;?> Bourgogne franche Comté</title>
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
<!--
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
-->
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
    </tr>
    <tr>
	<!-- Colonne de gauche --> 
	<td class="colonneDroiteGauche"><p><?php include("../01gauche.php");?> </p></td>
      
	<!-- Colonne centrale --> 
	<td class = "colonneCentrale"> 
        <div align="center"> 
          <h1> <br>
            Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class="titre">Ligue Bourgogne Franche Comt&eacute;</h2>
          <h2 class="commentaire">La ligue Bourgogne Franche Comt&eacute; est n&eacute;e de la fusion des<br>
            comit&eacute;s territoriaux de Bourgogne et de FranceComt&eacute;.<br>
           </h2>
		  <?php 
	include("liensDivers.php");  
    include("sommaires.php"); 
		  
    echo "<hr />"." <hr />";
	  
	// require("comPerso.php");
	/*
	 echo "<h5> <a name=\"H\"></a>$FED3 - $P1<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 110171; $champ2 = 110271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	 echo "<h5><a name=\"1\"></a> <a name=\"2\"></a>$FED3 - $P2<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 110171; $champ2 = 110271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	*/
	
     echo "<h5> <a name=\"R1\"></a></a>$REG1<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 110171; $champ2 = 110271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	 
	//require '../pub/pub_displayH_550.php' ;
    
	
   	echo " <h5><a name=\"R2\"></a>$REG2 <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 1re/ 2me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 110181; $champ2 = 119181;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
    perequation($comite, $champ, $bdd);
	
    //require '../pub/pub_displayHorizontal.php';
   		
	echo "<h5><a name=\"R3\"></a> $REG3 - Accession <br/></h5>";
    $champ = 110182; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	echo "<h5><a name=\"R3\"></a> $REG3 <br/>
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 3me/ 4me s&eacute;rie)</font><br></h5>";
    $champ = 110191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	
	
	echo "<hr />"." <hr />";
    
	include("sommaires.php"); 
    include("liensDivers.php");
         
	require '../pub/pub_displayH_550.php' ;
	?>
          
        </div>
      </td>
	  
	    <!-- Colonne de droite -->
      <td class = colonneDroiteGauche><p><?php include("../00droite.php"); ?> </p></td>
    </tr>
</table>    
     
      <?php include("piedDePage.php"); ?>
    
 
  <footer> 
   
  </footer>
 </body>
</html>
