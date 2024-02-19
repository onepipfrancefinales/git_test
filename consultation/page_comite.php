<?php
$sigle = $_GET['variable_1'];

require ("../saison.php") ;   
require 'fonctions.php';

require '../fonctions.php';
require '../connect/connexion1.php';
nomComite ($sigle,0, $bdd);
rechercheInfosComites($sigle, $bdd);
nomLigueParSigleLigue($sigleLigue ,$bdd);
?>


<!DOCTYPE html PUBLIC >
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/consultation/page_comite.php/" />
<meta charset="utf-8" />
<meta name="description"
	content="Tout sur le comité territorial <?php echo $nomComite;?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
	<meta name="keywords"
	content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<link type="text/css" rel="stylesheet" href="../ligne1.css"/>
	<link type="text/css" rel="stylesheet" href="lienNoir.css"/>
	<link type="text/css" rel="stylesheet" href="../formulaireDG.css">
	
	<title>Comit&eacute; <?php echo $nomComite;?>   </title>
</head>

<body >
  <table width="1250" align="center" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
	  <td colspan="3" height="74"> <?php    include("../images/page_image_al.php");  ?> </td>
    </tr>
    <tr > 
      <td  colspan="3"><?php    include("../01ligne.php");?></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" align="center" height="505" bgcolor="#006699" align="center" valign="top"><?php include("../01gauche.php");  ?></td>
      <td bgcolor="#ffffff"  align="center" color="#000000" height="505" valign="top" width="800"><?php include("comite.php");    ?></td>
      <td height="505" bgcolor="#006699" width="225" valign="top"><?php   include("../00droite.php");  ?></td>
 </tr>
</table>
<?php include("../resultats/piedDePage.php"); ?>
    <footer>
	<!--
     <div id="9129-5">
	  <script src="//ads.themoneytizer.com/s/gen.js?type=5">  </script>
      <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5"> </script>
	 </div> 
	 -->
	</footer>
  </body>
</html>
