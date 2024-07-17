<!DOCTYPE html PUBLIC>
<html lang="fr">
<?php 
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");

require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$division = 650;
$comite="phppro"; 
$CMT="fed2"; 
$cmt="fed2";
$comiteNom="Fédérale 2 - Fédérale B";
?> 


<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_fed2.php/" />
<meta charset="utf-8" />
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
<meta charset="utf-8" />
 <link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
<title>Championnats de France <?php echo $comiteNom;?></title>
<meta name="description" content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
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

<body>
 <table class="table">
  <tr  > 
    <td colspan="3" > <img src="../images/stade3.jpg" width="1250" height="150"></td>
  </tr>
  <tr >
    <td colspan="3" ><?php  include("../01ligne.php"); ?></td>
  </tr>
  <tr valign="middle" bgcolor="#FFFFFF"  >
    <td colspan="3"><?php //include("../pub/pub_displayHorizontal.php");?></td>
  </tr>
  <tr> 
    <!-- Colonne de gauche --> 
    <td class = "colonneDroiteGauche"><p><?php  include("../01gauche.php");?>   </p></td>
	
	<!-- Colonne centrale -->
	<td class = "colonneCentrale" > 
        <div align="center"><br />
          <h1>CHAMPIONNAT DE FRANCE TEST</h1>
          <h2 class="titre">Fédérale 2 TEST - Fédérale B TEST </h2>
          <br />
<?php 
   require 'liensDivers.php';
   include 'sommaires.php';  ?>
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
	 <a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed2.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')"><font color="#000000">R&eacutepartition g&eacuteographique des clubs de F&eacuted&eacuterale 2</font></a>
 
 </h4> 	 
 <h4 class="bulleReglement">
	 <a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2023-2024</a>
 </h4>
  	
    </td>
	</tr> 
 </table> 

 	 
   
  <?php  
 
 /*
 require '../fichierConfig.php';
  foreach ($tableau151 as $poule)
{
  echo " <h5><a name=\"1\"></a>Poule".substr ($poule,-1)."</h5>"; 
    $champ = $poule; $champ2 = $poule + 100;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
   require '../pub/pub_displayH_550.php' ;
}
  */
   echo "<hr />"." <hr />";
          
   // require("comPerso.php"); 
          
   echo " <h5><a name=\"1\"></a>Poule 1 Test</h5>"; 
    $champ = 990651; $champ2 = 990751;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
   //require '../pub/pub_displayH_550.php' ;
                   
    echo " <h5><a name=\"2\"></a>Poule 2 Test</h5>"; 
    $champ = 990652; $champ2 = 990752;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd );  
    perequation($comite, $champ, $bdd);      
   
   
    /*
    <table width="376" border="1" bordercolor="#000000">
	  <tr>
        <td height="141"> <a href="carteFederale2.htm"  onclick="open('carteFederale2.htm', 'Popup', 'scrollbars=1,resizable=1,height=810,width=680'); return false;" ><img src="../images/federale2.gif" width="132" height="142" border="0"></a></td>
        <td height="141"><b><font face="Arial, Helvetica, sans-serif" size="4"> <a href="carteFederale2.htm"  onclick="open('carteFederale2.htm', 'Popup', 'scrollbars=1,resizable=1,height=810,width=680'); return false;" ><font color="#000000">Car</font><font color="#000000">tographie 
          des clubs de Fédérale 2<br>
          (Saison 2019-2020)</font></a></font></b></td>
         </tr>
     </table>
	*/ 

   echo " <h5><a name=\"3\"></a>Poule 3 Test</h5>";    
   $champ = 990653; $champ2 = 990753;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);      
          
    echo " <h5><a name=\"4\"></a>Poule 4 Test</h5>"; 
    $champ = 990654; $champ2 = 990754;
	affichage($champ, $champ2, $comite, $bdd);      
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
  // require '../pub/pub_displayH_550.php' ;
  // include("comPerso2.php"); 
		  
    echo " <h5><a name=\"5\"></a>Poule 5 Test</h5>";      
    $champ = 990655; $champ2 = 990755;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);       		   
 
    
    echo " <h5><a name=\"6\"></a>Poule 6 Test</h5>";       
    $champ = 990656; $champ2 = 990756;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
    echo " <h5><a name=\"7\"></a>Poule 7 Test</h5>";   
    $champ = 990657; $champ2 = 990757;
	affichage($champ, $champ2, $comite, $bdd); 
    journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
	
   echo " <h5><a name=\"8\"></a>Poule 8 Test</h5>"; 
   $champ = 990658; $champ2 = 990758;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd); 
    perequation($comite, $champ, $bdd);
	 
  //require '../pub/pub_displayH_550.php' ;	
		  
    echo "<hr />"." <hr />";?> 
  
<table align ="center"  width="500">
 <tr> 
   <td>
	<h4 class="bulleReglement">
	 <a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2023-2024</a>
	</h4>
	<h4 class="bulleReparGeo">
	 <a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed2.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')"><font color="#000000">R&eacutepartition g&eacuteographique des clubs de F&eacuted&eacuterale 2</font></a>
	</h4> 	 
   </td>
  </tr> 
 </table> 

  <br/>
 <?php      	   
	include 'sommaires.php';
	require 'liensDivers.php';
	//require '../pub/pub_displayCarre.php' ;
	?>     	
   </div>
  </td>
  <!-- Colonne de droite -->    
  <td class = "colonneDroiteGauche"><?php   include("../00droite.php"); ?></td>
  </tr>
    
  </table>
<?php include("piedDePage.php"); ?>
		<footer>
  
  </footer>
 </body>
</html>
