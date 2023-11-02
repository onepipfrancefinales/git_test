<?php 
session_start ();
//$message = "Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 7me journ&eacute;e du 01 Novembre";
//require '../connect/connexion3.php';
require '../connect/connexion6.php';
include("../saison.php");
include("fonctions.php");
require "constantes.php";
require '../Phpleague/phpfed3NE/consult/fonctions_matchs.php';
require '../Phpleague/phpfed3NE/lang/lang_fr.php';
$comite="phpfed3NE"; 
$CMT="fed3NE"; 
$cmt="fed3NE";
$division = 160; 
$comiteNom="F&eacute;d&eacute;rale 3 - Excellence B";
?> 

<!DOCTYPE html>       
<html>
<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7CSSC3EPH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G7CSSC3EPH');
</script>
-->
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpfed3NE/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
<title>Championnats de France <?php echo $comiteNom;?></title>
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
    <td colspan="3" > <img src="../images/stade3.jpg" width="1250" height="150"></td>
  </tr>  
  <tr >
    <td colspan="3" ><?php include("../01ligne.php"); ?></td>
  </tr> 
  <tr bgcolor="#FFFFFF"  > 
   <td height="26" colspan="3" ><?php include("../pub/pub_displayHorizontal.php");?> </td>
  </tr>
  <tr> 
  <!-- Colonne de gauche --> 
  <td width="225"  bgcolor="#006699"  valign="top"  ><?php  include("../01gauche.php");?> </td>
   
   
   <!-- Colonne centrale --> 
  <td bgcolor="#ffffff"  width="650" > 
        <div align="center"><br />
          <h1> CHAMPIONNAT DE FRANCE </h1>
	 <h2 class="titre">F&eacute;d&eacute;rale 3 - Excellence B  </h2>
     <br>
	 <?php 
	require 'liensDivers.php';
	require 'sommaires.php';
   ?>
  <script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>
  <br/>
   
  <table align ="center"  width="500">
 <tr> 
   <td>
  
	<h4 class="bulleReparGeo">
	 <a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed3.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')"><font color="#000000">R&eacutepartition g&eacuteographique des clubs de F&eacuted&eacuterale 3</font></a>
 
 </h4> 
    <h4 class="bulleReglement">
	 <a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2023-2024</a>
 </h4>
    </td>
	</tr> 
 </table> 

  <?php       
    echo "<hr />"." <hr />";
    //require("comPerso.php");
          
    echo " <h5><a name=\"1\"></a>".$P1." </h5>"; 
    $champ = 991161; $champ2 = 991261;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    
	require '../pub/pub_displayH_550.php' ;
	//  include("comPerso2.php");  
          
    echo " <h5><a name=\"2\"></a>".$P2." </h5>"; 
    $champ = 991162; $champ2 = 991262;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	//  include("comPerso2.php"); 
		   
    echo " <h5><a name=\"3\"></a>".$P3."  </h5>"; 
    $champ = 991163; $champ2 = 991263;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd); 
	
    echo " <h5><a name=\"4\"></a>".$P4."  </h5>"; 
    $champ = 991164; $champ2 = 991264;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php' ;	  
   
    echo " <h5><a name=\"5\"></a>".$P5."  </h5>"; 
    $champ = 991165; $champ2 = 991265;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	echo " <h5><a name=\"6\"></a>".$P6." </h5>"; 
    $champ = 991166; $champ2 = 991266;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);	
	
	//require '../pub/pub_displayHorizontal.php';
         
	echo " <h5><a name=\"7\"></a>".$P7."  </h5>"; 
    $champ = 991167; $champ2 = 991267;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
    echo " <h5><a name=\"8\"></a>".$P8." </h5>"; 
    $champ = 991168; $champ2 = 991268;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	echo " <h5><a name=\"9\"></a>".$P9."  </h5>"; 
    $champ = 991169; $champ2 = 991269;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd); 
    perequation($comite, $champ, $bdd);
	
	
	
	require '../pub/pub_displayH_550.php' ;	 
	//include("comPerso2.php");
          
    echo "<hr />"." <hr />";?>
   
<table align ="center"  width="500">
  <tr> 
    <td>	<h4 class="bulleReglement">
			<a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2023-2024</a>
		</h4>
		<h4 class="bulleReparGeo">
			<a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed3.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')"><font color="#000000">R&eacutepartition g&eacuteographique des clubs de F&eacuted&eacuterale 3</font></a>
		</h4> 
    </td>
  </tr> 
</table> 

  <br/>
   
   
   
   
  <?php 		
	require 'sommaires.php';
	require 'liensDivers.php';
	require '../pub/pub_displayCarre.php' ;
	  ?>          
        
      </td>
	  <!-- Colonne de droite --> 
      <td bgcolor="#006699" width="225" valign="top" align="center"><p><?php  include("../00droite.php"); ?>   </p></td>
    </tr>
    
      
   </table>
  <?php include("piedDePage.php"); ?>
  <footer>
  
  </footer>
 </body>
</html>
