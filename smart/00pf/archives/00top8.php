<?php
$champ = $_GET['champ']; 
?><head>
  
<link rel="stylesheet" type="text/css" href="AA2.css"> 
<link type="text/css" rel="stylesheet" href="../10.css">
<link type="text/css" rel="stylesheet" href="../11.css"> 
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
          Top 8</font></b></font></b></font></b></p>
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
    <td bgcolor="#FFFFFF" height="22"> 
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
      <div id="coin4" > Stade Toulousain (MPY)</div>
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
      <div id="coin4" > Montpellier (LD) </div>
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
      <div id="coin4" >Blagnac Saint Orens (MPY)</div>
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
      <div id="coin4"> Lille Metropole (FL) </div>
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
    <td bgcolor="#FFFFFF" height="36" valign="middle"> 
      <div align="center"> <font color="#000000"><b><font size="5" face="Arial, Helvetica, sans-serif">Finale</font></b></font></div>
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
      <div id="coin5" ><font color="#9FC6FF">
        <?php
if ($A2001+A2002==0)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1001;
 }
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
      <div id="coin5" ><font color="#9FC6FF">
        <?php
if ($A2003+A2004==0)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1002;
 }
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../pub20.php"; ?>
  <br>
  <?php	require "../bas2.php"; ?>
  </b></font></p>
<p>&nbsp;</p>
