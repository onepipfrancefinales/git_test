 <?php $annee=$_GET['variable_1'];?>
<head>
<link rel="stylesheet" type="text/css" href="../style2.css">
<?php $annee=$_GET['variable_1'];?>
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit&egrave;s territoriaux, Tous les championnats de rugby, f&egrave;d&egrave;rale 2, f&egrave;d&egrave;rale 3, f&egrave;d&egrave;rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>1re S&egrave;rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
</head>


<body bgcolor="#EAECEB">
<p>&nbsp;</p>
<p><br>
</p>
<p><br>
</p>
<div id="Layer7" style="position:absolute; width:1000px; height:88px; z-index:13; left: -2px; top: 70px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="29" align="left" width="375" valign="middle"> 
        <p align="center"> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub7.php"); ?>
        </p>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="29" align="left">
        <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          </font></b></font></b><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservehonneur.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
          </font></font></b><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservehonneur.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></font></div>
        </td>
      <td width="375" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
        <div align="center"> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub8.php"); ?>
        </div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
        <? echo "Finales territoriales du comit&egrave; des Pyr&egrave;n&egrave;es $annee";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p><br>
</p>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" bgcolor="#FFCC66" colspan="12">
      <div align="center"><i></i><i><b>Réserve Réserve Réserve 
        Réserve Réserve Réserve Réserve Réserve 
        Réserve Réserve Réserve Réserve Réserve 
        Réserve Réserve Réserve Réserve</b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="46" height="13">&nbsp;</td>
    <td width="196" height="13">&nbsp;</td>
    <td width="42" height="13">&nbsp;</td>
    <td width="33" height="13">&nbsp;</td>
    <td width="100" height="13">&nbsp;</td>
    <td width="204" align="left" height="13">&nbsp;</td>
    <td width="33" height="13">&nbsp;</td>
    <td width="33" height="13">&nbsp;</td>
    <td width="60" height="13">&nbsp;</td>
    <td width="208" height="13">&nbsp;</td>
    <td width="26" height="13">&nbsp;</td>
    <td width="9" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="13"> </td>
    <td colspan="3" height="13"> 
      <div id="titre2" >Quarts de finale</div>
    </td>
    <td width="100" height="13">&nbsp;</td>
    <td width="204" align="left" height="13"> 
      <div id="titre2" >Demi finale</div>
    </td>
    <td width="33" align="left" height="13">&nbsp;</td>
    <td width="33" align="left" height="13">&nbsp;</td>
    <td width="60" height="13">&nbsp;</td>
    <td width="208" height="13"> 
      <div id="titre2" >Finale</div>
    </td>
    <td width="26" height="13">&nbsp;</td>
    <td width="9" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="26"> 
      <?php 
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip	   
   ?>
    </td>
    <td width="196" height="26"> 
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8001=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA8001=$row[0];
		$logo8001=$row[1];
		
 }
       ?>
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8002=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA8002=$row[0];
		$logo8002=$row[1];
		
 }
       ?>
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8003=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA8003=$row[0];
		$logo8003=$row[1];
		
 }
       ?>
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8004=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA8004=$row[0];
		$logo8004=$row[1];
		
 }
       ?>
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8005=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA8005=$row[0];
		$logo8005=$row[1];
		
 }
       ?>
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8006=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA8006=$row[0];
		$logo8006=$row[1];
		
 }
       ?>
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8007=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA8007=$row[0];
		$logo8007=$row[1];
		
 }
       ?>
      <?  
$query = "SELECT  Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8008=Phpmpy_clubs.id and Phpmpy_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                		      
		$clubA8008=$row[0];
		$logo8008=$row[1];
				 
 }
       ?>
    </td>
    <td width="42" height="26">&nbsp;</td>
    <td width="33" height="26">&nbsp;</td>
    <td width="100" height="26">&nbsp;</td>
    <td width="204" align="left" height="26"> 
      <?
