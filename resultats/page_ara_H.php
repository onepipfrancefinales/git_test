<?php
session_start (); 
require '../connect/connexion6.php';
require '../Phpleague/phpau/consult/fonctions_matchs.php';
require '../Phpleague/phpau/lang/lang_fr.php';
include("../saison.php");
include("fonctions.php");
$champLigue=10;
$sigleLigue="(ARA)";
$comite="phpau";
$CMT="AU";
$cmt="au";
$cmt2="ara";
$comiteNom="du lyonnais";
$forum = 7;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel= "canonical" href= "https://www.francefinalesrugby.resultats/page_ara_reg1.php " />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpau/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats R&eacute;gionaux de la ligue Auvergne Rh&ocirc;ne Alpes</title>
  <meta name="description"
 content=" R&eacute;sulats des comp&eacute;titions r&eacute;gionales de la ligue Auvergne Rhone Alpes. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
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
    <table width="1250" align="center">
      <tr>
        <td colspan="3"> 
	     <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150" width="1250">
	    </td>
      </tr>
      <tr>
        <td colspan="3">
          <?php include("../01ligne.php"); ?> 
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
	  
	  <!-- colonne de gauche -->
      <td bgcolor="#006699" valign="top" width="225" > 
        <?php include("../01gauche.php");?>
      </td>
	  
      <td border color="#000000" bgcolor="#ffffff" width="650"  valign="top"> 
        
	<!---------------
	<table>
	   <tr >
		<td class="forum"> nex</td>
		<td class="forum"><a href="http://francefinalesrugby.franceserv.com/forum/viewforum.php?f=<?php echo $forum; ?>"  target="_blank"><font color ="#FFFFFF"><b>Forum dédié à l'actualités et aux <br/> différentes compétitons de la ligue </b></font></a></td>
	   </tr>
	</table>
	-------------> 
		
		
		
		<div align="center"> <br>
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class ="titre">Ligue Auvergne Rh&ocirc;ne Alpes</h2>
          <h2 class ="commentaire">La ligue Auvergne Rh&ocirc;ne Alpes est n&eacute;e de la fusion des comit&eacute;s territoriaux<br>
            de l'Auvergne, du Lyonnais, des Alpes et du comit&eacute;<br>
            Dr&ocirc;me Ard&egrave;che en janvier 2018.</h2>
          <br>
  <?php 
    include("liensDivers.php");  
    include("sommaires.php");  

	echo "<hr />"." <hr />";
?>	
<br/>
	
 
	  <?php
    //require("comPerso.php");
         
    echo "<h5> <a name=\"H\"></a>Pr&eacute; f&eacute;d&eacute;rale - Poule 1<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur)</font></h5>";
	$champ = 100171; $champ2 = 100271;
	affichage($champ, $champ2, $comite, $bdd); 
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
    require '../pub/pub_displayH_550.php';  
	   
	echo "<h5>Pr&eacute; f&eacute;d&eacute;rale - Poule 2<br> 
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur)</font></h5>";
    $champ = 100172; $champ2 = 100272;
	affichage($champ, $champ2, $comite, $bdd); 
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
    echo " <h5>Pr&eacute; f&eacute;d&eacute;rale - Poule 3<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur)</font></h5>";
    $champ = 100173; $champ2 = 100273;
	affichage($champ, $champ2, $comite, $bdd); 
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
    
       
	require '../pub/pub_displayH_550.php';  
	// include("comPerso2.php"); 
		
          
    echo "<h5>Pr&eacute; f&eacute;d&eacute;rale - Poule 4<br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur)</font></h5>";
    $champ = 100174; $champ2 = 100274;
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
	  <!--colonne de droite -->
      <td align="center" bgcolor="#006699" valign="top" width="225"> 
        <?php include("../00droite.php"); ?> 
      </td>
    </tr>
  </table>
<?php include("piedDePage.php"); ?>
    <footer>
     <div id="9129-5">
	  <script src="//ads.themoneytizer.com/s/gen.js?type=5">  </script>
      <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5"> </script>
	 </div> 
	</footer>
  </body>
</html>
