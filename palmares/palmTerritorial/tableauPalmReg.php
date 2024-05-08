
<?php
require '../../saison.php';
if (isset($_GET['idLigue'])) $idLigue = $_GET['idLigue']; else $idLigue=0;
if (isset($_GET['sigleLigue'])) $sigleLigue = $_GET['sigleLigue']; else $sigleLigue=0;
require ("../../connect/connexion1.php") ; 
require '../fonctionsPalmares.php';
$sigleLigue = substr ($sigleLigue,-4,3);
nomLigue($idLigue, $sigleLigue, $bdd);
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/palmares/palmTerritorial/tableauPalmReg.php?sigleLigue=<?php echo $ $sigleLigue;?>" />
<meta charset="utf-8" />
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="palmaresTerr.css"/>
<title> Champions R&eacute;gionauxx <?php echo $nomLigue; ?></title>
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
<font size="5"><b> 
</b></font> 
<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr> 
    <td colspan="7" height="105" valign="top"><div align="center"><?php  include("../../images/page_image_al.php"); ?></div></td>
  </tr>
  <tr> 
    <td colspan="7" height="32" valign="top"><?php  include("../../01ligne.php");  ?></td>
  </tr>
  <tr bgcolor="#FFFFFF"><td colspan="7" height="12" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="7" height="11" valign="top"><font size="4">Champions territoriaux (par comit&eacute; ) avant 2019 :</font>	
	<?php 
	if ($sigleLigue == "ARA")
		require 'comitesARA.php';
	elseif ($sigleLigue == "OCC")
		require 'comitesOCC.php';
	elseif ($sigleLigue == "NAQ")
		require 'comitesNAQ.php';
	
	else 
		require 'comitesAutres.php';
	?>
	</td>
  </tr>
  <tr> 
    <td width="83" height="96"><div align="left"><?php {print("<img src=\"../../images/ligues/$sigleLigue.jpg\" border=\"0\" target=_top>");}?></div> </td>
    <td colspan="3" height="128" valign="middle"><p align="center"><font size="7" color="#FFFFFF">Champions R&eacute;gionaux<br>de la <strong>ligue<br><?php echo $nomLigue;?></strong></font></p></td>
    <td colspan="2" height="96" width="78"><div align="right"><?php	{print("<img src=\"../../images/ligues/$sigleLigue.jpg\" border=\"0\" target=_top>");}?></div></td>
  </tr>
  <tr> 
    <td colspan="7" height="32" valign="top"></td>
  </tr>
</table>
    
<?php 
if (isset($rang)) ; else $rang ="rang inconnu"; 
if (isset($comite)) ; else $comite ="comite inconnu"; 
$comite ="(".$sigleLigue.")";
// echo $comite;
 ?>
 
 <table width="75%" border="0" align="center">
 <tr>
  <td colspan="4"> Equipes premières</td>
  <td></td>
  <td colspan="2"> Equipes réserves</td>
 </tr>
 <tr> 
    <th width="34" ></th>
    <th width="200">R&eacute;gionale 1</th>
    <th width="200">R&eacute;gionale 2</th>
    <th width="200">R&eacute;gionale 3</th>
    <th class="noir" width="200"></th>
    <th width="200">R&eacute;s R&eacute;g 1</th>
    <th width="200">R&eacute;s R&eacute;g 2</th>
  </tr>
  
  <tr>    
    <td class="equipes"><?php $rang =170; saisonLigues($rang, $comite,$bdd, true);?></td>	
    <td class="equipes"><?php $rang =170; palmaresLigues($comite, $rang, $bdd,true);?></td>	
    <td class="equipes"><?php $rang =180; palmaresLigues($comite, $rang, $bdd, true);?></td>	
    <td class="equipes"><?php $rang =190; palmaresLigues($comite, $rang, $bdd, true);?></td>	
    <td class="equipes"><?php // $rang =200; palmaresLigues($comite, $rang, $bdd, true);?></td>	
    <td class="equipes"><?php $rang =270; palmaresLigues2($comite, $rang, $bdd, true);?></td>	
    <td class="equipes"><?php $rang =9180;	palmaresLigues2($comite, $rang, $bdd, true);?></td>
  <tr>
  <td colspan="6">
    <br/>
