<?php
$champ = $_GET['champ']; 
?><head>
  
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


<?php $annee=$_GET['annee'];?>
 <?php $annee2 ="bdpf".''.$annee.''."_2";?>  
<?php


//$clubA8001= ' -';
//$clubA8002= ' -';

//$clubA8003= ' -';
//$clubA8004= ' -';

//$clubA8005= ' -';
//$clubA8006= ' -';

//$clubA8007= ' -';
//$clubA8008= ' -';

//$clubA8009= ' -';
//$clubA8010= ' -';

//$clubA8011= ' -';
//$clubA8012= ' -';

//$clubA8013= ' -';
//$clubA8014= ' -';

//$clubA8015= ' -';
//$clubA8016= ' -';

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
<table width="100%" border="1" height="130">
  <tr> 
    <td bgcolor="#006699" colspan="2"> 
      <div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#FFFFFF">France 
        Finales Rugby</font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" colspan="2" height="78"> 
      <div id="titre"> 
       Champ de France<br>
          <?php
	if ($champ==150)
		{
		$id=150;
		$id2=120;
		echo "F&eacute;d&eacute;rale 2";
		require ("fonctions_phases_finalesAR.php");
		}
	elseif($champ==160)
		{
		$id=160;
		$id2=130;
		echo "F&eacute;d&eacute;rale 2";
		require ("fonctions_phases_finalesAR.php");
		}
	
	
	
	else
	require ("fonctions_phases_finalesAR.php");
		  ?>
          <br>
        8me de finale </div>
    </td>
  </tr>
</table>
<div align="center"> 
  <?php
  
    
	include("texte_defilant.htm"); ?>
  <br>
  <?php
  
    
	include("liensdiv.php"); ?>
</div>
<p align="center">
  <?php	require ("../../pub/pub20.php"); ?>
  <br>
