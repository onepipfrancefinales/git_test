<table width="90%" border="1" align="center">
  <tr> 
    <td class="titre">Barrages<br /><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D4ME; ?></strong></i></b></font></div></td>
  </td>
  </tr>
</table>
<br />
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2"><?php //echo $D4ME;?></td> 
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA4003;?></td>
    <td class="coin4"><?php echo $A4003;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA4004;?></td>
    <td class="coin4"><?php echo $A4004;?></td>
  </tr>
  <tr> 
    <td colspan="2" height="25"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA4007;?></td>
    <td class="coin4"><?php echo $A4007;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA4008;?></td>
    <td class="coin4"><?php echo $A4008;?></td>
  </tr>
</table>
<p align="center"> <?php	include("../../pub/pub20.php");?></p>
<table width="90%" border="1" align="center">
  <tr> 
    <td class="titre">Demi finale<br /><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D2ME; ?></strong></i></b></font></div></td>
  </tr>
</table>
<br />
<table width="90%"  border="0" align="center">
  <tr> 
    <td></td>
    <td width="21%"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA2001;?></td>
    <td class="coin4"><?php echo $A2001;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA2002;?></td>
    <td class="coin4"><?php echo $A2002;?></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA2003;?></td>
    <td class="coin4"><?php echo $A2003;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA2004;?></td>
    <td class="coin4"><?php echo $A2004;?></td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
   <td>&nbsp;</td>
   <td>&nbsp;</td> 
  </tr>
</table>
<p align="center"> 
  <?php	include("../../pub/pub20.php");?>
</p>
<table width="90%"  border="1" align="center">
  <tr>
    <td class="titre">Finale<br /><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D1ME; ?></strong></i></b></font></div></td>
  </td>
  </tr>
</table>
<br />
<table width="90%" border="0" align="center">
  <tr> 
    <td width="79%"></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1001;?></td>
    <td class="coin5"><?php echo $A1001;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1002;?></td>
    <td class="coin5"><?php echo $A1002 ;?></td>
  </tr>
  <tr> 
   <td>&nbsp;</td>
   <td>&nbsp;</td> 
  </tr>
</table>
<table width="90%" border="1" align="center">
  <tr> 
    <td bgcolor="#FF0000" height="32" class="champion">Champion de France <?php echo $annee ;?></td>
  </tr>
</table>
<center>	
<?php

	if (is_numeric($A1001)and is_numeric($A1002))
	{
	$idEquipeCourt = substr($idEquipe,2,7);echo "<br />";
	echo "<img src=\"../../images/blasons200_200/$idEquipeCourt.gif\" height=\"100\" width=\"100\">";
	}
	?>
	<p class="equipeChamp"><?php echo $champion;?></p>
</center><hr />

<?php require 'barrageAccession.php';?>