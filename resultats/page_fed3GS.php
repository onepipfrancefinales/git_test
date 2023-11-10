<?php
session_start ();
require '../connect/connexion6.php';
include("../saison.php");
include("fonctions.php");
require "constantes.php";
require '../Phpleague/phpfed3NE/consult/fonctions_matchs.php';
require '../Phpleague/phpfed3NE/lang/lang_fr.php';
$comite="phpfed3NE"; 
$CMT="fed3GS";
$cmt="fed3GS";
$division =160;
$comiteNom="F&eacute;d&eacute;rale 3 - Excellence B";?> 

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
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_fed3GS.php/" />
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
      <td colspan="3" ><?php  include("../01ligne.php"); ?></td>
    </tr>
    <tr valign="middle" bgcolor="#FFFFFF"  > 
      <td height="26" colspan="3" ><?php include("../pub/pub_displayHorizontal.php");?></td>
    </tr>
     
    <tr> 
	<!-- Colonne de gauche -->
      <td width="225"  bgcolor="#006699"  valign="top"  ><?php  include("../01gauche.php");?></td>
     
	<!-- Colonne centrale --> 
	 <td bgcolor="#ffffff"  width="650">
	<div align="center"><br />
     <h1> CHAMPIONNAT DE FRANCE </h1>
     <h2 class="titre"> F&eacute;d&eacute;rale 3 - Excellence B </h2>
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
        
    // require("comPerso.php"); 
	
    //meilleurQuatrieme($comite, $bdd);
  
    echo " <h5><a name=\"10\"></a>".$P10." </h5>"; 
	$champ = 992161; $champ2 = 992261;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php' ;
	// include("comPerso2.php"); 	  
          
    echo " <h5><a name=\"11\"></a>".$P11." </h5>"; 
	$champ = 992162; $champ2 = 992262;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd);  
  perequation($comite, $champ, $bdd);
	
	echo " <h5><a name=\"12\"></a>".$P12."</h5>"; 
    $champ = 992163; $champ2 = 992263;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);               
	
    echo " <h5><a name=\"13\"></a>".$P13." </h5>"; 
    $champ = 992164; $champ2 = 992264;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php' ;
	
	echo " <h5><a name=\"14\"></a>".$P14." </h5>"; 
    $champ = 992165; $champ2 = 992265;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
    echo " <h5><a name=\"15\"></a>".$P15." </h5>"; 
    $champ = 992166; $champ2 = 992266;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	//include("comPerso2.php"); 
    require '../pub/pub_displayHorizontal.php';
        
	echo " <h5><a name=\"16\"></a>".$P16." </h5>";  
    $champ = 992167; $champ2 = 992267;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
    // include("comPerso2.php");  
        
    echo " <h5><a name=\"17\"></a>".$P17." </h5>"; 
    $champ = 992168; $champ2 = 992268;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	echo " <h5><a name=\"18\"></a>".$P18." </h5>"; 
    $champ = 992169; $champ2 = 992269;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	

	
	require '../pub/pub_displayH_550.php' ; 	  
    echo "<hr />"." <hr />";
     ?>
     
<table align ="center"  width="500">
  <tr> 
    <td>
    <h4 class="bulleReglement">
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
         
        </div>
      </td>
	 <!-- Colonne de droite --> 
     <td bgcolor="#006699" width="225" valign="top" align="center" ><?php include("../00droite.php"); ?></td>
    </tr>
    
  </table>
<?php include("piedDePage.php"); ?>
  <footer>
  
  </footer>
 </body>
</html>