$reponse = mysql_query("SELECT A2001, A2002, A2003, A2004 FROM Phpmpy_pf$annee WHERE id='270'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A2001= $donnees['A2001'];
 $A2002= $donnees['A2002'];
 $A2003= $donnees['A2003'];
 $A2004= $donnees['A2004'];   
$B4001= $donnees['B4001'];
 $B4002= $donnees['B4002'];
 $B4003= $donnees['B4003'];
 $B4004= $donnees['B4004'];   

}
?>
      <?php 
if ($A4005+$A4006>0)
{	
	
	if ($A4005> $A4006)
	{
	$clubA2003=$clubA4005;
	}
	else
	{
	$clubA2003=$clubA4006;
	}
}
else
{
echo "";	
}	
	
  ?>
      <?php 
	
	
	if ($A4005> $A4006)
	{
	$logo2003=$logo4005;
	}
	else
	{
	$logo2003=$logo4006;
	}

  ?>
      <?php 
if ($A4007+$A4008>0)
{	
	
	if ($A4007> $A4008)
	{
	$clubA2004=$clubA4007;
	}
	else
	{
	$clubA2004=$clubA4008;
	}
}
else
{
echo "";	
}	
	
  ?>
      <?php 
	
	
	if ($A4007> $A4008)
	{
	$logo2004=$logo4007;
	}
	else
	{
	$logo2004=$logo4008;
	}

  ?>
    </td>
    <td width="33" height="26">&nbsp;</td>
    <td width="33" height="26">&nbsp;</td>
    <td width="60" height="26">&nbsp;</td>
    <td width="208" height="26">&nbsp;</td>
    <td width="26" height="26">&nbsp;</td>
    <td width="9" height="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="25"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> </td>
    <td width="196" height="25"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <?php

$requete = "SELECT A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008, A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008 FROM Phpmpy_pf$annee WHERE id='270' "; // Requ�te SQL
$resultat = mysql_query ($requete);
while ($row = mysql_fetch_array($resultat))
{ 
?>
      <strong> 
      <?php echo $donnees['Quart1'];?>
      <?php $A8001=$row[0];$A8002=$row[1];$A8003=$row[2];$A8004=$row[3];$A8005=$row[4];$A8006=$row[5];$A8007=$row[6];$A8008=$row[7];
	   $A4001=$row[8];$A4002=$row[9];$A4003=$row[10];$A4004=$row[11];$A4005=$row[12];$A4006=$row[13];$A4007=$row[14];$A4008=$row[15];?>
      <?php
 
 }

?>
      </strong> </i></b></font></td>
    <td width="42" height="25">&nbsp;</td>
    <td width="33" height="25">&nbsp;</td>
    <td width="100" height="25">&nbsp;</td>
    <td width="204" height="25" align="left">&nbsp;</td>
    <td width="33" height="25">&nbsp;</td>
    <td width="33" height="25">&nbsp;</td>
    <td width="60" height="25">&nbsp;</td>
    <td width="208" height="25">&nbsp;</td>
    <td width="26" height="25">&nbsp;</td>
    <td width="9" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46"> </td>
    <td width="196"> 
      <div id="quarts" > 
        <?php echo $clubA8001;  ?>
      </div>
    </td>
    <td width="42"> 
      <div id="quartspts" > 
        <? echo $A8001;  ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" >
        <? echo $A4001;  ?>
      </div>
    </td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="60">&nbsp;</td>
    <td width="208">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="15"> </td>
    <td width="196" height="15"> 
      <div id="quarts" > 
        <?php echo $clubA8002;  ?>
      </div>
    </td>
    <td width="42" height="15"> 
      <div id="quartspts" > 
        <? echo $A8002;  ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="quarts" >
        <? echo $A4002;  ?>
      </div>
    </td>
    <td width="100" height="15">&nbsp;</td>
    <td width="204" align="left" height="15"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <strong> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 

       echo $donnees['Demi1'];
     
 
 }

?>
      </strong> </font></td>
    <td width="33" height="15">&nbsp;</td>
    <td width="33" height="15">&nbsp;</td>
    <td width="60" height="15">&nbsp;</td>
    <td width="208" height="15">&nbsp;</td>
    <td width="26" height="15">&nbsp;</td>
    <td width="9" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46">&nbsp;</td>
    <td width="196">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left"> 
      <div id="quarts" > 
        <?php 
