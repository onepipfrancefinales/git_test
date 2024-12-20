
<?php 
if (isset($_GET['pays'])) $pays  = $_GET['pays'];
?>

 


<!DOCTYPE html PUBLIC>    
<html lang="fr">
<head>
<head><link rel= "canonical" href= "https://francefinalesrugby.fr/dossiers/lexique/hymnes.php/" />
<meta charset="utf-8" />
<meta name="description"
content="Tout sur le comit� territorial <?php echo $titre;?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
<meta name="keywords"
content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Dictionnaire du rugby    </title>
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="../../lienNoir.css"/>
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
<link type="text/css" rel="stylesheet" href="../dossiers.css">

</head>

<body text="#000000" link="#000000" alink="#000000" vlink="#000000" bgcolor="#000000">
<div align="center">
  <table width="1100" height="150">
    <tr valign="top" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="60"><font color="#FFFFFF">
        <?php
    // On inclut le haut de la page
    include("../../images/page_image_al.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"> 
        <?php
    // On inclut le haut de la page
    include("../../01ligne.php");
    ?>
      
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="125" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php
    // On inclut le haut de la page
    include("../../01gauche.php");
    ?>
          </p>
        </div>
      </td>
      <td bgcolor="#ffffff" text="#000000" link="#000000" vlink="#000000" alink="#000000" height="148" valign="top" width="650" align="left"> 
        <div align="center"> 
          <p align="center"><font color="#000000"> </font><font color="#000000"><br>
            <b> </b></font></p>
          <p><font size="7"><b><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="6"><br>
            Lecture et écoute des <br>
            chants et hymnes du rugby</font></b></font><br>
            <br>
			<hr/>
          <?php  include("somHymnes.php");
	echo "<hr/>";
	if ($pays == "ita")
 	require 'hymnes/italie.php';
	
	elseif ($pays == "fra")
 	require 'hymnes/france.php';
 elseif ($pays == "eco")
 	require 'hymnes/ecosse.php';
   elseif ($pays == "irl")
 	require 'hymnes/irlande.php';
elseif ($pays == "ang")
 	require 'hymnes/angleterre.php';
elseif ($pays == "pga")
 	require 'hymnes/paysDeGalles.php';

elseif ($pays == "nze")
 	require 'hymnes/nouvelleZelande.php';
	elseif ($pays == "asu")
 	require 'hymnes/afriqueDuSud.php';
	elseif ($pays == "aus")
 	require 'hymnes/australie.php';
	elseif ($pays == "arg")
 	require 'hymnes/argentine.php';
	
   ?>
        </div>
      </td>
      <td height="325" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("../../00droite.php");
    ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="1100" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("../../comitebas.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php include("../../pub/pub_displayHorizontal.php");?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("../../bas.php");
    ?>
                  </font></div>
              </td>
            </tr>
          </table>
          
        </div>
      </th>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>

</body>

</html>
