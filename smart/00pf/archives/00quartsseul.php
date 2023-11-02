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
		  
$id = $champ;
require ("fonctions_phases_finales.php");  
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
<body bgcolor="#FFFFFF">
<table width="100%" border="1">
  <tr> 
    <td bgcolor="#006699" colspan="2"> 
      <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#FFFFFF">France 
        Finales Rugby</font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" colspan="2" height="62"> 
      <div id="titre"> Champ de France<br>
		 
 <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france_db5"); 

$reponse = mysql_query ("	SELECT division
							FROM divisions
							WHERE id = $champ	");
						while ($donnees = mysql_fetch_array ($reponse))
							{
							$nomDivision = $donnees['division'];
							}
				echo $nomDivision;
mysql_close();	
		  ?>    		 
		 
		  
          <br>
        Quarts de finale 
       
      </div>
     
    </td>
  </tr>
</table>

  
<div align="center">
  <?php
  
    
	include("texte_defilant.htm"); ?>
  <br>
  <?php
  
    
	include("liensdiv.php"); ?>
  <br>
  <?php	require ("../../pub/pub20.php"); ?>
  <br>
  <br>
</div>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
        <?php
if ($A8001+$A8002==0)

 echo "-";
 else
 {
 	
	 echo $clubA4001;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > 
        <?php if ($A4001+$A4002==0)
		echo "-";
		else
		{
		echo $A4001;  
        }
        ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
        <?php
if ($A8003+$A8004==0)

 echo "-";
 else
 {
 
	 echo $clubA4002;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php if ($A4001+$A4002==0)
		echo "-";
		else
		{
		echo $A4002;  
        }
        ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5"  > 
        <?php
if ($A8005+$A8006==0)

 echo "-";
 else
 {
 
	 echo $clubA4003;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5"> 
        <?php if ($A4003+$A4004==0)
		echo "-";
		else
		{
		echo $A4003;  
        }
        ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php
if ($A8007+$A8008==0)

 echo "-";
 else
 {
 	
	 echo $clubA4004;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php if ($A4003+$A4004==0)
		echo "-";
		else
		{
		echo $A4004;  
        }
        ?>
      </div>
    </td>
  </tr>
</table>
<p>&nbsp;</p><table width="90%" border="0" align="center">
  <tr> 
    <td height="21" width="48%"> 
      <div id="liensGauche"><a href="8me.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"> 
        <font color="#FF0000">&lt;&lt; 8me</font></a></div>
      
    </td>
    <td height="21" width="52%"> 
      <div id="liensDroit"><a href="demi.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">Demis 
        &gt;&gt;</font></a> </div>
    </td>
  </tr>
</table>
<table width="90%" height="20" border="0" align="center">
  <tr> 
    <td width="76%" height="7"> 
      <div id="coin4" > 
        <?php
if ($A8009+$A8010==0)

 echo "-";
 else
 {
 	
	 echo $clubA4005;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="7"> 
      <div id="coin4" > 
        <?php if ($A4005+$A4006==0)
		echo "-";
		else
		{
		echo $A4005;  
        }
        ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="2"> 
      <div id="coin4" >
        <?php
if ($A8011+$A8012==0)

 echo "-";
 else
 {
 	
	 echo $clubA4006;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="2"> 
      <div id="coin4" >
        <?php if ($A4005+$A4006==0)
		echo "-";
		else
		{
		echo $A4006;  
        }
        ?>
      </div>
    </td>
  </tr>
</table>
<div align="center">
  <table width="90%" height="55" border="0" align="center">
    <tr> 
      <td width="76%" height="2"> 
        <div id="coin5" > 
          <?php
if ($A8013+$A8014==0)

 echo "-";
 else
 {
 	
	 echo $clubA4007;
 }
 ?>
        </div>
      </td>
      <td width="21%" height="2"> 
        <div id="coin5" > 
          <?php if ($A4007+$A4008==0)
		echo "-";
		else
		{
		echo $A4007;  
        }
        ?>
        </div>
      </td>
    </tr>
    <tr> 
      <td width="76%" height="2"> 
        <div id="coin5" > 
          <?php
if ($A8015+$A8016==0)

 echo "-";
 else
 {
 
	 echo $clubA4008;
 }
 ?>
        </div>
      </td>
      <td width="21%" height="2"> 
        <div id="coin5" > 
          <?php if ($A4007+$A4008==0)
		echo "-";
		else
		{
		echo $A4008;  
        }
        ?>
        </div>
      </td>
    </tr>
  </table>
  <br />
  <?php
  
    
	include("../../pub/pub20.php"); ?>
  <br>
  <?php	require "../bas2.php"; ?>
</div>
