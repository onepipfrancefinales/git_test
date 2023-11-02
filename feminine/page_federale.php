<?php 
include("../saison.php");
require '../connect/connexion6.php';
include("../resultats/fonctions2.php");
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$comite="phppro"; 
$CMT="FEM";
$cmt="fem"; 
?>

  
<html>
<head>
<meta name="description"
content="Résultats du championnnant de France de Fédérale 2 et en Fédérale B :  Calendriers, résultats et statistiques des équipes évoluant en Fédérale 2 et Fédérale B. Egalement disponible les toutes les  phases finales du championnat de France Fédérale 2 (depuis  2003), ainsi que les palmarès complets de ces 2 catègories.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
   <link type="text/css" rel="stylesheet" href="../ligne1.css">
<link type="text/css" rel="stylesheet" href="../../resultats/resultat.css"/>
<title>Championnat de France F&eacute;d&eacute;rale F&eacute;minines </title>
<body text="#000000" link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF" bgcolor="#000000">
<div align="center">
  <table width="1250" height="639" align="center">
    <tr valign="middle" align="center" > 
      <td colspan="3" height="74"> <font color="#FFFFFF"> <img src="../images/stade3.jpg" width="1250" height="150"></font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"><?php include("ligne_fem.php");?></font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="1326" bgcolor="#996699" align="center" valign="top"><?php include("01gauche_fem.php");   ?></p></td>
      <td bgcolor="#ffffff" text="#000000" height="1326" valign="top" width="550"> 
      <div align="center"><br />
        <h1>Championnats de France F&eacute;minin<h1>
        <h2 class ="titre">F&eacute;d&eacute;rale 1</h2>
          <?php 
		
		require '../resultats/liensDivers.php';
		require '../resultats/sommaires.php'; 
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
<h4 class="bulleReglement">
 <a href="javascript:ouvrirPopup('../resultats/reglements2022_2023.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2022-2023</a>

 </h4> 

  <h4 class="bulleReparGeo">
  <a href="javascript:ouvrirPopup('../resultats/cartographie/carteFemFed1_2022_2023.html','sdfsdfsdfs','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">R&eacutepartition g&eacuteographique des clubs de F&eacuted&eacuterale 1</a>
 </h4> 	 
     </td>
	</tr> 
 </table> 
  <?php  
		
		
		
		echo "<br />"."<hr />"."<hr />";
          
		echo "<h5> - Poule 1- </h5><br>";
		affichage(880291, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  
		  
        echo " <br>"."<br>";
         
		echo "<h5> - Poule 2- </h5><br>";
		affichage(880292, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd); 
		
		include("../pub/pub4.php"); 
        
		echo "<h5> - Poule 3- </h5><br>";
		affichage(880293, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  
		 

		echo "<h5> - Poule 4- </h5><br>";
		affichage(880294, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd); 
       
        echo "<hr />"."<hr />";
		require '../resultats/sommaires.php'; 
        require '../resultats/liensDivers.php';
          
        include("../pub/pub_carre.php"); ?>
      </div>
	  </td>
      <td height="1326" bgcolor="#996699" width="225" valign="top"><p><?php include("00droite_fem.php");  ?></p></td>
    </tr>
    <tr >
	
	<th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"align="center"> 
       <div align="center">    
		  <table width="1250" border="1" >
            <tr> 
              <td><?php include("resultatsbas_fem.php");?></td>
            </tr>
            <tr>
              <td><?php include("../pub/pub1.php");?></td>
            </tr>
            <tr> 
              <td><?php    include("../bas.php");?></td>
            </tr>
          </table>
    </div>
      </th>
    </tr>
   </table>
  </div>
 </body>
</html>
