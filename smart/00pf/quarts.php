<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" height="32"> 
      <div id="titre">
	  	Quarts de finale
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
      <div id="coin4" > 
        <?php echo $clubA4001; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > 
        <?php echo $A4001; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
        <?php echo $clubA4002; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > 
        <?php echo $A4002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5"  > 
        <?php echo $clubA4003; ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5"> 
        <?php echo $A4003; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php echo $clubA4004; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > 
        <?php echo $A4004;  ?>
      </div>
    </td>
  </tr>
</table>
<br>
<table width="90%" height="20" border="0" align="center">
  <tr> 
    <td width="76%" height="7"> 
      <div id="coin4" > 
        <?php echo $clubA4005; ?>
      </div>
    </td>
    <td width="21%" height="7"> 
      <div id="coin4" > 
        <?php	echo $A4005; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="2"> 
      <div id="coin4" > 
        <?php echo $clubA4006; ?>
      </div>
    </td>
    <td width="21%" height="2"> 
      <div id="coin4" > 
        <?php echo $A4006;  ?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" height="55" border="0" align="center">
  <tr> 
    <td width="76%" height="2"> 
      <div id="coin5" > 
        <?php echo $clubA4007; ?>
      </div>
    </td>
    <td width="21%" height="2"> 
      <div id="coin5" > 
        <?php echo $A4007; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="2"> 
      <div id="coin5" > 
        <?php echo $clubA4008; ?>
      </div>
    </td>
    <td width="21%" height="2"> 
      <div id="coin5" > 
        <?php echo $A4008; ?>
      </div>
    </td>
  </tr>
</table>
<br>
<table width="90%" border="0" align="center">
  <tr> 
    <td height="21" width="48%"> 
	<?php
		if ($champ==150)
		{
		?>
      <div id="liensGauche"><a href="8meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"> 
        <font color="#FF0000">&lt;&lt; 8me</font></a></div>
		<?php
		}
		else
		{
		?>
      <div id="liensGauche"><a href="8me.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"> 
        <font color="#FF0000">&lt;&lt; 8me</font></a></div>
		<?php
		}
		?>
    </td>
    <td height="21" width="52%"> 
      <div id="liensDroit"><a href="demi.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"></a> 
      </div>
    </td>
  </tr>
</table>
<br>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" height="32"> 
      <div id="titre">
	  	Demi finale
	  </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td>&nbsp;</td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="21"> 
      <div id="coin4" >  
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="25%" height="21"> 
      <div id="coin4" > 
        <?php 	echo $A2001; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4">
        <?php echo $A2002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td height="25">&nbsp;</td>
    <td width="25%" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td height="18"> 
      <div id="coin4" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="25%" height="18"> 
      <div id="coin4">
        <?php 	echo $A2003; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div id="coin4">  
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="25%"> 
      <div id="coin4" > 
        <?php echo $A2004; ?>
      </div>
    </td>
  </tr>
</table>
<br>
<table width="90%" border="0" align="center">
  <tr> 
    <td height="21" width="48%"> 
      <div id="liensGauche"><a href="8me.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"> 
        <?php
		if ($champ==150)
		{
		?>
        </a>
        <div id="liensGauche"><a href="8meAR.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"> 
          <font color="#FF0000">&lt;&lt; 8me</font></a></div>
        <?php
		}
		else
		{
		?>
        <div id="liensGauche"><a href="8me.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"> 
          <font color="#FF0000">&lt;&lt; 8me</font></a></div>
        <?php
		}
		?>
      </div>
    </td>
    <td height="21" width="52%"> 
      <div id="liensDroit"><a href="demi.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>"></a> 
      </div>
    </td>
  </tr>
</table>
<p align="center"> 
  <?php include ("../../pub/pub20.php"); ?>
</p>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr>
    <td bgcolor="#FFFFFF" height="32"> 
      	<div id="titre">
	  		Finale
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
        <?php echo $clubA1001; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > 
        <?php echo $A1001; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1002; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > 
        <?php echo $A1002; ?>
      </div>
    </td>
  </tr>
</table>
<br>
<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FF0000" height="32"> 
      <div id="titre">Champion 
        <?php echo $annee ; ?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td height="14"> 
      <div align="center"> 
        <?php echo "<img src=\"$demiChampLogo\">"; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td height="26"> 
      <div id="coin5" > 
        <div id="titre" > 
          <?php  echo $champion;   ?>
        </div>
      </div>
    </td>
  </tr>
</table>