if ($A8001+$A8002>5)
{	
	
	if ($A8001> $A8002 or $A4001> $A4002 )
	{
	$clubA2001=$clubA8001;
	}
	else
	{
	$clubA2001=$clubA8002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2001;
  ?>
        <?php 
	
	
	if ($A8001> $A8002)
	{
	$logo2001=$logo4001;
	}
	else
	{
	$logo2001=$logo4002;
	}

  ?>
      </div>
    </td>
    <td width="33"> 
      <div id="quartspts" >8</div>
    </td>
    <td width="33"> 
      <div id="quarts" > 
        <? echo $A2001; ?>
      </div>
    </td>
    <td width="60">&nbsp;</td>
    <td width="208">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46">&nbsp;</td>
    <td width="196"><font size="2" face="Arial, Helvetica, sans-serif"><strong> 
      </strong></font><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      </i></b></font></td>
    <td width="42">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="204"> 
      <div id="quarts" > 
        <?php 
if ($A8003+$A8004>5)
{	
	
	if ($A8003> $A8004 or $A4003> $A4004)
	{
	$clubA2002=$clubA8003;
	}
	else
	{
	$clubA2002=$clubA8004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2002;
  ?>
        <?php 
	
	
	if ($A4003> $A4004)
	{
	$logo2002=$logo4003;
	}
	else
	{
	$logo2002=$logo4004;
	}

  ?>
      </div>
    </td>
    <td width="33"> 
      <div id="quartspts" > 1</div>
    </td>
    <td width="33"> 
      <div id="quarts" > 
        <?php echo $A2002;  ?>
      </div>
    </td>
    <td width="60">&nbsp;</td>
    <td width="208">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="17"> </td>
    <td width="196" height="17"> 
      <div id="quarts" > 
        <?php  echo $clubA8003; ?>
      </div>
    </td>
    <td width="42" height="17"> 
      <div id="quartspts" > 
        <? echo $A8003; ?>
      </div>
    </td>
    <td width="30" height="17"> 
      <div id="quarts" >
        <? echo $A4003;  ?>
      </div>
    </td>
    <td width="100" height="17">&nbsp;</td>
    <td width="204" align="left" height="17">&nbsp;</td>
    <td width="33" height="17">&nbsp;</td>
    <td width="33" height="17">&nbsp;</td>
    <td width="60" height="17">&nbsp;</td>
    <td width="208" height="17"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> </strong></i></b></font></td>
    <td width="26" height="17">&nbsp;</td>
    <td width="9" height="17">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="11"> </td>
    <td width="196"> 
      <div id="quarts" > 
        <?php echo $clubA8004; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="quartspts" > 
        <?php  echo $A8004; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" >
        <? echo $A4004;  ?>
      </div>
    </td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="60">&nbsp;</td>
    <td width="208"> 
      <div id="quarts" >
        <?php 
if ($A8001+$A8002>5)
{	
	
	if ($A8001> $A8002 or $A4001> $A4002 )
	{
	$clubA2001=$clubA8001;
	}
	else
	{
	$clubA2001=$clubA8002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2001;
  ?>
      </div>
    </td>
    <td width="26"> 
      <div id="quarts" > 
        <?
$reponse = mysql_query("SELECT A1001 FROM Phpmpy_pf$annee WHERE id='270'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A1001= $donnees['A1001'];
 echo $A1001;     
}
?>
      </div>
    </td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="11"> </td>
    <td width="196" height="11">&nbsp;</td>
    <td width="42" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="100" height="11">&nbsp;</td>
    <td width="204" height="11" align="left">&nbsp;</td>
    <td width="33" height="11">&nbsp;</td>
    <td width="33" height="11">&nbsp;</td>
    <td width="60" height="11">&nbsp;</td>
    <td width="208" height="11"> 
      <div id="quarts" >
        <?php	echo $clubA8008; ?>
      </div>
    </td>
    <td width="26" height="11"> 
      <div id="quarts" > 
        <?
$reponse = mysql_query("SELECT A1002 FROM Phpmpy_pf$annee WHERE id='270'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A1002= $donnees['A1002'];
 echo $A1002;     
}
?>
      </div>
    </td>
    <td width="9" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46">&nbsp;</td>
    <td width="196">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td colspan="4" rowspan="4"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font></b></font></div>
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        Vallée de Girou 
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	$clubA1000=$clubA1001;
	}
	else
	{
	$clubA1000=$clubA1002;
	}
}
else
{
echo "";	
}	
		
	echo $clubA1000;
	
  ?>
        </font></b></font></div>
      <div align="center"></div>
    </td>
  </tr>
  <tr valign="top"> 
    <td width="46" height="6"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      </b></font> </td>
    <td width="196" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <strong> </strong> </font></td>
    <td width="42" height="6">&nbsp;</td>
    <td width="30" height="6">&nbsp;</td>
    <td width="100" height="6">&nbsp;</td>
    <td width="204" height="6" align="left"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
      </b></font></td>
    <td width="33" height="6">&nbsp;</td>
    <td width="33" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46"> </td>
    <td width="196"> 
      <div id="quarts" > 
        <?php 	echo $clubA8005;?>
      </div>
    </td>
    <td width="42"> 
      <div id="quartspts" > 
        <? echo $A8005; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" >
        <? echo $A4005;  ?>
      </div>
    </td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="20"> </td>
    <td width="196" height="20"> 
      <div id="quarts" > 
        <?php 	echo $clubA8006;?>
      </div>
    </td>
    <td width="42" height="20"> 
      <div id="quartspts" > 
        <? echo $A8006;?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" >
        <? echo $A4006;  ?>
      </div>
    </td>
    <td width="100" height="20">&nbsp;</td>
    <td width="204" align="left" height="20"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <strong> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip	  
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
      
       echo $donnees['Demi2'];  
 }
?>
      </strong></font></td>
    <td width="33" height="20">&nbsp;</td>
    <td width="33" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46">&nbsp;</td>
    <td width="196">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left"> 
      <div id="quarts" >
        <?php 	echo $clubA8005;?>
        <?php echo $clubA2003;  ?>
      </div>
    </td>
    <td width="33"> 
      <div id="quartspts" >4 </div>
    </td>
    <td width="33"> 
      <div id="quarts" > 
        <? echo $A2003; ?>
      </div>
    </td>
    <td rowspan="5" colspan="4"> 
      <div align="center"> 
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	echo "<img src=\"$logo1001\">";
	}
	else
	{
	echo "<img src=\"$logo1002\">";
	}
}
else
{
echo "";	
}	
		
	

  ?>
      </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="46">&nbsp;</td>
    <td width="196"> <strong> </strong></td>
    <td width="42">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left"> 
      <div id="quarts" >
        <?php	echo $clubA8008; ?>
        <?php 	echo $clubA2004; ?>
      </div>
    </td>
    <td width="33"> 
      <div id="quartspts" >4</div>
    </td>
    <td width="33"> 
      <div id="quarts" > 
        <?php echo $A2004; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="46"> </td>
    <td width="196"> 
      <div id="quarts" > 
        <?  echo $clubA8007; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="quartspts" > 
        <? echo $A8007; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" >
        <? echo $A4007;  ?>
      </div>
    </td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46" height="11"> </td>
    <td width="196"> 
      <div id="quarts" > 
        <?php	echo $clubA8008; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="quartspts" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" >
        <? echo $A4008;  ?>
      </div>
    </td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr> 
    <td width="46"> </td>
    <td width="196">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="100">&nbsp;</td>
    <td width="204" align="left">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="12"> 
      <div align="right">____________________________________________________________________________________________________________________________</div>
    </td>
  </tr>
  <tr> 
    <td height="22" colspan="12"> 
      <div align="center"> 
        <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1010px; top: 1px"><a href="http://forumda.forumsactifs.net/index.htm" target="_blank"><font color="#000000"> 
  <?php
    // On inclut le haut de la page
    include("../../pub2.php");
    ?>
  </font></a></div>
