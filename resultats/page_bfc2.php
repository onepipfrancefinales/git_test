<?php
session_start (); 
//$message = "<br /> Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 6me journ&eacute;e du 01 Novembre <br/>";
//require '../connect/connexion2.php';
require '../connect/connexion2.php';
require '../Phpleague/phpbg/consult/fonctions_matchs.php';
require '../Phpleague/phpbg/lang/lang_fr.php';
include("../saison.php");
include("fonctions.php");
//$champLigue=11;
//$sigleLigue="(BFC)";
$comite="phpbg";
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
  <title>Championnats Territoriaux comit&eacute; <?php echo $comiteNom;?></title>
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
</head>
<body>
<div align="center">
<table width="1250">
  <tbody>
    <tr>
      <td colspan="3"> <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150" width="1250"></td>
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
      <td bgcolor="#006699" valign="top" width="225" height="1222"> 
        <p><?php include("../01gauche.php");?> </p>
      </td>
      <td border color="#000000" bgcolor="#ffffff" width="650" height="1222" valign="top"> 
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
	
    echo " <h5>Honneur</h5>";
    $champ = 110171; $champ2 = 110271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	
	require '../pub/pub_displayH_550.php' ;
    http://127.0.0.1/Phpleague/phpbg/consult/classement.php?champ=181&comite=phpbg
	echo "<h5><a name=\"P\"></a>Promotion Honneur</h5><br>";
    $champ = 181; $champ2 = 9181;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
         
    echo "<h5> <a name=\"1\"><a name=\"2\"></a><a name=\"3\"></a><a name=\"4\"></a>1re /2me/ 3me/ 4me S&eacute;rie<br>
    <font color=\"#FF0000\" size=\"4\">- Poule 1 -</font></h5>";
    $champ = 110191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
     
    //require '../pub/pub_displayHorizontal.php';
   
    echo "<h5> <a name=\"1\"></a><a name=\"2\"></a><a name=\"3\"></a><a name=\"4\"></a>1re /2me/ 3me/ 4me S&eacute;rie<br>
    <font color=\"#FF0000\" size=\"4\">- Poule 2 -</font></h5>";
    $champ = 110192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
    
	echo "<h5> <a name=\"1\"><a name=\"2\"></a><a name=\"3\"></a><a name=\"4\"></a>1re /2me/ 3me/ 4me S&eacute;rie<br>
    <font color=\"#FF0000\" size=\"4\">- Poule 3 -</font></h5>";
    $champ = 110193; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
    
	
	echo "<h5> <a name=\"1\"><a name=\"2\"></a><a name=\"3\"></a><a name=\"4\"></a>1re /2me/ 3me/ 4me S&eacute;rie<br>
    <font color=\"#FF0000\" size=\"4\">- Poule 4 -</font></h5>";
    $champ = 110194; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	
	echo "<hr />"." <hr />";
    
	include("sommaires.php"); 
    include("liensDivers.php");
         
	require '../pub/pub_displayH_550.php' ;
	?>
            <br>
            <br>
          </p>
        </div>
      </td>
      <td align="center" bgcolor="#006699" height="1222" valign="top"
 width="225"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
    <tr>
      <th colspan="3" bgcolor="#ffffff" height="77" valign="top">
      <div align="center">
      <?php include("piedDePage.php"); ?>
      </div>
      </th>
    </tr>
  </tbody>
</table>

</div>

  <footer> 
   
  </footer>
 </body>
</html>
