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
 if ($champ==150)
		{
		$id=150;
		$id2=120;
		//require ("fonctions_phases_finalesAR.php");		
		require ("../../phases_finales/fonctions_phases_finalesAR.php");
		}
elseif ($champ==160)
		{
		$id=160;
		$id2=130;
		//require ("fonctions_phases_finalesAR.php");		
		require ("../../phases_finales/fonctions_phases_finalesAR.php");
		}
else
{
require ("fonctions_phases_finalesAR.php");
}
?>


 

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
    <td bgcolor="#FFFFFF" colspan="2" height="90"> 
      <div id="titre">Champ de France<br>
        <?php	
		  if ($champ==150)
		  {
		  echo "F&eacute;d&eacute;rale 2"; 
		  }
		  elseif($champ==160)
		  {
		  echo "F&eacute;d&eacute;rale 3"; 
		  }
		  
		   elseif($champ==260)
		  {
		  echo "Excellence B"; 
		  }
		  ?>
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
      <div id="coin4" ><font color="#E4EFFF">
        <?php
if ($A3201+A3202==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1601;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="15"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3201+ $pts2A3202>0)
					echo $pts2A3201; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1601+ $pts3A1602>0)
					echo $pts3A1601;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3201+ $pts2A3202>0 )
		{
		//echo $pts2A3201; 
		
		
		?>
        </font><font size="2">( 
        <?php
		echo $A1601;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#E4EFFF">
        <?php
if ($A3203+A3204==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1602;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3201+ $pts2A3202>0)
					echo $pts2A3202; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1601+ $pts3A1602>0)
					echo $pts3A1602;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3201+ $pts2A3202>0)
		{
		//echo $pts2A3202; ?>
        </font><font size="2">( 
        <?php
		echo $A1602;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5" > <font color="#E4EFFF">
        <?php
if ($A3205+A3206==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1603;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3203+ $pts2A3204>0)
					echo $pts2A3203; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1603+ $pts3A1604>0)
					echo $pts3A1603;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3203+$pts2A3204>0)
		{
		//echo $pts2A3203; ?>
        </font><font size="2">( 
        <?php
		echo $A1603;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > <font color="#E4EFFF"> 
        <?php
if ($A3207+A3208==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1604;
 }
 ?>
        <font color="#E4EFFF"> </font></div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3203+ $pts2A3204>0)
					echo $pts2A3204; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1603+ $pts3A1604>0)
					echo $pts3A1604;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3203+ $pts2A3204>0)
		{
		//echo $pts2A3204; ?>
        </font><font size="2">( 
        <?php
		echo $A1604;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" > <font color="#9FC6FF">
        <?php
if ($A3209+A3210==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1605;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3205+ $pts2A3206>0)
					echo $pts2A3205; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1605+ $pts3A1606>0)
					echo $pts3A1605;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3205+ $pts2A3206>0)
		{
		//echo $pts2A3205; ?>
        </font><font size="2">( 
        <?php
		echo $A1605;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#9FC6FF">
        <?php
if ($A3211+A3212==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1606;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> <font color="#FF0000" size="3"> 
        </font><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3205+ $pts2A3206>0)
					echo $pts2A3206; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1605+ $pts3A1606>0)
					echo $pts3A1606;
				else
					echo"-";
			}	
		?>
        </font><font size="2"> 
        <?php if( $pts2A3205+ $pts2A3206>0)
		{
		//echo $pts2A3206; ?>
        </font></font><font size="2">( 
        <?php
		echo $A1606;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="11"> 
      <div id="coin5"> <font color="#9FC6FF">
        <?php
if ($A3213+A3214==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1607;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3207+ $pts2A3208>0)
					echo $pts2A3207; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1607;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3207+ $pts2A3208>0)
		{
		//echo $pts2A3207; ?>
        </font><font size="2">( 
        <?php
		echo $A1607;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > <font color="#9FC6FF">
        <?php
if ($A3215+A3216==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1608;
 }
 ?>
        <font color="#E4EFFF"> </font></div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3207+ $pts2A3208>0)
					echo $pts2A3208; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1608;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3207+ $pts2A3208>0)
		{
		//echo $pts2A3208; ?>
        </font><font size="2">( 
        <?php
		echo $A1608;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td height="39"> 
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
    <td height="39"> 
      <h1 align="right"><b><font size="3"><font face="Arial, Helvetica, sans-serif"><a href="8meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">8me 
        &gt;&gt;</font></a></font></font></b></h1>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="9"> 
      <div id="coin4" ><font color="#E4EFFF"> 
        <?php
if ($A3217+A3218==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1609;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3209+ $pts2A3210>0)
					echo $pts2A3209; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1609+ $pts3A1610>0)
					echo $pts3A1609;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3209+ $pts2A3210>0)
		{
		//echo $pts2A3209; ?>
        </font><font size="2">( 
        <?php
		echo $A1609;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#E4EFFF">
        <?php
if ($A3219+A3220==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1610;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3209+ $pts2A3210>0)
					echo $pts2A3210; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1610;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3209+ $pts2A3210>0)
		{
		//echo $pts2A3210; ?>
        </font><font size="2">( 
        <?php
		echo $A1610;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin5"><font color="#E4EFFF"> 
        <?php
if ($A3221+A3222==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1611;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3211+ $pts2A3212>0)
					echo $pts2A3211; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1611;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3211+ $pts2A3212>0)
		{
		//echo $pts2A3211; ?>
        </font><font size="2">( 
        <?php
		echo $A1611;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#E4EFFF"> 
        <?php
if ($A3223+A3224==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1612;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"> <font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3211+ $pts2A3212>0)
					echo $pts2A3212; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1612;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3211+ $pts2A3212>0)
		{
		//echo $pts2A3212; ?>
        </font><font size="2">( 
        <?php
		echo $A1612;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#9FC6FF"> 
        <?php
if ($A3225+A3226==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1613;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4"> <font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3213+ $pts2A3214>0)
					echo $pts2A3213; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1613;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3213+ $pts2A3214>0)
		{
		//echo $pts2A3213; ?>
        </font><font size="2">( 
        <?php
		echo $A1613;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4"><font color="#9FC6FF"> 
        <?php
if ($A3227+A3228==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1614;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3213+ $pts2A3214>0)
					echo $pts2A3214; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1614;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3213+ $pts2A3214>0)
		{
		//echo $pts2A3214; ?>
        </font><font size="2">( 
        <?php
		echo $A1614;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#9FC6FF"> 
        <?php
if ($A3229+A3230==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1615;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $champ == 150)
			{			
				if( $pts2A3215+ $pts2A3216>0)
					echo $pts2A3215; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1615;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3215+ $pts2A3216>0)
		{
		//echo $pts2A3215; ?>
        </font><font size="2">( 
        <?php
		echo $A1615;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#9FC6FF"> 
        <?php
if ($A3231+A3232==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1616;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"> <font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3215+ $pts2A3216>0)
					echo $pts2A3216; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1616;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3215+ $pts2A3216>0)
		{
		//echo $pts2A3216; ?>
        </font><font size="2">( 
        <?php
		echo $A1616;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<div align="center"> 
  <?php	include("../../pub/pub20.php"); ?>
</div>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#E4EFFF"> 
        <?php
if ($A3233+A3234==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1617;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3217+ $pts2A3218>0)
					echo $pts2A3217; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1617;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3217+ $pts2A3218>0)
		{
		//echo $pts2A3217; ?>
        </font><font size="2">( 
        <?php
		echo $A1617;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#E4EFFF">
        <?php
if ($A3235+A3236==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1618;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3217+ $pts2A3218>0)
					echo $pts2A3218; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1618;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3217+ $pts2A3218>0)
		{
		//echo $pts2A3218; ?>
        </font><font size="2">( 
        <?php
		echo $A1618;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5"><font color="#E4EFFF"> 
        <?php
if ($A3237+A3238==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1619;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3219+ $pts2A3220>0)
					echo $pts2A3219; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1619;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3219+ $pts2A3220>0)
		{
		//echo $pts2A3219; ?>
        </font><font size="2">( 
        <?php
		echo $A1619;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5"><font color="#E4EFFF">
        <?php
if ($A3239+A3240==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1620;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3219+ $pts2A3220>0)
					echo $pts2A3220; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1620;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3219+ $pts2A3220>0)
		{
		//echo $pts2A3220; ?>
        </font><font size="2">( 
        <?php
		echo $A1620;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4"><font color="#9FC6FF"> 
        <?php
if ($A3241+A3242==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1621;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3221+ $pts2A3222>0)
					echo $pts2A3221; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1621;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3221+ $pts2A3222>0)
		{
		//echo $pts2A3221; ?>
        </font><font size="2">( 
        <?php
		echo $A1621;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4"  ><font color="#9FC6FF"> 
        <?php
if ($A3243+A3244==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1622;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3221+ $pts2A3222>0)
					echo $pts2A3222; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1622;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3221+ $pts2A3222>0)
		{
		//echo $pts2A3222; ?>
        </font><font size="2">( 
        <?php
		echo $A1622;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="11"> 
      <div id="coin5" ><font color="#9FC6FF"> 
        <?php
if ($A3245+A3266==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1623;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3223+ $pts2A3224>0)
					echo $pts2A3223; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1623;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3223+ $pts2A3224>0)
		{
		//echo $pts2A3223; ?>
        </font><font size="2">( 
        <?php
		echo $A1623;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#9FC6FF"> 
        <?php
if ($A3247+A3248==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1624;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3223+ $pts2A3224>0)
					echo $pts2A3224; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1624;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3223+ $pts2A3224>0)
		{
		//echo $pts2A3224; ?>
        </font><font size="2">( 
        <?php
		echo $A1624;  
        ?>
        ) </font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td> 
      <div align="center"><b><font size="3"><font size="3"><font face="Arial, Helvetica, sans-serif"><font color="#FF0000" size="4"></font></font></font></font></b></div>
      <div align="left"><font size="4"><b><font face="Arial, Helvetica, sans-serif"><a href="32me.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">&lt;&lt;<font face="Arial, Helvetica, sans-serif" size="3"> 
        32me</font></font></a></font></b></font></div>
    </td>
    <td> 
      <h1 align="right"><b><font size="3"><font size="3"><font face="Arial, Helvetica, sans-serif"><a href="8meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">8me</font><font color="#FF0000" size="4"> 
        &gt;&gt;</font></a><a href="8meAR.php?champ=<?php echo$champ ?>"></a></font></font></font></b></h1>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin4" > <font color="#E4EFFF"> 
        <?php
if ($A3249+A3250==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1625;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3225+ $pts2A3226>0)
					echo $pts2A3225; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1625;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3225+ $pts2A3226>0)
		{
		//echo $pts2A3225; ?>
        </font><font size="2">( 
        <?php
		echo $A1625;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#E4EFFF"> 
        <?php
if ($A3251+A3252==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1626;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $champ == 150)
			{			
				if( $pts2A3225+ $pts2A3226>0)
					echo $pts2A3226; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1626;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3225+ $pts2A3226>0)
		{
		//echo $pts2A3226; ?>
        </font><font size="2">( 
        <?php
		echo $A1626;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > <font color="#E4EFFF"> 
        <?php
if ($A3253+A3254==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1627;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3227+ $pts2A3228>0)
					echo $pts2A3227; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1627;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3227+ $pts2A3228>0)
		{
		//echo $pts2A3227; ?>
        </font><font size="2">( 
        <?php
		echo $A1627;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#E4EFFF">
        <?php
if ($A3255+A3256==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1628;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3227+ $pts2A3228>0)
					echo $pts2A3228; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1628;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3227+ $pts2A3228>0)
		{
		//echo $pts2A3228; ?>
        </font><font size="2">( 
        <?php
		echo $A1628;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" ><font color="#9FC6FF">
        <?php
if ($A3257+A3258==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1629;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3229+ $pts2A3230>0)
					echo $pts2A3229; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1629;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3229+ $pts2A3230>0)
		{
		//echo $pts2A3229; ?>
        </font><font size="2">( 
        <?php
		echo $A1629;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="22"> 
      <div id="coin4" ><font color="#9FC6FF">
        <?php
if ($A3259+A3260==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1630;
 }
 ?>
      </div>
    </td>
    <td width="21%" height="22"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3229+ $pts2A3230>0)
					echo $pts2A3230; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1630;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3229+ $pts2A3230>0)
		{
		//echo $pts2A3230; ?>
        </font><font size="2">( 
        <?php
		echo $A1630;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#9FC6FF">
        <?php
if ($A3261+A3262==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1631;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $champ == 150)
			{			
				if( $pts2A3231+ $pts2A3232>0)
					echo $pts2A3231; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1631;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3231+ $pts2A3232>0)
		{
		//echo $pts2A3231; ?>
        </font><font size="2">( 
        <?php
		echo $A1631;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" ><font color="#9FC6FF">
        <?php
if ($A3263+A3264==NULL)

 echo "-";
 else
 {
 	?>
        </font> 
        <?php
	 echo $clubA1632;
 }
 ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $champ == 150)
			{			
				if( $pts2A3231+ $pts2A3232>0)
					echo $pts2A3232; 
				else
					echo"-";
			}		
			else
			{
				if( $pts3A1607+ $pts3A1608>0)
					echo $pts3A1632;
				else
					echo"-";
			}	
		?>
        <?php if( $pts2A3231+ $pts2A3232>0)
		{
		//echo $pts2A3232; ?>
        </font><font size="2">( 
        <?php
		echo $A1632;  
        ?>
        ) </font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
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
