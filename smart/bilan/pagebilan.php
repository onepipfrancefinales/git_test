<?php

$champion = $_GET['id_equipe'];
$equipe=$_GET['id_equipe'];
$id_equipe=$_GET['id_equipe'];
$comite=$_GET['comite'];
$phpComite="php".$comite;
$equipeComite= substr($equipe,-5);
//$comite=substr($phpComite, 3);
$champ = $_GET['champ'];

require ("../../saison.php"); 
require ('fonctions.php');
require ('../../resultats/fonctions.php');
require "../../Phpleague/".$comite."/consult/fonctions_matchs.php";
require "../../Phpleague/".$comite."/lang/lang_fr.php";
//connection à la base de données
require ("../../connect/connexion1.php");
affichage5Saisons($finSaison, $equipeComite,$champ,$phpComite, $bdd);

	require ("../../connect/connexion6.php");
traitementDesScores($equipe, $comite, $bdd);
meilleureAttaque ($comite, $champ, $bdd);
meilleureDefense ($comite, $champ, $bdd);

?>

<html>
<head>
 <title><?php echo $equipe; ?></title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link type="text/css" rel="stylesheet" href="../ligne1.css" >
 <link rel="stylesheet" type="text/css" href="../menu_smart2.css"> 
 <link type="text/css" rel="stylesheet" href="../resultats/bilan/bilan.css">
 <link type="text/css" rel="stylesheet" href="../../Phpleague/<?php echo $comite; ?>/league.css"/>
 <link type="text/css" rel="stylesheet" href="../10.css"> 
 <link type="text/css" rel="stylesheet" href="paramTiroir.css">
 <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body text="#000000" bgcolor="#CCCCCC" align="center">
 <div class="fixed-header">
  <div class="container">
   <table width="100%" border="1" align="center">
    <tr> 
      <td width= "5%"class="h22"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	  <td width= "95%"class="h22"> France Finales Rugby </td>
    </tr>
    <tr> 
      <td colspan="2" class="h12"><?php // echo $nom; ?> </td>
    </tr>
   </table>
  </div>
 </div>
 <div class="container">
  <br /> <br /> <br />
  <?php require 'bilan.php';?>
  <br>
  <?php require '../bas2.php';
  include("../../pub/pub_displayCarre.php");?>
 </div>
</body>
</html>
