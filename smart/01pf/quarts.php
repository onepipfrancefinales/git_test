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
		if ($division==150)
		{
		?>
      <div id="liensGauche"><a href="8meAR.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>"> 
        <font color="#FF0000">&lt;&lt; 8me</font></a></div>
		<?php
		}
		else
		{
		?>
      <div id="liensGauche"><a href="8me.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>"> 
        <font color="#FF0000">&lt;&lt; 8me</font></a></div>
		<?php
		}
		?>
    </td>
    <td height="21" width="52%"> 
      <div id="liensDroit"><a href="demi.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>"></a> 
      </div>
    </td>
  </tr>
</table>
<br>
<br>
<p align="center"> 
  <?php include ("../../pub/pub20.php"); ?>
</p>
<br>
