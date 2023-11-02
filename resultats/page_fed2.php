<!DOCTYPE html>
<html lang="fr">
<?php 
session_start ();
require '../connect/connexion6.php';
include("fonctions.php");
include("../saison.php");
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$division = 150;
$comite="phppro"; 
$CMT="fed2"; 
$cmt="fed2";
$comiteNom="F&eacute;d&eacute;rale 2 - F&eacute;d&eacute;rale B";
?> 


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
 <link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css"/>
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
          <h1>CHAMPIONNAT DE FRANCE</h1>
          <h2 class="titre">F&eacute;d&eacute;rale 2 - F&eacute;d&eacute;rale B</h2>
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
          
   echo " <h5><a name=\"1\"></a>Poule 1 </h5>"; 
    $champ = 990151; $champ2 = 990251;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
   //require '../pub/pub_displayH_550.php' ;
                   
    echo " <h5><a name=\"2\"></a>Poule 2 </h5>"; 
    $champ = 990152; $champ2 = 990252;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd );  
    perequation($comite, $champ, $bdd);      
   
   
    /*
    <table width="376" border="1" bordercolor="#000000">
	  <tr>
        <td height="141"> <a href="carteFederale2.htm"  onclick="open('carteFederale2.htm', 'Popup', 'scrollbars=1,resizable=1,height=810,width=680'); return false;" ><img src="../images/federale2.gif" width="132" height="142" border="0"></a></td>
        <td height="141"><b><font face="Arial, Helvetica, sans-serif" size="4"> <a href="carteFederale2.htm"  onclick="open('carteFederale2.htm', 'Popup', 'scrollbars=1,resizable=1,height=810,width=680'); return false;" ><font color="#000000">Car</font><font color="#000000">tographie 
          des clubs de F&eacute;d&eacute;rale 2<br>
          (Saison 2019-2020)</font></a></font></b></td>
         </tr>
     </table>
	*/ 

   echo " <h5><a name=\"3\"></a>Poule 3 </h5>";    
   $champ = 990153; $champ2 = 990253;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);      
          
    echo " <h5><a name=\"4\"></a>Poule 4 </h5>"; 
    $champ = 990154; $champ2 = 990254;
	affichage($champ, $champ2, $comite, $bdd);      
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
  // require '../pub/pub_displayH_550.php' ;
  // include("comPerso2.php"); 
		  
    echo " <h5><a name=\"5\"></a>Poule 5 </h5>";      
    $champ = 990155; $champ2 = 990255;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);       		   
 
    
    echo " <h5><a name=\"6\"></a>Poule 6 </h5>";       
    $champ = 990156; $champ2 = 990256;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
    echo " <h5><a name=\"7\"></a>Poule 7 </h5>";   
    $champ = 990157; $champ2 = 990257;
	affichage($champ, $champ2, $comite, $bdd); 
    journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
	
   echo " <h5><a name=\"8\"></a>Poule 8 </h5>"; 
   $champ = 990158; $champ2 = 990258;
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