<p align="left">Saison 2022-2023 : Réforme des divisions régionales</p><td>
 </tr>
  </table>
  

 <br/>  <br/>   
 <p align="center"><b><font size="6" color="#FFFFFF">Equipes premières</font></b></p>
<table width="75%" border="0" align="center">
  <tr> 
    <th height="20" width="34" ></th>
    <th  width="200">Honneur</th>
    <th  width="200">Promotion<br>honneur</th>
    <th  width="200">1re s&eacute;rie</th>
    <th  width="200">2me s&eacute;rie</th>
    <th  width="200">3me s&eacute;rie</th>
    <th  width="200">4me s&eacute;rie</th>
  </tr>	
  <tr>    
    <td class="equipes"><?php $rang =170; saisonLigues($rang, $comite,$bdd, false);?></td>	
    <td class="equipes"><?php $rang =170; palmaresLigues($comite, $rang, $bdd, false);?></td>	
    <td class="equipes"><?php $rang =180; palmaresLigues($comite, $rang, $bdd, false);?></td>	
    <td class="equipes"><?php $rang =190; palmaresLigues($comite, $rang, $bdd, false);?></td>	
    <td class="equipes"><?php $rang =200; palmaresLigues($comite, $rang, $bdd, false);?></td>	
    <td class="equipes"><?php $rang =210; palmaresLigues($comite, $rang, $bdd, false);?></td>	
    <td class="equipes"><?php $rang =220;	palmaresLigues($comite, $rang, $bdd, false);?></td>
  </tr>
</table>

<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr valign="middle"> 
    <td colspan="8" height="42"></td>
  </tr>
  <tr bgcolor="#FFFFFF" valign="middle"> 
    <td colspan="8" height="53"><b><?php //include("../../pub/pub1.php"); ?></td>
  </tr>
  <tr> 
    <td colspan="8" height="42" valign="top"><hr/></td>
  </tr>
</table>
<p align="center"><b><font size="6" color="#FFFFFF">Equipes r&eacute;serves</font></b></p>


<table width="75%" border="0" align="center">
  <tr> 
    <th height="20" width="49">	</th>
    <th width="250">Honneur</th>
    <th width="250">Promotion honneur</th>
    <th width="250">1re s&eacute;rie</th>
    <th width="250">2me s&eacute;rie</th>
  </tr>
  <tr> 
    <td class="equipes"><?php $rang =270;saisonLigues2($rang, $comite, $bdd, false);?></td>
    <td class="equipes"><?php $rang =270;	palmaresLigues2($comite, $rang, $bdd, false);?></td>
    <td class="equipes"><?php $rang =9180; palmaresLigues2($comite, $rang, $bdd, false);?></td>
    <td class="equipes"><?php $rang =9190; palmaresLigues2($comite, $rang, $bdd, false);?></td>
    <td class="equipes"><?php $rang =9200; palmaresLigues2($comite, $rang, $bdd, false);?></td>
  </tr>
</table>
<p></p>
<p></p>
<p></p>

<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr> 
    <td colspan="8" height="42" valign="top"> 
      <table width="100%" border="1" >
        <tr> 
          <td bgcolor="#FFFFFF"><font color="#000000"><?php include("../../comitebas.php");  ?></font></td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"><?php //include("../../pub/pub1.php"); ?></td>
        </tr>
		<tr> 
          <td bgcolor="#FFFFFF"><?php include("../../bas.php"); ?></td>
        </tr>
      </table>
		</td>
      </tr>
   	</table>
  </body>
</html>
