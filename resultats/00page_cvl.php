<?php include("../saison.php");
$message = "Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 6me journ&eacute;e du 01 Novembre";
require '../connect/connexion2.php';
require '../Phpleague/phpce/consult/fonctions_matchs.php';
require '../Phpleague/phpce/lang/lang_fr.php';
include("fonctions.php");
$champLigue=13;
$sigleLigue="(CVL)";
$comite="phpce";
$CMT="CE";
$cmt="ce";
$comiteNom="du Centre";?>
  
 <!DOCTYPE html>
<html lang="fr">
<head> 
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpce/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
 <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats r&eacute;gionaux ligue Centre Val de Loire</title>
  <meta name="description"
 content=" Actualit&eacute;s des comp&eacute;titions r&eacute;gionales de la ligue Centre Val de Loire. (r&eacute;sultats, classements, stats, calendriers, palmar&egrave;s etc...) ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
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
     <?php include("../pub/pub_displayHorizontal.php"); ?>
   </td>
  </tr>
  
  <tr valign="middle">
    <td bgcolor="#006699" valign="top" width="225" height="1259"> 
      <p><?php include("../01gauche.php");?> </p>
    </td>
    <td align="center" border color="#000000" bgcolor="#ffffff" width="650" height="1259" valign="top">      
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class ="titre"> Ligue Centre Val de Loire </h2>
          <h2 class="commentaire">Le comit&eacute; territorial du Centre est devenu<br>
            la ligue Centre Val de Loire en 2018.</h2>
          
      <div align="center">
        <?php 
		   include("liensDivers.php");  
           include("sommaire.php");  
            
		    ?>
      </div>
      <hr>
      <hr>
          <br>
          <?php //require("comPerso.php"); ?>
         <div align="center">
          <h5><a name="H"></a>Honneur/ Promotion honneur</h5>
          </div><br>
          <?php $champ = 171; 
		  AffichageLogos($champ, $comite, false, $bdd);?>
          <br>
          <br>
      <table width="700" >
          <tr>
           <td height="29"> 
             <h3>Equipe I </h3>
				<?php  aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd);
				 ?>
			</td>
              <td height="29"> 
                <h3>Equipe II</h3>
				<?php 
				 $champ=271 ;  
				 aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd);
				 ?> </td>
          </tr>
      </table>
        <?php  journeesReporteesCovid($comite, 171, $bdd);  ?>
         <p class="ressource"> <?php echo $message;  ?></p>
		  
         <?php include("../pub/pub_displayHorizontal.php"); ?>
          <div align="center">
          <h5><a name="P"></a><a name="1"></a>1re/ 2me S&eacute;rie</h5>
          </div><br>
          <?php $champ = 191; AffichageLogos($champ, $comite, false, $bdd)?>
          <br>
          <br>
          <table width="700" >
            <tr> 
              <td height="29"> 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd);  ?>
              </td>
              <td height="29"> 
                <h3>Equipe II<br>
                  <font color="#FF0000"><font size="2">Cette comp&eacute;tition 
                  se joue &agrave; X</font></font></h3>
                <?php $champ=9191 ; 
                 aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
		          aff_journeeSupp($champ,  $bdd);
				?>
              </td>
            </tr>
          </table>
        <?php journeesReporteesCovid($comite, 191, $bdd);  ?>
         <p class="ressource"> <?php echo $message;  ?></p>
		  
         <div align="center">
          <h5><a name="2"></a> 3me S&eacute;rie</h5>
         </div> <br>
       <?php $champ = 211; 
			 AffichageLogos($champ, $comite, false, $bdd);
         	 aff_journee($champ, $bdd);
			 clmnt($champ, false, $bdd);
		     aff_journeeSupp($champ,  $bdd);
			 journeesReporteesCovid($comite, 211, $bdd);  ?>
          
		  <p class="ressource"> <?php echo $message;  ?></p>
     
      <?php include("../pub/pub_displayHorizontal.php"); ?>
     <br>
	 <div align="center">
          <h5><a name="3"></a><a name="4"></a> 4me S&eacute;rie</h5>
          </div><br>
          <?php 
		  $champ = 221; 
		  AffichageLogos($champ, $comite, false, $bdd);
		  aff_journee($champ, $bdd);
		  clmnt($champ, false, $bdd);
		  aff_journeeSupp($champ,  $bdd);
		  journeesReporteesCovid($comite, 221, $bdd);  ?>
         
		 <p class="ressource"> <?php echo $message;  ?></p> 
			<br>
   
      <hr>
      <hr>
          
      <div align="center">
        <?php
		    
           include("sommaire.php"); 
           include("liensDivers.php"); ?>
       </div>
         
      
	  <?php include("../pub/pub_displayCarre.php"); ?>
	  
  
      </td>
      <td align="center" bgcolor="#006699" height="1259" valign="top"
 width="225"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
	

</table>
<?php include("piedDePage.php"); ?>
  <footer> 
   <div id="9129-5">
    <script src="//ads.themoneytizer.com/s/gen.js?type=5"></script>
    <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5"></script>
   </div>
  </footer> 
 </body>
</html>
