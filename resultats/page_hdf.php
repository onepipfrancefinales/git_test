<?php
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';
include("fonctions.php");
require "constantes.php";
$champLigue=16;
$sigleLigue="(HDF)";

$comite="phppl";
$CMT="FL";
$cmt="fl";
$comiteNom="des Flandres";?>
 
 
 <!DOCTYPE html>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_hdf.php/" />
 <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg;?> Hauts de France</title>
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
<
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
    <tr bgcolor="#ffffff">
     <td colspan="3"><td><?php include("../pub/pub_displayHorizontal.php");?></td> 
    </tr>
    <tr>
	  <!-- Colonne de gauche --> 
      <td bgcolor="#006699" valign="top" width="225" height="1361"><p><?php include("../01gauche.php");?> </p></td>
     
	 <!-- Colonne centrale --> 
	 <td bgcolor="#ffffff" height="1361" valign="top"> 
        <div align="center"><br>
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class="titre">Ligue Haut de France </h2>
          <h2 class="commentaire">Le comit&eacute; territorial des Flandres est devenu<br>
            la ligue des Hauts de France en 2018.</h2>
		  <?php

	include("liensDivers.php");
    include("sommaires.php");
        
          
    echo "<hr />"." <hr />";
	
	/*
	 echo "<h5> <a name=\"H\"></a>$FED3 <br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">( $PHASE_REGIONALE )</font></h5>";
	$champ = 160171; $champ2 = 160271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php' ;
    */
	
     echo "<h5> <a name=\"R1\"></a>".$REG1." <br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font></h5>";
	$champ = 160171; $champ2 = 160271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	
    
    echo " <h5><a name=\"R2\"></a></a>".$REG2." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2."
            </font> <br><br></h5>";
    $champ = 160181; $champ2 = 169181;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	// include("comPerso2.php"); 
	//require '../pub/pub_displayH_550.php' ;	 
    /*   	   
    <h6> <a href="../pageOutil.php" target="_top">Saississez vous-m&ecirc;me 
    les r&eacute;sultats de votre club<br>
     Consulter les instructions</a> <font size="2">(simple et rapide)</font></h6>
    */
     
	//require 'cadrePubHorizontal600.php';
        
    echo " <h5><a name=\"R2\"></a></a>".$REG3." - ".$P1."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4." 
            </font> <br><br></h5>";	
	$champ = 160191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
  echo " <h5><a name=\"R2\"></a></a>".$REG3." - ".$P1."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4."
            </font> <br><br></h5>";	
	$champ = 160192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
		
	// include("comPerso2.php"); 

	include("sommaires.php");
	include("liensDivers.php");
	//require '../pub/pub_displayH_550.php';
	?>
			
        </div>
      </td>
      <td align="center" bgcolor="#006699" valign="top" width="225"><p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
    
</table>
<?php include("piedDePage.php"); ?>
  <footer> 
   
  </footer>
 </body>
</html>
