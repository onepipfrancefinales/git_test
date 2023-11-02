<?php 
$idLigue=$_GET['idLigue'];
require ("../../connect/connexion1.php") ; 
require '../../consultation/fonctions.php';
rechercheInfosLigues($idLigue, $bdd);
 ?>


<html>
<head>
<meta name="description"
content="Le site non officiel du Comité Midi Pyrénées de rugby : Histoire, clubs, calendrier des matches, compétitions, résultats, la Coupe du Monde à Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">

<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="../lienNoir.css"/>
<link type="text/css" rel="stylesheet" href="palmares.css"/> 
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Tous les Champions de FRANCE</title>

</head>
<body bgcolor="#000000" link="#FFFFFF" text="#FFFFFF">
<div align="center">
<table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="1000" border="2" bordercolor="#000000">
          <tr> 
            <td> 
              <div align="center"><img src="../../images/stade3.jpg" width="1250" height="150"></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="24" colspan="3">
	  	<font color="#FFFFFF"> 
        <?php    include("../../01ligne.php");    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="222" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center">
          <p align="center"> 
            <?php  include("../../01gauche.php");  ?>
          </p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="579"> 
        <div align="center">
          <p><font color="#000000"> 
			 <?php  include("palmParLigue.php");?>
            </font></p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="219" valign="top"> 
        <p> 
          <?php include("../../00droite.php"); ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
          <table width="1250" border="1" bordercolor="#006699">
            <tr> 
              <td width="1250">
                  <?php  include("../../bas.php");  ?>
              </td>
            </tr>
          </table>
          <?php include("../../comitebas.php");  ?>
      </th>
    </tr>
  </table>
 </div>
 </body>
</html>
