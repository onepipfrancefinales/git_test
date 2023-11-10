<?php
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
require '../Phpleague/phpidf/consult/fonctions_matchs.php';
require '../Phpleague/phpidf/lang/lang_fr.php';
include("fonctions.php");
require "constantes.php";
$champLigue=17;
$sigleLigue="(IDF)";
$comite="phpidf";
$CMT="IDF";
$cmt="idf";
$comiteNom="Ile de France";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_idf.php/" />
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpidf/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg;?> Ile de France</title>
  
  <meta name="google-adsense-account" content="ca-pub-9177538664500260">
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
<table class="table">
    <tr>
      <td colspan="3"> <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?> </td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" ><?php include("../pub/pub_displayHorizontal.php");?></td>
    </tr>
    <tr >
      <!-- Colonne de gauche --> 
	  <td bgcolor="#006699" valign="top" width="225" height="1913"> <p><?php include("../01gauche.php");?></p></td>
      
	  <!-- Colonne centrale --> 
	  <td bgcolor="#ffffff" height="1913" valign="top"> 
        <div align="center"><br>
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class="titre"> Ligue Ile de France</h2>
          <h2 class="commentaire">
			Le comit&eacute; territorial Ile de France est devenu<br>
            la ligue Ile de France en 2018.
          </h2>
		 
<?php
	include("liensDivers.php");  
    include("sommaires.php"); 
         
	echo "<hr />"." <hr />";
	  
	//require("comPerso.php"); 
	/*
	echo "	<a name=\"H\"></a>  </a> <h5>$FED3 - $P1</h5>";
    $champ = 170161; $champ2 = 170261;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	
	echo "	<a name=\"H\"></a>  </a> <h5>$FED3 - $P2</h5>";
    $champ = 170162; $champ2 = 170262;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	
	
	echo "	<a name=\"H\"></a>  </a> <h5>$FED3 - $P3</h5>";
    $champ = 170163; $champ2 = 170263;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	*/
	
	   
	echo "	<a name=\"R1\"></a><h5>$REG1 - $P1<br/>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
    $champ = 170171; $champ2 = 170271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);

	require '../pub/pub_displayH_550.php';
     
    echo "<h5> $REG1 - $P2<br/>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
	$champ = 170172; $champ2 = 170272;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
    perequation($comite, $champ, $bdd);
	
	echo "<a name=\"R2\"></a><h5>$REG2 - $P1 <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 1re/ 2me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 170181; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
    echo "<h5>$REG2 - $P2 <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 1re/ 2me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 170182; $champ2 =0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	echo "<h5>$REG2 - $P3 <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 1re/ 2me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 170183; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
    require '../pub/pub_displayH_550.php';
	
	echo "<a name=\"R3\"></a><h5>$REG3 - $P1 <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 3me/ 4me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 170191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
    echo "<h5>$REG3 - $P2 <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 3me/ 4me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 170192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	echo "<h5>$REG3 - $P3 <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 3me/ 4me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 170193; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	echo "<h5>$REG3 - $PF <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex 3me/ 4me s&eacute;rie) 
            </font> <br><br></h5>";	
    $champ = 170194; $champ2 = 0;
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
      <td align="center" bgcolor="#006699" height="1913" valign="top" width="225"> 
        <p><?php include("../00droite.php"); ?> </p>
    </td>
  </tr>
  
   </table>
   <?php include("piedDePage.php"); ?>
   <footer>
     
	</footer>
  </body>
</html>
 