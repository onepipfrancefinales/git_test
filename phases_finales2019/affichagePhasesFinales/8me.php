<table width="1200" border="0"  height="500" cellspacing="" align ="center">
  <tr> 
    <td  colspan="12" height="2" bgcolor="#FFCC66"></td>
  </tr>
  <tr> 
    <td class="coin5-32BarrageFed2">
      <?php if (substr($type,0,1)== 7 and $division == 240 and $annee > 2022){?> 
	  <a href="javascript:ouvrirPopup('barrages.php?annee=<?php echo $annee; ?>&division=<?php echo $division+7000;?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=330, height=650, menubar=no')">Barrages accès aux 8me</a>	
	<!--  </a> -->
      <?php } ?>
    </td>
    <td width="31"></td>
    <td width="31"></td>
    <td width="150"></td>
    <td width="31"></td>
    <td width="31"></td>
    <td width="150"></td>
    <td width="31"></td>
    <td width="31"></td>
    <td width="150"></td>
    <td width="31"></td>
    <td width="31"></td>
  </tr>
  <tr> 
    <td class="coin5">8me de finale </td>
    <td colspan ="2"></td>
    <td class="coin5">Quarts de finale </td>
    <td colspan ="2"></td>
    <td class="coin5"> Demi finale </td>
    <td colspan ="2"></td>
    <td class="coin5">Finale </td>
    <td colspan ="2"></td>
  </tr>
  <tr> 
    <td class="dates"><?php echo $D8ME; ?></td>
    <td colspan ="2"></td>
    <td class="dates"><?php echo $D4ME; ?></td>
    <td colspan ="2"></td>
    <td class="dates"><?php echo $D2ME; ?></td>
    <td colspan ="2"></td>
    <td class="dates"><?php echo $D1ME; ?></td>
    <td colspan ="2"></td>
  </tr>
  <tr> 
    <td height="25" colspan="2"></td>
    <td rowspan="8"><img src="../../images/accolade.png" width="8" height="163"></td>
    <td colspan ="9"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8001; ?></td>
    <td class="coin4Pts"><?php	echo $A8001; ?></td>
    <td colspan ="9"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8002;?></td>
    <td class="coin4Pts"><?php echo $A8002; ?></td>
    <td colspan ="2"></td>
    <td rowspan="12"><img src="../../images/accolade.png" width="8" height="236"></td>
    <td colspan ="6"></td>
  </tr>
  <tr> 
    <td colspan ="2"></td>
    <td class="coin4"><?php echo $clubA4001;?></td>
    <td class="coin4Pts"><?php	echo $A4001;?></td>
    <td colspan ="6"></td>
  </tr>
  <tr> 
    <td colspan ="2"></td>
    <td class="coin4"><?php echo $clubA4002;?></td>
    <td class="coin4Pts"><?php	echo $A4002; ?></td>
    <td colspan ="6"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8003;?></td>
    <td class="coin4Pts"><?php	echo $A8003; ?></td>
    <td colspan ="2"></td>
    <td colspan ="6"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8004;?></td>
    <td class="coin4Pts"><?php	echo $A8004; ?></td>
    <td colspan ="2"></td>
    <td colspan ="2"></td>
    <td rowspan="20"><img src="../../images/accolade.png" width="8" height="403"></td>
    <td colspan ="3"></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA2001;?></td>
    <td class="coin4Pts"><?php if ($A2001+$A2002>0) echo $A2001; else	echo "-";?>
    </td>
    <td colspan ="3"></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td rowspan="8"><img src="../../images/accolade.png" width="8" height="163"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php	echo $clubA2002;?></td>
    <td class="coin4Pts"><?php if ($A2001+$A2002>0) echo $A2002; else	echo "-"; ?>
    </td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8005;?></td>
    <td class="coin4Pts"><?php echo $A8005; ?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php	echo $clubA8006;?></td>
    <td class="coin4Pts"><?php echo $A8006; ?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA4003;?></td>
    <td class="coin4Pts"><?php echo $A4003; ?></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA4004;?></td>
    <td class="coin4Pts"><?php echo $A4004; ?></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8007;?></td>
    <td class="coin4Pts"><?php echo $A8007; ?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8008;?></td>
    <td class="coin4Pts"><?php echo $A8008; ?></td>
    <td colspan="5"></td>
    <td class="coin4"><?php echo $clubA1001;?></td>
    <td class="coin4Pts"><?php echo $A1001; ?></td>
    <td  ></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td colspan="5"></td>
    <td class="coin4"><?php	echo $clubA1002;?></td>
    <td class="coin4Pts"><?php echo $A1002; ?></td>
    <td ></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td rowspan="8"><img src="../../images/accolade.png" width="8" height="163"></td>
    <td colspan="5"></td>
    <td ></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8009;?></td>
    <td class="coin4Pts"><?php	echo $A8009; ?></td>
    <td colspan ="5"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8010;?></td>
    <td class="coin4Pts"><?php	echo $A8010; ?></td>
    <td colspan="2"></td>
    <td rowspan="12"  ><img src="../../images/accolade.png" width="8" height="236"></td>
    <td colspan="2"></td>
    <td colspan="3" class="titre">Champion de France <?php echo $annee;?></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA4005;?></td>
    <td class="coin4Pts"><?php echo $A4005; ?></td>
    <td colspan="2"></td>
    <td colspan="3" class="titre"><?php echo $nomDivision;?></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA4006;?></td>
    <td class="coin4Pts"><?php	echo $A4006; ?></td>
    <td colspan="2"></td>
    <td colspan="3" rowspan="7" align="center"><img src="../../images/blasons200_200/<?php echo $idEquipeCourt;?>.gif" width="150" height="150"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php	echo $clubA8011;?></td>
    <td class="coin4Pts"><?php	echo $A8011; ?></td>
    <td colspan="2"></td>
   <td></td>
    <td></td>
	
</tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8012;?></td>
    <td class="coin4Pts"><?php	echo $A8012; ?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA2003;?></td>
    <td class="coin4Pts"><?php if ($A2003+$A2004>0) echo $A2003; else echo "-";?>
    </td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td rowspan="8"><img src="../../images/accolade.png" width="8" height="163"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA2004;?></td>
    <td class="coin4Pts"><?php if ($A2003+$A2004>0) echo $A2004; else echo "-";?>
    </td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8013;?></td>
    <td class="coin4Pts"><?php	echo $A8013; ?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8014;?></td>
    <td class="coin4Pts"><?php	echo $A8014; ?></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA4007;?></td>
    <td class="coin4Pts"><?php	echo $A4007; ?></td>
    <td colspan="3"></td>
	<td colspan="3" rowspan="2" class="champ"><?php echo $champion;?></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA4008;?></td>
    <td class="coin4Pts"><?php	echo $A4008; ?></td>
    <td></td>
    <td></td>
	<td></td> 
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8015; ?></td>
    <td class="coin4Pts"><?php	echo $A8015; ?></td>
    <td colspan="2"  ></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA8016;?></td>
    <td class="coin4Pts"><?php echo $A8016; ?></td>
    <td colspan="9"></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td colspan="9"></td>
  </tr>
  <tr> 
    <td colspan="2" height ="25"></td>
    <td ></td>
    <td colspan="9"></td>
  </tr>
  <tr> 
    <td  colspan="12" height="2" bgcolor="#FFCC66"></td>
  </tr>
</table>
