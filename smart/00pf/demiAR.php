<?php
require ("../../phasesFinales/fonctionListeEquipes.php"); 
require ("../../phasesFinales/fonctionScores.php"); 

?>


<head> 
<link rel="stylesheet" type="text/css" href="../pf/AA2.css"> 
<link type="text/css" rel="stylesheet" href="../10.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Championnat de France</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body bgcolor="#CCCCCC">
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" height="32"> 
       
      <div id="titre">Demi finale A/R</div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td bgcolor="#CCCCCC" width="394"> 
    </td>
    <td width="93" height="18"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b>Pts</b></font></div>
    </td>
    <td width="101" height="18"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b>GA</b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="21" width="394"> 
      <div id="coin4" > 
	   	<?php echo $clubA2001; ?>
	  </div>
    </td>
    <td width="93" height="21"> 
      <div id="quartspts" > 
        <?php echo $PTSA2001; ?>
      </div>
    </td>
    <td width="101" height="21"> 
      <div id="coin4" >
        <?php echo $A2001; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="394" height="19"> 
      	
      <div id="coin4" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="93" height="19"> 
      <div id="quartspts" > 
        <?php echo $PTSA2002; ?>
      </div>
    </td>
    <td width="101" height="19"> 
      <div id="coin4">
        <?php echo $A2002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td height="3" width="394">&nbsp;</td>
    <td width="93" height="3">&nbsp;</td>
    <td width="101" height="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="6" width="394"> 
      <div id="coin4" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="93" height="6"> 
      <div id="quartspts" > 
        <?php echo $PTSA2003; ?>
      </div>
    </td>
    <td width="101" height="6"> 
      <div id="coin4">
        <?php echo $A2003; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="394"> 
      <div id="coin4"> 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="93"> 
      <div id="quartspts" > 
        <?php echo $PTSA2004; ?>
      </div>
    </td>
    <td width="101"> 
      <div id="coin4" >
        <?php echo $A2004; ?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr>
    <td bgcolor="#FFFFFF" height="32"> 
      <div id="titre">
	  	Finale
	  </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%">&nbsp; </td>
    <td width="21%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php echo $clubA1001; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > 
		  <?php  echo $A1001;	?> 
	  </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php echo $clubA1002; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > 
	 	 <?php   echo $A1002;?> 
	  </div>
    </td>
  </tr>
</table>
<p align="center"> 
  <?php	require ("../../pub/pub25.php"); ?>
</p>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FF0000" height="32"> 
      <div id="titre">Champion 
        <?php echo $annee ; ?>
       </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr>
    <td height="14"> 
      <div align="center"> 
        <?php echo "<img src=\"$demiChampLogo\">"; ?>
      </div>
      </td>
  </tr>
  <tr> 
    <td height="26"> 
      <div id="coin5" > 
	   <div id="titre" > 
        <?php 	echo $champion;  ?>
         </div>
      </div>
      </td>
  </tr>
</table>
<p align="center"> 
  
  <?php	  	 include("../../pub/pub20.php"); ?>
  <br>
  <?php	include ("../bas2.php"); ?>
</p>
<p>&nbsp;</p>
</body>
</html>