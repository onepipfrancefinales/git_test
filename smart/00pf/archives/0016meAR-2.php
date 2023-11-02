<?php

require ("../../phasesFinales/fonctionListeEquipes.php");
require ("../../phasesFinales/fonctionScores.php");

?>
<head>

<link rel="stylesheet" type="text/css" href="AA2.css"> 
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
<table width="100%" border="1">
  <tr> 
    <td bgcolor="#006699" colspan="2"> 
      <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#FFFFFF">France 
        Finales Rugby</font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" colspan="2" height="90"> 
      <div id="titre">Champ de France<br>
     <?php echo  $nomDivision; ?>
        <br>
        16me de finale </div>
    </td>
  </tr>
</table>
<div align="center"> 
  <?php	include("texte_defilant.htm"); ?>
  <br>
  <?php	include("liensdiv.php"); ?>
  <br>
  <?php	include("../../pub/pub20.php"); ?>
</div>
<div align="center"><br>
</div>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="15"> 
      <div id="coin4" >
        <?php	 echo $clubA1601; ?>
      </div>
    </td>
    <td width="21%" height="15"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php 	echo $PTSA1601; ?>
        </font><font size="2">( 
        <?php	echo $A1601; ?>
        )</font> 
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1602; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1602; ?>
        </font><font size="2">( 
        <?php	echo $A1602; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5" > 
        <?php	 echo $clubA1603; ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1603; ?>
        </font><font size="2">( 
        <?php	echo $A1603; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php	 echo $clubA1604; ?>
        <font color="#E4EFFF"> </font></div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1604; ?>
        </font><font size="2">( 
        <?php	echo $A1604; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
        <?php	 echo $clubA1605; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1605; ?>
        </font><font size="2">( 
        <?php	echo $A1605; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1606; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> <font color="#FF0000" size="3"> 
        </font></font><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1606; ?>
        </font><font size="2">( 
        <?php	echo $A1606; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="11"> 
      <div id="coin5"> 
        <?php	 echo $clubA1607; ?>
      </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1607; ?>
        </font><font size="2">( 
        <?php	echo $A1607; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php	 echo $clubA1608; ?>
        <font color="#E4EFFF"> </font></div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1608; ?>
        </font><font size="2">( 
        <?php	echo $A1608; ?>
        )</font></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td height="39" width="78%"> 
      <?php if ($champ == 160)
	  {
	  ?>
      <div align="left"><font size="4"><b><font face="Arial, Helvetica, sans-serif"><a href="32meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">&lt;&lt;<font face="Arial, Helvetica, sans-serif" size="3"> 
          32me</font></font></a></font></b></font></div>
	  <?php
		}
		else
		{
		echo "";
		}
		?>
    </td>
    <td height="39" width="22%"> 
      <h1 align="right"><b><font size="3"><font face="Arial, Helvetica, sans-serif"><a href="8meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">8me 
        &gt;&gt;</font></a></font></font></b></h1>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="9"> 
      <div id="coin4" >
        <?php	 echo $clubA1609; ?>
      </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1609; ?>
        </font><font size="2">( 
        <?php	echo $A1609; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1610; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1610; ?>
        </font><font size="2">( 
        <?php	echo $A1610; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin5">
        <?php	 echo $clubA1611; ?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1611; ?>
        </font><font size="2">( 
        <?php	echo $A1611; ?>
        )</font> </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#E4EFFF"> </font>
        <?php	 echo $clubA1612; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"> <font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1618; ?>
        </font><font size="2">( 
        <?php	echo $A1618; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1613; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4"> <font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1613; ?>
        </font><font size="2">( 
        <?php	echo $A1613; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4"><font color="#9FC6FF"> </font>
        <?php	 echo $clubA1614; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1614; ?>
        </font><font size="2">( 
        <?php	echo $A1614; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php	 echo $clubA1615; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1615; ?>
        </font><font size="2">( 
        <?php	echo $A1615; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php	 echo $clubA1616; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"> <font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1616; ?>
        </font><font size="2">( 
        <?php	echo $A1616; ?>
        )</font></div>
    </td>
  </tr>
</table>
<div align="center"><br>
  <?php	include("../../pub/pub20.php"); ?>
  <br>
  <br>
</div>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1617; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1617; ?>
        </font><font size="2">( 
        <?php	echo $A1617; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1618; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1618; ?>
        </font><font size="2">( 
        <?php	echo $A1618; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5">
        <?php	 echo $clubA1619; ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1619; ?>
        </font><font size="2">( 
        <?php	echo $A1619; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5">
        <?php	 echo $clubA1620; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1620; ?>
        </font><font size="2">( 
        <?php	echo $A1620; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4">
        <?php	 echo $clubA1621; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1621; ?>
        </font><font size="2">( 
        <?php	echo $A1621; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4"  >
        <?php	 echo $clubA1622; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1622; ?>
        </font><font size="2">( 
        <?php	echo $A1622; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="11"> 
      <div id="coin5" >
        <?php	 echo $clubA1623; ?>
      </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1623; ?>
        </font><font size="2">( 
        <?php	echo $A1623; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php	 echo $clubA1624; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1624; ?>
        </font><font size="2">( 
        <?php	echo $A1624; ?>
        )</font></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="78%"> 
      <div align="center">
        <?php if ($champ == 160)
	  {
	  ?>
        <div align="left"><font size="4"><b><font face="Arial, Helvetica, sans-serif"><a href="32meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">&lt;&lt;<font face="Arial, Helvetica, sans-serif" size="3"> 
          32me</font></font></a></font></b></font></div>
        <?php
		}
		else
		{
		echo "";
		}
		?>
      </div>
      </td>
    <td width="22%"> 
      <h1 align="right"><b><font size="3"><font size="3"><font face="Arial, Helvetica, sans-serif"><a href="8meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">8me</font><font color="#FF0000" size="4"> 
        &gt;&gt;</font></a><a href="8meAR.php?champ=<?php echo$champ ?>"></a></font></font></font></b></h1>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin4" > 
        <?php	 echo $clubA1625; ?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1625; ?>
        </font><font size="2">( 
        <?php	echo $A1625; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1626; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1626; ?>
        </font><font size="2">( 
        <?php	echo $A1626; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php	 echo $clubA1627; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1627; ?>
        </font><font size="2">( 
        <?php	echo $A1627; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php	 echo $clubA1628; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1628; ?>
        </font><font size="2">( 
        <?php	echo $A1628; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php	 echo $clubA1629; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1629; ?>
        </font><font size="2">( 
        <?php	echo $A1629; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="22"> 
      <div id="coin4" >
        <?php	 echo $clubA1630; ?>
      </div>
    </td>
    <td width="21%" height="22"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1630; ?>
        </font><font size="2">( 
        <?php	echo $A1630; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#9FC6FF"> </font> 
        <?php	 echo $clubA1631; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1631; ?>
        </font><font size="2">( 
        <?php	echo $A1631; ?>
        )</font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php	 echo $clubA1632; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php 	echo $PTSA1632; ?>
        </font><font size="2">( 
        <?php	echo $A1632; ?>
        )</font></div>
    </td>
  </tr>
</table>
<p align="center"> 
  <?php	include("../../pub/pub20.php"); ?>
</p>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../bas2.php"; ?>
  </b></font></p>
<p>&nbsp;</p>
