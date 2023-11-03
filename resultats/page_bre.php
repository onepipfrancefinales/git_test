<?php
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';
include("fonctions.php");
require "constantes.php";
$champLigue=12;
//$sigleLigue="(BRE)";
$comite="phppl";
$CMT="BR";
$cmt="br";
$comiteNom="Bretagne";
?>
  
  <!DOCTYPE html>
<html lang="fr">
<head>
 <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css"/>
 <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
 <link type="text/css" rel="stylesheet" href="resultat.css">
 <link type="text/css" rel="stylesheet" href="../ligne1.css">
 <title> <?php echo $champReg;?> Bretagne</title>
 <meta name="description" content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
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
   <td colspan="3"><?php include("../01ligne.php"); ?></td>
  </tr>
  <tr bgcolor="#ffffff" >
   <td colspan="3" height="26"><?php include("../pub/pub_displayHorizontal.php");?></td>
  </tr>
  <tr >
   <!-- Colonne de gauche --> 
   <td class="colonneDroiteGauche"><p><?php include("../01gauche.php");?> </p></td>
  
	<!-- Colonne centrale --> 
  <td class="colonneCentrale"> 
     <div align="center"> <br>
       <h1>Comp&eacute;titions R&eacute;gionales</h1>
       <h2 class="titre">Ligue de Bretagne</h2> 
	   <h2 class="commentaire"> Le comit&eacute; territorial de Bretagne est devenu<br>
             la ligue de Bretagne en 2018. </h2>
	   <br>

<?php 
	include("liensDivers.php");
    include("sommaires.php");
     
    echo "<hr />"." <hr />";
         	
	//require '../pub/pub_displayH_550.php' ;
    
	echo "<h5><a name=\"R1\"></a>$REG1</h5>";  
    $champ = 120171; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
		
	echo "<h5><a name=\"R2\"></a> $REG2  - $P1</h5> "; 
    $champ = 120181; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
    perequation($comite, $champ, $bdd);
	
	echo "<h5><a name=\"R2\"></a> $REG2 - $P2</h5> "; 
     $champ = 120182; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
    perequation($comite, $champ, $bdd);
	
    //include("comPerso2.php"); 
          
    echo "<h5><a name=\"R3\"></a> $REG3 - $P1<br></h5>";     
	$champ = 120191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	
	 echo "<h5><a name=\"R3\"></a> $REG3 - $P2<br></h5>";     
	$champ = 120192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	
	// include("comPerso2.php");	
	//require '../pub/pub_displayHorizontal.php';
	   
    echo "<hr />"." <hr />";

    include("sommaires.php"); 
    include("liensDivers.php");  
		  
    require '../pub/pub_displayH_550.php' ;?>
          
        </div>
      </td>
	  	  
  <!-- Colonne de droite --> 
      <td class="colonneDroiteGauche"><p><?php include("../00droite.php"); ?> </p></td>
    </tr> 
		
<?php include("piedDePage.php"); ?>
  <footer> 
   
  </footer>
 </body>
</html>
