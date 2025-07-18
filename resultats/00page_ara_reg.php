<?php
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");
require 'constantes.php';
require '../Phpleague/phpau/consult/fonctions_matchs.php';
require '../Phpleague/phpau/lang/lang_fr.php';
$comite="phpau";
$CMT="AU";
$cmt="au";
$cmt2="ara";
$comiteNom="du lyonnais";
$champLigue=10;
$sigleLigue="(ARA)";
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
<meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpau/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats Régionaux de la ligue Auvergne Rh&ocirc;ne ALpes</title>
  <meta name="description"
 content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
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
      <td colspan="3"><div><?php include("../01ligne.php"); ?> </div></td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle"><td colspan="3" height="26"> 
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
      <td bgcolor="#006699" valign="top" width="225" height="1609"><p><?php include("../01gauche.php");?> </p></td>
      <td bgcolor="#ffffff" width="650" height="1609" valign="top"> 
        <div align="center"> <br>
          <h1>Compétitions Régionales</h1>
          <h2 class ="titre">Ligue Auvergne Rh&ocirc;ne Alpes</h2>
          <h2 class ="commentaire">La ligue Auvergne Rh&ocirc;ne Alpes est née de la fusion des comités territoriaux<br>
            de l'Auvergne, du Lyonnais, des Alpes et du comité<br>
            Dr&ocirc;me Ardèche en janvier 2018.</font></h2>
 <?php 
	include("liensDivers.php"); 
    include("sommaires.php");  
          
    echo "<hr />"." <hr />";
    //require("comPerso.php"); 
         
    echo "<h5><a name=\"P\"></a>".$FED3.' - '.$P1."<br></h5>";
	$champ = 100162; $champ2 = 100262;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php';   
 
    echo "<h5>".$FED3.' - '.$P2."<br></h5>";
    $champ = 100162; $champ2 = 100262;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);   
    perequation($comite, $champ, $bdd);
	
    echo "<h5>".$FED3.' - '.$P3."<br></h5>";
	$champ = 100163; $champ2 = 100263;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);	
	
	require '../pub/pub_displayH_550.php';   
         
  echo "<h5>".$FED3.' - '.$P4."<br></h5>";
	$champ = 100164; $champ2 = 100264;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	echo "<h5>".$FED3." - ".$P5."<br>"."</h5>";	
	$champ = 100165; $champ2 = 100265;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	
    echo "<h5>".$FED3.' - '.$P6."<br></h5>";
	$champ = 100166; $champ2 = 100266;
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
    <td align="center" bgcolor="#006699" height="1609" valign="top" width="225"><p><?php include("../00droite.php"); ?> </p></td>
  </tr>  
</table>

<?php include("piedDePage.php"); ?>

	<footer>
    
	</footer>
</body>
</html>
