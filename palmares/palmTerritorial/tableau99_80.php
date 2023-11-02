
<?php
//$sigle=$_GET['variable_1'];
?>
<html>
<head>

<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="palmaresTerr.css"/>
<title> Champions territoriaux 

<?php echo $sigle; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>



<body bgcolor="#000000">
<p><font size="5"><b> 
  <?php
//require ("../../connect1/connection1.php") ; 
//require '../fonctionsPalmares.php';
//nomComite($sigle, $bdd);
//nomLigue($sigleLigueC, $bdd);									
									?>
  </b></font> 
  <?php
 
//if (isset($rang)) $rang = $rang; else $rang ="rang inconnu"; 
//if (isset($comite)) $comite = $comite; else $comite ="comite inconnu"; 
 
 

 //$comite =strtolower($sigle);

 ?>
</p>
<p align="center"><b><font color="#FFFFFF" size="5" face="Arial, Helvetica, sans-serif">Saisons 
  1999 - 1980</font></b></p>
<p>&nbsp;</p>
<table width="75%" border="0" align="center">
  <tr> 
    <th height="20" width="34"></th>
    <th height="20" width="200">honneur</th>
    <th height="20" width="200">promotion <br>
      honneur</th>
    <th height="20" width="200">1re s&eacute;rie</th>
    <th height="20" width="200">2me s&eacute;rie</th>
    <th height="20" width="200">3me s&eacute;rie</th>
    <th height="20" width="200">4me s&eacute;rie</th>
  </tr>
  <tr> 
    <td width="34"> 
      <div class="equipes"> 
        <?php 
		$debut = 1999; 
		$fin = 1979;
	$rang =170;
	saison($rang, $comite,$bdd, $debut, $fin);?>
      </div>
    </td>
    <td width="200"> 
      <div class="equipes"> 
        <?php 
	$rang =170;
	palmares($comite, $rang, $bdd, $debut, $fin);?>
      </div>
    </td>
    <td width="220"> 
      <div class="equipes"> 
        <?php 
	$rang =180;
	palmares($comite, $rang, $bdd, $debut, $fin);?>
      </div>
    </td>
    <td width="200"> 
      <div class="equipes"> 
        <?php 
	$rang =190;
	palmares($comite, $rang, $bdd, $debut, $fin);?>
      </div>
    </td>
    <td width="200"> 
      <div class="equipes"> 
        <?php 
	$rang =200;
	palmares($comite, $rang, $bdd, $debut, $fin);?>
      </div>
    </td>
    <td width="200"> 
      <div class="equipes"> 
        <?php $rang =210;
	palmares($comite, $rang, $bdd, $debut, $fin);?>
      </div>
    </td>
    <td width="200"> 
      <div class="equipes"> 
        <?php 
	$rang =220;
	palmares($comite, $rang, $bdd, $debut, $fin);?>
      </div>
    </td>
  </tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr valign="middle"> 
    <td colspan="8" height="42"> </td>
  </tr>
  <tr bgcolor="#FFFFFF" valign="middle"> 
    <td colspan="8" height="53" bgcolor="#FFFFFF"> 
      <div align="center"><font color="#000000"><b> 
        <?php   include("../../pub/pub1.php"); ?>
        </b></font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="8" height="42" valign="top">&nbsp;</td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<div align="left"></div>

</body>
</html>
