<!DOCTYPE html> 
<?php
require ("../../connect/connexion1.php") ; 
require '../fonctionsPalmares.php';
//if (isset($id)) $id = $id; else $id=0;
if (isset($_GET['paramIdComite'])) $id=$_GET['paramIdComite']; else $id=0;

$sigle=0;
nomComite($sigle, $id ,$bdd);

$idLigue = 0;
$sigleLigue = substr($appartenanceLigue,-4,3);

$comite = $sigleComite;
nomLigue($idLigue, $sigleLigue, $bdd)

?>

<head>
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="palmaresTerr.css"/>
<title> Champions territoriaux 
<?php echo $sigle; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<script language="JavaScript">

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>

<body bgcolor="#000000">
<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr> 
    <td colspan="7" height="105" valign="top"><div align="center"><?php  include("../../images/page_image_al.php");   ?>
      </div></td>
  </tr>
  <tr> 
    <td colspan="7" height="32" valign="top"><?php  include("../../01ligne.php");  ?></td>
  </tr>
  <tr> 
    <td colspan="7" height="12" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="7" height="11" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td width="153" height="96" valign="top"><div align="center"><font size="5"><b><?php	{print("<img src=\"/images/comites/$sigleComite.jpg\" border=\"0\" target=_top>");}?></b></font></div></td>
    <td colspan="3" height="128" valign="middle"><p align="center"><font size="7" color="#FFFFFF">Champions territoriaux du</font></p>
												 <p align="center"><font size="7"><b><strong> <?php echo "Comit&eacute;".' '.$nomComite; ?></b></strong> </font> 
    </td>
    <td colspan="2" height="96" valign="top" width="138" align="center"><?php {print("<img src=\"/images/comites/$sigleComite.jpg\" border=\"0\" target=_top>");} ?></td>
  </tr>
  <tr> 
    <td colspan="7" height="32" valign="top"></td>
  </tr>
</table>


    
<?php
 
if (isset($rang)) ; else $rang ="rang inconnu"; 
if (isset($comite)) ; else $comite ="comite inconnu"; 
 
 

 //$comite =strtolower($sigle);

 ?>
<table width="75%" border="0" align="center">
  <tr bgcolor="#FFFFFF"> 
    <td height="20" colspan="7"><font color="#000000" face="Arial, Helvetica, sans-serif" size="4"><b>Depuis 
      la saison 2018-2019, Le <strong> 
      <?php echo "Comit&eacute;".' '.$nomComite; ?>
      </strong> 
      <?php 
	  if ($id==15 or $id==24 or $id==16 or $id==17 or $id==11 or $id==23 or $id==25 or $id==30 or $id==31 or $id==21 or $id==34)
	  echo "est devenu la ligue" ;
	  else
	  echo "a int&eacute;gr&eacute; la ligue";
	 $debut = 2018;$fin = 1999;
	 ?>
      <strong> 
      <?php 
	  
	  if (isset($nomLigueL)) ; else $nomLigueL="-";
	  echo $nomLigue; ?>
      <font size="3">(</font></strong></b></font><font face="Arial, Helvetica, sans-serif" size="4"><b><strong><font size="3"><a href="tableauPalmReg.php?sigleLigue=<?php echo $appartenanceLigue;?>"><font color="#FF0000">voir 
      palmar&egrave;s de cette ligue</font></a></font></strong></b></font><b><font color="#000000" face="Arial, Helvetica, sans-serif">)</font></b><strong> 
      </strong></td>
  </tr>
  <tr> 
    <th height="20" width="34"></th>
    <th height="20" width="200">honneur</th>
    <th height="20" width="200">promotion <br>honneur</th>
    <th height="20" width="200">1re s&eacute;rie</th>
    <th height="20" width="200">2me s&eacute;rie</th>
    <th height="20" width="200">3me s&eacute;rie</th>
    <th height="20" width="200">4me s&eacute;rie</th>
  </tr>
  <tr> 
    <td width="34" class="equipes"> <?php  saison(170, $comite,$bdd, $debut, $fin);?></td>
    <td width="200" class="equipes"> <?php palmares($comite, 170, $bdd, $debut, $fin);?></td>
    <td width="220" class="equipes"> <?php palmares($comite, 180, $bdd, $debut, $fin);?></td>
    <td width="200" class="equipes"> <?php palmares($comite, 190, $bdd, $debut, $fin);?></td>
    <td width="200" class="equipes"> <?php palmares($comite, 200, $bdd, $debut, $fin);?></td>
    <td width="200" class="equipes"> <?php palmares($comite, 210, $bdd, $debut, $fin);?></td>
    <td width="200" class="equipes"> <?php palmares($comite, 220, $bdd, $debut, $fin);?></td>
  </tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr valign="middle"> 
    <td colspan="8" height="42">
      <div align="right"><font color="#FFFFFF"><a href="tableauPalmTerr2.php?paramIdComite=<?php echo $id;?>">consulter 
        les palmar&egrave;s des saisons 1999 -1980</a></font></div></td>
  </tr>
  <tr bgcolor="#FFFFFF" valign="middle"> 
    <td colspan="8" height="53" bgcolor="#FFFFFF"><div align="center"><font color="#000000"><b> <?php //  include("../../pub/pub1.php"); ?></b></font></div></td>
  </tr>
  <tr> 
    <td colspan="8" height="42" valign="top">&nbsp;</td>
  </tr>
</table>
<?php //require 'tableauPalmTerr2.php';?>
<p align="center"><b><font size="6" color="#FFFFFF">Equipes r&eacute;serves</font></b></p>
<p align="center">&nbsp;</p>
<table width="1072" border="0" align="center" height="73">
  <tr> 
    <td height="20" width="83">&nbsp;</td>
    <th height="20" width="262">honneur</th>
    <th height="20" width="336">promotion <br>honneur</th>
    <th height="20" width="270">1re s&eacute;rie</th>
    <th height="20" width="227">2me s&eacute;rie</th>
  </tr>
  <tr> 
    <td width="83" height="20" class="equipes"><?php saison2(270, $comite, $bdd);?></td>
    <td width="262" height="20" class="equipes"><?php palmares2($comite, 270, $bdd);?></td>
    <td width="336" height="20" class="equipes"><?php palmares2($comite, 9180, $bdd);?></td>
    <td width="270" height="20" class="equipes"><?php palmares2($comite, 9190, $bdd);?></td>
    <td width="227" height="20" class="equipes"><?php palmares2($comite, 9200, $bdd);?></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr> 
    <td colspan="8" height="42" valign="top"> 
      <table width="100%" border="1" bordercolor="#FFFFFF">
        <tr> 
          <td bgcolor="#FFFFFF"> 
            <div align="center"><font color="#000000"> 
              <?php  include("../../comitebas.php");  ?>
              </font></div>
          </td>
        </tr>
        <tr> 
          <td height="21" bgcolor="#FFFFFF"> 
            <div align="center"><font color="#000000"> 
              <?php   // include("../../pub/1.php");    ?>
              </font></div>
          </td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"> 
            <div align="center"><font color="#FFFFFF"> 
              <?php    include("../../bas.php");   ?>
              </font></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div align="left"></div>

</body>
</html>
