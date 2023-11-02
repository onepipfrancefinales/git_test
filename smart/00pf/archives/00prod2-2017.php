<?php
$champ = $_GET['champ']; 
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
<?php


//$clubA2001= ' -';
//$clubA2002= ' -';

//$clubA2003= ' -';
//$clubA2004= ' -';

//$clubA1001= ' -';
//$clubA1002= ' -';


?>

 

 
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
          Pro D2</font></b></font></b></font></b></p>
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
  <?php
  
    
	include("../pub20.php"); ?>
</p>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" height="32"> 
      <div align="center"><font color="#000000"><b><font color="#000000"><b><font color="#E4EFFF">
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
        <?php // ----8me-----Quarts----Demi------Finale-------
$query = "SELECT id,
					A2001, A2002, A2003, A2004, A1001, A1002 FROM bdpf$annee2 WHERE id=120 "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
		
	
	
	
	$A2001 = $row[1];
	$A2002 = $row[2];
	$A2003 = $row[3];
	$A2004 = $row[4];
	
	$A1001 = $row[5];
	$A1002 = $row[6];
	
	
	}
 
?>
        </font></b></font><font size="5" face="Arial, Helvetica, sans-serif">Demi 
        finale<br>
        <font size="3">d'Accession au Top 14</font></font></b></font></div>
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

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E02 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E02 and bdpf$annee.id=120 "; 
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
      <div id="coin4" > 
        <?php if ($A2001+$A2002==0)
		echo "-";
		else
		{
		echo $A2001;  
        }
        ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4" > <font color="#E4EFFF"> </font><font color="#000000"><b><font color="#000000"><b><font color="#E4EFFF"> 
        <?php //E02

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E05 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E05 and bdpf$annee.id=120 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA2002= $row[1];
	$sigle2 = $row[2];
	}

?>
        </font></b></font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA2002; echo " "; echo $sigle2;

 ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4">
        <?php if ($A2001+$A2002==0)
		echo "-";
		else
		{
		echo $A2002;  
        }
        ?>
      </div>
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

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E03 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E03 and bdpf$annee.id=120 "; 
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
      <div id="coin4">
        <?php if ($A2003+$A2004==0)
		echo "-";
		else
		{
		echo $A2003;  
        }
        ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4"> <font color="#000000"><b><font color="#000000"><b><font color="#E4EFFF"> 
        <?php //E02

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E04 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E04 and bdpf$annee.id=120 "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$clubA2004= $row[1];
	$sigle4 = $row[2];
	}

?>
        </font></b></font></b></font><font color="#E4EFFF"> </font> 
        <?php
	 echo $clubA2004; echo " "; echo $sigle4;

 ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4" > 
        <?php if ($A2003+$A2004==0)
		echo "-";
		else
		{
		echo $A2004;  
        }
        ?>
      </div>
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
  
    
	include("../pub20.php"); ?>
</p>
<table width="90%" border="1" align="center" bordercolor="#000000" height="59">
  <tr>
    <td bgcolor="#FFFFFF" height="49"> 
      <div align="center"> 
        <p><font color="#000000"><b><font size="5" face="Arial, Helvetica, sans-serif">Finale<br>
          </font></b></font><font color="#000000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font size="3">d'Accession 
          au Top 14</font></font></b></font></p>
      </div>
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
      <div id="coin5" > 
        <?php
	if ($A2001+$A2002>0)	
		{
			if ($A2001>$A2002)
 			echo $clubA2001;
 			else
 			echo $clubA2002;
 		}
 	else
 		echo "-";
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > 
        <?php if ($A1001+$A1002==0)
		echo "-";
		else
		{
		echo $A1001;  
        }
        ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php
		if ($A2003+$A2004>0)	
		{
			if ($A2003>$A2004)
 			echo $clubA2003;
 			else
 			echo $clubA2004;
		}
		else
		echo "-";
 	?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > 
        <?php if ($A1001+$A1002==0)
		echo "-";
		else
		{
		echo $A1002;  
        }
        ?>
      </div>
    </td>
  </tr>
</table>
<br>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FF0000" height="32"> 
      <div align="center"><font color="#000000"><b><font size="5" face="Arial, Helvetica, sans-serif">Champion 
        Pro D2</font></b></font></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td> 
      <div id="coin5" ><font color="#9FC6FF" size="5"> </font> </div>
      <div id="coin5" > </div>
      <div id="coin5" ></div>
      <div id="coin5" ><font size="5"><b></b></font></div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../pub20.php"; ?>
  <br>
  <?php	require "../bas2.php"; ?>
  </b></font></p>
<p>&nbsp;</p>
