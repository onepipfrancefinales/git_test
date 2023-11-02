<table width="90%" border="1" align="center">
  <tr>
    <td class="titre">Finale</td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="3"><?php echo $D1ME;?></td>
  </tr>
  <tr> 
    <td ></td>
    <td class="pts">Pts</td>
    <td class="Ga">GA</td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1001;?></td>
    <td class="quarts2pts"><?php echo $A1001Pts;?></td>
    <td class="coin5pts"><?php echo $A1001;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1002;?></td>
    <td class="quarts2pts"><?php echo $A1002Pts;?></td>
    <td class="coin5pts"><?php echo $A1002;?></td>
  </tr>
</table>
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
</center>