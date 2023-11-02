<table width="90%" border="1" align="center" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" height="32"> 
       
      <div id="titre">Demi finale A/R</div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="394"> </td>
    <td width="93" height="18"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b>Pts</b></font></div>
    </td>
    <td width="101" height="18"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b>GA</b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="21" width="394"> 
      <div id="coin4" > 
	   	<?php echo $clubA2001; ?>
	  </div>
    </td>
    <td width="93" height="21"> 
      <div id="quartspts" > 
        <?php echo $A2001Pts; ?>
      </div>
    </td>
    <td width="101" height="21"> 
      <div id="coin4" >
        <?php echo $A2001; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="394" height="19"> 
      	
      <div id="coin4" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="93" height="19"> 
      <div id="quartspts" > 
        <?php echo $A2002Pts; ?>
      </div>
    </td>
    <td width="101" height="19"> 
      <div id="coin4">
        <?php echo $A2002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td height="3" width="394">&nbsp;</td>
    <td width="93" height="3">&nbsp;</td>
    <td width="101" height="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="6" width="394"> 
      <div id="coin4" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="93" height="6"> 
      <div id="quartspts" > 
        <?php echo $A2003Pts; ?>
      </div>
    </td>
    <td width="101" height="6"> 
      <div id="coin4">
        <?php echo $A2003; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="394"> 
      <div id="coin4"> 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="93"> 
      <div id="quartspts" > 
        <?php echo $A2004Pts; ?>
      </div>
    </td>
    <td width="101"> 
      <div id="coin4" >
        <?php echo $A2004; ?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
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
    <td width="76%">&nbsp; </td>
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
		  <?php  echo $A1001;	?> 
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
	 	 <?php   echo $A1002;?> 
	  </div>
    </td>
  </tr>
</table>
<p align="center"> 
  <?php	require ("../../pub/pub25.php"); ?>
</p>
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
        <?php //echo "<img src=\"$demidivisionLogo\">"; ?>
      </div>
      </td>
  </tr>
  <tr> 
    <td height="26"> 
      <div id="coin5" > 
	   <div id="titre" > 
        <?php 	//echo $champion;  ?>
         </div>
      </div>
      </td>
  </tr>
</table>
<p align="center"> 
  
  <?php	  	 include("../../pub/pub20.php"); ?>
  <br>
  <?php	include ("../bas2.php"); ?>
</p>
<p>&nbsp;</p>
</body>
</html>