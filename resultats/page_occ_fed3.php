<?php 
session_start ();
$message = "Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 6me journ&eacute;e du 01 Novembre";
//require '../connect/connexion2.php';
require '../connect/connexion6.php';
include("../saison.php");
include("fonctions.php");
require "constantes.php";
require '../Phpleague/phpab/consult/fonctions_matchs.php';
require '../Phpleague/phpab/lang/lang_fr.php';

$idLigue=20;
$champLigue = $idLigue;
$sigleLigue="(OCC)";
$comite="phpab";
$AB="AB";
$cmt="ab";
$CMT="AB";
$comiteNom="Occitanie";?>
  
</script>
<!DOCTYPE html>
<html lang="fr">
<head>
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpab/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
<title>Ligue <?php echo $comiteNom;?></title>
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
</head>


<body>

<table align="center" width="1250">
  
    <tr>
      <td colspan="3"> <font color="#FFFFFF">
        <?php    include("../images/page_image_al.php");  ?>
        </font></td>
    </tr>
    <tr>
      <td colspan="3">
       <?php  include("../01ligne.php"); ?>
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
      <td bgcolor="#006699" valign="top" width="225" height="1901"> 
        <p><?php include("../01gauche.php");?> </p>
      </td>
      <td bordercolor="#000000" bgcolor="#ffffff" width="650" height="1901" valign="top"> 
        <div align="center"><br>
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class="titre">Ligue Occitanie</h2>
          <h2 class="commentaire">La ligue Occitanie est n&eacute;e de la fusion des comit&eacute;s territoriaux<br>
            du Languedoc, de l'Armagnac Bigorre, du pays Catalan et du comit&eacute;<br>
            Midi Pyr&eacute;n&eacute;es en janvier 2018.</h2>
            <br>
		  <?php 
		  include("liensDivers.php");  
    include("sommaires.php");  

    echo "<hr />"." <hr />";
    //require("comPerso.php");
         
    echo "<h5> <a name=\"H\"></a>$FED3  - $P1</h5>";
	$champ = 200161; $champ2 = 200261;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php';
	   
	echo "<h5>$FED3  - $P2</h5><br> "; 
    $champ = 200162; $champ2 = 200262;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);   
    perequation($comite, $champ, $bdd);
	
    echo " <h5>$FED3  - $P3</h5><br>";
    $champ = 200163; $champ2 = 200263;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
    
       
	// require 'cadrePubHorizontal600.php';
	// include("comPerso2.php"); 
		
          
    echo "<h5>$FED3  - $P4</h5><br>";
    $champ = 200164; $champ2 = 200264;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	 echo "<h5>$FED3  - $P5</h5><br>";
    $champ = 200165; $champ2 = 200265;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	 echo "<h5>$FED3  - $P6</h5><br>";
    $champ = 200166; $champ2 = 200266;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	 echo "<h5>$FED3  - $P7</h5><br>";
    $champ = 200167; $champ2 = 200267;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
     
    echo "<hr />"." <hr />";
         
    include("sommaires.php");
    include("liensDivers.php");
		    
    require '../pub/pub_displayH_550.php';?>
        </div>
      </td>
      <td align="center" bgcolor="#006699" height="1901" valign="top"
 width="225"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
   
</table>
<?php include("piedDePage.php"); ?>
<footer>
</footer>
</body>
</html>
