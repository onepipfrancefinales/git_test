<table width="900" border="0">
  <tr>
    <td>
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">JUGES DE 
        TOUCHE</font></b></div>
    </td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr valign="middle" bordercolor="#000000"> 
    <td width="163" height="24">
      <div class="TailleGauche">Nom : <span class="Taillebold"> 
        <?php  echo $nomJuge;?>
        </span> </div>
    </td>
    <td width="215" height="24">
      <div class="TailleGauche">Pr&eacute;nom : <span class="Taillebold">
        <?php echo $prenomJuge; ?>
        </span> </div>
    </td>
    <td width="215" height="24"> 
      <div class="TailleGauche">Nom :</div>
    </td>
    <td width="172" height="24"><div class="TailleGauche">Pr&eacute;nom 
      :</div></td>
  </tr>
  <tr valign="middle" bordercolor="#000000"> 
    <td width="163" height="24">
      <div class="TailleGauche">T&eacute;l : </div>
    </td>
    <td width="215" height="24"><div class="TailleGauche">N&deg;licence 
      : 
      <?php  echo substr($licenceJuge,0,4).' '.substr($licenceJuge,4,2).' '.substr($licenceJuge,6,1).' '.substr($licenceJuge,-6);?>
      </div></td>
    <td width="215" height="24">
      <div class="TailleGauche">T&eacute;l : </div>
    </td>
    <td width="172" height="24"><div class="TailleGauche">N&deg;licence 
      :</div></td>
  </tr>
</table>

