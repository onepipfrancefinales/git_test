
<?php  
$anneemoins = $annee-1;
$anneeplus = $annee+1;
$division=$_GET['division'];

if ($division == 110)
  $adr = "top14/pagetop14";
elseif ($division == 120)
  $adr = "prod2/pageprod2";


  elseif ($division == 140) 
 $adr = "federale1/pagefederale1";
elseif ($division == 150) 
 $adr = "federale2/pagefederale2";
elseif ($division == 160) 
 $adr = "federale3/pagefederale";
  elseif ($division == 170) 
 $adr = "honneur/pagehonneur";
elseif ($division == 180) 
 $adr = "promotion/pagepromotion";
 elseif ($division == 190) 
 $adr = "1serie/page1serie";
 elseif ($division == 200) 
 $adr = "2serie/page2serie";
 elseif ($division == 210) 
 $adr = "3serie/page3serie";
elseif ($division == 220) 
$adr = "4serie/page4serie";

/* championnats réserves */
 elseif ($division == 230) 
 $adr = "top14/pagetop14";
 elseif ($division == 240) 
 $adr = "nationaleb/pagenationaleb";
 elseif ($division == 250) 
 $adr = "federaleb/pagefederaleb";
 elseif ($division == 260) 
 $adr = "excellenceb/pageexcellenceb";
 elseif ($division == 270) 
 $adr = "reserve/pagereserve";


/* Championnats jeunes*/
elseif ($division == 320) 
 $adr = "belascain/pagebelascain";
 elseif ($division == 325) 
 $adr = "crabos/pagecrabos";
 elseif ($division == 330) 
 $adr = "balandrade/pagebalandrade";
 elseif ($division == 340) 
 $adr = "phliponeau/pagephliponeau";
 elseif ($division == 365) 
 $adr = "gaudermen/pagegaudermen";
 elseif ($division == 360) 
 $adr = "alamercery/pagealamercery";
 elseif ($division == 370) 
 $adr = "teuliere/pageteuliere";






if ($division == 170 and $annee < 2023) $nomDivision  = "Honneur";
if ($division == 180 and $annee < 2023) $nomDivision  = "Promotion";
if ($division == 190 and $annee < 2023) $nomDivision  = "1re S&eacute;rie";

?> 
<table width="100%" border="0" height="30" cellspacing="0">
  <tr valign="top" align="center" bgcolor="#006699"> 
    <td colspan="14" height="28"> <font size="5" color="#FFCC00"><b><?php echo "Championnat de France".' '.$annee.''." : $nomDivision";?></b></font></td>
  </tr>
  <tr valign="top" align="center"> 
	
   <td colspan="10" bgcolor="#EAECEB" height="51"></td>
    <td valign="middle" bgcolor="#EAECEB" height="51" width="5%"><div align="right"> <font size="2" color="#000000"><?php echo "( ".''.$anneemoins.''." )"; ?></font></div></td> 
    <td valign="middle" bgcolor="#EAECEB" height="51" width="19%"> 
      <?php
	
	 
 // Traitement de la borne mini

	if ($anneemoins >='2019')
	  	{
	  	?>
      <a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?annee=<?php echo $anneemoins; ?>&division=<?php echo $division; ?>" target="_top"> 
      <font size="6" color="#FF0000"><b>&lt;&lt;</b></font></a> 
      <?php
	   	}
	  else
	 	 {
	  	?>
      <a href="../../phases_finales/<?php echo $adr; ?>.php?division=<?php echo $division;?>&variable_1=<?php echo $anneemoins;?>" target="_top"> 
      <font size="6" color="#FF0000"><b>&lt;&lt;</b></font></a> 
      <?php
		}
	?>
      <font size="5" color="#EAECEB">znnne</font><font size="5"></font> 
      <?php	  
	

	//traitement de la borne max
if ($anneeplus >= '2019')
	  	{
	  	?>
      <a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?annee=<?php echo $anneeplus; ?>&division=<?php echo $division; ?>" target="_top"> 
      <font size="6" color="#FF0000"><b>&gt;&gt;</b></font></a> 
      <?php
	   	}
	  else
	 	 {
	  	?>
      <a href="../../phases_finales/<?php echo $adr; ?>.php?variable_1=<?php echo $anneeplus;?>" target="_top"> 
      <font size="6" color="#FF0000"><b>&gt;&gt;</b></font></a> 
      <?php
		}
	?>
    </td> 
    <td valign="middle" bgcolor="#EAECEB" height="51" width="4%"><div align="left"><font size="2" color="#000000"><?php echo "( ".''.$anneeplus.''." )"; ?></font></div></td>	  
    <td width="37%" bgcolor="#EAECEB" height="51"></td>
  </tr>
</table>
</html>



 

