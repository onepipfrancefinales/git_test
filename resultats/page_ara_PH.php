<?php
session_start ();
include("../saison.php");
require '../connect/connexion6.php';
include("fonctions.php");
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

<!DOCTYPE html>
<html lang="fr">
<head>
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpau/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats R&eacute;gionaux de la ligue Auvergne Rh&ocirc;ne ALpes</title>
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
          <h1>Comp&eacute;titions R&eacute;gionales</h1>
          <h2 class ="titre">Ligue Auvergne Rh&ocirc;ne Alpes</h2>
          <h2 class ="commentaire">La ligue Auvergne Rh&ocirc;ne Alpes est n&eacute;e de la fusion des comit&eacute;s territoriaux<br>
            de l'Auvergne, du Lyonnais, des Alpes et du comit&eacute;<br>
            Dr&ocirc;me Ard&egrave;che en janvier 2018.</font></h2>
 <?php 
	include("liensDivers.php"); 
    include("sommaires.php");  
          
    echo "<hr />"." <hr />";
    //require("comPerso.php"); 
         
    echo "<h5><a name=\"P\"></a>R&eacute;gionale 1 - Poule 1<br>
	 <font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex promotion honneur) 
            </font><br><br></h5>";
	$champ = 100181; $champ2 = 109181;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php';   
	 
    echo "<h5>R&eacute;gionale 1 - Poule 2<br>
	 <font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex promotion honneur) 
            </font><br><br></h5>";
    $champ = 100182; $champ2 = 109182;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);   
    perequation($comite, $champ, $bdd);
	
	echo "<h5>R&eacute;gionale 1 - Poule 3<br>
	 <font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex promotion honneur) 
            </font><br><br></h5>";
	$champ = 100183; $champ2 = 109183;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);	
	
	require '../pub/pub_displayH_550.php';   
         
    echo "<h5>R&eacute;gionale 1 - Poule 4<br>
 <font size=\"2\" face=\"Arial, Helvetica, sans-serif\">(Ex promotion honneur) 
            </font><br><br></h5>";	
	$champ = 100184; $champ2 = 109184;
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