</p>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="26"> 
      <div id="coin4" > 
        <?php
	 if ($pts2A3201+$pts2A3202>6)  if ($pts2A3201>$pts2A3202 or $A1601>$A1602) $clubA8001= $clubA1601;	else	$clubA8001= $clubA1602; else $clubA8001=$clubA;
	
	 ?>
        <?php
	 if ($pts2A3203+$pts2A3204>6)  if ($pts2A3203>$pts2A3204 or $A1603>$A1604) $clubA8002= $clubA1603;	else	$clubA8002= $clubA1604; else $clubA8002=$clubA;
	
	 ?>
        <?php
	  if ($pts2A3205+$pts2A3206>6)  if ($pts2A3205>$pts2A3206 or $A1605>$A1606) $clubA8003= $clubA1605;	else	$clubA8003= $clubA1606;	else $clubA8003=$clubA;
	
	 ?>
        <?php
	 if ($pts2A3207+$pts2A3208>6)  if ($pts2A3207>$pts2A3208 or $A1607>$A1608) $clubA8004= $clubA1607;	else	$clubA8004= $clubA1608;	else $clubA8004=$clubA;
	
	 ?>
        <?php	
	 if ($pts2A3209+$pts2A3210>6)  if ($pts2A3209>$pts2A3210 or $A1609>$A1610) $clubA8005= $clubA1609;	else	$clubA8005= $clubA1610; else $clubA8005=$clubA;
		 ?>
        <?php
	 if ($pts2A3211+$pts2A3212>6)  if ($pts2A3211>$pts2A3212 or $A1611>$A1612) $clubA8006= $clubA1611;	else	$clubA8006= $clubA1612; else $clubA8006=$clubA;
		 ?>
        <?php	 
	 if ($pts2A3213+$pts2A3214>6)  if ($pts2A3213>$pts2A3214 or $A1613>$A1614) $clubA8007= $clubA1613;	else	$clubA8007= $clubA1614;	else $clubA8007=$clubA;
		 ?>
        <?php
	 if ($pts2A3215+$pts2A3216>6)  if ($pts2A3215>$pts2A3216 or $A1615>$A1616) $clubA8008= $clubA1615;	else	$clubA8008= $clubA1616;	else $clubA8008=$clubA;
		 ?>
        <?php

	 echo $clubA8001;
 
 ?>
      </div>
    </td>
    <td width="21%" height="26"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3233+ $pts2A3234>0)
			{
			echo $pts2A3233; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8001.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin4" > 
        <?php

echo $clubA8002;

 ?> 
      
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3233+ $pts2A3234>0)
			{
			echo $pts2A3234; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8002.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5" > 
        

        <?php
	 echo $clubA8003;
 
 ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3235+ $pts2A3236>0)
			{
			echo $pts2A3235; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8003.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="22"> 
      <div id="coin5" >
        

 	
        <?php
	 echo $clubA8004;

 ?>
      
      </div>
    </td>
    <td width="21%" height="22"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3235+ $pts2A3236>0)
			{
			echo $pts2A3236; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8004.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="26"> 
      <div id="coin4" >
      
        <?php
	 echo $clubA8005;

 ?>
      </div>
    </td>
    <td width="21%" height="26"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3237+ $pts2A3238>0)
			{
			echo $pts2A3237; ?>
        </font> <font size="2"> 
        <?php
			echo "(".''.$A8005.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4"> 
      
       
        <?php
	 echo $clubA8006;

 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3237+ $pts2A3238>0)
			{
			echo $pts2A3238; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8006.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="11"> 
      <div id="coin5" > 
      
        <?php
	 echo $clubA8007;

 ?>
      </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3239+ $pts2A3240>0)
			{
			echo $pts2A3239; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8007.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
 	
        <?php
	 echo $clubA8008;

 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3239+ $pts2A3240>0)
			{
			echo $pts2A3240; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8008.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr>
    <td>
       
      <div id="liensGauche"><a href="16meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">&lt;&lt; 
        16me </font></a></div>
    </td>
    <td>
       
      <div id="liensDroit"><a href="quarts.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">Quarts 
        &gt;&gt;</font></a></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="9"> 
      <div id="coin4" > 
        <?php
		 if ($pts2A3217+$pts2A3218>6)  if ($pts2A3217>$pts2A3218 or $A1617>$A1618) $clubA8009= $clubA1617;	else	$clubA8009= $clubA1618; else $clubA8009=$clubA;
		 ?>
        <?php
		  if ($pts2A3219+$pts2A3220>6)  if ($pts2A3219>$pts2A3220 or ($pts2A3219==$pts2A3220 and $A1619>$A1620)) $clubA8010= $clubA1619;	else	$clubA8010= $clubA1620; else $clubA8010=$clubA;
		 ?>
        <?php
		   if ($pts2A3221+$pts2A3222>6)  if ($pts2A3221>$pts2A3222 or $A1621>$A1622) $clubA8011= $clubA1621;	else	$clubA8011= $clubA1622;	else $clubA8011=$clubA;
		 ?>
        <?php
		  if ($pts2A3223+$pts2A3224>6)  if ($pts2A3223>$pts2A3224 or $A1623>$A1624) $clubA8012= $clubA1623;	else	$clubA8012= $clubA1624; else $clubA8012=$clubA;
		?>
        <?php	
		  if ($pts2A3225+$pts2A3226>6)  if ($pts2A3225>$pts2A3226 or $A1625>$A1626) $clubA8013= $clubA1625;	else	$clubA8013= $clubA1626; else $clubA8013=$clubA;
		?>
        <?php
		 if ($pts2A3227+$pts2A3228>6)  if ($pts2A3227>$pts2A3228 or $A1627>$A1628) $clubA8014= $clubA1627;	else	$clubA8014= $clubA1628; else $clubA8014=$clubA;
		 ?>
        <?php
		 if ($pts2A3229+$pts2A3230>6)  if ($pts2A3229>$pts2A3230 or $A1629>$A1630) $clubA8015= $clubA1629;	else	$clubA8015= $clubA1630;	else $clubA8015=$clubA;
			 ?>
        <?php	
		 if ($pts2A3231+$pts2A3232>6)  if ($pts2A3231>$pts2A3232 or $A1631>$A1632) $clubA8016= $clubA1631;	else	$clubA8016= $clubA1632;	else $clubA8016=$clubA;
		 ?>
        <?php
	 echo $clubA8009;
 
 ?>
      </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3241+ $pts2A3242>0)
			{
			echo $pts2A3241; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8009.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
        <div id="coin4"> 
        <?php
	 echo $clubA8010;

 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3241+ $pts2A3242>0)
			{
			echo $pts2A3242; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8010.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5"> 
 	
       
        <?php
	 echo $clubA8011;

 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"> <font color="#FF0000" size="3"> 
        <?php if( $pts2A3243+ $pts2A3244>0)
			{
			echo $pts2A3243; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8011.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        
        <?php
	 echo $clubA8012;

 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"><font color="#FF0000" size="3"> 
        <?php if( $pts2A3243+ $pts2A3244>0)
			{
			echo $pts2A3244; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8012.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin4" > 
        
        <?php
	 echo $clubA8013;
 
 ?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3245+ $pts2A3246>0)
			{
			echo $pts2A3245; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8013.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
       
        <?php
	 echo $clubA8014;
 
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts2A3245+ $pts2A3246>0)
			{
			echo $pts2A3246; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8014.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
       
        <?php
	 echo $clubA8015;

 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts2A3247+ $pts2A3248>0)
			{
			echo $pts2A3247; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8015.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        
        <?php
	 echo $clubA8016;

 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"><font color="#FF0000" size="3"> 
        <?php if( $pts2A3247+ $pts2A3248>0)
			{
			echo $pts2A3248; ?>
        </font> <font size="2">
        <?php
			echo "(".''.$A8016.''.")";  
       		 }
			
		else
		echo "-";	?>
        </font></div>
    </td>
  </tr>
</table>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require ("../../pub/pub20.php"); ?>
  <br>
  <?php	require "../bas2.php"; ?>
  </b></font></p>
