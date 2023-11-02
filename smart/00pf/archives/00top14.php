<?php

?><head>
  
<link rel="stylesheet" type="text/css" href="AA2.css">  
<link type="text/css" rel="stylesheet" href="../10.css">
<link type="text/css" rel="stylesheet" href="../11.css">
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



<?php $annee=$_GET['annee'];?>
<?php $annee2=$annee.''."_2";?>    


 

 


<link rel="stylesheet" href="1.css" type="text/css">
<body bgcolor="#CCCCCC">
<table width="100%" border="1">
  <tr> 
    <td bgcolor="#006699" colspan="2"> 
      <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#FFFFFF">France 
        Finales Rugby</font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" colspan="2" height="68"> 
      <div align="center"> 
        <p><b><font face="Arial, Helvetica, sans-serif" size="5">Champ de France<br>
          </font><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b><font size="5"> 
          TOP 14</font></b></font></b></font></b></p>
      </div>
    </td>
  </tr>
</table>
<div align="center"> 
  <?php	include("liensdiv.php"); ?>
  <br>
</div>
<div align="right"></div>
<p align="center"> 
  <?php
  
    
	include("../../pub/pub20.php"); ?>
</p>
<table width="90%" border="1" align="center" bordercolor="#000000" height="11">
  <tr> 
    <td bgcolor="#FFFFFF" height="51"> 
      <div align="center"><font color="#000000"><b><font color="#E4EFFF"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
<?php // ----8me-----Quarts----Demi------Finale-------
$query = "SELECT id,
					 A4001, A4002, A4003, A4004, A2001, A2002, A2003, A2004, A1001, A1002 FROM bdpf$annee2 WHERE id=110 "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
		
	$A4001 = $row[1];
	$A4002 = $row[2];
	$A4003 = $row[3];
	$A4004 = $row[4];
	
	
	$A2001 = $row[5];
	$A2002 = $row[6];
	$A2003 = $row[7];
	$A2004 = $row[8];
	
	$A1001 = $row[9];
	$A1002 = $row[10];
	
	
	}
 
?>
        </font><font size="5" face="Arial, Helvetica, sans-serif">Barrages</font></b></font></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="21"> 
      <div id="coin4" > <font color="#000000"><b><font color="#E4EFFF">
        <?php //E01

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E03 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E03 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA4001= $row[1];
	$sigle1 = $row[2];
	}

?>
        </font></b></font><font color="#E4EFFF"> </font> 
        <?php
		echo $clubA4001 ;echo " "; echo $sigle1;
 
 ?>
      </div>
    </td>
    <td width="25%" height="21"> 
      <div id="coin4" > 19</div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4" > <font color="#000000"><b><font color="#E4EFFF"> </font><font color="#000000"><b><font color="#E4EFFF">
        <?php //E02

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E06 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E06 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA4002= $row[1];
	$sigle2 = $row[2];
	}

?>
        </font></b></font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA4002;echo " "; echo $sigle2;

 ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4"> 19</div>
    </td>
  </tr>
  <tr> 
    <td height="25">&nbsp;</td>
    <td width="25%" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td height="18"> 
      <div id="coin4" > <font color="#000000"><b><font color="#E4EFFF"> 
        <?php //E03

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E04 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E04 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA4003= $row[1];
	$sigle3 = $row[2];
	}

?>
        </font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA4003;echo " "; echo $sigle3;
 
 ?>
      </div>
    </td>
    <td width="25%" height="18"> 
      <div id="coin4"> 11</div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4"> <font color="#000000"><b><font color="#E4EFFF">
        <?php //E04

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E05 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E05 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA4004= $row[1];
	$sigle4 = $row[2];
	}

?>
        </font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA4004;echo " "; echo $sigle4;
 
 ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4" > 23</div>
    </td>
  </tr>
</table>
<p align="center"> 
  <?php
  
    
	include("../../pub/pub20.php"); ?>
</p>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" height="32"> 
      <div align="center"><font color="#000000"><b><font size="5" face="Arial, Helvetica, sans-serif">Demi 
        finale</font></b></font></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="21"> 
      <div id="coin4" > <font color="#000000"><b><font color="#E4EFFF"> 
        <?php //E01

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E01 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E01 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA2001= $row[1];
	$sigle1 = $row[2];
	}

?>
        </font></b></font><font color="#E4EFFF"> </font> 
        <?php
		echo $clubA2001 ; echo " "; echo $sigle1;
 
 ?>
      </div>
    </td>
    <td width="25%" height="21"> 
      <div id="coin4" >40 </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4" ><font color="#000000"><b><font color="#000000"><b><font color="#E4EFFF"> 
        <?php //E02

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E06 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E06 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA4002= $row[1];
	$sigle2 = $row[2];
	}

?>
        </font></b></font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA4002;echo " "; echo $sigle2;

 ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4">14 </div>
    </td>
  </tr>
  <tr> 
    <td height="25">&nbsp;</td>
    <td width="25%" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td height="18"> 
      <div id="coin4" > <font color="#000000"><b><font color="#000000"><b><font color="#E4EFFF"> 
        <?php //E02

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E02 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E02 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA2003= $row[1];
	$sigle3 = $row[2];
	}

?>
        </font></b></font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA2003; echo " "; echo $sigle3;

 ?>
      </div>
    </td>
    <td width="25%" height="18"> 
      <div id="coin4"> 14</div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4"><font color="#000000"><b><font color="#E4EFFF"> </font></b></font><font color="#000000"><b><font color="#E4EFFF"> 
        <?php //E04

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E05 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E05 and bdpf$annee.id=110 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA4004= $row[1];
	$sigle4 = $row[2];
	}

?>
        </font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA4004;echo " "; echo $sigle4;
 
 ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4" >19</div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><font size="4"><b></b></font></td>
    <td> 
    
  </tr>
</table>
<p align="center"> 
  <?php
  
    
	include("../../pub/pub20.php"); ?>
</p>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr>
    <td bgcolor="#FFFFFF" height="32"> 
      <div align="center"><font color="#000000"><b><font size="5" face="Arial, Helvetica, sans-serif">Finale</font></b></font></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%">&nbsp;</td>
    <td width="21%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > <font color="#000000"><b><font color="#E4EFFF"> </font></b></font><font color="#E4EFFF"> 
        </font> 
        <?php
		echo $clubA2001 ; echo " "; echo $sigle1;
 
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > -</div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php
		echo $clubA4004 ; echo " "; echo $sigle4;
 
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > -</div>
    </td>
  </tr>
</table>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	  	 include("../../pub/pub20.php"); ?>
  <br>
  <?php	require "../bas2.php"; ?>
  </b></font></p>
<p>&nbsp;</p>
