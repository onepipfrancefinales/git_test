  <table width="90%" border="1" align="center" bordercolor="#000000">
    <tr> 
      <td bgcolor="#FFFFFF" height="32"> 
        <div id="titre"> 16me de finale</div>
      </td>
    </tr>
  </table>
  <br>
</div>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
        <?php echo $clubA1601; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1601;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
        <?php echo $clubA1602; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1602; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5" > 
        <?php echo $clubA1603; ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" > 
        <?php echo $A1603; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php echo $clubA1604; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php	echo $A1604; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" > 
        <?php echo $clubA1605; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > 
        <?php echo $A1605;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1606; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php 	echo $A1606; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="11"> 
      <div id="coin5"> 
        <?php echo $clubA1607; ?>
      </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" > 
        <?php echo $A1607; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1608; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php 	echo $A1608;  ?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td height="21" width="62%"> 
      <?php if ($champ <=200)
		{
		?>
      <div id="liensGauche"><a href="32me.php?champ=<?php echo$champ ?>&annee=<?php echo $annee ?>"><font color="#FF0000">&lt;&lt; 
        32me</font></a></div>
		<?php
		}
		elseif ( $champ==210 OR $champ==220)
		{
		?>
      <div id="liensGauche"><a href="barrages.php?champ=<?php echo$champ ?>&annee=<?php echo $annee ?>"><font color="#FF0000">&lt;&lt; 
        Barrages</font></a></div>
		<?php
		}
		else
		{
		echo "";
		}
		?>

    </td>
    <td height="21" width="38%"> 
      <div id="liensDroit"><a href="8me.php?champ=<?php echo $champ ?>&annee=<?php echo $annee ?>"><font color="#FF0000">8me 
        &gt;&gt;</font></a></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin4" >
        <?php echo $clubA1609; ?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin4" >
        <?php echo $A1609;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1610; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1610; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin5">
        <?php echo $clubA1611;?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin5" >
        <?php echo $A1611;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1612; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5">
        <?php echo $A1612; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1613; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1613; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4">
        <?php echo $clubA1614; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1614;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1615; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1615; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1616; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1616; ?>
      </div>
    </td>
  </tr>
</table>
<div align="center"><br>
  <?php	include ("../../pub/pub20.php"); ?>
  <br>
  <br>
</div>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1617; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1617;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1618; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1618; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="25"> 
      <div id="coin5">
        <?php echo $clubA1619; ?>
      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" >
        <?php echo $A1619; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5">
        <?php echo $clubA1620; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1620; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4">
        <?php echo $clubA1621; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1621; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4"  >
        <?php echo $clubA1622; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1622; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%" height="11"> 
      <div id="coin5" >
        <?php echo $clubA1623; ?>
      </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" >
        <?php echo $A1623; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1624; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1624; ?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="62%"> 
	<?php if ($champ <=200)
		{
		?>
      <div id="liensGauche"><a href="32me.php?champ=<?php echo $champ ?>&annee=<?php echo $annee ?>"><font color="#FF0000">&lt;&lt; 
        32me</font></a></div>
		<?php
		}
		elseif ( $champ==210 OR $champ==220)
		{
		?>
      <div id="liensGauche"><a href="barrages.php?champ=<?php echo$champ ?>&annee=<?php echo $annee ?>"><font color="#FF0000">&lt;&lt; 
        Barrages</font></a></div>
		<?php
		}
		else
		{
		echo "";
		}
		?>
      </td>
    <td width="38%"> 
      <div id="liensDroit"><a href="8me.php?champ=<?php echo$champ ?>&annee=<?php echo $annee ?>"><font color="#FF0000">8me &gt;&gt;</font></a></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="76%" height="21"> 
      <div id="coin4" > 
        <?php echo $clubA1625; ?>
      </div>
    </td>
    <td width="21%" height="21"> 
      <div id="coin4" >
        <?php	echo $A1625;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1626; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php	echo $A1626;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" > 
        <?php echo $clubA1627; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1627; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1628; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1628; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1629; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1629; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin4" >
        <?php echo $clubA1630; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin4" >
        <?php echo $A1630;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1631; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1631;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div id="coin5" >
        <?php echo $clubA1632; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5" >
        <?php echo $A1632; ?>
      </div>
    </td>
  </tr>
</table>

