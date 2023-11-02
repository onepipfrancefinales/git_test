<?php 
$message = "Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 4me journ&eacute;e du 01 Novembre";
require '../connect/connexion2.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';
include("../saison.php");
include("fonctions.php");
$champLigue=21;
$sigleLigue="(PDL)";

$comite="phppl";
$CMT="PL";
$cmt="pl";
$comiteNom="Pays de Loire";?>
 
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
</head>
<body>
<table width="1250" align="center">
  <tbody>
    <tr>
      <td colspan="3"> <img
 src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150"
 width="1250"></td>
    </tr>
    <tr>
      <td colspan="3">
      <div><?php include("../01ligne.php"); ?> </div>
      </td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" height="26">
       <?php include("../pub/pub_displayHorizontal.php");?>
      </td>
    </tr>
    <tr valign="middle">
      <td bgcolor="#006699" height="1192" valign="top" width="225"> 
        <p><?php include("../01gauche.php");?> </p>
      </td>
      <td border color="#000000" bgcolor="#ffffff" height="1192"
 width="650" valign="top"> 
        <div align="center"><br>
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class="titre">Ligue Pays de la Loire</h2>
          <h2 class="commentaire">Le comit&eacute; territorial Pays de la Loire est devenu<br>
            la ligue Pays de la Loire en 2018.</h2>
			<br>
          
		 
            <?php 
			include("liensDivers.php");  
             include("sommaire.php");  
              ?>
         
      <hr>
      <hr><?php //require("comPerso.php"); ?> 
     
      <h5><a name="P"></a><a name="H"></a>Honneur/ Promotion honneur</h5>
          <?php $champ = 171; AffichageLogos($champ, $comite, false, $bdd)?>
        
      <table width="700" >
        <tbody>
          <tr>
            <td>
            	<h3>Equipe I </h3>
				<?php aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd); ?>
 
			</td>
            <td>
            	<h3>Equipe II</h3>
				<?php $champ=271 ; 
				aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd); ?>
			 </td>
          </tr>
        </tbody>
      </table>
           <?php  journeesReporteesCovid($comite, 171, $bdd);  
           echo "<p class=\"ressource\">".$message."</p>";  
             include("../pub/pub_displayHorizontal.php");?>
         
          <h5><a name="1"></a><a name="2"></a>1re/ 2me S&eacute;rie</h5>
          
		  <?php 
		  	 AffichageLogos($champ, $comite, false, $bdd);
             $champ=191 ; 
			 aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd);
			   journeesReporteesCovid($comite, 191, $bdd);  
           echo "<p class=\"ressource\">".$message."</p>"; 
			
			
			  include("../pub/pub_displayHorizontal.php");?> 
			
          <h5><a name="1"></a><a name="2"></a>3me / 4me S&eacute;rie
          </h5>
          <?php $champ = 211; AffichageLogos($champ, $comite, false, $bdd);?>
         
                <?php $champ=211 ; aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd); ?>
          
       <?php  journeesReporteesCovid($comite, 211, $bdd);  
          echo "<p class=\"ressource\">".$message."</p>"; ?> 
          
          <hr>
      <hr>
      <?php 
			  
			include("sommaire.php");  
			include("liensDivers.php");  ?>
          
       <?php include("../pub/pub_displayCarre.php");?>
      <br>
      </div>
      </td>
      <td align="center" bgcolor="#006699" height="1192" valign="top"
 width="225"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
    
</table>
<?php include("piedDePage.php"); ?>
<footer> 
<div id="9129-5">
<script src="//ads.themoneytizer.com/s/gen.js?type=5">
			</script>
<script
 src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5">
			</script></div></footer>
</body>
</html>
