<?php 
include("../saison.php");
require ("../connect/connexion6.php");
include("../resultats/fonctions2.php");
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$comite="phppro";
$CMT="FEM";
$cmt="fem";
$division = '280';
?> 
 <script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script> 
<!DOCTYPE html>   
<head>
<meta name="description"
content="Résulats de toutes les compétitions Professionnelles. Calendriers, résultats et statistiques de l'honneur à la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmarès territoriaux des differentes divisions du comité.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
// <link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
   <link type="text/css" rel="stylesheet" href="../ligne1.css">
<link type="text/css" rel="stylesheet" href="../../resultats/resultat.css"/>
<title>Championnat de France F&eacute;minin Elite</title>
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

</script>
<body>
<div align="center">
  <table width="1250" height="639">
    <tr  align="center" border color="#FFFFFF"> 
      <td colspan="3" height="157"><img src="../../images/stade3.jpg" width="1250" height="150"></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"><?php include("ligne_fem.php"); ?></td>
    </tr>
	<tr valign="middle" align="center" bgcolor="#000000">
	    <td width="225" height="1267" bgcolor="#996699" align="center" valign="top"><br><br><?php    include("01gauche_fem.php");  ?></td>
        <td bgcolor="#ffffff"  height="1267" valign="top" width="550"> 
        <div align="center"><br />
        <h1>Championnats de France F&eacute;minins Elites<h1>
        
         
          <?php 
		  require '../resultats/liensDivers.php';
		  require '../resultats/sommaires.php'; 
		  echo "<hr />"."<hr />";
		  ?>
		<h2 class ="titre"><a name="1"></a>Elite 1 </h2>
	 
	 <table align ="center"  width="500">
 <tr> 
   <td>
   
<h4 class="bulleReglement">

 <a href="javascript:ouvrirPopup('../resultats/reglements2022_2023.php?cmt=880280','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2022-2023</a>

 </h4> 

  <h4 class="bulleReparGeo">
  <a href="javascript:ouvrirPopup('../resultats/cartographie/carteFemElite1_2022_2023.html','sdfsdfsdfs','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">R&eacutepartition g&eacuteographique des clubs Elite 1</a>
 </h4>
  </td>
	</tr> 
 </table>  
 <?php 
		echo "<h5> Elite 1 - Poule 2</h5><br>"; 
		affichage(880281, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd); 
		  
          
		//include("../pub/pub_displayHorizontal.php");
		  
        echo "<h5> Elite 1 - Poule 2</h5><br>";
		affichage(880282, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  
		
		echo "<h5> R&eacuteserves Elite 1 </h5><br>";
		
		echo "<table width=\"750\">";
		echo "<tr>";
		echo "<td>";
		echo "Poule 1";
		echo "</td>";
		
		echo "<td>";
		echo "Poule 2";
		echo "</td>";
		// journeesReportees($comite, $champ, $bdd);  
		echo "</tr>";
		echo "<table>";
		
		
		
		 
		affichage(889281, 889282, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  
		
		
		 echo "<table width=\"400\">";
		echo "<tr>";
		echo "<td>";
		echo "Poule 3";
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		affichage(889283, 0, $comite, $bdd); 
		echo "</td>";
		// journeesReportees($comite, $champ, $bdd);  
		echo "</tr>";
		echo "<table>";
		
		  
	//	require '../resultats/cadrePubHorizontal600.php';?> 
		 
        
		<h2 class ="titre"><a name="2"></a>Elite 2 </h2>
		
 <table align ="center"  width="500">
 <tr> 
   <td>
<h4 class="bulleReglement">

 <a href="javascript:ouvrirPopup('../resultats/reglements2022_2023.php?cmt=880285','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2022-2023</a>

 </h4> 

  <h4 class="bulleReparGeo">
  <a href="javascript:ouvrirPopup('../resultats/cartographie/carteFemElite2_2022_2023.html','sdfsdfsdfs','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">R&eacutepartition g&eacuteographique des clubs Elite 2</a>
 </h4> 	 
  </td>
	</tr> 
 </table> 		
		
			 <?php 
		affichage(880285, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  

		echo "<hr />"."<hr />";
		require '../resultats/sommaires.php'; 
         require '../resultats/liensDivers.php';
          
          
              include("../pub/pub4.php");  
          include("../pub/pub_displayCarre.php");?>
        </div>
      </td>
      <td height="1267" bgcolor="#996699" width="225" valign="top"><p><?php include ("00droite_fem.php");  ?></p></td>
    </tr>
    <tr >
	<th bgcolor="#FFFFFF"  colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="1250" border="1" >
            <tr> 
              <td><?php include("resultatsbas_fem.php"); ?></td>
            </tr>
            <tr>
              <td><?php include("../pub/pub_displayHorizontal.php");?></td>
            </tr>
            <tr> 
              <td><?php include("../bas.php"); ?></td>
            </tr>
          </table> 
	  </div>
      </th>
    </tr>
   </table>
  </div>
 </body>
</html>
