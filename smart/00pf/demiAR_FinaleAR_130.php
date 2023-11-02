<?php
require ("../../phasesFinales/fonctionListeEquipes.php"); 
require ("../../phasesFinales/fonctionScores.php"); 

?>


<head> 
<link rel="stylesheet" type="text/css" href="../pf/AA2.css"> 
<link type="text/css" rel="stylesheet" href="../10.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
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


<table width="100%" border="1">
  <tr> 
    <td bgcolor="#006699" colspan="2"> 
      <div id = "titre-haut">France Finales Rugby</div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" colspan="2" height="30"> 
      <div id="titre"> Champ de France<br>
		 <?php echo $nomDivision; ?>
      </div>
    </td>
  </tr>
</table>
<div align="center"> 
  <?php
	include("liensdiv.php"); ?>
  <br>
</div>
<div align="right"></div>
<p align="center"> 
  <?php	include("../../pub/pub20.php"); ?>
</p>
<p><font face="Arial, Helvetica, sans-serif"><b>Champion de France Poule Elite<br>
  Acc&egrave;s en Pro D2</b></font></p>
<p><b><font face="Arial, Helvetica, sans-serif" size="5" color="#FF0000">Provence 
  Rugby (PR)</font></b></p>
<p>&nbsp;</p>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" height="32"> 
       
      <div id="titre">Demi finale d'accession (A/R)</div>
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
      <div id="titre"> Finale d'accession (A/R)</div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2">&nbsp; </td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="67%"> 
      <div id="coin5" > 
        <?php echo $clubA1001; ?>
      </div>
    </td>
    <td width="16%"> 
      <div id="coin5" ><font color="#FF0000">
        <?php  echo $PTSA1001;	?>
        </font></div>
    </td>
    <td width="17%"> 
      <div id="coin5" > 
        <?php  echo $A1001;	?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="67%"> 
      <div id="coin5" > 
        <?php echo $clubA1002; ?>
      </div>
    </td>
    <td width="16%" bgcolor="#CCCCCC"> 
      <div id="coin5" ><font color="#FF0000">
        <?php  echo $PTSA1002;	?>
        </font></div>
    </td>
    <td width="17%"> 
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
      <div id="titre">Accession &agrave; la Pro D2 </div>
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